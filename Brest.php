<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weather in Brest</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
      .hidden {
            display: none;
        }

      .center-content {
            display: flex;
            justify-content: center;
            flex-direction: column;
            gap: 20px;
            height: 100vh;
            text-align: center;
            margin-top: 50px;
            font-family: Arial, sans-serif;
        }

        #weatherIcon {
            box-shadow: 0 5px 0px rgba(0, 0, 0, 0.5);
        }

        h5, h1, p {
            font-size: 2.5em;
            color: #FFF;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8), 4px 5px 7px rgba(0, 0, 0, 0.6);
        }

        p {
            margin-top: 10px;
        }

        body {
            background-image: url("/Pogoda/images/BrestBlur1.jpg");
            background-position: 0px -70px;
            background-repeat: no-repeat;
            background-size: 100%;
        }

        #loader {
            border: 16px solid #f3f3f3; /* Light grey */
            border-top: 16px solid #3498db; /* Blue */
            border-radius: 50%;
            width: 120px;
            height: 120px;
            animation: spin 2s linear infinite;
            position: fixed;
            top: 75%;
            left: 46.73%;
            transform: translate(-50%, -50%);
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
    <?php include 'Navigation.php';?>
</head>
<body class="hidden">
<header>
    <div id="loader" class="center">
        <div class="loader"></div>
    </div>
</header>
<main>
    <div class="center-content">
        <h5>Погода в Бресте на <p id="datetime"></p></h5>
        <div id="weatherDisplay"></div>
    </div>
</main>
<footer>
    <!-- Футер может быть пустым или содержать ссылки на политику конфиденциальности, контакты и т.д. -->
</footer>
<script>
    const now = new Date();
    const formattedDateTime = now.toLocaleString('ru-RU');
    const ChoppedFormattedTime = formattedDateTime.substring(0, 10);
    document.getElementById('datetime').textContent = ChoppedFormattedTime;

    async function fetchWeather() {
        const spinner = document.getElementById('loader');
        const body = document.body;

        spinner.style.display = 'block'; // Показываем спиннер
        body.classList.remove('hidden'); // Отключаем скрытие страницы

        const city = 'Brest';
        const apiKey = 'b8c9730bedf5721e7000a3f25857ad5c';
        const response = await fetch(`https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&lang=ru`);

        const data = await response.json();

        if (data.cod === '404') {
            document.getElementById('weatherDisplay').innerHTML = 'City not found.';
        } else {
            const temperatureC = Math.round(data.main.temp - 273.15);
            const windSpeed = data.wind.speed;
            const windDirection = data.wind.deg;
            const weatherIcon = data.weather[0].icon;

            document.getElementById('weatherDisplay').innerHTML = `
                <h1>Температура: ${temperatureC}°C</h1>
                <h1>Осадки: ${data.weather[0].description}</h1>
                <h1>Влажность: ${data.main.humidity}%</h1>
                <h1>Скорость ветра: ${windSpeed} м/с</h1>
                <h1>Направление ветра: ${windDirection}°</h1>
                <img id="weatherIcon" src="http://openweathermap.org/img/wn/${weatherIcon}@2x.png" alt="${data.weather[0].description}" />
            `;

            spinner.style.display = 'none'; // Скрываем спиннер после загрузки данных
        }
    }

    window.onload = function() {
        fetchWeather();
    };
</script>
</body>
</html>

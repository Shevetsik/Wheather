<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Прогноз погоды</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }

       .centered-list {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%; 
        }


       .column-container {
            display: flex;
            flex-wrap: wrap; /* Позволяет элементам переноситься на новую строку */
            justify-content: space-around; /* Распределяет элементы равномерно по горизонтали */
        }
        .list-item {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 20px;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1), 0 0 0 2px #000; /* Добавлен второй box-shadow для обводки */
    transition: transform 0.3s ease-in-out;
    background-color: #cfcfcf;
    font-size: 28px;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
    cursor: pointer;
}

.list-item:hover {
    transform: scale(1.05);
}

.list-item a {
    text-decoration: none;
    color: black;
    font-size: 24px;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
    outline: none; /* Убираем стандартное поле для ввода, если оно появляется */
}

        body {
    background-image: 
        url("/Pogoda/images/Belarus.png"), 
        url("/Pogoda/images/BelarusShadow.png"),
        url("/Pogoda/images/Clouds3.png"),
        url("/Pogoda/images/CityBlur.jpg");
    background-position: 
        25px 0px,  
        40px 20px,
        1500px 600px,
        0px 80px;
    background-repeat: 
        no-repeat, 
        no-repeat;
    background-size: 
        45%, 
        45%,
        30%,
        100%;

}




    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script>
        window.onload = function() {
            const links = document.querySelectorAll('.navbar-nav.nav-link');
            const currentUrl = window.location.href;

            links.forEach(function(link) {
                if(link.getAttribute('href') === currentUrl) {
                    link.classList.add("active");
                }
            });
        };
    </script>
</head>
<body>

    <?php  include 'Navigation.php';?>

    <div class="centered-list">
        <div class="column-container"> <!-- Контейнер для колонок -->
            <ul>
                <li class="list-item"><a href="http://mysite.local/Pogoda/Gomel.php">Гомель</a></li>
                <li class="list-item"><a href="http://mysite.local/Pogoda/Brest.php">Брест</a></li>
                <li class="list-item"><a href="http://mysite.local/Pogoda/Mogilew.php">Могилёв</a></li>
            </ul>
        </div>
        <div class="column-container"> <!-- Второй контейнер для колонок -->
            <ul>
                <li class="list-item"><a href="http://mysite.local/Pogoda/Grodno.php">Гродно</a></li>
                <li class="list-item"><a href="http://mysite.local/Pogoda/Vitebsk.php">Витебск</a></li>
                <li class="list-item"><a href="http://mysite.local/Pogoda/Minsk.php">Минск</a></li>
            </ul>
        </div>
    </div>


    
</body>
</html>

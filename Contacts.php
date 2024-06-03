<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Контактная информация</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <?php include 'Navigation.php';?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            background-image: url("/Pogoda/images/Wave1.png"), linear-gradient(to bottom right, rgba(255, 255, 255, 0.7), transparent);
            background-position: -270px 625px;
            background-repeat: no-repeat;
            background-size: 45%;
        }

        p {
            font-size: 1em;
            color: #666;
            line-height: 1.6;
            margin: 20px 0;
        }

        h1 {
            color: #333;
        }

        #content {
            max-width: 560px;
            padding: 20px;
            margin: auto;
        }

       .contact-item {
            font-size: 1.5em;
            color: purple;
            margin-bottom: 15px;
            font-family: 'Roboto', sans-serif;
            margin: auto;
        }

       .contact-item span.text {
            color: black;
            font-size: smaller;
        }
    </style>
</head>
<body>
    <div id="content">
        <h1>Контактная информация</h1>
        <hr style="border-top: 1px solid #ccc;">

        <div class="contact-item"><span>Номер телефона:</span> <span class="text">+375297381807</span></div>
        <div class="contact-item"><span>Vkontakte:</span> <span class="text">id170564746</span></div>
        <div class="contact-item"><span>Telegram:</span> <span class="text">https://t.me/Shevetsik</span></div>
        <div class="contact-item"><span>E-mail:</span> <span class="text">Lelya.shevtsov.02@mail.ru</span></div>
    </div>
</body>
</html>

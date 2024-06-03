<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loading Spinner</title>
    <style>
       .spinner {
            margin: 100px auto;
            width: 40px;
            height: 40px;
            text-align: center;
            line-height: 40px;
            font-size: 10px;
            position: relative;
        }
       .spinner div {
            background-color: #333;
            height: 100%;
            width: 6px;
            display: inline-block;
            -webkit-animation: sk-bouncedelay 1.2s infinite ease-in-out both;
            animation: sk-bouncedelay 1.2s infinite ease-in-out both;
        }
       .spinner.bounce1 {
            -webkit-animation-delay: -0.32s;
            animation-delay: -0.32s;
        }
       .spinner.bounce2 {
            -webkit-animation-delay: -0.16s;
            animation-delay: -0.16s;
        }
        @-webkit-keyframes sk-bouncedelay {
            0%, 80%, 100% { -webkit-transform: scale(0) }
            40% { -webkit-transform: scale(1.0) }
        }
        @keyframes sk-bouncedelay {
            0%, 80%, 100% { 
                transform: scale(0);
                -webkit-transform: scale(0);
            } 40% { 
                transform: scale(1.0);
                -webkit-transform: scale(1.0);
            }
        }
    </style>
</head>
<body>
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
    </div>
</body>
</html>

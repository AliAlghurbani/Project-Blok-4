<!DOCTYPE html>
<html>

<head>
    <title>The page you were looking for doesn't exist (404)</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
        body {
            background-color: #26292E;
            color: #2E2F30;
            font-family: sans-serif;
            margin: 0;
        }

        .image {
            position: absolute;
            float: left;
            top: 0;
            width: 50%;
            height: 100%;
        }

        @media only screen and (max-width: 767px) {
            .image {
                width: 100%;
                top: -50px;
            }

            .container {
                display: flex;
            }

            .dialog {
                float: none;
                text-align: center;
                width: 90%;
                margin-top: 70%
            }
        }
    </style>
</head>

<body>
    <!-- This file lives in public/404.html -->
    <div class="container">
        <img src="images/405.jpg" class="image">
        
    </div>
</body>
<footer><a href="http://www.free404.com" target="_blank">free404.com</a></footer>

</html>
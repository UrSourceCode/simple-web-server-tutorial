<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <style>
        @keyframes twinkle {
            0%, 100% {
                background-color: #f4f4f4;
            }
            50% {
                background-color: #ffe4e1;
            }
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        body {
            font-family: Arial, sans-serif;
            animation: twinkle 3s infinite;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 24px;
            animation: rotate 5s linear infinite;
        }

        img {
            width: 150px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $affiliate = htmlspecialchars($_POST['affiliate']);
            echo "<h1>Hey my name is $name from $affiliate. Nice to meet you!</h1>";
            echo '<img src="https://media.giphy.com/media/26xBwdIuRJiAIqHwA/giphy.gif" alt="Nice to meet you GIF">';
        } else {
            echo "<h1>Invalid request method.</h1>";
        }
        ?>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <style>
        @keyframes twinkle {
            0%, 100% {
                background-color: #ffcccc; /* Light Red */
            }
            20% {
                background-color: #ccffcc; /* Light Green */
            }
            40% {
                background-color: #ccccff; /* Light Blue */
            }
            60% {
                background-color: #ffffcc; /* Light Yellow */
            }
            80% {
                background-color: #e6ccff; /* Light Purple */
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
            echo '<img src="https://media1.tenor.com/m/gqfkUMw6jOQAAAAd/bilei-cat.gif" alt="Nice to meet you GIF">';
        } else {
            echo "<h1>Invalid request method.</h1>";
        }
        ?>
    </div>
</body>
</html>

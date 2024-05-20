<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <style>
        @keyframes twinkle {
            0%, 100% {
                background-color: #ff0000; /* Red */
            }
            20% {
                background-color: #00ff00; /* Green */
            }
            40% {
                background-color: #0000ff; /* Blue */
            }
            60% {
                background-color: #ffff00; /* Yellow */
            }
            80% {
                background-color: #800080; /* Purple */
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
            color: #ff1493;
        }

        .gif {
            position: absolute;
            width: 150px;
            height: auto;
        }

        .gif1 { top: 10%; left: 10%; }
        .gif2 { top: 10%; right: 10%; }
        .gif3 { bottom: 10%; left: 10%; }
        .gif4 { bottom: 10%; right: 10%; }

    </style>
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $affiliate = htmlspecialchars($_POST['affiliate']);
            echo "<h1>Hey my name is $name from $affiliate. Nice to meet you!</h1>";
        } else {
            echo "<h1>Invalid request method.</h1>";
        }
        ?>
    </div>
    <img src="https://media1.tenor.com/m/gqfkUMw6jOQAAAAd/bilei-cat.gif" alt="Nice to meet you GIF" class="gif gif1">
    <img src="https://media1.tenor.com/m/AFwBSEjR5xEAAAAC/dance-dancing.gif" alt="Random GIF 1" class="gif gif2">
    <img src="https://media1.tenor.com/m/yaNqkG8o9UcAAAAC/hhgf.gif" alt="Random GIF 2" class="gif gif3">
    <img src="https://media1.tenor.com/m/csQ5jd2CGPcAAAAd/kiss-blow-kiss.gif" alt="Random GIF 3" class="gif gif4">
</body>
</html>

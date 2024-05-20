<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $affiliate = htmlspecialchars($_POST['affiliate']);
        echo "<h1>Hey my name is $name from $affiliate. Nice to meet you!</h1>";
    } else {
        echo "<h1>Invalid request method.</h1>";
    }
    ?>
</body>
</html>

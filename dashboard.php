<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Welcome, " . $_SESSION['name'];
        echo "Today is: " . date('F d, Y - h:i a');
        echo "Your last visit was: " . $_COOKIE["last_visit"];
    ?>

    <button type="button" onclick="header('Location: logout.php')">[Logout Button]</button>
</body>
</html>
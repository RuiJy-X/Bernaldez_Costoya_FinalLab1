<?php
session_start();
if(isset($_POST["submit"])) {
    $_SESSION["name"] = $_POST["name"];
    setcookie("last_visit", date('F d, Y - h:i a'), time() + 86400);
    header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Name: <input type="text" name="name">
    <input type="submit" name="submit">
</form>
</body>
</html>
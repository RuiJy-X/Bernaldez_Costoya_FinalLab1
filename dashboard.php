<?php
    session_start();
    if (!isset($_SESSION['name'])) {
        header('Location: login.php');
        exit();
    }

    if (isset($_POST['logout'])) {
        header('Location: logout.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2, p{
            margin: 8px;
            padding: 0px;
        }
        body{
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        button{
            margin-top: 16px;
            padding: 8px 16px;
            font-size: 16px;
            background-color:aqua;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2><?php echo "Welcome, " . $_SESSION['name'];?></h2>
    
    <p><?php echo "Today is: " . date('F d, Y - h:i a');?></p>
    <p><?php echo "Your last visit was: " . $_COOKIE["last_visit"];?></p>
    <form method="post">
        <button type="submit" name="logout">Logout Button</button>
    </form>
</body>
</html>
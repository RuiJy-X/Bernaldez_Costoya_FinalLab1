<?php

date_default_timezone_set('Asia/Manila');


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
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 32px;
            border: 1px solid #000090;
            background-color: rgba(0, 50, 255, 0.2);
            width: 300px;
            height: auto;
            margin: auto;
            border-radius: 16px;

        }

        .card h1{
            margin-bottom: 16px;
        }
        
        .form-group{
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            gap: 8px;
            margin-bottom: 16px;
        }
        .form-group input{
            padding: 8px;
            border: 1px solid #000090;
            border-radius: 4px;
        }

        .submit{
            padding: 8px 16px;
            border: none;
            background-color: #000090;
            color: white;
            cursor: pointer;
            border-radius: 4px;
        }


    </style>
</head>
<body>

    <div class="card">
        <h3>
            Login
        </h3>
        <form method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
            </div>
            <input type="submit" name="submit" class="submit">
        </form>
    </div>
</body>
</html>
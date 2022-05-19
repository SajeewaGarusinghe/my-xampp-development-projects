<?php
session_start();
include("connection.php");
include("funtions.php");

$user_data = check_login($con);

echo $user_data['user_name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My website</title>
</head>

<body>

    <a href="logout.php">LOGOUT</a>
    <h1>This is index page</h1>
    <br>
    hello,username.

</body>

</html>
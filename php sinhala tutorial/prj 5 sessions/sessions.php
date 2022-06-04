<?php
session_start();

$_SESSION['user_id'] = 30;
$_SESSION['first_name'] = 'sajewa';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>session </h1>

    <?php
    echo "user id :{$_SESSION['user_id']} <br>and user name : {$_SESSION['first_name']} ";
    ?>
</body>

</html>
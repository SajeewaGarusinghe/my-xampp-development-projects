<?php
require_once('inc/connection.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>home page</h1>

    <img src="img/project.png" alt=""><br>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est optio odit ea nobis sunt id amet delectus dignissimos veniam aspernatur consequatur ut nisi laboriosam, quo cupiditate, quibusdam alias harum et.</p>
    <img src="img/table.png" alt="">
</body>
</html>

<?php
mysqli_close($connection);//to cloe the database connection made earlier

?>
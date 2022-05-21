<?php  require_once('inc/connection.php') ?>

<?php
// -- INSERT INTO TABLE_NAME(COL1,COL2,COL3,ETC) VALUES(VAL1 ,VAL2,VAL3 ,ETC)//INERT DATA TO QUERRY MY SQL COMMAND
//  --
$first_name="samadhi";
$last_name="ashed";
$email="samaddhi@gmail.com";
$password='mypassword12';
$hashed_password=sha1($password);
$is_deleted=0;

$query="INSERT INTO users (first_name,last_name,email,password,is_deleted) VALUES ('{$first_name}','{$last_name}','{$email}','{$hashed_password}',{$is_deleted})";

// data insert to table using following method
$result=mysqli_query($connection,$query);
if($result){
echo 'one record added';
}else{
    echo 'update fail';
}

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
    <h1>insert query</h1>

    <img src="img/project.png" alt=""><br>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est optio odit ea nobis sunt id amet delectus dignissimos veniam aspernatur consequatur ut nisi laboriosam, quo cupiditate, quibusdam alias harum et.</p>
    <img src="img/table.png" alt="">
</body>
</html>

<?php
mysqli_close($connection);//to close the database connection made earlier

?>
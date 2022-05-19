<?php
session_start();

include("connection.php");
include("function.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //SOMTHING WAS POSTED
    $user_name=$_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        //save to database
        $user_id = random_num(20);
        $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
        mysqli_query($con,$query);
        header("Location:login.php");
        die;
    } else {
        echo "Please Enter some valid uer name & Password";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>signup</title>

</head>

<body>

    <div class="box">
        <form method="post" class="my_form">
            <input type="text" name="user_name" placeholder="enter your user name"><br><br>
            <input type="password" name='password' placeholder="password"><br><br>
            <input type="submit" value="signup"><br><br>
            <a href="login.php">click to login</a>


        </form>


    </div>
</body>

</html>
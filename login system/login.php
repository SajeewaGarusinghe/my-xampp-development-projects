<?php
session_start();

include("connection.php");
include("function.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //SOMTHING WAS POSTED
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        //read from database

        $query = "select * from users where user_name=$user_name limit 1";
        $result = mysqli_query($con, $query);

        if ($result) {

            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] == $password) {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location:index.php");
                    //  die;
                }
            }
        }
        echo "wrong uer name or Password";
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
    <title>Login</title>

</head>

<body>

    <div class="box">
        <form method="post" class="my_form">
            <input type="text" name="user_name" placeholder="enter your user name"><br><br>
            <input type="password" name='password' placeholder="password"><br><br>
            <input type="submit" value="login"><br><br>
            <a href="signup.php">click to Signup</a>


        </form>


    </div>
</body>

</html>
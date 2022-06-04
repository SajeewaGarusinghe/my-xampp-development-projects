<?php
if(isset($_POST['submit'])){
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    
    if($user_name=='sajeewa' && $password=='1234'){
    echo 'login successful';
    
    }else{
        echo 'wrong password or usrname';
    }

}
?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login page</h1>
<form action="login.php" method="post">
userName: <input type="text" name="user_name" id=""><br><br>

password:     <input type="password" name="password" id=""><br><br>
<input type="submit" value="Login" name="submit">


</form>

</body>
</html>
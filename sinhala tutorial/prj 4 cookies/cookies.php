

<?php
//setcookie(name,value,expiration);

//setcookie('language','sinhala',time()+60*60*24*7);
//remove cookie >>>setcookie('language','sinhala',time()-60*60*24*7);
//cookie data saved in $_COOKIE super globl variable
if(isset($_COOKIE['language'])){
    $language=$_COOKIE['language'];
    echo "selected language :{$language}";
}else{
    setcookie('language','sinhala',time()+60*60*24*7);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies</title>
</head>
<body>
    <h1>
        cookies
    </h1>
</body>
</html>
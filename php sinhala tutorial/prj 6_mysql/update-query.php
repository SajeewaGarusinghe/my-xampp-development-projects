<?php include_once('inc/connection.php');?>
<?php

// UPDATE users SET email = 'freddy@gmail.com' WHERE id = 2;
$query="UPDATE users SET email = 'freddy@gmail.com' WHERE id = 2";
//delete
//$query="DELETE FROM users WHERE id=2 LIMIT 1";

$result1=mysqli_query($connection,$query);
if($result1){
    echo mysqli_affected_rows($connection);
    //Fetch a result row as an associative array
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update query</title>
</head>
<body >
    <h1>update query</h1>
</body>
</html>

<?php  
mysqli_close($connection);
?>
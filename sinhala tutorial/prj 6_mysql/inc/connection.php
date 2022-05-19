<?php
//mysqli() is used to connect to a mysql database
//mysqli_connect(dbserver,dbuser,dbpass,dbname)
$dbserver='localhost';
$dbuser='root';
$dbpass="";
$dbname='userdb';

$connection=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
//checking the connection
//mysqli_connect_errorno()
//ysqli_connect_error()


if(mysqli_connect_errno()){
echo "connection unsucessful for".mysqli_connect_error();

}else {

    echo 'connected';
}
?>


<?php require_once('inc/connection.php') ?>

<?php
// -- INSERT INTO TABLE_NAME(COL1,COL2,COL3,ETC) VALUES(VAL1 ,VAL2,VAL3 ,ETC)//INERT DATA TO QUERRY MY SQL COMMAND
//  --

//A query is a question or a request for information expressed in a formal manner. In computer science, a query is essentially the same thing, the only difference is the answer or retrieved information comes from a database.

$query = "SELECT first_name,last_name,email,password,is_deleted FROM users";

// data insert to table using following method
$result_set = mysqli_query($connection, $query);
if ($result_set) {
    //check how many records retrieved from table
    echo mysqli_num_rows($result_set);
    //Fetch a result row as an associative array
    $table = '<table>';
    $table .= '<tr>
      <th>firt name</th>
      <th>last name</th>
      <th>password</th>
  </tr>';
    while ($record = mysqli_fetch_assoc($result_set)) {
        $table .= "<tr><td>{$record['first_name']}</td>
                   <td>{$record['last_name']}</td>
                   <td>{$record['password']}</td></tr>";
        $table .= "<br>";
        //print_r($record['first_name']);
    }
} else {
    echo 'incoming fail';
}
$table .= '<table>';
echo $table;
?>

<!DOCTYPE html>r
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{border-collapse: collapse;}
         th,td {border: 1px solid black;
      padding: 20px;
        }
    </style>
</head>

<body>
    <h1>insert query</h1>

    <img src="img/project.png" alt=""><br>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est optio odit ea nobis sunt id amet delectus dignissimos veniam aspernatur consequatur ut nisi laboriosam, quo cupiditate, quibusdam alias harum et.</p>
    <img src="img/table.png" alt="">
</body>

</html>

<?php
mysqli_close($connection); //to close the database connection made earlier

?>
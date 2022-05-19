<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
</head>

<body>
    <h1>News page</h1>

 
    <?php
    $news_item1=$_GET['news_item'];
    $category1=$_GET['category'];

    //echo $news_item1,$category1;

    ?>
   <h2>CAtegory1:<?php echo $category1?></h2>
   <h2>newsitem1:<?php echo $news_item1?></h2>

</body>

</html>
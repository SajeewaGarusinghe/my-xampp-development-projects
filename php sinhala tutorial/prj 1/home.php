<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>

    <h1>Home page</h1>
    <?php
    $news_item = 314;
    $category = urlencode("sports & hobbies");
    $age=34;
    $url = "news.php?news_item={$news_item} &category={$category} &age={$age}";
    ?>
    <a href="<?php echo $url ?>"> Read news item 1 </a>

</body>

</html>
<?php
    require_once('content.php');
    require_once('nav.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $myContent['about']['title']?></title>

    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <?= displayNav($nav);?>
    <h1><?= $myContent['about']['heading']?></h1>
    <p><?= $myContent['about']['content']?></p>
</body>
</html>
<?php 
    require_once('nav.php');    
    require_once('content.php');    
    $first = $_POST['firstname'] ?? 'John';
    $last = $_POST['lastname'] ?? 'Doe';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $myContent['contact']['title']?></title>

    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <?= displayNav($nav);?>
    <h1><?= $myContent['contact']['heading']?></h1>
    <p><?= $myContent['contact']['content']?></p>
    <p><?= 'Hello, ',$first.' '.$last.'!'?></p>

    <section>
        <form action="contact.php" method="post">
        <p>First Name: <input type="text" name="firstname" value="<?= $first?>"></p>
        <p>Last Name: <input type="text" name="lastname" value="<?= $last?>"></p>
        <button type="submit">send</button>
        </form>
    </section>
</body>
</html>
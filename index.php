<?php 
    session_start();
    require_once('conn.php');
    require_once('nav.php');
    require_once('functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php //echoTitle($row);?></title>


    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body> 

    <nav>
        <?php 
        makeNav($conn, $loggedIn);
        if($_SESSION['loggedin'] == 'not logged in'){
            echo $_SESSION['loggedin'];
        }
        ?>
    </nav>


    <?php 
        makeContent($result);
    ?>
    

    <footer>
    </footer>
</body>
</html>

<script>
    document.getElementsByClassName('swoop-right').classList.remove("swoop-right");
</script>
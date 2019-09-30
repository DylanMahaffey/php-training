<?php 
    require_once('conn.php');
    $thisPageName = $_GET['page'] ?? 'Home';

    $sql = "SELECT * FROM test.content WHERE pagename = '$thisPageName'";
    $result = $conn->query($sql);

    $sql = "SELECT * FROM test.content";
    $navResult = $conn->query($sql);

    $row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $row['pagename']?></title>


    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body> 

    <nav>
        <?php 
        echo '<ul>';
            while($item = $navResult->fetch_assoc()){
                echo "<li><a href='http://192.168.33.10?page=".$item['pagename']."'>".$item['pagename']."</a></li>";
            }
            echo '</ul>';
        ?>
    </nav>

    <?php 
        
        echo '<p>' . $row['pagetitle'] . '</p>';
        echo $row['pagecontent'];
        
    ?>
    

</body>
</html>
<?php
function makeNav($conn){
    // This creates the navigation from the navigation table
    $sql = "SELECT pagename, pagetitle FROM test.navigation";
    $navResult = $conn->query($sql);
    echo '<ul>';
    while($item = $navResult->fetch_assoc()){
        echo "<li><a href='http://192.168.33.10/".$item['pagename']."'>".$item['pagetitle']."</a></li>";
    }
    echo "<li><a href='http://192.168.33.10/login.php'>Log In</a></li>";
    echo '</ul>';
}
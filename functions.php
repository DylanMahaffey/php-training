<?php
// $pagename = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);

$uriSegments = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$uriSegments = array_pop($uriSegments);

if(empty($uriSegments)){
    $uriSegments = 'index';
}
$sql = "SELECT * FROM test.content WHERE pagename='$uriSegments'";
$result = $conn->query($sql);
// $row = $result->fetch_assoc();

function makeContent($result){
    /* 
     This creates the content from the content table based on 
     the supplied $thisPageName variable.
     It will then loop through all the matching content 
     records and export those individually 
    */
    while($row = $result->fetch_assoc()){
        echo $row['contenttitle'];
        echo '<section class="content">'.$row['content'].'</section>';
    }
}


// function echoTitle($row){
// // This will echo out the title
//     echo  $row['contenttitle'];
// }
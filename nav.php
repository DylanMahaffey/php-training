<?php
$loggedIn = False;

$nav = array
(
    array('title'=>'HOME', 'link'=>'index.php', 'logged'=>'errbody'),
    array('title'=>'ABOUT', 'link'=>'about.php', 'logged'=>'errbody'),
    array('title'=>'CONTACT', 'link'=>'contact.php', 'logged'=>'errbody'),
    array('title'=>'SECRET', 'link'=>'secret.php', 'logged'=>'loggedin'),
    array('title'=>'SPECIAL', 'link'=>'special.php', 'logged'=>'loggedin')
);

function buildNav($nav){
    $navHtml = '';
    for ( $i = 0; $i < count($nav); $i++ )
    {
        if ( $nav[$i]['logged'] == 'errbody' )
        {
            $navHtml .= '<a class="nav-link" href="'.$nav[$i]['link'].'">'.$nav[$i]['title'].'</a>';
        }
    }

    return $navHtml;
}

function displayNav($nav){

    return '<header class="">
        <a href="https://www.cheese.com/" target="_blank"><img src="https://img.icons8.com/officel/16/000000/cheese.png"></a>
        
        <nav>
        
            '.
            buildNav($nav)
            .'
        
        </nav>
    </header>';
    
}

?>
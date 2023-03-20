<?php
$GLOBALS['conn'] = new mysqli("localhost","root", "", "beautypala");
    if(!$GLOBALS['conn']){
        echo "failed to connect to database";
    }else{
    }
    include "./functions.php";
    define("BASE_URL", "http://localhost/developer/projects/beutyPala");
?>
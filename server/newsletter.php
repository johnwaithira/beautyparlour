<?php
require "./configure.php";
if($_POST){
    echo  checkNewLetterEmail($_POST['newsletter']);
}
else{
    header('Location:'.BASE_URL);
}
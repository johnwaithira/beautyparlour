<?php
require "./configure.php";
if($_POST){
    echo  contactUs($_POST['name'], $_POST['email'], $_POST['message']);
}
else{
    header('Location:'.BASE_URL);
}
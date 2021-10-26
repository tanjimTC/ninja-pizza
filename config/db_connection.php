<?php 
$mysqli = mysqli_connect("localhost", "tanjim", "strongpassword123", "ninja-pizza");

if (!$mysqli){
    echo 'Connection error :'.mysqli_connect_error();
}

?>
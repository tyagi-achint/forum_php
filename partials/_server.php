<?php

$server="localhost";
$username="root";
$password="Joker.321@";
$database ="crowd_canvass";


$con=mysqli_connect($server,$username,$password,$database);

if (!$con){
    die("Could not connect to server" .mysqli_connect_error());
}

?>
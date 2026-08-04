<?php
$server="localhost";
$username="root";
$password="";
$database="firtsdb";

$con=mysqli_connect($server, $username, $password, $database);

if (!$con){
    die("Erro". mysqli_connect_error());
}

?>

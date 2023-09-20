<?php
$server = "localhost";
$user = "root";
$password = "";
$bd = "bot";
$conection=mysqli_connect($server, $user, $password, $bd);
if ($conection->connect_errno) {
    die('No pibe, no se pudo'.$conection->connect_errno);
}
?>
<?php
$host = "localhost";
$user = "root";
$bd = "seguro_db";
$pass = "1234";

$conn = mysqli_connect($host, $user, $pass, $bd);

if(!$conn){
    die ("Conexion muerta");
}
?>

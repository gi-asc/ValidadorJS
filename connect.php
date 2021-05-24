<?php
$user = 'root';
$server = 'localhost';
$senha = '';
$db = 'estudo_db';

$conn = mysqli_connect($server, $user, $senha, $db);
if(!$conn){
die("Ocorreu um erro!");
}
?>
<?php
include_once('./connect.php');
$cript = $_GET['h'];
$dcript =(base64_decode($cript));
$dados = json_decode($dcript, true);
$nome = $dados['nome'];
$email = $dados['email'];
$senha = $dados['senha'];
$queryMail = "SELECT * FROM usuarios WHERE email='$email'";
$test = mysqli_query($conn, $queryMail);
$row_num = mysqli_num_rows($test);
if($row_num>0){
    echo 'usuario já cadastrado';
}else{
    $queryInsert = "INSERT INTO usuarios(nome, email, senha)VALUES('$nome', '$email', '$senha')";
    $inserir = mysqli_query($conn, $queryInsert);
    if(!$inserir)
    echo 'erro ao realizar a inserção';
}
?>
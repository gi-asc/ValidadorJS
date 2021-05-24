<?php
$email = $_POST['email'];
$nome = $_POST['nome'];
$senha = md5($_POST['senha']);
$token = md5(uniqid(rand(), true));
$userDados = array('senha'=>$senha, 'email'=>$email, 'nome'=>$nome, 'token'=>$token);
$strr = json_encode($userDados);
$cd = utf8_encode(base64_encode($strr));
$link = "localhost/projeto1/confirma.php?h= ".$cd;
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: giovanaaraujo3003@gmail.com\r\n"; // remetente
$headers .= "Return-Path: giovanaaraujo3003@gmail.com\r\n"; // return-path
$msg = '<p> Olá, ' .$nome. '.Para confirmar o seu cadastro,<a href="'.$link.'"> clique aqui</p>';
$envio = mail($email, "Confirmação de cadastro", $msg, $headers);
if($envio){
 echo 'sucess';
}
 else{
 echo "A mensagem não pode ser enviada";
 echo $msg;
}
?>
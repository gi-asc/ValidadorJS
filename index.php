<?php
include_once('./connect.php');
$user_mail = $_POST['emailLogin'];
$user_senha = md5($_POST['senhaLogin']);
$buscar_usuario = "SELECT * FROM usuario WHERE email='$user_mail'";
$query = mysqli_query($conn, $buscar_usuario);
if($query){
    $result = mysqli_fetch_array($query);
    $id_ok = $result['id'];
    $mail_ok = $result['email'];
    $senha_ok = $result['senha'];
    if($user_senha === $senha_ok){

    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
</style>
<link href="estilos/style.css" rel="stylesheet">
    <title>Foca aqui!</title>
</head>
<body>
<section class="container">
<h1> Login </h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" id="loginForm">
    <fieldset>
        <div class="campo">
            <label for="emailLogin">E-mail</label><br>
            <input type="text" id="emailLogin" name="emailLogin">
        </div>
        <div class="campo">
            <label for="senhaLogin">Senha</label><br>
            <input type="password" id="senhaLogin" name="senhaLogin">
        </div>
        <button type="submit" id="enviarLogin" disabled name="enviarLogin">Enviar</button>
    </fieldset>
    <ul class="links">
    <li class="forget"><a href="/projeto1/recuperarSenha.php">Esqueci minha senha</a></li>
    <li class="forget"><a href="/projeto1/cadastro.php">Cadastrar</a></li>
    </ul>
</form>
</section>
<script src="scripts/login.js" type="text/javascript"></script>
</body>
</html>
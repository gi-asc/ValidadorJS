<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
</style>
<link href="estilos/style.css" rel="stylesheet">
    <title>Cadastro</title>
</head>
<body>
<section class="container">
<h1> Nova conta</h1>
<form action="enviaemail.php" method="POST" id="cadastroForm">
    <fieldset>
            <div class="campo">
                <label for="nome">Nome</label><br>
                <input type="text" id="nome" name="nome">
            </div>
        <div class="campo">
            <label for="email">E-mail</label><br>
            <input type="text" id="email" name="email">
        </div>
        <div class="campo">
            <label for="senha">Senha</label><br>
            <input type="password" id="senha" name="senha">
            <p>A senha deve conter de 6 a 8 digitos alfanúmericos sendo ao menos 1 número e 1 letra.</p>
        </div>
            <div class="campo">
                <label for="repeteSenha">Repita sua senha</label>
                <br>
                <input type="password" id="repeteSenha" name="repeteSenha">
            </div>
        <button type="submit" id="enviar" disabled name="enviar">Enviar</button>
    </fieldset>
</form>
</section>
<script src="scripts/cadastro.js" type="text/javascript"></script>
</body>
</html>
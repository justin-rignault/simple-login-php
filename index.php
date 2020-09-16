<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css" >
    <title>Login</title>
</head>
<body>
    <section id="main">
        <h1>Login Simples com PHP</h1>
        <form Method="POST">
            <label for="usuario"> Usuário: <input type="text" name="usuario" id="usuario" required></label>
            <label for="senha">Senha:&nbsp;&nbsp;<input type="password" name="senha" id="senha" required></label>
            <input type="submit" name="submit" id="submit" value="Entrar">

        </form>
    </section>

</body>
</html>


<?php 

    if(isset($_POST['submit'])) {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        
        if($usuario == 'rodolfo' && $senha == 'martinez') {
            header("location:home.html");
            exit();
        }
        else 
            echo "<br><p>Senha ou usuário inválido<p>";
    }
    
?>
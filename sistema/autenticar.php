<?php 
    include 'conexao.php';
    @session_start(); // ignora versões em php

    
    $email_login = $_POST['email_login'];
    $senha_login = md5($_POST['senha_login']);

    $result =  $pdo->query("SELECT * from usuarios where email = '$email_login' and senha_crip = '$senha_login'");
    $dados = $result->fetchAll(PDO::FETCH_ASSOC);
    if (count($dados) > 0) {
        $_SESSION['nome_usuario'] = $dados[0]['nome'];
        $_SESSION['email_usuario'] = $dados[0]['email'];
        $_SESSION['cpf_usuario'] = $dados[0]['cpf'];
        $_SESSION['nivel_usuario'] = $dados[0]['nivel'];

        if ($_SESSION['nivel_usuario'] == 'Admin') {
            echo '<h1>Bem vindo administrador</h1>';
        }

        
        if ($_SESSION['nivel_usuario'] == 'Cliente') {
            echo '<h1>Bem vindo Cliente</h1>';
        }

    }


?>
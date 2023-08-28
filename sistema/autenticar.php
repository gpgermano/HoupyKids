<?php 
    include 'conexao.php';
    
    $email_login = $_POST['email_login'];
    $senha_login = md5($_POST['senha_login']);

    $result =  $pdo->query("SELECT * from usuarios where email = '$email_login' and senha_crip = '$senha_login'");
    $dados = $result->fetchAll(PDO::FETCH_ASSOC);
    if (count($dados) > 0) {
        echo 'Usuario Encontrado';
    }


?>
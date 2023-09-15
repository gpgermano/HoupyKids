<?php 
    include '../conexao.php';
    @session_start(); 

    
    $email_login = $_POST['email_login'];
    $senha_login = md5($_POST['senha_login']);

    $result =  $pdo->query("SELECT * from usuarios where (email = '$email_login' or cpf = '$email_login') and senha_crip = '$senha_login'");
    $dados = $result->fetchAll(PDO::FETCH_ASSOC);
    if (count($dados) > 0) {
        @$_SESSION['id_usuario'] = $dados[0]['id_usuario'];
        $_SESSION['nome_usuario'] = $dados[0]['nome'];
        $_SESSION['email_usuario'] = $dados[0]['email'];
        $_SESSION['cpf_usuario'] = $dados[0]['cpf'];
        $_SESSION['nivel_usuario'] = $dados[0]['nivel'];

        if ($_SESSION['nivel_usuario'] == 'Admin') {
            echo "<script language='javascript'> window.location = '../painel-admin/home_admin.php' </script>";
        }

        if ($_SESSION['nivel_usuario'] == 'Cliente') {
            echo "<script language='javascript'> window.location = '../painel-cliente' </script>";
        }

    }else {
        echo "<script language='javascript'> window.alert('Dados Incorretos!') </script>";
        echo "<script language='javascript'> window.location = '../login/login.php' </script>";
    }


?>
<?php
    include '../sistema/conexao.php';
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha_crip = md5($senha);

    if ($nome == "") {
        echo 'Preencha o Campo nome';
        exit();
    }
    if ($cpf == "") {
        echo 'Preencha o Campo CPF';
        exit();
    }
    if ($email == "") {
        echo 'Preencha o Campo email';
        exit();
    }
    if ($senha == "") {
        echo 'Preencha o Campo senha';
        exit();
    }
    if ($senha != $_POST['confirmar-senha']) {
        echo 'as senhas são diferentes!';
        exit();
    }

    //ENVIAR PARA O BANCO DE DADOS 
    $result =  $pdo->query("SELECT * from emails where cpf = '$_POST[cpf]'");
    $dados = $result->fetchAll(PDO::FETCH_ASSOC);
    if (count($dados) == 0) {
        $result =  $pdo->prepare("INSERT INTO emails (nome, cpf, email, senha, senha_crip, nivel) values (:nome, :cpf, :email, :senha, :senha_crip, :nivel)");
    
        $result->bindValue(':nome', $_POST['nome']);
        $result->bindValue(':email', $_POST['email']);
        $result->bindValue(':cpf', $_POST['cpf']);
        $result->bindValue(':senha', $_POST['senha']);
        $result->bindValue(':senha_crip', $_POST['senha_crip']);
        $result->bindValue('nivel', "Cliente");
        $result->execute(); 
    }else {
        echo 'CPF já Cadastrado!';
    }
?>
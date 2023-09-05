<?php
    include '../conexao.php';
    
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email_cadastrado = $_POST['email-cadastrado'];
    $senha = $_POST['senha'];
    $senha_crip = md5($senha);
    $confirmar_Senha = $_POST['confirmar-senha'];

    if ($nome == "") {
        echo 'Preencha o Campo nome';
        exit();
    }
    if ($email_cadastrado == "") {
        echo 'Preencha o Campo email';
        exit();
    }
    if ($cpf == "") { 
        echo 'Preencha o Campo CPF';
        exit();
    }
    if ($senha == "") {
        echo 'Preencha o Campo senha';
        exit();
    }
    if ($senha != $confirmar_Senha) {
        echo 'as senhas são diferentes!';
        exit();
    }

    //ENVIAR PARA O BANCO DE DADOS 
    $result =  $pdo->query("SELECT * from usuarios where cpf = '$_POST[cpf]'");
    $dados = $result->fetchAll(PDO::FETCH_ASSOC);
    if (count($dados) == 0) {
        $result =  $pdo->prepare("INSERT INTO usuarios (nome, cpf, email, senha, senha_crip, nivel) values (:nome, :cpf, :email, :senha, :senha_crip, :nivel)");
    
        $result->bindValue(":nome", $nome);
        $result->bindValue(":email", $email_cadastrado);
        $result->bindValue(":cpf", $cpf);
        $result->bindValue(":senha", $senha);
        $result->bindValue(":senha_crip", $senha_crip );
        $result->bindValue(":nivel", "Cliente");
        $result->execute(); 
       

        $result =  $pdo->prepare("INSERT INTO clientes (nome, cpf, email) values (:nome, :cpf, :email)");
    
        $result->bindValue(":nome", $nome);
        $result->bindValue(":email", $email_cadastrado);
        $result->bindValue(":cpf", $cpf);
        $result->execute();


        $result =  $pdo->query("SELECT * from emails where email = '$email_cadastrado'");
        $dados = $result->fetchAll(PDO::FETCH_ASSOC);
        if (count($dados) == 0) {
            $result =  $pdo->prepare("INSERT INTO emails (nome, email, ativo) values (:nome, :email, :ativo)");
        
            $result->bindValue(':nome', $nome);
            $result->bindValue(':email', $email_cadastrado);
            $result->bindValue(':ativo', "Sim");
            $result->execute(); 
        }

        echo 'Cadastrado com Sucesso!';
    }
    else {
        echo 'CPF já Cadastrado!';
    }
?>
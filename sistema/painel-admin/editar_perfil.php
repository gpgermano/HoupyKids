<?php 
    include '../conexao.php';

    $nome = $_POST['nome-usuario'];
    $email = $_POST['email-usuario'];
    $cpf = $_POST['cpf-usuario']; 
    $senha = $_POST['senha']; 
    $senha_crip = md5($_POST['senha']);
    $confsenha = $_POST['conf-senha'];

    $antigo = $_POST['antigo'];
    $id_usuario = $_POST['txtId'];

    if ($nome == "") {
        echo 'Preencha o campo Nome!';
        exit();
    }
    if ($cpf == "") {
        echo 'Preencha o campo CPF!';
        exit();
    }
    if ($email == "") {
        echo 'Preencha o campo Email!';
        exit();
    }
    if ($senha != $confsenha) {
        echo 'As senhas não coincidem!';
        exit();
    }
    if ($cpf != $antigo) {
        $result =  $pdo->query("SELECT * from usuarios where cpf = '$cpf'");
        $dados = $result->fetchAll(PDO::FETCH_ASSOC);
        if (count($dados) > 0) {
            echo 'CPF já Cadastrado!!';
            exit();
        }
    }

    $res =  $pdo->prepare("UPDATE usuarios SET nome = :nome, cpf = :cpf, email = :email, senha = :senha, senha_crip = :senha_crip WHERE id_usuario = :id_usuario ");
    $res->bindValue(":nome", $nome);
    $res->bindValue(":email", $email);
    $res->bindValue(":cpf", $cpf);
    $res->bindValue(":senha", $senha);
    $res->bindValue(":senha_crip", $senha_crip );
    $res->bindValue(":id_usuario", $id_usuario);
    $res->execute(); 
    echo 'Salvo com Sucesso!';
?>
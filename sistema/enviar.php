<?php 
    include 'conexao.php';

    if ($_POST['nome'] == "") {
        echo 'Preencha o campo Nome';
        exit();
    }
    if ($_POST['email'] == "") {
        echo 'Preencha o campo Email';
        exit();
    }
    if ($_POST['mensagem'] == "") {
        echo 'Preencha o campo Mensagem';
        exit();
    }

    $destinatario = $email;
    $assunto = $nome_loja.' - Email da Loja';

    $mensagem = utf8_decode('Nome: '.$_POST['nome']."\r\n"."\r\n".'Telefone: '.$_POST['telefone']."\r\n"."\r\n".'Mensagem: '."\r\n"."\r\n".$_POST['mensagem']);

    $cabecalhos = "From: ".$_POST['email'];

    mail($destinatario, $assunto, $mensagem, $cabecalhos);

    echo 'Enviado com Sucesso!';


    //ENVIAR PARA O BANCO DE DADOS O EMAIL E NOME DOS CAMPOS
    $result =  $pdo->query("SELECT * from emails where email = '$_POST[email]'");
    $dados = $result->fetchAll(PDO::FETCH_ASSOC);
    if (count($dados) == 0) {
        $result =  $pdo->prepare("INSERT INTO emails (nome, email, ativo) values (:nome, :email, :ativo)");
    
        $result->bindValue(':nome', $_POST['nome']);
        $result->bindValue(':email', $_POST['email']);
        $result->bindValue(':ativo', "Sim");
        $result->execute(); 
    }

    echo $_POST['email'];
?>
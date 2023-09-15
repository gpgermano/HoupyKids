<?php 
    include '../conexao.php';
    include '../config.php';

    $email_rec = $_POST['email_recuperar'];
    

    $result =  $pdo->query("SELECT * from usuarios where email = '$email_rec'");
    $dados = $result->fetchAll(PDO::FETCH_ASSOC);
    
    if(@count($dados) > 0){
        $senha_rec = $dados[0]['senha'];

        $destinatario = $email_rec;
        $assunto = $nome_loja.' - Recuperação de Senha';
        $mensagem = utf8_decode("Sua Senha é $senha_rec");
        $cabecalhos = "From: ".$email_rec;
        mail($destinatario, $assunto, $mensagem, $cabecalhos);

        echo 'Enviado!';
    } else if ($email_rec == "") {
        echo 'Preencha o campo email!';
    } 
    else{
        echo 'Este email não está cadastrado!';
    }

    
?>
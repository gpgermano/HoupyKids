<?php 
    include 'config.php';
    date_default_timezone_set('America/Sao_Paulo'); // caso de alguma diferença de horario do servidor
/*
    $sql = new mysqli ($servidor, $usuario, $senha, $banco);
    // teste de verificação de conexão do banco de dados
    if ($sql->connect_error) {
      die("FAlha de conexação".$sql->connect_error);
    }
*/
    try {
        $pdo = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", "$usuario", "$senha");
    } catch (Exception $e) {
        echo "Erro ao conectar com o banco de dados! ".$e;
    }
?>
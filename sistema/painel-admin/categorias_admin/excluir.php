<?php
    include '../../conexao.php';
    $id = $_POST['id'];
    
    $pdo->query("DELETE FROM categorias WHERE id_categorias = '$id' ");
    
    echo 'Excluido com Sucesso!!';
?>
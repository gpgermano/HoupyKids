<?php
    include '../../conexao.php';
    $id = $_POST['id'];
    
    $pdo->query("DELETE FROM sub_categorias WHERE id_SubCategorias = '$id' ");
    
    echo 'Excluido com Sucesso!!';
?>
<?php 
    include '../../conexao.php';

    $nome = $_POST['nome-cat'];
    $nome_novo = strtolower( preg_replace("[^a-zA-Z0-9-]", "-", 
    strtr(utf8_decode(trim($nome)), utf8_decode("áàãâéêíóôõúüñçÁÀÃÂÉÊÍÓÔÕÚÜÑÇ"),
        "aaaaeeiooouuncAAAAEEIOOOUUNC-")) );
    $nome_url = preg_replace('/[ -]+/', '-', $nome_novo);
    $antigo = $_POST['antigo'];
    $id = $_POST['txtid2'];

    if ($nome == "") {
        echo 'Preencha o campo Nome!';
        exit();
    }

    if ($nome != $antigo) {
        $result =  $pdo->query("SELECT * from sub_categorias where nome = '$nome'");
        $dados = $result->fetchAll(PDO::FETCH_ASSOC);
        if (count($dados) > 0) {
            echo 'Categoria já Cadastrado !!';
            exit();
        }
    }

    $caminho = '../../../imagens/sub-categorias/' .@$_FILES['imagem']['name'];
    if (@$_FILES['imagem']['name'] == ""){
        $imagem = "sem-foto.jpg";
    }else{
        $imagem = @$_FILES['imagem']['name']; 
    }

    $imagem_temp = @$_FILES['imagem']['tmp_name']; 

    $ext = pathinfo($imagem, PATHINFO_EXTENSION);   
    if($ext == 'png' or $ext == 'jpg' or $ext == 'jpeg' or $ext == 'gif' or $ext == 'svg'){ 
        move_uploaded_file($imagem_temp, $caminho);
    }else{
        echo 'Extensão de Imagem não permitida!';
        exit();
    }

    if ($id == "") {
        $res =  $pdo->prepare("INSERT INTO sub_categorias (nome, nome_url, imagem) values (:nome, :nome_url, :imagem)");
        $res->bindValue(":imagem", $imagem);
    } else {
        if ($imagem == "sem-foto.jpg"){
            $res =  $pdo->prepare("UPDATE sub_categorias SET nome = :nome, nome_url = :nome_url WHERE id_subCategoria = :id ");  
        }else {
            $res =  $pdo->prepare("UPDATE sub_categorias SET nome = :nome, nome_url = :nome_url, imagem = :imagem WHERE id_subCategoria = :id ");
            $res->bindValue(":imagem", $imagem);
        }
        $res->bindValue(":id", $id);
    }
    $res->bindValue(":nome", $nome);
    $res->bindValue(":nome_url", $nome_url);
    
    
    
    $res->execute(); 
    echo 'Salvo com Sucesso!!';
?>
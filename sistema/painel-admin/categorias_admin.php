<?php
    $pag = 'categorias_admin';
    include '../conexao.php';
    @session_start();
    if (@$_SESSION['id_usuario'] == null || @$_SESSION['nivel_usuario'] != 'Admin') {
        echo "<script language='javascript> window.laction='../login/login.php'</script>";
    }
?>

<div class="row mt-4 mb-4">
    <a type="button" class="btn-primary btn-sm ml-3 d-none d-md-block" href="home_admin.php?pag=<?php echo $pag ?>&funcao=novo">Nova Categoria</a>
    <a type="button" class="btn-primary btn-sm ml-3 d-block d-sm-none" href="home_admin?pag=<?php echo $pag ?>&funcao=novo">+</a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dtbCategorias" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Itens</th>
                        <th>Imagem</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>

                    <?php 

                   $query = $pdo->query("SELECT * FROM categorias order by id_categorias desc ");
                   $res = $query->fetchAll(PDO::FETCH_ASSOC);

                   for ($i=0; $i < count($res); $i++) { 
                      foreach ($res[$i] as $key => $value) {
                      }
                        $nome = $res[$i]['nome'];
                        $itens = $res[$i]['itens'];
                        $imagens = $res[$i]['imagem'];
                        $id = $res[$i]['id_categorias'];
                        ?>
                    <tr>
                        <td><?php echo $nome ?></td>
                        <td><?php echo $itens ?></td>
                        <td><?php echo $imagens ?></td>

                        <td>
                             <a href="home_admin.php?pag=<?php echo $pag ?>&funcao=editar&id=<?php echo $id ?>" class='text-primary mr-1' title='Editar Registro'><i class='far fa-edit'></i></a>
                            <a href="home_admin.php?pag=<?php echo $pag ?>&funcao=excluir&id=<?php echo $id ?>" class='text-danger mr-1' title='Excluir Registro'><i class='far fa-trash-alt'></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- begin Modal  editar-->
<div class="modal fade" id="mEditar" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <?php 
                if (@$_GET['funcao'] == 'editar') {
                    $titulo = "Editar Registro";
                    $id2 = $_GET['id'];

                    $query = $pdo->query("SELECT * FROM categorias where id_categorias = '" . $id2 . "' ");
                    $res = $query->fetchAll(PDO::FETCH_ASSOC);

                    $nome2 = $res[0]['nome'];
                    $img2 = $res[0]['imagem'];

                } else {
                    $titulo = "Inserir Registro";
                }
                ?>
                
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $titulo ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-img" method="POST">
                <div class="modal-body">

                    <div class="form-group">
                        <label >Nome</label>
                        <input value="<?php echo @$nome2 ?>" type="text" class="form-control" id="nome-cat" name="nome-cat" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <label>Imagem</label>
                        <input type="file" value="<?php echo @$img2 ?>"  class="form-control-file" id="imagem" name="imagem" onchange="carregarImg();">
                    </div>

                    <?php 
                        if (@$img2 != "") { ?>
                            <img src="../../imagens/<?php echo $img2?>" width="200" height="200" id="target">
                    <?php } else {?>
                            <img src="../../imagens/sem-foto.jpg" width="200" height="200" id="target">
                    <?php }?>
                    
                    
                   

                    <small>
                        <div id="mensagem"></div>
                    </small> 

                </div>



                <div class="modal-footer">
                    <input value="<?php echo @$_GET['id_categorias'] ?>" type="hidden" name="txtid2" id="txtid2">
                    <input value="<?php echo @$nome2 ?>" type="hidden" name="antigo" id="antigo">

                    <button type="button" id="btn-fechar" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" name="btn-salvar" id="btn-salvar" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end Modal  editar-->
<?php 
    if (@$_GET["funcao"] != null && @$_GET["funcao"] == "novo") {
    echo "<script>$('#mEditar').modal('show');</script>";
    }
    if (@$_GET["funcao"] != null && @$_GET["funcao"] == "editar") {
        echo "<script>$('#mEditar').modal('show');</script>";
    }
    if (@$_GET["funcao"] != null && @$_GET["funcao"] == "excluir") {
        echo "<script>$('#modal-deletar').modal('show');</script>";
    }
?>
<script src="admin-js/homeadmin.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="../../js/mascara.js"></script>

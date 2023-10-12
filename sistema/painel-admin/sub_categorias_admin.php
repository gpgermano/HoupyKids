<?php
    $pag = 'sub_categorias_admin';
    include '../conexao.php';
    @session_start();
    if (@$_SESSION['id_usuario'] == null || @$_SESSION['nivel_usuario'] != 'Admin') {
        echo "<script language='javascript> window.laction='../login/login.php'</script>";
    }
?>

<div class="row mt-4 mb-4">
    <a type="button" class="btn-primary btn-sm ml-3 d-none d-md-block" href="home_admin.php?pag=<?php echo $pag ?>&funcao=novo">Nova Sub-Categoria</a>
    <a type="button" class="btn-primary btn-sm ml-3 d-block d-sm-none" href="home_admin?pag=<?php echo $pag ?>&funcao=novo">+</a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Produtos</th>
                        <th>Categorias</th>
                        <th>Imagens</th>
                        <th>ações</th>
                    </tr>
                </thead>

                <tbody>

                    <?php 

                   $query = $pdo->query("SELECT * FROM sub_categorias order by id_subCategoria desc ");
                   $res = $query->fetchAll(PDO::FETCH_ASSOC);

                    for ($i=0; $i < count($res); $i++) { 
                      foreach ($res[$i] as $key => $value) {
                      }
                        $id = $res[$i]['id_subCategoria'];
                        $nome = $res[$i]['nome'];
                        $imagens = $res[$i]['imagem'];
                        $itens = $res[$i]['itens'];
                        $categoria = $res[$i]['id_categoria'];
                        ?>
                    <tr>
                        <td><?php echo $nome ?></td>
                        <td><?php echo $categoria ?></td>
                        <td><?php echo $itens ?></td>
                        <td><img src="../../imagens/sub-categorias/<?php echo $imagens?>" width="50"></td>
                        

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
<div class="modal fade" id="mEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <?php 
                if (@$_GET['funcao'] == 'editar') {
                    $titulo = "Editar Registro";
                    $id2 = $_GET['id'];

                    $query = $pdo->query("SELECT * FROM sub_categorias where id_SubCategoria = '".$id2."'");
                    $res = $query->fetchAll(PDO::FETCH_ASSOC);

                    $nome2 = $res[0]['nome'];
                    $img2 = $res[0]['imagem'];
                    $categoria2 = $res[0]['id_categoria'];

                } else {
                    $titulo = "Inserir Registro";
                }
                ?>
                
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $titulo ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-img-categorias" method="POST">
                <div class="modal-body">

                    <div class="form-group">
                        <label>Nome</label>
                        <input value="<?php echo @$nome2 ?>" type="text" class="form-control" id="nome-cat" name="nome-cat" placeholder="Nome">
                    </div>
                    
                    <div class="form-group">
                        <label>Categoria</label>
                        <select class="form-control form-control-sm" name="categoria" id="categoria">
                            <?php
                                if (@$_GET['funcao'] == 'editar') {
                                    $query = $pdo->query("SELECT FROM * categorias where id_categorias = '$categoria2'");
                                    $res = $query->fetchAll(PDO::FETCH_ASSOC);

                                    $nomeCat = $res[0]['nome'];
                                    echo "<option value='.$categoria2.'>".$nomeCat."</option>" ;
                                };
                                $query2 = $pdo->query("SELECT * FROM categorias order by nome asc");
                                $res2 = $query2->fetchAll(PDO::FETCH_ASSOC);

                                for ($i=0; $i < count($res2); $i++) { 
                                    foreach ($res2[$i] as $key => $value) {
                                    }
                                    if ($nomeCat !=  $res2[$i]['nome']) {
                                        echo "<option value='.$res2[$i]['id'].'>".$res2[$i]['nome']."</option>" ;
                                    }
                                }

                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Imagem</label>
                        <input type="file" value="<?php echo @$img2 ?>"  class="form-control-file" id="imagem" name="imagem" onchange="carregarImg();">
                    </div>
                    <?php 
                        if (@$img2 != "") { ?>
                            <img src="../../imagens/sub-categorias/<?php echo $img2?>" width="200" height="200" id="target">
                    <?php } else {?>
                            <img src="../../imagens/sub-categorias/sem-foto.jpg" width="200" height="200" id="target">
                    <?php }?>
                    
                    <small>
                        <div id="mensagem"></div>
                    </small>
                    </div>
                <div class="modal-footer">
                    <input value="<?php echo @$_GET['id'] ?>" type="hidden" name="txtid2" id="txtid2">
                    <input value="<?php echo @$nome2 ?>" type="hidden" name="antigo" id="antigo">

                    <button type="button" id="btn-fechar" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" name="btn-salvar" id="btn-salvar"  class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end Modal  editar-->


<div class="modal" id="modal-deletar" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Excluir Registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Deseja realmente Excluir este Registro?</p>
                <div align="center" id="mensagem_excluir"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btn-cancelar-excluir">Cancelar</button>
                <form method="post">
                    <input type="hidden" id="id" name="id" value="<?php echo @$_GET['id'] ?>" required>
                    <button type="button" id="btn-deletar" name="btn-deletar" class="btn btn-danger">Excluir</button>
                </form>
            </div>
        </div>
    </div>
</div>

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

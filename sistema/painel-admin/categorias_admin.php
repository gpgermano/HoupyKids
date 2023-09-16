<?php
    $pag = 'categorias';
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
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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

                   $query = $pdo->query("SELECT * FROM categorias order by nome asc ");
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
                             <a href="home_admin.php?pag=<?php echo $pag ?>&funcao=editar&id=<?php echo $id ?>" class='text-primary mr-1' title='Editar Dados'><i class='far fa-edit'></i></a>
                            <a href="home_admin.php?pag=<?php echo $pag ?>&funcao=excluir&id=<?php echo $id ?>" class='text-danger mr-1' title='Excluir Registro'><i class='far fa-trash-alt'></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="../../js/mascara.js"></script>
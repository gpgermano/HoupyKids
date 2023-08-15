<?php include '../config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->

	<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<link href="../css/login.css" rel="stylesheet">
	<script src="../js/login.js"></script>
	<link rel="shortcut icon" href="../img/logo-icone.ico" type="image/x-icon">
    <link rel="icon" href="../img/logo-icone.ico" type="image/x-icon">

	<title>Login - <?php echo $nome_loja?></title>
</head>
<body>
    <div class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="myform form ">
					<div class="logo mb-3">
						<div class="col-md-12 text-center">
						<h1>Login</h1>
						</div>
					</div>
                    <form action="" method="post" name="login">
                            <div class="form-group">
                            	<label for="exampleInputEmail1">Email ou CPF</label>
                            	<input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Insira seu Email ou CPF">
                            </div>
                            <div class="form-group">
                            	<label for="exampleInputEmail1">Senha</label>
                            	<input type="password" name="senha" id="senha"  class="form-control" aria-describedby="emailHelp" placeholder="Senha">
                            </div>
                            <div class="col-md-12 text-center mt-4">
                            	<button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
                            </div>
                            <div class="form-group">
								<small>
                            		<p class="text-center">Não possui Cadastro?<a href="#" id="signup" data-toggle="modal" data-target="#modalCadastro">Cadastre-se</a></p>
									<p class="text-center"><a class="text-danger" href="#" id="signup" data-toggle="modal" data-target="#modalRecuperar">Recuperar senha</a></p>
								</small>
                            </div>
                    </form>
				</div>
			</div>
		</div>
    </div>   
         
</body>
</html>

<!-- Modal -->
<div class="modal fade" id="modalCadastro" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal Cadastre-se</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-info">Cadastrar</button>
      </div>
    </div>
  </div>
</div>
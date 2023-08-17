<?php include '../config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.1/jquery.validate.min.js"></script>
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
                            		<p class="text-center">Não possui Cadastro?<a href="#" data-toggle="modal" data-target="#modalCadastro">Cadastre-se</a></p>
									<p class="text-center"><a class="text-danger" href="#" data-toggle="modal" data-target="#modalRecuperar">Recuperar senha</a></p>
								</small>
                            </div>
                    </form>
				</div>
			</div>
		</div>
    </div>   
         
</body>
</html>

<!-- Modal Cadastro begin-->
<div class="modal fade" id="modalCadastro" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Cadastre-se</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post">
					
					<div class="form-group">
						<label for="exampleInputEmail1">Nome Completo</label>
						<input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o nome e sobrenome">
					</div>
					
					<div class="form-group">
						<label for="exampleInputEmail1">Email</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Seu Email">
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1">CPF</label>
						<input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite seu CPF">
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Senha</label>
								<input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua Senha">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Confirmar Senha</label>
								<input type="password" class="form-control" id="confirmar-senha" name="confirmar-senha" placeholder="Confirmar senha">
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
						<button type="button" id="btn-cadastrar" class="btn btn-info">Cadastrar</button>
					</div>
				</div>
			</form>
		</div>
    </div>
</div>
<!-- Modal Cadastro end-->

<!-- Modal Recuperar Senha begin-->
<div class="modal fade" id="modalRecuperar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Recuperar Senha</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post">
					
					<div class="form-group">
						<label for="exampleInputEmail1">Email</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Seu Email">
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
						<button type="button" id="btn-enviar" class="btn btn-info">Recuperar</button>
					</div>
				</div>
			</form>
		</div>
    </div>
</div>
<!-- Modal Recuperar Senha begin-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="js/mascara.js"></script>
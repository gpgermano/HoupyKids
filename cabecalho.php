<?php
  include 'sistema/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Loja de Roupas para crianças de 1 a 10 anos, Femininas">
    <meta name="keywords" content="moda feminina">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $nome_loja ?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <link rel="shortcut icon" href="../img/logo-icone.ico" type="image/x-icon">
    <link rel="icon" href="../img/logo-icone.ico" type="image/x-icon">
</head>
<body>

    <!-- Menu mobile Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="../index.php"><img src="../img/logo.svg" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="carrinho.php"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$160.00</span></div>

            <div class="header__top__right__auth ml-4">
                <a href="sistema/login/login.php"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="../home.php">Inicio</a></li>
                
                <li><a href="#">Produtos</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="lista-produtos.php">Lista de Produtos</a></li> 
                        <li><a href="produtos.php">Camisetas</a></li>
                        <li><a href="produtos.php">Vestidos</a></li>
                        <li><a href="produtos.php">Bermudas</a></li>
                    </ul>
                </li>
                <li><a href="contatos/contatos.php">Contatos</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a target="_blank" href="https://www.instagram.com/Houpykids"><i class="fa fa-instagram text-danger"></i></a>
            <a target="_blank" href="https://wa.me/<?php $whatsapp_link?>?text=Ol%C3%A1,%20gostaria%20de%20um%20or%C3%A7amento!%20" title="<?php echo $whatsapp?>"><i class="fa fa-whatsapp text-success"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> <?php echo $email?></li>
                <li><?php echo $texto_destaque.' <i class="fa fa-heart"></i>'?></li>
            </ul>
        </div>
    </div>
    <!-- Menu mobile End -->

    <!-- Header Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> <?php echo $email?></li>
                                <li><?php echo $texto_destaque?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a target="_blank" title='Pagina Oficial instagram' href="https://www.instagram.com/Houpykids"><i class="fa fa-instagram text-danger"></i></a>
                                <a target="_blank" href="https://wa.me/<?php $whatsapp_link?>?text=Ol%C3%A1,%20gostaria%20de%20um%20or%C3%A7amento!%20" title="<?php echo $whatsapp?>"><i class="fa fa-whatsapp text-success"></i></a>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="sistema/login/login.php"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="index.php"><img src="img/logo.svg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="index.php">Inicio</a></li>
                            <li><a href="#">Produtos</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="lista-produtos.php">Lista de Produtos</a></li> 
                                    <li><a href="produtos.php">Camisetas</a></li>
                                    <li><a href="produtos.php">Vestidos</a></li>
                                    <li><a href="produtos.php">Bermudas</a></li>
                                </ul>
                            </li>
                            <li><a href="contatos.php">Contatos</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="carrinho.php"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header End -->

   
 <!-- Footer Section Begin -->
 <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="../index.php"><img src="../img/logo.svg" alt=""></a>
                        </div>
                        <ul>
                            <li><?php echo $endereco_loja?></li>
                            <li>Telefone: <?php echo $telefone?></li>
                            <li><?php echo $email?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Pricipais Links</h6>
                        <ul>
                            <li><a href="contatos/contatos.php">Contatos</a></li>
                            <li><a href="sobre.php">Sobre</a></li>
                            <li><a href="carrinho/carrinho.php">Carrinho</a></li>
                            <li><a href="produtos/lista-produtos.php">Lista Produtos</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Ainda não possui Cadastro?</h6>
                        <p>Deixe seu email para se cadastrar em nosso site!!</p>
                        <form action="#">
                            <input type="email" placeholder="Insira seu email">
                            <button type="submit" class="site-btn">Cadastre-se</button>
                        </form>
                        <div class="footer__widget__social">
                           <a target="_blank" href="https://www.instagram.com/Houpykids"><i class="fa fa-instagram"></i></a>
                           <a target="_blank" href="https://wa.me/<?php $whatsapp_link?>?text=Ol%C3%A1,%20gostaria%20de%20um%20or%C3%A7amento!%20" title="<?php echo $whatsapp?>"><i class="fa fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p>
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os Produtos são originais | Loja Virtual <i class="fa fa-heart" aria-hidden="true"></i> by <a class="text-info" href="https://www.instagram.com/Houpykids" target="_blank">Loja Oficial HoupyKids</a>
                        </p></div>
                        <div class="footer__copyright__payment"><img src="../img/pagamentos.jpeg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="js/mascara.js"></script>
    
</body>

</html>

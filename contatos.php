<?php include 'cabecalho.php';?>
<?php include 'cabecalho-busca.php' ;?>

    <!-- CONTATOS Begin -->
    <section class="contact spad bg-linght">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span><i class="fa fa-phone"></i></span>
                        <h4>Telefone</h4>
                        <p><?php echo $telefone?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_whatsapp">
                            <a target="_blank" href="https://wa.me/<?php $whatsapp_link?>?text=Ol%C3%A1,%20gostaria%20de%20um%20or%C3%A7amento!%20" title="<?php echo $whatsapp?>"><i class="fa fa-whatsapp text-info"></i></a>
                        </span>
                        <h4>Whatsapp</h4>
                        <p><?php echo $whatsapp?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span><i class="fa fa-history"></i></span>
                        <h4>Horário Atendimento</h4>
                        <p>09:00 ás 19:00</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span><i  class="fa fa-envelope"></i></span>
                        <h4>Email</h4>
                        <p><?php echo $email?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTATOS End -->

    <!-- Map Begin -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3560.85699551434!2d-49.1051706!3d-26.812681700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dee19692d5151d%3A0xfd42b83ea7f3d2d!2sR.%20Severina%20Alves%2C%20250%20-%20Itoupava%20Central%2C%20Blumenau%20-%20SC%2C%2089068-253!5e0!3m2!1spt-BR!2sbr!4v1691013648722!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="map-inside">
            <i class="icon_pin"></i>
            <div class="inside-widget">
                <h4>Blumenau</h4>
                <ul>
                    <li><?php echo $telefone?></li>
                    <li><?php echo $endereco_loja?></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Map End -->

    <!-- Contatos form Cadastro begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Contate-nos</h2>
                    </div>
                </div>
            </div>
            <form method="post">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <input type="text" name="nome" id="nome"placeholder="Seu Nome">
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <input type="text" name="email" id="email"placeholder="Seu Email">
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <input type="text" name="telefone" id="telefone" maxlength="10" placeholder="Seu whatsapp">
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea name="mensagem" id="mensagem" placeholder="Sua message"></textarea>
                        <button name="btn-enviar-email" id="btn-enviar-email" type="button" class="site-btn">Enviar</button>
                    </div>
                    <div class="col-md-12 text-center mt-3 text-info" id="div-mensagem"></div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contatos form Cadastro begin -->

    <?php include 'rodape.php' ?>

    <script type="text/javascript">
        $('#btn-enviar-email').click(function(event){ 
            event.preventDefault();
            $('#div-mensagem').addClass('text-info')
            $('#div-mensagem').removeClass('text-danger')
            $('#div-mensagem').removeClass('text-success')
            $('#div-mensagem').text('Enviando')
            $.ajax({
                url:"sistema/enviar.php",
                method:"post",
                data:$('form').serialize(),
                dataType: "text",
                success: function (msg) {  
                    if (msg.trim() === 'Enviado com Sucesso!') {
                        $('#div-mensagem').removeClass('text-info')
                        $('#div-mensagem').addClass('text-success')
                        $('#div-mensagem').text(msg);
                        $('#email').val('');
                        $('#telefone').val('');
                        $('#nome').val('');
                        $('#mensagem').val('');
                    } 
                    else if(msg.trim() === 'Preencha o campo Nome'){
                        $('#div-mensagem').addClass('text-danger')
                        $('#div-mensagem').text(msg);
                    }
                    else if(msg.trim() === 'Preencha o campo Email'){
                        $('#div-mensagem').addClass('text-danger')
                        $('#div-mensagem').text(msg);
                    } 
                    else if(msg.trim() === 'Preencha o campo Mensagem'){
                        $('#div-mensagem').addClass('text-danger')
                        $('#div-mensagem').text(msg);
                    }
                    else {
                        $('#div-mensagem').addClass('text-danger')
                        $('#div-mensagem').text('Deu Erro ao enviar o Formulário! Provavelmente seu servidor de hospedagem não está com permissão de envio habilitado ou você está em um servidor local');
                       //$('#div-mensagem').text(msg);
                    }
                }
            })
        })
    </script>
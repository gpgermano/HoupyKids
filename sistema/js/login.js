$('#btn-recuperar').click(function(event){ 
    event.preventDefault();
    $.ajax({
        url:"../cadastrar/recuperar.php",
        method:"POST",
        data:$('form').serialize(),
        dataType: "text",
        success: function (msg) {  
            if (msg.trim() === 'Enviado!') {
                $('#div-mensagem-rec').addClass('text-success')
                $('#div-mensagem-rec').text(msg)
            } 
            else if (msg.trim() == 'Preencha o campo email!'){
                $('#div-mensagem-rec').addClass('text-danger')
                $('#div-mensagem-rec').text(msg)
            } 
            else if (msg.trim() == 'Este email não está cadastrado!'){
                $('#div-mensagem-rec').addClass('text-danger')
                $('#div-mensagem-rec').text(msg)
            } 
            else {
                $('#div-mensagem-rec').addClass('text-danger')
                $('#div-mensagem-rec').text('Deu Erro ao enviar o Formulário! Provavelmente seu servidor de hospedagem não está com permissão de envio habilitado ou você está em um servidor local');
            }
        }
    })
})

$('#btn-cadastrar').click(function(event){ 
    event.preventDefault();
    $.ajax({
        url:"../cadastrar/cadastrar.php",
        method:"POST",
        data:$('form').serialize(),
        dataType: "text",
        success: function (msg) {  
            if (msg.trim() === 'Cadastrado com Sucesso!') {
                $('#div-mensagem').addClass('text-success')
                $('#div-mensagem').text(msg)
                $('#btn-fechar-cadastrar').click()
                $('#email_login').val(document.getElementById('email-cadastrado').value) 
                $('#senha_login').val(document.getElementById('senha').value) 
            }
            else {
                $('#div-mensagem').addClass('text-danger')
                $('#div-mensagem').text(msg)
            }
        }
    })
})


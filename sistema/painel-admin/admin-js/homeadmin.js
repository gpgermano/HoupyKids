$('#btn-salvar-perfil').click(function(event){ 
    event.preventDefault();
    $.ajax({
        url:"editar_perfil.php",
        method:"POST",
        data:$('form').serialize(),
        dataType: "text",
        success: function (msg) {  
            if (msg.trim() === 'Salvo com Sucesso!') {
                alert('Alterações realizadas com sucesso')
                $('#btn-fechar-perfil').click()
            }
            else {
                $('#mensagem-perfil').addClass('text-danger')
                $('#mensagem-perfil').text(msg)
            }
        }
    })
})

$(document).ready(function () {
    $('#dataTable').dataTable({
        "ordering": false
    })

});
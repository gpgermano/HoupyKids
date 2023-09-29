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

function carregarImg() {

    var target = document.getElementById('target');
    var file = document.querySelector("input[type=file]").files[0];
    var reader = new FileReader();

    reader.onloadend = function () {
        target.src = reader.result;
    };

    if (file) {
        reader.readAsDataURL(file);
    } else {
        target.src = "";
    }
}

$("form-img-categorias").submit(function () {
    var pag = "sub-categorias";
    event.preventDefault();
    var formData = new FormData(this);

    $.ajax({
        url: pag + "/inserir.php",
        type: 'POST',
        data: formData,

        success: function (mensagem) {

            $('#mensagem').removeClass()

            if (mensagem.trim() == "Salvo com Sucesso!!") {
                $('#btn-fechar').click();
                window.location = "home_admin.php?pag="+pag;

            } else {
                $('#mensagem').addClass('text-danger')
            }
            $('#mensagem').text(mensagem)
        },

        cache: false,
        contentType: false,
        processData: false,
        xhr: function () {  // Custom XMLHttpRequest
            var myXhr = $.ajaxSettings.xhr();
            if (myXhr.upload) { // Avalia se tem suporte a propriedade upload
                myXhr.upload.addEventListener('progress', function () {
                    /* faz alguma coisa durante o progresso do upload */
                }, false);
            }
            return myXhr;
        }
    });
});

//Inserção dos dados
$("#form-img").submit(function () {
    var pag = "categorias_admin";
    event.preventDefault();
    var formData = new FormData(this);

    $.ajax({
        url: pag + "/inserir.php",
        type: 'POST',
        data: formData,

        success: function (mensagem) {

            $('#mensagem').removeClass()

            if (mensagem.trim() == "Salvo com Sucesso!!") {
                $('#btn-fechar').click();
                window.location = "home_admin.php?pag="+pag;

            } else {
                $('#mensagem').addClass('text-danger')
            }
            $('#mensagem').text(mensagem)
        },

        cache: false,
        contentType: false,
        processData: false,
        xhr: function () {  // Custom XMLHttpRequest
            var myXhr = $.ajaxSettings.xhr();
            if (myXhr.upload) { // Avalia se tem suporte a propriedade upload
                myXhr.upload.addEventListener('progress', function () {
                    /* faz alguma coisa durante o progresso do upload */
                }, false);
            }
            return myXhr;
        }
    });
});


//Exclusão dos dados AJAX
$('#btn-deletar').click(function (event) {
    var pags = "categorias_admin";
    event.preventDefault();
    $.ajax({
        url: pags + "/excluir.php",
        method: "POST",
        data: $('form').serialize(),
        dataType: "text",
        success: function (mensagem) {

            if (mensagem.trim() === 'Excluido com Sucesso!!') {
                $('#btn-cancelar-excluir').click();
                window.location = "home_admin.php?pag="+pags;
            }
            $('#mensagem_excluir').text(mensagem)
        }
    })
})

$(document).ready(function() {
    $('#dataTable').DataTable().destroy();
    if (!$.fn.DataTable.isDataTable('#dataTable')) {
        $('#dataTable').DataTable();
    }
});

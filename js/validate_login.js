$(document).ready(function() {
    $( "#forgot" ).on( "click", function() {
        infoAlert('¿Problemas para ingresar?', 'En caso de olvidar la contraseña ó de tener algún problema al ingresar, por favor envíe un correo detallando lo sucedido a'+
        ' <a href="mailto:mrojasmontoya@ina.ac.cr">mrojasmontoya@ina.ac.cr</a>'+
        '<br> y con gusto se le dará respuesta lo antes posible. ');
    });
    
    $("#loginform").submit(function(event) {
        event.preventDefault();
        email_post = $("#emailFrm").val();
        pass_post = $("#passFrm").val();
        $.post('php/login_validate.php', { email: email_post, pass: pass_post })
            .done(function(data) {
                if (data == 1) {
                    window.location.replace("./index.php");
                    return;
                }
                if (data == -1) {
                    $('.error_login').html('El usuario está inactivo, comunícate con el Administrador.'),
                        $('.error_login').removeClass('hidden');
                        return;
                } else {
                    $('.error_login').removeClass('hidden');
                    return;
                }
            });
    });
});
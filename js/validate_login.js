$(document).ready(function() {
    $( "#forgot" ).on( "click", function() {
        infoAlert('Olvide mi contraseña', 'Si no recuerdas, tu contraseña, por favor dirige'+
        ' un correo electrónico, solicitando el cambio de contraseña a la siguiente direccion:'+
        '<br><br> <a href="mailto:olvide@necesitorecobrar.com">olvide@necesitorecobrar.com</a>');
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
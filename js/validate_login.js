$(document).ready(function() {
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
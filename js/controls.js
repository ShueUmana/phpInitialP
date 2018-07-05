/**
 * CONTROL VARIOS 
 * SPINNER, TABLAS LOADS, CONTROL DE MENU ACTIVO
 */
// codigo para actualizar el menu activo
$(document).ready(function() {
    // CONTROL DEL SPINNER
    $(document).ajaxStart(function() {
        $("#wait").css("display", "block");
    });
    $(document).ajaxComplete(function() {
        $("#wait").css("display", "none");
    });
})

// dataTable opciones
$(function() {
    $('#example2').DataTable({
        'paging': true,
        'lengthChange': true,
        'searching': true,
        'ordering': false,
        'info': true,
        'autoWidth': false,
        "scrollX": true
    })
})

/**
 * CONTROL PARA EL LOGOUT
 */
$("#log-out").on("click", function() {
    $.post('php/logout.php')
        .done(function(data) {
            if (data == 1) {
                window.location.replace("./login.php");
            } else {
                console.log("Error al cerrar la Sesión")
            }
        });
});

// post generico, para cargar selects
function loadData(option) {
    if (option == 'instructores') {
        tablasToGet = ["nombramiento", "unidad", "subUnidad"];
    }
    if(option=='subUnidad'){
        tablasToGet = ["unidad"];
    }
    $.each(tablasToGet, function(index, value) {
        $.post('php/load_selects.php', { 'tabla': value })
            .done(function(data) {
                $.each(JSON.parse(data), function(p, v) {
                    $('#' + value).append($('<option>', {
                        value: v.val,
                        text: v.nombre
                    }));
                })
            });
    })

}

/**
 * --------- USUARIOS ---------
 * FUNCIONES PARA CONTROLAR EL CRUD, 
 */
//funcion para borrar usuario
function be_delete_User(id) {
    $.fn.jAlert.defaults.confirmQuestion = '¿Desea eliminar el registro?';
    $.fn.jAlert.defaults.confirmBtnText = 'Si';
    $.fn.jAlert.defaults.denyBtnText = 'No';
    confirm(function(e, btn) { //event + button clicked
        e.preventDefault();
        $.post('php/usuarios/delete_user.php', { id_delete: id })
            .done(function(data) {
                if (data) {
                    successAlert('Control de Datos', 'El registro fue eliminado exitosamente');
                    $('#row-' + id).remove();
                } else {
                    errorAlert('Control de Datos', 'La acción no pudo ser completada');
                }
            });
    }, function(e, btn) {
        e.preventDefault();
    });
}
// funcion para crear nuevo usuario
$("#newUser").submit(function(event) {
    event.preventDefault();
    $.post('php/usuarios/insert_user.php', $('#newUser').serialize())
        .done(function(data) {
            if (data) {
                window.location.replace("index.php?action=usuarios");
            } else {
                errorAlert('Control de Datos', 'La acción no pudo ser completada');
            }
        });
});
// funcion para editar usuario
function be_edit_user(id_edit) {
    $.post('php/usuarios/get_user.php', { id_user: id_edit })
        .done(function(data) {
            dataToEdit = JSON.parse(data);
            $('#user').val(dataToEdit.correo);
            $('#name').val(dataToEdit.nombre);
            $('#status').val(dataToEdit.estado);
            $('#register_id').val(dataToEdit.id_user);
            $('#password').val(dataToEdit.password);
            $('#rol').val(dataToEdit.role);
            $('#optionType').val('update');
            $('#title_new_update').html('Actualizar el registro')
            $('#newRegister').modal('show');
        });
}

/**
 * --------- INSTRUCTORES ---------
 * FUNCIONES PARA CONTROLAR EL CRUD, 
 */
// funcion para crear nuevo usuario
$("#newInstructor").submit(function(event) {
    event.preventDefault();
    $.post('php/instructores/insert_instructor.php', $('#newInstructor').serialize())
        .done(function(data) {
            if (data) {
                window.location.replace("index.php?action=instructores");
            } else {
                errorAlert('Control de Datos', 'La acción no pudo ser completada');
            }
        });
});

//funcion para inactivar instructor
function be_delete_instructor(id) {
    $.fn.jAlert.defaults.confirmQuestion = '¿Desea inactivar el instructor?';
    $.fn.jAlert.defaults.confirmBtnText = 'Si';
    $.fn.jAlert.defaults.denyBtnText = 'No';
    confirm(function(e, btn) { //event + button clicked
        e.preventDefault();
        $.post('php/instructores/delete_instructor.php', { id_inactiva: id })
            .done(function(data) {
                if (data) {
                    successAlert('Control de Datos', 'El registro fue inactivado exitosamente');
                    $('#estado-' + id).addClass("dot_red");
                    $('#estado-' + id).removeClass("dot_green");
                    $('#delete-' + id).remove();
                    
                } else {
                    errorAlert('Control de Datos', 'La acción no pudo ser completada');
                }
            });
    }, function(e, btn) {
        e.preventDefault();
    });
}

// funcion para editar instructor
function be_edit_instructor(id_edit) {
    $.post('php/instructores/get_instructor.php', { id: id_edit })
        .done(function(data) {
            dataToEdit = JSON.parse(data);
            $('#nombre').val(dataToEdit.nombre)
            $('#apellido').val(dataToEdit.apellido)
            $('#cedula').val(dataToEdit.cedula)
            $('#correo').val(dataToEdit.correo)
            $('#telefono1').val(dataToEdit.telefono1)
            $('#telefono2').val(dataToEdit.telefono2)
            $('#residencia').val(dataToEdit.lugar_Residencia)
            $('#ingresoIna').val(dataToEdit.ingreso_Ina)
            $('#nombramiento').val(dataToEdit.tipo_Nombramiento)
            $('#unidad').val(dataToEdit.unidad)
            $('#status').val(dataToEdit.estado)
            $('#subUnidad').val(dataToEdit.subunidad)
            $('#register_id').val(dataToEdit.id)
            $('#optionType').val('update');
            $('#title_new_update').html('Actualizar el registro')
            $('#newRegister').modal('show');
        });
}

/**
 * --------- NOMBRAMIENTOS ---------
 * FUNCIONES PARA CONTROLAR EL CRUD, 
 */
// funcion para crear nuevo nombramiento
$("#newNombramiento").submit(function(event) {
    event.preventDefault();
    $.post('php/nombramientos/insert_nombramiento.php', $('#newNombramiento').serialize())
        .done(function(data) {
            if (data) {
                window.location.replace("index.php?action=nombramientos");
            } else {
                errorAlert('Control de Datos', 'La acción no pudo ser completada');
            }
        });
});

//funcion para inactivar instructor
function be_delete_nombramiento(id) {
    $.fn.jAlert.defaults.confirmQuestion = '¿Desea inactivar el nombramiento?';
    $.fn.jAlert.defaults.confirmBtnText = 'Si';
    $.fn.jAlert.defaults.denyBtnText = 'No';
    confirm(function(e, btn) { //event + button clicked
        e.preventDefault();
        $.post('php/nombramientos/delete_nombramiento.php', { id_inactiva: id })
            .done(function(data) {
                if (data) {
                    successAlert('Control de Datos', 'El registro fue inactivado exitosamente');
                    $('#estado-' + id).addClass("dot_red");
                    $('#estado-' + id).removeClass("dot_green");
                    $('#delete-' + id).remove();
                } else {
                    errorAlert('Control de Datos', 'La acción no pudo ser completada');
                }
            });
    }, function(e, btn) {
        e.preventDefault();
    });
}

// funcion para editar nombramiento
function be_edit_nombramiento(id_edit) {
    $.post('php/nombramientos/get_nombramiento.php', { id: id_edit })
        .done(function(data) {
            dataToEdit = JSON.parse(data);
            $('#nombre').val(dataToEdit.nombre)
            $('#estado').val(dataToEdit.estado)
            $('#register_id').val(dataToEdit.id_nombramiento)
            $('#optionType').val('update');
            $('#title_new_update').html('Actualizar el registro')
            $('#newRegister').modal('show');
        });
}
/**
 * --------- UNIDADES ---------
 * FUNCIONES PARA CONTROLAR EL CRUD, 
 */
// funcion para crear nueva unidad
$("#newUnidad").submit(function(event) {
    event.preventDefault();
    $.post('php/unidades/insert_unidad.php', $('#newUnidad').serialize())
        .done(function(data) {
            if (data) {
                window.location.replace("index.php?action=unidades");
            } else {
                errorAlert('Control de Datos', 'La acción no pudo ser completada');
            }
        });
});

//funcion para inactivar instructor
function be_delete_unidad(id) {
    $.fn.jAlert.defaults.confirmQuestion = '¿Desea inactivar la unidad?';
    $.fn.jAlert.defaults.confirmBtnText = 'Si';
    $.fn.jAlert.defaults.denyBtnText = 'No';
    confirm(function(e, btn) { //event + button clicked
        e.preventDefault();
        $.post('php/unidades/delete_unidad.php', { id_inactiva: id })
            .done(function(data) {
                if (data) {
                    successAlert('Control de Datos', 'El registro fue inactivado exitosamente');
                    $('#estado-' + id).addClass("dot_red");
                    $('#estado-' + id).removeClass("dot_green");
                    $('#delete-' + id).remove();
                } else {
                    errorAlert('Control de Datos', 'La acción no pudo ser completada');
                }
            });
    }, function(e, btn) {
        e.preventDefault();
    });
}

// funcion para editar nombramiento
function be_edit_unidad(id_edit) {
    $.post('php/unidades/get_unidad.php', { id: id_edit })
        .done(function(data) {
            dataToEdit = JSON.parse(data);
            $('#nombre').val(dataToEdit.nombre)
            $('#estado').val(dataToEdit.estado)
            $('#register_id').val(dataToEdit.id_unidad)
            $('#optionType').val('update');
            $('#title_new_update').html('Actualizar el registro')
            $('#newRegister').modal('show');
        });
}
/**
 * --------- SUBUNIDADES ---------
 * FUNCIONES PARA CONTROLAR EL CRUD, 
 */
// funcion para crear nueva subUnidad
$("#newsubUnidad").submit(function(event) {
    event.preventDefault();
    $.post('php/subunidades/insert_subunidad.php', $('#newsubUnidad').serialize())
        .done(function(data) {
            if (data) {
                window.location.replace("index.php?action=subunidades");
            } else {
                errorAlert('Control de Datos', 'La acción no pudo ser completada');
            }
        });
});

//funcion para inactivar instructor
function be_delete_subunidad(id) {
    $.fn.jAlert.defaults.confirmQuestion = '¿Desea inactivar la Sub-unidad?';
    $.fn.jAlert.defaults.confirmBtnText = 'Si';
    $.fn.jAlert.defaults.denyBtnText = 'No';
    confirm(function(e, btn) { //event + button clicked
        e.preventDefault();
        $.post('php/subunidades/delete_subunidad.php', { id_inactiva: id })
            .done(function(data) {
                if (data) {
                    successAlert('Control de Datos', 'El registro fue inactivado exitosamente');
                    $('#estado-' + id).addClass("dot_red");
                    $('#estado-' + id).removeClass("dot_green");
                    $('#delete-' + id).remove();
                } else {
                    errorAlert('Control de Datos', 'La acción no pudo ser completada');
                }
            });
    }, function(e, btn) {
        e.preventDefault();
    });
}

// funcion para editar nombramiento
function be_edit_subunidad(id_edit) {
    $.post('php/subunidades/get_subunidad.php', { id: id_edit })
        .done(function(data) {
            dataToEdit = JSON.parse(data);
            $('#nombre').val(dataToEdit.nombre)
            $('#estado').val(dataToEdit.estado)
            $('#unidad').val(dataToEdit.fk_idUnidad)
            $('#register_id').val(dataToEdit.id_subunidad)
            $('#optionType').val('update');
            $('#title_new_update').html('Actualizar el registro')
            $('#newRegister').modal('show');
        });
}

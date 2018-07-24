<div class="contentWizard">
    <h2 class="text-center font-bold pt-4 pb-5 mb-5">
        <strong>Datos de una capacitación</strong>
    </h2>
</div>
<div class="contentWizard">
    <!-- Stepper -->
    <div class="steps-form-2">
        <div class="steps-row-2 setup-panel-2 d-flex justify-content-between">
            <div class="steps-step-2">
                <a href="#step-1" type="button" class="btn btn-amber btn-circle-2 waves-effect ml-0" data-toggle="tooltip" data-placement="top"
                    title="Informacion de la capacitación">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                </a>
            </div>
            <div class="steps-step-2">
                <a href="#step-2" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top"
                    title="Fechas del Curso">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                </a>
            </div>
            <div class="steps-step-2">
                <a href="#step-3" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top"
                    title="Datos del Instructor">
                    <i class="fa fa-university" aria-hidden="true"></i>
                </a>
            </div>
            <div class="steps-step-2">
                <a href="#step-4" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top"
                    title="Integrantes de la capacitación">
                    <i class="fa fa-users" aria-hidden="true"></i>
                </a>
            </div>
            <div class="steps-step-2">
                <a href="#step-5" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect mr-0" data-toggle="tooltip" data-placement="top"
                    title="Enviar datos">
                    <i class="fa fa-check" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- First Step -->
<form role="form" class="form-horizontal" action="" id="newCapacitacion" name="newCapacitacion" enctype="multipart/form-data">
    <input value="new" name="optionType" id="optionType" class="hidden" type="text">
    <input value="0" name="register_id" id="register_id" class="hidden" type="text">
    <div class="row setup-content-2" id="step-1">
        <div class="col-md-12">
            <h3 class="text-center font-weight-bold pl-0 my-4">
                <strong>Informacion de la capacitación</strong>
            </h3>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Nombre Capacitación:</label>
                <div class="col-sm-6">
                    <input required type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Capacitación">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Lugar:</label>
                <div class="col-sm-6">
                    <input required type="text" class="form-control" id="lugar" name="lugar" placeholder="Lugar donde se imparte">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Solicitante:</label>
                <div class="col-sm-6">
                    <input required type="text" class="form-control" id="solicitante" name="solicitante" placeholder="Persona/Jefatura">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Unidad:</label>
                <div class="col-sm-6">
                    <select onchange="loadSelectChild($('#unidad').val(),'subUnidad')" id="unidad" name="unidad" class="form-control">
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Sub-Unidad:</label>
                <div class="col-sm-6">
                    <select id="subUnidad" name="subUnidad" class="form-control">
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Año:</label>
                <div class="col-sm-6">
                    <input required type="text" class="yearpicker form-control" id="anio" name="anio" placeholder="Año">
                </div>
            </div>
            <div class="form-group">
                <label for="status" class="col-sm-4 control-label">Documento:</label>
                <div class="col-sm-6">
                    <input class="form-control" type="file" name="documento" id="documento">
                </div>
            </div>
            <button class="btn next_right btn-info btn-mdb-color btn-rounded nextBtn-2 next_right" type="button">Siguiente</button>
        </div>
    </div>

    <!-- Second Step -->
    <div class="row setup-content-2" id="step-2">
        <div class="col-md-12">
            <h3 class="text-center font-weight-bold pl-0 my-4">
                <strong>Fechas del Curso</strong>
            </h3>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Fecha solicitud:</label>
                <div class="col-sm-6">
                    <input type="text" class="datepicker form-control" id="fecha_Solicitud" name="fecha_Solicitud" placeholder="Fecha solicitud">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Fecha inicio:</label>
                <div class="col-sm-6">
                    <input type="text" class="datepicker form-control" id="fecha_Inicio" name="fecha_Inicio" placeholder="Fecha inicio">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Fecha finalización:</label>
                <div class="col-sm-6">
                    <input type="text" class="datepicker form-control" id="fecha_Finaliza" name="fecha_Finaliza" placeholder="Fecha finalización">
                </div>
            </div>
            <button class="btn btn-mdb-color btn-rounded nextBtn-2 next_right" type="button">Siguiente</button>
            <button class="btn btn-mdb-color btn-rounded prevBtn-2 prev_left" type="button">Anterior</button>
        </div>
    </div>
    <!-- Second Step -->
    <div class="row setup-content-2" id="step-3">
        <div class="col-md-12">
            <h3 class="text-center font-weight-bold pl-0 my-4">
                <strong>Datos del Instructor</strong>
            </h3>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Instructor:</label>
                <div class="col-sm-6">
                    <select id="instructorSelect" name="instructorSelect" class="form-control select2" style="width: 100%;">

                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Id Encargado:</label>
                <div class="col-sm-6">
                    <input readonly required type="text" class="form-control" id="identificacion_encargado" name="identificacion_encargado" placeholder="Id Encargado">
                </div>
            </div>

            <button class="btn btn-mdb-color btn-rounded nextBtn-2 next_right" type="button">Siguiente</button>
            <button class="btn btn-mdb-color btn-rounded prevBtn-2 prev_left" type="button">Anterior</button>
        </div>
    </div>

    <!-- Third Step -->
    <div class="row setup-content-2" id="step-4">
        <div class="col-md-12">
            <h3 class="text-center font-weight-bold pl-0 my-4">
                <strong>Integrantes de la capacitación</strong>
            </h3>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-12">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="addFile" id='addFile' value="file"> ¿Agregar intregrantes desde archivo?
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group hide" id="input-file">
                <label for="status" class="col-sm-4 control-label">Archivo de integrantes:</label>
                <div class="col-sm-6">
                    <input class="form-control" type="file" name="integrantesFile" id="integrantesFile" accept=".doc,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                </div>
            </div>

            <button class="btn btn-mdb-color btn-rounded nextBtn-2 next_right" type="button">Siguiente</button>
            <button class="btn btn-mdb-color btn-rounded prevBtn-2 prev_left" type="button">Anterior</button>
        </div>
    </div>

    <!-- Fourth Step -->
    <div class="row setup-content-2" id="step-5">
        <div class="col-md-12">
            <h3 class="text-center font-weight-bold pl-0 my-4">
                <strong>¿Listo para enviar datos?</strong>
            </h3>
            <button class="btn btn-mdb-color btn-rounded prevBtn-2 prev_left" type="button">Anterior</button>
            <button class="send text-center btn btn-success btn-rounded next_right" type="submit">Enviar y Guardar</button>
        </div>
    </div>
</form>
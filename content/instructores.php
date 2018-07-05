<?php include("./php/instructores/get_list_instructores.php");?>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Administración y control de instructores</h3>
        <?php if(RO_LE!=-1){ ?>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#newRegister"><i class="fa fa-plus" aria-hidden="true"></i></button>
        <?php }?>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example2" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Telefono 1</th>
                    <th>Lugar Residencia</th>
                    <th>Ingreso Ina</th>
                    <th>Tipo Nombramiento</th>
                    <th>Unidad</th>
                    <th>Sub-Unidad</th>
                    <th>Estado</th>
                    <?php if(RO_LE!=-1){ echo"<th>Opciones</th>";} ?>                                      
                </tr>
            </thead>
            <tbody>
                <?php foreach($resultado as $k){?>
                <tr id="row-<?=$k['id']?>">
                    <td><?=$k['cedula']?></td>
                    <td><?=$k['nombre']?></td>
                    <td><?=$k['correo']?></td>
                    <td><?=$k['telefono1']?></td>
                    <td><?=$k['lugar_Residencia']?></td>      
                    <td><?=$k['ingreso_Ina']?></td>
                    <td><?=$k['nombramiento_nombre']?></td>
                    <td><?=$k['unidad_nombre']?></td>
                    <td><?=$k['subunidad_nombre']?></td>
                    <td><span id="estado-<?=$k['id']?>" class="<?php echo ($k['estado']=='Activo')?'dot_green':'dot_red';?>"></span></td>
                        <?php if((RO_LE!=-1)){ ?>
                            <td>
                                <button type="button" onclick="be_edit_instructor(<?=$k['id']?>)"class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                <?php if($k['estado']!='Inactivo'){?>
                                <button id="delete-<?=$k['id']?>" type="button" onclick="be_delete_instructor(<?=$k['id']?>)"class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                <?php }?>
                            </td>
                        <?php }else{?>
                        <td></td>
                   <?php }?>
                </tr>
                <?php }?>
            </tbody>
            <tfoot>
                <tr>
                   <th>Cedula</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Telefono 1</th>
                    <th>Lugar Residencia</th>
                    <th>Ingreso Ina</th>
                    <th>Tipo Nombramiento</th>
                    <th>Unidad</th>
                    <th>Sub-Unidad</th>
                    <th>Estado</th>
                    <?php if(RO_LE!=-1){ echo"<th>Opciones</th>";} ?>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
<!-- MODAL NEW REGISTER -->
<div class="modal fade" id="newRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <div class="col-md-12 col-lg-12">
        <h5 class="modal-title" id="title_new_update">Nuevo Registro</h5>
        <button type="button" class="closejAlert ja_close ja_close_round" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      </div>
      <form class="form-horizontal" action="" id="newInstructor" name="newInstructor">
      <input value="new" name="optionType" id="optionType" class="hidden" type="text">
      <input value="0" name="register_id" id="register_id" class="hidden" type="text">
        <div class="modal-body">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Cédula:</label>
                    <div class="col-sm-8">
                        <input required type="text" class="form-control" id="cedula" name="cedula" placeholder="Cédula/Id">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Nombre:</label>
                    <div class="col-sm-8">
                        <input required type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                    </div>
                </div>
                <div class="form-group hidden">
                    <label for="inputEmail3" class="col-sm-3 control-label">Apellido:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Correo Electrónico:</label>
                    <div class="col-sm-8">
                        <input  type="email" class="form-control" id="correo" name="correo" placeholder="Correo Electrónico">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Teléfono:</label>
                    <div class="col-sm-8">
                        <input  type="text" class="form-control" id="telefono1" name="telefono1" placeholder="Teléfono 1">
                    </div>
                </div>
                <div class="form-group hidden">
                    <label for="inputEmail3" class="col-sm-3 control-label">Celular: </label>
                    <div class="col-sm-8">
                        <input  type="text" class="form-control" id="telefono2" name="telefono2" placeholder="Teléfono 2">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Residencia:</label>
                    <div class="col-sm-8">
                        <input  type="text" class="form-control" id="residencia" name="residencia" placeholder="Residencia">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Ingreso Ina:</label>
                    <div class="col-sm-8">
                        <input  type="date" class="form-control" id="ingresoIna" name="ingresoIna" placeholder="Ingreso Ina">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Tipo Nombramiento:</label>
                    <div class="col-sm-8">
                        <select  id="nombramiento" name="nombramiento" class="form-control">
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Unidad:</label>
                    <div class="col-sm-8">
                        <select  id="unidad" name="unidad" class="form-control">
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Sub-Unidad:</label>
                    <div class="col-sm-8">
                        <select  id="subUnidad" name="subUnidad" class="form-control">
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label forr="status" class="col-sm-3 control-label">Estado:</label>
                    <div class="col-sm-8">
                        <select  id="status" name="status" class="form-control">
                            <option value="Activo" selected>Activo</option>
                            <option value="Inactivo" >Inactivo</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
$(document).ready(function() {
    loadData("instructores")
});
</script>
<!-- END MODAL NEW REGISTER -->
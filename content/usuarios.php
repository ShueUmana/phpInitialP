<?php include("./php/usuarios/get_list_users.php");?>

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Administración y control de usuarios</h3>
        <?php if(RO_LE!=-1){ ?>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#newRegister"><i class="fa fa-plus" aria-hidden="true"></i></button>
        <?php }?>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive">
        <table id="example2" class="table  table-bordered table-striped">
            <thead>
                <tr>
                    <th>Correo</th>
                    <th>Nombre</th>
                    <th>Rol</th>
                    <th>Fecha Ingreso</th>
                    <th>Estado</th>
                    <th>Fecha Inactivacion</th> 
                    <?php if(RO_LE!=-1){ echo"<th>Opciones</th>";} ?>                                      
                </tr>
            </thead>
            <tbody>
                <?php foreach($resultado as $k){?>
                <tr id="row-<?=$k['id_user']?>">
                    <td><?=$k['correo']?></td>
                    <td><?=$k['nombre']?></td>
                    <td><?=ucfirst($k['role']);?></td>
                    <td><?=$k['fecha_ingreso']?></td>
                    <td><span class="<?php echo ($k['estado']=='Activo')?'dot_green':'dot_red';?>"></span></td>
                    <td><?=$k['fecha_inactivacion']?></td>

                    <?php if($k['correo']!=$_SESSION['correo']){?>
                        <?php if((RO_LE!=-1)){ ?>
                            <td>
                                <button type="button" onclick="be_edit_user(<?=$k['id_user']?>)"class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                <button type="button" onclick="be_delete_User(<?=$k['id_user']?>)"class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </td>
                        <?php }?>
                    <?php }else{ ?>
                        <td></td>
                   <?php }?>
                    
                </tr>
                <?php }?>
            </tbody>
            <tfoot>
                <tr>
                   <th>Correo</th>
                    <th>Nombre</th>
                    <th>Rol</th>
                    <th>Fecha Ingreso</th>
                    <th>Estado</th>
                    <th>Fecha Inactivacion</th>
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
      <form class="form-horizontal" action="" id="newUser" name="newUser">
      <input value="new" name="optionType" id="optionType" class="hidden" type="text">
      <input value="0" name="register_id" id="register_id" class="hidden" type="text">
        <div class="modal-body">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Correo:</label>
                        <div class="col-sm-10">
                            <input required type="email" class="form-control" id="user" name="user" placeholder="Correo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Nombre:</label>
                        <div class="col-sm-10">
                            <input required type="text" class="form-control" id="name" name="name" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Contraseña:</label>
                        <div class="col-sm-10">
                            <input required type="text" class="form-control" name="password" id="password" placeholder="Contraseña">
                        </div>
                    </div>
                    <div class="form-group">
                    <label forr="status" class="col-sm-2 control-label">Estado:</label>
                    <div class="col-sm-10">
                        <select required id="status" name="status" class="form-control">
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group">
                    <label forr="rol" class="col-sm-2 control-label">Rol:</label>
                    <div class="col-sm-10">
                        <select required id="rol" name="rol" class="form-control">
                            <option value="administrador">Administrador</option>
                            <option value="lector">Lector</option>
                            <option value="editor">Editor</option>
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
<!-- END MODAL NEW REGISTER -->
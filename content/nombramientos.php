<?php include("./php/nombramientos/get_list_nombramientos.php");?>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Administración y control de nombramientos</h3>
        <?php if(RO_LE!=-1){ ?>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#newRegister"><i class="fa fa-plus" aria-hidden="true"></i></button>
        <?php }?>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example2" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <?php if(RO_LE!=-1){ echo"<th>Opciones</th>";} ?>                                      
                </tr>
            </thead>
            <tbody>
                <?php foreach($resultado as $k){?>
                <tr id="row-<?=$k['id_nombramiento']?>">
                    <td><?=$k['nombre']?></td>
                    <td><span id="estado-<?=$k['id_nombramiento']?>" class="<?php echo ($k['estado']=='Activo')?'dot_green':'dot_red';?>"></span></td>  
                    <?php if((RO_LE!=-1)){ ?>
                        <td>
                            <button type="button" onclick="be_edit_nombramiento(<?=$k['id_nombramiento']?>)"class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                            <?php if($k['estado']!='Inactivo'){?>
                            <button id="delete-<?=$k['id_nombramiento']?>" type="button" onclick="be_delete_nombramiento(<?=$k['id_nombramiento']?>)"class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
                    <th>Nombre</th>
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
      <form class="form-horizontal" action="" id="newNombramiento" name="newNombramiento">
      <input value="new" name="optionType" id="optionType" class="hidden" type="text">
      <input value="0" name="register_id" id="register_id" class="hidden" type="text">
        <div class="modal-body">
            <div class="box-body">
                <div class="form-group">
                    <label for="nombre" class="col-sm-3 control-label">Nobre:</label>
                    <div class="col-sm-8">
                        <input required type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                    </div>
                </div>            
                <div class="form-group">
                    <label for="estado" class="col-sm-3 control-label">Estado:</label>
                    <div class="col-sm-8">
                        <select required id="estado" name="estado" class="form-control">
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
<!-- END MODAL NEW REGISTER -->
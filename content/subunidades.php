<?php include("./php/subunidades/get_list_subunidades.php");?>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Administración y control de Subunidades</h3>
        <?php if(RO_LE!=-1){ ?>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#newRegister"><i class="fa fa-plus" aria-hidden="true"></i></button>
        <?php }?>
        
    </div>
    <div class="box-header">
    <h4 class="box-title">Regresar a Unidades</h4>
        <?php if(RO_LE!=-1){ ?>
            <a href="?action=unidades" class="btn btn-info" ><i class="fa fa-arrow-left"></i></a>
        <?php }?>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example2" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Unidad asignada</th>
                    <th>Estado</th>
                    <?php if(RO_LE!=-1){ echo"<th>Opciones</th>";} ?>                                      
                </tr>
            </thead>
            <tbody>
                <?php foreach($resultado as $k){?>
                <tr id="row-<?=$k['id_subunidad']?>">
                    <td><?=$k['nombre']?></td>
                    <td><?=$k['unidad']?></td>
                    <td><span id="estado-<?=$k['id_subunidad']?>" class="<?php echo ($k['estado']=='Activo')?'dot_green':'dot_red';?>"></span></td>  
                    <?php if((RO_LE!=-1)){ ?>
                        <td>
                            <button type="button" onclick="be_edit_subunidad(<?=$k['id_subunidad']?>)"class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                            <?php if($k['estado']!='Inactivo'){?>
                            <button id="delete-<?=$k['id_subunidad']?>" type="button" onclick="be_delete_subunidad(<?=$k['id_subunidad']?>)"class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
                    <th>Unidad asignada</th>
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
      <form class="form-horizontal" action="" id="newsubUnidad" name="newsubUnidad">
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
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Unidad:</label>
                    <div class="col-sm-8">
                        <select  id="unidad" name="unidad" class="form-control">
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
    loadData("subUnidad")
});
</script>
<!-- END MODAL NEW REGISTER -->
<?php include("./php/capacitaciones/get_list_capacitaciones.php");?>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Administración y control de capacitaciones</h3>
        <?php if(RO_LE!=-1){ ?>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#newRegister"><i class="fa fa-plus" aria-hidden="true"></i></button>
        <?php }?>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example2" class="table table-bordered table-striped full-lengt">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Finalización</th>
                    <th>Encargado</th>
                    <?php if(RO_LE!=-1){ echo"<th>Opciones</th>";} ?>                                      
                </tr>
            </thead>
            <tbody>
                <?php foreach($resultado as $k){?>
                <tr id="row-<?=$k['id_capacitacion']?>">
                    <td><?=$k['nombre']?></td>
                    <td><?=$k['fecha_Inicio']?></td>
                    <td><?=$k['fecha_Finaliza']?></td>
                    <td><?=$k['instructor']?></td>
                        <?php if((RO_LE!=-1)){ ?>
                            <td>
                                <button id="data-<?=$k['id_capacitacion']?>" type="button" onclick="be_show_capacitacion(<?=$k['id_capacitacion']?>)"class="btn btn-warning"><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                                <button id="list-<?=$k['id_capacitacion']?>" type="button" onclick="be_list_instructores(<?=$k['id_capacitacion']?>)"class="btn btn-dark"><i class="fa fa-users" aria-hidden="true"></i></button>
                                <button type="button" onclick="be_edit_capacitacion(<?=$k['id_capacitacion']?>)"class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                <button id="delete-<?=$k['id_capacitacion']?>" type="button" onclick="be_delete_capacitacion(<?=$k['id_capacitacion']?>)"class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </td> 
                        <?php }?>
                </tr>
                <?php }?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Nombre</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Finalización</th>
                    <th>Encargado</th>
                    <?php if(RO_LE!=-1){ echo"<th>Opciones</th>";} ?>    
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
<?php include('modalCapacitaciones/editar_capacitacion.php')?>
<?php include('modalCapacitaciones/lista_usuarios.php')?>
<?php include("modalCapacitaciones/ver_info.php"); ?>
<script>
$(document).ready(function() {
    loadData("instructores");
    setTimeout(function(){
        loadSelectChild($('#unidad').val(),'subUnidad');
    }, 4500);
});
</script>

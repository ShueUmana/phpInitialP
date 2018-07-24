<?php include("./php/reportes/get_historial.php");?>

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Historial de Capacitaciones </h3>
        <?php if(RO_LE!=-1){ ?>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#newRegister"><i class="fa fa-plus" aria-hidden="true"></i></button>
        <?php }?>
    </div>
    <!-- /.box-header -->
    <div class="box-body ">
    <table id="example2" class="table table-bordered table-striped full-lengt">
            <thead>
                <tr>
                    <th>Nombre Capacitación</th>
                    <th>Año</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Finalización</th>
                    <th>Nombre Alumno</th>
                    <th>Cédula</th> 
                    <th>Estado</th> 
                </tr>
            </thead>
            <tbody>
                <?php foreach($resultado as $k){?>
                <tr id="row-<?=$k['id_user']?>">
                    <td><?=$k['curso']?></td>
                    <td><?=date('Y',strtotime($k['anio']))?></td>
                    <td><?=$k['fecha_Inicio']?></td>
                    <td><?=$k['fecha_Finaliza']?></td>
                    <td><?=$k['nombre']?></td>              
                    <td><?=$k['cedula']?></td>              
                    <td><span class="<?php echo ($k['estado']=='Activo')?'dot_green':'dot_red';?>"></span></td>
                </tr>
                <?php }?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Nombre Capacitación</th>
                    <th>Año</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Finalización</th>
                    <th>Nombre Alumno</th>
                    <th>Cédula</th> 
                    <th>Estado</th> 
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->

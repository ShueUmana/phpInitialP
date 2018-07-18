<!-- MODAL NEW REGISTER -->
<div class="modal fade" id="listInstructores" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <div class="col-md-12 col-lg-12">
        <h5 class="modal-title" id="title_new_update">Integrantes de la capacitación</h5>
        <button type="button" class="closejAlert ja_close ja_close_round" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      </div>
        <div class="modal-body">
        <div class="box-body">
        <table id="example2" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <?php if (RO_LE != -1) {
                        echo "<th>Opciones</th>";
                    } ?>                                      
                </tr>
            </thead>
            <tbody id='content_list'>
                    <!-- INSERT DINAMIC CODE-->
            </tbody>
            <tfoot>
                <tr>
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <?php if (RO_LE != -1) {
                        echo "<th>Opciones</th>";
                    } ?>    
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.box-body -->
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
  </div>
</div>
<!-- END MODAL NEW REGISTER -->













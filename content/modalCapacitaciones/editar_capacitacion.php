<!-- MODAL NEW REGISTER -->
<div class="modal fade" id="newRegister" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      <form class="form-horizontal" action="" id="newCapacitacion" name="newCapacitacion" enctype="multipart/form-data">
      <input value="new" name="optionType" id="optionType" class="hidden" type="text">
      <input value="0" name="register_id" id="register_id" class="hidden" type="text">
        <div class="modal-body">
            <div class="box-body">
                <?php include('formWizard.php');?>
            </div>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
    $(document).ready(function() {
        loadInstructores();
    });
</script>
<!-- END MODAL NEW REGISTER -->
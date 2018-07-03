
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?=(isset($_GET["action"])) ? ucfirst($_GET["action"]) : "Inicio"?>
      <small>
        <?=(isset($_GET["sub"])) ? ucfirst($_GET["sub"]) : ""?>
      </small>
    </h1>
    <!--########### CONTROL DE BREAD CRUMBS ############-->
    <ol class="breadcrumb">
      <?php if(isset($_GET['action'])){ ?>
      <li><a href="./"><i class="fa fa-home"></i> Inicio</a></li>
      <?php }?> 
      <?php if(isset($_GET['action'])){ ?>
        <li><a href="#"><?=ucfirst($_GET['action']);?></a></li>
      <?php }?> 
      <?php if(isset($_GET['sub'])){?>
        <li class="active"><?=ucfirst($_GET['sub']);?></li>
      <?php }?>
    </ol>
    <!--####### END  CONTROL DE BREAD CRUMBS ############-->
  </section>

  <!-- Main content -->
  <section class="content">
    <?php
      if(!isset($_GET["action"])){
        include("inicio.php");
      }else{
        if (file_exists("./content/".$_GET['action'].".php")) {
          require($_GET["action"].'.php');
        } else {
            require("404.php");
        }
      }
    ?>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

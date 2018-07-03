<? if($_SESSION['role']=='administrador'){
}?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        <!-- ####################  -->
        <!-- INICIO / HOME  -->
        <!-- ####################  -->
        <li class="" id="inicio">
          <a href="./">
            <i class="fa fa-home"></i> <span>Inicio</span>
          </a>
        </li>
        <!-- ####################  -->
        <!--  PROFESORES  -->
        <!-- ####################  -->
        <li class="" id="instructores">
          <a href="index.php?action=instructores">
            <i class="fa fa-university"></i> <span>Instructores</span>
          </a>
        </li>
        <!-- ##################  -->
        <!--  Cursos  -->
        <!-- ##################  -->
        <li class="" id="capacitaciones">
          <a href="index.php?action=capacitaciones">
            <i class="fa fa-graduation-cap"></i> <span>Capacitaciones</span>
          </a>
        </li>
        
        <!-- ##################  -->
        <!--  USUARIOS  -->
        <!-- ##################  -->
        <li class="" id="usuarios">
            <a href="index.php?action=usuarios">
            <i class="fa fa-user"></i> <span>Usuarios</span>
            </a>
        </li>
        <!-- ##################  -->
        <!--  Unidades  -->
        <!-- ##################  -->
        <li class="" id="unidades">
            <a href="index.php?action=unidades">
            <i class="fa fa-code-fork"></i> <span>Unidades</span>
            </a>
        </li>
        <!-- ##################  -->
        <!--  Nombramientos  -->
        <!-- ##################  -->
        <li class="" id="nombramientos">
            <a href="index.php?action=nombramientos">
            <i class="fa fa-bullhorn"></i> <span>Nombramientos</span>
            </a>
        </li>
        <!-- ##################  -->
        <!--  Reportes  -->
        <!-- ##################  -->
        <li class="" id="reportes">
            <a href="index.php?action=reportes">
            <i class="fa fa-bar-chart"></i> <span>Reportes</span>
            </a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  

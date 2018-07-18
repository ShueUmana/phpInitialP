<?php
    include("../../php/db_conn.php");
    $sql = "update instructores SET estado = 'Inactivo', fecha_inactivacion=now() WHERE id=".$_POST['id_inactiva'];
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo true;
   } else {
      echo false;
   }
    mysqli_close($conn);
?>
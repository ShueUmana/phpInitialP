<?php
    include("../../php/db_conn.php");
    $sql = "update unidad SET estado = 'Inactivo' WHERE id_unidad=".$_POST['id_inactiva'];
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo true;
   } else {
      echo false;
   }
    mysqli_close($conn);
?>
<?php
    include("../../php/db_conn.php");
    $sql = "update nombramiento SET estado = 'Inactivo' WHERE id_nombramiento=".$_POST['id_inactiva'];
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo true;
   } else {
      echo false;
   }
    mysqli_close($conn);
?>
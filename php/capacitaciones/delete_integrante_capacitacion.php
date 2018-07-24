<?php
    include("../../php/db_conn.php");
    $sql = "delete from historial_capacitaciones WHERE id_historial=".$_POST['id'];
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo true;
   } else {
      echo false;
   }
    mysqli_close($conn);
?>
<?php
    include("../../php/db_conn.php");

    $sql = "delete from usuarios where id_user=".$_POST['id_delete']." limit 1;";
    $result = mysqli_query($conn, $sql);
    if (mysqli_query($conn, $sql)) {
      echo true;
   } else {
      echo false;
   }
    mysqli_close($conn);
?>
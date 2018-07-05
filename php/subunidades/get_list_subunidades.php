<?php
    include("./php/db_conn.php");

    $sql = "select s.id_subunidad, s.nombre, s.estado, u.nombre as unidad from subUnidad as s INNER JOIN unidad as u on u.id_unidad=s.fk_idUnidad;";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo mysqli_error($conn);
    }
    if (mysqli_num_rows($result) > 0) {
        $resultado=[];
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
           array_push($resultado,$row);
        }
    }
    mysqli_close($conn);
?>
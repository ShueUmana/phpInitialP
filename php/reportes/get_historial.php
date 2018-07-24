<?php
    include("./php/db_conn.php");

    $sql = "select his.estado, ins.nombre, ins.cedula, cap.nombre as curso, cap.anio, cap.fecha_Inicio, cap.fecha_Finaliza from historial_capacitaciones as his
    LEFT JOIN instructores as ins
    on his.id_instructor=ins.id
    LEFT JOIN capacitacion as cap
    on his.id_capacitacion= cap.id_capacitacion;";

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
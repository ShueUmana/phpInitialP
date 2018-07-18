<?php
    include("./php/db_conn.php");

    $sql = "select ins.*, 
    u.nombre as unidad_nombre,
    sub.nombre as subunidad_nombre, 
    nombra.nombre as nombramiento_nombre
        from instructores as ins
        left join unidad as u 
            on ins.unidad = u.id_unidad
        left join subUnidad as sub 
            on ins.subunidad = sub.id_subunidad
        left join nombramiento as nombra 
            on ins.tipo_Nombramiento = nombra.id_nombramiento;
    ";
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
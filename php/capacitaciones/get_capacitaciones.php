<?php
    include("../../php/db_conn.php");

    $sql = "
        select 
            cap.*,
            ins.nombre as instructor,
            un.nombre as unidadName,
            sub.nombre as subunidadName
        from capacitacion as cap
        left join instructores as ins
            on cap.identificacion_encargado = ins.cedula
        left join unidad as un
            on cap.unidad = un.id_unidad
        left join subUnidad as sub
            on cap.subUnidad = sub.id_subunidad
    where cap.id_capacitacion=".$_POST['id'];
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo mysqli_error($conn);
    }
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);      
        echo json_encode($row);
    }
    mysqli_close($conn);
?>
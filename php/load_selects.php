<?php
    include("db_conn.php");
    $sql="select id_".$_POST['tabla']." as val, nombre from ".$_POST['tabla']." where estado='Activo'";
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
    echo json_encode($resultado);
    mysqli_close($conn);
?>
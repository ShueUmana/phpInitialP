<?php
    include("../db_conn.php");
    $sql="select nombre, cedula from instructores;";
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
    }else{
        echo $resultado=0;
    }
    echo json_encode($resultado);
    mysqli_close($conn);
?>
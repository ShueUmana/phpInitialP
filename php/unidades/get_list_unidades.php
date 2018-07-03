<?php
    include("./php/db_conn.php");

    $sql = "select * from unidad";
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
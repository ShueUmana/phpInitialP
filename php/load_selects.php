<?php
    include("db_conn.php");
    $where='';
    if($_POST['id_only']!='none'){
        $where='and fk_idUnidad='.$_POST["id_only"];
    }
    $sql="select id_".$_POST['tabla']." as val, nombre from ".$_POST['tabla']." where estado='Activo' ".$where;
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
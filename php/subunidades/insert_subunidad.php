<?php
    if($_POST["optionType"]=="new"){
        include("../../php/db_conn.php");
        $sql = "insert into subUnidad (nombre, estado, fk_idUnidad)
    values ('".$_POST['nombre']."','".$_POST['estado']."','".$_POST['unidad']."');";
        if (mysqli_query($conn, $sql)) {
            echo true;
        } else {
            echo false;
        }
        mysqli_close($conn);
    }
    if($_POST["optionType"]=="update"){
        include("../../php/db_conn.php");
        $sql = "update subUnidad set nombre = '".$_POST["nombre"]."', estado = '".$_POST["estado"]."', fk_idUnidad='".$_POST["unidad"]."' where id_subunidad=".$_POST['register_id'];
        if (mysqli_query($conn, $sql)) {
            echo true;
        } else {
            echo false;
        }
        mysqli_close($conn);
    }
?>
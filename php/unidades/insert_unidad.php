<?php
    if($_POST["optionType"]=="new"){
        include("../../php/db_conn.php");
        $sql = "insert into unidad (nombre, estado)
    values ('".$_POST['nombre']."','".$_POST['estado']."');";
        if (mysqli_query($conn, $sql)) {
            echo true;
        } else {
            echo false;
        }
        mysqli_close($conn);
    }
    if($_POST["optionType"]=="update"){
        include("../../php/db_conn.php");
        $sql = "update unidad set nombre = '".$_POST["nombre"]."', estado = '".$_POST["estado"]."' where id_unidad=".$_POST['register_id'];
        if (mysqli_query($conn, $sql)) {
            echo true;
        } else {
            echo false;
        }
        mysqli_close($conn);
    }
?>
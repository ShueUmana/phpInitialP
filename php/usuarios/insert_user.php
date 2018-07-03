<?php
    if($_POST["optionType"]=="new"){
        if($_POST['status']=='Inactivo'){
            $field_fecha_inactivacion=', fecha_inactivacion';
            $fecha_inactivacion=', now()';
        }else{ $field_fecha_inactivacion='';$fecha_inactivacion=''; }
        include("../../php/db_conn.php");
        $sql = "insert into usuarios (correo, password, nombre ,estado, role, fecha_ingreso".$field_fecha_inactivacion.")
    values ('".$_POST['user']."','".$_POST['password']."','".$_POST['name']."','".$_POST['status']."','".$_POST['rol']."', now()".$fecha_inactivacion.");";
        if (mysqli_query($conn, $sql)) {
            echo true;
        } else {
            echo false;
        }
        mysqli_close($conn);
    }
    if($_POST["optionType"]=="update"){
        if($_POST['status']=='Inactivo'){
            $field_fecha_inactivacion=', fecha_inactivacion=';
            $fecha_inactivacion='now()';
        }else{ $field_fecha_inactivacion=', fecha_inactivacion=';$fecha_inactivacion='0000-00-00'; }
        include("../../php/db_conn.php");
        $sql = "update usuarios set correo = '".$_POST["user"]."', password = '".$_POST["password"]."', nombre='".$_POST["name"]."', estado='".$_POST["status"]."', role='".$_POST["rol"]."'".$field_fecha_inactivacion.$fecha_inactivacion." where id_user=".$_POST["register_id"].";";
        if (mysqli_query($conn, $sql)) {
            echo true;
        } else {
            echo false;
        }
        mysqli_close($conn);
    }
?>
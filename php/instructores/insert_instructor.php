<?php
    if(!isset($_POST['subUnidad'])){
        $_POST['subUnidad']='NULL';
    }
    if($_POST["optionType"]=="new"){
        if($_POST['status']=='Inactivo'){
            $field_fecha_inactivacion=', fecha_inactivacion';
            $fecha_inactivacion=', now()';
        }else{ $field_fecha_inactivacion='';$fecha_inactivacion=''; }
        include("../../php/db_conn.php");
        $sql = "insert into instructores (cedula,nombre,apellido,correo,telefono1,telefono2,lugar_residencia,ingreso_Ina,puesto,tipo_Nombramiento,unidad,subunidad,estado".$field_fecha_inactivacion.")
    values ('".$_POST['cedula']."','".$_POST['nombre']."','".$_POST['apellido']."','".$_POST['correo']."','".$_POST['telefono1']."','".$_POST['telefono2']."','".$_POST['residencia']."','".$_POST['ingresoIna']."','".$_POST['puesto']."','".$_POST['nombramiento']."','".$_POST['unidad']."', ".$_POST['subUnidad'].",'".$_POST['status']."'".$fecha_inactivacion.");";
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
        $sql = "update instructores set puesto = '".$_POST["puesto"]."',cedula = '".$_POST["cedula"]."', nombre = '".$_POST["nombre"]."', apellido='".$_POST["apellido"]."', correo='".$_POST["correo"]."', telefono1='".$_POST["telefono1"]."', telefono2='".$_POST["telefono2"]."', lugar_Residencia='".$_POST["residencia"]."', ingreso_Ina='".$_POST["ingresoIna"]."', tipo_Nombramiento='".$_POST["nombramiento"]."', unidad='".$_POST["unidad"]."', subunidad=".$_POST["subUnidad"].", estado='".$_POST["status"]."'".$field_fecha_inactivacion.$fecha_inactivacion." where id=".$_POST["register_id"].";";
        if (mysqli_query($conn, $sql)) {
            echo true;
        } else {
            echo false;
        }
        mysqli_close($conn);
    }
?>
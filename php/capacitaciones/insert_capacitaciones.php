<?php
    // revision por si se adjunto el documento de solicitud
    $nombre_archivo='';
    if(!$_FILES['documento']['error']==4){
        $directorio = "solicitudCapacitaciones/";
        $nombre_archivo=str_replace(' ', '', uniqid().$_FILES["documento"]["name"]);
        $archivo_local = $directorio . basename($nombre_archivo);
        if ($_FILES["documento"]["size"] > 5000000) {
            echo 'Disculpa el archivo debe ser menos de 5Mb'; // archivo muy grande
            exit;
        }
        if (move_uploaded_file($_FILES["documento"]["tmp_name"], $archivo_local)) {
            $fileOk=1;
        } else {
            echo "Disculpa hubo inconvenientes con el archivo. Intenta de nuevo.";
            exit;
        }
    }else{$nofile=1;}// end revision de documento
    if($_POST["optionType"]=="new"){
        include("../../php/db_conn.php");
        $sql = "insert into capacitacion 
		(	nombre,
			solicitante,
			fecha_Solicitud,
			fecha_Inicio,
			fecha_Finaliza,
			anio,
			documento,
			identificacion_encargado,
			lugar,
			unidad,
			subUnidad)
    values (
			'".$_POST['nombre']."',
			'".$_POST['solicitante']."',
			'".date("Y-m-d", strtotime($_POST['fecha_Solicitud']))."',
			'".date("Y-m-d", strtotime($_POST['fecha_Inicio']))."',
			'".date("Y-m-d", strtotime($_POST['fecha_Finaliza']))."',
			'".$_POST['anio']."',
			'".$nombre_archivo."',
			'".$_POST['identificacion_encargado']."',
			'".$_POST['lugar']."',
			'".$_POST['unidad']."',
			'".$_POST['subUnidad']."'
			);";
        if (mysqli_query($conn, $sql)) {
            echo true;
        } else {
            echo 'La acción no pudo ser completada';
        }
        mysqli_close($conn);
    }
    if($_POST["optionType"]=="update"){
        include("../../php/db_conn.php");
        if($nofile){
            $sql = "insert into capacitacion 
            (	nombre,
                solicitante,
                fecha_Solicitud,
                fecha_Inicio,
                fecha_Finaliza,
                anio,
                identificacion_encargado,
                lugar,
                unidad,
                subUnidad)
        values (
                '".$_POST['nombre']."',
                '".$_POST['solicitante']."',
                '".date("Y-m-d", strtotime($_POST['fecha_Solicitud']))."',
                '".date("Y-m-d", strtotime($_POST['fecha_Inicio']))."',
                '".date("Y-m-d", strtotime($_POST['fecha_Finaliza']))."',
                '".$_POST['anio']."',
                '".$_POST['identificacion_encargado']."',
                '".$_POST['lugar']."',
                '".$_POST['unidad']."',
                '".$_POST['subUnidad']."'
                );";
        }else{
            $sql = "insert into capacitacion 
            (	nombre,
                solicitante,
                fecha_Solicitud,
                fecha_Inicio,
                fecha_Finaliza,
                anio,
                documento,
                identificacion_encargado,
                lugar,
                unidad,
                subUnidad)
        values (
                '".$_POST['nombre']."',
                '".$_POST['solicitante']."',
                '".date("Y-m-d", strtotime($_POST['fecha_Solicitud']))."',
                '".date("Y-m-d", strtotime($_POST['fecha_Inicio']))."',
                '".date("Y-m-d", strtotime($_POST['fecha_Finaliza']))."',
                '".$_POST['anio']."',
                '".$nombre_archivo."',
                '".$_POST['identificacion_encargado']."',
                '".$_POST['lugar']."',
                '".$_POST['unidad']."',
                '".$_POST['subUnidad']."'
                );";
        }
       
        if (mysqli_query($conn, $sql)) {
            echo true;
        } else {
            echo 'La acción no pudo ser completada';
        }
        mysqli_close($conn);
    }
?>
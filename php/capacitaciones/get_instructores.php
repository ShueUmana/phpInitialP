 <?php
    include("../../php/db_conn.php");

    $sql = "select histo.id_instructor, ins.cedula, ins.nombre, ins.correo from historial_capacitaciones as histo
    INNER JOIN instructores as ins
    on ins.id=histo.id_instructor
where id_capacitacion=".$_POST['id'];
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
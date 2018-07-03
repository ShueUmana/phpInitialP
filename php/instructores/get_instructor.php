<?php
    include("../../php/db_conn.php");

    $sql = "select * from instructores where id=".$_POST['id'];
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo mysqli_error($conn);
    }
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);      
        echo json_encode($row);
    }
    mysqli_close($conn);
?>
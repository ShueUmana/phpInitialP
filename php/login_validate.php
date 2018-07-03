<?php
    session_start();
    include("db_conn.php");

    $email= $_POST["email"];
    $pass= $_POST["pass"];

    $sql = "select COUNT(*) as result, role, nombre, estado, correo from usuarios where correo='".$email."' and password='".$pass."';";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo mysqli_error($conn);
    }
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            if($row['result']==1){
                if($row['estado']=='Activo'){ // revision de estado Activo
                $_SESSION["role"] = $row['role'];
                $_SESSION["name_user"] = $row['nombre'];
                $_SESSION["correo"] = $row['correo'];
                echo $row['result'];
                }else{
                    echo -1; // estado Inactivo
                    
                }
            }else{
                echo 0;
            }
        }
    } else { echo 0;}

    mysqli_close($conn);
?>
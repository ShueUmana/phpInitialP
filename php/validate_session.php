<?php
// Start the session
session_start();
if(!isset($_SESSION['correo'])){
    session_destroy();
    header('Location: ./login.php');
}
?>
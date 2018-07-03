<?php
// llamado de la session para Destruir
session_start();
// Destruccion de la session completa 
session_destroy();
echo 1;  // notifica al frontend el cierre de Session
?>
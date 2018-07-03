<?php

function ver_variable($dato){
    echo '<pre>';
    print_r($dato);
    echo '</pre>';
}
/**
* params role 
*   recibe el ROLE, 
*   Retorna 0, para C,R,U,D
*   Retorna 1, para C,R,U,D
*   Retorna -1 para 
*/
function getRoleAccess($role){
    if($role=="administrador"){
        return 0;
    }else if($role=="editor"){
        return 1;
    }else{ // lector
        return -1;
    }
}
?>
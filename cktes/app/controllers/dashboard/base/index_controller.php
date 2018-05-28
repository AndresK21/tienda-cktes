<?php
try{
    require_once("../../app/views/dashboard/base/index_view.php");
    if(isset($_POST['exportar'])){ //El controlador funciona si el post del formulario se llama asi
        require_once("myphp-backup.php");
    }
    else if(isset($_POST['importar'])){ //El controlador funciona si el post del formulario se llama asi
        require_once("myphp-restore.php");
    }else{
        throw new Exception("Ha ocurrido un error");
    }
    
}catch(Exception $error){
}
?>
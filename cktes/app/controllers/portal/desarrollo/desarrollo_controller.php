<?php
     require_once("../app/models/portal/desarrollo.class.php");
try{

     $desarrollo = new Desarrollo;
     $id = $desarrollo->getTipo_Desarrollo();
     $desarrollo->setId($id[0]['id_tipo_desarrollo']);
 }
  catch(Exception $error){

  }  

//Controlador para llamar la vista de la seccion nosotros
     require_once("../app/views/portal/desarrollo/desarrollo_view.php");

?>
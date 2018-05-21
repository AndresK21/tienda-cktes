<?php
require_once("../app/models/categorias.class.php"); //Llama el modelo Categoria
try{
	$marca = new Marca;
	$marcas = $marca->getMarcas(); // Obtiene las marcas
	if($marcas){
		require_once("../app/views/tienda/categorias/categorias_view.php");//Muestra la vista de las categorias
	}else{
		Page::showMessage(3, "No hay categorías disponibles", null);
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
?>
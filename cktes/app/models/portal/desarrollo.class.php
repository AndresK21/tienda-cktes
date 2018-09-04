<?php
class Desarrollo extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $mensaje = null;
	private $tipo_desa = null;
	private $archivo = null;

	//Métodos para sobrecarga de propiedades
	//ESTE ES EL ID DE LA IMPORTACION
	public function setId($value){
		if($this->validateId($value)){
			$this->id = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId(){
		return $this->id;
	}
	//ESTE ES EL NOMBRE DE LA IMPORTACION
	public function setMensaje($value){
		if($this->validateAlphanumeric($value, 1, 500)){
			$this->mensaje = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getMensaje(){
		return $this->mensaje;
	}
	//ESTE ES EL ID DE LA IMPORTACION
	public function setTipo_desa($value){
		if($this->validateId($value)){
			$this->tipo_desa = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTipo_desa(){
		return $this->tipo_desa;
	}
    //ESTE ES EL ARCHIVO
	
    public function setArchivo($file){
		if($this->validateArchive($file, $this->archivo, "../../web/archivo/desarrollo/")){
			$this->archivo = $this->getArchiveName();
			return true;
		}else{
			return false;
		}
	}
	public function getArchivo(){
		return $this->archivo;
	}
	public function unsetArchivo(){
		if(unlink("../../web/archivo/desarrollo/".$this->archivo)){
			$this->archivo = null;
			return true;
		}else{
			return false;
		}
	}
    
    
	//Metodos para el manejo del CRUD
	public function getTipo_Desarrollo(){
		$sql = "SELECT id_tipo_desarrollo, tipo_desarrollo FROM tipo_desarrollo";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function createDesarrollo(){
		$sql = "INSERT INTO desarrollo(mensaje, archivo, id_tipo_desarrollo, id_cliente) VALUES (?, ?, ?, ?)";
		$params = array($this->mensaje, $this->archivo, $this->tipo_desa, $this->id);
		return Database::executeRow($sql, $params);
	}

}
?>
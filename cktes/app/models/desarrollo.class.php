<?php
class Desarrollo extends Validator{
	//Declaración de propiedades
	private $id_desarrollo = null;
    private $mensaje = null;
    private $archivo = null;
    private $id_tipo_desarrollo = null;
    private $id_cliente = null;

    //Métodos para sobrecarga de propiedades
    public function setId_desarrollo($value){
		if($this->validateId($value)){
			$this->id_desarrollo = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_desarrollo(){
		return $this->id_desarrollo;
    }
    
	public function setMensaje($value){
		if($this->validateAlphanumeric($value, 1, 550)){
			$this->mensaje = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getMensaje(){
		return $this->mensaje;
    }
    

    public function setArchivo($file){
		if($this->validateImage($file, $this->imagen, "../../web/img/categorias/", 300, 300)){
			$this->imagen = $this->getImageName();
			return true;
		}else{
			return false;
		}
	}
	public function getArchivo(){
		return $this->imagen;
	}
    
    public function setId_tipo($value){
		if($this->validateId($value){
			$this->id_tipo_desarrollo = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_tipo(){
		return $this->id_tipo_desarrollo;
    }
    
    public function setId_cliente($value){
		if($this->validateId($value){
			$this->id_cliente = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_cliente(){
		return $this->id_cliente;
	}

	//Metodos para el manejo del CRUD
	public function getDesarrollos(){
		$sql = "SELECT id_desarrollo, mensaje, archivo, id_tipo_desarrollo, id_cliente FROM desarrollo ORDER BY id_desarrollo";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchDesarrollo($value){
		$sql = "SELECT id_desarrollo, mensaje, archivo, tipo_desarrollo, nombres, apellidos FROM desarrollo INNER JOIN tipo_desarrollo USING(id_tipo_desarrollo) INNER JOIN clientes USING(id_cliente) WHERE mensaje LIKE ? ORDER BY id_desarrollo";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function createDesarrollo(){
		$sql = "INSERT INTO desarrollo(mensaje, archivo, id_tipo_desarrollo, id_cliente) VALUES (?, ?, ?, ?)";
		$params = array($this->mensaje, $this->archivo, $this->id_tipo_desarrollo, $this->id_cliente);
		return Database::executeRow($sql, $params);
	}
	public function readDesarrollo(){
		$sql = "SELECT mensaje, archivo, id_tipo_desarrollo, id_cliente FROM desarrollo WHERE id_desarrollo = ? ORDER BY id_desarrollo";
		$params = array($this->id_desarrollo);
		$desarrollo = Database::getRow($sql, $params);
		if($desarrollo){
            $this-> = $desarrollo['marca'];
            $this->mensaje = $desarrollo['mensaje'];
            $this->archivo = $desarrollo['archivo'];
            $this->id_tipo_desarrollo = $desarrollo['id_tipo_desarrollo'];
            $this->id_cliente = $desarrollo['id_cliente'];
			return true;
		}else{
			return null;
		}
	}
	public function updateMarca(){
		$sql = "UPDATE desarrollo SET mensaje= ? WHERE id_marca = ?";
		$params = array($this->marca, $this->id_marca);
		return Database::executeRow($sql, $params);
	}
	public function deleteMarca(){
		$sql = "DELETE FROM marca WHERE id_marca = ?";
		$params = array($this->id_marca);
		return Database::executeRow($sql, $params);
	}
}
?>
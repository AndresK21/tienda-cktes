<?php
class Empleado extends Validator{
	//Declaración de propiedades
	private $id_empleado = null;
    private $nombres = null;
    private $apellidos = null;
    private $imagen = null;
    private $correo_electronico = null;
    private $contrasena = null;
    private $id_permiso = null;

    //Métodos para sobrecarga de propiedades
    public function setId_empleado($value){
		if($this->validateId($value)){
			$this->id_empleado = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_empleado(){
		return $this->id_empleado;
    }
    
	public function setNombres($value){
		if($this->validateAlphanumeric($value, 1, 80)){
			$this->nombres = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getNombres(){
		return $this->nombres;
    }

    public function setApellidos($value){
		if($this->validateAlphanumeric($value, 1, 80)){
			$this->apellidos = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getApellidos(){
		return $this->apellidos;
    }
    
    public function setImagen($file){
		if($this->validateImage($file, $this->imagen, "../../web/img/categorias/", 300, 300)){
			$this->imagen = $this->getImageName();
			return true;
		}else{
			return false;
		}
	}
	public function getImagen(){
		return $this->imagen;
	}
	public function unsetImagen(){
		if(unlink("../../web/img/categorias/".$this->imagen)){
			$this->imagen = null;
			return true;
		}else{
			return false;
		}
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
		$sql = "UPDATE desarrollo SET mensaje = ?, archivo = ?, id_tipo_desarrollo = ?, id_cliente = ? WHERE id_desarrollo = ?";
		$params = array($this->mensaje, $this->archivo, $this->id_tipo_desarrollo, $this->id_cliente, $this->id_desarrollo);
		return Database::executeRow($sql, $params);
	}
	public function deleteDesarrollo(){
		$sql = "DELETE FROM desarrollo WHERE id_desarrollo = ?";
		$params = array($this->id_desarrollo);
		return Database::executeRow($sql, $params);
	}
}
?>
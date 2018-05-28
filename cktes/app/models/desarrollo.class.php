<?php
class Desarrollo extends Validator{
	//Declaración de propiedades
	private $id_desarrollo = null;
    private $mensaje = null;
    private $archivo = null;
    private $id_tipo_desarrollo = null;
	private $id_cliente = null;
	
	private $nombres = null;
	private $apellidos = null;
	private $correo_electronico = null;
	private $tipo_desarrollo = null;

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
    
    public function setId_tipo($value){
		if($this->validateId($value)){
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
		if($this->validateId($value)){
			$this->id_cliente = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_cliente(){
		return $this->id_cliente;
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
	public function setCorreo($value){
		if($this->validateEmail($value)){
			$this->correo_electronico = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCorreo(){
		return $this->correo_electronico;
	}
	public function setTipo($value){
		if($this->validateAlphanumeric($value, 1, 80)){
			$this->tipo_desarrollo = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTipo(){
		return $this->tipo_desarrollo;
	}

	//Metodos para el manejo del CRUD
	public function getDesarrollos(){
		$sql = "SELECT id_desarrollo, mensaje, archivo, id_tipo_desarrollo, nombres, apellidos FROM desarrollo INNER JOIN clientes USING(id_cliente) ORDER BY id_desarrollo";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchDesarrollo($value){
		$sql = "SELECT id_desarrollo, mensaje, archivo, tipo_desarrollo, nombres, apellidos FROM desarrollo INNER JOIN tipo_desarrollo USING(id_tipo_desarrollo) INNER JOIN clientes USING(id_cliente) WHERE nombres LIKE ? OR apellidos LIKE ? ORDER BY id_desarrollo";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function createDesarrollo(){
		$sql = "INSERT INTO desarrollo(mensaje, archivo, id_tipo_desarrollo, id_cliente) VALUES (?, ?, ?, ?)";
		$params = array($this->mensaje, $this->archivo, $this->id_tipo_desarrollo, $this->id_cliente);
		return Database::executeRow($sql, $params);
	}
	public function readDesarrollo(){
		$sql = "SELECT mensaje, archivo, id_tipo_desarrollo, id_cliente, nombres, apellidos, correo_electronico, tipo_desarrollo FROM desarrollo INNER JOIN clientes USING(id_cliente) INNER JOIN tipo_desarrollo USING(id_tipo_desarrollo) WHERE id_desarrollo = ? ORDER BY id_desarrollo";
		$params = array($this->id_desarrollo);
		$desarrollo = Database::getRow($sql, $params);
		if($desarrollo){
            $this->mensaje = $desarrollo['mensaje'];
            $this->archivo = $desarrollo['archivo'];
            $this->id_tipo_desarrollo = $desarrollo['id_tipo_desarrollo'];
			$this->id_cliente = $desarrollo['id_cliente'];
			
			$this->nombres = $desarrollo['nombres'];
			$this->apellidos = $desarrollo['apellidos'];
			$this->correo_electronico = $desarrollo['correo_electronico'];
			$this->tipo_desarrollo = $desarrollo['tipo_desarrollo'];
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
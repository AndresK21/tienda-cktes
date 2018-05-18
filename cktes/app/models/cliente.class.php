<?php
class Cliente extends Validator{
	//Declaración de propiedades
	private $id_cliente = null;
    private $nombres = null;
    private $apellidos = null;
    private $correo = null;
    private $contrasena = null;
    private $imagen = null;
    private $id_tipo_cliente = null;

	//Métodos para sobrecarga de propiedades
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
			$this->correo = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCorreo(){
		return $this->correo;
    }
    
    public function set($value){
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

	//Metodos para el manejo del CRUD
	public function getTipo_clientes(){
		$sql = "SELECT id_tipo_cliente, tipo_cliente FROM tipo_cliente ORDER BY id_tipo_cliente";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchCategoria($value){
		$sql = "SELECT * FROM tipo_cliente WHERE tipo_cliente LIKE ? ORDER BY id_tipo_cliente";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function createCategoria(){
		$sql = "INSERT INTO tipo_cliente(tipo_cliente) VALUES(?)";
		$params = array($this->tipo_cliente);
		return Database::executeRow($sql, $params);
	}
	public function readCategoria(){
		$sql = "SELECT tipo_cliente FROM tipo_cliente WHERE id_tipo_cliente = ?";
		$params = array($this->id_tipo_cliente);
		$tipo = Database::getRow($sql, $params);
		if($tipo){
			$this->tipo_cliente = $tipo['tipo_cliente'];
			return true;
		}else{
			return null;
		}
	}
	public function updateCategoria(){
		$sql = "UPDATE tipo_cliente SET tipo_cliente = ? WHERE id_tipo_cliente = ?";
		$params = array($this->tipo_cliente, $this->id_tipo_cliente,);
		return Database::executeRow($sql, $params);
	}
	public function deleteCategoria(){
		$sql = "DELETE FROM tipo_cliente WHERE id_tipo_cliente = ?";
		$params = array($this->id_tipo_cliente);
		return Database::executeRow($sql, $params);
	}
}
?>
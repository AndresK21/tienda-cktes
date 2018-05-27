<?php
class Cliente extends Validator{
	//Declaración de propiedades
	private $id_cliente = null;
	private $estado_cliente=null;
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
	public function setEstado_cliente($value){
		if($this->validateId($value)){
			$this->setEstado_cliente = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getEstado_cliente(){
		return $this->estado_cliente;
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
    
    public function setContrasena($value){
		if($this->validateAlphanumeric($value, 1, 80)){
			$this->contrasena = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getContrasena(){
		return $this->contrasena;
	}
    public function setTipoCliente($value){
		if($this->validateId($value)){
			$this->id_tipo_cliente = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTipoCliente(){
		return $this->id_tipo_cliente;
	}
	//Métodos para manejar la sesión del usuario
	public function checkAlias(){
		$sql = "SELECT Id_cliente, Id_compra, compra.Estado_compra FROM cliente INNER JOIN compra USING(Id_cliente) WHERE Correo = ? AND Estado_cliente=1";
		$params = array($this->correo);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->id = $data['Id_cliente'];
			
			return true;
		}else{
			return false;
		}
	}
	public function checkPassword(){
		$sql = "SELECT Contraseña FROM cliente WHERE Id_cliente = ?";
		$params = array($this->id);
		$data = Database::getRow($sql, $params);
		if(password_verify($this->clave, $data['Contraseña'])){
			return true;
		}else{
			return false;
		}
	}
	
	public function changePassword(){
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = "UPDATE cliente SET Contraseña = ? WHERE Id_cliente = ?";
		$params = array($hash, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function logOut(){
		return session_destroy();
	}
	public function createUsuario(){
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = "INSERT INTO clientes(estado_cliente,nombres,apellidos, Telefono, Correo, Contraseña) VALUES(?, ?, ?, ?, ?,?)";
		$estadouser= 1;
		$params = array($estadouser,$this->nombres, $this->apellidos,$this->telefono, $this->correo,  $hash);
		return Database::executeRow($sql, $params);
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
	public function getTipos(){
		$sql = "SELECT id_tipo_cliente, tipo_cliente FROM tipo_cliente";
		$params = array(null);
		return Database::getRows($sql, $params);
	}

}
?>
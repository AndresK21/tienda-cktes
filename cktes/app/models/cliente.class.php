<?php
class Cliente extends Validator{
	//Declaración de propiedades
	private $id= null;
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
			$this->id = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_cliente(){
		return $this->id;
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
		$sql = "SELECT Id_cliente, id_carrito, carrito.estado_carrito FROM clientes INNER JOIN carrito USING(id_cliente) WHERE correo_electronico = ? AND estado_cliente=3";
		$params = array($this->correo);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->id = $data['id_cliente'];
			
			return true;
		}else{
			return false;
		}
	}
	public function checkPassword(){
		$sql = "SELECT contrasena FROM clientes WHERE id_cliente = ?";
		$params = array($this->id);
		$data = Database::getRow($sql, $params);
		if(password_verify($this->contrasena, $data['contrasena'])){
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
		$sql = "INSERT INTO clientes(estado_cliente,nombres,apellidos, correo_electronico,contrasena, url_imagen, id_tipo_cliente) VALUES(?, ?, ?, ?, ?, ?, ?)";
		$estadouser= 3;
		$params = array($estadouser,$this->nombres, $this->apellidos,$this->correo, $hash, $this->imagen, $this->id_tipo_cliente  );
		return Database::executeRow($sql, $params);
	}
	public function maxCliente(){
		$sql = "SELECT MAX(Id_cliente) as cliente FROM cliente";
		$params = array(null);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->id = $data['cliente'];	
			return true;
		}else{
			return false;
		}
	}
		//Se crea la nueva compra 
		public function createCarrito(){
			$sql = "INSERT INTO carrito(fecha,id_cliente, estado_carrito) VALUES(?, ?, ?)";
			$fechaa = date('y-m-d');
			$estadoo = 5;
			$params = array($fechaa, $this->id, $estadoo);
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
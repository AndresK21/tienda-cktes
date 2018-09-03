<?php
class Cliente extends Validator{
	//Declaración de propiedades
	private $id= null;
	private $estado=null;
    private $nombres = null;
    private $apellidos = null;
    private $correo = null;
    private $contrasena = null;
    private $imagen = null;
	private $id_tipo_cliente = null;
	private $fecha = null;
	private $carrito = null;
	private $estado_carrito = null;

	private $contador = null;

	//Métodos para sobrecarga de propiedades
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
	public function setCarrito($value){
		if($this->validateId($value)){
			$this->carrito = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCarrito(){
		return $this->carrito;
	}
	
	public function setContador($value){
		if($this->validateId($value)){
			$this->contador = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getContador(){
		return $this->contador;
	}
	public function setEstado($value){
		if($this->validateId($value)){
			$this->estado = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getEstado(){
		return $this->estado;
	}
	public function setEstado_carrito($value){
		if($this->validateId($value)){
			$this->estado_carrito = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getEstado_carrito(){
		return $this->estado_carrito;
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
		if($this->validatePassword($value)){
			$this->contrasena = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getContrasena(){
		return $this->contrasena;
	}
	
	public function setContrasena2($value){
		if($this->validatePassword2($value)){
			$this->contrasena = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getContrasena2(){
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

	public function setFecha($value){
		if($this->validateAlphanumeric($value)){
			$this->fecha = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getFecha(){
		return $this->fecha;
	}
	//Métodos para manejar la sesión del usuario
	public function checkAlias(){
		$sql = "SELECT id_cliente, id_carrito, carrito.estado_carrito FROM clientes INNER JOIN carrito USING(id_cliente) WHERE correo_electronico = ? AND Estado_cliente=3";
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
	public function updateContra($contrasena){
		$hash = password_hash($contrasena, PASSWORD_DEFAULT);
		$sql = "UPDATE clientes SET contrasena = ? WHERE correo_electronico = ?";
		$params = array($hash, $this->correo);
		return Database::executeRow($sql, $params);
	}
	public function updateEstado($user){
		$sql = "UPDATE clientes SET estado_cliente = 0 WHERE correo_electronico = ?";
		$params = array($user);
		return Database::executeRow($sql, $params);
	}

	public function sumarIntento($usuario){
		$sql = "UPDATE clientes SET contador = contador + 1 WHERE correo_electronico = ?";
		$params = array($usuario);
		return Database::executeRow($sql, $params);
	}

	public function intentoCero($usuario){
		$sql = "UPDATE clientes SET contador = 0 WHERE correo_electronico = ?";
		$params = array($usuario);
		return Database::executeRow($sql, $params);
	}
	public function getIntentos($usuario){
		$sql = "SELECT contador FROM clientes WHERE correo_electronico = ?";
		$params = array($usuario);
		$cliente = Database::getRow($sql, $params);
		if($cliente){
            $this->contador = $cliente['contador'];
			return true;
		}else{
			return null;
		}
	}
	
	public function changePassword(){
		$hash = password_hash($this->contrasena, PASSWORD_DEFAULT);
		$sql = "UPDATE clientes SET contrasena = ? WHERE id_cliente = ?";
		$params = array($hash, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function logOut(){
		return session_destroy();
	}

	public function createUsuario(){
		$hash = password_hash($this->contrasena, PASSWORD_DEFAULT);
		$sql = "INSERT INTO clientes(estado_cliente, nombres, apellidos, correo_electronico, contrasena, url_imagen, id_tipo_cliente) VALUES(?, ?, ?, ?, ?, ?, ?)";
		$estadouser= 3;
		$params = array($estadouser,$this->nombres, $this->apellidos,$this->correo, $hash, $this->imagen, $this->id_tipo_cliente);
		return Database::executeRow($sql, $params);
	}
	public function maxCliente(){
		$sql = "SELECT MAX(id_cliente) as cliente FROM clientes";
		$params = array(null);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->id = $data['cliente'];	
			return true;
		}else{
			return false;
		}
	}
	public function maxId(){
		$sql = "SELECT id_carrito, estado_carrito FROM carrito WHERE id_carrito= (SELECT MAX(id_carrito) FROM carrito WHERE id_cliente = ?)";
		$params = array($this->id);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->estado = $data['estado_carrito'];
			$this->carrito = $data['id_carrito'];	
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
	public function getUsuarios(){
		$sql = "SELECT id_cliente, estado_cliente, nombres, apellidos,correo_electronico, contrasena,url_imagen, id_tipo_cliente FROM clientes WHERE estado_cliente=3 ";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getTipo_clientes(){
		$sql = "SELECT id_tipo_cliente, tipo_cliente FROM tipo_cliente ORDER BY id_tipo_cliente";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function checkCorreo(){
		$sql = "SELECT id_cliente, correo_electronico, nombres, apellidos, url_imagen FROM clientes WHERE correo_electronico = ?";
		$params = array($this->correo);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->id = $data['id_cliente'];
			$this->correo = $data['correo_electronico'];
			$this->nombres = $data['nombres'];
			$this->apellidos = $data['apellidos'];
			$this->imagen = $data['url_imagen'];
			return true;
		}else{
			return false;
		}
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
	public function readUsuario(){
		$sql = "SELECT estado_cliente,nombres,apellidos, correo_electronico FROM clientes WHERE id_cliente = ?";
		$params = array($this->id);
		$cliente = Database::getRow($sql, $params);
		if($cliente){
            $this->estado = $cliente['estado_cliente'];
			$this->nombres = $cliente['nombres'];
            $this->apellidos = $cliente['apellidos'];
			$this->correo = $cliente['correo_electronico'];
			
			return true;
		}else{
			return null;
		}
	}
	public function updateUsuario(){
		$sql = "UPDATE clientes SET nombres = ?, apellidos = ?, correo_electronico = ? WHERE id_cliente = ?";
		$params = array($this->nombres, $this->apellidos, $this->correo,  $this->id);
		return Database::executeRow($sql, $params);
	}

	public function deleteCliente(){
		$sql = "DELETE FROM clientes WHERE id_cliente = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}

	public function getClientes(){
		$sql = "SELECT id_cliente, nombres, apellidos, correo_electronico FROM clientes ORDER BY apellidos";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getClientes2($empieza, $por_pagina){
		$sql = "SELECT id_cliente, nombres, apellidos, correo_electronico FROM clientes ORDER BY apellidos LIMIT $empieza, $por_pagina";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchCliente($value){
		$sql = "SELECT id_cliente, nombres, apellidos, correo_electronico FROM clientes WHERE nombres LIKE ? OR apellidos LIKE ? ORDER BY apellidos";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
}
?>
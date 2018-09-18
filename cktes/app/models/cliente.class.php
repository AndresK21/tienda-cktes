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
	private $fecha2 = null;
	private $carrito = null;
	private $estado_carrito = null;
	private $contador = null;
	private $estado_cliente=null;
	private $fecha_registro= null;
	private $autenticacion= null;
	private $ip = null;
	private $estadoAu = null;
	private $DUI = null;
	private $NIT = null;
	private $NRC = null;
	private $actividad = null;
	private $direccion = null;
	private $encargado = null;
	private $cargo = null;
	
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
	public function setEst($value){
		if($this->validateId($value)){
			$this->estadoAu = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getEst(){
		return $this->estadoAu;
	}
	public function setImagen($value){
		if($this->validateImage($value, $this->imagen, "../web/img/clientes/", 5000, 5000)){
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
		if(unlink("../web/img/empleados/".$this->imagen)){
			$this->imagen = null;
			return true;
		}else{
			return false;
		}
	}
	public function setEstadoCliente($value){
		if($this->validateId($value)){
			$this->estado_cliente = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getEstadoCliente(){
		return $this->estado_cliente;
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
	public function setAut($value){
		if($this->validateId($value)){
			$this->autenticacion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getAut(){
		return $this->autenticacion;
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
    public function setDUI($value){
		if($this->validateDUI($value, 1, 11)){
			$this->DUI = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getDUI(){
		return $this->DUI;
	}

	public function setNIT($value){
		if($this->validateNIT($value, 1, 18)){
			$this->NIT = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getNIT(){
		return $this->NIT;
	}
	public function setNRC($value){
		if($this->validateNIT($value, 1, 18)){
			$this->NRC = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getNRC(){
		return $this->NRC;
	}
	
	public function setActividad($value){
		if($this->validateAlphanumeric($value, 1, 80)){
			$this->actividad = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getActividad(){
		return $this->actividad;
	}
	public function setDireccion($value){
		if($this->validateAlphanumeric($value, 1, 80)){
			$this->direccion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getDireccion(){
		return $this->direccion;
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
	public function setEncargado($value){
		if($this->validateAlphanumeric($value, 1, 80)){
			$this->encargado = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getEncargado(){
		return $this->encargado;
	}
	
	public function setCargo($value){
		if($this->validateAlphanumeric($value, 1, 80)){
			$this->cargo = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCargo(){
		return $this->cargo;
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
	
	public function setFechaRegistro($value){
		if($this->validateAlphanumeric($value)){
			$this->fecha_registro = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getFechaRegistro(){
		return $this->fecha_registro;
	}


	public function setFecha2($value){
		if($this->validateAlphanumeric($value, 1, 30)){
			$this->fecha2 = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getFecha2(){
		return $this->fecha2;
	}

	public function setIp($value){
		if($this->validateAlphanumeric($value, 1, 50)){
			$this->ip = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getIp(){
		return $this->ip;
	}
	//Métodos para manejar la sesión del usuario
	public function checkAlias(){
		$sql = "SELECT id_cliente, id_carrito, carrito.estado_carrito FROM clientes INNER JOIN carrito USING(id_cliente) WHERE correo_electronico = ?";
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
		$sql = "SELECT contrasena, estado_cliente, fecha_bloqueo FROM clientes WHERE id_cliente = ?";
		$params = array($this->id);
		$data = Database::getRow($sql, $params);
		if(password_verify($this->contrasena, $data['contrasena'])){
			$this->estado_cliente = $data['estado_cliente'];
			$this->fecha2 = $data['fecha_bloqueo'];
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
		$sql = "UPDATE clientes SET estado_cliente = 4, fecha_bloqueo = ? WHERE correo_electronico = ?";
		$fech = date('Y-m-d h:i:s');
		$params = array($fech, $user);
		return Database::executeRow($sql, $params);
	}
	public function updateEstado2($user){
		$sql = "UPDATE clientes SET estado_cliente = 3 WHERE correo_electronico = ?";
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

	public function createUsuario_Cliente(){
		$hash = password_hash($this->contrasena, PASSWORD_DEFAULT);
		$sql = "INSERT INTO clientes(estado_cliente, nombres, apellidos, correo_electronico, contrasena, url_imagen, id_tipo_cliente, fecha_registro, estado_autenticacion, dui, nit, nrc, actividad, direccion, encargado, cargo_encargado) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$estadouser= 3;
		$id_tipo_cliente = 1;
		$estadoau=2;
		$fecharegistro = date("Y/m/d");
		
		$params = array($estadouser,$this->nombres, $this->apellidos,$this->correo, $hash, $this->imagen, $id_tipo_cliente, $fecharegistro, $estadoau, $this->DUI, $this->NIT, $this->NRC, $this->actividad, $this->direccion, $this->encargado, $this->cargo);
		return Database::executeRow($sql, $params);
	}
	public function createUsuario_Empresa(){
		$hash = password_hash($this->contrasena, PASSWORD_DEFAULT);
		$sql = "INSERT INTO clientes(estado_cliente, nombres, apellidos, correo_electronico, contrasena, url_imagen, id_tipo_cliente, fecha_registro, estado_autenticacion, dui, nit, nrc, actividad, direccion, encargado, cargo_encargado) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$estadouser= 3;
		$id_tipo_cliente = 2;
		$estadoau=2;
		$fecharegistro = date("Y/m/d");
		$url_imagen = 'no-user.png';
		$params = array($estadouser,$this->nombres, $this->apellidos,$this->correo, $hash, $this->imagen, $id_tipo_cliente, $fecharegistro, $estadoau, $this->DUI, $this->NIT, $this->NRC, $this->actividad, $this->direccion, $this->encargado, $this->cargo);
		return Database::executeRow($sql, $params);
	}
	public function maxCliente(){
		$sql = "SELECT MAX(id_cliente) AS cliente FROM clientes";
		$params = array(null);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->id = $data['cliente'];	
			return true;
		}else{
			return false;
		}
	}
	
	public function insertIp(){
		$sql = "UPDATE clientes SET ip = ? WHERE correo_electronico = ?";
		$params = array($this->ip, $this->correo);
		return Database::executeRow($sql, $params);
	}
	public function unsetIp($usuario){
		$sql = "UPDATE clientes SET ip = null WHERE correo_electronico = ?";
		$params = array($usuario);
		return Database::executeRow($sql, $params);
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
		$sql = "SELECT estado_cliente,nombres,apellidos, correo_electronico, fecha_registro, ip, url_imagen,dui,nit FROM clientes WHERE id_cliente = ?";
		$params = array($this->id);
		$cliente = Database::getRow($sql, $params);
		if($cliente){
            $this->estado = $cliente['estado_cliente'];
			$this->nombres = $cliente['nombres'];
            $this->apellidos = $cliente['apellidos'];
			$this->correo = $cliente['correo_electronico'];
			$this->fecha_registro= $cliente['fecha_registro'];
			$this->ip= $cliente['ip'];
			$this->imagen = $cliente['url_imagen'];
			$this->DUI = $cliente['dui'];
			$this->NIT = $cliente['nit'];
			
			return true;
		}else{
			return null;
		}
	}
	public function Fecha(){
		$sql = "UPDATE clientes SET fecha_registro = ? WHERE id_cliente = ?";
		$fechaactual= date("Y-m-d");
		$params = array($fechaactual,  $this->id);
		return Database::executeRow($sql, $params);
	}

	public function readUsuario2($correo){
		$sql = "SELECT nombres, apellidos, correo_electronico, contrasena, autenticacion, ip , url_imagen, estado_autenticacion, id_tipo_cliente FROM clientes WHERE correo_electronico = ? ORDER BY id_cliente";
		$params = array($correo);
		$cliente = Database::getRow($sql, $params);
		if($cliente){
            $this->nombres = $cliente['nombres'];
            $this->apellidos = $cliente['apellidos'];
			$this->correo = $cliente['correo_electronico'];
			$this->contrasena = $cliente['contrasena'];
			$this->autenticacion = $cliente['autenticacion'];
			$this->ip = $cliente['ip'];
			$this->imagen = $cliente['url_imagen'];
			$this->estadoAu = $cliente['estado_autenticacion'];
			$this->id_tipo_cliente = $cliente['id_tipo_cliente'];

			return true;
		}else{
			return null;
		}
	}

	public function updateUsuario(){
		$sql = "UPDATE clientes SET nombres = ?, apellidos = ?, correo_electronico = ?, url_imagen = ?, estado_autenticacion =? WHERE id_cliente = ?";
		$params = array($this->nombres, $this->apellidos, $this->correo, $this->imagen, $this->estadoAu, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function updateFoto(){
		$sql = "UPDATE clientes SET url_imagen = ? WHERE id_cliente = ?";
		$params = array($this->imagen,  $this->id);
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
		$sql = "SELECT id_cliente, nombres, apellidos, correo_electronico FROM clientes WHERE estado_cliente = 3 ORDER BY apellidos LIMIT $empieza, $por_pagina";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchCliente($value){
		$sql = "SELECT id_cliente, nombres, apellidos, correo_electronico FROM clientes WHERE nombres LIKE ? OR apellidos LIKE ? AND estado_cliente = 3 ORDER BY apellidos";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function getClientes22($empieza, $por_pagina){
		$sql = "SELECT id_cliente, nombres, apellidos, correo_electronico FROM clientes WHERE estado_cliente = 4 ORDER BY apellidos LIMIT $empieza, $por_pagina";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchCliente2($value){
		$sql = "SELECT id_cliente, nombres, apellidos, correo_electronico FROM clientes WHERE nombres LIKE ? OR apellidos LIKE ? AND estado_cliente = 4 ORDER BY apellidos";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function updateAut($contra){
		$sql = "UPDATE clientes SET autenticacion = ? WHERE correo_electronico = ?";
		$params = array($contra, $this->correo);
		return Database::executeRow($sql, $params);
	}

	public function bloquearCliente(){
		$sql = "UPDATE clientes SET estado_cliente = ? WHERE id_cliente = ?";
		$params = array(4, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function desbloquearCliente(){
		$sql = "UPDATE clientes SET estado_cliente = ? WHERE id_cliente = ?";
		$params = array(3, $this->id);
		return Database::executeRow($sql, $params);
	}
}

?>
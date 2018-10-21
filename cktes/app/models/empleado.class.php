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
	private $archivo = null;
	private $fecha = null;
	private $fecha2 = null;
	private $estado = null;
	private $ip = null;
	private $contador = null;
	private $autenticacion = null;
	private $est_aut = null;

	private $dashboard = null;
	private $usuarios = null;
	private $clientes = null;
	private $productos = null;
	private $ordenes = null;
	private $manufacturacion = null;
	private $desarrollo = null;
	private $importacion = null;

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

	public function setEst($value){
		if($this->validateId($value)){
			$this->est_aut = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getEst(){
		return $this->est_aut;
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
		if($this->validateImage($file, $this->imagen, "../../web/img/empleados/", 300, 300)){
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
		if(unlink("../../web/img/empleados/".$this->imagen)){
			$this->imagen = null;
			return true;
		}else{
			return false;
		}
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

	public function setId_permiso($value){
		if($this->validateId($value)){
			$this->id_permiso = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_permiso(){
		return $this->id_permiso;
	}

	public function setFecha($value){
		if($this->validateAlphanumeric($value, 1, 30)){
			$this->fecha = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getFecha(){
		return $this->fecha;
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


	
	public function setDashboard($value){
		if($this->validateId($value)){
			$this->dashboard = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getDashboard(){
		return $this->dashboard;
	}
	public function setUsuarios($value){
		if($this->validateId($value)){
			$this->usuarios = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getUsuarios(){
		return $this->usuarios;
	}
	public function setClientes($value){
		if($this->validateId($value)){
			$this->clientes = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getClientes(){
		return $this->clientes;
	}
	public function setProductos($value){
		if($this->validateId($value)){
			$this->productos = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getProductos(){
		return $this->productos;
	}
	public function setOrdenes($value){
		if($this->validateId($value)){
			$this->ordenes = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getOrdenes(){
		return $this->ordenes;
	}
	public function setManufacturacion($value){
		if($this->validateId($value)){
			$this->manufacturacion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getManufacturacion(){
		return $this->manufacturacion;
	}
	public function setDesarrollo($value){
		if($this->validateId($value)){
			$this->desarrollo = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getDesarrollo(){
		return $this->desarrollo;
	}
	public function setImportacion($value){
		if($this->validateId($value)){
			$this->importacion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getImportacion(){
		return $this->importacion;
	}
	


	//Métodos para manejar la sesión del usuario
	public function checkCorreo(){
		$sql = "SELECT id_empleado, correo_electronico, nombres, apellidos, imagen, id_permiso FROM empleado WHERE correo_electronico = ?";
		$params = array($this->correo_electronico);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->id_empleado = $data['id_empleado'];
			$this->correo_electronico = $data['correo_electronico'];
			$this->nombres = $data['nombres'];
			$this->apellidos = $data['apellidos'];
			$this->imagen = $data['imagen'];
			$this->id_permiso = $data['id_permiso'];
			return true;
		}else{
			return false;
		}
	}
	public function checkPassword(){
		$sql = "SELECT contrasena, estado, fecha_bloqueo, dashboard, usuarios, clientes, productos, ordenes, manufacturacion, desarrollo, importacion FROM empleado INNER JOIN permisos USING(id_permiso) WHERE id_empleado = ?";
		$params = array($this->id_empleado);
		$data = Database::getRow($sql, $params);
		if(password_verify($this->contrasena, $data['contrasena'])){
			$this->estado = $data['estado'];
			$this->fecha2 = $data['fecha_bloqueo'];
			$this->dashboard = $data['dashboard'];
			$this->usuarios = $data['usuarios'];
			$this->clientes = $data['clientes'];
			$this->productos = $data['productos'];
			$this->ordenes = $data['ordenes'];
			$this->manufacturacion = $data['manufacturacion'];
			$this->desarrollo = $data['desarrollo'];
			$this->importacion = $data['importacion'];
			return true;
		}else{
			return false;
		}
	}
	public function changePassword(){
		$hash = password_hash($this->contrasena, PASSWORD_DEFAULT);
		$sql = "UPDATE empleado SET contrasena = ?, fecha_registro = ? WHERE id_empleado = ?";
		$fecha = date("Y-m-d");
		$params = array($hash, $fecha, $this->id_empleado);
		return Database::executeRow($sql, $params);
	}
	public function updateContra($contra){
		$hash = password_hash($contra, PASSWORD_DEFAULT);
		$sql = "UPDATE empleado SET contrasena = ? WHERE correo_electronico = ?";
		$params = array($hash, $this->correo_electronico);
		return Database::executeRow($sql, $params);
	}
	public function logOut(){
		return session_destroy();
	}

	//Metodos para el manejo del CRUD
	public function getEmpleado(){
		$sql = "SELECT id_empleado, nombres, apellidos, imagen, correo_electronico, permiso FROM empleado INNER JOIN permisos USING(id_permiso) WHERE estado = 1 ORDER BY id_empleado";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getEmpleado_bloq(){
		$sql = "SELECT id_empleado, nombres, apellidos, imagen, correo_electronico, permiso FROM empleado INNER JOIN permisos USING(id_permiso) WHERE estado = 0 ORDER BY id_empleado";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getPermisos(){
		$sql = "SELECT id_permiso, permiso FROM permisos";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchEmpleado($value){
		$sql = "SELECT id_empleado, nombres, apellidos, imagen, correo_electronico, contrasena, permiso FROM empleado INNER JOIN permisos USING(id_permiso) WHERE estado = 1 AND (nombres LIKE ? OR apellidos LIKE ?) ORDER BY id_empleado";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function searchEmpleado_bloq($value){
		$sql = "SELECT id_empleado, nombres, apellidos, imagen, correo_electronico, contrasena, permiso FROM empleado INNER JOIN permisos USING(id_permiso) WHERE estado = 0 AND (nombres LIKE ? OR apellidos LIKE ?) ORDER BY id_empleado";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function createEmpleado(){
		$hash = password_hash($this->contrasena, PASSWORD_DEFAULT);
		$sql = "INSERT INTO empleado(nombres, apellidos, imagen, correo_electronico, contrasena, id_permiso, fecha_registro, estado, contador, estado_autenticacion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$fech = date('y-m-d');
		$params = array($this->nombres, $this->apellidos, $this->imagen, $this->correo_electronico, $hash, $this->id_permiso, $fech, 1, 0, 1);
		return Database::executeRow($sql, $params);
	}
	public function readEmpleado(){
		$sql = "SELECT nombres, apellidos, imagen, correo_electronico, contrasena, id_permiso, fecha_registro, ip, estado_autenticacion FROM empleado WHERE id_empleado = ? ORDER BY id_empleado";
		$params = array($this->id_empleado);
		$empleado = Database::getRow($sql, $params);
		if($empleado){
            $this->nombres = $empleado['nombres'];
            $this->apellidos = $empleado['apellidos'];
            $this->imagen = $empleado['imagen'];
			$this->correo_electronico = $empleado['correo_electronico'];
			$this->contrasena = $empleado['contrasena'];
			$this->id_permiso = $empleado['id_permiso'];
			$this->fecha = $empleado['fecha_registro'];
			$this->ip = $empleado['ip'];
			$this->est_aut = $empleado['estado_autenticacion'];
			return true;
		}else{
			return null;
		}
	}
	public function readEmpleado2($correo){
		$sql = "SELECT nombres, apellidos, imagen, correo_electronico, contrasena, id_permiso, fecha_registro, ip, autenticacion, estado_autenticacion FROM empleado WHERE correo_electronico = ? ORDER BY id_empleado";
		$params = array($correo);
		$empleado = Database::getRow($sql, $params);
		if($empleado){
            $this->nombres = $empleado['nombres'];
            $this->apellidos = $empleado['apellidos'];
            $this->imagen = $empleado['imagen'];
			$this->correo_electronico = $empleado['correo_electronico'];
			$this->contrasena = $empleado['contrasena'];
			$this->id_permiso = $empleado['id_permiso'];
			$this->fecha = $empleado['fecha_registro'];
			$this->ip = $empleado['ip'];
			$this->autenticacion = $empleado['autenticacion'];
			$this->est_aut = $empleado['estado_autenticacion'];
			return true;
		}else{
			return null;
		}
	}
	public function updateEmpleado(){
		$sql = "UPDATE empleado SET nombres = ?, apellidos = ?, imagen = ?, correo_electronico = ?, contrasena = ?, id_permiso = ?, estado_autenticacion = ? WHERE id_empleado = ?";
		$params = array($this->nombres, $this->apellidos, $this->imagen, $this->correo_electronico, $this->contrasena, $this->id_permiso, $this->est_aut, $this->id_empleado);
		return Database::executeRow($sql, $params);
	}
	public function deleteEmpleado(){
		$sql = "DELETE FROM empleado WHERE id_empleado = ?";
		$params = array($this->id_empleado);
		return Database::executeRow($sql, $params);
	}

	public function bloquearEmpleado(){
		$sql = "UPDATE empleado SET estado = ? WHERE id_empleado = ?";
		$params = array(0, $this->id_empleado);
		return Database::executeRow($sql, $params);
	}
	public function desbloquearEmpleado(){
		$sql = "UPDATE empleado SET estado = ? WHERE id_empleado = ?";
		$params = array(1, $this->id_empleado);
		return Database::executeRow($sql, $params);
	}

	//Metodos para reportes
	public function getEmpleado2(){
		$sql = "SELECT id_empleado, nombres, apellidos, correo_electronico, permiso FROM empleado INNER JOIN permisos USING(id_permiso) ORDER BY id_empleado";
		$params = array(null);
		return Database::getRows($sql, $params);
	}

	public function getEmpleado3($permiso){
		$sql = "SELECT id_empleado, nombres, apellidos, correo_electronico, permiso FROM empleado INNER JOIN permisos USING(id_permiso) WHERE id_permiso = ? ORDER BY id_empleado";
		$params = array($permiso);
		return Database::getRows($sql, $params);
	}
	public function getNomTipo($permiso){
		$sql = "SELECT permiso FROM permisos WHERE id_permiso = ?";
		$params = array($permiso);
		return Database::getRow($sql, $params);
	}


	//Metodos para login
	public function updateEstado($user){
		$sql = "UPDATE empleado SET estado = ?, fecha_bloqueo = ? WHERE correo_electronico = ?";
		$fech = date('Y-m-d h:i:s');
		$params = array(0, $fech, $user);
		return Database::executeRow($sql, $params);
	}
	public function updateEstado2($user){
		$sql = "UPDATE empleado SET estado = ?, fecha_bloqueo = ? WHERE correo_electronico = ?";
		$params = array(1, null, $user);
		return Database::executeRow($sql, $params);
	}
	public function insertIp(){
		$sql = "UPDATE empleado SET ip = ? WHERE correo_electronico = ?";
		$params = array($this->ip, $this->correo_electronico);
		return Database::executeRow($sql, $params);
	}
	public function unsetIp($usuario){
		$sql = "UPDATE empleado SET ip = null WHERE correo_electronico = ?";
		$params = array($usuario);
		return Database::executeRow($sql, $params);
	}


	public function sumarIntento($usuario){
		$sql = "UPDATE empleado SET contador = contador + 1 WHERE correo_electronico = ?";
		$params = array($usuario);
		return Database::executeRow($sql, $params);
	}
	public function intentoCero($usuario){
		$sql = "UPDATE empleado SET contador = 0 WHERE correo_electronico = ?";
		$params = array($usuario);
		return Database::executeRow($sql, $params);
	}
	public function getIntentos($usuario){
		$sql = "SELECT contador FROM empleado WHERE correo_electronico = ?";
		$params = array($usuario);
		$empleado = Database::getRow($sql, $params);
		if($empleado){
            $this->contador = $empleado['contador'];
			return true;
		}else{
			return null;
		}
	}
	public function updateAut($contra){
		$sql = "UPDATE empleado SET autenticacion = ? WHERE correo_electronico = ?";
		$params = array($contra, $this->correo_electronico);
		return Database::executeRow($sql, $params);
	}
}
?>
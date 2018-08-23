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
		if($this->validateAlphanumeric($value, 1, 20)){
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
		$sql = "SELECT contrasena, estado, fecha_bloqueo FROM empleado WHERE id_empleado = ?";
		$params = array($this->id_empleado);
		$data = Database::getRow($sql, $params);
		if(password_verify($this->contrasena, $data['contrasena'])){
			$this->estado = $data['estado'];
			$this->fecha2 = $data['fecha_bloqueo'];
			return true;
		}else{
			return false;
		}
	}
	public function changePassword(){
		$hash = password_hash($this->contrasena, PASSWORD_DEFAULT);
		$sql = "UPDATE empleado SET contrasena = ? WHERE id_empleado = ?";
		$params = array($hash, $this->id_empleado);
		return Database::executeRow($sql, $params);
	}
	public function updateContra($contra){
		$hash = password_hash($contra, PASSWORD_DEFAULT);
		$sql = "UPDATE empleado SET contrasena = ? WHERE correo_electronico = ?";
		$params = array($hash, $this->email);
		return Database::executeRow($sql, $params);
	}
	public function logOut(){
		return session_destroy();
	}

	//Metodos para el manejo del CRUD
	public function getEmpleado(){
		$sql = "SELECT id_empleado, nombres, apellidos, imagen, correo_electronico, permiso FROM empleado INNER JOIN permisos USING(id_permiso) ORDER BY id_empleado";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getPermisos(){
		$sql = "SELECT id_permiso, permiso FROM permisos";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchEmpleado($value){
		$sql = "SELECT id_empleado, nombres, apellidos, imagen, correo_electronico, contrasena, permiso FROM empleado INNER JOIN permisos USING(id_permiso) WHERE nombres LIKE ? OR apellidos LIKE ? ORDER BY id_empleado";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function createEmpleado(){
		$hash = password_hash($this->contrasena, PASSWORD_DEFAULT);
		$sql = "INSERT INTO empleado(nombres, apellidos, imagen, correo_electronico, contrasena, id_permiso, fecha_registro, estado) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
		$fech = date('y-m-d');
		$params = array($this->nombres, $this->apellidos, $this->imagen, $this->correo_electronico, $hash, $this->id_permiso, $fech, 1);
		return Database::executeRow($sql, $params);
	}
	public function readEmpleado(){
		$sql = "SELECT nombres, apellidos, imagen, correo_electronico, contrasena, id_permiso, fecha_registro, ip FROM empleado WHERE id_empleado = ? ORDER BY id_empleado";
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
			return true;
		}else{
			return null;
		}
	}
	public function updateEmpleado(){
		$sql = "UPDATE empleado SET nombres = ?, apellidos = ?, imagen = ?, correo_electronico = ?, contrasena = ?, id_permiso = ? WHERE id_empleado = ?";
		$params = array($this->nombres, $this->apellidos, $this->imagen, $this->correo_electronico, $this->contrasena, $this->id_permiso, $this->id_empleado);
		return Database::executeRow($sql, $params);
	}
	public function deleteEmpleado(){
		$sql = "DELETE FROM empleado WHERE id_empleado = ?";
		$params = array($this->id_empleado);
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


	//Metodos para login
	public function updateEstado($user){
		$sql = "UPDATE empleado SET estado = 0, fecha_bloqueo = ? WHERE correo_electronico = ?";
		$fech = date('Y-m-d h:i:s');
		$params = array($fech, $user);
		return Database::executeRow($sql, $params);
	}
	public function updateEstado2($user){
		$sql = "UPDATE empleado SET estado = 1 WHERE correo_electronico = ?";
		$params = array($user);
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
	
}
?>
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

	//Métodos para manejar la sesión del usuario
	public function checkCorreo(){
		$sql = "SELECT id_empleado FROM empleado WHERE correo_electronico = ?";
		$params = array($this->correo_electronico);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->id_empleado = $data['id_empleado'];
			$this->correo_electronico = $data['correo_electronico'];
			return true;
		}else{
			return false;
		}
	}
	public function checkPassword(){
		$sql = "SELECT contrasena FROM empleado WHERE id_empleado = ?";
		$params = array($this->id_empleado);
		$data = Database::getRow($sql, $params);
		if(password_verify($this->contrasena, $data['contrasena'])){
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
	public function logOut(){
		return session_destroy();
	}

	//Metodos para el manejo del CRUD
	public function getEmpleado(){
		$sql = "SELECT id_empleado, nombres, apellidos, imagen, correo_electronico, contrasena, id_permiso FROM empleado ORDER BY id_empleado";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchEmpleado($value){
		$sql = "SELECT id_empleado, nombres, apellidos, imagen, correo_electronico, contrasena, permiso FROM empleado INNER JOIN permisos USING(id_permiso) WHERE nombres LIKE ? OR apellidos LIKE ? ORDER BY id_empleado";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function createEmpleado(){
		$sql = "INSERT INTO empleado(nombres, apellidos, imagen, correo_electronico, contrasena, id_permiso) VALUES (?, ?, ?, ?, ?, ?)";
		$params = array($this->nombres, $this->apellidos, $this->imagen, $this->correo_electronico, $this->contrasena, $this->id_permiso);
		return Database::executeRow($sql, $params);
	}
	public function readEmpleado(){
		$sql = "SELECT nombres, apellidos, imagen, correo_electronico, contrasena, id_permiso FROM empleado WHERE id_empleado = ? ORDER BY id_empleado";
		$params = array($this->id_empleado);
		$empleado = Database::getRow($sql, $params);
		if($empleado){
            $this->nombres = $empleado['nombres'];
            $this->apellidos = $empleado['apellidos'];
            $this->imagen = $empleado['imagen'];
			$this->correo_electronico = $empleado['correo_electronico'];
			$this->contrasena = $empleado['contrasena'];
			$this->id_permiso = $empleado['id_permiso'];
			return true;
		}else{
			return null;
		}
	}
	public function updateEmpleado(){
		$sql = "UPDATE empleado SET nombres = ?, apellidos = ?, imagen = ?, correo_electronico = ?, contrasena = ?, id_permiso = ? WHERE id_empleado = ?";
		$params = array($this->nombres, $this->apellidos, $this->imagen, $this->correo_electronico, $this->contrasena, $this->id_permiso, $this->id_desarrollo);
		return Database::executeRow($sql, $params);
	}
	public function deleteEmpleado(){
		$sql = "DELETE FROM empleado WHERE id_empleado = ?";
		$params = array($this->id_desarrollo);
		return Database::executeRow($sql, $params);
	}
}
?>
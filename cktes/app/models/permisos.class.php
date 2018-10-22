<?php
class Permiso extends Validator{
	//Declaración de propiedades
	private $id_permiso = null;
	private $permiso = null;
	private $dashboard = null;
	private $usuarios = null;
	private $clientes = null;
	private $productos = null;
	private $ordenes = null;
	private $manufacturacion = null;
	private $desarrollo = null;
	private $importacion = null;

    //Métodos para sobrecarga de propiedades
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
    
	public function setPermiso($value){
		if($this->validateAlphanumeric($value, 1, 30)){
			$this->permiso = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getPermiso(){
		return $this->permiso;
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

	//Metodos para el manejo del CRUD
	public function getPermisos(){
		$sql = "SELECT id_permiso, permiso FROM permisos WHERE id_permiso >1 ORDER BY id_permiso";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchPermiso($value){
		$sql = "SELECT id_permiso, permiso FROM permisos WHERE permiso LIKE ? ORDER BY id_permiso";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function createPermiso(){
		$sql = "INSERT INTO permisos(permiso, dashboard, usuarios, clientes, productos, ordenes, manufacturacion, desarrollo, importacion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$params = array($this->permiso, $this->dashboard, $this->usuarios, $this->clientes, $this->productos, $this->ordenes, $this->manufacturacion, $this->desarrollo, $this->importacion);
		return Database::executeRow($sql, $params);
	}
	public function readPermiso(){
		$sql = "SELECT permiso, dashboard, usuarios, clientes, productos, ordenes, manufacturacion, desarrollo, importacion FROM permisos WHERE id_permiso = ? ORDER BY id_permiso";
		$params = array($this->id_permiso);
		$permiso = Database::getRow($sql, $params);
		if($permiso){
			$this->permiso = $permiso['permiso'];
			$this->dashboard = $permiso['dashboard'];
			$this->usuarios = $permiso['usuarios'];
			$this->clientes = $permiso['clientes'];
			$this->productos = $permiso['productos'];
			$this->ordenes = $permiso['ordenes'];
			$this->manufacturacion = $permiso['manufacturacion'];
			$this->desarrollo = $permiso['desarrollo'];
			$this->importacion = $permiso['importacion'];
			return true;
		}else{
			return null;
		}
	}
	public function updatePermiso(){
		$sql = "UPDATE permisos SET permiso = ?, dashboard = ?, usuarios = ?, clientes = ?, productos = ?, ordenes = ?, manufacturacion = ?, desarrollo = ?, importacion = ? WHERE id_permiso = ?";
		$params = array($this->permiso, $this->dashboard, $this->usuarios, $this->clientes, $this->productos, $this->ordenes, $this->manufacturacion, $this->desarrollo, $this->importacion, $this->id_permiso);
		return Database::executeRow($sql, $params);
	}
	public function deletePermiso(){
		$sql = "DELETE FROM permisos WHERE id_permiso = ?";
		$params = array($this->id_permiso);
		return Database::executeRow($sql, $params);
	}
}
?>
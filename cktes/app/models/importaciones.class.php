<?php
class Importacion extends Validator{
	//Declaración de propiedades
	private $id_importacion = null;
    private $cantidad = null;
    private $fecha = null;
    private $producto = null; 
    private $id_cliente = null;
		private $id_estado = null;
		private $fecha_estimada = null;

    private $nombres = null;
    private $apellidos = null;
    private $estado = null;

    //Métodos para sobrecarga de propiedades
    public function setId_importacion($value){
		if($this->validateId($value)){
			$this->id_importacion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_importacion(){
		return $this->id_importacion;
    }
    
	public function setCantidad($value){
		if($this->validateAlphanumeric($value, 1, 4)){
			$this->cantidad = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCantidad(){
		return $this->cantidad;
    }

	public function setFecha($value){
		if($this->validateAlphanumeric($value, 1, 20)){
			$this->fecha = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getFecha(){
		return $this->fecha;
    }
    public function setProducto($value){
		if($this->validateAlphanumeric($value, 1, 120)){
			$this->producto = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getProducto(){
		return $this->producto;
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
    public function setId_estado($value){
		if($this->validateId($value)){
			$this->id_estado = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_estado(){
		return $this->id_estado;
		}
		
		public function setFecha_estimada($value){
			$this->fecha_estimada = $value;
			return true;
		}
		public function getFecha_estimada(){
			return $this->fecha_estimada;
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
    public function setEstado($value){
		if($this->validateAlphanumeric($value, 1, 80)){
			$this->estado = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getEstado(){
		return $this->estado;
    }
    public function setNombre($value){
		if($this->validateAlphanumeric($value, 1, 80)){
			$this->nombre = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getNombre(){
		return $this->nombre;
    }

    //Metodos para el manejo del CRUD
    public function getEstados(){
		$sql = "SELECT id_estado, estado FROM estado WHERE id_tipo_estado = 6";
		$params = array(null);
		return Database::getRows($sql, $params);
	}

	public function getImportacion(){
		$sql = "SELECT id_importacion, importacion_especial.cantidad, nombre, fecha, fecha_estimada, nombres, apellidos, estado FROM importacion_especial INNER JOIN estado USING(id_estado) INNER JOIN clientes USING(id_cliente) WHERE importacion_especial.id_estado = 9 ORDER BY id_importacion";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getImportacion2($empieza, $por_pagina){
		$sql = "SELECT id_importacion, importacion_especial.cantidad, nombre, fecha, fecha_estimada, nombres, apellidos, estado FROM importacion_especial INNER JOIN estado USING(id_estado) INNER JOIN clientes USING(id_cliente) WHERE importacion_especial.id_estado = 9 ORDER BY id_importacion LIMIT $empieza, $por_pagina";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getImportacionCom(){
		$sql = "SELECT id_importacion, importacion_especial.cantidad, nombre, fecha, fecha_estimada, nombres, apellidos, estado FROM importacion_especial INNER JOIN estado USING(id_estado) INNER JOIN clientes USING(id_cliente) WHERE importacion_especial.id_estado = 10 ORDER BY id_importacion";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getImportacionCom2($empieza, $por_pagina){
		$sql = "SELECT id_importacion, importacion_especial.cantidad, nombre, fecha, fecha_estimada, nombres, apellidos, estado FROM importacion_especial INNER JOIN estado USING(id_estado) INNER JOIN clientes USING(id_cliente) WHERE importacion_especial.id_estado = 10 ORDER BY id_importacion LIMIT $empieza, $por_pagina";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchImportacion($value){
		$sql = "SELECT id_importacion, importacion_especial.cantidad, nombre, fecha, fecha_estimada, nombres, apellidos, estado FROM importacion_especial INNER JOIN estado USING(id_estado) INNER JOIN clientes USING(id_cliente) WHERE (nombres LIKE ? OR apellidos LIKE ?) AND importacion_especial.id_estado = 9 ORDER BY id_importacion";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function searchImportacion2($value){
		$sql = "SELECT id_importacion, importacion_especial.cantidad, nombre, fecha, fecha_estimada, nombres, apellidos, estado FROM importacion_especial INNER JOIN estado USING(id_estado) INNER JOIN clientes USING(id_cliente) WHERE (nombres LIKE ? OR apellidos LIKE ?) AND importacion_especial.id_estado = 10 ORDER BY id_importacion";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function createImportacion(){
		$sql = "INSERT INTO importacion_especial(cantidad, fecha, fecha_estimada, nombre, id_cliente, id_estado) VALUES (?, ?, ?, ?, ?, ?)";
		$params = array($this->cantidad, $this->fecha, $this->fecha_estimada, $this->producto, $this->id_cliente, $this->id_estado);
		return Database::executeRow($sql, $params);
	}
	public function readImportacion(){
		$sql = "SELECT id_importacion, nombre, importacion_especial.id_cliente, importacion_especial.cantidad, fecha, fecha_estimada, nombres, apellidos, importacion_especial.id_estado FROM importacion_especial INNER JOIN clientes USING(id_cliente) WHERE id_importacion = ? ORDER BY id_importacion";
		$params = array($this->id_importacion);
		$importacion = Database::getRow($sql, $params);
		if($importacion){
            $this->id_importacion = $importacion['id_importacion'];
            $this->cantidad = $importacion['cantidad'];
            $this->fecha = $importacion['fecha'];
						$this->producto = $importacion['nombre'];
						$this->fecha_estimada = $importacion['fecha_estimada'];
            $this->nombres = $importacion['nombres'];
            $this->apellidos = $importacion['apellidos'];
            $this->id_estado = $importacion['id_estado'];
            $this->id_cliente = $importacion['id_cliente'];
			return true;
		}else{
			return null;
		}
	}
	public function updateImportacion(){
		$sql = "UPDATE importacion_especial SET cantidad = ?, fecha = ?, fecha_estimada = ?, nombre = ?, id_cliente = ?, id_estado = ? WHERE id_importacion = ?";
		$params = array($this->cantidad, $this->fecha, $this->fecha_estimada, $this->producto, $this->id_cliente, $this->id_estado, $this->id_importacion);
		return Database::executeRow($sql, $params);
	}
	public function deleteImportacion(){
		$sql = "DELETE FROM importacion_especial WHERE id_importacion = ?";
		$params = array($this->id_importacion);
		return Database::executeRow($sql, $params);
	}

	//Metodos para reportes
	public function getImportacionR(){
		$sql = "SELECT id_importacion, importacion_especial.cantidad, nombre, fecha, fecha_estimada, nombres, apellidos, estado FROM importacion_especial INNER JOIN estado USING(id_estado) INNER JOIN clientes USING(id_cliente) ORDER BY id_importacion";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	//create para importacion nueva 
	public function createImportacionNueva(){
		$sql = "INSERT INTO importacion_especial(cantidad, fecha, fecha_estimada, nombre, id_cliente, id_estado) VALUES (?, ?, ?, ?, ?, ?)";
		$estado = 9; 
		$fechae = date("Y-m-d");
		$fechaa = date("Y-m-d");
		$params = array($this->cantidad, $fechaa, $fechae, $this->producto, $this->id_cliente, $estado);
		return Database::executeRow($sql, $params);
	}
}
?>
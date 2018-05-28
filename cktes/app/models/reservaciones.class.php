<?php
class Reservacion extends Validator{
	//Declaración de propiedades
	private $id_reservacion = null;
    private $cantidad = null;
    private $fecha = null;
    private $hora = null;
    private $id_producto = null;
    private $id_cliente = null;

    private $nombres = null;
    private $apellidos = null;
    private $estado = null;
    private $nombre = null;

    //Métodos para sobrecarga de propiedades
    public function setId_reservacion($value){
		if($this->validateId($value)){
			$this->id_reservacion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_reservacion(){
		return $this->id_reservacion;
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
    public function setHora($value){
		if($this->validateAlphanumeric($value, 1, 20)){
			$this->hora = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getHora(){
		return $this->hora;
    }
    public function setId_producto($value){
		if($this->validateId($value)){
			$this->id_producto = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_producto(){
		return $this->id_producto;
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
	public function getReservacion(){
		$sql = "SELECT id_reservacion, reservaciones.cantidad, fecha, hora, nombre, nombres, apellidos, estado FROM reservaciones INNER JOIN estado USING(id_estado) INNER JOIN productos USING(id_producto) INNER JOIN clientes USING(id_cliente) ORDER BY id_reservacion";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchReservacion($value){
		$sql = "SELECT id_reservacion, reservaciones.cantidad, fecha, hora, nombre, nombres, apellidos, estado FROM reservaciones INNER JOIN estado USING(id_estado) INNER JOIN productos USING(id_producto) INNER JOIN clientes USING(id_cliente) WHERE nombres LIKE ? OR apellidos LIKE ? ORDER BY id_reservacion";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function createReservacion(){
		$sql = "INSERT INTO reservaciones(cantidad, fecha, hora, id_producto, id_cliente, id_estado) VALUES (?, ?, ?, ?, ?, ?)";
		$params = array($this->cantidad, $this->fecha, $this->hora, $this->id_producto, $this->id_cliente, $this->id_estado);
		return Database::executeRow($sql, $params);
	}
	public function readReservacion(){
		$sql = "SELECT id_reservacion, reservaciones.cantidad, fecha, hora, nombre, nombres, apellidos, reservaciones.id_estado FROM reservaciones INNER JOIN productos USING(id_producto) INNER JOIN clientes USING(id_cliente) WHERE id_reservacion = ? ORDER BY id_reservacion";
		$params = array($this->id_reservacion);
		$proveedor = Database::getRow($sql, $params);
		if($proveedor){
            $this->id_reservacion = $proveedor['id_reservacion'];
            $this->cantidad = $proveedor['cantidad'];
            $this->fecha = $proveedor['fecha'];
            $this->hora = $proveedor['hora'];
            $this->nombre = $proveedor['nombre'];
            $this->nombres = $proveedor['nombres'];
            $this->apellidos = $proveedor['apellidos'];
            $this->id_estado = $proveedor['id_estado'];
			return true;
		}else{
			return null;
		}
	}
	public function updateReservacion(){
		$sql = "UPDATE reservaciones SET cantidad = ?, fecha = ?, hora = ?, id_producto = ?, id_cliente = ?, id_estado = ? WHERE id_reservacion = ?";
		$params = array($this->cantidad, $this->fecha, $this->hora, $this->id_producto, $this->id_cliente, $this->id_estado, $this->id_reservacion);
		return Database::executeRow($sql, $params);
	}
	public function deleteReservacion(){
		$sql = "DELETE FROM reservaciones WHERE id_reservacion = ?";
		$params = array($this->id_reservacion);
		return Database::executeRow($sql, $params);
	}
}
?>
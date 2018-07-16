<?php
class Detalle extends Validator{
	//Declaración de propiedade
	private $id = null;
	private $estado = null;
    private $producto = null;
    private $cantidad = null;
	private $compra= null;
	private $existencias = null;
	private $cliente =null;
    

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
    public function setProducto($value){
		if($this->validateId($value)){
			$this->producto = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getProducto(){
		return $this->producto;
    }
    public function setCantidad($value){
        if($this->validateId($value)){
			$this->cantidad = $value;
			return true;
		}else{
			return false;
		}
		}
	
	public function getCantidad(){
		return $this->cantidad;
    }
    public function setCompra($value){
        if($this->validateId($value)){
			$this->compra = $value;
			return true;
		}else{
			return false;
		}
		}
	
	public function getCompra(){
		return $this->compra;
	}
	public function setExistencias($value){
        if($this->validateId($value)){
			$this->existencias = $value;
			return true;
		}else{
			return false;
		}
		}
	
	public function getExistencias(){
		return $this->existencias;
	}
	public function setCliente($value){
        if($this->validateId($value)){
			$this->cliente = $value;
			return true;
		}else{
			return false;
		}
		}
	
	public function getCliente(){
		return $this->cliente;
    }
 



	//Metodos para el manejo del CRUD
	public function createDetalle(){
		$sql = "INSERT INTO detalle_carrito( cantidad, id_carrito, id_producto) VALUES(?,?,?)";
		$params = array( $this->cantidad, $this->compra, $this->producto );
		return Database::executeRow($sql, $params);
	}
	public function readDetalle(){
		$sql = "SELECT id_detalle, url_imagen, nombre, precio, productos.cantidad, detalle_carrito.cantidad, estado_carrito FROM detalle_carrito INNER JOIN productos USING(id_producto) INNER JOIN carrito USING (id_carrito) WHERE detalle_carrito.id_carrito = ? AND estado_carrito=5";
		$params = array($this->compra);
		return Database::getRows($sql, $params);
		
	}
	public function readProducto(){
		$sql = "SELECT  id_producto, id_carrito, detalle_carrito.cantidad, productos.cantidad as existencias FROM detalle_carrito INNER JOIN productos USING(id_producto) WHERE id_detalle = ?";
		$params = array($this->id);
		$producto = Database::getRow($sql, $params);
		if($producto){
			$this->producto = $producto['id_producto'];
			$this->compra = $producto['id_carrito'];
			$this->cantidad= $producto['cantidad'];
			$this->existencias= $producto['existencias'];
           
			return true;
		}else{
			return null;
		}
	}
	public function createCompra(){
		$sql = "INSERT INTO carrito(fecha, id_cliente, estado_carrito) VALUES(?, ?, ?)";
		$fechaa = date('y-m-d');
		$estadoo = 5;
		$params = array($fechaa, $this->cliente, $estadoo);
		return Database::executeRow($sql, $params);
	}
	public function updateDetalle(){
		$sql = "UPDATE detalle_carrito SET cantidad = ? WHERE id_producto = ? AND id_carrito= ?";
		$params = array($this->cantidad, $this->producto, $this->compra);
		return Database::executeRow($sql, $params);
	}
	public function deleteDetalle(){
		$sql = "DELETE FROM detalle_carrito WHERE id_detalle = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
	public function readExistencias(){
		$sql = "SELECT productos.cantidad FROM detalle_carrito INNER JOIN productos USING(id_producto) WHERE id_detalle = ?";
		$params = array($this->id);
		return Database::getRows($sql, $params);
		
}
public function readCarrito(){
        $sql = "SELECT id_producto, detalle_carrito.id_carrito, detalle_carrito.cantidad, estado_carrito FROM detalle_carrito INNER JOIN carrito ON detalle_carrito.id_carrito = carrito.id_carrito WHERE id_producto = ? AND detalle_carrito.id_carrito = ? AND estado_carrito=5 ";
		$params = array($this->producto , $this->compra);
		return Database::getRows($sql, $params);
	}
	public function Modificarexistencia(){
		    $sql = "UPDATE productos SET cantidad = ? WHERE id_producto = ?";
			$params = array($this->cantidad, $this->producto);
			return Database::executeRow($sql, $params);
		}
	public function getExistenciaas(){
			$sql = "SELECT Existencias FROM juguete WHERE Id_juguete = ?";
			$params = array($this->juguete);
			return Database::getRows($sql, $params);
			}
	public function getCarrito(){
			$sql = "SELECT id_detalle, nombre, precio , productos.url_imagen , detalle_carrito.cantidad , detalle_carrito.id_producto , productos.cantidad as Existencias FROM detalle_carrito INNER JOIN productos USING(id_producto) WHERE id_carrito=?";
			$params = array($this->compra);
			return Database::getRows($sql, $params);
				}
	public function Comprar(){
			$sql = "UPDATE carrito SET estado_carrito = ?, fecha=? WHERE id_carrito = ?";
			$fechaa = date('y/m/d');
			$estadofinalizado = 6;
		    $params = array($estadofinalizado,$fechaa,$this->compra);
		    return Database::executeRow($sql, $params);
					}
	public function readHistorialdetalle(){
			$sql = "SELECT id_detalle, url_imagen, nombre, precio, detalle_carrito.cantidad, productos.cantidad, productos.id_producto FROM detalle_carrito INNER JOIN productos USING(id_producto) WHERE id_carrito =?";
			$params = array($this->compra);
			return Database::getRows($sql, $params);
						
					}
	public function maxId(){
		$sql = "SELECT id_carrito, estado_carrito FROM carrito WHERE id_carrito= (SELECT MAX(id_carrito) FROM carrito WHERE id_cliente = ?)";
		$params = array($this->cliente);
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
	public function readHistorial(){
		$sql = "SELECT id_carrito, id_cliente,fecha, estado FROM carrito INNER JOIN estado ON carrito.estado_carrito= estado.id_estado  WHERE id_cliente = ? AND estado_carrito = 6";
		$params = array($this->cliente);
		return Database::getRows($sql, $params);
	}
	  
	//Metodos para reportes
	public function clienteVenta($venta){
		$sql = "SELECT ROUND(SUM(detalle_carrito.cantidad*precio), 2) AS venta, id_cliente, nombres, apellidos, correo_electronico FROM detalle_carrito INNER JOIN productos USING(id_producto) INNER JOIN carrito USING(id_carrito) INNER JOIN clientes USING(id_cliente) WHERE (SELECT ROUND(SUM(detalle_carrito.cantidad*precio), 2) AS venta FROM detalle_carrito INNER JOIN productos USING(id_producto) INNER JOIN carrito USING(id_carrito) INNER JOIN clientes USING(id_cliente)) >= ? Group BY id_cliente";
		$params = array($venta);
		return Database::getRows($sql, $params);
	}
	
}
?>
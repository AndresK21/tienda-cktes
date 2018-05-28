<?php
class Importaciones extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $nombre = null;
	private $imagen = null;
	private $descripcion = null;
	private $ficha_tecnica = null;
	private $cantidad = null;
	private $precio = null;
	private $tamano = null;
	private $cliente = null;
	private $estado = null;

	//Métodos para sobrecarga de propiedades
	//ESTE ES EL ID DE LA IMPORTACION
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
	//ESTE ES EL NOMBRE DE LA IMPORTACION
	public function setNombre($value){
		if($this->validateAlphanumeric($value, 1, 50)){
			$this->nombre = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getNombre(){
		return $this->nombre;
	}
    //ESTE ES LA DESCRIPCION DE LA IMPORTACION
	public function setDescripcion($value){
		if($this->validateAlphanumeric($value, 1, 200)){
			$this->descripcion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getDescripcion(){
		return $this->descripcion;
	}
    //ESTE ES LA FICHA TECNICA DE LA IMPORTACION
	public function setFicha_T($value){
		if($this->validateAlphanumeric($value, 1 , 200)){
			$this->ficha_tecnica = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getFicha_T(){
		return $this->ficha_tecnica;
	}

	 //ESTE ES EL PRECIO DE LA IMPORTACION
	public function setPrecio($value){
		if($this->validateMoney($value)){
			$this->precio = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getPrecio(){
		return $this->precio;
	}
    //ESTE ES LA IMAGEN DE LA IMPORTACION
	public function setImagen($file){
		if($this->validateImage($file, $this->imagen, "../../web/img/productos/", 230, 230)){
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
		if(unlink("../../web/img/productos/".$this->imagen)){
			$this->imagen = null;
			return true;
		}else{
			return false;
		}
	}
    //ESTE ES EL TAMAÑO DE LA IMPORTACION
	public function setTamano($value){
		if($this->validateNumber($value)){
			$this->tamano = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTamano(){
		return $this->tamano;
	}

	//ESTE ES LA CANTIDAD DE LA IMPORTACION
	public function setCantidad($value){
		if($this->validateNumber($value)){
			$this->cantidad = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCantidad(){
		return $this->cantidad;
	}
	//ESTE ES EL Cliente ID DE LA IMPORTACION
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
	//ESTE ES EL Estado DE LA IMPORTACION
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
	
	//Metodos para el manejo del CRUD
	public function getImportacionesONLY(){
		$sql = "SELECT * from productos where id_tipo_producto = 2";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchONLYProducto($value){
		$sql = "SELECT * FROM productos WHERE nombre LIKE ? AND id_tipo_producto = 2 ORDER BY nombre";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function readImportacion(){
		$sql = "SELECT nombre, url_imagen, descripcion, ficha_tecnica, cantidad, precio, tamano, id_presentacion, id_proveedor, id_marca, id_estado FROM productos WHERE id_producto = ? AND id_tipo_producto = 2 ORDER BY id_producto";
		$params = array($this->id);
		$importacion = Database::getRow($sql, $params);
		if($importacion){
            $this->nombre = $importacion['nombre'];
            $this->imagen = $importacion['url_imagen'];
            $this->descripcion = $importacion['descripcion'];
			$this->ficha_tecnica = $importacion['ficha_tecnica'];
			$this->cantidad = $importacion['cantidad'];
			$this->precio = $importacion['precio'];
			$this->tamano = $importacion['tamano'];
			return true;
		}else{
			return null;
		}
	}
	public function createReservacion(){
		$sql = "INSERT INTO reservaciones(id_producto, id_cliente, cantidad, fecha, hora, id_estado) VALUES(?, ?, ?, ?, ?, ?)";
		$fecha = date("Y/m/d");
        $hora = date("h:i:s");
		$estado = 5;
		$params = array($this->id, $this->cliente, $this->cantidad, $fecha, $hora, $estado);
		return Database::getRows($sql, $params);
	}
	public function Existencias_productos(){
		$sql = "SELECT cantidad FROM productos WHERE id_producto = ?";
		$params = array($this->id);
		return Database::getRows($sql, $params);
	}
	public function readImportaciones(){
		$sql = "SELECT * FROM reservaciones WHERE id_producto = ? AND id_cliente = ? AND id_estado = 5";
		$params = array($this->id ,$this->cliente);
		return Database::getRows($sql, $params);
	}

}
?>
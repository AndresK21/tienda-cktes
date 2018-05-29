<?php
class Valoracion extends Validator{
	//Declaración de propiedades
	private $id_valoracion = null;
    private $estrellas = null;
    private $comentario = null;
    private $id_producto = null;
    private $id_cliente = null;

    //Métodos para sobrecarga de propiedades
    public function setId_valoracion($value){
		if($this->validateId($value)){
			$this->id_valoracion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_valoracion(){
		return $this->id_valoracion;
    }
    
	public function setEstrellas($value){
		if($this->validateAlphanumeric($value, 1, 5)){
			$this->estrellas = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getEstrellas(){
		return $this->estrellas;
	}
	
	public function setComentario($value){
		if($this->validateAlphanumeric($value, 1, 250)){
			$this->comentario = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getComentario(){
		return $this->comentario;
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

	//Metodos para el manejo del CRUD
	public function getValoracion(){
		$sql = "SELECT id_valoracion, estrellas, comentario, id_producto, id_cliente FROM valoraciones ORDER BY id_valoracion";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getValoracionesProducto(){
		$sql = "SELECT valoraciones.id_producto, valoraciones.id_valoracion, clientes.correo_electronico, valoraciones.comentario FROM valoraciones INNER JOIN clientes ON clientes.id_cliente = valoraciones.id_cliente WHERE id_producto = ? ";
		$params = array($this->id_producto);
		return Database::getRows($sql, $params);
	}
	public function getEstrellasPromedio(){
		$sql = "SELECT ROUND(AVG(estrellas)) AS Estrellas FROM valoraciones WHERE id_producto = ? ";
		$params = array($this->id_producto);
		return Database::getRows($sql, $params);
	}
	public function getValoracionesP(){
		$sql = "SELECT ROUND(AVG(estrellas))AS estrella,valoraciones.id_producto, valoraciones.id_valoracion, cliente.nombre_usuario, valoraciones.comentario FROM valoraciones INNER JOIN cliente ON cliente.id_cliente = valoraciones.id_cliente WHERE id_producto = ? ";
		$params = array($this->id_producto);
		return Database::getRows($sql, $params);
	}

	public function getValoraciones2(){
		$sql = "SELECT id_valoracion, comentario, id_producto FROM valoraciones WHERE id_producto = ?";
		$params = array($this->id_producto);
		return Database::getRows($sql, $params);
	}

	public function searchValoracion($value){
		$sql = "SELECT id_valoracion, estrellas, comentario, nombre, nombres, apellidos FROM valoraciones INNER JOIN productos USING(id_producto) INNER JOIN clientes USING(id_cliente) WHERE comentario LIKE ? ORDER BY id_valoracion";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function createValoracion(){
		$sql = "INSERT INTO valoraciones(estrellas, comentario, id_producto, id_cliente) VALUES (?, ?, ?, ?)";
		$params = array($this->estrellas, $this->comentario, $this->id_producto, $this->id_cliente);
		return Database::executeRow($sql, $params);
	}
	public function readValoracion(){
		$sql = "SELECT estrellas, comentario, id_producto, id_cliente FROM valoraciones WHERE id_valoracion = ? ORDER BY id_valoracion";
		$params = array($this->id_valoracion);
		$svaloracion = Database::getRow($sql, $params);
		if($valoracion){
			$this->estrellas = $valoracion['estrellas'];
			$this->comentario = $valoracion['comentario'];
			$this->id_producto = $valoracion['id_producto'];
			$this->id_cliente = $valoracion['id_cliente'];
			return true;
		}else{
			return null;
		}
	}
	public function updateValoracion(){
		$sql = "UPDATE valoraciones SET estrellas = ?, comentario = ?, id_producto = ?, id_cliente = ? WHERE id_valoracion = ?";
		$params = array($this->estrellas, $this->comentario, $this->id_producto, $this->id_cliente, $this->id_valoracion);
		return Database::executeRow($sql, $params);
	}
	public function deleteValoracion(){
		$sql = "DELETE FROM valoraciones WHERE id_valoracion = ?";
		$params = array($this->id_valoracion);
		return Database::executeRow($sql, $params);
	}
}
?>
<?php
class Tipo_cliente extends Validator{
	//Declaración de propiedades
	private $id_tipo = null;
	private $tipo_cliente = null;

	//Métodos para sobrecarga de propiedades
	public function setId_tipo($value){
		if($this->validateId($value)){
			$this->id_tipo = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_tipo(){
		return $this->id_tipo;
	}
	
	public function setTipo_cliente($value){
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

	//Metodos para el manejo del CRUD
	public function getCategorias(){
		$sql = "SELECT id_categoria, nombre_categoria, imagen_categoria, descripcion_categoria FROM categorias ORDER BY nombre_categoria";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchCategoria($value){
		$sql = "SELECT * FROM categorias WHERE nombre_categoria LIKE ? OR descripcion_categoria LIKE ? ORDER BY nombre_categoria";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function createCategoria(){
		$sql = "INSERT INTO categorias(nombre_categoria, imagen_categoria, descripcion_categoria) VALUES(?, ?, ?)";
		$params = array($this->nombre, $this->imagen, $this->descripcion);
		return Database::executeRow($sql, $params);
	}
	public function readCategoria(){
		$sql = "SELECT nombre_categoria, imagen_categoria, descripcion_categoria FROM categorias WHERE id_categoria = ?";
		$params = array($this->id);
		$categoria = Database::getRow($sql, $params);
		if($categoria){
			$this->nombre = $categoria['nombre_categoria'];
			$this->imagen = $categoria['imagen_categoria'];
			$this->descripcion = $categoria['descripcion_categoria'];
			return true;
		}else{
			return null;
		}
	}
	public function updateCategoria(){
		$sql = "UPDATE categorias SET nombre_categoria = ?, imagen_categoria = ?, descripcion_categoria = ? WHERE id_categoria = ?";
		$params = array($this->nombre, $this->imagen, $this->descripcion, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function deleteCategoria(){
		$sql = "DELETE FROM categorias WHERE id_categoria = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>
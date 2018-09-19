<?php
class Descuento extends Validator{
	//Declaración de propiedades
	private $id_descuento = null;
    private $descuento = null;
	private $valor = null;

    //Métodos para sobrecarga de propiedades
    public function setId_descuento($value){
		if($this->validateId($value)){
			$this->id_descuento = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_descuento(){
		return $this->id_descuento;
    }

    public function setDescuento($value){
		if($this->validateAlphanumeric($value, 1, 11)){
			$this->descuento = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getDescuento(){
		return $this->descuento;
	}
	
	public function setValor($value){
		if($this->validateAlphanumeric($value, 1, 5)){
			$this->valor = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getValor(){
		return $this->valor;
    }

	//Metodos para el manejo del CRUD
	public function getDescuentos(){
		$sql = "SELECT id_descuento, descuento, valor FROM descuentos ORDER BY id_descuento";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchDescuento($value){
		$sql = "SELECT id_descuento, descuento, valor FROM descuentos WHERE descuento LIKE ? ORDER BY id_descuento";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function createDescuento(){
		$sql = "INSERT INTO descuentos(descuento, valor) VALUES (?, ?)";
		if($this->descuento >=10){
			$valor = '0.'.$this->descuento;
		}else if($this->descuento <10){
			$valor = '0.0'.$this->descuento;
		}
		$params = array($this->descuento, $valor);
		return Database::executeRow($sql, $params);
	}
	public function readDescuento(){
		$sql = "SELECT descuento, valor FROM descuentos WHERE id_descuento = ? ORDER BY id_descuento";
		$params = array($this->id_descuento);
		$descuent = Database::getRow($sql, $params);
		if($descuent){
			$this->descuento = $descuent['descuento'];
			$this->valor = $descuent['valor'];
			return true;
		}else{
			return null;
		}
	}
	public function updateDescuento(){
		$sql = "UPDATE descuentos SET descuento = ?, valor = ? WHERE id_descuento = ?";
		if($this->descuento >=10){
			$valor = '0.'.$this->descuento;
		}else if($this->descuento <10){
			$valor = '0.0'.$this->descuento;
		}
		$params = array($this->descuento, $valor, $this->id_descuento);
		return Database::executeRow($sql, $params);
	}
	public function deleteDescuento(){
		$sql = "DELETE FROM descuentos WHERE id_descuento = ?";
		$params = array($this->id_descuento);
		return Database::executeRow($sql, $params);
	}
}
?>
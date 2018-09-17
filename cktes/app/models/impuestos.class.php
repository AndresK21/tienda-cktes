<?php
class Impuesto extends Validator{
	//Declaración de propiedades
	private $id_impuesto = null;
    private $nombre = null;
	private $porcentaje = null;
	private $valor = null;

    //Métodos para sobrecarga de propiedades
    public function setId_impuesto($value){
		if($this->validateId($value)){
			$this->id_impuesto = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_impuesto(){
		return $this->id_impuesto;
    }
    
	public function setNombre($value){
		if($this->validateAlphanumeric($value, 1, 15)){
			$this->nombre = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getNombre(){
		return $this->nombre;
    }

    public function setPorcentaje($value){
		if($this->validateAlphanumeric($value, 1, 11)){
			$this->porcentaje = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getPorcentaje(){
		return $this->porcentaje;
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
	public function getImpuesto(){
		$sql = "SELECT id_impuesto, nombre, porcentaje FROM impuestos ORDER BY id_impuesto";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchImpuesto($value){
		$sql = "SELECT id_impuesto, nombre, porcentaje FROM impuestos WHERE nombre LIKE ? ORDER BY id_impuesto";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function createImpuesto(){
		$sql = "INSERT INTO impuestos(nombre, porcentaje, valor) VALUES (?, ?, ?)";
		if($this->porcentaje >=10){
			$valor = '0.'.$this->porcentaje;
		}else if($this->porcentaje <10){
			$valor = '0.0'.$this->porcentaje;
		}
		$params = array($this->nombre, $this->porcentaje, $valor);
		return Database::executeRow($sql, $params);
	}
	public function readImpuesto(){
		$sql = "SELECT nombre, porcentaje, valor FROM impuestos WHERE id_impuesto = ? ORDER BY id_impuesto";
		$params = array($this->id_impuesto);
		$impuesto = Database::getRow($sql, $params);
		if($impuesto){
            $this->nombre = $impuesto['nombre'];
			$this->porcentaje = $impuesto['porcentaje'];
			$this->valor = $impuesto['valor'];
			return true;
		}else{
			return null;
		}
	}
	public function updateImpuesto(){
		$sql = "UPDATE impuestos SET nombre = ?, porcentaje = ?, valor = ? WHERE id_impuesto = ?";
		if($this->porcentaje >=10){
			$valor = '0.'.$this->porcentaje;
		}else if($this->porcentaje <10){
			$valor = '0.0'.$this->porcentaje;
		}
		$params = array($this->nombre, $this->porcentaje, $valor, $this->id_impuesto);
		return Database::executeRow($sql, $params);
	}
	public function deleteImpuesto(){
		$sql = "DELETE FROM impuestos WHERE id_impuesto = ?";
		$params = array($this->id_impuesto);
		return Database::executeRow($sql, $params);
	}
}
?>
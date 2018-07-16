<?php
class Placa extends Validator{
	//Declaración de propiedades
	private $id_placa = null;
    private $capas = null;
    private $medida = null;
    private $id_tipo_placa = null;
    private $id_sustrato = null;

    //Métodos para sobrecarga de propiedades
    public function setId_placa($value){
		if($this->validateId($value)){
			$this->id_placa = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_placa(){
		return $this->id_placa;
    }
    
	public function setCapas($value){
		if($this->validateMoney($value)){
			$this->capas = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCapas(){
		return $this->capas;
    }

    public function setMedida($value){
		if($this->validateAlphanumeric($value, 1, 80)){
			$this->medida = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getMedida(){
		return $this->medidas;
    }
    
    public function setTipo($value){
		if($this->validateId($value)){
			$this->id_tipo_placa = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTipo(){
		return $this->id_tipo_placa;
    }
    
    public function setId_ustrato($value){
		if($this->validateId($value)){
			$this->id_sustrato = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_sustrato(){
		return $this->id_sustrato;
	}

	//Metodos para el manejo del CRUD
	public function getPlaca(){
		$sql = "SELECT id_placa, capas, medida, id_tipo_placa, id_sustrato FROM placa ORDER BY id_placa";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getPlacas(){
		$sql = "SELECT id_tipo_placa, tipo_placa FROM tipo_placa";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchPlaca($value){
		$sql = "SELECT id_placa, capas, medida, tipo_placa, sustrato FROM placa INNER JOIN tipo_placa USING(id_tipo_placa) INNER JOIN sustrato WHERE capas = ? ORDER BY id_placa";
		$params = array($value);
		return Database::getRows($sql, $params);
	}
	public function createPlaca(){
		$sql = "INSERT INTO placa(capas, medida, id_tipo_placa, id_suatrato) VALUES (?, ?, ?, ?)";
		$params = array($this->capas, $this->medida, $this->id_tipo_placa, $this->id_sustrato);
		return Database::executeRow($sql, $params);
	}
	public function readPlaca(){
		$sql = "SELECT capas, medida, id_tipo_placa, id_sustrato FROM placa WHERE id_placa = ? ORDER BY id_placa";
		$params = array($this->id_placa);
		$placa = Database::getRow($sql, $params);
		if($placa){
            $this->capas = $placa['capas'];
            $this->medida = $placa['medida'];
            $this->id_tipo_placa = $placa['id_tipo_placa'];
			$this->id_sustrato = $placa['id_sustrato'];
			return true;
		}else{
			return null;
		}
	}
	public function updatePlaca(){
		$sql = "UPDATE placa SET capas = ?, medida = ?, id_tipo_placa = ?, id_sustrato = ? WHERE id_placa = ?";
		$params = array($this->capas, $this->medida, $this->id_tipo_placa, $this->id_sustrato, $this->id_placa);
		return Database::executeRow($sql, $params);
	}
	public function deletePlaca(){
		$sql = "DELETE FROM placa WHERE id_placa = ?";
		$params = array($this->id_placa);
		return Database::executeRow($sql, $params);
	}
}
?>
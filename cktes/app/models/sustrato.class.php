<?php
class Sustrato extends Validator{
	//Declaración de propiedades
	private $id_sustrato = null;
    private $sustrato = null;

    //Métodos para sobrecarga de propiedades
    public function setId_sustrato($value){
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
    
	public function setSustrato($value){
		if($this->validateAlphanumeric($value, 1, 50)){
			$this->sustrato = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getSustrato(){
		return $this->sustrato;
    }

	//Metodos para el manejo del CRUD
	public function getSustratos(){
		$sql = "SELECT id_sustrato, sustrato FROM sustrato ORDER BY id_sustrato";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchSustrato($value){
		$sql = "SELECT id_sustrato, sustrato FROM sustrato WHERE sustrato LIKE ? ORDER BY id_sustrato";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function createSustrato(){
		$sql = "INSERT INTO sustrato(sustrato) VALUES (?)";
		$params = array($this->sustrato);
		return Database::executeRow($sql, $params);
	}
	public function readSustrato(){
		$sql = "SELECT sustrato FROM sustrato WHERE id_sustrato = ? ORDER BY id_sutrato";
		$params = array($this->id_sustrato);
		$sustrato = Database::getRow($sql, $params);
		if($sutrato){
            $this->sustrato = $sutrato['sustrato'];
			return true;
		}else{
			return null;
		}
	}
	public function updateSustrato(){
		$sql = "UPDATE sustrato SET sustrato = ? WHERE id_sustrato = ?";
		$params = array($this->sustrato, $this->id_sustrato);
		return Database::executeRow($sql, $params);
	}
	public function deleteSustrato(){
		$sql = "DELETE FROM sustrato WHERE id_sustrato = ?";
		$params = array($this->id_sustrato);
		return Database::executeRow($sql, $params);
	}
}
?>
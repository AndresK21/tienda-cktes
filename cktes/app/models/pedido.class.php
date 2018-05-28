<?php
class Pedido extends Validator{
	//Declaración de propiedades
	private $id_pedido = null;
    private $fecha = null;
    private $id_cliente = null;
    private $id_empleado = null;
    private $id_estado = null;
    private $archivo = null;
    private $id_placa = null;

    //Métodos para sobrecarga de propiedades
    public function setId_pedido($value){
		if($this->validateId($value)){
			$this->id_pedido = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_pedido(){
		return $this->id_pedido;
    }
    
	public function setFecha($value){
		if($this->validateAlphanumeric($value, 1, 30)){
			$this->fecha = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getFecha(){
		return $this->fecha;
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
    
    public function setId_empleado($value){
		if($this->validateId($value)){
			$this->id_empleado = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_empleado(){
		return $this->id_empleado;
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

	public function setArchivo($file){
		if($this->validateArchive($file, $this->archivo, "../../web/archivo/manufacturacion/")){
			$this->archivo = $this->getArchiveName();
			return true;
		}else{
			return false;
		}
	}
	public function getArchivo(){
		return $this->archivo;
	}
	public function unsetArchivo(){
		if(unlink("../../web/archivo/desarrollo/".$this->archivo)){
			$this->archivo = null;
			return true;
		}else{
			return false;
		}
    }
    
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

	//Metodos para el manejo del CRUD
	public function getPedido(){
		$sql = "SELECT id_pedido, fecha, archivo, id_cliente, id_empleado, id_estado, id_placa FROM pedido ORDER BY id_pedido";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchPedido($value){
		$sql = "SELECT id_pedido, fecha, archivo, clientes.nombres, empleado.nombres, estado, id_placa FROM pedido INNER JOIN clientes USING(id_cliente) INNER JOIN empleado USING(id_empleado) INNER JOIN estado USING(id_estado) WHERE fecha LIKE ? ORDER BY id_pedido";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function createPedido(){
		$sql = "INSERT INTO pedido(fecha, archivo, id_cliente, id_empleado, id_estado, id_placa) VALUES (?, ?, ?, ?, ?, ?)";
		$params = array($this->fecha, $this->archivo, $this->id_cliente, $this->id_empleado, $this->id-estado, $this->id_placa);
		return Database::executeRow($sql, $params);
	}
	public function readPedido(){
		$sql = "SELECT fecha, archivo, id_cliente, id_empleado, id_estado, id_placa FROM pedido WHERE id_pedido = ? ORDER BY id_pedido";
		$params = array($this->id_pedido);
		$pedido = Database::getRow($sql, $params);
		if($pedido){
            $this->fecha = $pedido['fecha'];
            $this->archivo = $pedido['archivo'];
            $this->id_cliente = $pedido['id_cliente'];
			$this->id_empleado = $pedido['id_empleado'];
			$this->id_estado = $pedido['id_estado'];
			$this->id_placa = $pedido['id_placa'];
			return true;
		}else{
			return null;
		}
	}
	public function updatePedido(){
		$sql = "UPDATE pedido SET fecha= ?, archivo = ?, id_cliente = ?, id_empleado = ?, id_estado = ?, id_placa = ? WHERE id_pedido = ?";
		$params = array($this->fecha, $this->archivo, $this->id_cliente, $this->id_empleado, $this->id_estado, $this->id_placa, $this->id_pedido);
		return Database::executeRow($sql, $params);
	}
	public function deletePedido(){
		$sql = "DELETE FROM pedido WHERE id_pedido = ?";
		$params = array($this->id_pedido);
		return Database::executeRow($sql, $params);
	}
}
?>
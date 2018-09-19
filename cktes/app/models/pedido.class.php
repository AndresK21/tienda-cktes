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
	
	private $nombres = null;
	private $apellidos = null;
	private $estado = null;
	private $tipo_placa = null;
	private $sustrato = null;
	private $medida = null;
	private $capas = null;  
	private $cantidad = null;

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
		if(unlink("../../web/archivo/manufacturacion/".$this->archivo)){
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
		if($this->validateAlphanumeric($value, 1, 30)){
			$this->estado = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getEstado(){
		return $this->estado;
	}
	public function setTipo_placa($value){
		if($this->validateAlphanumeric($value, 1, 30)){
			$this->tipo_placa = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTipo_placa(){
		return $this->tipo_placa;
	}
	public function setSustrato($value){
		if($this->validateAlphanumeric($value, 1, 40)){
			$this->sustrato = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getSustrato(){
		return $this->sustrato;
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
		return $this->medida;
	}
	public function setCapas($value){
		if($this->validateAlphanumeric($value, 1, 5)){
			$this->capas = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCapas(){
		return $this->capas;
	}
	public function setCantidad($value){
		if($this->validateAlphanumeric($value, 1, 5)){
			$this->cantidad = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCantidad(){
		return $this->cantidad;
    }

	//Metodos para el manejo del CRUD
	public function getEstados(){
		$sql = "SELECT id_estado, estado FROM estado WHERE id_tipo_estado = 5";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	
	public function getPedidon(){
		$sql = "SELECT id_pedido, id_cliente, id_empleado, id_estado, id_placa, nombres, apellidos, tipo_placa, sustrato, medida, capas, cantidad, estado FROM pedido INNER JOIN placa USING(id_placa) INNER JOIN clientes USING(id_cliente) INNER JOIN tipo_placa USING(id_tipo_placa) INNER JOIN sustrato USING(id_sustrato) INNER JOIN estado USING(id_estado) WHERE id_estado = 7 ORDER BY id_pedido";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getPedidoc(){
		$sql = "SELECT id_pedido, id_cliente, id_empleado, id_estado, id_placa, nombres, apellidos, tipo_placa, sustrato, medida, capas, cantidad, estado FROM pedido INNER JOIN placa USING(id_placa) INNER JOIN clientes USING(id_cliente) INNER JOIN tipo_placa USING(id_tipo_placa) INNER JOIN sustrato USING(id_sustrato) INNER JOIN estado USING(id_estado) WHERE id_estado = 8 ORDER BY id_pedido";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchPedidon($value){
		$sql = "SELECT id_pedido, id_cliente, id_empleado, id_estado, id_placa, nombres, apellidos, tipo_placa, sustrato, medida, capas, cantidad, estado FROM pedido INNER JOIN placa USING(id_placa) INNER JOIN clientes USING(id_cliente) INNER JOIN tipo_placa USING(id_tipo_placa) INNER JOIN sustrato USING(id_sustrato) INNER JOIN estado USING(id_estado) WHERE nombres LIKE ? OR apellidos LIKE ? AND id_estado = 7 ORDER BY id_pedido";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function searchPedidoc($value){
		$sql = "SELECT id_pedido, id_cliente, id_empleado, id_estado, id_placa, nombres, apellidos, tipo_placa, sustrato, medida, capas, cantidad, estado FROM pedido INNER JOIN placa USING(id_placa) INNER JOIN clientes USING(id_cliente) INNER JOIN tipo_placa USING(id_tipo_placa) INNER JOIN sustrato USING(id_sustrato) INNER JOIN estado USING(id_estado) WHERE nombres LIKE ? OR apellidos LIKE ? AND id_estado = 8 ORDER BY id_pedido";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function createPedido(){
		$sql = "INSERT INTO pedido(fecha, archivo, id_cliente, id_empleado, id_estado, id_placa) VALUES (?, ?, ?, ?, ?, ?)";
		$params = array($this->fecha, $this->archivo, $this->id_cliente, $this->id_empleado, $this->id-estado, $this->id_placa);
		return Database::executeRow($sql, $params);
	}
	public function readPedido(){
		$sql = "SELECT id_pedido, id_cliente, id_empleado, id_estado, id_placa, nombres, apellidos, tipo_placa, sustrato, medida, capas, cantidad, estado, archivo FROM pedido INNER JOIN placa USING(id_placa) INNER JOIN clientes USING(id_cliente) INNER JOIN tipo_placa USING(id_tipo_placa) INNER JOIN sustrato USING(id_sustrato) INNER JOIN estado USING(id_estado) WHERE id_pedido = ? ORDER BY id_pedido";
		$params = array($this->id_pedido);
		$pedido = Database::getRow($sql, $params);
		if($pedido){
			$this->id_pedido = $pedido['id_pedido'];
			$this->id_cliente = $pedido['id_cliente'];
			$this->id_empleado = $pedido['id_empleado'];
			$this->id_estado = $pedido['id_estado'];
			$this->id_placa = $pedido['id_placa'];
			$this->nombres = $pedido['nombres'];
			$this->apellidos = $pedido['apellidos'];
			$this->tipo_placa = $pedido['tipo_placa'];
			$this->sustrato = $pedido['sustrato'];
			$this->medida = $pedido['medida'];
			$this->capas = $pedido['capas'];
			$this->cantidad = $pedido['cantidad'];
			$this->estado = $pedido['estado'];
			$this->archivo = $pedido['archivo'];
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
	public function getPedidosNuevo(){
		$sql = "SELECT COUNT(id_cliente) as Pedidos FROM pedido where id_cliente = ? AND id_estado = 7";
		$params = array($this->id_cliente);
		return Database::getRows($sql, $params);
	}
 
	public function getPedidosT(){
		$sql = "SELECT id_pedido, id_cliente, id_empleado, id_estado, id_placa, nombres, apellidos, tipo_placa, sustrato, medida, capas, cantidad, estado, archivo , pedido.fecha FROM pedido INNER JOIN placa USING(id_placa) INNER JOIN clientes USING(id_cliente) INNER JOIN tipo_placa USING(id_tipo_placa) INNER JOIN sustrato USING(id_sustrato) INNER JOIN estado USING(id_estado) WHERE id_cliente = ? ORDER BY id_pedido";
		$params = array($this->id_cliente);
		return Database::getRows($sql, $params);
	}

	public function CancelarP(){
		$sql = "UPDATE pedido SET id_estado = 4 WHERE id_pedido = ?";
		$params = array($this->id_pedido);
		return Database::executeRow($sql, $params);
	}
}
?>
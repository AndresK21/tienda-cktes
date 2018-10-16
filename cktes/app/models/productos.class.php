<?php
class Producto extends Validator{
	//Declaración de propiedades
	private $id_producto = null;
    private $nombre = null;
    private $imagen = null;
    private $descripcion = null;
    private $ficha_tecnica = null;
    private $cantidad = null;
	private $precio = null;
	private $tamano = null;
	private $id_presentacion = null;
	private $id_proveedor = null;
	private $id_marca = null;
	private $id_estado = null;
	private $id_tipo_producto = null;
	private $id_impuesto = null;
	private $id_descuento = null;
	private $total = null;
	
	private $proveedor = null;
	private $presentacion = null;
	private $marca = null;
	private $existencias = null;

	//Métodos para sobrecarga de propiedades

	public function setmarca($value){
		if($this->validateAlphanumeric($value)){
			$this->marca = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getmarca(){
		return $this->marca;
	}
	public function setExistencias($value){
		if($this->validateAlphanumeric($value)){
			$this->existencias = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getExistencias(){
		return $this->existencias;
	}

    public function setId_producto($value){
		if($this->validateId($value)){
			$this->id_producto = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_Producto(){
		return $this->id_producto;
	}
	
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
    
	public function setNombre($value){
		if($this->validateAlphanumeric($value, 1, 80)){
			$this->nombre = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getNombre(){
		return $this->nombre;
	}
	
	public function setImagen($file){
		if($this->validateImage($file, $this->imagen, "../../web/img/productos/", 500, 500)){
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

    public function setDescripcion($value){
		if($this->validateAlphanumeric($value, 1, 100)){
			$this->descripcion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getDescripcion(){
		return $this->descripcion;
    }
    
    public function setFicha($value){
		if($this->validateAlphabetic($value, 1, 550)){
			$this->ficha_tecnica = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getFicha(){
		return $this->ficha_tecnica;
    }
    
    public function setCantidad($value){
		if($this->validateAlphanumeric($value, 1, 11)){
			$this->cantidad = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCantidad(){
		return $this->cantidad;
	}

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
	public function setTotal($value){
		if($this->validateMoney($value)){
			$this->total = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTotal(){
		return $this->total;
	}

	public function setTamano($value){
		if($this->validateAlphanumeric($value, 1, 30)){
			$this->tamano = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTamano(){
		return $this->tamano;
	}

	public function setId_presentacion($value){
		if($this->validateId($value)){
			$this->id_presentacion = $value;
			return true;
		}else{
			return false;   
		}
	}
	public function getId_presentacion(){
		return $this->id_presentacion;
	}

	public function setId_proveedor($value){
		if($this->validateAlphanumeric($value, 1, 150)){
			$this->proveedor = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getProveedorG(){
		return $this->proveedor;
	}
	public function setProveedorG($value){
		if($this->validateAlphanumeric($value)){
			$this->proveedor = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getPresentacionG(){
		return $this->presentacion;
	}
	public function setPresentacion($value){
		if($this->validateAlphanumeric($value)){
			$this->presentacion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_proveedor(){
		return $this->id_proveedor;
	}
	public function setId_marca($value){
		if($this->validateId($value)){
			$this->id_marca = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_marca(){
		return $this->id_marca;
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
	public function setId_tipo_producto($value){
		if($this->validateId($value)){
			$this->id_tipo_producto = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_tipo_producto(){
		return $this->id_tipo_producto;
    }

	//Metodos para el manejo del CRUD
	public function getCategoriaProductos(){
		$sql = "SELECT marca.marca, productos.id_producto, productos.nombre, productos.precio, productos.precio_total, productos.url_imagen, presentaciones.presentacion, proveedores.proveedor, marca.marca, tipo_producto.tipo_producto 
		FROM productos 
		INNER JOIN marca ON productos.id_marca = marca.id_marca 
		INNER JOIN presentaciones ON productos.id_presentacion = presentaciones.id_presentacion 
		INNER JOIN proveedores ON productos.id_proveedor = proveedores.id_proveedor 
		INNER JOIN tipo_producto ON productos.id_tipo_producto = tipo_producto.id_tipo_producto 
		WHERE productos.id_marca = ? AND productos.id_estado = 1 AND proveedores.id_estado = 3";
		$params = array($this->id_marca);
		return Database::getRows($sql, $params);
	}
	public function getCategoriaProductos2($empieza, $por_pagina){
		$query = "SELECT marca.marca, productos.id_producto, productos.nombre, productos.descripcion, productos.tamano, productos.precio, productos.precio_total, presentaciones.presentacion, proveedores.proveedor, tipo_producto.tipo_producto, productos.url_imagen
		FROM productos 
		INNER JOIN marca ON productos.id_marca = marca.id_marca 
		INNER JOIN presentaciones ON productos.id_presentacion = presentaciones.id_presentacion 
		INNER JOIN proveedores ON productos.id_proveedor = proveedores.id_proveedor 
		INNER JOIN tipo_producto ON productos.id_tipo_producto = tipo_producto.id_tipo_producto 
		WHERE productos.id_marca = ? AND productos.id_estado = 1 AND proveedores.id_estado = 3 LIMIT $empieza, $por_pagina";
		$params = array($this->id_marca);
		return Database::getRows($query, $params);
	}

	public function getPresentacion(){
		$sql = "SELECT id_presentacion, presentacion FROM presentaciones";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getProveedor(){
		$sql = "SELECT id_proveedor, proveedor FROM proveedores";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getMarcas(){
		$sql = "SELECT id_marca, marca FROM marca";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getEstado(){
		$sql = "SELECT id_estado, estado FROM estado WHERE id_tipo_estado = 1";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getTipos(){
		$sql = "SELECT id_tipo_producto, tipo_producto FROM tipo_producto";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getImpuestos(){
		$sql = "SELECT id_impuesto, nombre, porcentaje FROM impuestos";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getDescuentos(){
		$sql = "SELECT id_descuento, descuento FROM descuentos";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getProducto(){
		$sql = "SELECT id_producto, productos.nombre, url_imagen, descripcion, ficha_tecnica, cantidad, precio, precio_total, tamano, presentacion, proveedor, marca, productos.id_estado, id_tipo_producto, impuestos.valor FROM productos INNER JOIN presentaciones USING(id_presentacion) INNER JOIN proveedores USING(id_proveedor) INNER JOIN marca USING(id_marca) INNER JOIN tipo_producto USING(id_tipo_producto) INNER JOIN impuestos USING(id_impuesto) ORDER BY id_producto";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getProducto2($empieza, $por_pagina){
		$sql = "SELECT id_producto, productos.nombre, url_imagen, descripcion, ficha_tecnica, cantidad, precio, precio_total, tamano, presentacion, proveedor, marca, productos.id_estado, id_tipo_producto, impuestos.valor FROM productos INNER JOIN presentaciones USING(id_presentacion) INNER JOIN proveedores USING(id_proveedor) INNER JOIN marca USING(id_marca) INNER JOIN tipo_producto USING(id_tipo_producto) INNER JOIN impuestos USING(id_impuesto) ORDER BY id_producto LIMIT $empieza, $por_pagina";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchProducto($value){
		$sql = "SELECT id_producto, productos.nombre, url_imagen, descripcion, ficha_tecnica, cantidad, precio, precio_total, tamano, presentacion, proveedor, marca, productos.id_estado, id_tipo_producto, impuestos.valor FROM productos INNER JOIN presentaciones USING(id_presentacion) INNER JOIN proveedores USING(id_proveedor) INNER JOIN marca USING(id_marca) INNER JOIN tipo_producto USING(id_tipo_producto) INNER JOIN impuestos USING(id_impuesto) WHERE productos.nombre LIKE ? ORDER BY id_producto";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function searchProducto2($value, $value2){
		$sql = "SELECT marca.marca, productos.id_producto, productos.nombre, productos.precio_total, productos.descripcion, productos.tamano, productos.precio, productos.url_imagen, presentaciones.presentacion, proveedores.proveedor, tipo_producto.tipo_producto 
		FROM productos
		INNER JOIN marca ON productos.id_marca = marca.id_marca
		INNER JOIN presentaciones ON productos.id_presentacion = presentaciones.id_presentacion 
		INNER JOIN proveedores ON productos.id_proveedor = proveedores.id_proveedor 
		INNER JOIN tipo_producto ON productos.id_tipo_producto = tipo_producto.id_tipo_producto 
		WHERE productos.nombre LIKE ? AND marca.id_marca = ? AND productos.id_estado = 1 AND proveedores.id_estado = 3";
		$params = array("%$value%", $value2);
		return Database::getRows($sql, $params);

	}
	public function devValor(){
		$sql = "SELECT valor FROM descuentos WHERE id_descuento = ?";
		$params = array($this->id_descuento);
		$produc = Database::getRow($sql, $params);
		if($produc){
			$var1 = $produc['valor'];

			$descontado = $var1*$this->precio;
			$this->total = round($this->precio - $descontado, 2);
			return true;
		}else{
			return null;
		}
	}
	public function devValor2(){
		$sql = "SELECT valor FROM impuestos WHERE id_impuesto = ?";
		$params = array($this->id_impuesto);
		$producto = Database::getRow($sql, $params);
		if($producto){
			$var = $producto['valor'];

			$agregado = $var*$this->total;
			$this->total = (round($agregado + $this->total, 2));
			return true;
		}else{
			return null;
		}
	}
	public function createProducto(){
		$sql = "INSERT INTO productos(nombre, url_imagen, descripcion, ficha_tecnica, cantidad, precio, precio_total, tamano, id_presentacion, id_proveedor, id_marca, id_estado, id_tipo_producto, id_impuesto, id_descuento) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$params = array($this->nombre, $this->imagen, $this->descripcion, $this->ficha_tecnica, $this->cantidad, $this->precio, $this->total ,$this->tamano, $this->id_presentacion, $this->id_proveedor, $this->id_marca, $this->id_estado, $this->id_tipo_producto, $this->id_impuesto, $this->id_descuento);
		return Database::executeRow($sql, $params);		
	}
	public function readProducto(){
		$sql = "SELECT nombre, url_imagen, descripcion, ficha_tecnica, cantidad, precio, precio_total, tamano, id_presentacion, id_proveedor, id_marca, id_estado, id_tipo_producto, id_impuesto, id_descuento FROM productos WHERE id_producto = ? ORDER BY id_producto";
		$params = array($this->id_producto);
		$producto = Database::getRow($sql, $params);
		if($producto){
            $this->nombre = $producto['nombre'];
            $this->imagen = $producto['url_imagen'];
            $this->descripcion = $producto['descripcion'];
			$this->ficha_tecnica = $producto['ficha_tecnica'];
			$this->cantidad = $producto['cantidad'];
			$this->precio = $producto['precio'];
			$this->tamano = $producto['tamano'];
			$this->id_presentacion = $producto['id_presentacion'];
			$this->id_proveedor = $producto['id_proveedor'];
			$this->id_marca = $producto['id_marca'];
			$this->id_estado = $producto['id_estado'];
			$this->id_tipo_producto = $producto['id_tipo_producto'];
			$this->id_impuesto = $producto['id_impuesto'];
			$this->id_descuento = $producto['id_descuento'];
			return true;
		}else{
			return null;
		}
	}

	public function readProducto2(){
		$sql = "SELECT productos.nombre, productos.url_imagen, productos.descripcion, productos.ficha_tecnica, productos.cantidad, productos.precio, productos.precio_total, productos.tamano, productos.id_presentacion, productos.id_proveedor, productos.id_marca, productos.id_estado, productos.id_tipo_producto, productos.precio_total, productos.id_descuento FROM productos WHERE id_producto = ? ORDER BY id_producto";
		$params = array($this->id_producto);
		$producto = Database::getRow($sql, $params);
		if($producto){
			$this->nombre = $producto['nombre'];
			$this->imagen = $producto['url_imagen'];
            $this->descripcion = $producto['descripcion'];
			$this->ficha_tecnica = $producto['ficha_tecnica'];
			$this->cantidad = $producto['cantidad'];
			$this->precio = $producto['precio'];
			$this->tamano = $producto['tamano'];
			$this->id_presentacion = $producto['id_presentacion'];
			$this->id_proveedor = $producto['id_proveedor'];
			$this->id_marca = $producto['id_marca'];
			$this->id_estado = $producto['id_estado'];
			$this->id_tipo_producto = $producto['id_tipo_producto'];
			$this->total = $producto['precio_total'];
			$this->id_descuento = $producto['id_descuento'];
			return true;
		}else{
			return null;
		}
	}

	public function readProducto3(){
		$sql = "SELECT productos.nombre, productos.url_imagen, productos.descripcion, productos.ficha_tecnica, productos.cantidad, productos.precio, productos.precio_total, productos.tamano, presentaciones.presentacion, proveedores.proveedor, productos.id_marca, productos.id_estado, productos.id_tipo_producto, productos.precio_total, productos.id_descuento FROM productos INNER JOIN proveedores ON productos.id_proveedor = proveedores.id_proveedor INNER JOIN presentaciones ON productos.id_presentacion = presentaciones.id_presentacion WHERE id_producto = ? ORDER BY id_producto";
		$params = array($this->id_producto);
		$producto = Database::getRow($sql, $params);
		if($producto){
			$this->nombre = $producto['nombre'];
			$this->imagen = $producto['url_imagen'];
            $this->descripcion = $producto['descripcion'];
			$this->ficha_tecnica = $producto['ficha_tecnica'];
			$this->cantidad = $producto['cantidad'];
			$this->precio = $producto['precio'];
			$this->tamano = $producto['tamano'];
			$this->presentacion = $producto['presentacion'];
			$this->proveedor = $producto['proveedor'];
			$this->id_marca = $producto['id_marca'];
			$this->id_estado = $producto['id_estado'];
			$this->id_tipo_producto = $producto['id_tipo_producto'];
			$this->total = $producto['precio_total'];
			$this->id_descuento = $producto['id_descuento'];
			return true;
		}else{
			return null;
		}
	}
	public function updateProducto(){
		$sql = "UPDATE productos SET nombre = ?, url_imagen = ?, descripcion = ?, ficha_tecnica = ?, cantidad = ?, precio = ?, tamano = ?, id_presentacion = ?, id_proveedor = ?, id_marca = ?, id_estado = ?, id_tipo_producto = ?, id_impuesto = ?, precio_total = ?, id_descuento = ? WHERE id_producto = ?";
		$params = array($this->nombre, $this->imagen, $this->descripcion, $this->ficha_tecnica, $this->cantidad, $this->precio, $this->tamano, $this->id_presentacion, $this->id_proveedor, $this->id_marca, $this->id_estado, $this->id_tipo_producto, $this->id_impuesto, $this->total, $this->id_descuento, $this->id_producto);
		return Database::executeRow($sql, $params);
	}

	public function updateCantidad1($cantidad ,$id_producto){
		$sql = "UPDATE productos SET cantidad = cantidad - ? WHERE id_producto = ?";
		$params = array($cantidad, $id_producto);
		return Database::executeRow($sql, $params);;
	}
	public function updateCantidad2($cantidad ,$id){
		$sql = "UPDATE productos SET cantidad = cantidad + ? WHERE id_producto = ?";
		$params = array($cantidad, $id);
		return Database::executeRow($sql, $params);;
	}
	public function deleteProducto(){
		$sql = "DELETE FROM productos WHERE id_producto = ?";
		$params = array($this->id_producto);
		return Database::executeRow($sql, $params);
	}

	//Metodos para los reportes
	public function getProductoRe(){
		$sql = "SELECT id_producto, nombre, cantidad, precio, presentacion, proveedor, marca, tipo_producto FROM productos INNER JOIN presentaciones USING(id_presentacion) INNER JOIN proveedores USING(id_proveedor) INNER JOIN marca USING(id_marca) INNER JOIN tipo_producto USING(id_tipo_producto) ORDER BY id_producto";
		$params = array(null);
		return Database::getRows($sql, $params);
	}

	public function getProductoMarca($marca){
		$sql = "SELECT id_producto, nombre, cantidad, precio, presentacion, proveedor, marca, tipo_producto FROM productos INNER JOIN presentaciones USING(id_presentacion) INNER JOIN proveedores USING(id_proveedor) INNER JOIN marca USING(id_marca) INNER JOIN tipo_producto USING(id_tipo_producto) WHERE id_marca = ? ORDER BY id_producto";
		$params = array($marca);
		return Database::getRows($sql, $params);
	}
}
?>
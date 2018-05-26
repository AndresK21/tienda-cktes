<?php
require_once("../../app/models/empleado.class.php");
try{
	$object = new Empleado;
	if($object->getEmpleado()){
		if(isset($_POST['iniciar'])){
			$_POST = $object->validateForm($_POST);
			if($object->setCorreo($_POST['correo'])){
				if($object->checkCorreo()){
					if($object->setContrasena($_POST['contrasena'])){
						if($object->checkPassword()){
							$_SESSION['id_empleado'] = $object->getId_empleado();
							$_SESSION['correo_electronico'] = $object->getCorreo();
							$_SESSION['nombres'] = $object->getNombres();
							$_SESSION['apellidos'] = $object->getApellidos();
							$_SESSION['imagen'] = $object->getImagen();
							$_SESSION['id_permiso'] = $object->getId_permiso();
							Page::showMessage(1, "Autenticación correcta", "index.php");
						}else{
							throw new Exception("Clave inexistente");
						}
					}else{
						throw new Exception("Clave menor a 6 caracteres");
					}
				}else{
					throw new Exception("Correo electronico inexistente");
				}
			}else{
				throw new Exception("Correo electronico incorrecto");
			}
		}
	}else{
		Page::showMessage(3, "No hay usuarios disponibles", "register.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/cuenta/login_view.php");
?>
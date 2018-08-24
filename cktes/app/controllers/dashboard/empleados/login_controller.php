<?php
require_once("../../app/models/empleado.class.php");
try{
	$ip2 = getenv('REMOTE_ADDR');

	$object = new Empleado;
	if($object->getEmpleado()){
		if(isset($_POST['iniciar'])){
			$_POST = $object->validateForm($_POST);
			if($object->setCorreo($_POST['correo'])){
				$_SESSION['usuario_d'] = $object->getCorreo();
				if($object->checkCorreo()){
					if($object->setContrasena2($_POST['contrasena'])){
						if($object->checkPassword()){
							if($object->getEstado() == 1){
								$_SESSION['id_empleado'] = $object->getId_empleado();
								$_SESSION['correo_electronico2'] = $object->getCorreo();
								$_SESSION['nombres2'] = $object->getNombres();
								$_SESSION['apellidos2'] = $object->getApellidos();
								$_SESSION['imagen'] = $object->getImagen();
								$_SESSION['id_permiso'] = $object->getId_permiso();
								$_SESSION['ultimoAcceso_d'] = time(); //Obtiene el tiempo de cuando se logea para posteriormente usarlo para cerrar la sesion por inactividad
								$_SESSION['cont_d'] = 0;
								Page::showMessage(1, "Autenticación correcta", "index.php");
							}else{
								$valor = date('Y-m-d h:i:s');
								$valor2 = new DateTime($valor);
								$valor3 = new DateTime($object->getFecha2());
								$bloqueo = $valor3->diff($valor2);
								if($bloqueo->d >= 1){
									$object->updateEstado2($_SESSION['usuario_d']); //Regresa el estado del usuario a disponible para iniciar sesion
									$_SESSION['id_empleado'] = $object->getId_empleado();
									$_SESSION['correo_electronico2'] = $object->getCorreo();
									$_SESSION['nombres2'] = $object->getNombres();
									$_SESSION['apellidos2'] = $object->getApellidos();
									$_SESSION['imagen'] = $object->getImagen();
									$_SESSION['id_permiso'] = $object->getId_permiso();
									$_SESSION['ultimoAcceso_d'] = time(); //Obtiene el tiempo de cuando se logea para posteriormente usarlo para cerrar la sesion por inactividad
									$_SESSION['cont_d'] = 0;
									Page::showMessage(1, "Autenticación correcta", "index.php");
								}else{
									throw new Exception("Su cuenta está bloqueada por exceder los intentos de inicio de sesión");
								}
							}
						}else{
							$_SESSION['cont_d']++;
							Page::showMessage(2, "Clave incorrecta", "login.php");
							if($_SESSION['cont_d'] >= 3){
								$object->updateEstado($_SESSION['usuario_d']);
								$_SESSION['cont_d'] = 0;
								Page::showMessage(3, "Su cuenta ha sido bloqueada por exceder los intentos de inicio de sesión", "../cuenta/login.php");
							}
						}
					}else{
						throw new Exception("Clave menor a 8 caracteres");
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
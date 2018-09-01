<?php

require_once("../../app/models/empleado.class.php");
require_once("../../app/PHPMailer/class.phpmailer.php");
require_once("../../app/PHPMailer/class.smtp.php");

class Correo{

    function generar($length = 8) { 
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ+*';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString; 
    }

    public function correo(){

        $nueva = generar();

        $empleado = new Empleado;
        if($empleado->setCorreo($_SESSION['correo_electronico2_d'])){
            if($empleado->checkCorreo()){
                if($empleado->updateContra($nueva)){
                    $nombres = $empleado->getNombres();
                    $apellidos = $empleado->getApellidos();

                    $mail = new PHPMailer;
                    $mail->setLanguage('es', '../../app/PHPMailer/language/phpmailer.lang-es.php');
                    $correo = $_SESSION['correo_electronico2_d'];
                    $usuario = $nombres." ".$apellidos;

                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'pinturasv503@gmail.com';
                    $mail->Password = 'pinturasv';
                    $mail->SMTPSecure = 'ssl';
                    $mail->Port = 465;

                    $mail->setFrom('pinturasv503@gmail.com', 'PinturaSV');
                    $mail->addAddress($correo, $usuario);

                    $mail->Subject = 'Recuperar acceso';
                    $mail->Body = 'Hemos detectado que su cuenta ha intentado inicarse desde dos lugares diferentes. Cambiamos su contraseña, su nueva contraseña es '.$nueva.' Recomendamos cambie esta contraseña al iniciar sesion';

                    if(!$mail->send()){
                        Page::showMessage(2, "Error, mensaje no enviado. Error: ".$mail->ErrorInfo, "correo.php");
                    }else{
                        Page::showMessage(1, "El mensaje se ha enviado correctamente", "login.php");
                    }

                }else{
                    throw new Exception("No se ha podido actualizar la contraseña");
                }
            }else{
                throw new Exception("Usuario inexistente");
            }
        }else{
            throw new Exception("Correo electronico incorrecto");
        }
    }
}
?>

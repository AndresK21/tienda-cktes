<?php

require_once("../../app/models/empleado.class.php");
require_once("../../app/PHPMailer/class.phpmailer.php");
require_once("../../app/PHPMailer/class.smtp.php");

class Correo{

    public function correo(){

        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 4; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $nueva = $randomString;

        $empleado = new Empleado;
        if($empleado->setCorreo($_SESSION['correo_electronico2_d'])){
            if($empleado->checkCorreo()){
                if($empleado->updateAut($nueva)){
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

                    $mail->Subject = 'Codigo de autenticacion';
                    $mail->Body = 'Su código de autenticación es '.$nueva;

                    if(!$mail->send()){
                        Page::showMessage(2, "Error, mensaje no enviado. Error: ".$mail->ErrorInfo, "logout.php");
                        return false;
                    }else{
                        return true;
                    }

                }else{
                    throw new Exception("No se ha podido actualizar la contraseña");
                }
            }else{
                throw new Exception("Usuario inexistente");
            }
        }else{
            Page::showMessage(3, "Correo electronico incorrecto", "../cuenta/logout.php");
        }
    }
}
?>

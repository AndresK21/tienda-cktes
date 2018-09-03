<?php
require_once("../app/models/cliente.class.php");
require_once("../app/PHPMailer/class.phpmailer.php");
require_once("../app/PHPMailer/class.smtp.php");

class CorreoPublic{

    public function correoPublic(){

        $characters = '123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 4; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $nueva = $randomString;

        $cliente = new Cliente;
        if($cliente->setCorreo($_SESSION['correo_electronico'])){
            if($cliente->checkCorreo()){
                if($cliente->updateAut($nueva)){
                    $nombres = $cliente->getNombres();
                    $apellidos = $cliente->getApellidos();

                    $mail = new PHPMailer;
                    $mail->setLanguage('es', '../app/PHPMailer/language/phpmailer.lang-es.php');
                    $correo = $_SESSION['correo_electronico'];
                    $usuario = $nombres." ".$apellidos;

                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'pinturasv503@gmail.com';
                    $mail->Password = 'pinturasv';
                    $mail->SMTPSecure = 'ssl';
                    $mail->Port = 465;

                    $mail->setFrom('pinturasv503@gmail.com', 'CKTES');
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

<?php
require_once("../app/models/cliente.class.php");
require_once("../app/PHPMailer/class.phpmailer.php");
require_once("../app/PHPMailer/class.smtp.php");

try{
    $cliente = new Cliente;
    if(isset($_POST['enviar'])){
    $_POST = $cliente->validateForm($_POST);
        if($cliente->setCorreo($_SESSION['correo_electronico'])){

                    $nombres = $cliente->getNombres();
                    $apellidos = $cliente->getApellidos();
                    $asunto = $_POST['Asunto'];
                    $duda= $_POST['duda'];
                    $mail = new PHPMailer;
                    $mail->setLanguage('es', '../../app/PHPMailer/language/phpmailer.lang-es.php');
                    $usuario = $nombres." ".$apellidos;
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'pinturasv503@gmail.com';
                    $mail->Password = 'pinturasv';
                    $mail->SMTPSecure = 'tls';
                    $mail->Port = 587;
                    $mail->setFrom('pinturasv503@gmail.com', 'CKTES');
                    $mail->addAddress('fatimmaaguilar7@gmail.com', $usuario);
                    $mail->isHTML(true);
                    $mail->Subject = 'Duda sobre manufacturacion. ' .$asunto.'';
                    $mail->Body = ' Cliente: '.$_SESSION['correo_electronico'].' ha enviado el mensaje: '.$duda.'';
                     
                    if(!$mail->send()){
                        Page::showMessage(2, "Error, mensaje no enviado. Error: ".$mail->ErrorInfo, "correo.php");
                    }else{
                        Page::showMessage(1, "El mensaje se ha enviado correctamente", "pcb.php");
                    }

           
        }else{
            throw new Exception("Correo electronico incorrecto");
        }
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../app/views/portal/pcb/pcb_view.php");
?>
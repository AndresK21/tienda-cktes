<?php
require_once("../../app/models/desarrollo.class.php");
require_once("../../app/models/cliente.class.php");
require_once("../../app/PHPMailer/class.phpmailer.php");
require_once("../../app/PHPMailer/class.smtp.php");
try{
    if(isset($_GET['id'])){ //Llama al id de la maraca
        if($_SERVER['HTTP_REFERER']){
            $desarrollo = new Desarrollo;
            if($desarrollo->setId_Desarrollo($_GET['id'])){ //Establece el id en una varible para usarla despues
                if($desarrollo->readDesarrollo()){

                    $empleado = new Empleado;
                    if(isset($_POST['enviar'])){
                    $_POST = $empleado->validateForm($_POST);
                        if($empleado->setCorreo($_POST['correo'])){
                            if($empleado->checkCorreo()){
                                $nombres = $empleado->getNombres();
                                $apellidos = $empleado->getApellidos();

                                $mail = new PHPMailer;
                                $mail->setLanguage('es', '../../app/PHPMailer/language/phpmailer.lang-es.php');
                                $correo = $_POST['correo'];
                                $usuario = $nombres." ".$apellidos;

                                $mail->isSMTP();
                                $mail->Host = 'smtp.gmail.com';
                                $mail->SMTPAuth = true;
                                $mail->Username = 'pinturasv503@gmail.com';
                                $mail->Password = 'pinturasv';
                                $mail->SMTPSecure = 'ssl';
                                $mail->Port = 465;
                                $mail->isHTML(true);

                                $mail->setFrom('pinturasv503@gmail.com', 'CKTES');
                                $mail->addAddress($correo, $usuario);

                                $mail->Subject = $_POST['asunto'];
                                $mail->Body = $_POST['mensaje'];

                                if(!$mail->send()){
                                    Page::showMessage(2, "Error, mensaje no enviado. Error: ".$mail->ErrorInfo, "correo.php");
                                }else{
                                    Page::showMessage(1, "El mensaje se ha enviado correctamente", "login.php");
                                }

                            }else{
                                throw new Exception("Usuario inexistente");
                            }
                        }else{
                            throw new Exception("Correo electronico incorrecto");
                        }
                    }


                }else{
                    Page::showMessage(2, "Desarrollo inexistente", "index.php");
                }
            }else{
                Page::showMessage(2, "Desarrollo incorrecto", "index.php");
            }
        }else{
            Page::showMessage(2, "Desarrollo incorrecto", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione un desarrollo", "index.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/desarrollo/answer_view.php");
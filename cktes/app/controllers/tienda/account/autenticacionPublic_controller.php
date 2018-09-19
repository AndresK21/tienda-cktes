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
                    $mail->SMTPSecure = 'tls';
                    $mail->Port = 587;
                    $mail->isHTML(true);
                    $mail->setFrom('pinturasv503@gmail.com', 'CKTES');
                    $mail->addAddress($correo, $usuario);

                    $mail->Subject = 'Codigo de autenticacion';
                    $mail->Body = '
                    <html  lang="es">
                    <head>
                    <meta charset="utf-8">
                    <style type ="txt/css">

                    body{
                        background-image: url();
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: cover;
                        height: 100%;
                        }
                        h1{
                            color: #132844;
                        }
                        #tex{
                            color: #132844;
                            font-size: 11px;
                        }
                        .l{
                            font-size: 13px;
                            color: #132844;
                        }        
                    </style>
                    </head>
                    <body>
                    <table align="center" cellpadding="0" cellspacing="0" width="750">                  
                    <tr>
                    <td align="center" bgcolor="#132844" whidth = "400" style="padding: 20px 0 20px 0;">
                    <img src="https://s6.postimg.cc/6jf17vwwh/unlocked.png" alt="unlocked" width="300" height="230" style="display: block;" />     
                   </td>
                    </tr>
                    <tr>
                    <td bgcolor="f4f4f4">
                    <h1 style="padding 20px 0 20px 0">Verificaci&oacute;n en dos Pasos</h1>
                    </td>
                    </tr>
                    <tr>
                    <td bgcolor="#f4f4f4">
                    <p> Hola <strong>'.$nombres.' </strong>Hemos detectado que estas iniciando sesi&oacute;n
                    </p><p> Su c&oacute;digo de autenticaci&oacute;n es <strong>'.$nueva.'</strong>
                    <p> <strong> Te saluda cordialmente, </strong> </p> <p> </strong> Cktes. </p>
                    <p> ------------------- </p>
                    <p class="l" ><strong> C K T - E S, S A. D E C V </strong></p>
                    <p class="l"> <strong> "Circuitos Profesionales con la garantia que nadie ofrece" </strong></p>
                    <p class="l"> <strong>  Tel. 2245-6378 ; Whatsapp. 7565-7321 </strong></p>
                    </td>
                    </tr>
                    
                    </table>
                    </body>
                    </html>
                    ';
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

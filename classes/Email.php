<?php

namespace Classes;
use PHPMailer\PHPMailer\PHPMailer;


class Email{
    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token){
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion(){
        
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'e3ad263de1fd75';
        $mail->Password = 'ecb1d26fadd311';

        $mail->setFrom('cuentas@EsteticaSalon.com');
        $mail->addAddress('cuentas@EsteticaSalon.com', 'EsteticaSalon.com');
        $mail->Subject = 'Por favor Confirma tu cuenta';

        //Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = '<html>';
        $contenido .= "<p><strong>Hola " . $this->email .  "</strong> Has Creado tu cuenta en App Salón, solo debes confirmarla presionando el siguiente enlace</p>";
        $contenido .= "<p>Presiona aquí: <a href='http://localhost:3000/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta</a>";  
        
        $contenido .= "<p style='color: red;'><strong>¡¡Aviso¡¡ Una vez que le da click al enlace el link caduca y ya no sera válido</strong></p>";
        $contenido .= "<p>Si tu no solicitaste este cambio, puedes ignorar el mensaje</p>";
        $contenido .= '</html>';
        $mail->Body = $contenido;

        $mail->Body = $contenido;

        //Enviar el mail
        $mail->send();



    }

    public function enviarInstrucciones(){
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'e3ad263de1fd75';
        $mail->Password = 'ecb1d26fadd311';

        $mail->setFrom('cuentas@EsteticaSalon.com');
        $mail->addAddress('cuentas@EsteticaSalon.com', 'EsteticaSalon.com');
        $mail->Subject = 'Reestablecer tu contraseña';

        //Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = '<html>';
        $contenido .= "<p><strong>Hola " . $this->nombre .  "</strong> Has solicitado reestablecer tu contraseña, sigue el siguiente enlace para hacerlo.</p>";
        $contenido .= "<p>Presiona aquí: <a href='http://localhost:3000/recuperar?token=" . $this->token . "'>Reestablecer contraseña</a>";  
        
        $contenido .= "<p>Si tu no solicitaste este cambio, puedes ignorar el mensaje</p>";
        $contenido .= '</html>';
        $mail->Body = $contenido;

        $mail->Body = $contenido;

        //Enviar el mail
        $mail->send();
    }
}
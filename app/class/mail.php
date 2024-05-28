<?php
namespace App;
//Load Composer's autoloader
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mail{
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    public function __construct($firstName, $name, $company, $phone, $email, $subject, $message){
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
        if (empty($hidden)){
            try {
                //Server settings
                $mail->SMTPDebug = false;                           //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'mail.gandi.net';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'sendmail@activcom.net';                     //SMTP username
                $mail->Password   = 'ssa9242668';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('sendmail@activcom.net', 'Formulaire Simple Web');
                $mail->addAddress('florianvauthier70@gmail.com', 'Florian VAUTHIER');     //Add a recipient
                // $mail->addAddress('ellen@example.com');               //Name is optional
                $mail->addReplyTo($email, $name.$firstName);
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');

                // //Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = $subject;
                if($company==""){
                    $mail->Body='Nom: '.$name.' '.$firstName.
                    ' Telephone:'.$phone.
                    ' Message: '.$message;
                }
                else{
                    $mail->Body='Nom: '.$name.' '.$firstName.
                    ' Société :'.$company.
                    ' Telephone:'.$phone.
                    ' Message: '.$message;
                }
                // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $result = $mail->send();
                if($result){
                    echo json_encode(['response'=>"yes"]);
                }
                
            } catch (Exception $e) {
                echo json_encode(['response'=>"no", 'error'=>$mail->ErrorInfo]);
            }
        }else{
            echo json_encode(['response'=>'yes']);
        }
    }
}
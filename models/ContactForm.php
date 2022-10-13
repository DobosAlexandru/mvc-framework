<?php

namespace app\models;

use app\core\Model;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class ContactForm extends Model
{
    /******
     * Contact form fields
     */

    public string $firstname = '';
    public string $lastname = '';
    public string $email = '';
    public string $message = '';

    public function rules(): array
    {
        return [
            'firstname' => [self::RULE_REQUIRED],
            'lastname' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'message' => [self::RULE_REQUIRED],
        ];
    }

    /******
     * Send email method
     */

    public function send()
    {
        $mail = new PHPMailer(true);

    
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'eb75dd57d0cc26';
        $mail->Password = '9976f0ca719ef8';                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom($this->email, $this->lastname.' '.$this->firstname);
        $mail->addAddress('dobos_alex54@yahoo.com', 'Alex Dobos');     //Add a recipient
        $mail->addReplyTo($this->email, 'Information');
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'You\'ve got a new email from portfolio!';
        $mail->Body    = "First Name: $this->firstname \n";
        $mail->Body    .= "Last Name: $this->lastname \n";
        $mail->Body    .= "Email: $this->email \n";
        $mail->Body    .= "Message:\n $this->message";
    
        return $mail->send();
    }
}
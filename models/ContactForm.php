<?php

namespace app\models;

use app\core\Model;

class ContactForm extends Model
{
    /******
     * Contact form fields
     */

    public string $subject = '';
    public string $email = '';
    public string $body = '';

    public function rules(): array
    {
        return [
            'subject' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED],
            'body' => [self::RULE_REQUIRED],
        ];
    }

    /******
     * Send email method
     */

    public function send()
    {
        /* $email = $this->email;
        $subject = $this->subject;
        $to = $this->to;

        echo '<pre>';
        var_dump($this->email,$this->subject,$this->body,$this->to);
        echo '</pre>';

        $body = "You have received a new email from $email!\n
                Message:\n $this->body";

        mail('lxdobos@gmail.com','My subject','mesajul meu'); */
        return true;
    }

    /******
     * Conact form labels
     */

    public function labels(): array
    {
        return [
            'subject' => 'Subject',
            'email' => 'Your email',
            'body' => 'Your message',
        ];
    }
}
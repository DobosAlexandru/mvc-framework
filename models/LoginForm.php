<?php

namespace app\models;

use app\core\Application;
use app\core\Model;

class LoginForm extends Model
{
    /******
     * Login fields
     */

    public string $email = '';
    public string $password = '';

    /******
     * Login validation rules
     */

    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED]
        ];
    }

    /******
     * Login form labels
     */

    public function labels(): array
    {
        return [
            'email' => 'Your email',
            'password' => 'Password'
        ];
    }

    /******
     * Login method. Search user by email in database
     */

    public function login()
    {
        $user = User::findOne(['email' => $this->email]);
        if(!$user){
            $this->addError('email', 'User does not exists with this email');
            return false;
        }

        if(!password_verify($this->password, $user->password)){
            $this->addError('password', 'Password incorrect');
            return false;
        }

        return Application::$app->login($user);
    }

}
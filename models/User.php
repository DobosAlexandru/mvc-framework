<?php

namespace app\models;

use app\core\UserModel;

class User extends UserModel
{
    /******
     * User status
     */

    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_DELETED = 2;

    /******
     * Input fields from register view
     */

    public string $firstname = '';
    public string $lastname = '';
    public string $email = '';
    public string $password = '';
    public string $confirmPassword = '';
    public int $status = self::STATUS_INACTIVE;

    /******
     * Database table name
     */

    public function tableName(): string
    {
        return 'users';
    }

    /******
     * Table primary key
     */

    public function primaryKey():string
    {
        return 'id';
    }

    /******
     * Register user to DB
     */

    public function save()
    {
        $this->status = self::STATUS_ACTIVE;
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        return parent::save();
    }

    /******
     * Rules foreach field from the form
     */

    public function rules(): array
    {
        return [
            'firstname' => [self::RULE_REQUIRED],
            'lastname' => [self::RULE_REQUIRED],
            'email' => [
                self::RULE_REQUIRED, 
                self::RULE_EMAIL,
                [self::RULE_UNIQUE, 'class' => self::class]
            ],
            'password' => [
                self::RULE_REQUIRED, 
                [self::RULE_MIN, 'min' => 8], 
                [self::RULE_MAX, 'max' => 24]],
            'confirmPassword' => [
                self::RULE_REQUIRED, 
                [self::RULE_MATCH, 'match' => 'password']
            ],
        ];
    }

    /******
     * User attributes
     */

    public function attributes(): array
    {
        return [
            'firstname',
            'lastname',
            'email',
            'password',
            'status'
        ];
    }

    /******
     * User labels
     */

    public function labels(): array
    {
        return [
            'firstname' => 'First name',
            'lastname' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'confirmPassword' => 'Confirm password'
        ];
    }

    /******
     * Display user full name
     */

    public function getDisplayName(): string
    {
        return $this->firstname.' '.$this->lastname;
    }
}
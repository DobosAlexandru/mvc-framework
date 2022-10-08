<?php

namespace app\core\form;

use app\core\Model;

class InputField extends BaseField
{
    /******
     * Types for input fields
     */

    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_NUMBER = 'number';

    /******
     * Type class property
     */

    public string $type;

    /******
     * Field class constructor
     */

    public function __construct(Model $model, string $attribute)
    {
        $this->type = self::TYPE_TEXT;
        parent::__construct($model, $attribute);
    }

    

    /******
     * Set the type of field as password
     */

    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }

    /******
     * Set the type of field as number
     */

    public function numberField()
    {
        $this->type = self::TYPE_NUMBER;
        return $this;
    }

    /******
     * Render single line input
     */

    public function renderInput(): string
    {
        return sprintf(
            '<input type="%s" name="%s" value="%s" class=" %s">',
            $this->type,
            $this->attribute, 
            $this->model->{$this->attribute},
            $this->model->hasError($this->attribute) ? 'is-invalid' : '',
            
        );
    }
}
<?php

namespace app\core\form;

use app\core\Model;

class Field
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
     * Core Model instance
     */

    public Model $model;

    /******
     * Attribute class property
     */

    public string $attribute;

    /******
     * Field class constructor
     */

    public function __construct(Model $model, string $attribute)
    {
        $this->type = self::TYPE_TEXT;
        $this->model = $model;
        $this->attribute = $attribute;
    }

    /******
     * Return the string representation of the current element
     */

    public function __ToString()
    {
        return sprintf('

        <div class="mb-3">
            <label class="form-label">%s</label>
            <input type="%s" name="%s" value="%s" class="form-control %s">
            <div class="invalid-feedback">
                %s
            </div>
        </div>

        ',

        $this->attribute,
        $this->type,
        $this->attribute, 
        $this->model->{$this->attribute},
        $this->model->hasError($this->attribute) ? 'is-invalid' : '',
        $this->model->getFirstError($this->attribute));
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
}
<?php

namespace app\core\form;

use app\core\Model;

abstract class BaseField
{
    /******
     * Core Model instance
     */

    public Model $model;

    /******
     * Attribute class property
     */

    public string $attribute;

     /******
     * BaseField class constructor
     */

    public function __construct(Model $model, string $attribute)
    {
        
        $this->model = $model;
        $this->attribute = $attribute;
    }

    abstract public function renderInput(): string;

    /******
     * Return the string representation of the current element
     */

    public function __toString()
    {
        return sprintf(
        '<div class="text-red-500">
            <label>%s</label>
            %s
            <div class="invalid-feedback">
                %s
            </div>
        </div>
        ',

        $this->model->getLabel($this->attribute),
        $this->renderInput(),
        $this->model->getFirstError($this->attribute)
        );
    }
}
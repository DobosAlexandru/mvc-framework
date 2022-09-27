<?php

namespace app\core\form;

use app\core\Model;

class Form
{
    /******
     * Mark the beginning of a new form
     */

    public static function begin($action, $method)
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
    
        return new Form;
    }

    /******
     * Mark the ending of the form
     */

    public static function end()
    {
        echo '</form>';
    }

    /******
     * Returns a new form field
     */

    public function field(Model $model, $attribute)
    {
        return new Field($model, $attribute);
    }
}
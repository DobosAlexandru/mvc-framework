<?php

namespace app\core;

use app\core\db\DbModel;

abstract class UserModel extends DbModel
{
    /******
     * Child class for full name display
     */

    abstract public function getDisplayName():string;
}
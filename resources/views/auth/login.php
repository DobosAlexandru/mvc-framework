<h1>Login</h1>

<?php

use app\core\form\Form;

$form = Form::begin('', "post");

?>

    <?php echo $form->field($model, 'email'); ?>
    <?php echo $form->field($model, 'password')->passwordField(); ?>

    <button type="submit" class="btn btn-primary">Login</button>

<?php Form::end() ?>
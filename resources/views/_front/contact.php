<?php

use app\core\form\Form;
use app\core\form\TextareaField;

$this->title = 'Contact';

?>

<h1 class="text-4xl font-bold">Contact us</h1>
<section class="">

    <?php $form = Form::begin('', 'post'); ?>
    <div class="space-y-4">
        <?php echo $form->field($model, 'subject') ?>
        <?php echo $form->field($model, 'email'); ?>
        <?php echo new TextareaField($model, 'body') ?>
    </div>
    <button type="submit" class="btn btn-primary">Send</button>

    <?php Form::end(); ?>

</section>
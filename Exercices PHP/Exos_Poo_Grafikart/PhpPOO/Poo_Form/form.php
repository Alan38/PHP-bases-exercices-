<?php
require 'class_form.php';
require 'text.php';

$form = new Form($_POST);

var_dump(Text::withZero(4));

?>

<form action="#" method="POST">
    <?php
    
    echo $form->input('username');
    echo $form->input('password');
    echo $form->button();
    
    ?>
</form>

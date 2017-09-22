<?php
require 'class_form.php';

$form = new Form($_POST);

?>

<form action="#" method="POST">
    <?php
    
    echo $form->input('username');
    echo $form->input('password');
    echo $form->button();
    
    ?>
</form>
<?php
        
        $form->traitement($_POST['username'], $_POST['password']);


?>
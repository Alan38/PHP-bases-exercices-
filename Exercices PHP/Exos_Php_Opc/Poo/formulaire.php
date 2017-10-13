<!DOCTYPE html>
<html>

<head>

</head>

<body>

<?php

require 'Form.php';

$form = new Form();
echo $form->openTagForm('', 'POST', 'form');
echo $form->input('text', 'email', 'Votre email');
echo $form->input('password', 'password', 'Votre mot de passe');
echo $form->input('submit', 'Envoyer', 'btn');
echo $form->closeTagForm();

?>

</body>

</html>
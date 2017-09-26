<?php

use \Alan\html\BootstrapForm;
use \Alan\Autoloader;

?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>

    <?php
    require 'Class/Autoloader.php';
    Autoloader::register();
    

    $form = new BootstrapForm($_POST);

    ?>

    <form action="#" method="POST">
        <?php

        echo $form->input('text', 'username', 'Nom');
        echo $form->input('password', 'password', 'Mot de passe');
        echo $form->button();

        ?>
    </form>
    </body>
</html>
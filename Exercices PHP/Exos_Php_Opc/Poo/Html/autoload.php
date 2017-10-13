<?php

/** 
* CHARGER UNE CLASS AUTOMATIQUEMENT
*/
function autoload($class) {
    require $class . '.php';
}

spl_autoload_register('autoload');

?>
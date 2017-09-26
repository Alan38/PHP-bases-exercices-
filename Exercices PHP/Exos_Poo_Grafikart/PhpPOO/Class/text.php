<?php

namespace Alan;

/**
* Class Text
* Permet de faire passer un nombre a 1 chiffre, a un nombre a 2 chiffres
*/
class Text {
    
    /**
    * @var string
    */
    const SUFFIX = ' €';

    /**
    * @param $chiffre int Chiffre a convertir
    * @return int Nombre a 2 chiffres
    */
    public static function withZero($chiffre) {
        if ($chiffre <= 9) {
            return '0' . $chiffre . self::SUFFIX;
        }
        else {
            return $chiffre . self::SUFFIX;
        }
    }
}


?>
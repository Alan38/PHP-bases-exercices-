<?php

namespace Alan\html;

class BootstrapForm extends Form {
    
    /**
    * @param $html string Code html à entourer
    * @return string
    */
    protected function surround($html) {
        return "<div class=\"form-group\">{$html}</div>";
    }
    
    /**
    * @param $type string
    * @param $name string
    * @param $placeholder string
    * @return string
    */
    public function input($type ,$name, $placeholder) {
        return $this->surround(
            '<label>' . $name . '</label><input type="' . $type . '" name="' . $name . '" value="' . $this->getValue($name) . '" placeholder="' . $placeholder . '" class="form-control">');
    }
    
    /**
    * @return string
    */
    public function button() {
        return $this->surround('<button type="submit" class="btn btn-primary">Envoyer</button>');
    }
}
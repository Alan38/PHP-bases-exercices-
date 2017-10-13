<?php

class Formulaire {



	public function __construct() {

	}

	public function select($name, array $country , $class = null, $id = null) {
		echo '<select class="' . $class . '" id="' . $id . '" name="' . $name . '">';
		for($i = 0; $i < count($country); $i++) {
			echo '<option value="' . $country[$i] . '">' . $country[$i] . '</option>';
		}
		echo '</select><br/>';
	}

	public function blabla2() {

	}

	public function blabla3() {

	}

	public function blabla4() {

	}
}

?>
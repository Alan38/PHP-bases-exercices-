<?php

	class Form {


		public function __construct() {
			
		}

		public function openTagForm($action, $method, $class = null) {

			if ($class == null) {
				return '<form action="' . $action . '" method="' . $method . '">';
			}

			return '<form action="' . $action . '" method="' . $method . '" class="' . $class . '">';
		}

		public function input($type, $name, $placeholder, $class = null) {

			if ($class == null) {
				return '<input type="' . $type . '" name="' . $name . '" placeholder="' . $placeholder . '"><br/>';
			}

			return '<input type="' . $type . '" name="' . $name . '" placeholder="' . $placeholder . '" class="' . $class . '"><br/>';
		}

		public function button($name, $value, $class = null) {

			if ($class == null) {
				return '<button type="submit" name="' . $name . '" value="' . $value . '">';
			}

			return '<button type="submit" name="' . $name . '" value="' . $value . '" class="' . $class . '">';
		}

		public function closeTagForm() {
			return '</form>';
		}

	}

?>
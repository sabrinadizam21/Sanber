<?php
	class Animal{
		public $legs = 2;
		public $cold_blooded = "false";
		public $name;
		
		function __construct($name){
			$this->name = $name;
		}
		
		public function get_legs(){
			$this->$legs;
		}

		public function get_cold_blooded(){
			$this->$cold_blooded;
		}
	}
?>
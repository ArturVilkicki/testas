<?php
class Person {
	public $name;
	public $surname;
	public $age;

	public function __construct($a1,$a2,$a3) {
		$this->name = $a1;
		$this->surname = $a2;
		$this->age= $a3;
		echo $this->name . " is Petras and his surname " . $this->surname . " and his " .$this->age ." years old";
	}
	public function asmensDuomenys($a4,$a5,$a6){
		$this->name = $a4;
		$this->surname = $a5;
		$this->age= $a6;
		echo $this->name . "," .$this->surname . "," . "(" .$this->age . ")";
	}
}

class Staff extends Person {
 public function asmensDuomenys($a7,$a8){
 		$this->name = $a7;
		$this->surname = $a8;
		
		echo $this->surname . "," .$this->name . "," ."darbuotojas";
 }
}

class Client extends Person {
	
}
$staff1 = new Staff();
$clent1 = new Client();

$staff1->asmensDuomenys("asasa","asas", "27");
$client1->asmensDuomenys("asas","asas");
?>
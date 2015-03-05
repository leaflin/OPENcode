<?php

class Cat {

public  $name;
public  $isAlic=true;
	
	public function __construct($name,$isAlic){
	$this->name=$name;
	$this->isAlic=$isAlic;
	
	}
	public function meow(){
	  return "<h1>"."hi Im a cat named  ".$this->name."</h1>";
	
	
	}
}
$cat1=new Cat("Alex");
echo $cat1->meow();
?>

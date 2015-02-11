<?php


class  drink{

	public $name;
	public $is=true ;
	
}
$myOrder=new drink();
$myOrder->name="beer";
$myOrder->is=true;
echo $myOrder->is;
?>
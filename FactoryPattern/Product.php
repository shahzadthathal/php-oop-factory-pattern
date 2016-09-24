<?php
namespace FactoryPattern;

class Product {
	
	protected $name = 'Unknown Product';
	protected $price = 0.0;
	protected $type  = null;

	public function __construct($type){
		$this->type  =  $type;
	}
	public function showProduct(){
		echo "=========Product Start=========<br>";
		echo 'Product name: '.$this->name."<br>";
		echo 'Product price: '.$this->price."<br>";
		echo 'Product type: '.$this->type."<br>";
		echo "=========Product End=========<br>";
		echo "<br>";
	}	
}

<?php
namespace FactoryPattern;

abstract class ProductFactory
{
	public static function build($productType){
		$className = ucwords($productType);
		$product = "FactoryPattern\\$className";
		if(class_exists($product)){
				return new $product($productType);
		}
		else{
			die('Unknown product');
		}
	}
}
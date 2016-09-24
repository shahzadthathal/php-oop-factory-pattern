<?php


abstract class ProductFactory
{
	public static function build($productType){
		$productType = ucwords($productType);
		if(class_exists($productType)){
			$product = new $productType(lcfirst($productType)); 
			return $product;
		}
		else{
			die('Unknown product');
		}
	}

}
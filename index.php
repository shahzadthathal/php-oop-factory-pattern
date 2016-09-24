<?php 
	
	echo 'Entry Script "index.php"<br>';

	require_once("Autoloader.php");
	$autoloader = new Autoloader();

	$productType = $_GET['type'];
	$product = FactoryPattern\ProductFactory::build($productType);
	//$product = new Product('Chair',44,'chair');
	$product->showProduct();

	echo"<pre>";
	echo 'Called Class:';
	print_r($autoloader->calledClassesArr);
?>
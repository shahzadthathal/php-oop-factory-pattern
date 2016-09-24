<?php 
	
	echo 'Entry Script "index.php"<br>';

	require(__DIR__.'/Autoload.php');
	
	$productType = $_GET['type'];
	$product = ProductFactory::build($productType);
	$product->showProduct();

	echo"<pre>";
	echo 'Called Class:';
	print_r($calledClassesArr);
?>
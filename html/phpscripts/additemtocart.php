<?php
	session_start();

	$user = $_SESSION['username'];
	$product_name = $_POST['hidden_name'];
	$product_price = $_POST['hidden_price'];
	$string = 'python ../scripts/cart.py ' .$user.$product_name.$product_price; 
	$cmd = escapeshellcmd($string);
	$add = shell_exec($cmd);
	header("Location:../home.php");

?>
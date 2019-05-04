<?php
session_start();
// including the database connection file
include_once("connection.php");

include_once("connection.php");
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

if(isset($_POST['id']))
{	
	$id = $_POST['id'];
	$name = $_POST['name'];
	$qty = $_POST['qty'];
	$price = $_POST['price'];	
	
	// checking empty fields
	if(empty($name) || empty($qty) || empty($price)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($qty)) {
			echo "<font color='red'>Quantity field is empty.</font><br/>";
		}
		
		if(empty($price)) {
			echo "<font color='red'>Price field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE products SET name='$name', qty='$qty', price='$price' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is product_update_result.php
		header("Location: product_update_result.php");
	}
}
else{
	//redirectig to the index.php
		header("Location: index.php");
}
?>
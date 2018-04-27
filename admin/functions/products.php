<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/database-connection.php');

if(isset($_GET['category'])) {
	$sql = "SELECT * FROM products WHERE category_id=$category_id";		
} else {
	$sql = "SELECT * FROM products";
}

$products = $conn->query($sql);
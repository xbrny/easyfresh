<?php
if(empty($_GET['id'])) {
	header('Location: /admin/');
} else {
	require_once($_SERVER['DOCUMENT_ROOT'].'/database-connection.php');
	
	$id = htmlspecialchars(strip_tags($_GET['id']));

	$sql = "SELECT * FROM products WHERE id=$id LIMIT 1";

	$product = $conn->query($sql);

	if (mysqli_num_rows($product) > 0) {
		$row = mysqli_fetch_assoc($product);
		$id = $row["id"];
		$name = $row["name"];
		$price = $row['price'];
		$stock = $row['stock'];
		$measurement = $row['measurement'];
		$summary = $row['summary'];
		$description = $row['description'];
		$photo = $row['photo'];
		$category_id = $row['category_id'];
	} else {
		header('Location: /admin/');		
	}
}
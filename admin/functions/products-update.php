<?php
if(empty($_POST['submit'])) {
	header('Location: /admin/');
} else {
	require_once($_SERVER['DOCUMENT_ROOT'].'/database-connection.php');

	$id = htmlspecialchars(strip_tags($_POST['id']));
	$name = htmlspecialchars(strip_tags($_POST['name']));
	$price = htmlspecialchars(strip_tags($_POST['price']));
	$stock = htmlspecialchars(strip_tags($_POST['stock']));
	$measurement = htmlspecialchars(strip_tags($_POST['measurement']));
	$summary = htmlspecialchars(strip_tags($_POST['summary']));
	$description = htmlspecialchars(strip_tags($_POST['description']));
	$photo =  $_POST['existing_photo'];
	$category_id = htmlspecialchars(strip_tags($_POST['category_id']));

	if(!empty($_FILES["photo"]['name'])) {
		unlink($_SERVER['DOCUMENT_ROOT'].$photo);
		$target_dir = $_SERVER['DOCUMENT_ROOT']."/images/uploads/";
		$target_file = $target_dir . basename($_FILES["photo"]["name"]);
		$url = '/images/uploads/' . basename($_FILES["photo"]["name"]);
		$photo = $url;

		if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
			echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
		} else {
			header('Location: /admin/');
		}
	}

	$sql = "UPDATE products SET name='$name', price=$price, stock=$stock, measurement='$measurement', summary='$summary', description='$description', photo='$photo', category_id='$category_id' WHERE id=$id";

	if ($conn->query($sql) === TRUE) {
		header('Location: /admin/');
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}
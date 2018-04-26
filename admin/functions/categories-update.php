<?php
if(empty($_POST['submit'])) {
	header('Location: /admin/');
} else {
	require_once($_SERVER['DOCUMENT_ROOT'].'/database-connection.php');

	$id = htmlspecialchars(strip_tags($_POST['id']));
	$name = htmlspecialchars(strip_tags($_POST['name']));

	$sql = "UPDATE categories SET name='$name' WHERE id=$id";

	if ($conn->query($sql) === TRUE) {
		header('Location: /admin/categories.php');
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}
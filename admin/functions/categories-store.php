<?php
if(empty($_POST['submit'])) {
	header('Location: /admin/');
} else {
	require_once($_SERVER['DOCUMENT_ROOT'].'/database-connection.php');

	$name = htmlspecialchars(strip_tags($_POST['name']));

	$sql = "INSERT INTO categories (name) VALUES ('$name')";

	if ($conn->query($sql) === TRUE) {
		header('Location: /admin/categories.php');
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}
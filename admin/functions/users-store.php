<?php
if(empty($_POST['submit'])) {
	header('Location: /admin/');
} else {
	require_once($_SERVER['DOCUMENT_ROOT'].'/database-connection.php');

	$username = htmlspecialchars(strip_tags($_POST['username']));
	$email = htmlspecialchars(strip_tags($_POST['email']));
	$password = htmlspecialchars(strip_tags($_POST['password']));

	$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

	if ($conn->query($sql) === TRUE) {
		header('Location: /admin/users.php');
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}
<?php
if(empty($_GET['id'])) {
	header('Location: /admin/');
} else {
	require_once($_SERVER['DOCUMENT_ROOT'].'/database-connection.php');

	$id = htmlspecialchars(strip_tags($_GET['id']));

	$sql = "DELETE FROM users WHERE id=$id";

	if ($conn->query($sql) === TRUE) {
		header('Location: /admin/users.php');
	} else {
		echo "Error deleting record: " . $conn->error;
	}
	$conn->close();
}
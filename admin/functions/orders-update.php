<?php
if(empty($_POST['submit'])) {
	header('Location: /admin/');
} else {
	require_once($_SERVER['DOCUMENT_ROOT'].'/database-connection.php');

	$id = htmlspecialchars(strip_tags($_POST['id']));
	$status = htmlspecialchars(strip_tags($_POST['status']));

	$sql = "UPDATE orders SET status='$status' WHERE id=$id";

	if ($conn->query($sql) === TRUE) {
		header('Location: /admin/orders.php');
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}
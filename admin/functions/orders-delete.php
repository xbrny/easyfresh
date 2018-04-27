<?php
if(empty($_GET['id'])) {
	header('Location: /admin/');
} else {
	require_once($_SERVER['DOCUMENT_ROOT'].'/database-connection.php');

	$id = htmlspecialchars(strip_tags($_GET['id']));

	$sql = "DELETE FROM orders WHERE id=$id";

	if ($conn->query($sql) === FALSE) {
		echo "Error deleting record: " . $conn->error;
		exit();
	}

	$sql = "DELETE FROM order_product WHERE order_id=$id";

	if ($conn->query($sql) === TRUE) {
		header('Location: /admin/orders.php');
	} else {
		echo "Error deleting record: " . $conn->error;
		exit();
	}
	$conn->close();
}
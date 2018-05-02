<?php
if(empty($_GET['id'])) {
	header('Location: /admin/');
} else {
	session_start();
	require_once($_SERVER['DOCUMENT_ROOT'].'/database-connection.php');
	
	$id = htmlspecialchars(strip_tags($_GET['id']));

	$sql = "SELECT * FROM orders WHERE id=$id LIMIT 1";

	$orders = $conn->query($sql);

	if (mysqli_num_rows($orders) > 0) {
		$row = mysqli_fetch_assoc($orders);
		$id = $row["id"];
		$status = $row['status'];
		$first_name = $row['first_name'];
		$last_name = $row['last_name'];
		$email = $row['email'];
		$phone_number = $row['phone_number'];
		$address = $row['address'];
		$total_price = $row['total_price'];
		$created_date = date("d F Y", strtotime($row['created_date']));
	} else {
		header('Location: /admin/');
	}

	$sql = "SELECT product_id, product_name, quantity, price, measurement FROM order_product WHERE order_id=$id";

	$products = $conn->query($sql);
}
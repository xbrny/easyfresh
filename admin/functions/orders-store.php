<?php
if(empty($_POST['submit'])) {
	header('Location: /');
} else {
	require_once($_SERVER['DOCUMENT_ROOT'].'/database-connection.php');

	$first_name = htmlspecialchars(strip_tags($_POST['first_name']));
	$last_name = htmlspecialchars(strip_tags($_POST['last_name']));
	$email = htmlspecialchars(strip_tags($_POST['email']));
	$phone_number = htmlspecialchars(strip_tags($_POST['phone_number']));
	$address = htmlspecialchars(strip_tags($_POST['address']));
	$total_price = htmlspecialchars(strip_tags($_POST['total_price']));
	// $items = $_POST['items'];

	$sql = "INSERT INTO orders (first_name, last_name, email, phone_number, address, total_price)
		VALUES ('$first_name', '$last_name', '$email', '$phone_number', '$address', $total_price)";

	if ($conn->query($sql) === TRUE) {
		$order_id = $conn->insert_id;

		session_start();

		foreach ($_SESSION['basket'] as $item) {
			$product_id = $item["id"];
			$name = $item["name"];
			$quantity = $item["quantity"];
			$price = $item["price"];
			$measurement = $item["measurement"];
			
			$sql = "INSERT INTO order_product (product_id, product_name, quantity, price, measurement, order_id)
				VALUES ($product_id, '$name', $quantity, $price, '$measurement', $order_id)";

			if ($conn->query($sql) !== TRUE) {
				echo "Error: " . $sql . "<br>" . $conn->error;
				die();
			}
		}
	
		unset($_SESSION['basket']);

		header("Location: /products/invoice.php?id=$order_id");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		die();
	}

	$conn->close();
}
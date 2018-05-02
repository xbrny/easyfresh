<?php
session_start();
// unset($_SESSION['basket']);
// die();
if(isset($_POST['id'])) {
	$item = array(
		'id' => $_POST['id'],
		'name' => $_POST['name'],
		'price' => $_POST['price'],
		'quantity' => $_POST['quantity'],
		'measurement' => $_POST['measurement']
	);
	$item_id_array = [];
	if (isset($_SESSION['basket'])) {
		foreach ($_SESSION['basket'] as $key => $value) {
			array_push($item_id_array, $key);
		}
	}
	if(in_array($item['id'], $item_id_array)) {
		$_SESSION['basket'][$item['id']]['quantity'] += $item['quantity'];
	} else {
		$_SESSION['basket'][$item['id']] = $item;
	}
	// $_SESSION['basket'][$item['id']] = $item;
	// if(isset($_SESSION['basket'])) {
	// 	foreach ($_SESSION['basket'] as $key => $item) {
	// 		if ($item['id'] == $_POST['id']) {
	// 			$_SESSION['basket'][$key]['quantity'] += (integer)$_POST['quantity'];
	// 			break;
	// 		}
	// 	}
	// }
} elseif (isset($_GET['id'])) {
	unset($_SESSION['basket'][$_GET['id']]);

} elseif (isset($_GET['clear'])) {
	unset($_SESSION['basket']);
	
}
header("Location: /products/basket.php");


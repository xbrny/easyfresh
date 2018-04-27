<?php
if(empty($_GET['id'])) {
	header('Location: /admin/');
} else {
	require_once($_SERVER['DOCUMENT_ROOT'].'/database-connection.php');
	
	$id = htmlspecialchars(strip_tags($_GET['id']));

	$sql = "SELECT id, name FROM categories WHERE id=$id";

	$categories = $conn->query($sql);

	if (mysqli_num_rows($categories) > 0) {
		$row = mysqli_fetch_assoc($categories);
		$id = $row["id"];
		$name = $row["name"];
	} else {
		header('Location: /admin/');
	}
}
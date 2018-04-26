<?php
if(empty($_GET['id'])) {
	header('Location: /admin/');
} else {
	require_once($_SERVER['DOCUMENT_ROOT'].'/database-connection.php');
	
	$id = htmlspecialchars(strip_tags($_GET['id']));

	$sql = "SELECT id, name FROM categories WHERE id=$id";

	$result = $conn->query($sql);

	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
		$id = $row["id"];
		$name = $row["name"];
	} else {
		header('Location: /admin/');		
	}
}
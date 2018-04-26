<?php
if(empty($_GET['id'])) {
	header('Location: /admin/');
} else {
	require_once($_SERVER['DOCUMENT_ROOT'].'/database-connection.php');

	$id = htmlspecialchars(strip_tags($_GET['id']));

	$sql = "SELECT photo FROM products WHERE id=$id";
	$result = $conn->query($sql);
	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
		$photo = $row['photo'];
	} else {
		header('Location: /admin/');		
	}

	$sql = "DELETE FROM products WHERE id=$id";

	if ($conn->query($sql) === TRUE) {
		unlink($_SERVER['DOCUMENT_ROOT'].$photo);
		header('Location: /admin/');
	} else {
		echo "Error deleting record: " . $conn->error;
	}
	$conn->close();
}
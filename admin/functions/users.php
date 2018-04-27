<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/database-connection.php');

$email = $_SESSION['email'];

$sql = "SELECT * FROM users WHERE email <> '$email'";

$users = $conn->query($sql);
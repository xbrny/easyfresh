<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/database-connection.php');

$sql = "SELECT id, name, stock FROM products";

$result = $conn->query($sql);
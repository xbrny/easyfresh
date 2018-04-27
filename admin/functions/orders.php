<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/database-connection.php');

$sql = "SELECT * FROM orders";

$orders = $conn->query($sql);
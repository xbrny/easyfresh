<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/database-connection.php');

$sql = "SELECT id, name FROM categories";

$categories = $conn->query($sql);
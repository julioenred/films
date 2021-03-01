<?php
include './config.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

$sql = "UPDATE Films SET name='" . $_POST['name'] . "', description='" . $_POST['description'] . "' WHERE id=" . $_POST['id'];
$conn->query($sql);

var_dump('success'); exit;
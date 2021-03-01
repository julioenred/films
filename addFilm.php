<?php
include './config.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

$sql = "INSERT INTO Films (name, description) VALUES ('" . $_POST['name'] . "', '" . $_POST['description'] . "')";
$conn->query($sql);

var_dump('success'); exit;
<?php
include './config.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// sql to delete a record
$sql = "DELETE FROM Films WHERE id=" . $_POST['id'] . "";

$conn->query($sql);

var_dump('success'); exit;
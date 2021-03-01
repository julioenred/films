<?php
include './config.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

$sql = "INSERT INTO Films (name, description) VALUES ('" . $_POST['name'] . "', '" . $_POST['description'] . "')";
$conn->query($sql);
var_dump($conn->connect_error); 
var_dump($conn->error); 

var_dump('success'); exit;
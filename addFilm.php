<?php
// Lo hemos trabajado en conjunto

$servername = "localhost";
$username = "root";
$password = "root";
$db = "films";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

$sql = "INSERT INTO Films (name, description) VALUES ('" . $_POST['name'] . "', '" . $_POST['description'] . "')";
$conn->query($sql);

var_dump('success'); exit;
<?php
// Lo hemos trabajado en conjunto

$servername = "localhost";
$username = "root";
$password = "root";
$db = "films";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

$sql = "UPDATE series SET name='" . $_POST['name'] . "', description='" . $_POST['description'] . "' WHERE id=" . $_POST['id'];
$conn->query($sql);

var_dump('success'); exit;
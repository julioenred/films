<?php
// Lo hemos trabajado en conjunto

$servername = "localhost";
$username = "root";
$password = "root";
$db = "films";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// sql to delete a record
$sql = "DELETE FROM series WHERE id=" . $_POST['id'] . "";

$conn->query($sql);

var_dump('success'); exit;
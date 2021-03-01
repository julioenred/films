<?php
include './config.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// sql to delete a record
$sql = "SELECT * FROM Films";

$films = $conn->query($sql);

if ($films->num_rows > 0) 
{
    // output data of each row
    while($row = $films->fetch_assoc()) 
    {
      echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["description"]. "<br>";
    }
} 
else 
{
    echo "0 results";
}

?>


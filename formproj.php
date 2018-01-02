<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO persons (lastname, firstname, personid, city, address)
VALUES ('Doe', 'Jon','10','charlotte','hilltop ln')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "imones";
$err = "";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
} 
$sql = "SELECT * FROM imones";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        array_push($products, $row);
    }
} else {
    $err = "Imoniu nerasta";
}
mysqli_close($conn);
include "view.php";
?>
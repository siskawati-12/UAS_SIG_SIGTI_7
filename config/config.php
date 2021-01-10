<?php
$conn = new mysqli("localhost", "root", "", "gisibadah");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

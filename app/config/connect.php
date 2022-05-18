<?php
// Create connection
$conn = mysqli_connect("localhost", "root", '', "db_senda");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

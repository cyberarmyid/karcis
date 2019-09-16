<?php
$conn = mysqli_connect("localhost","guest","hulahulalo","db_karcis");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
} 

$host = '/karcis/';

error_reporting(E_ALL);


?>

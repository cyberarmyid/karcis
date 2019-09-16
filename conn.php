<?php

require_once("./vendor/autoload.php");

use Dotenv\Dotenv;

$dotenv = Dotenv::create(__DIR__);
$dotenv->load();

$db_host = getenv("DB_HOST");
$db_name = getenv("DB_DATABASE");
$db_username = getenv("DB_USERNAME");
$db_password = getenv("DB_PASSWORD");

$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$host = '/karcis/';

error_reporting(E_ALL);


?>

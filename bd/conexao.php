<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "projeto_web_2021_1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $databasename);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>
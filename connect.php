<?php

$servername = "mysql-joannadyl.alwaysdata.net";
$username = "joannadyl";
$password = "lollol92589@";
$dbname = "joannadyl_sql";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

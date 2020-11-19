<?php

$servername = "mysql-joannadyl.alwaysdata.net";
$username = "joannadyl";
$password = "lollol92589@";
$dbname = "joannadyl_sql";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pracownicy (id_pracownicy, imie, dzial, zarobki, data_urodzenia) 
       VALUES (null,'Ksawery', 3, 36,'1995-10-21')";

$conn->query($sql);

$conn->close();
?>

<?php
echo("jestes w delete.php <br>");
echo("<br>");
echo $_POST['id_pracownicy'];


$servername = "mysql-joannadyl.alwaysdata.net";
$username = "joannadyl";
$password = "lollol92589@";
$dbname = "joannadyl_sql";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//definiujemy zapytanie $sql
$sql = "DELETE FROM pracownicy WHERE id_pracownicy=".$_POST['id_pracownicy'];

//wyświetlamy zapytanie $sql
echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "<br>Record deleted successfully";
  header('Location: http://www.example.com/');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<?php
echo("jestes w delete.php <br>");
echo("<br>");
echo $_POST['id_pracownicy'];


require_once "../connect.php";


//definiujemy zapytanie $sql
$sql = "DELETE FROM pracownicy WHERE id_pracownicy=".$_POST['id_pracownicy'];

//wyświetlamy zapytanie $sql
echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "<br>Record deleted successfully";
  header('Location: https://dyljoanna.herokuapp.com/pracownicy/danedobazy.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<?php
echo("jestes w dodpp.php <br>");
echo $_POST['id'];

require_once("../../connect.php");

$sql = "INSERT INTO pracownik_projekt (id_proj, id_pracownik, id_projekt) 
VALUES (null, '".$_POST['prac']."', '".$_POST['proj']."')";


echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('Location: https://dyljoanna.herokuapp.com/grid/grid1/index1.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
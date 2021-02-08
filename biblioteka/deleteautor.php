<?php
echo("jestes w deleteautor.php <br>");
echo $_POST['id'];

require_once("../connect.php");

$sql = "DELETE FROM bibl_autor WHERE id_autor=".$_POST['id_autor'];

echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('Location: https://dyljoanna.herokuapp.com/biblioteka/ksiazki.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
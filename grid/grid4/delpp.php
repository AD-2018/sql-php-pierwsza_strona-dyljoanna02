<?php
echo("jestes w delpp.php <br>");
echo $_POST['id'];

require_once("../../connect.php");

$sql = "DELETE FROM osoba_rola WHERE id=".$_POST['id'];


echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('Location: https://dyljoanna.herokuapp.com/grid/grid4/index4.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
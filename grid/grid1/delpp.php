<?php
echo("jestes w delpp.php <br>");
echo $_POST['id'];

require_once("../../connect.php");

$sql = "DELETE FROM pracownik_projekt WHERE id_proj=".$_POST['id'];


echo $sql;

if ($conn->query($sql) === TRUE) {

  header('Location: https://dyljoanna.herokuapp.com/grid/grid1/index1.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

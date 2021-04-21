<?php
echo("jestes w delpraw.php <br>");
echo $_POST['id'];

require_once("../../connect.php");

$sql = "DELETE FROM prawnik WHERE id=".$_POST['id'];

echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('Location: https://dyljoanna.herokuapp.com/grid/grid2/index2.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
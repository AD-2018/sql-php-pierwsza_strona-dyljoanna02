<?php
echo("jestes w delpp.php <br>");
echo $_POST['id'];

require_once("../../connect.php");

$sql = "DELETE FROM pracownik WHERE pracownik=".$_POST['pracownik'];"DELETE FROM projekt WHERE projekt=".$_POST['projekt'];

echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('Location: https://dyljoanna.herokuapp.com/grid/grid1/index1.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
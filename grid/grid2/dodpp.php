<?php
echo("jestes w dodpp.php <br>");
echo $_POST['id'];

require_once("../../connect.php");

$sql = "INSERT INTO prawnik_sprawa (id_sad, id_prawnik, id_sprawa) 
VALUES (null, '".$_POST['praw']."', '".$_POST['spr']."')";


echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('Location: https://dyljoanna.herokuapp.com/grid/grid1/index1.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
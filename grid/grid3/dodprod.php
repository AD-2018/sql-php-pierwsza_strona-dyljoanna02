<?php
echo("jestes w dodprod.php");
echo "<li>".$_POST['producent'];

require_once("../../connect.php");

$sql = "INSERT INTO producent (id, producent) 
       VALUES (null, '".$_POST['producent']."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('Location:https://dyljoanna.herokuapp.com/grid/grid3/index3.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
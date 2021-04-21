<?php
echo("jestes w dodos.php");
echo "<li>".$_POST['osoba'];

require_once("../../connect.php");

$sql = "INSERT INTO osoba (id, osoba) 
       VALUES (null, '".$_POST['osoba']."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('Location:https://dyljoanna.herokuapp.com/grid/grid4/index4.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
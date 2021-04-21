<?php
echo("jestes w dodspr.php");
echo "<li>".$_POST['sprawa'];

require_once("../../connect.php");

$sql = "INSERT INTO sprawa (id, sprawa) 
       VALUES (null, '".$_POST['sprawa']."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('Location:https://dyljoanna.herokuapp.com/grid/grid1/index1.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
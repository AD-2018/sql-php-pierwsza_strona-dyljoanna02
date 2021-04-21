<?php
echo("jestes w dodproj.php");
echo "<li>".$_POST['projekt'];

require_once("../../connect.php");

$sql = "INSERT INTO projekt (id_proj, projekt) 
       VALUES (null, '".$_POST['projekt']."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('Location:https://dyljoanna.herokuapp.com/grid/grid1/index1.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
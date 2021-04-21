<?php
echo("jestes w dodpraw.php");
echo "<li>".$_POST['prawnik'];

require_once("../../connect.php");

$sql = "INSERT INTO prawnik (id, prawnik) 
       VALUES (null, '".$_POST['prawnik']."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('Location:https://dyljoanna.herokuapp.com/grid/grid2/index2.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
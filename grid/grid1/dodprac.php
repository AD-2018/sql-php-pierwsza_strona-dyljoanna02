<?php
echo("jestes w dodprac.php");
echo "<li>".$_POST['pracownik'];

require_once("../../connect.php");

$sql = "INSERT INTO pracownik (id, pracownik) 
       VALUES (null, '".$_POST['pracownik']."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('Location:https://dyljoanna.herokuapp.com/grid/grid1/index1.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
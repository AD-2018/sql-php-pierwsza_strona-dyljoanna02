<?php
echo("jestes w dodprodukt.php");
echo "<li>".$_POST['produkt'];

require_once("../../connect.php");

$sql = "INSERT INTO produkt (id, produkt) 
       VALUES (null, '".$_POST['produkt']."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('Location:https://dyljoanna.herokuapp.com/grid/grid3/index3.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
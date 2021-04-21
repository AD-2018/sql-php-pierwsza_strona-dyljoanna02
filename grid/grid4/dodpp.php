<?php
echo("jestes w dodpp.php <br>");
echo $_POST['id'];

require_once("../../connect.php");

$sql = "INSERT INTO osoba_rola (id_inf, id_osoba, id_rola) 
VALUES (null, '".$_POST['os']."', '".$_POST['rol']."')";


echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('Location: https://dyljoanna.herokuapp.com/grid/grid4/index4.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
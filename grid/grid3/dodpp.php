<?php
echo("jestes w dodpp.php <br>");
echo $_POST['id'];

require_once("../../connect.php");

$sql = "INSERT INTO producent_produkt (id_prod, id_producent, id_produkt) 
VALUES (null, '".$_POST['prod']."', '".$_POST['produkt']."')";


echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('Location: https://dyljoanna.herokuapp.com/grid/grid3/index3.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
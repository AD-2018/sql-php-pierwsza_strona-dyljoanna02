<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Dane do Bazy</title>
</head>
<body>
	<h3> DODAWANIE PRACOWNIKA </h3>
	<form action="insert.php" method="POST">
	    <input type="text" name="imie">
		<input type="number" name="dzial"></br>
		<input type="number" name="zarobki"></br>
		<input type="date" name="data_urodzenia"></br>
		<input type="submit" value="dodaj pracownika">
	</form>
	<h3> USUWANIE PRACOWNIKA </h3>
	<form action="delete.php" method="POST">
   		<input type="number" name="id_pracownicy"></br>
   		<input type="submit" value="Zapisz w zmiennej $_POST['id_pracownicy']">
	</form>
<?php
	require_once "connect.php";

$sql = "SELECT * FROM pracownicy";
echo("<h3>ZADANIE PRÓBA</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>id</th><th>imie</th><th>zarobki</th><th>data urodzenia</th><th>dzial</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td><td>".$row['dzial']."</td>");
    echo ('</tr>');
}
echo ('</table>');
?>
</body>
</html>

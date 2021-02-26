<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="/style.css">
  <title>Joanna Dyl</title>
  <link rel="apple-touch-icon" sizes="180x180" href="/icon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/icon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/icon/favicon-16x16.png">
  <link rel="manifest" href="/icon/site.webmanifest">
</head>
<body>
	<div class="container">
<div class="menu blue">
<a class="link" href="https://dyljoanna.herokuapp.com">Strona Glowna </a>
</div>
	<div class="tresc green">
  <h3>Dodawanie Autora</h3>
	<form action="/biblioteka/insertautor.php" method="POST">
		<label>Autor</label><input type="text" name="autor"></br>
		<input type="submit" value="Dodaj Autora">
	</form>
  <h3>Dodawanie Tytułu</h3>
	<form action="/biblioteka/inserttytul.php" method="POST">
		<label>Tytul</label><input type="text" name="tytul"></br>
		<input type="submit" value="Dodaj Tytul">
	</form>

<?php
require_once ("../connect.php");

$sql = "SELECT * FROM bibl_autor";
echo ("<h3>Autorzy</h3>");
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok</br>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<label for="bibl_autor">Wybierz autora: </label>');	
echo('<select name="autor">');
    while($row=mysqli_fetch_assoc($result)){
        echo('<option value="'.$row['id_autor'].'">');
        echo($row['autor']);
        echo("</option>"); 
    }
echo('</select>');

$sql = "SELECT * FROM bibl_autor";
echo("<h3>Autorzy</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>id_autor</th><th>autor</th><th>usuwanie</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
   echo('<td>'.$row['id_autor'].'</td>'.'<td>'.$row['autor'].'</td>'.

         '<td>
	<form action="deleteautor.php" method="POST">
        <input type="hidden" name="id_autor" value="'.$row['id_autor'].'">
        <input type="submit" value="USUŃ">
    	</form>
	</td>');
    echo ('</tr>');
}
echo ('</table>');

$sql = "SELECT * FROM bibl_tytul";
echo("<h3>Książki</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok</br>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<label for="bibl_tytul">Wybierz tytuł: </label>');	
echo('<select name="tytul">');
    while($row=mysqli_fetch_assoc($result)){
        echo('<option value="'.$row['id_tytul'].'">');
        echo($row['tytul']);
        echo("</option>"); 
    }
echo('</select>');

$sql = "SELECT * FROM bibl_tytul";
echo("<h3>Książki</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>id_tytul</th><th>tytul</th><th>usuwanie</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
   echo('<td>'.$row['id_tytul'].'</td>'.'<td>'.$row['tytul'].'</td>'.

         '<td>
	<form action="deletetytul.php" method="POST">
        <input type="hidden" name="id_tytul" value="'.$row['id_tytul'].'">
        <input type="submit" value="USUŃ">
    	</form>
	</td>');
    echo ('</tr>');
}
echo ('</table>');
	
$sql = "SELECT * FROM bibl_book";
echo("<h3>Powiązania</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>id_book</th><th>id_autor</th><th>id_tytul</th><th>wypozyczenia</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['id_book']."</td><td>".$row['id_autor']."</td><td>".$row['id_tytul']."</td><td>".$row['wypoz']."</td>");
    echo ('</tr>');
}
echo ('</table>');
	
$sql = "SELECT autor, tytul FROM bibl_tytul, bibl_book, bibl_autor WHERE bibl_tytul.id_tytul=bibl_book.id_tytul AND bibl_autor.id_autor=bibl_book.id_autor";
echo("<h3>AUTORZY I KSIĄŻKI</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>autor</th><th>tytul</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['autor']."</td><td>".$row['tytul']."</td>");
    echo ('</tr>');
}
echo ('</table>');
?>
	</div>
	</div>
</body>
</html>

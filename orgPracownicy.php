<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
     <div>
    <a href="https://dyljoanna.herokuapp.com/">Strona Glowna </a>
    <a href="funkcAgregujace.php">Funkcje Agregujace</a><br/>
    </div>

<?php
echo("Jestem tu: <br/>orgPracownicy.php<br/>");
     require_once "connect.php";

$sql = "SELECT imie,nazwa_dzial FROM pracownicy,organizacja WHERE id_org=dzial";
echo("<h3>ZADANIE 1</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>imie</th><th>nazwa_dzial</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td>");
    echo ('</tr>');
}
echo ('</table>');
     
$sql = "SELECT imie,nazwa_dzial FROM pracownicy,organizacja WHERE (id_org=dzial) AND (dzial=1 OR dzial=4) ";
echo("<h3>ZADANIE 2</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>imie</th><th>nazwa_dzial</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td>");
    echo ('</tr>');
}
echo ('</table>');
?>
  </body>
</html>

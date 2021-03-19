<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Joanna Dyl</title>
<link rel="apple-touch-icon" sizes="180x180" href="/icon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/icon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/icon/favicon-16x16.png">
  <link rel="manifest" href="/icon/site.webmanifest">
</head>
<body>
    <div class="container">
        <div class="tytul red">
        <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-dyljoanna02">Github</a>
            <div class="imie">
            <h1>Joanna Dyl nr 4</h1>
            </div>
        </div>
        <div class="menu blue">
        <a class="link" href="/pracownicy/orgPracownicy.php">Pracownicy i Organizacja </a>
        <a class="link" href="/pracownicy/dataczas.php">Data i Czas </a>
        <a class="link" href="/pracownicy/funkcAgregujace.php">Funkcje Agregujace</a>
        <a class="link" href="/pracownicy/formularz.html">Formularz</a>
        <a class="link" href="/pracownicy/danedobazy.php">Do Bazy</a>
        <a class="link" href="/biblioteka/ksiazki.php">Ksiazki</a><br/>
        <a class="link" href="/flexbox/index.html">Flexbox</a>
        <a class="link" href="/grid/index.html">GRID</a>
        </div>
    <div class="tresc green">
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

$sql = "SELECT * FROM pracownicy WHERE dzial=2";
echo("<h3>ZADANIE 1</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>imie</th><th>zarobki</th><th>data urodzenia</th><th>dzial</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td><td>".$row['dzial']."</td>");
    echo ('</tr>');
}
echo ('</table>');

$sql = "SELECT * FROM pracownicy WHERE dzial=2 or dzial=3";
echo("<h3>ZADANIE 2</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>imie</th><th>zarobki</th><th>data urodzenia</th><th>dzial</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td><td>".$row['dzial']."</td>");
    echo ('</tr>');
}
echo ('</table>');

$sql = "SELECT * FROM pracownicy WHERE zarobki<30";
echo("<h3>ZADANIE 3</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>imie</th><th>zarobki</th><th>data urodzenia</th><th>dzial</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td><td>".$row['dzial']."</td>");
    echo ('</tr>');
}
echo ('</table>');
?>
        </div>
    </div>
</body>
</html>

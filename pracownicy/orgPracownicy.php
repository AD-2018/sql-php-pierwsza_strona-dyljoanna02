<!DOCTYPE html>
<html>
<head>
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
    <a class="link" href="https://github.com/AD-2018/sql-php-pierwsza_strona-dyljoanna02">Github</a><br/><br/>
    <a class="link" href="https://dyljoanna.herokuapp.com">Strona Glowna </a>
    <a class="link" href="/pracownicy/dataczas.php">Data i Czas </a>
    <a class="link" href="/pracownicy/funkcAgregujace.php">Funkcje Agregujace</a>
    <a class="link" href="/pracownicy/formularz.html">Formularz </a><br/>
    </div>
<div class="tresc green">
<?php
echo("Jestem tu: <br/>Pracownicy i Organizacja<br/>");
     require_once "../connect.php";

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
     
$sql = "SELECT imie,nazwa_dzial FROM pracownicy,organizacja WHERE id_org=dzial AND imie LIKE '%a'";
echo("<h3>ZADANIE 3</h3>");
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
     
$sql = "SELECT imie,nazwa_dzial FROM pracownicy,organizacja WHERE id_org=dzial AND imie NOT LIKE '%a'";
echo("<h3>ZADANIE 4</h3>");
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
     
     echo("<h2>SORTOWANIE</h2>");
     
$sql = "SELECT imie,nazwa_dzial FROM pracownicy,organizacja WHERE id_org=dzial ORDER BY imie desc";
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
     
$sql = "SELECT imie,nazwa_dzial FROM pracownicy,organizacja WHERE id_org=dzial AND dzial=3 ORDER BY imie asc";
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
     
$sql = "SELECT imie,nazwa_dzial FROM pracownicy,organizacja WHERE id_org=dzial AND imie LIKE '%a' ORDER BY imie asc";
echo("<h3>ZADANIE 3</h3>");
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
     
$sql = "SELECT imie,zarobki,nazwa_dzial FROM pracownicy,organizacja WHERE (id_org=dzial) AND (imie LIKE '%a') AND (dzial=1 OR dzial=3) ORDER BY zarobki asc";
echo("<h3>ZADANIE 4</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>imie</th><th>zarobki</th><th>nazwa_dzial</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td>");
    echo ('</tr>');
}
echo ('</table>');
     
$sql = "SELECT imie,zarobki,nazwa_dzial FROM pracownicy,organizacja WHERE (id_org=dzial) AND (imie NOT LIKE '%a') ORDER BY nazwa_dzial asc, zarobki asc";
echo("<h3>ZADANIE 5</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>imie</th><th>zarobki</th><th>nazwa_dzial</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td>");
    echo ('</tr>');
}
echo ('</table>');
echo ("<h2>LIMIT</h2>");
     
$sql = "SELECT imie,zarobki,nazwa_dzial FROM pracownicy,organizacja WHERE id_org=dzial AND dzial=4 ORDER BY zarobki desc LIMIT 2";
echo("<h3>ZADANIE 1</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>imie</th><th>zarobki</th><th>nazwa_dzial</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td>");
    echo ('</tr>');
}
echo ('</table>');
     
$sql = "SELECT imie,zarobki,nazwa_dzial FROM pracownicy,organizacja WHERE (id_org=dzial) AND (imie LIKE '%a') AND (dzial=4 OR dzial=2) ORDER BY zarobki desc LIMIT 3";
echo("<h3>ZADANIE 2</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>imie</th><th>zarobki</th><th>nazwa_dzial</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td>");
    echo ('</tr>');
}
echo ('</table>');
     
$sql = "SELECT imie,data_urodzenia,nazwa_dzial FROM pracownicy,organizacja WHERE id_org=dzial ORDER BY nazwa_dzial asc LIMIT 1";
echo("<h3>ZADANIE 3</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>imie</th><th>data_urodzenia</th><th>nazwa_dzial</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['imie']."</td><td>".$row['data_urodzenia']."</td><td>".$row['nazwa_dzial']."</td>");
    echo ('</tr>');
}
echo ('</table>');
?>
     </div>
     </div>
  </body>
</html>

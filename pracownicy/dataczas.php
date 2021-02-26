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
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-dyljoanna02">Github</a><br/><br/>
    <a class="link" href="https://dyljoanna.herokuapp.com">Strona Glowna </a>
    <a class="link" href="/pracownicy/orgPracownicy.php">Pracownicy i Organizacja </a>
    <a class="link" href="/pracownicy/funkcAgregujace.php">Funkcje Agregujace</a>
    <a class="link" href="/pracownicy/formularz.html">Formularz </a><br/>
    </div>
    <div class="tresc green">
<?php
echo("Jestem tutaj: <br>Data i Czas</br>");
    
    require_once "../connect.php";
    
    
$sql = "SELECT *, YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM pracownicy";
echo("<h3>ZADANIE 1</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>imie</th><th>zarobki</th><th>data urodzenia</th><th>dzial</th><th>wiek</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td><td>".$row['dzial']."</td><td>".$row['wiek']."</td>");
    echo ('</tr>');
}
echo ('</table>');
    
$sql = "SELECT *, YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM pracownicy,organizacja WHERE id_org=dzial AND nazwa_dzial='serwis'";
echo("<h3>ZADANIE 2</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>imie</th><th>zarobki</th><th>data urodzenia</th><th>nazwa_dzial</th><th>wiek</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['wiek']."</td>");
    echo ('</tr>');
}
echo ('</table>');

$sql = "SELECT sum(YEAR(curdate())-YEAR(data_urodzenia)) as suma_lat FROM pracownicy";
echo("<h3>ZADANIE 3</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>suma_lat</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['suma_lat']."</td>");
    echo ('</tr>');
}
echo ('</table>');
    
$sql = "SELECT sum(YEAR(curdate())-YEAR(data_urodzenia)) as suma_lat FROM pracownicy,organizacja WHERE id_org=dzial AND nazwa_dzial='handel'";
echo("<h3>ZADANIE 4</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>suma_lat</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['suma_lat']."</td>");
    echo ('</tr>');
}
echo ('</table>');
    
$sql = "SELECT sum(YEAR(curdate())-YEAR(data_urodzenia)) as suma_lat FROM pracownicy WHERE imie LIKE '%a'";
echo("<h3>ZADANIE 5</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>suma_lat</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['suma_lat']."</td>");
    echo ('</tr>');
}
echo ('</table>');
    
$sql = "SELECT sum(YEAR(curdate())-YEAR(data_urodzenia)) as suma_lat FROM pracownicy WHERE imie NOT LIKE '%a'";
echo("<h3>ZADANIE 6</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>suma_lat</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['suma_lat']."</td>");
    echo ('</tr>');
}
echo ('</table>');
    
$sql = "SELECT nazwa_dzial,avg(YEAR(curdate())-YEAR(data_urodzenia)) as srednia FROM pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial";
echo("<h3>ZADANIE 7</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>srednia</th><th>nazwa_dzial</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['srednia']."</td><td>".$row['nazwa_dzial']."</td>");
    echo ('</tr>');
}
echo ('</table>');
    
$sql = "SELECT nazwa_dzial,sum(YEAR(curdate())-YEAR(data_urodzenia)) as suma_lat FROM pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial";
echo("<h3>ZADANIE 8</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>suma_lat</th><th>nazwa_dzial</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['suma_lat']."</td><td>".$row['nazwa_dzial']."</td>");
    echo ('</tr>');
}
echo ('</table>');
    
$sql = "SELECT nazwa_dzial,max(YEAR(curdate())-YEAR(data_urodzenia)) as wiek FROM pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial";
echo("<h3>ZADANIE 9</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>wiek</th><th>nazwa_dzial</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['wiek']."</td><td>".$row['nazwa_dzial']."</td>");
    echo ('</tr>');
}
echo ('</table>');
    
$sql = "SELECT nazwa_dzial,min(YEAR(curdate())-YEAR(data_urodzenia)) as wiek FROM pracownicy,organizacja WHERE id_org=dzial AND (nazwa_dzial='handel' OR nazwa_dzial='serwis') GROUP BY dzial";
echo("<h3>ZADANIE 10</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>wiek</th><th>nazwa_dzial</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['wiek']."</td><td>".$row['nazwa_dzial']."</td>");
    echo ('</tr>');
}
echo ('</table>');
    
$sql = "SELECT imie,nazwa_dzial,min(YEAR(curdate())-YEAR(data_urodzenia)) as wiek FROM pracownicy,organizacja WHERE id_org=dzial AND (nazwa_dzial='handel' OR nazwa_dzial='serwis') GROUP BY dzial";
echo("<h3>ZADANIE 11</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>imie</th><th>wiek</th><th>nazwa_dzial</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['imie']."</td><td>".$row['wiek']."</td><td>".$row['nazwa_dzial']."</td>");
    echo ('</tr>');
}
echo ('</table>');
    
$sql = "SELECT imie, DATEDIFF(curdate(),data_urodzenia) as dni FROM pracownicy";
echo("<h3>ZADANIE 12</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>imie</th><th>dni_zycia</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['imie']."</td><td>".$row['dni']."</td>");
    echo ('</tr>');
}
echo ('</table>');
    
$sql = "SELECT *, YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM pracownicy,organizacja WHERE id_org=dzial AND imie NOT LIKE '%a' ORDER BY wiek desc LIMIT 1";
echo("<h3>ZADANIE 13</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>imie</th><th>zarobki</th><th>data urodzenia</th><th>nazwa_dzial</th><th>wiek</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['wiek']."</td>");
    echo ('</tr>');
}
echo ('</table>');
    echo("<h2>FORMATOWANIE</h2>");
    
$sql = "SELECT imie,zarobki,dzial, DATE_FORMAT(data_urodzenia,'%W-%m-%Y') as data_urodzenia from pracownicy;";
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

echo("<h3> ZADANIE 2 </h3>");
    $sql1 = "SET lc_time_names = 'pl_PL'";
    $sql2 ="SELECT DATE_FORMAT(CURDATE(), '%W')as data";
    echo ("<li>".$sql2."</li><br><br>");
    $result = mysqli_query($conn, $sql1);
    $result = mysqli_query($conn, $sql2);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>data</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["data"].'</td>');
                echo ('</tr>');
        }echo ('</table>');

echo('</table>');
    
$sql = "SELECT imie,zarobki,dzial, DATE_FORMAT(data_urodzenia,'%w-%M-%Y') as data_urodzenia from pracownicy;";
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
    
$sql = "SELECT curtime(4) as czas";
echo("<h3>ZADANIE 4</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>czas</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['czas']."</td>");
    echo ('</tr>');
}
echo ('</table>');
    
$sql = "SELECT imie,zarobki,dzial, DATE_FORMAT(data_urodzenia,'%Y-%M-%W') as data_urodzenia from pracownicy;";
echo("<h3>ZADANIE 5</h3>");
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
    
$sql = "SELECT imie,DATEDIFF(CURDATE(),data_urodzenia) as dni, DATEDIFF(CURDATE(),data_urodzenia)*24 as godziny, DATEDIFF(CURDATE(),data_urodzenia)*24*60 as minuty FROM pracownicy";
echo("<h3>ZADANIE 6</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>imie</th><th>dni</th><th>godziny</th><th>minuty</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['imie']."</td><td>".$row['dni']."</td><td>".$row['godziny']."</td><td>".$row['minuty']."</td>");
    echo ('</tr>');
}
echo ('</table>');
    
echo("<h3>ZADANIE 7</h3>");
$sql = 'SELECT DATE_FORMAT("2002-04-23", "%j") as urodz';
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Data_urodzenia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['urodz'].'</td>');
        echo('</tr>');
    }

echo('</table>');
    
$sql = "SELECT DATE_FORMAT(data_urodzenia,'%W') as dzien, imie,dzial
FROM
     pracownicy
ORDER BY 
     CASE
          
          WHEN dzien = 'Poniedziałek' THEN 1
          WHEN dzien = 'Wtorek' THEN 2
          WHEN dzien = 'Środa' THEN 3
          WHEN dzien= 'Czwartek' THEN 4
          WHEN dzien = 'Piątek' THEN 5
          WHEN dzien = 'Sobota' THEN 6
          WHEN dzien = 'Niedziela' THEN 7
     END ASC";
echo("<h3>ZADANIE 8</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>imie</th><th>dzien</th><th>dzial</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['imie']."</td><td>".$row['dzien']."</td><td>".$row['dzial']."</td>");
    echo ('</tr>');
}
echo ('</table>');
    
$sql = "SELECT count(DATE_FORMAT(data_urodzenia, '%W')) as lp from pracownicy, organizacja where id_org=dzial and (DATE_FORMAT(data_urodzenia, '%W')='Poniedziałek');";
echo("<h3>ZADANIE 9</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>liczba_pracownikow</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['lp']."</td></td>");
    echo ('</tr>');
}
echo ('</table>');
    
echo("<h3>ZADANIE 10</h3>");
$sql = "SELECT DATE_FORMAT(data_urodzenia,'%W') as dzien, count(date_format(data_urodzenia, '%W')) as Liczba FROM pracownicy GROUP BY dzien ORDER BY CASE

          WHEN dzien = 'Poniedziałek' THEN 1
          WHEN dzien = 'Wtorek' THEN 2
          WHEN dzien = 'Środa' THEN 3
          WHEN dzien = 'Czwartek' THEN 4
          WHEN dzien = 'Piątek' THEN 5
          WHEN dzien = 'Sobota' THEN 6
          WHEN dzien = 'Niedziela' THEN 7
          END ASC";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Dzień</th><th>Liczba</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['dzien'].'</td><td>'.$row['Liczba'].'</td>');
        echo('</tr>');
    }

echo('</table>');
?>
    </div>
    </div>
</body>
</html>

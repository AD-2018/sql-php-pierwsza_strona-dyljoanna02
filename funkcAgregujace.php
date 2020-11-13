<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
     <div>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-dyljoanna02">Github</a><br/><br/>
    <a href="orgPracownicy.php">Pracownicy i Organizacja </a>
    <a href="dataczas.php">Data i Czas </a>
    <a href="funkcAgregujace.php">Funkcje Agregujace</a><br/>
    </div>

<?php
echo("Jestem tu: <br>Funkcje Agregujace<br>");

require_once "connect.php";

$sql = "SELECT sum(zarobki) as suma FROM pracownicy";
echo("<h3>ZADANIE 1</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>suma</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['suma']."</td>");
    echo ('</tr>');
}
echo ('</table>');
     
$sql = "SELECT sum(zarobki) as suma FROM pracownicy WHERE imie LIKE '%a'";
echo("<h3>ZADANIE 2</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>suma</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['suma']."</td>");
    echo ('</tr>');
}
echo ('</table>');
     
$sql = "SELECT sum(zarobki) as suma FROM pracownicy WHERE imie NOT LIKE '%a' AND (dzial=2 OR dzial=3)";
echo("<h3>ZADANIE 3</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>suma</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['suma']."</td>");
    echo ('</tr>');
}
echo ('</table>');
     
$sql = "SELECT avg(zarobki) as srednia FROM pracownicy WHERE imie NOT LIKE '%a'";
echo("<h3>ZADANIE 4</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>srednia</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['srednia']."</td>");
    echo ('</tr>');
}
echo ('</table>');
     
$sql = "SELECT avg(zarobki) as srednia FROM pracownicy WHERE dzial=4";
echo("<h3>ZADANIE 5</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>srednia</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['srednia']."</td>");
    echo ('</tr>');
}
echo ('</table>');
     
$sql = "SELECT avg(zarobki) as srednia FROM pracownicy WHERE imie NOT LIKE '%a' AND (dzial=1 OR dzial=2)";
echo("<h3>ZADANIE 6</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>srednia</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['srednia']."</td>");
    echo ('</tr>');
}
echo ('</table>');
     
$sql = "SELECT count(imie) as liczba_pracownikow FROM pracownicy";
echo("<h3>ZADANIE 7</h3>");
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
    echo ("<td>".$row['liczba_pracownikow']."</td>");
    echo ('</tr>');
}
echo ('</table>');
     
$sql = "SELECT count(imie) as liczba_pracownikow FROM pracownicy WHERE imie LIKE '%a' AND (dzial=1 OR dzial=3)";
echo("<h3>ZADANIE 8</h3>");
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
    echo ("<td>".$row['liczba_pracownikow']."</td>");
    echo ('</tr>');
}
echo ('</table>');
     echo("<h2>GROUP BY</h2>");

$sql = "SELECT nazwa_dzial,sum(zarobki) as suma FROM pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial";
echo("<h3>ZADANIE 1</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>suma</th><th>nazwa_dzial</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['suma']."</td><td>".$row['nazwa_dzial']."</td>");
    echo ('</tr>');
}
echo ('</table>');
     
$sql = "SELECT nazwa_dzial,count(imie) as liczba_pracownikow FROM pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial";
echo("<h3>ZADANIE 2</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>liczba_pracownikow</th><th>nazwa_dzial</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['liczba_pracownikow']."</td><td>".$row['nazwa_dzial']."</td>");
    echo ('</tr>');
}
echo ('</table>');
     
$sql = "SELECT nazwa_dzial,avg(zarobki) as srednia FROM pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial";
echo("<h3>ZADANIE 3</h3>");
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
     
$sql = "SELECT sum(zarobki) as suma, if((imie LIKE '%a'), 'Kobiety', 'Mezczyzni') as plec FROM pracownicy GROUP BY plec";
echo("<h3>ZADANIE 4</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>plec</th><th>suma</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['plec']."</td><td>".$row['suma']."</td>");
    echo ('</tr>');
}
echo ('</table>');
     
$sql = "SELECT avg(zarobki) as srednia, if((imie LIKE '%a'), 'Kobiety', 'Mezczyzni') as plec FROM pracownicy GROUP BY plec";
echo("<h3>ZADANIE 5</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>plec</th><th>srednia</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['plec']."</td><td>".$row['srednia']."</td>");
    echo ('</tr>');
}
echo ('</table>');
     echo("<h2>HAVING</h2>");
     
$sql = "SELECT nazwa_dzial,avg(zarobki) as srednia FROM pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial HAVING srednia<28";
echo("<h3>ZADANIE 1</h3>");
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
     
$sql = "SELECT nazwa_dzial,avg(zarobki) as srednia FROM pracownicy,organizacja WHERE id_org=dzial AND imie NOT LIKE '%a' GROUP BY dzial HAVING srednia>30";
echo("<h3>ZADANIE 2</h3>");
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
     
$sql = "SELECT nazwa_dzial,count(imie) as liczba_pracownikow FROM pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial HAVING liczba_pracownikow>3";
echo("<h3>ZADANIE 3</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>liczba_pracownikow</th><th>nazwa_dzial</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['liczba_pracownikow']."</td><td>".$row['nazwa_dzial']."</td>");
    echo ('</tr>');
}
echo ('</table>');
?>
     </body>
</html>

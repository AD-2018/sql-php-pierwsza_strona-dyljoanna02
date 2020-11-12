<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
     <div>
    <a href="https://dyljoanna.herokuapp.com/">Strona glowna</a><br/>
    <a href="orgPracownicy.php">orgPracownicy.php</a><br/>
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
?>
     </body>
</html>

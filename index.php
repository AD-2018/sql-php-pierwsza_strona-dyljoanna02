<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-dyljoanna02">Github</a>
<?php
echo("<h1>Jestem Joanna Dyl nr 4</h1>");

require_once "connect.php";

$sql = "SELECT * FROM pracownicy";
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

?>

</body>
</html>

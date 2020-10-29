<?php
echo("<h1>Hello World</h1>");
echo("<h1>Jestem Joanna Dyl</h1>");

$servername = "mysql-joannadyl.alwaysdata.net";
$username = "joannadyl";
$password = "lollol92589@";
$dbname = "joannadyl_sql";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM pracownicy";
echo("<h3>ZADANIE 1</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>imie</th><th>zarobki</th><th>data urodzenia</th><th>dzial</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td><td>".$row['dzial']."</td>");
    echo ('</tr>');
}
echo ('</table>');

?>

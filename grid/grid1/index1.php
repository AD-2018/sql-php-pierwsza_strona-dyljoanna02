<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>CSS Grid</title>
    <link rel="stylesheet" href="style1.css" />
  </head>
  <body>
    <div class="menu blue">
        <a class="link" href="../grid1/index1.html">GRID1</a>
        <a class="link" href="../grid2/index2.html">GRID2</a>
        <a class="link" href="../grid3/index3.html">GRID3</a>
        <a class="link" href="../grid4/index4.html">GRID4</a>
        <a class="link" href="../grid5/index5.html">GRID5</a>
        <a class="link" href="../grid6/index6.html">GRID6</a>
        <a class="link" href="../grid7/index7.html">GRID7</a>
        <a class="link" href="../grid8/index8.html">GRID8</a>
        <a class="link" href="../grid9/index9.html">GRID9</a>
        <a class="link" href="../grid10/index10.html">GRID10</a>
        <a class="link" href="../grid11/index11.html">GRID11</a>
        <a class="link" href="../grid12/index12.html">GRID12</a>
    </div>
    <div class="container">
      <?php
      require_once("../../connect.php")
      echo("<header>");
      $sql = "SELECT * FROM pracownik";
      echo("<h3>PRACOWNICY</h3>");
      echo("<li>".$sql."<br><br>");
      
      $result = mysqli_query($conn, $sql);
           if ( $result) {
              echo "<li>ok";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
      
      echo('<table border="1" class="tabelka_moja">');
      echo ("<tr><th>id</th><th>pracownik</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['id']."</td><td>".$row['pracownik']."</td>");
          echo ('</tr>');
      }
      echo ('</table>');
      echo("</header>");
      echo("<nav>");
      $sql = "SELECT * FROM projekt";
      echo("<h3>PROJEKTY</h3>");
      echo("<li>".$sql."<br><br>");
      
      $result = mysqli_query($conn, $sql);
           if ( $result) {
              echo "<li>ok";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
      
      echo('<table border="1" class="tabelka_moja">');
      echo ("<tr><th>id</th><th>projekt</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['id']."</td><td>".$row['projekt']."</td>");
          echo ('</tr>');
      }
      echo ('</table>');
      echo("</nav>");
      echo("<main>");
        3
      echo("</main>");
      echo("<aside>");
        5
      echo("</aside>");
      echo("<footer>")
      $sql = "SELECT id, pracownik, projekt FROM pracownik, projekt, pracownik_projekt WHERE pracownik.id = pracownik_projekt.id_pracownik AND projekt.id = pracownik_projekt.id_projekt";
      echo("<h3>PRACOWNICY</h3>");
      echo("<li>".$sql."<br><br>");
      
      $result = mysqli_query($conn, $sql);
           if ( $result) {
              echo "<li>ok";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
      
      echo('<table border="1" class="tabelka_moja">');
      echo ("<tr><th>id</th><th>pracownik</th><th>projekt</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['id']."</td><td>".$row['pracownik']."</td><td>".$row['projekt']."</td>");
          echo ('</tr>');
      }
      echo ('</table>');
      echo("</footer>");
      ?>
    </div>
  </body>
</html>

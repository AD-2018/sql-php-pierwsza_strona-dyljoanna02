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
    <a class="link" href="../grid1/index1.php">GRID1</a>
        <a class="link" href="../grid2/index2.php">GRID2</a>
        <a class="link" href="../grid3/index3.php">GRID3</a>
        <a class="link" href="../grid4/index4.php">GRID4</a>
        <a class="link" href="../grid5/index5.php">GRID5</a>
        <a class="link" href="../grid6/index6.php">GRID6</a>
        <a class="link" href="../grid7/index7.php">GRID7</a>
        <a class="link" href="../grid8/index8.php">GRID8</a>
        <a class="link" href="../grid9/index9.php">GRID9</a>
        <a class="link" href="../grid10/index10.php">GRID10</a>
        <a class="link" href="../grid11/index11.php">GRID11</a>
        <a class="link" href="../grid12/index12.php">GRID12</a>
    </div>
    <div class="container">
      <?php
      require_once("../../connect.php");
      echo("<div class='header'>");
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
      echo("</div>");

      echo("<div class='nav'>");
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
      echo("</div>");
      echo("<div class='main'>");
        3
      echo("</div>");
      echo("<div class='aside'>");
        5
      echo("</div>");
      echo("<div class='footer'>")
      4
      echo("</div>");
      ?>
    </div>
  </body>
</html>
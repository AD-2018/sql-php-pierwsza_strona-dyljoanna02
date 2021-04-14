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
    <div class="container">
    <div class="menu blue">
    <a class="link" href="https://dyljoanna.herokuapp.com">Strona Glowna </a>
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
      <div class="ban">
        <?php
        require_once("../../connect.php");
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
      echo ("<tr><th>ID</th><th>PRACOWNIK</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['id_prac']."</td><td>".$row['pracownik']."</td>");
          echo ('</tr>');
      }
      echo ('</table>');
      ?>
      </div>

      <div class="nawi">
        <?php
        require_once("../../connect.php");
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
      echo ("<tr><th>ID</th><th>PROJEKT</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['id_proj']."</td><td>".$row['projekt']."</td>");
          echo ('</tr>');
      }
      echo ('</table>');
      ?>
      </div>
      <div class="glow">
        3
      </div>
      <div class="pob">
        5
      </div>
      <div class="stop">
        <?php
        require_once("../../connect.php");
      $sql = "SELECT pracownik, projekt FROM pracownik, projekt, pracownik_projekt WHERE pracownik.id_prac = pracownik_projekt.id_pracownik AND projekt.id_proj = pracownik_projekt.id_projekt";
      echo("<h3>PRACOWNICY I PROJEKTY</h3>");
      echo("<li>".$sql."<br><br>");
      
      $result = mysqli_query($conn, $sql);
           if ( $result) {
              echo "<li>ok";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
      
      echo('<table border="1" class="tabelka_moja">');
      echo ("<tr><th>PRACOWNIK</th><th>PROJEKT</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['pracownik']."</td><td>".$row['projekt']."</td>");
          echo ('</tr>');
      }
      echo ('</table>');
      ?>
      </div>
      
    </div>
  </body>
</html>

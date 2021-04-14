<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>CSS Grid</title>
    <link rel="stylesheet" href="style2.css" />
  </head>
  <body>
    <div class="container">
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
    <div class="ban">
        <?php
        require_once("../../connect.php");
      $sql = "SELECT * FROM prawnik";
      echo("<h3>PRAWNICY</h3>");
      echo("<li>".$sql."<br><br>");
      
      $result = mysqli_query($conn, $sql);
           if ( $result) {
              echo "<li>ok";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
      
      echo('<table border="1" class="tabelka_moja">');
      echo ("<tr><th>ID</th><th>PRAWNIK</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['id_praw']."</td><td>".$row['prawnik']."</td>");
          echo ('</tr>');
      }
      echo ('</table>');
      ?>
      <div class="nawi">
        <?php
        require_once("../../connect.php");
      $sql = "SELECT * FROM sprawa";
      echo("<h3>SPRAWY</h3>");
      echo("<li>".$sql."<br><br>");
      
      $result = mysqli_query($conn, $sql);
           if ( $result) {
              echo "<li>ok";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
      
      echo('<table border="1" class="tabelka_moja">');
      echo ("<tr><th>ID</th><th>SPRAWA</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['id_spraw']."</td><td>".$row['sprawa']."</td>");
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
      $sql = "SELECT prawnik, sprawa FROM prawnik, sprawa, prawnik_sprawa WHERE prawnik.id_praw = prawnik_sprawa.id_prawnik AND sprawa.id_spraw = prawnik_sprawa.id_sprawa";
      echo("<h3>PRAWNICY I SPRAWY</h3>");
      echo("<li>".$sql."<br><br>");
      
      $result = mysqli_query($conn, $sql);
           if ( $result) {
              echo "<li>ok";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
      
      echo('<table border="1" class="tabelka_moja">');
      echo ("<tr><th>PRAWNIK</th><th>SPRAWA</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['prawnik']."</td><td>".$row['sprawa']."</td>");
          echo ('</tr>');
      }
      echo ('</table>');
      ?>
      </div>
      <div class="dod">
        7
    </div>
    </div>
  </body>
</html>
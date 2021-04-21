<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>CSS Grid</title>
    <link rel="stylesheet" href="style4.css" />
  </head>
  <body>
    <div class="container">
    <div class="menu blue">
    <?php include_once("../gridallmenu.php"); ?>
    </div>
      <div class="ban">
      <?php
        require_once("../../connect.php");
      $sql = "SELECT * FROM osoba";
      echo("<h3>OSOBY</h3>");
      echo("<li>".$sql."<br><br>");
      
      $result = mysqli_query($conn, $sql);
           if ( $result) {
              echo "<li>ok";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
      
      echo('<table border="1" class="tabelka_moja">');
      echo ("<tr><th>ID</th><th>OSOBA</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['id_os']."</td><td>".$row['osoba']."</td>");
          echo ('</tr>');
      }
      echo ('</table>');
      ?>
      </div>
      <div class="nawi">
        2
      </div>
      <div class="glow">
      <?php
        require_once("../../connect.php");
      $sql = "SELECT * FROM rola";
      echo("<h3>ROLE</h3>");
      echo("<li>".$sql."<br><br>");
      
      $result = mysqli_query($conn, $sql);
           if ( $result) {
              echo "<li>ok";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
      
      echo('<table border="1" class="tabelka_moja">');
      echo ("<tr><th>ID</th><th>ROLA</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['id_rol']."</td><td>".$row['rola']."</td>");
          echo ('</tr>');
      }
      echo ('</table>');
      ?>
      </div>
      <div class="pob">
        5
      </div>
      <div class="stop">
      <?php
        require_once("../../connect.php");
      $sql = "SELECT osoba, rola FROM osoba, rola, osoba_rola WHERE osoba.id_os = osoba_rola.id_osoba AND rola.id_rol = osoba_rola.id_rola";
      echo("<h3>OSOBY I ROLE</h3>");
      echo("<li>".$sql."<br><br>");
      
      $result = mysqli_query($conn, $sql);
           if ( $result) {
              echo "<li>ok";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
      
      echo('<table border="1" class="tabelka_moja">');
      echo ("<tr><th>OSOBA</th><th>ROLA</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['osoba']."</td><td>".$row['rola']."</td>");
          echo ('</tr>');
      }
      echo ('</table>');
      ?>
      </div>
    </div>
  </body>
</html>
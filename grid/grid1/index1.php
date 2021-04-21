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
    <?php include_once("../gridallmenu.php"); ?>
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
          echo ("<tr><th>ID</th><th>PRACOWNIK</th><th>USUWANIE</th></tr>");
          while($row = mysqli_fetch_assoc($result)) {
              echo ('<tr>');
             echo('<td>'.$row['id_prac'].'</td>'.'<td>'.$row['pracownik'].'</td>'.
          
                   '<td>
            <form action="delprac.php" method="POST">
                  <input type="hidden" name="id_prac" value="'.$row['id_prac'].'">
                  <input type="submit" value="USUŃ">
                </form>
            </td>');
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
          echo ("<tr><th>ID</th><th>PROJEKT</th><th>USUWANIE</th></tr>");
          while($row = mysqli_fetch_assoc($result)) {
              echo ('<tr>');
             echo('<td>'.$row['id_proj'].'</td>'.'<td>'.$row['projekt'].'</td>'.
          
                   '<td>
            <form action="delproj.php" method="POST">
                  <input type="hidden" name="id_proj" value="'.$row['id_proj'].'">
                  <input type="submit" value="USUŃ">
                </form>
            </td>');
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
      echo ("<tr><th>PRACOWNIK</th><th>PROJEKT</th><th>USUWANIE I DODAWANIE</th></tr>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['pracownik']."</td><td>".$row['projekt']."</td>"."<td>
          <form action='delpp.php' method='POST'>
                <input type='hidden' name='pracownik' value='".$row['pracownik']."'>
                <input type='hidden' name='projekt' value='".$row['projekt']."'>
                <input type='submit' value='USUŃ'>
              </form>
          </td>");
          echo ('</tr>');
      }
          echo ('<tr>');
          echo ('<td> 
          <form action="dodprac.php" method="POST">
          <input type="text" name="pracownik"></td>
                  <td>
          <form action="dodproj.php" method="POST">
          <input type="text" name="projekt"></td>
                  <td>
          <input type="submit" value="DODAJ">
        </form>
        </td>');
          echo ('</tr>');
      echo ('</table>');
      ?>
      </div>
      
    </div>
  </body>
</html>

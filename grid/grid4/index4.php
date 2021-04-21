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
      echo ("<tr><th>ID</th><th>OSOBA</th><th>USUWANIE</th></tr>");
      while($row = mysqli_fetch_assoc($result)) {
        echo ('<tr>');
       echo('<td>'.$row['id'].'</td>'.'<td>'.$row['osoba'].'</td>'.
    
             '<td>
      <form action="delos.php" method="POST">
            <input type="hidden" name="id" value="'.$row['id'].'">
            <input type="submit" value="USUŃ">
          </form>
      </td>');
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
      echo ("<tr><th>ID</th><th>ROLA</th><th>USUWANIE</th></tr>");
      while($row = mysqli_fetch_assoc($result)) {
        echo ('<tr>');
       echo('<td>'.$row['id'].'</td>'.'<td>'.$row['rola'].'</td>'.
    
             '<td>
      <form action="delrol.php" method="POST">
            <input type="hidden" name="id" value="'.$row['id'].'">
            <input type="submit" value="USUŃ">
          </form>
      </td>');
        echo ('</tr>');
    }
    echo ('</table>');
      ?>
      </div>
      <div class="pob">
      <h3>Dodawanie Osoby</h3>
	<form action="dodos.php" method="POST">
		<label>Osoba: </label><input type="text" name="osoba"></br>
		<input type="submit" value="Dodaj Osobę">
	</form></br>
  <h3>Dodawanie Roli</h3>
	<form action="dodrol.php" method="POST">
		<label>Rola: </label><input type="text" name="rola"></br>
		<input type="submit" value="Dodaj Rolę">
	</form></br>
  <h3>Dodawanie Połączenia</h3>
	<form action="dodpp.php" method="POST">
		<label>ID Osoba: </label><input type="text" name="os"></br>
    <label>ID Rola: </label><input type="text" name="rol"></br>
		<input type="submit" value="Dodaj Połączenie">
	</form>
      </div>
      <div class="stop">
      <?php
        require_once("../../connect.php");
      $sql = "SELECT id_os, osoba, rola FROM osoba, rola, osoba_rola WHERE osoba.id = osoba_rola.id_osoba AND rola.id = osoba_rola.id_rola";
      echo("<h3>OSOBY I ROLE</h3>");
      echo("<li>".$sql."<br><br>");
      
      $result = mysqli_query($conn, $sql);
           if ( $result) {
              echo "<li>ok";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
      
      echo('<table border="1" class="tabelka_moja">');
      echo ("<tr><th>ID</th><th>OSOBA</th><th>ROLA</th><th>USUWANIE</th></tr>");
      while($row = mysqli_fetch_assoc($result)) {
        echo ('<tr>');
       echo('<td>'.$row['id_os'].'</td>'.'<td>'.$row['osoba'].'</td><td>'.$row['rola'].''.
    
             '<td>
      <form action="delpp.php" method="POST">
            <input type="hidden" name="id" value="'.$row['id'].'">
            <input type="submit" value="USUŃ">
          </form>
      </td>');
        echo ('</tr>');
    }
    echo ('</table>');
      ?>
      </div>
    </div>
  </body>
</html>
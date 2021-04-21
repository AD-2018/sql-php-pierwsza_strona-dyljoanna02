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
    <?php include_once("../gridallmenu.php"); ?>
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
       echo('<td>'.$row['id'].'</td>'.'<td>'.$row['prawnik'].'</td>'.
    
             '<td>
      <form action="delpraw.php" method="POST">
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
       echo('<td>'.$row['id'].'</td>'.'<td>'.$row['sprawa'].'</td>'.
    
             '<td>
      <form action="delspr.php" method="POST">
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
        5
      </div>
      <div class="stop">
        <?php
        require_once("../../connect.php");
      $sql = "SELECT id_sad, prawnik, sprawa FROM prawnik, sprawa, prawnik_sprawa WHERE prawnik.id = prawnik_sprawa.id_prawnik AND sprawa.id = prawnik_sprawa.id_sprawa";
      echo("<h3>PRAWNICY I SPRAWY</h3>");
      echo("<li>".$sql."<br><br>");
      
      $result = mysqli_query($conn, $sql);
           if ( $result) {
              echo "<li>ok";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
      
      echo('<table border="1" class="tabelka_moja">');
      echo ("<tr><th>ID</th><th>PRAWNIK</th><th>SPRAWA</th><th>USUWANIE</th></tr>");
      while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_sad'].'</td><td>'.$row['prawnik'].'</td><td>'.$row['sprawa'].'<td>
        <form action="delpp.php" method="POST">
         <input type="text" name="id" value="'.$row['id_sad'].'" hidden>
          <input type="submit" value="USUŃ">
   </form>
   </td>');
        echo('</tr>');
    }

echo('</table>');
      ?>
      </div>
      <div class="dod">
      <h3>Dodawanie Prawnika</h3>
	<form action="dodpraw.php" method="POST">
		<label>Prawnik: </label><input type="text" name="prawnik"></br>
		<input type="submit" value="Dodaj Prawnika">
	</form></br>
  <h3>Dodawanie Sprawy</h3>
	<form action="dodspr.php" method="POST">
		<label>Projekt: </label><input type="text" name="sprawa"></br>
		<input type="submit" value="Dodaj Sprawę">
	</form></br>
  <h3>Dodawanie Połączenia</h3>
	<form action="dodpp.php" method="POST">
		<label>ID Prawnik: </label><input type="text" name="praw"></br>
    <label>ID Sprawa: </label><input type="text" name="spr"></br>
		<input type="submit" value="Dodaj Połączenie">
	</form>
    </div>
    </div>
  </body>
</html>
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
             echo('<td>'.$row['id'].'</td>'.'<td>'.$row['pracownik'].'</td>'.
          
                   '<td>
            <form action="delprac.php" method="POST">
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
             echo('<td>'.$row['id'].'</td>'.'<td>'.$row['projekt'].'</td>'.
          
                   '<td>
            <form action="delproj.php" method="POST">
                  <input type="hidden" name="id" value="'.$row['id'].'">
                  <input type="submit" value="USUŃ">
                </form>
            </td>');
              echo ('</tr>');
          }
          echo ('</table>');
      ?>
      </div>
      <div class="glow">
      <h3>Dodawanie Pracownika</h3>
	<form action="dodprac.php" method="POST">
		<label>Pracownik: </label><input type="text" name="pracownik"></br>
		<input type="submit" value="Dodaj Pracownika">
	</form>
  <h3>Dodawanie Projektu</h3>
	<form action="dodproj.php" method="POST">
		<label>Projekt: </label><input type="text" name="projekt"></br>
		<input type="submit" value="Dodaj Autora">
	</form>
  <h3>Dodawanie Połączenia</h3>
	<form action="dodpp.php" method="POST">
		<label>ID Pracownik: </label><input type="text" name="prac"></br>
    <label>ID Projekt: </label><input type="text" name="proj"></br>
		<input type="submit" value="Dodaj Połączenie">
	</form>
      </div>
      <div class="pob">
        5
      </div>
      <div class="stop">
        <?php
        require_once("../../connect.php");
        $sql = "SELECT id_proj, pracownik, projekt FROM pracownik, projekt, pracownik_projekt WHERE pracownik.id = pracownik_projekt.id_pracownik AND projekt.id = pracownik_projekt.id_projekt";
        echo($sql);
        
        $result = mysqli_query($conn, $sql);
        if ( $result) {
                echo "<li>ok";
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        
        echo('<table border="1">');
            echo('<th>ID</th><th>PRACOWNIK</th><th>PROJEKT</th><th>USUWANIE</th>');
        
            while($row=mysqli_fetch_assoc($result)){
                echo('<tr>');
                echo('<td>'.$row['id_proj'].'</td><td>'.$row['pracownik'].'</td><td>'.$row['projekt'].'<td>
                <form action="delpp.php" method="POST">
                 <input type="text" name="id" value="'.$row['id_proj'].'" hidden>
                  <input type="submit" value="Usuń">
           </form>
           </td>');
                echo('</tr>');
            }
        
        echo('</table>');
      ?>
      </div>
      
    </div>
  </body>
</html>

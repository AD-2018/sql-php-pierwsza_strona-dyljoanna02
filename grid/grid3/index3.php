<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>CSS Grid</title>
    <link rel="stylesheet" href="style3.css" />
  </head>
  <body>
    <div class="container">
    <div class="menu blue">
    <?php include_once("../gridallmenu.php"); ?>
    </div>
      <div class="ban">
      <?php
        require_once("../../connect.php");
      $sql = "SELECT * FROM producent";
      echo("<h3>PRODUCENCI</h3>");
      echo("<li>".$sql."<br><br>");
      
      $result = mysqli_query($conn, $sql);
           if ( $result) {
              echo "<li>ok";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
      
      echo('<table border="1" class="tabelka_moja">');
      echo ("<tr><th>ID</th><th>PRODUCENT</th><th>USUWANIE</th></tr>");
      while($row = mysqli_fetch_assoc($result)) {
        echo ('<tr>');
       echo('<td>'.$row['id'].'</td>'.'<td>'.$row['producent'].'</td>'.
    
             '<td>
      <form action="delprod.php" method="POST">
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
      $sql = "SELECT * FROM produkt";
      echo("<h3>PRODUKTY</h3>");
      echo("<li>".$sql."<br><br>");
      
      $result = mysqli_query($conn, $sql);
           if ( $result) {
              echo "<li>ok";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
      
      echo('<table border="1" class="tabelka_moja">');
      echo ("<tr><th>ID</th><th>PRODUKT</th><th>USUWANIE</th></tr>");
      while($row = mysqli_fetch_assoc($result)) {
        echo ('<tr>');
       echo('<td>'.$row['id'].'</td>'.'<td>'.$row['produkt'].'</td>'.
    
             '<td>
      <form action="delprodukt.php" method="POST">
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
      <?php
        require_once("../../connect.php");
      $sql = "SELECT id_prod, producent, produkt FROM producent, produkt, producent_produkt WHERE producent.id = producent_produkt.id_producent AND produkt.id = producent_produkt.id_produkt";
      echo("<h3>PRODUCENCI I PRODUKTY</h3>");
      echo("<li>".$sql."<br><br>");
      
      $result = mysqli_query($conn, $sql);
           if ( $result) {
              echo "<li>ok";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
      
      echo('<table border="1" class="tabelka_moja">');
      echo ("<tr><th>ID</th><th>PRODUCENT</th><th>PRODUKT</th><th>USUWANIE</th></tr>");
      while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_prod'].'</td><td>'.$row['producent'].'</td><td>'.$row['produkt'].'<td>
        <form action="delpp.php" method="POST">
         <input type="text" name="id" value="'.$row['id_prod'].'" hidden>
          <input type="submit" value="USUŃ">
   </form>
   </td>');
        echo('</tr>');
    }

echo('</table>');
      ?>
      </div>
      <div class="stop">
      <h3>Dodawanie Poducenta</h3>
	<form action="dodprod.php" method="POST">
		<label>Producent: </label><input type="text" name="producent"></br>
		<input type="submit" value="Dodaj Producenta">
	</form></br>
  <h3>Dodawanie Produktu</h3>
	<form action="dodprodukt.php" method="POST">
		<label>Produkt: </label><input type="text" name="produkt"></br>
		<input type="submit" value="Dodaj Produkt">
	</form></br>
  <h3>Dodawanie Połączenia</h3>
	<form action="dodpp.php" method="POST">
		<label>ID Producent: </label><input type="text" name="prod"></br>
    <label>ID Produkt: </label><input type="text" name="produkt"></br>
		<input type="submit" value="Dodaj Połączenie">
	</form>
      </div>
    </div>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontaktiraj nas</title>
  <link rel="stylesheet" href="style.css">
  <style>
    .imput{
      width: 300px;
    }

    .grid {
      display: grid;
      grid-template-columns: 300px 300px 300px;
      grid-gap: 20px;
      align-items: stretch;
      justify-items: stretch;
      padding-left: 20%;

    }

    .grid img {
      border: 1px solid rgb(40, 81, 176);
      box-shadow: 2px 2px 6px 0px rgba(0, 0, 0, 0.3);
      max-width: 100%;
      align-items: center;
    }
    #formBox{
      border: 1px solid black;
      width: min-content;
      margin-left: 41%;
      
    }
    #containerDiv{
      margin: 5%;
    }
  </style>

  <nav class="navbar">
    <ul>
      <li><a href="mainPage.php">GLOWZONE</a></li>
      <li><a href="mainPage.php">O NAS</a></li>
      <li><a href="mainPage.php">ZAPOSLENI</a></li>
      <li><a href="mainPage.php">IDEJA</a></li>
      <li><a href="mainPage.php">MATERIALI</a></li>
      <li><a href="mainPage.php">PRODUKT</a></li>
    </ul>
  </nav>
</head>

<h1>GALERIJA</h1>
  <?php
  
  $conn = mysqli_connect("localhost", "root", "", "pb");
  $sql = "SELECT image_link FROM images";                 // pb z imenami slik
  $result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));
  $stStolpcev = mysqli_num_rows($result);
  echo "<main class='grid'>";

  $x = 1;
  do {
    $row = mysqli_fetch_assoc($result);
    echo "
      <img src='" . $row['image_link'] . "' alt='Sample photo'>";            //row--ime slike, v primeru da slike ni, napišemo sample photo
      $x++;
  } while ($x <= $stStolpcev);
  
  echo "</main>"

  ?>  

  <form action="newImage.php" method="POST" id="formBox">
    <div id="containerDiv">
    <table>
      <tr>
        <td><label for="imageLink"><strong>Image name and only jpg</strong>, Example: Example.jpg:</label></td> 
      </tr>
      <tr>
      <td><input class="imput" type="text" name="imageLink" id="imageLink" placeholder="Tipe in  'Example.jpg'  for Example image" value=""><br></td>
      </tr>
    </table>
    <input type="submit" value="Potrdi">
    </div>
  </form>


<body>
  <footer id="footer">

    <p>©2022 GloweZone d.d | Website by Megi Repec</p>
  </footer>

</body>

</html>
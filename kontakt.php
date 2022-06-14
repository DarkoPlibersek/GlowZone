<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontaktiraj nas</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .comentContainer {
            width: 60%;
            margin-left: 20%;
            margin-right: 20%;
        }

        .comContainer {
            background-color: white;
            border: solid white 10px;
            color: black;
            font-size: 30px;
            margin: 10px;
            border-radius: 20px;
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

<body>

    <section id="form">
        <h1 class="headings">VSTOPIMO V STIK</h1>
        <form action="newComment.php" method="POST" class="form">
            <input type="text" name="ime" class="input" placeholder="vpiši svoje ime"> <!-- name je ime spremnljivke (v tem primeru je to ime) ki jo bomo poslali v newComment.php --> 
            <input type="text" name="priimek" class="input" placeholder="vpiši svoje priimek">
            <input type="text" name="coment" class="input" placeholder="vpiši svoj komentar">
            <input type="submit" value="POŠLJI" id="poslji"> 
        </form>                         
       
        <main class="comentContainer">
            <?php


            $conn = mysqli_connect("localhost", "root", "", "pb");

            if (isset($_GET['id_coment'])) {
                $id = $_GET['id_coment'];
                $delete = mysqli_query($conn, "DELETE FROM coments WHERE id_coment = '$id'");
                if ($delete){
                    header("location: kontakt.php");
                    die();
                }
            }

            $sql = "SELECT * FROM coments";                          //izbere vse iz tabele coments (imena stolpcev)
            $result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));   //pobere podatke iz povezave in uporabi stevk select, error- v primeru da se povezava med localhostu in select stavkom ne izvede
            $stVrstic = mysqli_num_rows($result);   // preberemo st. vrstic  v results
            
            $x = 1;
            if ($stVrstic){
                do {                                            //loop, ki se izvaja dokler je x < št. vrstic
                    $row = mysqli_fetch_assoc($result);         //v spremenjljivko row shranimo vse podatke (vse podatke) iz results - to naredi mysqli_fetch_assoc
                    echo "
                    <main class='comContainer'>
                    <div>Ime: " . $row['ime'] . "</div>     ";     // prebere prvo neprebranih podatkov
                    echo "
                    <div>Priimek: " . $row['priimek'] . "</div>
                    <div><br>" . $row['coment'] . "</div>
                    <div><a href='?id_coment=" .$row['id_coment']. "'>DELETE</a></div>
    
                    </main>"; 
                    $x++;
                } while ($x <= $stVrstic);
            } else {
                echo "<main class='comContainer'>";
                echo "<div> NO COMENT'S YET SO PLS COMENT ❤ </div>";
                echo "</main>";
            }
            

            ?>
        </main>
    </section>
    <div><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=ser%C5%A1%20maribor&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net">fmovies</a><br>
        <style>
            .mapouter {
                position: relative;
                text-align: right;
                height: 500px;
                width: 600px;
            }
        </style><a href="https://www.embedgooglemap.net"></a>
        <style>
            .gmap_canvas {
                overflow: hidden;
                background: none !important;
                height: 400px;
                width: 400px;
            }
        </style>
    </div>
    </div>
    <footer id="footer">


        <p>©2022 GloweZone d.d | Website by Megi Repec</p>

    </footer>

</body>

</html>
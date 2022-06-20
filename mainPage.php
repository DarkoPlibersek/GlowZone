<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            font-weight: bold;
        }

        .heading {
            font-family: 'Times New Roman', Times, serif;
        }

        .box {
            font-family: 'Times New Roman', Times, serif;
            font-weight: lighter;
        }

        .cene {
            display: flex;
            flex-direction: row;
        }

        .cene table {
            height: min-content;
        }

        .popup {
            display: none;
            bottom: 0;
            left: 15px;
            border: 3px solid #f1f1f1;
            border-radius: 5px;
            z-index: 50;
            margin-left: 20px;
        }

        .popup form {
            margin: 10px;
        }

        .popup2 {
            display: none;
            bottom: 0;
            left: 15px;
            border: 3px solid #f1f1f1;
            border-radius: 5px;
            z-index: 50;
            margin-left: 20px;
        }

        .popup2 form {
            margin: 10px;
        }

        .close {
            padding: 2px;
            font-weight: bold;
            display: flex;
            margin-left: auto;
            order: 2;
            background-color: red;
            color: white;

        }
    </style>
</head>

<body>
    <nav class="navbar">
        <ul>
            <li><a href="#glowzone">GLOWZONE</a></li>
            <li><a href="#about">O NAS</a></li>
            <li><a href="#izdelek">ZAPOSLENI</a></li>
            <li><a href="#zaposleni">IDEJA</a></li>
            <li><a href="#video">PROMOCIJSKI VIDEO</a></li>
            <li><a href="#materiali">MATERIALI</a></li>
            <li><a href="#materiali">CENIK</a></li>
        </ul>
    </nav>

    <section id="home">
        <div class="main">
            <h1 class="heading">GLOWZONE</h1>
            <form method="get" action="kontakt.php">
                <button class="btn">KOMENTARJI</button>
            </form>
            <form method="get" action="galerija.php">
                <button class="btn">GALERIJA</button>
            </form>

        </div>
    </section>

    <section id="about">
        <div id="pic">

            <img src="elminluc.JPG" alt="elmin z lucko">
            <div id="intro">
                <h1 class="headings">IDEJA</h1>
                <p>Navdih za izdelek smo pridobili iz želje po združitvi odpadnega materiala s tehnologijo.
                    V današnjih časih veliko zgoščenk (CD-jev) pristane na odlagališčih zaradi neuporabe.</p>

                <p> Ker je vsem članom podjetniškega tima skupno zanimanje za tehnologijo, smo si zamislili izdelek, ki bo uporaben, a tudi tehnološko napreden.</p>
            </div>
        </div>
    </section>

    <section id="izdelek">
        <h1 class="headings">IZDELEK</h1>
        <div class="gallery">
            <img src="luc-ravna.jpg" alt="lucka">
            <img style="width: 400px" src="Slika1.jpg" alt="lucka">
            <img src="luc.JPG" alt="lucka">

        </div>
    </section>

    <section id="zaposleni">
        <h1 class="headings">ZAPOSLENI</h1>
        <div class="row">
            <div class="box">
                <h1>MINEA PEER</h1>
                <img src="minea.JPG" alt="minea" width="200" height="170">
                <h1 class="headings">Direktorica</h1>
                <br>
                <p>njena naloga je, da vodi podjetje, organizira urnik dela, motivira zaposlene in skrbi za dobre odnose v timu. Ustvarila je logotip in slogan podjetja.</p>
            </div>
            <div class="box">
                <h1>AJDIN KUNOŠIĆ</h1>
                <img src="ajdin.JPG" alt="ajdin" width="200" height="170">
                <h1 class="headings">Finančnik</h1>
                <br>
                <p>nadzoruje finančno stanje v podjetju, skrbi za prodajo delnic in spremlja prihodke ter odhodke. Prav tako preverja skladnosti dokumentov, kot so različni računi, pogodbe in naročila.</p>
            </div>
            <div class="box">
                <h1>MEGI REPEC</h1>
                <img src="megi.JPG" alt="megi" width="200" height="170">

                <h1>Vodja marketinga in administracije</h1>
                <br>
                <p>analizira konkurenčna podjetja in ustvari strategijo, ki pripomomre k boljši prodaji. Opravlja tudi nalogo spletnega oblikovalca: oblikovala in izdelala je spletno stran, upravlja socialna omrežja, pripravila je tudi načrt izdelave prototipa.</p>
            </div>
            <div class="box">
                <h1>ELMIN JUKIĆ</h1>
                <img src="elmin.JPG" alt="elmin" width="200" height="170">
                <h1>Vodja </h1>
                <br>
                <p>njegova naloga je skrb za nabavo materialov in vse vmesne postopke, potrebne za predelavo le-teh v končni produkt. Zadolžen je tudi za montažo videa: produkt je posnel iz več kadrov, izdelek fotografiral in iz pridobljenega grafičnega materiala izdelal promocijski film</p>
            </div>
        </div>

    </section>
    <section id="video">
        <h1 class="headings">PROMOCIJSKI VIDEO</h1>
        <iframe width="800" height="450" src="https://youtube.com/embed/75L4N6uXMp8">
        </iframe>
        </div>
    </section>


    <section id="materiali">
        <div class="row">
            <div class="column" style="background-color:#aaa;">
                <h1 class="headings">MATERIALI</h1>
                <div class="list">

                    <dl>
                        <li>Podstavek</li>
                        <dd>- škatlica za shranjevanje zgoščenk</dd>
                        <li>Svetilka</li>
                        <dd>- LED svetilka</dd>
                        <li>Kabel</li>
                        <li>Navojna palica</li>
                        <li>Matice</li>
                        <li>Zgoščenke</li>
                    </dl>
                </div>
            </div>
            <div class="column" style="background-color:#bbb;">
                <h2>CENIK</h2>
                <div id='container'>

                    </form>
                </div>
                <div id="cenik">

                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "pb");
                    if (isset($_GET['ID'])) {
                        $id = $_GET['ID'];
                        $delete = mysqli_query($conn, "DELETE FROM cenik WHERE ID = $id");
                    }
                    $sql = "SELECT * FROM cenik";
                    $info = mysqli_query($conn, $sql);
                    $stVrstic = mysqli_num_rows($info);


                    echo "<div class='cene'><table border='1'>";
                    echo "
                        <hr>
                            <th colspan='3'>CENIK</th>
                        </hr>
                        <tr>
                            <td>VELIKOST</td>
                            <td>BARVA PODSTAVKA</td> 
                            <td>CENA</td>
                        </tr>";


                    $x = 1;
                    if ($stVrstic) {
                        do {
                            $row = mysqli_fetch_assoc($info);

                            echo "
                            <tr>
                                <td>" . $row['Velikost'] . "</td>
                                <td>" . $row['Barva'] . "</td>
                                <td>" . $row['Cena'] . "</td>
                            </tr>
                            <tr>
                                <td><button><a href='?ID=" . $row['ID'] . "' style='text-decoration:none;'>DELETE</a></button></td>
                                <td></td>
                                <td><button type='button' onclick='openForm(".$row['ID'].")' style='height: min-content;' value='" . $row['ID'] . "' name='ID'>Update</button></td>
                            </tr>";
                            $x++;
                        } while ($x <= $stVrstic);


                        echo '</table>';
                    } else {
                        echo "ERROR";
                    }
                    ?>
                    <div>
                    <button type='button' onclick='openForm2()' style='height: min-content;'>ADD</button>
                    </div>
                    <div class='popup' id='myForm'>
                        <button type='button' class='close' onclick='closeForm()'>X</button>
                        <form action='updateCene.php' method='POST'>
                            <label for='velikost'>Velikost:</label><br>
                            <input type='text' name='velikost' placeholder='Velikost'><br>
                            <label for='barva'>Barva:</label><br>
                            <input type='text' name='barva' placeholder='Barva'><br>
                            <label for='cena'>Cena: </label><br>
                            <input type='text' name='cena' placeholder='Cena'><br>
                            <input type='hidden' name='ID' placeholder='Cena' id="input" value=""><br>
                            <input type='hidden' name='methodes' value="1"><br>

                            <input type='submit' value='SUBMIT'>
                        </form>
                    </div>
                    <div class='popup2' id='myForm2'>
                        <button type='button' class='close' onclick='closeForm2()'>X</button>
                        <form action='dodajCene.php' method='POST'>
                            <label for='velikost'>Velikost:</label><br>
                            <input type='text' name='velikost' placeholder='Velikost'><br>
                            <label for='barva'>Barva:</label><br>
                            <input type='text' name='barva' placeholder='Barva'><br>
                            <label for='cena'>Cena: </label><br>
                            <input type='text' name='cena' placeholder='Cena'><br>
                            <input type='hidden' name='ID' placeholder='Cena' id="input" value=""><br>
                            <input type='hidden' name='methodes' value="2"><br>

                            <input type='submit' value='SUBMIT'>
                        </form>
                    </div>
                    <script>
                        function openForm(ID) {
                            document.getElementById("myForm").style.display = "block";
                            document.getElementById("input").value=ID;
                        }

                        function closeForm() {
                            document.getElementById("myForm").style.display = "none";
                        }

                        function openForm2() {
                            document.getElementById("myForm2").style.display = "block";
                        }

                        function closeForm2() {
                            document.getElementById("myForm2").style.display = "none";
                        }
                    </script>
                </div>
            </div>

        </div>
        </div>
        </div>




    </section>



    <footer id="footer">


        <p>©2022 GloweZone d.d | Website by Megi Repec</p>

    </footer>


</body>
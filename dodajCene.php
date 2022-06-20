<?php
$Velikost = $_POST['velikost'];
$Barva = $_POST['barva'];
$Cena = $_POST['cena'];

$conn = mysqli_connect("localhost", "root", "", "pb");
$sql = "SELECT * FROM cenik";
$result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));
$sql = "INSERT INTO cenik(Cena, Velikost, Barva) VALUES ('$Cena', '$Velikost', '$Barva');";
echo "OK";
if (mysqli_query($conn, $sql)) //povezava med localhost in sql stavkom ---- izvede sql stavek v tabeli coments
{
    echo "OK";
    echo "<script>location.href='mainPage.php'</script>"; // nas vrže na to stran
    mysqli_close($conn);
}

<?php
$ID = $_POST['ID'];
$Velikost = $_POST['velikost'];
$Barva = $_POST['barva'];
$Cena = $_POST['cena'];

$conn = mysqli_connect("localhost", "root", "", "pb");
$sql = "SELECT * FROM cenik";
$result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));
$sql = "UPDATE cenik SET Cena = '$Cena', Velikost = '$Velikost', Barva = '$Barva' WHERE ID = $ID";
if (mysqli_query($conn, $sql)) //povezava med localhost in sql stavkom ---- izvede sql stavek v tabeli coments
{
    echo "<script>location.href='mainPage.php'</script>"; // nas vrže na to stran
    mysqli_close($conn);
}
?>
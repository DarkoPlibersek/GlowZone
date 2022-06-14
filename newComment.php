<?php 
    $coment = $_POST["coment"];
    $ime = $_POST["ime"];               //to je ime spremnlj. ki smo jo dobili iz kontak.php ---- post pošlje iz forma v (newcomment.php) file.
    $priimek = $_POST["priimek"];   
    $conn=mysqli_connect("localhost", "root", "", "pb");
    $sql = "SELECT * FROM coments";
    $result=mysqli_query($conn,$sql) or exit(mysqli_error($conn));
    $sql= "INSERT INTO coments(ime, priimek, coment) VALUES('$ime','$priimek','$coment')"; //shranimo v spremenljivko SQL
    if(mysqli_query($conn,$sql)) //povezava med localhost in sql stavkom ---- izvede sql stavek v tabeli coments
    {
        mysqli_close($conn);
        echo "<script>location.href='kontakt.php'</script>"; // nas vrže na to stran
    }
?>
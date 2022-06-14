<?php 
    $ID = $_POST["ID"];
    $conn=mysqli_connect("localhost", "root", "", "pb");
    $sql = "SELECT id_coment FROM coments";
    $result=mysqli_query($conn,$sql) or exit(mysqli_error($conn));
    $sql= "DELETE FROM `coments` WHERE `coments`.`id_coment` = $ID";
    if(mysqli_query($conn,$sql))
    {
        mysqli_close($conn);
        echo "<script>location.href='kontakt.php'</script>";
    }
?>
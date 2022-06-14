<?php 
    $imageLink = $_POST["imageLink"];
    $conn=mysqli_connect("localhost", "root", "", "pb");
    $sql = "SELECT image_link FROM images";
    $result=mysqli_query($conn,$sql) or exit(mysqli_error($conn));
    $sql= "INSERT INTO images(image_link) VALUES('$imageLink')";
    if(mysqli_query($conn,$sql))
    {
        mysqli_close($conn);
        echo "<script>location.href='galerija.php'</script>";
    } //shrani ime slike v pb
?> 
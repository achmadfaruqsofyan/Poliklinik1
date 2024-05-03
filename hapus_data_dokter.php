<?php
    include "database.php";

    $id = $_GET['id'];
    $ambil_data = mysqli_query($conn, "DELETE * FROM dokter WHERE iddokter='$id'");

    header("location:data_dokter.php");
?>
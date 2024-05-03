<?php
include "database.php";
$id = $_GET['id'];
$ambil_data = mysqli_query($conn, "DELETE * FROM pasien WHERE idpasien='$id'");

header("location:data_pasien.php");


?>
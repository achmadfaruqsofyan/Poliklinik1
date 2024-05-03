<?php
include "database.php";

$namadokter = $_POST['nama_dokter'];
$alamatdokter = $_POST['alamat_dokter'];
$no_hpdokter = $_POST['no_hp_dokter'];
$query = mysqli_query($conn,"INSERT INTO dokter values(null,'$namadokter','$alamatdokter','$no_hpdokter')");


header("location:data_dokter.php");
?>
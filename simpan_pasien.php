<?php
include "database.php";

$namapasien = $_POST['nama_pasien'];
$alamatpasien = $_POST['alamat_pasien'];
$nohppasien = $_POST['no_hp_pasien'];
$query = mysqli_query($conn,"insert into pasien values(null,'$namapasien','$alamatpasien','$nohppasien')");


header("location:data_pasien.php");
?>
<?php
include "header.php";
?>
<form name = "periksa" method="POST">
<div class="form-group mx-sm-3 mb-2">
    <label for="inputpasien" class="sr-only">Pasien</label>
    <select class="form-control" name="idpasien">
        <?php
        $selected = '';
        $pasien = mysqli_query($conn, "SELECT * FROM pasien");
        while ($data = mysqli_fetch_array($pasien)) {
            if ($data['id'] == $idpasien) {
                $selected = 'selected="selected"';
            } else {
                $selected = '';
            }
        ?>
            <option value="<?php echo $data['id'] ?>" <?php echo $selected ?>><?php echo $data['namapasien'] ?></option>
        <?php
        }
        ?>
    </select>
</div>

<div class="form-group mx-sm-3 mb-2">
    <label for="inputDokter" class="sr-only">Dokter</label>
    <select class="form-control" name="id_dokter">
        <?php
        $selected = '';
        $dokter = mysqli_query($conn, "SELECT * FROM dokter");
        while ($data = mysqli_fetch_array($dokter)) {
            if ($data['id'] == $iddokter) {
                $selected = 'selected="selected"';
            } else {
                $selected = '';
            }
        ?>
            <option value="<?php echo $data['id'] ?>" <?php echo $selected ?>><?php echo $data['namadokter'] ?></option>
        <?php
        }
        ?>
    </select>
</div>

    <div class="form-group mx-sm-3 mb-2">
        <label form="tgl">Tanggal Periksa</label>
        <input type="date" name="tgl_periksa" id="tgl" value="<?= date('Y-m-d') ?>" class="form-control" required autofocus>
    </div><div class="form-group mx-sm-3 mb-2">
        <label form="input catatan">Catatan</label>
        <input type="text" name="catatan" value="masukan keluhan" class="form-control">
    </div>
    <div class="form-group pull-right">
        <input type="submit" name="add" value="Simpan" class="btn btn-success">
        <input type="reset" name="reset" value="Reset" class="btn btn-default">
    </div>

    </form>
   
    <?php
$result = mysqli_query($conn, "SELECT * FROM periksa");
$no = 1;
while ($ambil_data = mysqli_fetch_array($result)) {
?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $ambil_data['idpasien'] ?></td>
        <td><?php echo $ambil_data['iddokter'] ?></td>
        <td><?php echo $ambil_data['tgl_periksa'] ?></td>
        <td><?php echo $ambil_data['catatan'] ?></td>
        <td>
            <a class="btn btn-success rounded-pill px-3" 
            href="index.php?page=periksa&id=<?php echo $data['id'] ?>">
            Ubah</a>
            <a class="btn btn-danger rounded-pill px-3" 
            href="index.php?page=periksa&id=<?php echo $data['id'] ?>&aksi=hapus">Hapus</a>
        </td>
    </tr>
<?php
}
?>

<?php
    include "footer.php";
    include "database.php";
?>
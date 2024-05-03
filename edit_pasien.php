<?php
 include "header.php";
 $id = $_GET['id'];
 $ambil_data = mysqli_query($conn,"SELECT * FROM pasien Where idpasien='$id'");
 $data = mysqli_fetch_array($ambil_data);
?>

<div class="container">
	<div class="row">
		<div class="col-lg-12 mt-2" style="min-height: 500px">
			<div class="card">
				  <div class="card-header">
					Data Dokter
				  </div>
					<div class="card-body">
						<div class="row">
							<div class="col">
                            <form name = "edit" method="POST">
									<div class="form-group">
									<label for="">Nama</label>
									<input type="text" class="form-control" placeholder="nama_pasien_baru" name="nama" value="<?php echo $data['namapasien']; ?>">
									</div>
									<div class="form-group">
									<label for="">Alamat</label>
									<input type="text" class="form-control" placeholder="alamat_baru" name="alamat" value="<?php echo $data['alamatpasien']; ?>">
									</div>
									<div class="form-group">
									<label for="">No HP</label>
									<input type="text" class="form-control" placeholder="Nomor Hp Baru"  name="no_hp" value="<?php echo $data['nohppasien']; ?>">
									</div>
									<br>
									<a href="data_pasien.php"><input class="btn btn-danger" value ="batal"></a>
									<input type="submit" class="btn btn-primary" name="simpan" value="Update">
								</form>
							</div>
						</div>
					</div>
				  </div>
			</div>
		</div>
	</div>
</div>

<?php
	include "database.php";
	if(isset($_POST['simpan']))
	{
		$namapasien = $_POST['nama'];
		$alamatpasien = $_POST['alamat'];
		$nohppasien = $_POST['no_hp'];

		mysqli_query($conn, "UPDATE pasien SET namapasien='$namapasien', alamatpasien='$alamatpasien', nohppasien= '$nohppasien' WHERE idpasien ='$id'");
		
		header("location:data_pasien.php");
	}

?>
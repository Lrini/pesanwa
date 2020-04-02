<?php
include "koneksi.php";
require 'funtion.php';
$mahasiswa = query ("SELECT * FROM siswa");
//var_dump($siswa);die;
//tombol cari 
if (isset($_POST["cari"])) {
	$mahasiswa = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Web Sederhana </title>
	<script src="js/jquery.min.js"></script> 
</head>
<body>
	<ul>
		<li><a href="index.php">Data</a></li>
		<li><a href="form_upload.html">upload data</a></li>
	</ul>
	<form action="" method="post">
		<input type="text" name="pesan" size="30" placeholder="masukan pesan" >
		<button type="submit" name="simpan">simpan</button>
	</form>
	<?php
		if(isset($_POST['simpan'])){
			//var_dump($_POST); 
			//var_dump ($_FILES);die;
			if(tambah ($_POST) > 0){
				echo " 
					<script>
						alert('data berhasil disimpan');
						document.location.href = 'index.php';
					</script>
				";
			}else{
				echo " 
					<script>
						alert('data gagal disimpan');
						document.location.href = 'index.php';
					</script>
				";
			}
		}
	?>
	<br>
	<form action="" method="post">
		<input type="text" name="keyword" size="30" autofocus="" placeholder="masukan pencarian" autocomplete="off">
		<button type="submit" name="cari">cari</button>
	</form>
   <!---tabel--->
	<br>
	<form method="post" action="kirim.php" id="form-delete" enctype="multipart/form-data"> 
		<table class="table table-striped" border="5">
                <tr>
                	<th>Action</th>
                  <th>Nama</th> 
                  <th>No hp</th>
                  <th>Asal sekolah</th>
                  <th>Pesan</th>
                </tr>
				<tr>
					<?php foreach ($mahasiswa as $row):
					 ?>
						  <tr>
						  	<?php echo "<td><input type='checkbox' class='check-item' name='id_siswa[]' value='".$row['id_siswa']."'></td>";?>
						  	<?php echo "<td><input type='text'  name='nama[]' value='".$row['nama']."'></td>";?>
						  	<?php echo "<td><input type='text'  name='nohp[]' value='".$row['nohp']."'></td>";?>
                          	<td><?= $row["asalsekolah"];?></td>
                          	<?php echo "<td><input type='text' name='id_pesan[]' value='".$row['id_pesan']."'></td>";?>
                          </tr>
                     <?php endforeach; ?>              
							   
				</tr>
              </table>
              <hr>
              <button type="button" id="btn-delete">Kirim</button>
	</form>
    
              <script>
					$(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
						$("#check-all").click(function(){ // Ketika user men-cek checkbox all
							if($(this).is(":checked")) // Jika checkbox all diceklis
								$(".check-item").prop("checked", true); // ceklis semua checkbox siswa dengan class "check-item"
							else // Jika checkbox all tidak diceklis
								$(".check-item").prop("checked", false); // un-ceklis semua checkbox siswa dengan class "check-item"
						});
						
						$("#btn-delete").click(function(){ // Ketika user mengklik tombol delete
							var confirm = window.confirm("Apakah Anda yakin ingin mengirim pesan ini?"); // Buat sebuah alert konfirmasi
							
							if(confirm) // Jika user mengklik tombol "Ok"
								$("#form-delete").submit(); // Submit form
						});
					});
			</script>
    <!---tabel--->
</body>
</html>

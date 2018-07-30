<?php include_once ('template_atas.php'); ?>
<body>

<?php
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kode = $_POST['kode'];
$kategori = $_POST['kategori'];

$dataValid='YA';

if(strlen(trim($nama))==0){
	echo "Nama  Harus Diisi! <br/>";
	$dataValid = "Tidak";
}
if(strlen(trim($alamat))==0){
	echo "Alamat Anda Diisi! <br />";
	$dataValid = "TIDAK";
}
if(strlen(trim($kode))==0){
	echo "Kode Diisi! <br />";
	$dataValid = "TIDAK";
}
if(strlen(trim($kategori))==0){
	echo "Kategori Diisi! <br />";
	$dataValid = "TIDAK";
}
if($dataValid== "TIDAK"){
	echo "Masih Ada Kesalahan, silahkan perbaiki! </br>";
	echo "<input type='button' value='Kembali'
		onClick='self.history.back()'>";
	exit;
}

include "koneksi.php";
$simpan = true;
$sql = "insert into data (nama,alamat,tarif,kode,kategori) values ('$nama','$alamat','$kode','$kategori')";
$hasil = mysqli_query($kon, $sql);

if(!$hasil){
	echo "Gagal Simpan, silahkan diulangi!<br />";
	echo mysqli_error($kon);
	echo "<br/> <input type='button' value='Kembali'
		onClick='self.history.back()'>";
	exit;
	}
	$idjuzamma= mysqli_insert_id($kon);
	if($iddata==0){
	echo "Data Peserta tidak ada<br/>";
	$simpan =false;
	}
?>
<fieldset>
	<h1>Selamat anda telah berhasil membeli <h1/> 
			<h2>DATA ANDA</h2>
<pre>
	Nama 			: <?php echo $nama ?> <br/>
	Alamat			: <?php echo $alamat ?> <br/>
	Kode		 	: <?php echo $kode ?><br/>
	Kategori		: <?php echo $kategori ?>
</pre>
	</fieldset>
	<a href="data_1.php" >BELI LAGI</a> <br/>
</body>
<?php include_once ('template_bawah.php') ; ?>

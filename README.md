#Pertemuan ke-06 Aplikasi

Deskripsi
Sistem penjualan
1. Aplikasi ToKoKo 
Nama untuk aplikasi saya yaitu Aplikasi ToKoKo pada aplikasi ini dimana saya membuat aplikasi
yang membantu penjualan dan seputar transaksi tersebut berjalan.

2. Aplikasi ini diperlukan untuk program penjualan dengan mengunakan menu yang sederhana mudah dipahami.
Aplikasi ToKoKo adalah aplikasi penjualan barang dagang ini diakses melalui komputer,sebagai aplikasi perhitungan,
barang masuk dan keluar,stok barang,data supllierdan data pelanggan tertentu misalkan untuk data pelanggan untuk
jumlah pembelian yang banyak.

4. Manfaat dari aplikasi
mempermuda transaksi penjualan barang dengan waktu yang efisien,mempermudah pembuatan laporan,mengetahui jumlah barang yang
tersedia,dapat meningkatjan produktifitas usaha barang dagang.

3. Aplikasi ini digunakan untuk menghasilkan laporan jurnal penjualan,jurnal HPP,laporan penjuala perpelangan

5. batasan masalah penjualan barang dagang ini 
hanya sebatas penjualan barang dagang

Pembuat 
Endah sukma kuncari

Developmen tools
Node.js, taxt editor mengunakan NotePad++,untuk mengeksekusi mengunakan command

Instalasi Development tools
- Xampp
- Visual studio code
- Mozilla Firefox
- Git


 
Lisensi
https://www.apachefriends.org/download.html

#Proses minggu ke 7

 -membuat kembali form login dengan mengunakan php
<!DOCTYPE html>
<html>
<he
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br/>
	<br/>
	<center><h2>TOKOKO</h2></center>	
	<br/>
	<div class="login">
	<br/>
		<form action="login.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
		</form>
	</div>
</body>

<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}

</script>
</html>
 
 -membuat style.css
 body {
  background: #3498db;
  font-family: sans-serif;
}

h2 {
  color: #fff;
}

.login {
  padding: 1em;
  margin: 2em auto;
  width: 17em;
  background: #fff;
  border-radius: 3px;
}

label {
  font-size: 10pt;
  color: #555;
}

input[type="text"],
input[type="password"],
textarea {
  padding: 8px;
  width: 95%;
  background: #efefef;
  border: 0;
  font-size: 10pt;
  margin: 6px 0px;
}

.tombol {
  background: #3498db;
  color: #fff;
  border: 0;
  padding: 5px 8px;
  margin: 20px 0px;
}
 
 #Proses minggu ke 8
 
 -membuat koneksi untuk database
 
 <?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbName = "toko_ol";
	
	$kon = mysqli_connect($host, $user, $pass);
	if (!$kon)
	die("gagal koneksi.....");
	
	$hasil = mysqli_select_db($kon, $dbName);
	if (!$hasil) {
		$hasil = mysqli_query($kon, "CREATE DATABASE $dbName");
		if (!$hasil)
			die("gagal buat database");
		else
			$hasil = mysqli_select_db($kon, $dbName);
			if (!$hasil) die ("gagal konek database");
	}
	
	$sqlTabelBarang = "create table if not exists barang (
	idbarang int auto_increment not null primary key,
	nama varchar(40) not null,
	harga int not null default 0,
	stok int not null default 0,
	foto varchar(70) not null default '',
	KEY(nama) )";
	
	mysqli_query ($kon, $sqlTabelBarang) or die("Gagal buat table barang");

?>

# pertemuan 9
- masih melanjutkan proses koneksi

# pertemuan 10
- menginputkan data transaksi
- memcoba melakukan transaksi pembeian

# pertemuan 11
- melanjutkan transaksi pertemuan sebelumnya


# pertemuan 12
- membuat form data diri


# pertemuan 13
- menjalankan form data diri

# pertemuan 14
- melakukan koneksi data dan menjalankan proyek








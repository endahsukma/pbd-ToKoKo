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

Cara menjalankan
menggunakan command prompt dengan perinth node index.js dijalankan kemudian liat hasilnya
jika sudah mengakses mengunakan halaman web yang ada
 
Lisensi
Node.js  https://nodejs.org/en/download/
MongoDB  https://www.quora.com/Where-can-I-find-MongoDB-for-a-32bit-windows-installer https://www.mongodb.com/dr/fastdl.mongodb.org/win32/mongodb-win32-i386-3.2.14-signed.msi/download


#Proses minggu ke 8

<?php include_once ('template_atas.php'); ?>

<body>
	<br/>
	<br/>
	<center><h2>TOKOKO</h2></center>	
	<br/>
	<div class="login">
	<br/>
		<form action="login.php" method="post" onSubmit="return validasi()">
			<div>
				<center><label>Username:</label></center>
				<center><input type="text" name="username" id="username" /></center>
			</div>
			<br/>
			<div>
				<center><label>Password:</label></center>
				<center><input type="password" name="password" id="password" /></center>
			</div>			
			<div>
				<center><input type="submit" value="Login" class="tombol"></center>
			</div>
		</form>
	</div>
</body>

<?php include_once ('template_atas.php'); ?>

login.php
<?php 
include 'config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysql_query("select * from user where username='$username' and password='$password'");
$cek = mysql_num_rows($login);

if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin/index.php");
}else{
	header("location:index.php");	
}

?>






<html lang="en">
<style>
body {
background-image : url("kerbelanja.jpg");
}
</style>
<?php
	$barang_pilih = 0;
if(isset($_COOKIE['keranjang'])){
	$barang_pilih = $_COOKIE['keranjang'];
	}
if (isset($_GET['idbarang'])){
$idbarang = $_GET['idbarang'];
$barang_pilih = str_replace(("," . $idbarang), "",$barang_pilih);
setcookie('keranjang',$barang_pilih,time()+3600);
}
include "koneksi.php";
$sql = "select * from barang where idbarang not in (".$barang_pilih.")
		and ks > 0 order by idbarang desc";
$hasil = mysqli_query($kon,$sql);
if (!$hasil)
	die ("Gagal query..".mysql_error());
	?>
	<center/>
<h2> KERANJANG BELANJA </h2>
<table border="1">
	<tr>
	<th>Gambar</th>
	<th>Nama Barang</th>
	<th>Harga jual</th>
	<th>Kode</th>
	<th>Operasi</th>
	</tr>
	<?php
		$no = 0;
		while ($row = mysqli_fetch_assoc($hasil)) {
			echo "<tr>";
			echo  "<td> <a href='pict/{$row['foto']}'/>
					<img src='thumb/t_{$row['foto']} 'width='100' />
					</a> </td>";
			echo "<td>".$row['nama']."</td>";
			echo "<td>".$row['harga']."</td>";
			echo "<td>".$row['ks']."</td>";
			echo "<td>";
			echo " <a href='".$_SERVER['PHP_SELF']."?idbarang=".
				$row['idbarang']."'>BATAL </a>";
			echo "</td>";
			echo "</tr>";
			}
	?>
</table>

<h2>.:: ISI BARANG ::.</h2>
	<form action="barang_simpan.php" method="post" enctype="multipart/form-data">
	<table border="1">
		<tr>
		<td>Nama Barang</td>
		<td><input type="text" name="nama" /></tr>
		</tr>
		<tr>
		<td>Harga jual</td>
		<td><input type="text" name="harga" /></tr>
		</tr>
		<tr>
		<td>Stok</td>
		<td><input type="text" name="stok" /></tr>
		</tr>
		<tr>
		<td>Gambar [max=1.5MB]</td>
		<td><input type="file" name="foto"></td>
		</tr>
		<tr>
		<td colspan="2" align="center">
		<input type="submit" values="simpan" name="proses"/>
		<input type="reset" values="simpan" name="reset"/>
		</td>
		</tr>
	</table>
	</form>
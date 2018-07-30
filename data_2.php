<?php include_once ('template_atas.php'); ?>
<!DOCTYPE html>
<html>
<body>
<h2 align="center">.:: PENDAFTARAN PEMBELIAN ::.</h2>
<form action="simpan_data.php" method="post">
<center>
<table border="1" align="center">
	<tr>
	<td>Nama Lengkap</td>
	<td><input type="text" name="nama" /></td>
	</tr>
	<tr>
	<td>Alamat</td>
	<td><input type="text" name="alamat" /></td>
	</tr>
	<tr>
	<td>Kode Barang</td>
	<td><input type="text" name="kode" /></td>
	</tr>
	<tr>
	<td>Kategori Belanja</td>
	<td><select name="kode" class="texbox" value="<?php $_POST['kode']?>">
	<option value="pilih">KATEGORI</option>
	<option value="BAJU">BAJU</option>
	<option value="CELANA">CELANA</option>
	<option value="SKIN CARE">SKIN CARE</option>
	<option value="CASING HP">CASING HP</option>
	<option value="LAINNYA">LAINNYA</option>
	</select></td></tr>
	
	<tr>
	<td colspan="2" align="center">
	<input type="submit" value="Simpan" name="proses" />
	<input type="reset" value="Reset" name="reset" />
	</td>
	</tr>
</table>
</center>
</form>
</body>
</html>
<?php include_once ('template_bawah.php') ; ?>

<html lang="en">
<style>
body {
background-image : url("g1.jpg");
}
</style>
<h2>PERSEDIAAN SKIN CARE</h2>
	<form action="barang_simpan.php" method="post" enctype="multipart/form-data">
	<input type="hiden" name"idbarang" values="<?php echo $idbarang;?>" />
	<table border="1">
		<tr>
		<td>Nama Barang</td>
		<td><input type="text" name="nama" values="<?php echo $nama;?>" /></tr>
		</tr>
		<tr>
		<td>Harga jual</td>
		<td><input type="text" name="harga" values="<?php echo $harga;?>" /></tr>
		</tr>
		<tr>
		<td>Kode</td>
		<td><input type="text" name="ks" values="<?php echo $ks;?>" /></tr>
		</tr>
		<tr>
		<td>Gambar [max=2.5MB]</td>
		<td>
		<input type="file" name-"foto">
		<input type="hiden" name"foto_lama" values="<?php echo $foto;?>" /> <br/>
		<img src="<?php echo "thumb/t_".$foto; ?>" width="100px" />
		<td><input type="file" name="foto"></td>
		</td>
		</tr>
		<tr>
		<td colspan="2" align="center">
		<input type="submit" values="simpan" name="proses"/>
		<input type="reset" values="simpan" name="reset"/>
		</td>
		</tr>
	</table>
	</form>

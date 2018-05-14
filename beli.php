<h2>DATA PEMBELIAN</h2>
<form action='simpan_beli.php' method="post">
<table border="0">
<tr>
	<td>Nama</td>
	<td>:<input type="text" name="namacust" /></td>
</tr>
<tr>
	<td>Email</td>
	<td>:<input type="email" name="email" /></td>
</tr>
<tr>
	<td>Alamat</td>
	<td>:<input type="text" name="alamat" /></td>
</tr>
<td>
	<td colspan="2" alight="right">
	<input type="submit" value="simpan" /></td>
</table>
</form>
<?php
	include_once("belanja.php");
	?>
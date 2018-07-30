<?php include_once ('template_atas.php'); ?>

<body>
    <h1>DAFTAR PEMBELIAN </h1>
	<fieldset><legend>DAFTAR PEMBELIAN</legend> <br/><br/>
    <form action="data_2.php" method="post">	
	<?php echo "Pembelian barang" ?> 
	Perhatian Pastikan Isi Kode : <input type="text" name="kode" value="kodebelanja" readonly> <br/><br/>
	</fieldset><br/><br/>
	<input type="submit" name="submit" value="DAFTAR PEMBELIAN">
</form>
</body>

<?php include_once ('template_bawah.php') ; ?>
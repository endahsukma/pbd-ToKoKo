<?php
	@session_start();
	$pengguna= isset($_SESSION["user"]) ? $_SESSION["user"] : "" ;
	$nama_lengkap = isset($_SESSION["nama_lengkap"]) ? $_SESSION["nama_lengkap"] : "" ;
	$akses = isset($_SESSION["akses"]) ? $_SESSION["akses"] : "" ;
	if($akses == ""){
		$nama_akses = "Operator Penjualan Barang";
	}else{
		$nama_akses = "";
	}
?>
<!doctype html>
<html>
    <head>
        <title>Ayo Belanja</title>
        <link rel="stylesheet" href="style.css">
    </head>
	<body>
		<div id="wrap">
        <div id="header">
            <h1>Ayo Belanja</h1>
		</div>
		<div style="clear: both"></div>
		<div id="tengah">
        <div id="info_pengguna">
			<?php
			if(!empty($pengguna)){
				echo "Sedang login sebagai : $pengguna, 
					  Nama lengkap : $nama_lengkap <br/>
					  Akses sebagai : $nama_akses ";
				$tampil_login = "display:none";
				$tampil_logout = "";
			}else{
				$tampil_login = "";
				$tampil_logout = "display:none";
			}
			?>
			Tanggal : <?php echo date("d F Y") ?>
		</div>
	<div id="menu">
		<center><div id="menu_header">Ayo Belanja</div>
        <div id="menu_konten">
            <ul>
			<?php
				$tampil = "";
				if($akses == ""){
					$tampil = "display:none";
				}
				?>
				<li><a style="<?php echo $tampil ?>"
				<li><a href="barang_isi.php">Pengisian Skin Care</a></li>
				<li><a href="barang_tersedia.php">Barang Tersedia</a></li>
				<li><a href="data_1.php">Pengisian Data</a></li>
				<li><a href="keranjang_belanja.php">Belanjaan Anda</a></li>
            </ul>
        </div>
	</div>	
	<div id="konten">
       

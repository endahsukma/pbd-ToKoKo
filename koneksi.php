<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbName = "uji";
	
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
	ks int not null default 0,
	foto varchar(70) not null default '',
	KEY(idbarang) )";
	
	mysqli_query ($kon, $sqlTabelBarang) or die("Gagal buat table barang");

	$sqlTabelHjual="create table if not exists hjual (
	idhjual int auto_increment not null primary key,
	tanggal date not null,
	namacust varchar(40) not null,
	tarif int not null default 0,
	email varchar(50) not null default'',
	notelp varchar(20) not null default''
	)";
	mysqli_query ($kon, $sqlTabelHjual) or die("Gagal buat table Header Jual");
	
	$sqlTabelDjual="create table if not exists djual (
	iddjual int auto_increment not null primary key,
	idhjual int not null,
	idbarang int not null,
	qty int not null,
	harga int not null
	)";

	mysqli_query ($kon, $sqlTabelDjual) or die("Gagal buat table Detail ISi");
	$sqlTabelAwal = "create table if not exists awal(
				idawal int auto_increment not null primary key,
				nama varchar(40) not null,
				alamat char(30) not null,
				kd int not null default 0,
				kategori varchar(70) not null default '',
				KEY(nama) )";				
	mysqli_query($kon, $sqlTabelAwal) or die("Gagal Buat Tabel awal");
	
	$sqlTabelData = "create table if not exists data(
				iddata int auto_increment not null primary key,
				nama varchar(40) not null,
				alamat char(30) not null,
				kode int not null default 0,
				kategori varchar(70) not null default '',
				KEY(nama) )";				
	mysqli_query($kon, $sqlTabelData) or die("Gagal Buat Tabel Data");

	$sqlTabelUser = "create table if not exists pengguna (
	idpengguna int auto_increment not null primary key,
	user varchar(25) not null,
	password varchar(50) not null,
	nama_lengkap varchar(50) not null,
	akses varchar(10) not null
	)";
	
	mysqli_query ($kon, $sqlTabelUser) or die("Gagal buat table Pengguna");
	
	$sql = "select * from pengguna" ;
	$hasil = mysqli_query($kon,$sql);
	$jumlah = mysqli_num_rows($hasil);
	if($jumlah == 0){
	$sql = "insert into pengguna (user, password, nama_lengkap, akses)
		values ('admin',md5('admin'),'administrator','toko'),
			('cust',md5('cust'),'pelanggan','beli')";
	mysqli_query($kon,$sql);
	}
?>

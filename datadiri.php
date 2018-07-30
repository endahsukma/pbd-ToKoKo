 <?php
        error_reporting(0);
       
        $koneksi = mysql_connect("localhost","root","") or die("Koneksi Gagal !" . mysql_error());
 
        $db = mysql_select_db("ngaji") or die("Database tidak ada !" . mysql_error());
       
        //Query
        $query = mysql_query("select * from awal", $koneksi);
       
        //Membentuk table dari hasil query
        echo "<table border=1>";
        echo "<tr><td><b>id_awal</b></td><td><b>nama</b></td><td><b>alamat</b></td><td><b>kode</b></td><td><b>kategori</b></td></tr>";
        while ($baris = mysql_fetch_array($query, MYSQL_ASSOC)) {
                printf("<tr><td>%s</td><td> %s</td></tr>", $baris["id_awal"],$baris["nama"],$baris["alamat"],$baris["kode"],$baris["kategori"]);
        }
        echo "</table>";
 
        mysql_close($koneksi);
?>


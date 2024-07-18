<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <h1 align=center>Bukti Pemesanan</h1>
<?php 
          
            include "koneksi.php";
            if(isset ($_POST['btn'])) {
                mysqli_query($con,"INSERT INTO pemesanan_kost set
                    nama_penyewa='$_POST[nama_penyewa]',
                    no_hp='$_POST[no_hp]',
                    email='$_POST[email]',
                    jenis_kelamin='$_POST[jenis_kelamin]',
                    tipe_kamar='$_POST[tipe_kamar]',
                    harga='$_POST[harga]',
                    nik_ktp='$_POST[nik_ktp]'");
                    
                 }
        


?>
<?php
$nama_penyewa=$_POST['nama_penyewa'];
$no_hp=$_POST["no_hp"];
$email=$_POST["email"];
$jenis_kelamin=$_POST["jenis_kelamin"];
$tipe_kamar=$_POST["tipe_kamar"];
$harga=$_POST["harga"];
$nik_ktp=$_POST["nik_ktp"];

    echo "<center><table border=2>";
    echo "</tr><td>Nama lengkap :</td><td>$nama_penyewa</td></tr>";
	echo "</tr><td>Nomor telepon:</td><td>$no_hp</td></tr>";
	echo "</tr><td>Email :</td><td>$email</td></tr>";
    echo "</tr><td>Jenis kelamin :</td><td>$jenis_kelamin</td></tr>";
	echo "</tr><td>Tipe kamar :</td><td>$tipe_kamar</td></tr>";
	echo "</tr><td>Harga :</td><td>$harga</td></tr>";
	echo "</tr><td>Nik ktp :</td><td>$nik_ktp</td></tr>";
	echo "</center></table>";
?>
<script type="text/javascript">
window.print();
						</script>
</body>
</html>
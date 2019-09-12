<?php 
include "koneksi.php"; 
$npm=$_POST['npm']; 
$nama=$_POST['nama']; 
$jumlah_hadir=$_POST['jumlah_hadir']; 
$tugas1=$_POST['tugas1'];
$tugas2=$_POST['tugas2'];
$uts=$_POST['uts'];
$uas=$_POST['uas']; 
$query=mysql_query("update mahasiswa set nama='$nama', jumlah_hadir='$jumlah_hadir', tugas1='$tugas1',  
tugas2='$tugas2',  uts='$uts',  uas='$uas' where npm='$npm'"); 
if($query){ 
 echo "Berhasil update data ke database "; 
 ?><a href="tabel.php">Lihat data di Tabel</a><?php 
}else{ 
 echo "Gagal update data"; 
 echo mysql_error(); 
} 
?> 
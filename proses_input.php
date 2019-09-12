<?php
include "koneksi.php"; 
$npm=$_POST['npm']; 
$nama=$_POST['nama']; 
$jumlah_hadir=$_POST['jumlah_hadir']; 
$tugas1=$_POST['tugas1'];
$tugas2=$_POST['tugas2'];
$uts=$_POST['uts'];
$uas=$_POST['uas']; 
$query=mysql_query("insert into mahasiswa(npm, nama, jumlah_hadir, tugas1, tugas2, uts, uas) value('$npm','$nama','$jumlah_hadir','$tugas1','$tugas2','$uts','$uas')"); 
if($query){ 
 echo "Berhasil input data ke database"; 
 ?><a href="tabel.php">Lihat data di Tabel</a><?php 
}else{ 
 echo "Gagal input data"; 
 echo mysql_error(); 
} 
?> 
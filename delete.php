<?php 
include "koneksi.php"; 
$no_transaksi=$_GET['no_transaksi']; 
$query=mysql_query("delete from penjualan where no_transaksi='$no_transaksi'"); 
if($query){ 
 ?><script language="javascript">document.location.href="tabel.php";</script><?php 
}else{ 
 echo "gagal hapus data"; 
} 
?>
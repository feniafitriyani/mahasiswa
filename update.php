<?php 
include "koneksi.php"; 
$npm=$_GET['npm']; 
$query=mysql_query("select * from mahasiswa where npm='$npm'"); 
?> 
<form action="simpan.php" method="post"> 
<table border="1"> 
<?php 
while($row=mysql_fetch_array($query)){ 
 ?> 
 <input type="hidden" name="npm" value="<?php echo $npm;?>"/> 
 <tr> 
 <td>Nama</td>
 <td><input type="text" name="nama" value="<?php echo $row['nama'];?>" /></td> 
 </tr>
 <tr> 
 <td>Jumlah Hadir</td>
 <td><input type="text" name="jumlah_hadir" value="<?php echo $row['jumlah_hadir'];?>" /></td> 
 </tr> 
 <tr> 
 <td>Tugas 1</td>
 <td><input type="text" name="tugas1" value="<?php echo $row['tugas1'];?>" /></td> 
 </tr>
 <tr> 
 <td>Tugas 2</td>
 <td><input type="text" name="tugas2" value="<?php echo $row['tugas2'];?>" /></td> 
 </tr>
 <tr>
 <td>UTS</td>
 <td><input type="text" name="uts" value="<?php echo $row['uts'];?>" /></td> 
 </tr> 
 <tr> 
 <td>UAS</td>
 <td><input type="text" name="uas" value="<?php echo $row['uas'];?>" /></td> 
 </tr>
 <tr><td><input type="submit" value="Simpan" name="simpan" /></td> 
 </tr> 
 <?php 
} 
?> 
</table> 
</form> 
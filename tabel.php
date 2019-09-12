<?php 
include "koneksi.php"; 
$query=mysql_query("select * from mahasiswa"); 
$jumlah=mysql_num_rows($query); 
echo "Jumlah data ada : ".$jumlah;  
?> 
<table border="1"> 
<tr> 
 <th>Nomor</th>
 <th>NPM</th> 
 <th>Nama</th>
 <th>Jumlah Hadir</th>
 <th>Tugas 1</th>
 <th>Tugas 2</th>
 <th>UTS</th>
 <th>UAS</th>
 <th>Aksi</th> 
</tr> 
<?php 
while($row=mysql_fetch_array($query)){ 
?> 
<tr> 
 <td><?php echo $c=$c+1;?></td> 
 <td><?php echo $row['npm'];?></td> 
 <td><?php echo $row['nama'];?></td> 
 <td><?php echo $row['jumlah_hadir'];?></td>
 <td><?php echo $row['tugas1'];?></td> 
 <td><?php echo $row['tugas2'];?></td>
 <td><?php echo $row['uts'];?></td>
 <td><?php echo $row['uas'];?></td>
 <td> 
 <a href="delete.php?npm=<?php echo $row['npm']; ?>" onclick="return confirm('Apakah anda yakin?')">Delete</a> 
 <a href="update.php?npm=<?php echo $row['npm']; ?>">Update</a> 
 </td> 
<?php 
} 
?> 
</table><br /> 
<a href="input.php">Input data form</a> 
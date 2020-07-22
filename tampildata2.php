<?php
include('koneksi1.php');?>
<center>
<body bgcolor = "grey">
<center>
<center><b><font size="10px" color="black" face="Comic Sans MS">Jadwal Tayang</font></b></center>
<hr color ="black" width="650px" size="7px">

<nav>
<a href="forminput1.php">[+] Tambah</a>
</nav>
<table border="1" width="800">
<tr style="background-color: #00FF00;">
<td><center>Movies</center></td>
<td><center>Showtime</center></td>
<td><center>Info</center></td>

<td colspan="2" align="center">Aksi</td>
</tr>

<?php
include('koneksi1.php');
$query=mysqli_query($konek,"SELECT*FROM jadwal");
while($data=mysqli_fetch_array($query)){
	?>
	<tr>
	<td><?php echo $data['Movies'];?></td>
	<td><?php echo $data['Showtime'];?></td>
	<td><?php echo $data['Info'];?></td>
	
	<td><a href="hapus_data2.php?Movies=<?php echo
	     $data['Movies'];?>">hapus</a></td>
	<td><a href="updatedata2.php?Movies=<?php echo
	     $data['Movies'];?>">update</a></td></tr>

	     <?php
	     }
	     ?>

}

<?php
include("koneksi1.php");
if(!isset($_GET['id'])){
header('Location:tampil_data2.php');
}
$movies = $GET['movies'];
$sql="SELECT *FROM jadwal WHERE Movies=$movies";
$query =mysqli_query($konek,$sql);
$data = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
die("data tidak ditemukan....");
}
?>
<html>
<head>
<title>Edit Data</title>
</head>
<body>
<p>Edit Data Pemesanan</p>
<form action="prosesupdate2.php" method="POST">
<table width="800" border="0" cellspacing="0" cellpadding="0">
<fieldset>
<p>
<label for="movies">Movies: </lable>
<input type="text" name="movies" placeholder="movies" value="<?php echo $data['Movies']?>"/>
</p>
<p>
<label for="showtime">Showtime: </lable>
<input type="text" name="showtime" placeholder="showtime" value="<?php echo $data['Showtime']?>"/>
</p>
<p>
<label for="info">Info: </lable>
<input type="text" name="info" placeholder="info" value="<?php echo $data['Info']?>"/>
</p>

<p>
<input type="submit" value="simpan" name="simpan"/>
</p>
</fieldset>

</form>
</body>
</html>
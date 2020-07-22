<?php
include("koneksi1.php");
$movies =$_GET['Movies'];
$sql="DELETE FROM jadwal WHERE Movies=$movies";
mysqli_query ($konek,$sql);
header('Location:tampil_data2.php');
?>
<?php
include('koneksi1.php');
//ambil data dari form input yang kita buat sebelumnya
//dengan method POST
if(isset($_POST['input'])){
$movies = $_POST['Movies'];
$showtime = $_POST['Showtime'];
$info = $_POST['Info'];


$sql ="UPDATE jadwal SET Movies='$movies',Showtime='$showtime',Info='$info'";
$query=mysqli_query($konek,$update);

if($query){
header('location:tampil_data2.php');

}else{
die("Gagal");
}
}else{
die("gagal");
}
?>
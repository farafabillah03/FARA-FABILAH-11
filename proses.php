<?php 
if(isset($_POST['fnama']))
{
 $fnama = $_POST['fnama'];
 $lalamat = $_POST['lalamat'];
 $no=$_POST['no'];
  $tgl=$_POST['tgl'];
 $jam=$_POST['jam'];
 $kat=$_POST['kat'];
 $jud=$_POST['jud'];
 echo "Nama : ".$fnama."<br/>Alamat : ".$lalamat."<br/>NoTelp :".$no. "<br/>Tgl/Hari :".$tgl."<br/>Jam Tayang :".$jam."<br/>Kategori Film : ".$kat."<br/>Judul Film : ".$jud;

}
?>

 
 




<h2>Edit Data Kendaraan</h2>
 
<?php 
    include 'koneksi.php';
    $Movies = $_GET['Movies'];
    $sql = "SELECT*FROM jadwal tayang WHERE Movies ='$Movies'";
    $que = mysqli_query($sambungan, $sql);
 
    while ($data=mysqli_fetch_array($que)) 
    {
         $Movies   = $data['Movies'];
            $Showtime   = $data['Showtime'];
              $Info = $data['Info'];
           
    }
?>
 
<form action="mahasiswa-ubah.php" method="post" enctype="multipart/form-data">
    
  
           <p>
        Movies : <br>
        <input type="text" name="Movies" required="" value="<?php echo "$Movies"; ?>">
    </p>
 
    <p>
            Showtime : <br>
        <input type="text" name="   Showtime" required="" value="<?php echo "$Showtime"; ?>">
            
        
    </p>
 
    <p>
        Info : <br>
        <input type="text" name="Info" required="" value="<?php echo "$Info"; ?>">
    </p>
 
</form>
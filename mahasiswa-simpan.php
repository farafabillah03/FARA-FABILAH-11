<?php 
 
    include 'koneksi.php';
    $Movies  = $_POST['Movies'];
    $Showtime = $_POST['Showtime'];
    $Info = $_POST['Info'];
   
    

 
     
    $sql = "INSERT INTO jadwal tayang VALUES( '$Movies', '$Showtime', '$Info')";
    $que = mysqli_query($sambungan, $sql);  
    //peyimpanan
    if ($que) //jika berhasil
    {
        echo
        "
            <script type='text/javascript'>
                alert('Data telah disimpan');
                window.location='mahasiswa-data.php';
            </script>
        ";
    }
    else //jika gagal
    {
        echo
        "
            <script type='text/javascript'>
                alert('Gagal disimpan');
                window.location='mahasiswa-tambah.php';
            </script>
        ";
    }
    //penyimpanan
 
?>
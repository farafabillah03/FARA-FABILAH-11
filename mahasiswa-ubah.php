<?php 
 
    include 'koneksi.php';
    $Movies   = $_POST['Movies'];
            $Showtime   = $_POST['Showtime'];
            $Info = $_POST['Info'];
           
 
    //perintah sql untuk menyimpan ke database
    $sql = "UPDATE jadwal tayang SET  Movies='$Movies', Showtime='$Showtime', Info='$Info'";
     
    $que = mysqli_query($sambungan, $sql);  
    //peyimpanan
    if ($que) //jika berhasil
    {
        echo
        "
            <script type='text/javascript'>
                alert('Data telah diubah');
                window.location='Jadwal Tayang.php';
            </script>
        ";
    }
    else //jika gagal
    {
        echo
        "
            <script type='text/javascript'>
                alert('Gagal diubah');
                window.location='mahasiswa-edit.php?Movies=$Movies';
            </script>
        ";
    }
    //penyimpanan
?>
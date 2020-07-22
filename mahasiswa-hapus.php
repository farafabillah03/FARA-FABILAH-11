<?php 
    include 'koneksi.php';
    $Movies = $_GET['Movies'];
    $sql = "DELETE FROM jadwal tayang WHERE Movies='$Movies'";
    $que = mysqli_query($sambungan, $sql);  
    //peyimpanan
    if ($que) //jika berhasil
    {
        echo
        "
            <script type='text/javascript'>
                alert('Data telah dihapus');
                window.location='mahasiswa-data.php';
            </script>
        ";
    }
    else //jika gagal
    {
        echo
        "
            <script type='text/javascript'>
                alert('Gagal dihapus');
                window.location='mahasiswa-data.php';
            </script>
        ";
    }
 
?>
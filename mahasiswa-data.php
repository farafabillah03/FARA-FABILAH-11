
       <?php
        include 'koneksi.php';
        $sql = "SELECT * FROM jadwal tayang";
        $que = mysqli_query($sambungan, $sql);//eksekusi perintah $sql
     
        while ($data=mysqli_fetch_array($que)) 
        {
            //deklarasi database
            //var      //wajib sama dengan yg di database
            $Movies    = $data['Movies'];
            $Showtime   = $data['Showtime'];
           
            $Info = $data['Info'];
           
            echo
            "
                <tr>
                   
                   <td>$Movies </td> 
     
    <td>$Showtime </td> 
    <td>$Info </td>
    
    
                    <td>
                        <a href='mahasiswa-edit.php?Movies=$Movies'>Edit</a>
                        <a href='mahasiswa-hapus.php?Movies=$Movies'>Hapus</a>
                    </td>
                </tr>
            ";
           
        }
 
    ?>
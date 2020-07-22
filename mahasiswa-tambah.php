<h2> jadwal tayang</h2>
                        <!--enctype="multipart/form-data", wajib ada kalo ada upload file-->
<form action="mahasiswa-simpan.php" method="post" enctype="multipart/form-data">
    <p>
        Movies: <br>
        <input type="text" name="Movies" required="">
    </p>
 
    <p>
        Showtime : <br>
        <input type="text" name="Showtime" required="">
 
    <p>
        Info : <br>
        <input type="text" name="Info" required="">
    </p>

    <p>
        <input type="submit" value="SIMPAN">
    </p>
</form>
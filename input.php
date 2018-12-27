<br><br>
<html>
<body BACKGROUND="inputwallpaper.png">
<h1 align="center" style="color:black">Input Data Pelanggan</h1>
<fieldset style="width: 50%; margin: auto;">
    <legend style="color:black">FORMULIR INPUT DATA</legend>

    <form action="simpan.php" method="post" style="color:black">
        <p>
            Nama Lengkap<br />
            <input type="text" name="nama" required />
        </p>

        <p>
            Jenis Kelamin<br />
            <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="laki-laki" /><label for="laki-laki">Laki-Laki</label>
            <input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan" /><label for="perempuan">Perempuan</label>
        </p>

        <p>
            Alamat Lengkap<br />
            <textarea name="alamat" cols="50" required></textarea>
        </p>

        <p>
            Jenis kendaraan<br />
            <input type="radio" name="jenis_kendaraan" value="pickup" id="pickup" /><label for="pickup">Pick Up</label>
            <input type="radio" name="jenis_kendaraan" value="minibus" id="minibus" /><label for="minibus">Mini Bus</label>
            <input type="radio" name="jenis_kendaraan" value="mpv" id="mpv" /><label for="mpv">MPV</label>
        </p>

        <p>
            Nomor Handphone<br />
            <input type="text" name="no_hp" required />
        </p>

        <p>
            Jaminan<br />
            <input type="text" name="jaminan" required />
        </p>

        <p>
            harga<br />
            <input type="radio" name="harga" value="RP.375.000" id="pickup" ><label for="pickup">Sewa (pick Up)</label>
            <input type="radio" name="harga" value="RP.525.000" id="minibus" /><label for="minibus">Sewa (Mini Bus)</label>
            <input type="radio" name="harga" value="RP.600.000" id="mpv" /><label for="mpv">sewa (MPV)</label>
        </p>

        <p>
            <input type="submit" value="Simpan" />
            <input type="reset" value="Reset" onclick="return confirm('hapus data yang telah diinput?')">
        </p>
    </form>
</fieldset>
<br />
<center><a href="index.php" style="color:black">&Lt; Back Tabel Data Pelanggan</a></center>
</html>
</body>

<html>
    <head>
    </head>
    <body>
        <h1>Form pendaftaran</h1>
        <form action="proses-pendaftaran.php" method="POST">

            <fieldset>
                <p>
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama" />
                </p>
                <p>
                    <label for="tempat lahir">Tempat Lahir  :</label>
                    <input type="text" name="tempat lahir" />
                </p>
                <p>
                    <label for="tanggal lahir">Tanggal Lahir :</label>
                    <input type="date" name="tanggal lahir" />
                <p>
                    <label for="alamat">Alamat :</label>
                    <textarea name="Alamat" rows="5"></textarea>
                </p>
                <p>
                    <label for="jenis kelamin">Jenis Kelamin :</label>
                    <label><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
                </p>
                <p>
                    <label for="agama">Agama :</label>
                    <select>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katholik">Katholik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    </select>
                <p>
                    <input type="Submit" value="Submit" name="Daftar" />
                </p>
                </fieldset>
</form>
    </body>
</html>
<?php
    $no_surat = $_GET["id"];
    $query = getRecord("tb_sklp","*","WHERE no_surat='$no_surat'");
    $row = fetch($query);
?>

<div class="CRUD">
    <article>
        <h2 class="judulCRUD">Edit Laporan</h2>
        <form action="" method="post">
            <div class="tabelCRUD">
                <table cellspacing="0" class="subCRUD">
                    <tr>
                        <th><label for="nama">Nama</label></th>
                        <td><input type="text" name="nama" id="nama" value="<?= $row['nama']; ?>" readonly="true"></td>
                    </tr>

                    <tr>
                        <th><label for="tempatTglLahir">Tempat/Tgl. Lahir</label></th>
                        <td><input type="text" name="tempatTglLahir" id="tempatTglLahir" value="<?= $row['tempat_tgllahir']; ?>" readonly="true"></td>
                    </tr>

                    <tr>
                        <th><label for="pekerjaan">Pekerjaan</label></th>
                        <td><input type="text" name="pekerjaan" id="pekerjaan" value="<?= $row['pekerjaan']; ?>" required></td>
                    </tr>

                    <tr>
                        <th><label for="alamat">Alamat</label></th>
                        <td><input type="text" name="alamat" id="alamat" value="<?= $row['alamat']; ?>" required></td>
                    </tr>

                    <tr>
                        <th><label for="telp">Telp.</label></th>
                        <td><input type="tel" name="telp" id="telp" value="<?= $row['nohp']; ?>" required></td>
                    </tr>
                </table>
            </div>

            <div class="tabelCRUD">
                <table cellspacing="0" class="subCRUD">
                    <tr>
                        <th><label for="email">Email</label></th>
                        <td><input type="email" name="email" id="email" value="<?= $row['email']; ?>" readonly="true"></td>
                    </tr>

                    <tr>
                        <th><label for="tmpLapor">Tempat Lapor</label></th>
                        <td><input type="text" name="tmpLapor" id="tmpLapor" value="<?= $row['tempat_lapor']; ?>" required></td>
                    </tr>

                    <tr>
                        <th><label for="waktuKejadian">Waktu Kejadian</label></th>
                        <td><input type="datetime-local" name="waktuKejadian" id="waktuKejadian" value="<?= $row['wkt_kejadian']; ?>" required></td>
                    </tr>

                    <tr>
                        <th><label for="tempatKejadian">Tempat Kejadian</label></th>
                        <td><input type="text" name="tempatKejadian" id="tempatKejadian" value="<?= $row['tempat_kejadian']; ?>" required></td>
                    </tr>

                    <tr>
                        <th><label for="terlapor">Terlapor</label></th>
                        <td><input type="text" name="terlapor" id="terlapor" value="<?= $row['terlapor']; ?>" required></td>
                    </tr>
                </table>
            </div>

            <!-- sads -->
            <table class="buttonCRUD">
                <tr>
                    <td>
                        <button type="submit" name="simpan" class="simpan">Simpan</button>
                        <button type="button" class="batal" onclick="window.location.href='./?page=sklp&act=view'">Kembali</button>
                    </td>
                </tr>
            </table>
        </form>
    </article>
</div>

<?php
    if (isset($_POST["simpan"])) {
        $nama = $_POST["nama"];
        $tempattgllhr = $_POST["tempatTglLahir"];
        $pekerjaan = $_POST["pekerjaan"];
        $alamat = $_POST["alamat"];
        $nohp = $_POST["telp"];

        $email = $_POST["email"];
        $tmptlapor = $_POST["tmpLapor"];
        $waktukejadian = $_POST["waktuKejadian"];
        $tmptkejadian = $_POST["tempatKejadian"];
        $terlapor = $_POST["terlapor"];

        $tabel = "tb_sklp";
        $where = "no_surat = '$no_surat'";
        $value = "nama = '$nama', tempat_tgllahir = '$tempattgllhr', pekerjaan = '$pekerjaan', alamat = '$alamat', nohp = '$nohp',
                email = '$email', wkt_kejadian = '$waktukejadian', tempat_lapor = '$tmptlapor', tempat_kejadian = '$tmptkejadian', terlapor = '$terlapor'";

        $simpan = update($tabel, $value, $where);

        if ($simpan) {
            echo '<script type="text/javascript">
                    window.alert("Data Berhasil Dirubah");
                    window.location.href="./?page=sklp&act=view"
                 </script>';
        } else {
            echo '<script type="text/javascript">
                    window.alert("Data Gagal Dirubah");
                 </script>';
        }

    }
?>
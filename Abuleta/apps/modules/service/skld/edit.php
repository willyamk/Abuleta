<?php
    $no_surat = $_GET["id"];
    $query = getRecord("tb_skld","*","WHERE no_surat='$no_surat'");
    $row = fetch($query);
?>

<div class="CRUD">
    <article>
        <h2 class="judulCRUD">Edit Lapor Diri</h2>
        <form action="" method="post">
            <div class="tabelCRUD">
                <table cellspacing="0" class="subCRUD">
                    <tr>
                        <th><label for="nama">Nama</label></th>
                        <td><input type="text" name="nama" id="nama" value="<?= $row['nama']; ?>" required></td>
                    </tr>

                    <tr>
                        <th><label for="nik">Nomor Induk Kependudukan</label></th>
                        <td><input type="number" name="nik" id="nik" value="<?= $row['nik']; ?>" required></td>
                    </tr>

                    <tr>
                        <th><label for="tempatTglLahir">Tempat Tgl. Lahir</label></th>
                        <td><input type="text" name="tempatTglLahir" id="tempatTglLahir" value="<?= $row['tempat_tgllahir']; ?>" required></td>
                    </tr>

                    <tr>
                        <th><label for="agama">Agama</label></th>
                        <td><input type="text" name="agama" id="agama" value="<?= $row['agama']; ?>" required></td>
                    </tr>

                    <tr>
                        <th><label for="pekerjaan">Perkerjaan</label></th>
                        <td><input type="text" name="pekerjaan" id="pekerjaan" value="<?= $row['pekerjaan']; ?>" required></td>
                    </tr>
                </table>
            </div>

            <div class="tabelCRUD">
                <table cellspacing="0" class="subCRUD">
                    <tr>
                        <th><label for="nohp">Telpon</label></th>
                        <td><input type="tel" name="nohp" id="nohp" value="<?= $row['nohp']; ?>" required></td>
                    </tr>

                    <tr>
                        <th><label for="alamat">Alamat</label></th>
                        <td><input type="text" name="alamat" id="alamat" value="<?= $row['alamat']; ?>" required></td>
                    </tr>

                    <tr>
                        <th><label for="kotakab">Kota/Kabupaten</label></th>
                        <td><input type="text" name="kotakab" id="kotakab" value="<?= $row['kotakab']; ?>" required></td>
                    </tr>

                    <tr>
                        <th><label for="kec">Kecamatan</label></th>
                        <td><input type="text" name="kec" id="kec" value="<?= $row['kecamatan']; ?>" required></td>
                    </tr>

                    <tr>
                        <th><label for="kel">Kelurahan</label></th>
                        <td><input type="text" name="kel" id="kel" value="<?= $row['kelurahan']; ?>" required></td>
                    </tr>
                </table>
            </div>

            <table class="buttonCRUD">
                <tr>
                    <td>
                        <button type="submit" name="simpan" class="simpan">Simpan</button>
                        <button type="button" class="batal" onclick="window.location.href='./?page=skld&act=view'">Kembali</button>
                    </td>
                </tr>
            </table>
        </form>
    </article>
</div>

<?php
    if (isset($_POST["simpan"])) {
        $nama = $_POST["nama"];
        $nik = $_POST["nik"];
        $tempattgllhr = $_POST["tempatTglLahir"];
        $agama = $_POST["agama"];
        $pekerjaan = $_POST["pekerjaan"];

        $nohp = $_POST["nohp"];
        $alamat = $_POST["alamat"];
        $kotakab = $_POST["kotakab"];
        $kec = $_POST["kec"];
        $kel = $_POST["kel"];

        $tabel = "tb_skld";
        $where = "no_surat = '$no_surat'";
        $value = "nama = '$nama', nik = '$nik', tempat_tgllahir = '$tempattgllhr', agama = '$agama', pekerjaan = '$pekerjaan', nohp = '$nohp',
                alamat = '$alamat', kotakab = '$kotakab', kecamatan = '$kec', kelurahan = '$kel'";

        $simpan = update($tabel, $value, $where);

        if ($simpan) {
            echo '<script type="text/javascript">
                    window.alert("Data Berhasil Dirubah");
                    window.location.href="./?page=skld&act=view"
                 </script>';
        } else {
            echo '<script type="text/javascript">
                    window.alert("Data Gagal Dirubah");
                 </script>';
        }
    }
?>
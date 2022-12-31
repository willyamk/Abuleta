<?php
    $no_surat = $_GET["id"];
    $query = getRecord("tb_skck","*","WHERE no_surat='$no_surat'");
    $row = fetch($query);
?>

<div class="CRUD">
    <article>
        <h2 class="judulCRUD">Edit Catatan Kepolisian</h2>
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
                        <th><label for="nokk">Nomor Kartu Keluarga</label></th>
                        <td><input type="number" name="nokk" id="nokk" value="<?= $row['nokk']; ?>" required></td>
                    </tr>

                    <tr>
                        <th><label for="kebangsaan">Kebangsaan</label></th>
                        <td><input type="text" name="kebangsaan" id="kebangsaan" value="<?= $row['kebangsaan']; ?>" required></td>
                    </tr>

                    <tr>
                        <th><label for="agama">Agama</label></th>
                        <td><input type="text" name="agama" id="agama" value="<?= $row['agama']; ?>" required></td>
                    </tr>
                </table>
            </div>

            <div class="tabelCRUD">
                <table cellspacing="0" class="subCRUD">
                    <tr>
                        <th><label for="tempatTglLahir">Tempat Tgl. Lahir</label></th>
                        <td><input type="text" name="tempatTglLahir" id="tempatTglLahir" value="<?= $row['tempat_tgllahir']; ?>" required></td>
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
                        <th><label for="jenisKelamin">Jenis Kelamin</label></th>
                        <td>
                            <?php
                                $jk = $row['jk'];
                                if($jk == "Laki - Laki"){ $select_1 = "selected"; } else { $select_1 = ""; }
                                if($jk == "Perempuan"){ $select_2 = "selected"; } else { $select_2 = ""; }
                            ?>
                            <select name="jk" id="jk" required>
                                <option value="">- Pilih Jenis Kelamin -</option>
                                <option value="Laki - Laki" <?= $select_1; ?>> Laki - Laki</option>
                                <option value="Perempuan" <?= $select_2; ?>> Perempuan</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th><label for="kotakab">Kota/Kabupaten</label></th>
                        <td><input type="text" name="kotakab" id="kotakab" value="<?= $row['kotakab']; ?>" required></td>
                    </tr>
                </table>
            </div>

            <table class="buttonCRUD">
                <tr>
                    <td>
                        <button type="submit" name="simpan" class="simpan">Simpan</button>
                        <button type="button" class="batal" onclick="window.location.href='./?page=skck&act=view'">Kembali</button>
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
        $nokk = $_POST["nokk"];
        $kebangsaan = $_POST["kebangsaan"];
        $agama = $_POST["agama"];

        $tempattgllhr = $_POST["tempatTglLahir"];
        $pekerjaan = $_POST["pekerjaan"];
        $alamat = $_POST["alamat"];
        $jk = $_POST["jk"];
        $kotakab = $_POST["kotakab"];

        $tabel = "tb_skck";
        $where = "no_surat = '$no_surat'";
        $value = "nama = '$nama', nik = '$nik', nokk = '$nokk', pekerjaan = '$pekerjaan', kebangsaan = '$kebangsaan', agama = '$agama',
                tempat_tgllahir = '$tempattgllhr', alamat = '$alamat', jk = '$jk', kotakab = '$kotakab'";

        $simpan = update($tabel, $value, $where);

        if ($simpan) {
            echo '<script type="text/javascript">
                    window.alert("Data Berhasil Dirubah");
                    window.location.href="./?page=skck&act=view"
                 </script>';
        } else {
            echo '<script type="text/javascript">
                    window.alert("Data Gagal Dirubah");
                 </script>';
        }
    }
?>
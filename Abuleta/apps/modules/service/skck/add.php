<?php
$no_surat = AutoNumber();
?>
<div class="CRUD">
    <article>
        <h2 class="judulCRUD">Buat Catatan Kepolisian</h2>
        <form action="" method="post">
            <div class="tabelCRUD">
                <table cellspacing="0" class="subCRUD">
                    <tr>
                        <th><label for="nama">Nama</label></th>
                        <td><input type="text" name="nama" id="nama" value="" placeholder="Nama Lengkap" required></td>
                    </tr>

                    <tr>
                        <th><label for="nik">Nomor Induk Kependudukan</label></th>
                        <td><input type="text" name="nik" id="nik" value="" placeholder="Nomor Induk Kependudukan" required></td>
                    </tr>

                    <tr>
                        <th><label for="nokk">Nomor Kartu Keluarga</label></th>
                        <td><input type="text" name="nokk" id="nokk" value="" placeholder="Nomor Kartu Keluarga" required></td>
                    </tr>

                    <tr>
                        <th><label for="kebangsaan">Kebangsaan</label></th>
                        <td><input type="text" name="kebangsaan" id="kebangsaan" value="" placeholder="Kebangsaan" required></td>
                    </tr>

                    <tr>
                        <th><label for="agama">Agama</label></th>
                        <td><input type="text" name="agama" id="agama" value="" placeholder="Agama" required></td>
                    </tr>
                </table>
            </div>

            <div class="tabelCRUD">
                <table cellspacing="0" class="subCRUD">
                    <tr>
                        <th><label for="tempatTglLahir">Tempat/Tgl. Lahir</label></th>
                        <td><input type="text" name="tempatTglLahir" id="tempatTglLahir" value="" placeholder="Tempat/Tanggal Lahir" required></td>
                    </tr>

                    <tr>
                        <th><label for="pekerjaan">Pekerjaan</label></th>
                        <td><input type="text" name="pekerjaan" id="pekerjaan" value="" placeholder="Pekerjaan" required></td>
                    </tr>

                    <tr>
                        <th><label for="alamat">Alamat</label></th>
                        <td><input type="text" name="alamat" id="alamat" value="" placeholder="Alamat" required></td>
                    </tr>

                    <tr>
                        <th><label for="jk">Jenis Kelamin</label></th>
                        <td>
                            <select name="jk" id="jk" required>
                                <option value="">- Pilih Jenis Kelamin -</option>
                                <option value="Laki - Laki"> Laki - Laki</option>
                                <option value="Perempuan"> Perempuan</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th><label for="kotakab">Kota/Kabupaten</label></th>
                        <td><input type="text" name="kotakab" id="kotakab" value="" placeholder="Kota/Kabupaten" required></td>
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
function AutoNumber()
{
    $query  = getRecord("tb_skck", "MAX(RIGHT(no_surat, 4)) AS kode", "");
    $row    = fetch($query);
    $nomor  = (int) $row['kode'] + 1;
    $p      = strlen($nomor);
    $nol_plus = "";

    for ($i = 1; $i <= 4 - $p; $i++) {
        $nol_plus .= "0";
    }

    $no_surat = "SKCK" . $nol_plus . $nomor;

    return $no_surat;
}

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
    $field = "(no_surat, nama, nik, nokk, pekerjaan, kebangsaan, agama, tempat_tgllahir, alamat, jk, kotakab)";
    $value = "('$no_surat', '$nama', '$nik', '$nokk', '$pekerjaan', '$kebangsaan', '$agama',
                '$tempattgllhr', '$alamat', '$jk', '$kotakab')";

    $simpan = insert($tabel, $field, $value);

    if ($simpan) {
        echo '<script type="text/javascript">
                    window.alert("Data Berhasil Disimpan");
                    window.location.href="./?page=skck&act=view"
                  </script>';
    } else {
        echo '<script type="text/javascript">
                    window.alert("Data Gagal Disimpan");
                </script>';
    }
}
?>
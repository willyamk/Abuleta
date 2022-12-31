<?php
$no_surat = AutoNumber();
?>

<div class="CRUD">
    <article>
        <h2 class="judulCRUD">Buat Lapor Diri</h2>
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
                        <th><label for="tempatTglLahir">Tempat / Tgl. Lahir</label></th>
                        <td><input type="text" name="tempatTglLahir" id="tempatTglLahir" value="" placeholder="Tempat / Tanggal Lahir" required></td>
                    </tr>

                    <tr>
                        <th><label for="agama">Agama</label></th>
                        <td><input type="text" name="agama" id="agama" value="" placeholder="Agama" required></td>
                    </tr>

                    <tr>
                        <th><label for="pekerjaan">Perkerjaan</label></th>
                        <td><input type="text" name="pekerjaan" id="pekerjaan" value="" placeholder="Pekerjaan" required></td>
                    </tr>
                </table>
            </div>

            <div class="tabelCRUD">
                <table cellspacing="0" class="subCRUD">
                    <tr>
                        <th><label for="tlp">Telpon</label></th>
                        <td><input type="tel" name="nohp" id="nohp" value="" placeholder="Nomor Telpon" required></td>
                    </tr>

                    <tr>
                        <th><label for="alamat">Alamat</label></th>
                        <td><input type="text" name="alamat" id="alamat" value="" placeholder="Alamat" required></td>
                    </tr>

                    <tr>
                        <th><label for="kotakab">Kota/Kabupaten</label></th>
                        <td><input type="text" name="kotakab" id="kotakab" value="" placeholder="Kota/Kabupaten" required></td>
                    </tr>

                    <tr>
                        <th><label for="kec">Kecamatan</label></th>
                        <td><input type="text" name="kec" id="kec" value="" placeholder="Kecamatan" required></td>
                    </tr>

                    <tr>
                        <th><label for="kel">Kelurahan</label></th>
                        <td><input type="text" name="kel" id="kel" value="" placeholder="Kelurahan" required></td>
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
function AutoNumber()
{
    $query  = getRecord("tb_skld", "MAX(RIGHT(no_surat, 4)) AS kode", "");
    $row    = fetch($query);
    $nomor  = (int) $row['kode'] + 1;
    $p      = strlen($nomor);
    $nol_plus = "";

    for ($i = 1; $i <= 4 - $p; $i++) {
        $nol_plus .= "0";
    }

    $no_surat = "SKLD" . $nol_plus . $nomor;

    return $no_surat;
}

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
    $field = "(no_surat, nama, nik, tempat_tgllahir, agama, pekerjaan, nohp, alamat, kotakab, kecamatan, kelurahan)";
    $value = "('$no_surat', '$nama', '$nik', '$tempattgllhr', '$agama', '$pekerjaan', '$nohp',
                '$alamat', '$kotakab', '$kec', '$kel')";

    $simpan = insert($tabel, $field, $value);

    if ($simpan) {
        echo '<script type="text/javascript">
                    window.alert("Data Berhasil Disimpan");
                    window.location.href="./?page=skld&act=view"
                  </script>';
    } else {
        echo '<script type="text/javascript">
                    window.alert("Data Gagal Disimpan");
                </script>';
    }
}
?>
<?php
$no_surat = AutoNumber();
$no = 1;
$user = $_SESSION['login'];
?>

<div class="CRUD">
    <article>
        <h2 class="judulCRUD">Buat Laporan</h2>
        <form action="" method="post">
            <div class="tabelCRUD">
                <table cellspacing="0" class="subCRUD">
                    <tr>
                        <th><label for="nama">Nama</label></th>
                        <td><input type="text" name="nama" id="nama" value="" placeholder="Nama Lengkap" required></td>
                    </tr>

                    <tr>
                        <th><label for="tempatTglLahir">Tempat / Tgl. Lahir</label></th>
                        <td><input type="text" name="tempatTglLahir" id="tempatTglLahir" value="" placeholder="Tempat / Tanggal Lahir" required></td>
                    </tr>

                    <tr>
                        <th><label for="email">Email</label></th>
                        <td><input type="email" name="email" id="email" value="" placeholder="contoh@gmail.com" required></td>
                    </tr>

                    <tr>
                        <th><label for="alamat">Alamat</label></th>
                        <td><input type="text" name="alamat" id="alamat" placeholder="Alamat" required></td>
                    </tr>

                    <tr>
                        <th><label for="telp">Telp.</label></th>
                        <td><input type="tel" name="telp" id="telp" placeholder="No. Telpon" required></td>
                    </tr>
                </table>
            </div>

            <div class="tabelCRUD">
                <table cellspacing="0" class="subCRUD">
                    <tr>
                        <th><label for="pekerjaan">Pekerjaan</label></th>
                        <td><input type="text" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan" required></td>
                    </tr>

                    <tr>
                        <th><label for="waktuKejadian">Waktu Kejadian</label></th>
                        <td><input type="datetime-local" name="waktuKejadian" id="waktuKejadian" required></td>
                    </tr>

                    <tr>
                        <th><label for="tmpLapor">Tempat Lapor</label></th>
                        <td><input type="text" name="tmpLapor" id="tmpLapor" placeholder="Tempat Lapor" required></td>
                    </tr>

                    <tr>
                        <th><label for="tempatKejadian">Tempat Kejadian</label></th>
                        <td><input type="text" name="tempatKejadian" id="tempatKejadian" placeholder="Tempat Kejadian" required></td>
                    </tr>

                    <tr>
                        <th><label for="terlapor">Terlapor</label></th>
                        <td><input type="text" name="terlapor" id="terlapor" placeholder="Nama Terlapor" required></td>
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
function AutoNumber()
{
    $query  = getRecord("tb_sklp", "MAX(RIGHT(no_surat, 4)) AS kode", "");
    $row    = fetch($query);
    $nomor  = (int) $row['kode'] + 1;
    $p      = strlen($nomor);
    $nol_plus = "";

    for ($i = 1; $i <= 4 - $p; $i++) {
        $nol_plus .= "0";
    }

    $no_surat = "SKLP" . $nol_plus . $nomor;

    return $no_surat;
}

if (isset($_POST["simpan"])) {

    $nama = $_POST["nama"];
    $tempattgllhr = $_POST["tempatTglLahir"];
    $pekerjaan = $_POST["pekerjaan"];
    $alamat = $_POST["alamat"];
    $nohp = $_POST["telp"];

    $email = $_POST["email"];
    $tmptlapor = $_POST["tmpLapor"];
    $waktukejadian = $_POST["waktuKejadian"];
    $tmptkejadiaan = $_POST["tempatKejadian"];
    $terlapor = $_POST["terlapor"];

    $tabel = "tb_sklp";
    $field = "(no_surat, nama, tempat_tgllahir, pekerjaan, alamat, nohp, email,
                wkt_kejadian, tempat_lapor, tempat_kejadian, terlapor)";
    $value = "('$no_surat', '$nama', '$tempattgllhr', '$pekerjaan', '$alamat', '$nohp',
                '$email', '$waktukejadian', '$tmptlapor', '$tmptkejadiaan', '$terlapor')";

    $simpan = insert($tabel, $field, $value);

    if ($simpan) {
        echo '<script type="text/javascript">
                    window.alert("Data Berhasil Disimpan");
                    window.location.href="./?page=sklp&act=view"
                  </script>';
    } else {
        echo '<script type="text/javascript">
                    window.alert("Data Gagal Disimpan");
                </script>';
    }
}
?>
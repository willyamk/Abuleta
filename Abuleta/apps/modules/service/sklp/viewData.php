<?php
    $no_surat = $_GET["id"];

    $tabel = 'tb_sklp';
    $field = '*';
    $where = "WHERE no_surat = '$no_surat'";
    $query = getRecord($tabel , $field , $where);

    $row = fetch($query);
?>

<div class="CRUD">
    <article>
        <h2 class="judulCRUD">Detail Laporan</h2>
        <form action="" method="post">
            <div class="tabelCRUD">
                <table cellspacing="0" class="subCRUD">
                    <tr>
                        <th><label for="nama">Nama</label></th>
                        <td><input type="text" name="nama" id="nama" value="<?= $row['nama']; ?>" readonly="true"></td>
                    </tr>

                    <tr>
                        <th><label for="tempatTglLahir">Tempat/Tgl. Lahir</label></th>
                        <td><input type="text" name="tempatTglLahir" id="tempatTglLahir" value="<?= $row['tempat_tgllahir']?>" readonly="true"></td>
                    </tr>

                    <tr>
                        <th><label for="pekerjaan">Pekerjaan</label></th>
                        <td><input type="text" name="pekerjaan" id="pekerjaan" value="<?= $row['pekerjaan']; ?>" readonly="true"></td>
                    </tr>

                    <tr>
                        <th><label for="alamat">Alamat</label></th>
                        <td><input type="text" name="alamat" id="alamat" value="<?= $row['alamat']; ?>" readonly="true"></td>
                    </tr>

                    <tr>
                        <th><label for="telp">Telp.</label></th>
                        <td><input type="tel" name="telp" id="telp" value="<?= $row['nohp']; ?>" readonly="true"></td>
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
                        <td><input type="text" name="tmpLapor" id="tmpLapor" value="<?= $row['tempat_lapor']; ?>" readonly="true"></td>
                    </tr>

                    <tr>
                        <th><label for="waktuKejadian">Waktu Kejadian</label></th>
                        <td><input type="text" name="waktuKejadian" id="waktuKejadian" value="<?= $row['wkt_kejadian']; ?>" readonly="true"></td>
                    </tr>

                    <tr>
                        <th><label for="tempatKejadian">Tempat Kejadian</label></th>
                        <td><input type="text" name="tempatKejadian" id="tempatKejadian" value="<?= $row['tempat_kejadian']; ?>" readonly="true"></td>
                    </tr>

                    <tr>
                        <th><label for="terlapor">Terlapor</label></th>
                        <td><input type="text" name="terlapor" id="terlapor" value="<?= $row['terlapor']; ?>" readonly="true"></td>
                    </tr>
                </table>
            </div>

            <table class="buttonCRUD">
                <tr>
                    <td>
                        <button type="button" class="batal"
                            onclick="window.location.href='./?page=sklp&act=view'">Kembali</button>
                    </td>
                </tr>
            </table>
        </form>
    </article>
</div>
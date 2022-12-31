<?php
    $no_surat = $_GET["id"];

    $tabel = 'tb_skld';
    $field = '*';
    $where = "WHERE no_surat = '$no_surat'";
    $query = getRecord($tabel , $field , $where);

    $row = fetch($query);
?>

<div class="CRUD">
    <article>
        <h2 class="judulCRUD">Detail Lapor Diri</h2>
        <form action="" method="post">
            <div class="tabelCRUD">
                <table cellspacing="0" class="subCRUD">
                    <tr>
                        <th><label for="nama">Nama</label></th>
                        <td><input type="text" name="nama" id="nama" value="<?= $row['nama']; ?>" readonly = "true"></td>
                    </tr>

                    <tr>
                        <th><label for="nik">Nomor Induk Kependudukan</label></th>
                        <td><input type="text" name="nik" id="nik" value="<?= $row['nik']; ?>" readonly = "true"></td>
                    </tr>

                    <tr>
                        <th><label for="tempatTglLahir">Tempat Tgl. Lahir</label></th>
                        <td><input type="text" name="tempatTglLahir" id="tempatTglLahir" value="<?= $row['tempat_tgllahir']; ?>" readonly = "true"></td>
                    </tr>

                    <tr>
                        <th><label for="agama">Agama</label></th>
                        <td><input type="text" name="agama" id="agama" value="<?= $row['agama']; ?>" readonly = "true"></td>
                    </tr>

                    <tr>
                        <th><label for="perkerjaan">Perkerjaan</label></th>
                        <td><input type="text" name="perkerjaan" id="perkerjaan" value="<?= $row['pekerjaan']; ?>" readonly = "true"></td>
                    </tr>
                </table>
            </div>

            <div class="tabelCRUD">
                <table cellspacing="0" class="subCRUD">
                    <tr>
                        <th><label for="nohp">Telpon</label></th>
                        <td><input type="tel" name="nohp" id="nohp" value="<?= $row['nohp']; ?>" readonly = "true"></td>
                    </tr>

                    <tr>
                        <th><label for="alamat">Alamat</label></th>
                        <td><input type="text" name="alamat" id="alamat" value="<?= $row['alamat']; ?>" readonly = "true"></td>
                    </tr>

                    <tr>
                        <th><label for="kotakab">Kota/Kabupaten</label></th>
                        <td><input type="text" name="kotakab" id="kotakab" value="<?= $row['kotakab']; ?>" readonly = "true"></td>
                    </tr>

                    <tr>
                        <th><label for="kec">Kecamatan</label></th>
                        <td><input type="text" name="kec" id="kec" value="<?= $row['kecamatan']; ?>" readonly = "true"></td>
                    </tr>

                    <tr>
                        <th><label for="kelurahan">Kelurahan</label></th>
                        <td><input type="text" name="kel" id="kel" value="<?= $row['kelurahan']; ?>" readonly = "true"></td>
                    </tr>
                </table>
            </div>

            <table class="buttonCRUD">
                <tr>
                    <td>
                        <button type="button" class="batal" onclick="window.location.href='./?page=skld&act=view'">Kembali</button>
                    </td>
                </tr>
            </table>
        </form>
    </article>
</div>
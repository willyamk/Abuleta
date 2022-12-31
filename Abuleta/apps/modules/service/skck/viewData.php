<?php
    $no_surat = $_GET["id"];

    $tabel = 'tb_skck';
    $field = '*';
    $where = "WHERE no_surat = '$no_surat'";
    $query = getRecord($tabel , $field , $where);

    $row = fetch($query);
?>

<div class="CRUD">
    <article>
        <h2 class="judulCRUD">Detail Catatan Kepolisian</h2>
        <form action="" method="post">
            <div class="tabelCRUD">
                <table cellspacing="0" class="subCRUD">
                    <tr>
                        <th><label for="nama">Nama</label></th>
                        <td><input type="text" name="nama" id="nama" value="<?= $row['nama']; ?>" readonly="true"></td>
                    </tr>

                    <tr>
                        <th><label for="nik">Nomor Induk Kependudukan</label></th>
                        <td><input type="text" name="nik" id="nik" value="<?= $row['nik']; ?>" readonly="true"></td>
                    </tr>

                    <tr>
                        <th><label for="nokk">Nomor Kartu Keluarga</label></th>
                        <td><input type="text" name="nokk" id="nokk" value="<?= $row['nokk']; ?>" readonly="true"></td>
                    </tr>

                    <tr>
                        <th><label for="kebangsaan">Kebangsaan</label></th>
                        <td><input type="text" name="kebangsaan" id="kebangsaan" value="<?= $row['kebangsaan']; ?>" readonly="true"></td>
                    </tr>

                    <tr>
                        <th><label for="agama">Agama</label></th>
                        <td><input type="text" name="agama" id="agama" value="<?= $row['agama']; ?>" readonly="true"></td>
                    </tr>
                </table>
            </div>

            <div class="tabelCRUD">
                <table cellspacing="0" class="subCRUD">
                    <tr>
                        <th><label for="tempatTglLahir">Tempat Tgl. Lahir</label></th>
                        <td><input type="text" name="tempatTglLahir" id="tempatTglLahir" value="<?= $row['tempat_tgllahir']; ?>" readonly="true"></td>
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
                        <th><label for="jenisKelamin">Jenis Kelamin</label></th>
                        <td><input type="text" name="jenisKelamin" id="jenisKelamin" value="<?= $row['jk']; ?>" readonly="true"></td>
                    </tr>

                    <tr>
                        <th><label for="kota/kabupaten">Kota/Kabupaten</label></th>
                        <td><input type="text" name="kota/kabupaten" id="kota/kabupaten" value="<?= $row['kotakab']; ?>" readonly="true"></td>
                    </tr>
                </table>
            </div>

            <table class="buttonCRUD">
                <tr>
                    <td>
                        <button type="button" class="batal" onclick="window.location.href='./?page=skck&act=view'">Kembali</button>
                    </td>
                </tr>
            </table>
        </form>
    </article>
</div>
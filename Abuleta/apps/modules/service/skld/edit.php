<div class="CRUD">
    <article>
        <h2 class="judulCRUD">Edit Lapor Diri</h2>
        <form action="" method="post">
            <div class="tabelCRUD">
                <table cellspacing="0" class="subCRUD">
                    <tr>
                        <th><label for="nama">Nama</label></th>
                        <td><input type="text" name="nama" id="nama" value="" required></td>
                    </tr>

                    <tr>
                        <th><label for="nik">Nomor Induk Kependudukan</label></th>
                        <td><input type="text" name="nik" id="nik" value="" required></td>
                    </tr>

                    <tr>
                        <th><label for="tempatTglLahir">Tempat Tgl. Lahir</label></th>
                        <td><input type="text" name="tempatTglLahir" id="tempatTglLahir" value="" required></td>
                    </tr>

                    <tr>
                        <th><label for="agama">Agama</label></th>
                        <td><input type="text" name="agama" id="agama" value="" required></td>
                    </tr>

                    <tr>
                        <th><label for="perkerjaan">Perkerjaan</label></th>
                        <td><input type="text" name="perkerjaan" id="perkerjaan" value="" required></td>
                    </tr>
                </table>
            </div>

            <div class="tabelCRUD">
                <table cellspacing="0" class="subCRUD">
                    <tr>
                        <th><label for="tlp">Telpon</label></th>
                        <td><input type="tel" name="tlp" id="tlp" value="" required></td>
                    </tr>

                    <tr>
                        <th><label for="alamay">Alamat</label></th>
                        <td><input type="text" name="alamay" id="alamay" value="" required></td>
                    </tr>

                    <tr>
                        <th><label for="kota/kabupaten">Kota/Kabupaten</label></th>
                        <td><input type="text" name="kota/kabupaten" id="kota/kabupaten" value="" required></td>
                    </tr>

                    <tr>
                        <th><label for="kecamatan">Kecamatan</label></th>
                        <td><input type="text" name="kecamatan" id="kecamatan" value="" required></td>
                    </tr>

                    <tr>
                        <th><label for="kelurahan">Kelurahan</label></th>
                        <td><input type="text" name="kelurahan" id="kelurahan" value="" required></td>
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
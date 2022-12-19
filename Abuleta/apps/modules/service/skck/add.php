<div class="CRUD">
    <article>
        <h2 class="judulCRUD">Buat Catatan Kepolisian</h2>
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
                        <th><label for="nomorKK">Nomor Kartu Keluarga</label></th>
                        <td><input type="text" name="nomorKK" id="nomorKK" value="" required></td>
                    </tr>

                    <tr>
                        <th><label for="kebangsaan">Kebangsaan</label></th>
                        <td><input type="text" name="kebangsaan" id="kebangsaan" value="" required></td>
                    </tr>

                    <tr>
                        <th><label for="agama">Agama</label></th>
                        <td><input type="text" name="agama" id="agama" value="" required></td>
                    </tr>
                </table>
            </div>

            <div class="tabelCRUD">
                <table cellspacing="0" class="subCRUD">
                    <tr>
                        <th><label for="tempatTglLahir">Tempat Tgl. Lahir</label></th>
                        <td><input type="text" name="tempatTglLahir" id="tempatTglLahir" value="" required></td>
                    </tr>

                    <tr>
                        <th><label for="pekerjaan">Pekerjaan</label></th>
                        <td><input type="text" name="pekerjaan" id="pekerjaan" value="" required></td>
                    </tr>

                    <tr>
                        <th><label for="alamay">Alamat</label></th>
                        <td><input type="text" name="alamay" id="alamay" value="" required></td>
                    </tr>

                    <tr>
                        <th><label for="jenisKelamin">Jenis Kelamin</label></th>
                        <td><input type="text" name="jenisKelamin" id="jenisKelamin" value="" required></td>
                    </tr>

                    <tr>
                        <th><label for="kota/kabupaten">Kota/Kabupaten</label></th>
                        <td><input type="text" name="kota/kabupaten" id="kota/kabupaten" value="" required></td>
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
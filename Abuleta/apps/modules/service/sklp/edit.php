<div class="CRUD">
    <article>
        <h2 class="judulCRUD">Edit Laporan</h2>
        <form action="" method="post">
            <div class="tabelCRUD">
                <table cellspacing="0" class="subCRUD">
                    <tr>
                        <th><label for="nama">Nama</label></th>
                        <td><input type="text" name="nama" id="nama" value="" required></td>
                    </tr>

                    <tr>
                        <th><label for="tempatTglLahir">Tempat/Tgl. Lahir</label></th>
                        <td><input type="text" name="tempatTglLahir" id="tempatTglLahir" value="" required></td>
                    </tr>

                    <tr>
                        <th><label for="pekerjaan">Pekerjaan</label></th>
                        <td><input type="text" name="pekerjaan" id="pekerjaan" value="" required></td>
                    </tr>

                    <tr>
                        <th><label for="alamat">Alamat</label></th>
                        <td><input type="text" name="alamat" id="alamat" value="" required></td>
                    </tr>

                    <tr>
                        <th><label for="telp">Telp.</label></th>
                        <td><input type="tel" name="telp" id="telp" value="" required></td>
                    </tr>
                </table>
            </div>

            <div class="tabelCRUD">
                <table cellspacing="0" class="subCRUD">
                    <tr>
                        <th><label for="email">Email</label></th>
                        <td><input type="email" name="email" id="email" value="" required></td>
                    </tr>

                    <tr>
                        <th><label for="tmpLapor">Tempat Lapor</label></th>
                        <td><input type="text" name="tmpLapor" id="tmpLapor" value="" required></td>
                    </tr>

                    <tr>
                        <th><label for="waktuKejadian">Waktu Kejadian</label></th>
                        <td><input type="text" name="waktuKejadian" id="waktuKejadian" value="" required></td>
                    </tr>

                    <tr>
                        <th><label for="tempatKejadian">Tempat Kejadian</label></th>
                        <td><input type="text" name="tempatKejadian" id="tempatKejadian" value="" required></td>
                    </tr>

                    <tr>
                        <th><label for="terlapor">Terlapor</label></th>
                        <td><input type="text" name="terlapor" id="terlapor" value="" required></td>
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
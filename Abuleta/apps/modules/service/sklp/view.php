<h2 class="subServiveJudul">Surat Keterangan Lapor Polisi</h2>

<form action="" method="POST">
    <div class="btn-nav">
        <button type="button" name="tambah" onclick="window.location.href='./?page=sklp&act=add'">Tambah</button>
        <button type="button" name="kembali" onclick="window.location.href='./?page=service'">Kembali</button>
    </div>
    <div class="filter">
        <input type="text" name="filter" value="" placeholder="Telusuri Nomor Surat">
        <button type="submit" name="search">
            <span class="material-icons">search</span>
        </button>
    </div>
</form>

<table border="1" cellspacing="0" width="100%">
    <tr>
        <th class="sklp no">No</th>
        <th class="sklp nomor">Nomor Surat</th>
        <th class="sklp jenis">Jenis Surat</th>
        <th class="sklp pelapor">Pelapor</th>
        <th class="sklp tanggal">Tanggal Lapor</th>
        <th class="sklp waktu">Waktu Lapor</th>
        <th class="sklp aksi">Aksi</th>
    </tr>

    <tr>
        <td class="no">1</td>
        <td class="nomor">SKLP001</td>
        <td class="jenis">Surat Keterangan Lapor Polisi</td>
        <td class="pelapor">William Amiko</td>
        <td class="tanggal">Senin</td>
        <td class="waktu">17.30 WIB</td>
        <td class="aksi">
            <div class="aksi-ancor">
                <a href="./?page=sklp&act=viewData">
                    <span class="viewData material-icons">visibility</span>
                </a>
                <a href="./?page=sklp&act=edit">
                    <span class="edit material-icons">edit</span>
                </a>
                <a href="./?page=sklp&act=delete">
                    <span class="delete material-icons">delete</span>
                </a>
            </div>
        </td>
    </tr>
</table>
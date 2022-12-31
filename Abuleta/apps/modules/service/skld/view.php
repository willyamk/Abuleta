<?php
$filter = isset($_POST["filter"]) ? $_POST["filter"] : '';
?>

<h2 class="subServiveJudul">Surat Keterangan Lapor Diri</h2>

<form action="" method="POST">
    <div class="btn-nav">
        <button type="button" name="tambah" onclick="window.location.href='./?page=skld&act=add'">Tambah</button>
        <button type="button" name="kembali" onclick="window.location.href='./?page=service'">Kembali</button>
    </div>
    <div class="filter">
        <input type="text" name="filter" value="" placeholder="Telusuri Nomor Surat / Pelapor">
        <button type="submit" name="search">
            <span class="material-icons">search</span>
        </button>
    </div>
</form>

<table border="1" cellspacing="0" width="100%">
    <tr>
        <th class="skld no">No</th>
        <th class="skld nomor">Nomor Surat</th>
        <th class="skld jenis">Jenis Surat</th>
        <th class="skld pelapor">Pelapor</th>
        <th class="skld tanggal">Tanggal Lapor</th>
        <th class="skld aksi">Aksi</th>
    </tr>

    <?php
    $no = 1;
    $tabel = 'tb_skld';
    $field = '*';
    $where = "WHERE no_surat LIKE '%$filter%' OR nama LIKE '%$filter%'
        GROUP BY no_surat ORDER BY no_surat ASC LIMIT 0,100";
    $query = getRecord($tabel, $field, $where);

    while ($row = fetch($query)) {
    ?>

        <tr>
            <td class="no"><?= $no; ?></td>
            <td class="nomor"><?= $row['no_surat']; ?></td>
            <td class="jenis">Surat Keterangan Lapor Diri</td>
            <td class="pelapor"><?= $row['nama']; ?></td>
            <td class="tanggal"><?= $row['tgl_lapor']; ?></td>
            <td class="aksi">
                <div class="aksi-ancor">
                    <a href="./?page=skld&act=viewData&id=<?= $row['no_surat']; ?>">
                        <span class="viewData material-icons">visibility</span>
                    </a>
                    <a href="./?page=skld&act=edit&id=<?= $row['no_surat']; ?>">
                        <span class="edit material-icons">edit</span>
                    </a>
                    <a href="./?page=skld&act=delete&id=<?= $row['no_surat']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">
                        <span class="delete material-icons">delete</span>
                    </a>
                </div>
            </td>
        </tr>
    <?php
        $no++;
    }
    ?>
</table>
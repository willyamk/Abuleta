<?php
    $id = $_GET["id"];

    $delete = delete("tb_sklp", "no_surat = '$id'");

    header('location: ./?page=sklp&act=view');
?>
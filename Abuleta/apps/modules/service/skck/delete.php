<?php
    $id = $_GET["id"];

    $delete = delete("tb_skck", "no_surat = '$id'");

    header('location: ./?page=skck&act=view');
?>
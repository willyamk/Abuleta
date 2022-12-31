<?php
    $id = $_GET["id"];

    $delete = delete("tb_skld", "no_surat = '$id'");

    header('location: ./?page=skld&act=view');
?>
<?php
    // Koneksi
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db_name = 'db_abuleta';
    $port = 3306;

    $conn = mysqli_connect($host, $user, $password, $db_name, $port);

    if (mysqli_connect_errno()) {
        echo "Tidak dapat terkoneksi dengan server";
        exit();
    }

    if (!mysqli_select_db($conn, $db_name)) {
        echo "Tidak dapat menemukan database";
        exit();
    }

    function getRecord($tabel,$field,$where){
        global $conn;
        $query = mysqli_query($conn, "SELECT {$field} FROM {$tabel} {$where}");
        return $query;
    }

    function insert($tabel, $field, $value){
        global $conn;
        $query = mysqli_query($conn, "INSERT INTO {$tabel} {$field} VALUES {$value}");
        return $query;
    }

    function update($tabel, $value, $where){
        global $conn;
        $query = mysqli_query($conn, "UPDATE {$tabel} SET {$value} WHERE {$where}");
        return $query;
    }

    function delete($tabel, $where){
        global $conn;
        $query = mysqli_query($conn, "DELETE FROM {$tabel} WHERE {$where}");
        return $query;
    }

    function fetch($query){
        $data = mysqli_fetch_array($query);
        return $data;
    }

    function count_rows($query){
        $count = mysqli_num_rows($query);
        return $count;
    }
?>
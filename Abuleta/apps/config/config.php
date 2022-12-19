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

function registrasi($data)
{
    global $conn;
    $username = htmlspecialchars(stripslashes(strtolower($data["username"])));
    $email = htmlspecialchars($data["email"]);
    $password = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["password"]));
    $confirmpassword = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["confirmpassword"]));


    // Cek Username/Email Sudah Ada Atau Belum
    $result = mysqli_query($conn, "SELECT * FROM tb_users WHERE username = '$username' OR email = '$email'");
    if (mysqli_num_rows($result) > 0) {
        echo "<script> alert('Username atau Email Sudah Ada! Silahkan Coba Yang Lain'); </script>";
        return false;
    } else {
        // Cek Konfirmasi Password
        if ($password == $confirmpassword) {

            // Enskripsi Password
            $username = password_hash($username, PASSWORD_DEFAULT);
            $email = password_hash($email, PASSWORD_DEFAULT);
            $password = password_hash($password, PASSWORD_DEFAULT);

            // Tambahkan Data Baru Ke Dalam Database
            mysqli_query($conn, "INSERT INTO tb_users VALUES('', '$username', '$email', '$password')");
        } else {
            echo "<script> alert('Password tidak cocok! Silahkan masukkan yang benar'); </script>";
        }
    }
    return mysqli_affected_rows($conn);
}

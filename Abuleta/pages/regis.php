<?php
    include '../apps/config/config.php';

    if (isset($_POST["registrasi"])) {
        global $conn;

        $nama = $_POST["nama"];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $confirmpassword = md5($_POST["confirmpassword"]);

        $tabel = "tb_users";
        $field = "(id, nama ,username, email, password)";
        $value = "('', '$nama', '$username', '$email', '$password')";

        // Cek Username/Email Sudah Ada Atau Belum
        $result = mysqli_query($conn, "SELECT * FROM tb_users WHERE username = '$username' OR email = '$email'");

        if (mysqli_num_rows($result) > 0) {
            echo "<script> alert('Username atau Email Sudah Ada! Silahkan Coba Yang Lain'); </script>";
            return false;
        } else {
            // Cek Konfirmasi Password
            if ($password == $confirmpassword) {
                // Tambahkan Data Baru Ke Dalam Database
                $simpan = insert($tabel, $field, $value);

                if ($simpan) {
                    echo "<script>
                        alert('Anda Baru Saja Menambahkan Akun Baru!');
                        document.location.href = 'login.php';
                        </script>";
                }

            } else {
                echo "<script> alert('Password tidak cocok! Silahkan masukkan yang benar'); </script>";
            }
        }
        return mysqli_affected_rows($conn);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abuleta</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">

    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Link CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/styles/css/style.css">
</head>

<body class="loginRegis">
    <div class="form-LR">
        <form action="" method="post">
            <fieldset>
                <h2>Registrasi</h2>
                <div class="underline-title"></div>
                <ul class="ul-navigation">
                    <li>
                        <span class="material-icons">person</span>
                        <label for="username">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" required>
                        <div class="form-border"></div>
                    </li>
                    <li>
                        <span class="material-icons">person</span>
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" required>
                        <div class="form-border"></div>
                    </li>
                    <li>
                        <span class="material-icons">email</span>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required>
                        <div class="form-border"></div>
                    </li>
                    <li>
                        <span class="material-icons">https</span>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                        <div class="form-border"></div>
                    </li>
                    <li>
                        <span class="material-icons">https</span>
                        <label for="confirmpassword">Konfirmasi Password</label>
                        <input type="password" name="confirmpassword" id="confirmpassword" required>
                        <div class="form-border"></div>
                    </li>
                </ul>
                <button type="submit" name="registrasi" class="submit">Registrasi</button>
                <a href="login.php" class="registrasi">Sudah punya akun?</a>
            </fieldset>
        </form>
    </div>

</body>

</html>
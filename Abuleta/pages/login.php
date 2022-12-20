<?php
    session_start();
    include "../apps/config/config.php";

    // Cek Cookie
    if (isset($_COOKIE["id"]) && isset($_COOKIE["key"])) {
        $id = $_COOKIE["id"];
        $key = $_COOKIE["key"];

        // Ambil Data Username - Email Berdasarkan Id
        $result = mysqli_query($conn, "SELECT username OR email FROM tb_users WHERE id = $id");
        $row = mysqli_fetch_assoc($result);

        // Cek Cookie Username - Email
        if ($key === md5($row['username'])) {
            $_SESSION["login"] = true;
        }
    }

    if (isset($_SESSION["login"])) {
        header("Location: ../index.php");
        exit;
    }


    if (isset($_POST["login"])) {
        $usernameemail = $_POST['usernameemail'];
        $password = md5($_POST['password']);

        $tabel = "tb_users";
        $field = "*";
        $where = "WHERE username = '$usernameemail' OR email = '$usernameemail'";
        
        $query = getRecord($tabel, $field, $where);
        $row = fetch($query);

        if (!empty($row)) {
            if ($password == $row['password']) {

                // Set Session

                $_SESSION["login"] = true;
                $_SESSION['login'] = $row['username'];

                // Cek Cookie (Remember Me)
                if (isset($_POST["remember"])) {
    
                    // Buat Cookie
                    setcookie('id', $row['id'], time() + 60, "/", "localhost", 1);
                    setcookie('key', md5($row['username']), time() + 60, "/", "localhost", 1);
                }
                echo "<script> document.location.href = '../index.php'</script>";
                
            } else {
                echo "<script> 
                alert('Password salah! Silahkan masukkan password yang benar!'); 
                </script>";
            }
        } else {
            echo "<script> 
                alert('Username atau Email Tidak Terdaftar!'); 
                </script>";
        }   
        $error = true;
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
                <h2>Login</h2>
                <div class="underline-title"></div>
                <ul class="ul-navigation">
                    <li>
                        <span class="material-icons">person</span>
                        <label for="usernameemail">Username / <span class="material-icons">email</span> Email
                        </label>
                        <input type="text" name="usernameemail" id="usernameemail" required value="">
                        <div class="form-border"></div>
                    </li>
                    <li>
                        <span class="material-icons">https</span>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required value="">
                        <div class="form-border"></div>
                    </li>
                    <li>
                        <div class="rememberme">
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">Remember me</label>
                        </div>
                    </li>
                </ul>
                <a href="#" class="lupa-pass">Lupa Password?</a>
                <button type="submit" name="login" class="submit">Login</button>
                <a href="regis.php" class="registrasi">Belum punya akun?</a>
            </fieldset>
        </form>
    </div>

</body>

</html>
<?php
    session_start();

    if (!isset($_SESSION["login"])) {
        header("Location: ./pages/login.php");
        exit;
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
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- Link CSS -->
    <link rel="stylesheet" type="text/css" href="assets/styles/css/style.css">

    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="assets/js/jquery.js" type="text/javascript"></script>
</head>

<body>
    <div class="container-fluid">
        <header>
            <a href="./" class="icon">
                <img src="assets/img/favicon.png" alt="Cursum" title="cursum">
                <span>Abuleta</span>
            </a>

            <ul class="navigation">
                <li class="nav"><a href="./?page=home">Beranda</a></li>
                <li class="nav"><a href="./?page=service">Layanan</a></li>
                <li class="nav"><a href="./?page=about">Tentang</a></li>
                <li class="account">
                    <div class="action">
                        <div class="profile" onclick="menuToggle();">
                            <i class="fa-regular fa-circle-user"></i>
                        </div>

                        <div class="menu">
                            <h3>
                                <?php
                                    if (isset($_SESSION['login'])){
                                        echo $_SESSION['login'];
                                    }
                                ?>
                                <div>Rekan Abuleta</div>
                            </h3>
                            <ul>
                                <li>
                                    <span class="material-icons">manage_accounts</span>
                                    <a href="#">Pengaturan Akun</a>
                                </li>
                                <li>
                                    <span class="material-icons">logout</span>
                                    <a href="pages/logout.php">Keluar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </header>

        <main>
            <?php
            include "apps/config/config.php";

            $page = isset($_GET['page']) ? $_GET['page'] : '';
            $act = isset($_GET['act']) ? $_GET['act'] : '';

            // router
            if (!empty($page)) {
                if (!empty($act)) {

                    if (file_exists("apps/modules/service/" . $page . "/view.php")) {
                        if (file_exists("apps/modules/service/" . $page . "/" . $act . ".php")) {

                            require("apps/modules/service/" . $page . "/" . $act . ".php");
                        } else {
                            require("apps/modules/service/" . $page . "/view.php");
                        }
                    } else {
                        header("Location: ./pages/404/404.php");
                    }
                } else {
                    if (file_exists("apps/modules/" . $page . "/view.php")) {
                        require("apps/modules/" . $page . "/view.php");

                        if (file_exists("apps/modules/" . $page . "/" . $act . ".php")) {
                            require("apps/modules/" . $page . "/" . $act . ".php");
                        }
                    } else {
                        header("Location: ./pages/404/404.php");
                    }
                }
            } else {
                include 'apps/modules/home/view.php';
            }
            ?>
        </main>

        <footer>
            <div class="footer-content">
                <h3>Abuleta</h3>
                <p>
                    Salam satu komando. Polisi terbaik adalah mereka yang bekerja sepenuh hati,
                    melayani masyarakat dan memberikan perhatian maksimal kepada mereka yang membutuhkan.
                </p>
                <ul class="social">
                    <li><a href="" title="Google"><i class="fa-brands fa-google"></i></a></li>
                    <li><a href="" title="Instagram"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="" title="Facebook"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="" title="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a></li>
                    <li><a href="https://youtu.be/dQw4w9WgXcQ" title="Do not click.. i warned you.." target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="footer-bottom">
                <p>Copyright &copy; 2022 Abuleta | All Rights Reserved</p>
            </div>
        </footer>
    </div>

    <script src="assets/js/script.js"></script>
</body>

</html>
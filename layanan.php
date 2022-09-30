<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        h2 {
            color: #163DA6;
            font-weight: bolder;
            margin: 15px 0 30px 0;
        }

        a {
            color: grey;
        }

        a:hover {
            color: black;
            text-decoration: none;
        }

        .navbar-header span {
            color: #163DA6;
            font-weight: bolder;
            font-size: 20px;
        }

    </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><span>Deteksi</span><span>Covid</span></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="profile.php">Tentang Kami</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Layanan
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="layanan.php">Rapid Test</a></li>
                            <li><a href="layanan.php">Swab Test</a></li>
                        </ul>
                    </li>
                    <li><a href="pemesanan.php" id="pesan">Pemesanan</a></li>
                    <li><a href="index.php">Kontak</a></li>
                    <li><a href="informasi.php">Informasi</a></li>
                    <li><a href="#open-modal-login" id="set_user"><span class="glyphicon glyphicon-user"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="search">
        <div class="containerr text-center">
            <h1 style="font-size: 40px;">Hasil Pencarian untuk COVID-19 Test</h1>
            <p>Informasi nomor dan alamat rumah sakit yang menjadi rujukan pemeriksaan COVID-19</p>
            <form>
                <div class="input-group" style="margin: 20px 200px 0 200px;">
                    <input type="text" class="form-control" size="50" placeholder="COVID-19 Test">
                    <div class="input-group-btn">
                        <button type="button" name="search" class="btn">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <br>
    <br>

    <div class="containerr" style="margin: -100px 0px; margin-left: -100px;">
        <p style="font-size: 13px;"><a href="index.php">Beranda</a> / <b>Akses Layanan Rapid Test atau Swab Test melalui deteksicovid</b></p>
    </div>

    <main class="layanan" id="notsearch">
        <section id="rapid">
            <h2>Rapid Test</h2>
            <div class="flex-container" id="flex-rapid">

            </div>
        </section>
        <br>
        <section id="swab">
            <h2>Swab Test</h2>
            <div class="flex-container" id="flex-swab">

            </div>
        </section>
    </main>
    <br>
    <br>


    <footer class="text-center">
        <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a><br><br>
        <p>Ikuti perkembangan dunia tentang virus covid19 di :</p>
        <a href="https://covid19.who.int/"><img src="IMG/Who.png" width="100" height="100"></a>
        <p>DeteksiCovid ©2020</p>
    </footer>


    <!--    open modal login/register-->
    <div id="open-modal-login" class="modalDialog">
        <div>
            <a href="#close" title="Close" class="close">X</a>
            <section>
                <div class="container">
                    <div class="user signinBx">
                        <div class="imgBx"><img src="IMG/layanan1.png"   alt="" /></div>
                        <div class="formBx">
                            <form action="proses/login.php" method="POST">
                                <h2>LOGIN</h2>
                                <input type="text" name="username" id="usernameLogin" placeholder="Username" />
                                <input type="password" name="password" id="passwordLogin" placeholder="Password" />

                                <input type="submit" name="submit" value="MASUK" onclick="getlocalStorage()" />
                                <p class="signup">
                                    Belum punya akun?
                                    <a onclick="toggleForm();">Daftar Sekarang.</a>
                                </p>
                            </form>
                        </div>
                    </div>
                    <div class="user signupBx">
                        <div class="formBx">
                            <form action="proses/register.php" method="POST">
                                <h2>REGISTER</h2>
                                <input type="text" name="username" id="username" placeholder="Username" />
                                <input type="email" name="email" id="email" placeholder="Email" />
                                <input type="password" name="password" id="password" placeholder="Password" />
                                <input type="text" name="notelp" id="notelp" placeholder="Nomor Telepon" />
                                <input type="submit" name="submit" onclick="addLocalStorage()" value="DAFTAR" />
                                <p class="signup">
                                    Sudah Memiliki Akun?
                                    <a onclick="toggleForm();">Login.</a>
                                </p>
                            </form>
                        </div>
                        <div class="imgBx"><img src="IMG/layanan2.png" alt="" /></div>
                    </div>
                </div>
            </section>
        </div>
    </div>


    <!--    open modal logout-->
    <div id="open-modal-logout" class="modalDialog2">
        <div>
            <a href="#close" title="Close" class="close">X</a>
            <i class="fa fa-user"></i>

            <div class="biodata">
                <h1>Hallo, <?= $_SESSION["username"]?></h1>
                <p><?= $_SESSION["email"]?></p>
                <p><?= $_SESSION["notelp"]?></p>
            </div>

            <a href="proses/logout.php" class="logout" onclick="logout();">LOGOUT</a>


        </div>
    </div>
<script src="rs.js"></script>
<script src="index.js"></script>

</body>

</html>

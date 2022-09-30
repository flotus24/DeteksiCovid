<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        Deteksi Covid
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <style>
        h2 {
            color: #163DA6;
            font-weight: bolder;
            margin: 15px 0 30px 0;
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

    <section id="profile" class="containerr" style="margin-bottom: 0;">
        <h2 style="text-align: center;">Tentang Deteksicovid</h2>
        <div class="thumbnail row">
            <img src="IMG/deteksi.PNG" width="500" height="500">
            <p>DeteksiCovid adalah sebuah company yang berfokus pada layanan pemeriksaan kesehatan dengan kualitas hasil pemeriksaan yang terbaik dan terpercaya. Kami menyadari pentingnya peningkatan kualitas pemeriksaan dalam mengatasi wabah COVID-19. Karena itu kami terus berusaha menyediakan layanan & metode pemeriksaan terbaik untuk masyarakat. Sebagai upaya membantu pemerintah dalam menekan laju peningkatan kasus COVID-19, kini deteksicovid menyediakan layanan rapid test/swab test yang berlokasi di Kota Bandung yang bekerja sama dengan berbagai mitra rumah sakit dan laboratorium.</p>
            <p>Sejalan dengan komitmen tersebut, saat ini DeteksiCovid dapat melayani kebutuhan pemeriksaan laboratorium terkait COVID-19, diantaranya:</p>
            <ol>
                <li>
                    <p>Pemeriksaan Anti SARS-CoV-2 IgM/IgG (Rapid Test)</p>
                    <p>Pemeriksaan ini dilakukan untuk mengetahui keberadaan antibodi IgM & IgG yang terbentuk akibat paparan virus SARS-CoV-2 penyebab COVID-19. Pemeriksaan ini dapat digunakan untuk melakukan skrinning infeksi COVID-19, sesuai dengan Pedoman Pencegahan dan Pengendalian Infeksi COVID-19 revisi ke-4 (Kemenkes, Maret 2020). Sampel yang digunakan adalah serum darah.</p>
                </li>
                <li>
                    <p>Swab test atau tes PCR (Polymerase Chain Reaction)</p>
                    <p>Prosedur pemeriksaan diawali dengan pengambilan sampel dahak, lendir, atau cairan dari nasofaring (bagian antara hidung dan tenggorokan), orofaring (bagian antara mulut dan tenggorokan), atau paru-paru pasien yang diduga terinfeksi virus Corona. Pengambilan sampel dahak ini dilakukan dengan metode swab, yang prosedurnya memakan waktu sekitar 15 detik dan tidak menimbulkan rasa sakit. Selanjutnya, sampel dahak akan diteliti di laboratorium.</p>
                </li>
            </ol>
            <p>Pemeriksaan dilakukan dengan perjanjian sehari sebelumnya. Harap datang pada hari dan jam yang telah ditentukan.</p>
            <a href="index.php #contact"><p>Informasi Layanan Test COVID-19 : </p></a>
            <p><span class="glyphicon glyphicon-map-marker"></span>Bandung, Indonesia</p>
            <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
            <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
        </div>
    </section>

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


    <footer class="text-center">
        <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a><br><br>
        <p>Ikuti perkembangan dunia tentang virus covid19 di :</p>
        <a href="https://covid19.who.int/"><img src="IMG/Who.png" width="100" height="100"></a>
        <p>DeteksiCovid ©2020</p>
    </footer>
    <script src="index.js"></script>
</body>

</html>

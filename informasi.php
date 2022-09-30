<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>DeteksiCovid - Informasi</title>
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

        .btn:hover,
        .btn:focus {
            border: 1px solid #163DA6;
            background-color: #fff;
            color: #163DA6;
        }

        a {
            color: #163DA6;
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
                    <li><a href="index.php #contact">Kontak</a></li>
                    <li><a href="informasi.php">Informasi</a></li>
                    <li><a href="#open-modal-login" id="set_user"><span class="glyphicon glyphicon-user"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="containerr">
        <p style="font-size: 13px;"><a href="index.php">Beranda</a> / <b>Informasi</b></p>
        <h2>Bagaimana Cara Melakukan Rapid Test Melalui DeteksiCovid?</h2>
        <img src="IMG/informasi.PNG" class="center" style="width: 100%">
        <br>
        <p>Cara melakukan rapid test atau swab test melalui Deteksicovid mudah kok. Yuk, ikuti instruksinya berikut ini:</p>
        <ol>
            <li>
                <p>Pertama-tama, klik menu "Layanan" pada homepage Deteksicovid kemudian pilih: <i>Rapid Test</i> atau <i>Swab Test.</i></p>
            </li>
            <li>
                <p>Setelah itu, pilih tempat dan waktu untuk melakukan COVID-19 test ini.</p>
            </li>
            <li>
                <p>Setelah memilih tempat dan waktu untuk melakukan test, klik pilih dan lakukan pemesanan.</p>
            </li>
            <li>
                <p>Jika sudah, kamu akan melanjutkan ke tahap pembayaran. Biaya akan bergantung kepada biaya jasa tenaga medis dan penyediaan alat yang diberikan oleh pihak rumah sakit.</p>
            </li>
            <li>
                <p>Setelah berhasil, maka kamu akan menerima SMS pada nomer yang telah didaftarkan untuk konfirmasi tentang jadwal tes dan detail pemesanan. SMS tersebut harus ditunjukkan kepada petugas medis saat melakukan pemeriksaan.</p>
            </li>
        </ol>
        <br>
        <h2>Apa yang Harus Dilakukan Setelah Hasil Rapid Test COVID-19 Keluar?</h2>
        <ol>
            <li>
                <p>Kapan hasil test akan keluar?</p>
                <p>Setelah melakukan pemeriksaan, hasil <i>swab/rapid test</i> akan dikirimkan dalam bentuk surat resmi satu hari setelahnya.</p>
            </li>
            <li>
                <p>Jika hasilnya positif?</p>
                <p>Sebaiknya segera kembali melakukan konsultasi dengan dokter di layanan kesehatan terdekat. Jika dokter mengatakan bahwa gejala yang dialami masih ringan, maka kamu akan diminta untuk melakukan isolasi mandiri di rumah.</p>
            </li>
            <li>
                <p>Jika hasilnya gejala sedang atau berat?</p>
                <p>Sementara, jika dokter mengatakan bahwa kamu memiliki tingkatan gejala sedang atau berat, maka kamu akan dirujuk untuk ke rumah sakit khusus penanganan COVID-19 untuk mendapatkan perawatan intensif.</p>
            </li>
            <li>
                <p>Jadi, siapa saja yang perlu melakukan rapid test?</p>
                <p>Jika kamu atau orang terdekat kamu memiliki gejala yang mirip dengan COVID-19, kini saatnya untuk memastikan kesehatan kamu dengan melakukan test COVID-19 hanya di Deteksicovid.</p>
            </li>
        </ol>
        <p style="margin-left: 20px;">Selain mudah dan praktis, melakukan <i>rapid test</i> atau <i>swab test</i> dengan Deteksicovid dijamin aman. Perhatikan <a href="#sk">syarat dan ketentuan</a> yang berlaku.</p>
        <div class="thumbnail text-center" style="padding: 50px 80px; font-size: 16px; margin: 50px auto;">
            <h2 class="text-center">Kamu Bisa Rapid Test atau Swab Test COVID-19 Lewat DeteksiCovid!</h2>
            <a href="layanan.php"><button class="btn" data-toggle="modal" data-target="#myModal">Klik Di Sini</button></a>
        </div>

        <hr style="margin-bottom: 50px;">
        <h2 id="sk">Syarat dan Ketentuan</h2>
        <ol>
            <li>
                <p>Pemeriksaan <i>Swab Test</i> & <i>Rapid Test</i> dilakukan di lokasi yang diinginkan customer sesuai cakupan area Deteksicovid dengan melakukan pemesanan dan konfirmasi lokasi test melalui <i>website</i> Deteksicovid.</p>
            </li>
            <li>
                <p>Biaya yang dibayarkan adalah paket pemeriksaan yang sudah meliputi <i>Swab test/Rapid Test</i>, Jasa Medis, APD Tenaga Medis, Surat Hasil Test dan biaya administrasi.</p>
            </li>
            <li>
                <p>Pemesanan yang sudah dibayar tidak dapat dibatalkan.</p>
            </li>
            <li>
                <p>Hasil <i>Swab Test/Rapid Test</i> akan dikirimkan dalam bentuk surat resmi.</p>
            </li>
            <li>
                <p>Pendaftaran dan pembayaran administrasi dilakukan melalui <i>website</i> Deteksicovid paling lambat 1x24 jam setelah booking atau 1 hari sebelum pemeriksaan.</p>
            </li>
            <li>
                <p>Pasien wajib menunjukan KTP, kode <i>booking</i> dan detail pemesanan kepada petugas rekanan Deteksicovid.</p>
            </li>
        </ol>
        <hr style="margin-top: 50px;">
    </div>

    <footer class="text-center" style="margin-top: -100px;">
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
                        <div class="imgBx"><img src="IMG/layanan1.png" alt="" /></div>
                        <div class="formBx">
                            <form action="proses/login.php" method="POST">
                                <h2>Sign In</h2>
                                <input type="text" name="username" id="usernameLogin" placeholder="Username" />
                                <input type="password" name="password" id="passwordLogin" placeholder="Password" />

                                <input type="submit" name="submit" value="Login" onclick="getlocalStorage()" />
                                <p class="signup">
                                    Don't have an account ?
                                    <a onclick="toggleForm();">Sign Up.</a>
                                </p>
                            </form>
                        </div>
                    </div>
                    <div class="user signupBx">
                        <div class="formBx">
                            <form action="proses/register.php" method="POST">
                                <h2>Create an account</h2>
                                <input type="text" name="username" id="username" placeholder="Username" />
                                <input type="email" name="email" id="email" placeholder="Email Address" />
                                <input type="password" name="password" id="password" placeholder="Create Password" />
                                <input type="text" name="notelp" id="notelp" placeholder="Phone Number" />
                                <input type="submit" name="submit" onclick="addLocalStorage()" value="Sign Up" />
                                <p class="signup">
                                    Already have an account ?
                                    <a onclick="toggleForm();">Sign in.</a>
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

    <script src="index.js"></script>
</body>

</html>

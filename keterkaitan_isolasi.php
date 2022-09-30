<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>DeteksiCovid - Isolasi Mandiri</title>
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
        h2{
            color: #163DA6;
            font-weight: bolder;
            margin: 15px 0 30px 0;
        }
        h3{
            font-family: SEGOE UI;
            font-weight: lighter;
            font-size: 20px;
        }
        .btn:hover, .btn:focus {
            border: 1px solid #163DA6;
            background-color: #fff;
            color: #163DA6;
        }
        .navbar-header span{
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
                <a class="navbar-brand" href="#"><span>Deteksi</span><span>Covid</span></a>
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
                    <li><a href="index.php ">Contact</a></li>
                    <li><a href="informasi.php">Informasi</a></li>
                    <li><a href="#open-modal-login" id="set_user"><span class="glyphicon glyphicon-user"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="containerr" id="keterkaitan" style="margin-bottom: -100px;">
        <h2 style="text-align: center;">Isolasi Mandiri</h2>
        <div class="thumbnail" style="padding: 50px;">
            <img src="IMG/keterkaitan3.PNG" alt="Paris" width="500" height="500">
            <h4>Apa itu isolasi mandiri dan mengapa penting untuk dijalankan?</h4>
            <p>Isolasi mandiri merupakan upaya untuk membatasi kontak dengan orang lain, demi mencegah penularan infeksi virus Corona, setelah mengalami gejala penyakit COVID-19 seperti demam dan batuk. Isolasi mandiri dapat dilakukan dengan cara tinggal di rumah dan tidak pergi ke tempat kerja, sekolah, atau mengunjungi tempat-tempat umum. Tindakan ini penting dilakukan untuk memperlambat laju penyebaran virus demi menjaga kapasitas fasilitas serta tenaga medis agar tidak melebihi batas aman.</p>
            <h4>Siapa saja yang harus mengisolasi diri?</h4>
            <p>Menteri Kesehatan Republik Indonesia telah mengambil keputusan bahwa tindakan isolasi mandiri diwajibkan bagi:</p>
            <ul>
                <li>
                    <p>Orang yang sedang sakit (demam, batuk, pilek, nyeri tenggorokan, atau gejala penyakit pernapasan lainnya) namun tidak memiliki riwayat penyakit lainnya (seperti diabetes, penyakit jantung, kanker, penyakit paru kronik, penyakit autoimun, AIDS, dan lainnya)</p>
                </li>
                <li>
                    <p>Orang Dalam Pemantauan (ODP) yang memiliki gejala demam atau gangguan pernapasan dengan riwayat dari negara/area transmisi lokal.</p>
                </li>
                <li>
                    <p>Orang yang tidak menunjukkan gejala namun memiliki riwayat kontak erat dengan pasien positif COVID-19.</p>
                </li>
            </ul>
            <h4>Apa yang harus dilakukan selama isolasi diri?</h4>
            <p>Jaga kondisi diri:</p>
            <ul>
                <li>
                    <p>Tinggal di rumah dan tidak pergi ke kantor, sekolah maupun tempat umum selama <b>minimal 14 hari.</b></p>
                </li>
                <li>
                    <p>Memantau keadaan diri seperti mengukur suhu tubuh dengan rutin dan memonitor keadaan klinis seperti batuk atau kesulitan bernapas.</p>
                </li>
                <li>
                    <p>Tetap mengonsumsi makanan bergizi seimbang.</p>
                </li>
                <li>
                    <p>Sebisa mungkin menyempatkan diri untuk berjemur di bawah sinar matahari setiap pagi.</p>
                </li>
            </ul>
            <p>Cegah penyebaran virus:</p>
            <ul>
                <li>
                    <p>Gunakan masker, termasuk anggota keluarga yang sedang merawat pasien yang sedang sakit.</p>
                </li>
                <li>
                    <p>Praktekkan etika batuk/bersin yang benar.</p>
                </li>
                <li>
                    <p>Jaga jarak dengan anggota keluarga di rumah, minimal 1 meter.</p>
                </li>
                <li>
                    <p>Hindari berbagi pemakaian alat-alat makan, perlengkapan mandi; dan sprei.</p>
                </li>
                <li>
                    <p>Cuci tangan dengan air mengalir dan sabun secara rutin atau menggunakan hand sanitizer.</p>
                </li>
                <li>
                    <p>Bersihkan rumah dengan baik, disarankan menggunakan cairan desinfektan secukupnya.</p>
                </li>
            </ul>
            <p>Apabila gejala tidak membaik atau bertambah parah setelah beristirahat selama 7 hari, periksakan diri ke fasilitas pelayanan kesehatan untuk pemeriksaan dan penanganan lebih lanjut.</p>
        </div>
    </div>

    <div class="containerr text-center">
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="thumbnail" style="padding: 50px;">
                        <a href="keterkaitan_jarak.php"><img src="IMG/keterkaitan1.jpeg" width="400" height="300"></a>
                        <h3>Jaga Jarak Aman</h3>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail" style="padding: 50px;">
                        <a href="keterkaitan_deteksi.php"><img src="IMG/keterkaitan2.png" width="400" height="300"></a>
                        <h3>Alur Deteksi COVID-19</h3>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail" style="padding: 50px;">
                        <a href="keterkaitan_isolasi.php"><img src="IMG/keterkaitan3.png" width="400" height="300"></a>
                        <h3>Isolasi Mandiri</h3>
                    </div>
                </div>
            </div>
        </div>

    <!--    open modal login/register-->
    <div id="open-modal-login" class="modalDialog">
        <div>
            <a href="#close" title="Close" class="close">X</a>
            <section>
                <div class="container">
                    <div class="user signinBx">
                        <div class="imgBx"><img src="IMG/layanan1.jpeg"   alt="" /></div>
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
                        <div class="imgBx"><img src="IMG/layanan2.jpeg" alt="" /></div>
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

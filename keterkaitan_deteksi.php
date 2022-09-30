<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>DeteksiCovid - Deteksi COVID</title>
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
                    <li><a href="index.php">Contact</a></li>
                    <li><a href="informasi.php">Informasi</a></li>
                    <li><a href="#open-modal-login" id="set_user"><span class="glyphicon glyphicon-user"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="keterkaitan">
        <div class="containerr">
            <h2 style="text-align: center;">Alur Deteksi COVID-19</h2>
            <div class="thumbnail row">
                <img src="IMG/keterkaitan2.PNG" alt="Paris" width="500" height="500">
                <br>
                <h4>1. Mengalami Demam</h4>
                <p>Anda tidak perlu panik jika terkena demam atau merasa tidak enak badan yang disertai peningkatan suhu tubuh. Sebelum datang ke fasilitas kesehatan terdekat, Anda cukup beristirahat saja sambil memantau kondisi tubuh selama beberapa hari ke depan atau memang perlu berkonsultasi dengan dokter.</p>
                <h4>2. Muncul Gejala Batuk dan Gangguan Pernapasan</h4>
                <p>Pemeriksakan diri ke fasilitas pelayanan kesehatan jika demam tidak kunjung membaik setelah tujuh hari. Periksakan pula diri Anda jika demam diperparah dengan keluhan lain seperti batuk, pilek, nyeri tenggorokan, ataupun gangguan pernapasan. Perlu diingat, apabila Anda memiliki riwayat bepergian ke negara yang sudah dikonfirmasi terjadi penularan virus Corona antar manusia, Anda akan dimasukkan ke dalam golongan Orang Dalam Pemantauan (ODP). Anda akan dianjurkan untuk menghindari kontak dengan orang lain dan mengisolasi diri di rumah selama minimal 14 hari. Meski bisa jadi ODP tidak menunjukkan gejala apapun, pendataan dan pemantauan ODP tetap harus dilakukan.</p>
                <h4>3. Diketahui Memiliki Riwayat Kontak dengan Pasien Positif COVID-19</h4>
                <p>Dokter akan mengevaluasi keadaan klinis Anda untuk menentukan apakah Anda masuk ke dalam kriteria Pasien Dalam Pengawasan (PDP). Jika tidak, Anda akan mendapatkan perawatan sesuai diagnosis dokter, baik berupa rawat jalan atau rawat inap. Akan tetapi, jika hasil pemeriksaan menunjukkan bahwa Anda merupakan PDP, Anda akan dirujuk ke salah satu RS rujukan dengan didampingi oleh petugas kesehatan yang menggunakan alat pelindung diri (APD). PDP yang memiliki riwayat kontak dengan orang yang dinyatakan positif COVID-19 akan digolongkan sebagai kasus suspek. Selanjutnya, pasien ditempatkan di ruang isolasi sambil menunggu pemeriksaan spesimen.</p>
                <h4>4. Pemeriksaan Spesimen</h4>
                <p>Baik PDP maupun suspek COVID-19 akan melalui pemeriksaan spesimen. Menurut Staf Mikrobiologi Departemen Patologi Klinik RSUP Dr. Hasan Sadikin Bandung, terdapat 3 spesimen yang wajib diambil. Spesimen pertama berupa sediaan apusan dari saluran nasofaring (bagian atas tenggorokan) dan orofaring (tenggorokan). Spesimen kedua yang wajib diambil adalah dahak, aspirat trakea atau bronchoalveolar lavage (BAL) yang berasal dari saluran napas bagian bawah. Spesimen ketiga yaitu spesimen serum sebanyak 2 ml yang diambil dari 5 ml darah. Pemeriksaan ini dilakukan menggunakan metode polymerase chain reaction (PCR) dan Genom Sekuensing. Hasil pertama dari pemeriksaan tersebut akan keluar dalam waktu 24 jam.</p>
                <h4>5. Tindakan yang Diambil Berdasarkan Hasil Tes</h4>
                <p>PDP maupun Suspek COVID-19 akan dipulangkan jika mendapatkan hasil negatif dari pemeriksaan spesimen. Lain halnya jika hasil pemeriksaan tes spesimen tersebut positif. Dalam hal ini, pasien akan dirawat di ruang isolasi RS rujukan dan menjalani pemantauan ketat hingga sembuh.</p>
            </div>
        </div>
    </section>

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

<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome to DeteksiCovid</title>
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

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <a href="layanan.php"><img src="IMG/banner1.png"></a>
            </div>
            <div class="item">
                <img src="IMG/banner2.png">
            </div>
            <div class="item">
                <img src="IMG/banner3.png">
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section id="about" class="containerr">
        <div class="row">
            <div class="col-md-4">
                <img src="IMG/deteksi.png" class="img-fluid img-thumbnail" style="width: 300px;">
            </div>
            <div class="col-md-8">
                <br>
                <h2>Tentang Deteksicovid</h2>
                <p style="text-align: justify;">Sebagai upaya membantu pemerintah dalam menekan laju peningkatan kasus COVID-19, kini <b>DeteksiCovid</b> menyediakan layanan <i>rapid test</i> atau <i>swab test</i> berlokasi di Kota Bandung yang bekerja sama dengan berbagai mitra rumah sakit dan laboratorium.</p>
                <br>
                <a href="profile.php"><button class="btn" type="submit">Lihat Selengkapnya</button></a>
            </div>
        </div>
    </section>

    <section id="tindakan">
        <div class="containerr text-center">
            <h2>Ketahui Tindakan Terkait COVID-19</h2>
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="thumbnail" style="padding: 50px;">
                        <img src="IMG/keterkaitan1.jpeg" width="400" height="300">
                        <h3>Jaga Jarak Aman</h3>
                        <p>Cegah penyebaran virus Corona dengan berada di rumah dan tidak pergi ke tempat-tempat umum.</p>
                        <a href="keterkaitan_jarak.php"><button class="btn">Baca Selengkapnya</button></a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail" style="padding: 50px;">
                        <img src="IMG/keterkaitan2.png" width="400" height="300">
                        <h3>Alur Deteksi COVID-19</h3>
                        <p>Cari tahu langkah-langkah yang perlu Anda lakukan jika Anda mengalami gejala serupa COVID-19.</p>
                        <a href="keterkaitan_deteksi.php"><button class="btn">Baca Selengkapnya</button></a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail" style="padding: 50px;">
                        <img src="IMG/keterkaitan3.png" width="400" height="300">
                        <h3>Isolasi Mandiri</h3>
                        <p>Batasi kontak dengan orang lain untuk memperlambat laju penyebaran virus n-CoV.</p>
                        <a href="keterkaitan_isolasi.php"><button class="btn">Baca Selengkapnya</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="deteksi">
        <div class="containerr">
            <div class="thumbnail text-center" style="padding: 50px 80px; font-size: 16px;">
                <h2 class="text-center">Kamu dapat <i>Rapid Test</i> atau <i>Swab Test</i> COVID-19 melalui DeteksiCovid!</h2>
                <a href="layanan.php"><button class="btn">Klik Di Sini</button></a>
            </div>
        </div>
    </section>

    <section id="test">
        <div class="containerr">
            <h2 class="text-center">Layanan</h2>
            <div class="row text-center">
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <a href="layanan.php"><img src="IMG/layanan1.PNG" width="300" height="300"></a>
                        <h3>Rapid Test</h3>
                        <p><i>Rapid test</i> untuk mendeteksi keberadaan antibodi IgM & IgG yang terbentuk akibat paparan virus SARS-CoV-2 penyebab COVID-19. </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <a href="layanan.php"><img src="IMG/layanan2.PNG" width="300" height="300"></a>
                        <h3>Swab Test</h3>
                        <p><i>Swab test</i> atau tes PCR <i>(polymerase chain reaction)</i> untuk mendeteksi virus Corona di dalam dahak, lendir, atau cairan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="layanan">
        <div class="containerr text-center">
            <div class="row">
                <div class="col-sm-4">
                    <a href="#demo" data-toggle="collapse">
                        <img src="IMG/service1.PNG" class="img-circle service" width="255" height="255">
                    </a>
                    <br>
                    <br>
                    <h3>Cepat</h3>
                    <div id="demo" class="collapse">
                        <p>Bebas antre</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <a href="#demo2" data-toggle="collapse">
                        <img src="IMG/service2.PNG" class="img-circle service" width="255" height="255">
                    </a>
                    <br>
                    <br>
                    <h3>Aman</h3>
                    <div id="demo2" class="collapse">
                        <p>Buat janji dirumah aja</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <a href="#demo3" data-toggle="collapse">
                        <img src="IMG/service3.PNG" class="img-circle service" width="255" height="255">
                    </a>
                    <br>
                    <br>
                    <h3>Pelayanan Terbaik</h3>
                    <div id="demo3" class="collapse">
                        <p>Tersedia berbagai keunggulan dan pelayanan prima untuk kepuasan anda</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="containerr">
            <div class="thumbnail" style="padding: 50px;">
                <h2 class="text-center">Kontak</h2>
                <br>
                <form action="contactform/contact.php" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <p>Layanan Test COVID-19</p>
                            <p><span class="glyphicon glyphicon-map-marker"></span>Bandung, Indonesia</p>
                            <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
                            <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Nama" type="text" required>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                                </div>
                            </div>
                            <textarea class="form-control" id="subject" name="message" placeholder="Deskripsi" rows="5"></textarea>
                            <br>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <button class="btn pull-right" type="submit" name="submit">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section id="info" class="containerr">
        <h2 class="text-center">Pusat Infromasi</h2>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Infografik</a></li>
            <li><a data-toggle="tab" href="#menu1">Dokumen</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <br>
                <center>
                <div class="click-zoom">
                    <label>
                        <input type="checkbox">
                        <img src="IMG/poster1.jpg" width="200" height="300">
                    </label>
                </div>
                <div class="click-zoom">
                    <label>
                        <input type="checkbox">
                        <img src="IMG/poster2.jpg" width="200" height="300">
                    </label>
                </div>
                <div class="click-zoom">
                    <label>
                        <input type="checkbox">
                        <img src="IMG/poster3.jpg" width="200" height="300">
                    </label>
                </div>
                <div class="click-zoom">
                    <label>
                        <input type="checkbox">
                        <img src="IMG/poster4.jpg" width="200" height="300">
                    </label>
                </div>
                <div class="click-zoom">
                    <label>
                        <input type="checkbox">
                        <img src="IMG/poster5.jpg" width="200" height="300">
                    </label>
                </div>
            </center>
            </div>
            <div id="menu1" class="tab-pane fade doc">
                <br>
                <table class="table table-bordered table-hover">
                    <br>
                    <thead>
                        <tr>
                            <th style="text-align: center;">No</th>
                            <th style="text-align: center;">Tanggal Rilis</th>
                            <th style="text-align: center;">Judul Dokumen</th>
                            <th style="text-align: center;"></th>
                        </tr>
                    </thead>
                        <?php
                            include "proses/koneksi.php";
                            $sql="SELECT * FROM t_file ORDER BY id DESC";
                            $hasil=mysqli_query($conn, $sql);
                            $no = 0;
                            while ($data = mysqli_fetch_array($hasil)) {
                                $no++;
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $no;?></td>
                                <td><?php echo $data["tgl_upload"];?></td>
                                <td><?php echo $data["nama_file"];?></td>
                                <td><a href="download_file.php?file_name=<?php echo $data["nama_file"];?>" class="btn btn-warning action" role="button"><i class="glyphicon glyphicon-download-alt"></i></a></td>
                            </tr>
                        </tbody>
                        <?php } ?>
                    </table>
                </div>
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

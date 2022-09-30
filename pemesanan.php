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

        label,
        select,
        option {
            font-family: SEGOE UI;
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


    <main class="containerr pemesanan" id="notsearch">
        <section class="pesan">
            <h1>Pemesanan</h1>
            <hr>

            <form action="#" method="post" id="form">


                <div class="row">
                    <label>Jenis Test</label>
                    <select id="category" onchange="showProdukByCategory(this)" required>
                        <option selected disabled>-</option>
                        <option value="rapid">Rapid Test</option>
                        <option value="swab">Swab Test</option>
                    </select>

                    <div class="col-50">
                        <label>Tempat</label>
                        <select id="name" onchange="showImage(this)" required>
                            <option selected disabled>-</option>
                        </select>
                        <br>
                        <label>Harga</label>
                        <input type="number" id="price" disabled>
                        <br>
                        <label>Jumlah</label>
                        <input type="number" id="quantity" required>

                        <br><br>
                        <input class="btn" style="border-radius: 25px;" type="submit" value="Submit" name="submit" onclick="addItem();">
                    </div>

                    <div class="col-gambar" id="hidden_div" style="display: none;">
                        <img id="image_product">
                    </div>
                </div>

            </form>

        </section>


        <section class="table">
            <table border="1" id="table_order" class="table table-bordered table-hover">
                <thead>
                    <th>Gambar</th>
                    <th>Rumah Sakit</th>
                    <th>Harga</th>
                    <th>Jenis Test</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                </thead>
            </table>

            <div id="hidden_button" style="display: none;">
                <a class="btn" style="border-radius: 25px" href="#" id="buttona" onclick="clearData();">Hapus</a>
                <a class="btn" style="border-radius: 25px" href="#open-modal-checkout" id="buttonb" onclick="checkOut();">Pembayaran</a>
            </div>
        </section>



    </main>


    <div id="open-modal-checkout" class="modalDialog3">
        <div>
            <a href="#close" title="Close" class="close" onclick="deleterow()">X</a>
            <section>
                <div>
                    <div class='window'>
                        <div class='order-info'>
                            <div class='order-info-content' id="order-info">
                                <h2>Detail Pemesanan</h2>
                                <div class='line'></div>
                            </div>
                        </div>
                        <div class='total'>
                            <div class="total-kiri">
                                <p>TOTAL</p>
                            </div>

                            <div class="total-kanan" id="total_price">
                                <p>Rp. 1.000.000</p>
                            </div>
                        </div>
                        <div class='credit-info'>
                            <div class='credit-info-content'>

                                <h2>Pembayaran</h2>
                                <form>
                                    <label for="name">Nama</label>
                                    <input type="text" id="name" value="<?= $_SESSION['username']?>" required>

                                    <label for="name">Email</label>
                                    <input type="text" id="email" value="<?= $_SESSION['email']?>" required>

                                    <label for="name">No.Telp</label>
                                    <input type="text" id="notelp" value="<?= $_SESSION['notelp']?>" required>

                                    <label for="name">Pembayaran Transfer Ke : </label>
                                    <input type="text" id="credit" value="0684792291 (BNI) a/n Abighail Shafira">

                                    <br><br>
                                    <a href="index.php" class="submitButton" onclick="payment()">Submit</a>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
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
    
    <!--    open modal login/register-->
    <div id="open-modal-login" class="modalDialog">
        <div>
            <a href="#close" title="Close" class="close">X</a>
            <section>
                <div class="container">
                    <div class="user signinBx">
                        <div class="imgBx"><img src="IMG/layanan1.jpeg" alt="" /></div>
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
    <!-- <script src="index.js"></script> -->
    <script src="pemesanan.js"></script>
    <script src="index.js"></script>
</body>

</html>

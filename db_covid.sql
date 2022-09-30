-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2021 pada 08.54
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_covid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_file`
--

CREATE TABLE `t_file` (
  `id` int(11) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_file`
--

INSERT INTO `t_file` (`id`, `nama_file`, `deskripsi`, `tgl_upload`) VALUES
(5, 'Keputusan Gubernur Jawa Barat Nomor 443_Kep. 576 hukham 2020 Tentang Perpanjangan Ketiga AKB di Provinsi Jawa Barat Diluar Wilayah BODEBEK Dalam Rangka Percepatan Penanganan Covid-19.pdf', '', '2020-10-05'),
(6, 'Instruksi Gubernur Jawa Barat Nomor 443_07_hukham Tentang Pengendalian Penyebaran Covid-19 di Restoran, Kafe, Rumah Makan, Warung, dan Usaha Sejenis..pdf', '', '2020-10-05'),
(7, 'Keputusan Gubernur Jawa Barat Nomor _ 443_Kep.755-Hukham_2020 Tentang Perpanjangan Kelima Pemberlakuan Adaptasi Kebiasaan Baru Daerah Provinsi Jawa Barat Di Luar Wilayah BODEBEK Dalam Rangka Penanganan Covid-19.pdf', '', '2020-11-21'),
(8, 'Keputusan Gubernur Jawa Barat Nomor _ 443_Kep.783-Hukham_2020 Tentang Perpanjangan Kedelapan Pemberlakuan Pembatasan Sosial Berskala Besar Secara Proprsional.pdf', '', '2020-11-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`id_user`, `username`, `no_telp`, `email`, `password`) VALUES
(1, 'abighail', 'bigel123', 'abighailshafiraa@gmail.com', '081224403699'),
(2, 'farraselfahd', 'farras123', 'farraselfahd2000@upi.edu', '082297416167'),
(3, 'mrifqi', 'rifqi123', 'rifqi367@upi.edu', '085156479267');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_file`
--
ALTER TABLE `t_file`
  ADD PRIMARY KEY (`id`);
  

--
-- Indeks untuk tabel `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_file`
--
ALTER TABLE `t_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Agu 2020 pada 09.30
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfota`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bimbingan`
--

CREATE TABLE `bimbingan` (
  `id_bim` int(11) NOT NULL,
  `id_pem` int(25) NOT NULL,
  `id_mhs` varchar(150) NOT NULL,
  `id_judul` varchar(300) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `waktu` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `ket` varchar(80) NOT NULL,
  `up_file` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bimbingan`
--

INSERT INTO `bimbingan` (`id_bim`, `id_pem`, `id_mhs`, `id_judul`, `tanggal`, `waktu`, `deskripsi`, `ket`, `up_file`) VALUES
(16, 12345678, '12345', '30', 'Sabtu, 25 Juli 2020 ', 1595649610, 'lorem ipsum', 'Diterima', 'Jadwal_20_-_24_Juli_20202.pdf'),
(17, 12345678, '112233', '24', 'Sabtu, 25 Juli 2020 ', 1595651296, 'sdfdsf', 'Belum Diterima', 'Jadwal_20_-_24_Juli_20203.pdf'),
(18, 12345678, '12345', '30', 'Sabtu, 25 Juli 2020 ', 1595663143, 'dsfdsfdsfdsfdsf', 'Belum Diterima', 'Jadwal_20_-_24_Juli_20204.pdf'),
(19, 12345, '112233', '33', 'Senin, 03 Agustus 2020 ', 1596431747, 'sddsf', 'Belum Diterima', 'Bukti_Pembayaran.pdf'),
(20, 12345, '123456', '34', 'Senin, 03 Agustus 2020 ', 1596434490, 'Sistem Informasi Bimbingan Online', 'Belum Diterima', 'BAB_III5.docx'),
(21, 1234567, '123456', '34', 'Senin, 03 Agustus 2020 ', 1596434616, 'Sistem Informasi Bimbingan Online', 'Diterima', 'monitor-1307227_1920.jpg'),
(22, 12345, '112233', '33', 'Selasa, 04 Agustus 2020 ', 1596548426, 'sdsdad', 'Belum Diterima', '112_mypdf.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `judul_ta`
--

CREATE TABLE `judul_ta` (
  `id_judul` int(11) NOT NULL,
  `id_mhs` varchar(25) NOT NULL,
  `id_pem` varchar(25) NOT NULL,
  `p_judul` varchar(300) NOT NULL,
  `deskripsi` text NOT NULL,
  `komentar` text NOT NULL,
  `ket` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `judul_ta`
--

INSERT INTO `judul_ta` (`id_judul`, `id_mhs`, `id_pem`, `p_judul`, `deskripsi`, `komentar`, `ket`) VALUES
(30, '12345', '12345678', 'Sistem Informasi Bimbingan Online', 'abdcd', 'Lanjut Bab 1 ya', 'Diterima'),
(31, '12345', '12345678', 'sasaas', 'sasa', 'Belum Ada Komentar', 'Belum Diterima'),
(32, '12345', '12345', 'sssdsd', 'dfds', 'Belum Ada Komentar', 'Belum Diterima'),
(33, '112233', '12345', 'Sistem Informasi Bimbingan Online', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lanjut', 'Diterima'),
(34, '123456', '12345', 'Sistem Informasi Bimbingan Online', 'Sistem Informasi Bimbingan Online', 'Belum Ada Komentar', 'Belum Diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_kom` int(11) NOT NULL,
  `id_mhs` varchar(25) NOT NULL,
  `id_pem` varchar(25) NOT NULL,
  `komen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_kom`, `id_mhs`, `id_pem`, `komen`) VALUES
(8, '12345', '12345678', 'Kamu Sudah Selesai?'),
(10, '12345', '12345678', 'Sedikit Lagi Bu..'),
(17, '12345', '12345678', 'okedeh'),
(20, '112233', '12345', 'Hallo'),
(21, '112233', '12345', 'Hallo Juga'),
(22, '123456', '12345', 'nmghjgj');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `nm_mhs` varchar(100) NOT NULL,
  `j_kelamin` varchar(20) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `outline` varchar(200) NOT NULL,
  `thn_angk` int(11) NOT NULL,
  `password` varchar(225) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `nim`, `nm_mhs`, `j_kelamin`, `prodi`, `outline`, `thn_angk`, `password`, `foto`, `status`) VALUES
(7, '11111111', 'Yolantika Nur', 'Perempuan', 'Sistem Informasi Akuntansi', 'Interaktif', 2018, '$2y$10$Bw.x364BHkeYqjHk9GGG9uU0AMjqq/htU0fPy1DYsHRb.zfw6Vexm', 'Instagram_User_BSGq3ukD28s.jpg', '1'),
(8, '11111112', 'Jennie Kim', 'Perempuan', 'Sistem Informasi', 'Interaktif', 2019, '$2y$10$aSPnus1wFwLBTSchbzZTZOETyocLem9FF4VsABb.CRVyHxmBU2FO2', '687474~1.JPG', '1'),
(9, '12345', 'Tuti', 'Perempuan', 'Sistem Informasi', 'Perancangan Program', 2017, '$2y$10$CYJnCB944IjIsfbbHgFmYuWgpNEYDf4lKcqJAJPLY41TtpQ0w2Oye', '663219154.png', '1'),
(10, '112233', 'Yoyo', 'Perempuan', 'Sistem Informasi Akuntansi', '1sad', 2111, '$2y$10$W.cOz4WKn4LYB65jnJvNwuKrPerxX82lliwcy67RifHqV2myGstxC', 'Instagram_User_BSGq3ukD28s.jpg', '1'),
(11, '11111', 'Jennie', 'Perempuan', 'asdsad', 'zxdasd', 0, '$2y$10$kGVdcu4OIcUEW7Mse7xyj.9zOj2ly2Kt2RDm/uXW32NO5oA4LE/Fe', 'default.jpg', '1'),
(12, '123213', 'sd', 'Laki-Laki', 'sadasd', '2asdfdsf', 2323, '$2y$10$7d5qJX5T23EnXvnetXHeUOOFWO3TUEg7kbsV9K6WnBej4lCqKM662', 'default.jpg', '1'),
(13, '123456', 'Maharani', 'Laki-Laki', 'Sistem Informasi', 'Perancangan Sistem', 2018, '$2y$10$WQ4e5Ef0gdhTMo3CrTneW.5MQUBYMIYi/ONwAuJ8DQnGg4nV2pQx.', 'default.png', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembimbing`
--

CREATE TABLE `pembimbing` (
  `id_pem` int(11) NOT NULL,
  `id_bim` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `nmr_tlp` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembimbing`
--

INSERT INTO `pembimbing` (`id_pem`, `id_bim`, `nip`, `nama`, `alamat`, `nmr_tlp`, `email`, `foto`, `password`, `status`) VALUES
(9, 0, '12345', 'Tuti Hardianti Pratiwi', 'Pontianak', '+62122345', 'tuti@gmail.com', 'default.png', '$2y$10$NydvzurIk.Aw/2mJ62xb6u93dL96N5EEbh437wEmYI8B62FLYAQ5O', 1),
(10, 0, '1234567', 'Ramadhan', 'Pontianak', '+625678910', 'ramadhan@gmail.com', 'default.png', '$2y$10$mVowTEu2GjTcJPJCcaAcAedcSszaxMvLRLN2JC3Lum6G1G7sg3vRm', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bimbingan`
--
ALTER TABLE `bimbingan`
  ADD PRIMARY KEY (`id_bim`);

--
-- Indeks untuk tabel `judul_ta`
--
ALTER TABLE `judul_ta`
  ADD PRIMARY KEY (`id_judul`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_kom`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indeks untuk tabel `pembimbing`
--
ALTER TABLE `pembimbing`
  ADD PRIMARY KEY (`id_pem`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bimbingan`
--
ALTER TABLE `bimbingan`
  MODIFY `id_bim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `judul_ta`
--
ALTER TABLE `judul_ta`
  MODIFY `id_judul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_kom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pembimbing`
--
ALTER TABLE `pembimbing`
  MODIFY `id_pem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

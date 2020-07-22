-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Jun 2019 pada 16.22
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kepangkatan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `id` int(8) NOT NULL,
  `username` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`id`, `username`, `email`, `nama`, `password`) VALUES
(12345688, 'admin', 'admin@gmail.com', 'admin', '$2y$10$D5XkltCL/Bsn9p92YcQOnuP9DLloHg4N.w1NdQlXhloNJKf7CUtMK'),
(12345689, 'amal', 'amal@gmail.com', 'amal', '$2y$10$LHwdJQbr9vM23V2JFVxlBODbJXNQrMSzJ9ExbBnH0LjEHwaAXeHQK'),
(12345690, 'ikhlasul', 'himaokipolsri@gmail.com', 'ABC', '$2y$10$7t58pwPLumoYNpm1YnY0MubKuD.dGb9IEkgmGETJLhBX.fbOzJbaO'),
(12345691, 'wawan', 'ikhlasulamal0507@gmail.com', 'ABC', '$2y$10$RWxVmiex9kvf2jZ6jK0G/OHv/qgMzu7l1i.MMGj6AYw0C5fFSY4F.'),
(12345692, 'ikhlasul', 'himaokipolsri@gmail.com', 'ABC', '$2y$10$UqVrA8VipCb08Mz/Zu5TYuuaQDfuqKlmPHXOeqi4WBmVHnJXFl6aK'),
(12345693, 'doni', 'DOni@gmail.com', 'doni', '$2y$10$u8NVseHTjHG9S8iYnssz2u.t8jhxYk5BnwzI7Vcr.t7PSegCeYtk2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kejati_sumsel`
--

CREATE TABLE `kejati_sumsel` (
  `id_kejati_sumsel` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nrp` int(50) NOT NULL,
  `nip` varchar(128) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `pangkat_golongan` varchar(50) NOT NULL,
  `pangkat_tamat` varchar(20) NOT NULL,
  `jabatan_nama` varchar(20) NOT NULL,
  `jabatan_tamat` varchar(20) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kejati_sumsel`
--

INSERT INTO `kejati_sumsel` (`id_kejati_sumsel`, `nama`, `nrp`, `nip`, `tempat_lahir`, `tanggal_lahir`, `pangkat_golongan`, `pangkat_tamat`, `jabatan_nama`, `jabatan_tamat`, `catatan`) VALUES
(51, 'renda ita utari', 234567, '93485796576', 'pedamaran', '1998-05-03', 'jaksa', '2025', 'sekretaris', '2027', 'aamiin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id` int(8) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nrp` varchar(128) NOT NULL,
  `pangkat` varchar(128) NOT NULL,
  `bagian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id`, `nama`, `nrp`, `pangkat`, `bagian`) VALUES
(1, 'Ikhlasul Amal', '234567', 'ewrtyu', 'rtytuio'),
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, '', '', '', ''),
(5, '', '', '', ''),
(6, '', '', '', ''),
(7, '', '', '', ''),
(8, '', '', '', ''),
(9, '', '', '', ''),
(10, '', '', '', ''),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, '', '', '', ''),
(14, '', '', '', ''),
(15, '', '', '', ''),
(16, '', '', '', ''),
(17, '', '', '', ''),
(18, 'Ikhlasul Amal', '234567', 'ewrtyu', 'rtytuio');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kejati_sumsel`
--
ALTER TABLE `kejati_sumsel`
  ADD PRIMARY KEY (`id_kejati_sumsel`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12345694;
--
-- AUTO_INCREMENT for table `kejati_sumsel`
--
ALTER TABLE `kejati_sumsel`
  MODIFY `id_kejati_sumsel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

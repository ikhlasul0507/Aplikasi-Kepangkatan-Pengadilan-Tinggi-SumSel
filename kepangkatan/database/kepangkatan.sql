-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Jun 2019 pada 15.07
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
(12345692, 'ikhlasul', 'himaokipolsri@gmail.com', 'ABC', '$2y$10$UqVrA8VipCb08Mz/Zu5TYuuaQDfuqKlmPHXOeqi4WBmVHnJXFl6aK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kejati_sumsel`
--

CREATE TABLE `kejati_sumsel` (
  `id_kejati_sumsel` int(11) NOT NULL,
  `tahun_ke` varchar(10) NOT NULL,
  `nrp` int(50) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `pangkat_golongan` varchar(50) NOT NULL,
  `pangkat_tamat` varchar(20) NOT NULL,
  `jabatan_nama` varchar(20) NOT NULL,
  `jabatan_tamat` varchar(20) NOT NULL,
  `masa_tahun` varchar(20) NOT NULL,
  `masa_bulan` varchar(20) NOT NULL,
  `latihan_nama` varchar(20) NOT NULL,
  `latihan_bulan` varchar(20) NOT NULL,
  `latihan_jam` varchar(20) NOT NULL,
  `pendidikan_nama` varchar(20) NOT NULL,
  `pendidikan_tahun` varchar(20) NOT NULL,
  `pendidikan_tk` varchar(20) NOT NULL,
  `usia` varchar(20) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kejati_sumsel`
--

INSERT INTO `kejati_sumsel` (`id_kejati_sumsel`, `tahun_ke`, `nrp`, `nama`, `pangkat_golongan`, `pangkat_tamat`, `jabatan_nama`, `jabatan_tamat`, `masa_tahun`, `masa_bulan`, `latihan_nama`, `latihan_bulan`, `latihan_jam`, `pendidikan_nama`, `pendidikan_tahun`, `pendidikan_tk`, `usia`, `catatan`) VALUES
(28, '2015', 40578321, 'AYUB TRESNA ', 'YUANA DARMA T.U. (II/a)', '-', 'Penyiap Bahan Admini', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(29, '2015', 403790234, 'SUHARTONO, S.E., S.H.', 'JAKSA PRATAMA (III/c)', '01-10-2016', 'KASUBSI Tindak Pidan', '14-05-2018', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(30, '2015', 403810249, 'SENDY MARITA, S.H.', 'JAKSA PRATAMA (III/c)', '01-04-2017', 'Kepala Subseksi Pend', '03-04-2018', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(31, '2015', 6118728, 'SYAFRUDIN PRAWIRA, SH', 'JAKSA PRATAMA (III/c)', '01-04-2018', 'Kepala Sub Seksi Pen', '03-04-2018', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(32, '2015', 60885151, 'JUNITA ROMAULI ARITONANG, S.H.', 'JAKSA PRATAMA (III/c)', '-', 'Kepala Sub Seksi Pen', '12-07-2018', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(33, '2015', 40283041, 'M. PURNAMA SOFYAN, S.H.', 'JAKSA PRATAMA (III/c)', '-', 'Jaksa Fungsional pad', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(34, '2015', 403790245, 'SYARIANA, S.E', 'JAKSA PRATAMA (III/c)', '01-10-2015', 'Jaksa Fungsional pad', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(35, '2015', 403780244, 'MIRSYAH RIZAL, Si', 'JAKSA PRATAMA (III/c)', 'Jaksa Pratama (III/c', 'Jaksa Fungsional pad', '22-10-2015', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(36, '2015', 50380012, 'AKHMAD SYAMSUDIN, S.H.', 'JAKSA PRATAMA (III/c)', '-', 'Jaksa Fungsional pad', '19-02-2018', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(37, '2015', 600986490, 'RIDHA INDAH MAWANGI, S.H.', 'JAKSA PRATAMA (III/c)', '01-04-2016', 'Jaksa Fungsional pad', '29-03-2018', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(38, '2015', 40079082, 'YULIANTO SAPUTRA, S.H. ', 'JAKSA PRATAMA (III/c)', '01-04-2016', 'Kasubag Kepegawaian ', '15-06-2017', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(39, '2015', 40576206, 'HUSNI TAMRIN, S.H, S.Psi, M.H', 'JAKSA PRATAMA (III/c)', '01-04-2017', 'Kepala Sub Bagian Ke', '16-08-2018', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(40, '2015', 50377014, 'ERWINSYAH, S.H. ', 'JAKSA PRATAMA (III/c)', '01-10-2017', 'Kepala urusan Protok', '01-08-2008', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(41, '2010', 1, '1', 'YUANA DARMA T.U. (II/a)', '1', '1', '19-02-2018', '1', '1', '1', '322', 'dawda', '12332', 'dwadadwa', 'dwada', '23232', 'dwada'),
(42, '2010', 234567, 'ABC', 'YUANA DARMA T.U. (II/a)', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-');

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
  MODIFY `id_kejati_sumsel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

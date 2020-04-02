-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Apr 2020 pada 11.14
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `asalsekolah` varchar(255) NOT NULL,
  `id_pesan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama`, `nohp`, `asalsekolah`, `id_pesan`, `status`) VALUES
(3, 'kevin', '628137610', 'smp mercusuar', 'hai ade kevin kami dari sekolah ingin mengabarkan', 'terkirim'),
(4, 'lala', '6281390', 'smp geovani', 'hai ade lala kami dari sekolah ingin mengabarkan', ''),
(6, 'adibu', '6281390456678', 'smp pgri', 'hai ade adibu kami dari sekolah ingin mengabarkan', 'terkirim'),
(7, 'adrian', '6281390657610', 'smpn 1', 'hai ade adrian kami dari sekolah ingin mengabarkan', 'terkirim'),
(8, 'adibu', '6281390456678', 'smp pgri', 'hai ade adibu kami dari sekolah ingin mengabarkan', 'terkirim'),
(9, 'aldi', '08139087678', 'sman1 kupang', 'hai ade aldi kami dari sekolah ingin mengabarkan', 'terkirim');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

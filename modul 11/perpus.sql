-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Bulan Mei 2020 pada 16.18
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `edisi` varchar(50) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `penerbit`, `edisi`, `tahun`) VALUES
(1, ' Pemrograman Web PHP', 'Betha Sidik', 'INFORMATIKA', 'Edisi 2', 2014),
(2, 'Pemrograman dan Struktur Data', ' RH Sianipar, I Ketut Wiryajati, Herry S', 'INFORMATIKA', 'Edisi 1', 2013),
(4, 'Filsafat Umum Zaman Now', 'Hamidulloh Ibda, M.Pd', ' CV. Kataba Group', 'Edisi 1', 2018),
(5, 'Jejak Darah: Kumpulan Cerpen', ' Sesilius Kegou', 'CV. Pilar Nusantara', 'Edisi 1', 2020),
(8, 'Rumah Kaca', 'Pramoedya Ananta Toer', 'Lentera Dipantera', 'Edisi 1', 2010),
(9, 'Munajat Hati, Sebuah Novel', 'Jaswanto', 'Formaci', 'Edisi 1', 2017),
(11, 'Guru Zaman Now (Guruku, Sahabatku)', 'Dian Marta Wijayanti', 'Formaci', 'Edisi 1', 2017),
(12, 'Promise', 'Dwitasari', 'Loveable', 'Edisi 1', 2016);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

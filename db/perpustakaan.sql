-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Bulan Mei 2022 pada 09.52
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `databuku`
--

CREATE TABLE `databuku` (
  `idbuku` int(10) NOT NULL,
  `namabuku` varchar(10) DEFAULT NULL,
  `pengarang` varchar(10) DEFAULT NULL,
  `penerbit` varchar(10) DEFAULT NULL,
  `jumlah` int(5) DEFAULT NULL,
  `tahunterbit` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `databuku`
--

INSERT INTO `databuku` (`idbuku`, `namabuku`, `pengarang`, `penerbit`, `jumlah`, `tahunterbit`) VALUES
(121, 'ayah', 'sriwahyu', 'gramedia', 10, '2014-06-27'),
(122, 'ibu', 'sriwahyu', 'gramedia', 10, '2014-06-25'),
(123, 'nenek', 'sriwahyu', 'gramedia', 10, '2014-06-24'),
(124, 'kakek', 'sriwahyu', 'gramedia', 10, '2014-06-20'),
(125, 'paman', 'sriwahyu', 'gramedia', 10, '2014-06-21'),
(126, 'kakak', 'sriwahyu', 'gramedia', 10, '2014-06-22'),
(127, 'kancil', 'sriwahyu', 'gramedia', 10, '2013-06-22'),
(128, 'singa', 'sriwahyu', 'gramedia', 10, '2013-06-23'),
(129, 'macan', 'sriwahyu', 'gramedia', 10, '2013-05-23'),
(130, 'serigala', 'sriwahyu', 'gramedia', 10, '2013-05-20'),
(131, 'kkn', 'sriwahyu', 'gramedia', 10, '0000-00-00'),
(132, 'rusa', 'sriwahyu', 'gramedia', 10, '2012-06-27'),
(133, '', '', '', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjam`
--

CREATE TABLE `peminjam` (
  `idpeminjam` int(10) NOT NULL,
  `nama` varchar(10) DEFAULT NULL,
  `jurusan` varchar(10) DEFAULT NULL,
  `semester` int(5) DEFAULT NULL,
  `angkatan` int(5) DEFAULT NULL,
  `jumlah` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peminjam`
--

INSERT INTO `peminjam` (`idpeminjam`, `nama`, `jurusan`, `semester`, `angkatan`, `jumlah`) VALUES
(1121, 'dino', 'rpl', 1, 13, 10),
(1122, 'gery', 'rpl', 1, 13, 10),
(1123, 'akbar', 'rpl', 1, 13, 10),
(1124, 'tino', 'rpl', 1, 13, 10),
(1125, 'firman', 'rpl', 1, 13, 10),
(1126, 'ibnu', 'rpl', 1, 13, 10),
(1127, 'azmi', 'rpl', 1, 13, 10),
(1128, 'bilal', 'rpl', 1, 13, 10),
(1129, 'adit', 'rpl', 1, 13, 10),
(1130, 'gilang', 'rpl', 1, 13, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `idtransaksi` int(11) NOT NULL,
  `idpeminjam` int(10) DEFAULT NULL,
  `nama` varchar(10) DEFAULT NULL,
  `idbuku` int(10) DEFAULT NULL,
  `namabuku` varchar(10) DEFAULT NULL,
  `jumlahbuku` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`idtransaksi`, `idpeminjam`, `nama`, `idbuku`, `namabuku`, `jumlahbuku`) VALUES
(1, 1121, 'dino', 121, 'ayah', 10),
(2, 1122, 'gery', 122, 'ibu', 10),
(3, 1123, 'akbar', 123, 'nenek', 10),
(4, 1124, 'tino', 124, 'kakek', 10),
(5, 1125, 'firman', 125, 'paman', 10),
(6, 1126, 'ibnu', 126, 'kakak', 10),
(7, 1127, 'azmi', 127, 'kancil', 10),
(8, 1128, 'bilal', 128, 'singa', 10),
(9, 1129, 'adit', 129, 'macan', 10),
(10, 1130, 'gilang', 130, 'serigala', 10);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `databuku`
--
ALTER TABLE `databuku`
  ADD PRIMARY KEY (`idbuku`);

--
-- Indeks untuk tabel `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`idpeminjam`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idtransaksi`),
  ADD KEY `idbuku` (`idbuku`),
  ADD KEY `idpeminjam` (`idpeminjam`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `databuku`
--
ALTER TABLE `databuku`
  MODIFY `idbuku` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT untuk tabel `peminjam`
--
ALTER TABLE `peminjam`
  MODIFY `idpeminjam` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1131;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idtransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`idbuku`) REFERENCES `databuku` (`idbuku`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`idpeminjam`) REFERENCES `peminjam` (`idpeminjam`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

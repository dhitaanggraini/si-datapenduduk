-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jan 2021 pada 13.15
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdatapenduduk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_datapenduduk`
--

CREATE TABLE `tbl_datapenduduk` (
  `id` int(5) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki-Laki') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_datapenduduk`
--

INSERT INTO `tbl_datapenduduk` (`id`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `agama`, `pendidikan`, `pekerjaan`) VALUES
(14, '001', 'Susi Susanti', 'Jakarta', '1997-03-02', 'Perempuan', 'Air Batu', 'Islam', 'strata 1', 'Guru'),
(15, '002', 'Dhita Anggraini', 'Air Teluk Hessa', '1999-06-04', 'Perempuan', 'Desa Air Teluk Hessa', 'Islam', 'SMA', 'Wiraswasta'),
(16, '003', 'Ervina Hasibuan', 'Tanjung Balai', '1998-04-06', 'Perempuan', 'Tanjung Balai', 'Islam', 'SMA', 'Wiraswasta'),
(17, '123543', 'Awa Sihombing', 'Kisaran', '2017-12-31', 'Perempuan', 'Desa Air Teluk Hessa', 'Islam', 'SD', 'Pelajar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kartukeluarga`
--

CREATE TABLE `tbl_kartukeluarga` (
  `nik` varchar(25) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rtrw` varchar(25) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kartukeluarga`
--

INSERT INTO `tbl_kartukeluarga` (`nik`, `nama_lengkap`, `alamat`, `rtrw`, `desa`, `kelurahan`, `kecamatan`, `id`) VALUES
('1235475849364', 'Rudianto', 'Air Batu', '', 'Air Teluk Hessa', '-', 'Airbatu', 9),
('547692359127', 'abdul', 'Sei Alim Ulu', '', 'semulajadi', 'desa semulajadi', 'Airbatu', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'desa@gmail.com', 'Developer Kampoeng', 1, 'Staff Desa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_datapenduduk`
--
ALTER TABLE `tbl_datapenduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kartukeluarga`
--
ALTER TABLE `tbl_kartukeluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_datapenduduk`
--
ALTER TABLE `tbl_datapenduduk`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tbl_kartukeluarga`
--
ALTER TABLE `tbl_kartukeluarga`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

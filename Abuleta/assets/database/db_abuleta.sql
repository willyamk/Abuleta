-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Des 2022 pada 06.17
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_abuleta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_skck`
--

CREATE TABLE `tb_skck` (
  `no_surat` varchar(20) NOT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `nik` bigint(255) DEFAULT NULL,
  `nokk` bigint(255) DEFAULT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `kebangsaan` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `tempat_tgllahir` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jk` varchar(30) DEFAULT NULL,
  `kotakab` varchar(255) DEFAULT NULL,
  `tgl_lapor` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_skck`
--

INSERT INTO `tb_skck` (`no_surat`, `nama`, `nik`, `nokk`, `pekerjaan`, `kebangsaan`, `agama`, `tempat_tgllahir`, `alamat`, `jk`, `kotakab`, `tgl_lapor`) VALUES
('SKCK0001', 'admin', 123, 123123131231, 'pns', 'Indonesia', 'Islam', 'Batam / 16 Juni 2001', 'lubeg', 'Laki - Laki', 'ww', '2022-12-27 04:52:49'),
('SKCK0002', 'admin', 222, 1231212312, 'pns', 'Indonesia', 'Islam', 'Batam / 16 Juni 2001', 'lubeg', 'Perempuan', 'ss', '2022-12-27 04:53:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_skld`
--

CREATE TABLE `tb_skld` (
  `no_surat` varchar(20) DEFAULT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `nik` bigint(255) DEFAULT NULL,
  `tempat_tgllahir` varchar(255) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `nohp` varchar(15) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kotakab` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kelurahan` varchar(255) DEFAULT NULL,
  `tgl_lapor` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_skld`
--

INSERT INTO `tb_skld` (`no_surat`, `nama`, `nik`, `tempat_tgllahir`, `agama`, `pekerjaan`, `nohp`, `alamat`, `kotakab`, `kecamatan`, `kelurahan`, `tgl_lapor`) VALUES
('SKLD0001', 'admin', 222, 'Batam / 16 Juni 2001', 'Islam', 'pns', '123', 'lubeg', 'ww', 'ss', 'ss', '2022-12-27 11:52:00'),
('SKLD0002', 'jancok', 123, 'Batam / 16 Juni 2001', 'Islam', 'pns', '123', 'lubeg', 'ss', 'ss', 'ww', '2022-12-27 11:51:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sklp`
--

CREATE TABLE `tb_sklp` (
  `no_surat` varchar(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tempat_tgllahir` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `wkt_kejadian` datetime NOT NULL,
  `tempat_lapor` varchar(255) NOT NULL,
  `tempat_kejadian` varchar(255) NOT NULL,
  `terlapor` varchar(255) NOT NULL,
  `tgl_lapor` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_sklp`
--

INSERT INTO `tb_sklp` (`no_surat`, `nama`, `tempat_tgllahir`, `pekerjaan`, `alamat`, `nohp`, `email`, `wkt_kejadian`, `tempat_lapor`, `tempat_kejadian`, `terlapor`, `tgl_lapor`) VALUES
('SKLP0001', 'admin', 'batam / 2001-06-16', 'pns', 'lubeg', '123', 'admin@gmail.com', '2022-12-19 22:46:00', 'gg', 'ss', 'william', '2022-12-23 15:46:22'),
('SKLP0002', 'admin', 'batam / 2001-06-16', 'pns', 'lubeg', '123', 'admin@gmail.com', '2022-12-19 22:15:00', 'gg', 'ss', 'arbi si bantu doa', '2022-12-23 15:16:00'),
('SKLP0003', 'admin', 'Batam / 16 Juni 2001', 'pns', 'lubeg', '123', 'admin@gmail.com', '2022-12-14 12:18:00', 'gg', 'asd', 'arbi si bantu doa', '2022-12-27 05:15:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tgl_daftar` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id`, `nama`, `username`, `email`, `password`, `tgl_daftar`) VALUES
(2, 'admin', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2022-12-27 12:13:56');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_skck`
--
ALTER TABLE `tb_skck`
  ADD PRIMARY KEY (`no_surat`);

--
-- Indeks untuk tabel `tb_sklp`
--
ALTER TABLE `tb_sklp`
  ADD PRIMARY KEY (`no_surat`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

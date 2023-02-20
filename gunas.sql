-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Feb 2023 pada 10.46
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gunas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `role_id` tinyint(1) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `image` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `username`, `email`, `password`, `role_id`, `id_pegawai`, `image`) VALUES
(1, 'admin', 'admin@admin.gunasanghyang.com', '0192023a7bbd73250516f069df18b500', 1, 1, NULL),
(708, 'fahmi35', 'fahmibuayabgt@gmai.com', '482c811da5d5b4bc6d497ffa98491e38', 3, 35, 'default.jpg'),
(709, 'dewi36', NULL, '482c811da5d5b4bc6d497ffa98491e38', 3, 36, 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penginapan`
--

CREATE TABLE `data_penginapan` (
  `id_penginapan` int(4) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `no_kamar` varchar(4) NOT NULL,
  `tgl_check_in` varchar(40) NOT NULL,
  `tgl_check_out` varchar(40) NOT NULL,
  `hari_menginap` int(11) NOT NULL,
  `total_harga` double NOT NULL,
  `uang_bayar` float NOT NULL,
  `uang_kembali` float NOT NULL,
  `done` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_penginapan`
--

INSERT INTO `data_penginapan` (`id_penginapan`, `nama_pelanggan`, `no_telp`, `id_pegawai`, `no_kamar`, `tgl_check_in`, `tgl_check_out`, `hari_menginap`, `total_harga`, `uang_bayar`, `uang_kembali`, `done`) VALUES
(14, 'Toha Sudiro', '087656569999', 1, '02', '14-02-2023', '17-02-2023', 3, 600000, 5000000, 4400000, 1),
(15, 'Mikey', '087656569999', 1, '01', '14-02-2023', '23-02-2023', 9, 4050000, 4050000, 0, 1),
(16, 'Mikey', '087656564545', 1, '03', '15-02-2023', '17-02-2023', 2, 600000, 600000, 0, 1),
(17, 'Toha Sudiro', '087656569999', 1, '02', '15-02-2023', '17-02-2023', 2, 400000, 500000, 100000, 1),
(18, 'Dwi Refansyah', '087656569999', 1, '02', '15-02-2023', '17-02-2023', 2, 400000, 400000, 0, 1),
(19, 'Dwi Refansyah', '087656569999', 1, '02', '15-02-2023', '18-02-2023', 3, 600000, 600000, 0, 1),
(20, 'Toha Sudiro', '087656569999', 1, '02', '15-02-2023', '17-02-2023', 2, 400000, 400000, 0, 1),
(21, 'Dwi Refansyah', '087656569999', 1, '02', '15-02-2023', '17-02-2023', 2, 400000, 400000, 0, 1),
(22, 'Dwi Refansyah', '087656569999', 1, '02', '15-02-2023', '18-02-2023', 3, 600000, 600000, 0, 1),
(23, 'Mikey', '087656569999', 1, '02', '15-02-2023', '18-02-2023', 3, 600000, 600000, 0, 1),
(24, 'Mikey', '087656569999', 1, '03', '15-02-2023', '24-02-2023', 9, 2700000, 2700000, 0, 1),
(25, 'Dwi Refansyah', '022727536021', 1, '01', '15-02-2023', '25-02-2023', 10, 4500000, 4500000, 0, 1),
(26, 'Dwi Refansyah', '087656564545', 1, '01', '15-02-2023', '24-02-2023', 9, 4050000, 4050000, 0, 1),
(27, 'Dwi Refansyah', '087656569999', 1, '02', '15-02-2023', '18-02-2023', 3, 600000, 600000, 0, 1),
(28, 'Dwi Refansyah', '087656569999', 1, '02', '15-02-2023', '18-02-2023', 3, 600000, 600000, 0, 1),
(29, 'Dwi Refansyah', '087656569999', 1, '02', '15-02-2023', '28-02-2023', 13, 2600000, 2600000, 0, 1),
(30, 'Mikey', '087656569999', 1, '02', '16-02-2023', '17-02-2023', 1, 200000, 200000, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gamifikasi`
--

CREATE TABLE `gamifikasi` (
  `id_gamifikasi` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `point` int(11) NOT NULL,
  `badge` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gamifikasi`
--

INSERT INTO `gamifikasi` (`id_gamifikasi`, `id_akun`, `level`, `point`, `badge`) VALUES
(7, 708, 2, 309, 'Iron'),
(8, 709, 3, 129, 'Iron');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `no_kamar` varchar(4) NOT NULL,
  `tipe_kamar` varchar(255) NOT NULL,
  `harga` float NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `cek` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`no_kamar`, `tipe_kamar`, `harga`, `kapasitas`, `cek`) VALUES
('01', 'VIP', 450000, 4, 0),
('02', 'Standar', 200000, 2, 0),
('03', 'Deluxe', 300000, 3, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `jenis_kelamin` varchar(55) CHARACTER SET utf8mb4 NOT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `no_telp` varchar(13) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `jenis_kelamin`, `jabatan`, `tgl_lahir`, `tempat_lahir`, `no_telp`) VALUES
(1, 'Super Admin', 'Laki - Laki', 'Admin', '2023-02-14', 'Admin', '999999999999'),
(35, 'Fahmi Kambuaya', 'Laki - Laki', 'Pelayan', '2001-12-12', 'Tangerang', '087656564547'),
(36, 'Dewi Irfansyah', 'Perempuan', 'Pelayan', '2001-12-12', 'Tangerang', '022727536021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `no_telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_universitas` (`id_pegawai`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indeks untuk tabel `data_penginapan`
--
ALTER TABLE `data_penginapan`
  ADD PRIMARY KEY (`id_penginapan`);

--
-- Indeks untuk tabel `gamifikasi`
--
ALTER TABLE `gamifikasi`
  ADD PRIMARY KEY (`id_gamifikasi`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`no_kamar`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=710;

--
-- AUTO_INCREMENT untuk tabel `data_penginapan`
--
ALTER TABLE `data_penginapan`
  MODIFY `id_penginapan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `gamifikasi`
--
ALTER TABLE `gamifikasi`
  MODIFY `id_gamifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

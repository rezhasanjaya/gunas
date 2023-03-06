-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Feb 2023 pada 14.19
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
(717, 'gunaspelayan44', NULL, '482c811da5d5b4bc6d497ffa98491e38', 2, 44, 'default.jpg'),
(718, 'gunastoha45', NULL, '482c811da5d5b4bc6d497ffa98491e38', 2, 45, 'default.jpg'),
(719, 'gunassuript046', NULL, '482c811da5d5b4bc6d497ffa98491e38', 2, 46, 'default.jpg');

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
  `done` int(11) NOT NULL,
  `pelayanan` int(11) NOT NULL,
  `dirapikan` int(11) NOT NULL,
  `complete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_penginapan`
--

INSERT INTO `data_penginapan` (`id_penginapan`, `nama_pelanggan`, `no_telp`, `id_pegawai`, `no_kamar`, `tgl_check_in`, `tgl_check_out`, `hari_menginap`, `total_harga`, `uang_bayar`, `uang_kembali`, `done`, `pelayanan`, `dirapikan`, `complete`) VALUES
(14, 'Toha Sudiro', '087656569999', 1, '02', '14-02-2023', '17-02-2023', 3, 600000, 5000000, 4400000, 1, 1, 1, 1),
(15, 'Mikey', '087656569999', 1, '01', '14-02-2023', '23-02-2023', 9, 4050000, 4050000, 0, 1, 1, 1, 1),
(16, 'Mikey', '087656564545', 1, '03', '15-02-2023', '17-02-2023', 2, 600000, 600000, 0, 1, 1, 1, 1),
(17, 'Toha Sudiro', '087656569999', 1, '02', '15-02-2023', '17-02-2023', 2, 400000, 500000, 100000, 1, 1, 1, 1),
(18, 'Dwi Refansyah', '087656569999', 1, '02', '15-02-2023', '17-02-2023', 2, 400000, 400000, 0, 1, 1, 1, 1),
(19, 'Dwi Refansyah', '087656569999', 1, '02', '15-02-2023', '18-02-2023', 3, 600000, 600000, 0, 1, 1, 1, 1),
(20, 'Toha Sudiro', '087656569999', 1, '02', '15-02-2023', '17-02-2023', 2, 400000, 400000, 0, 1, 1, 1, 1),
(21, 'Dwi Refansyah', '087656569999', 1, '02', '15-02-2023', '17-02-2023', 2, 400000, 400000, 0, 1, 1, 1, 1),
(22, 'Dwi Refansyah', '087656569999', 1, '02', '15-02-2023', '18-02-2023', 3, 600000, 600000, 0, 1, 1, 1, 1),
(23, 'Mikey', '087656569999', 1, '02', '15-02-2023', '18-02-2023', 3, 600000, 600000, 0, 1, 1, 1, 1),
(24, 'Mikey', '087656569999', 1, '03', '15-02-2023', '24-02-2023', 9, 2700000, 2700000, 0, 1, 1, 1, 1),
(25, 'Dwi Refansyah', '022727536021', 1, '01', '15-02-2023', '25-02-2023', 10, 4500000, 4500000, 0, 1, 1, 1, 0),
(26, 'Dwi Refansyah', '087656564545', 1, '01', '15-02-2023', '24-02-2023', 9, 4050000, 4050000, 0, 1, 1, 1, 0),
(27, 'Dwi Refansyah', '087656569999', 1, '02', '15-02-2023', '18-02-2023', 3, 600000, 600000, 0, 1, 1, 1, 1),
(28, 'Dwi Refansyah', '087656569999', 1, '02', '15-02-2023', '18-02-2023', 3, 600000, 600000, 0, 1, 1, 1, 1),
(29, 'Dwi Refansyah', '087656569999', 1, '02', '15-02-2023', '28-02-2023', 13, 2600000, 2600000, 0, 1, 1, 1, 1),
(30, 'Mikey', '087656569999', 1, '02', '16-02-2023', '17-02-2023', 1, 200000, 200000, 0, 1, 1, 1, 1),
(31, 'Toha Sudiro', '087656564545', 1, '02', '17-02-2023', '18-02-2023', 1, 200000, 200000, 0, 1, 1, 1, 1),
(32, 'Toha Sudiro', '087656564545', 1, '03', '21-02-2023', '25-02-2023', 4, 1200000, 1200000, 0, 1, 1, 1, 0),
(33, 'Susanto', '087656569999', 1, '02', '21-02-2023', '28-02-2023', 7, 1400000, 1400000, 0, 1, 1, 1, 1),
(34, 'Mikey', '087656569999', 1, '02', '22-02-2023', '25-02-2023', 3, 600000, 600000, 0, 1, 1, 1, 1),
(35, 'Jarwo', '087656564545', 46, '02', '22-02-2023', '28-02-2023', 6, 1200000, 1200000, 0, 0, 0, 0, 0),
(36, 'Tomimey', '087656564547', 1, '04', '22-02-2023', '27-02-2023', 5, 1000000, 1000000, 0, 1, 1, 1, 1),
(37, 'Luna', '087656564545', 46, '05', '22-02-2023', '27-02-2023', 5, 1500000, 1500000, 0, 0, 0, 0, 0),
(38, 'Bruzce', '08765656991', 46, '03', '22-02-2023', '28-02-2023', 6, 1800000, 1800000, 0, 0, 0, 0, 0),
(39, 'Madona', '08765656991', 1, '01', '22-02-2023', '24-02-2023', 2, 900000, 900000, 0, 0, 0, 0, 0),
(40, 'Wayne Stark', '087656564547', 46, '07', '22-02-2023', '25-02-2023', 3, 1350000, 1350000, 0, 0, 0, 0, 0),
(41, 'Junaide', '087656564547', 46, '06', '22-02-2023', '28-02-2023', 6, 2700000, 2700000, 0, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gamifikasi`
--

CREATE TABLE `gamifikasi` (
  `id_gamifikasi` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `min_point` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `point` int(11) NOT NULL,
  `max_point` int(11) NOT NULL,
  `month_point` int(11) NOT NULL,
  `badge` varchar(255) DEFAULT NULL,
  `misi_selesai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gamifikasi`
--

INSERT INTO `gamifikasi` (`id_gamifikasi`, `id_akun`, `min_point`, `level`, `point`, `max_point`, `month_point`, `badge`, `misi_selesai`) VALUES
(16, 717, 50, 2, 80, 100, 20, 'Iron', 11),
(17, 718, 0, 1, 0, 50, 0, 'Iron', 0),
(18, 719, 50, 2, 85, 100, 85, 'Iron', 12);

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
('01', 'VIP', 450000, 4, 1),
('02', 'Standar', 200000, 2, 1),
('03', 'Deluxe', 300000, 3, 1),
('04', 'Standar', 200000, 2, 0),
('05', 'Deluxe', 300000, 3, 1),
('06', 'VIP', 450000, 4, 0),
('07', 'VIP', 450000, 4, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mission`
--

CREATE TABLE `mission` (
  `id_mission` int(11) NOT NULL,
  `id_gamifikasi` int(11) DEFAULT NULL,
  `mission` text NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `point` int(11) NOT NULL,
  `done` int(11) NOT NULL,
  `utility` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mission`
--

INSERT INTO `mission` (`id_mission`, `id_gamifikasi`, `mission`, `keterangan`, `point`, `done`, `utility`) VALUES
(5, 16, 'Melayani Pelanggan', 'Layani pelanggan yang datang dengan membawa dan mengantarkan pelanggan menuju kamar', 10, 0, NULL),
(6, 16, 'Merapikan Kamar', 'Merapikan kamar yang telah diisi pelanggan setelah melakukan check out', 5, 0, NULL),
(7, 17, 'Melayani Pelanggan', 'Layani pelanggan yang datang dengan membawa dan mengantarkan pelanggan menuju kamar', 10, 0, NULL),
(8, 17, 'Merapikan Kamar', 'Merapikan kamar yang telah diisi pelanggan setelah melakukan check out', 5, 0, NULL),
(9, 18, 'Melayani Reservasi', 'melayani pelanggan yang reservasi', 10, 0, NULL),
(10, 18, 'Merapikan Kunci', 'Merapikan kunci kamar sesuai dengan kategori kamar', 5, 0, NULL);

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
(44, 'Pelayan Setia', 'Laki - Laki', 'Pelayan', '2001-12-12', 'Underwater', '086521632172'),
(45, 'Toha Suganda', 'Laki - Laki', 'Pelayan', '2000-12-12', 'Underheaven', '087656564547'),
(46, 'Suript0', 'Laki - Laki', 'Resepsionis', '2001-12-12', 'London', '087656564547');

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
-- Indeks untuk tabel `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`id_mission`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=720;

--
-- AUTO_INCREMENT untuk tabel `data_penginapan`
--
ALTER TABLE `data_penginapan`
  MODIFY `id_penginapan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `gamifikasi`
--
ALTER TABLE `gamifikasi`
  MODIFY `id_gamifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `mission`
--
ALTER TABLE `mission`
  MODIFY `id_mission` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

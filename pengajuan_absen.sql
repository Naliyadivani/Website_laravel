-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Nov 2023 pada 02.19
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_absen`
--

CREATE TABLE `pengajuan_absen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pengajuan_absen` varchar(191) NOT NULL,
  `nik` int(11) NOT NULL,
  `comp_code` varchar(191) NOT NULL,
  `tipe_absen_id` varchar(191) NOT NULL,
  `deskripsi` varchar(191) NOT NULL,
  `mulai_absen` date NOT NULL,
  `akhir_absen` date NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `status` varchar(191) NOT NULL,
  `created_by` varchar(191) NOT NULL,
  `keterangan` varchar(191) NOT NULL,
  `periode` varchar(191) NOT NULL,
  `approved_by` varchar(191) NOT NULL,
  `jumlah_hari_kalender` int(11) NOT NULL,
  `jumlah_hari_kerja` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengajuan_absen`
--
ALTER TABLE `pengajuan_absen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengajuan_absen`
--
ALTER TABLE `pengajuan_absen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

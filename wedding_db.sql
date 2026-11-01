-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Bulan Mei 2026 pada 17.19
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ucapan`
--

CREATE TABLE `ucapan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `kehadiran` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ucapan`
--

INSERT INTO `ucapan` (`id`, `nama`, `pesan`, `created_at`, `kehadiran`) VALUES
(2, 'Fitri', 'Selamat', '2026-05-10 17:11:40', 'Hadir'),
(3, 'Cahaya', 'Congrast', '2026-05-10 17:12:22', 'Hadir'),
(4, 'ew', 'fesg', '2026-05-10 17:15:50', 'Hadir'),
(5, 'fsdf', 'dfzzb', '2026-05-10 17:20:51', 'Tidak Hadir'),
(6, 'Aku', 'Happy Wedding', '2026-05-10 17:31:08', 'Hadir'),
(7, 'You', 'huyaeqg', '2026-05-11 02:05:27', 'Hadir'),
(8, 'ko', 'jhu', '2026-05-11 02:15:49', 'Hadir'),
(9, 'regrt', 'trhstrh', '2026-05-14 08:26:35', 'Hadir'),
(10, 'dvseg', 'rhsr', '2026-05-14 11:57:46', 'Tidak Hadir');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ucapan`
--
ALTER TABLE `ucapan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ucapan`
--
ALTER TABLE `ucapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

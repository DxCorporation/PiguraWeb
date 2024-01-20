-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jan 2024 pada 05.10
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pigura_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `register_estimasis`
--

CREATE TABLE `register_estimasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip` varchar(45) NOT NULL,
  `name` varchar(100) NOT NULL,
  `umur` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `hits` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `register_estimasis`
--

INSERT INTO `register_estimasis` (`id`, `ip`, `name`, `umur`, `alamat`, `hits`, `created_at`, `updated_at`) VALUES
(2, '127.0.0.1', 'Putranta Aswintama', 21, 'Dengok wetan rt19 rw08, kebondalem lor, prambanan, klaten, Jawa Tengah', 1, '2024-01-19 21:05:28', '2024-01-19 21:05:28'),
(3, '127.0.0.1', 'Putranta Aswintama', 21, 'Dengok wetan rt19 rw08, kebondalem lor, prambanan, klaten, Jawa Tengah', 1, '2024-01-19 21:06:18', '2024-01-19 21:06:18');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `register_estimasis`
--
ALTER TABLE `register_estimasis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `register_estimasis`
--
ALTER TABLE `register_estimasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

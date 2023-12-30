-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Des 2023 pada 14.25
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
-- Struktur dari tabel `bahans`
--

CREATE TABLE `bahans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bahans`
--

INSERT INTO `bahans` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Kayu', '2023-11-29 02:53:56', '2023-11-29 02:53:56'),
(2, 'Triplek', '2023-11-29 02:56:23', '2023-11-29 02:56:23'),
(3, 'Kaca', '2023-11-29 02:58:51', '2023-11-29 02:58:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) NOT NULL,
  `slug` varchar(60) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Pigura', 'pigura', '2023-12-29 21:59:33', '2023-12-29 21:59:33'),
(2, 'Kaca', 'kaca', '2023-12-29 22:05:55', '2023-12-29 22:05:55'),
(4, 'Seni', 'seni', '2023-12-29 22:10:50', '2023-12-29 22:10:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `estimasis`
--

CREATE TABLE `estimasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `desc` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `formulas`
--

CREATE TABLE `formulas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `produk_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `formulas`
--

INSERT INTO `formulas` (`id`, `produk_id`, `created_at`, `updated_at`) VALUES
(8, 6, '2023-12-11 20:55:37', '2023-12-11 20:55:37'),
(9, 5, '2023-12-11 20:55:59', '2023-12-11 20:55:59'),
(10, 7, '2023-12-11 20:57:07', '2023-12-11 20:57:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `formula_details`
--

CREATE TABLE `formula_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `formula_id` bigint(20) UNSIGNED NOT NULL,
  `bahan_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `formula_details`
--

INSERT INTO `formula_details` (`id`, `formula_id`, `bahan_id`, `qty`, `created_at`, `updated_at`) VALUES
(4, 4, 3, 100, '2023-11-29 07:57:04', '2023-11-29 07:57:04'),
(5, 4, 2, 80, '2023-11-29 07:57:04', '2023-11-29 07:57:04'),
(6, 4, 1, 50, '2023-11-29 07:57:04', '2023-11-29 07:57:04'),
(7, 5, 3, 120, '2023-12-01 02:56:33', '2023-12-01 02:56:33'),
(8, 5, 2, 100, '2023-12-01 02:56:33', '2023-12-01 02:56:33'),
(9, 5, 1, 80, '2023-12-01 02:56:33', '2023-12-01 02:56:33'),
(10, 6, 3, 170, '2023-12-01 02:58:52', '2023-12-01 02:58:52'),
(11, 6, 2, 140, '2023-12-01 02:58:52', '2023-12-01 02:58:52'),
(12, 6, 1, 110, '2023-12-01 02:58:52', '2023-12-01 02:58:52'),
(13, 7, 3, 24, '2023-12-01 04:11:43', '2023-12-01 04:11:43'),
(14, 7, 2, 234, '2023-12-01 04:11:44', '2023-12-01 04:11:44'),
(15, 7, 1, 23, '2023-12-01 04:11:44', '2023-12-01 04:11:44'),
(16, 8, 3, 80, '2023-12-11 20:55:37', '2023-12-11 20:55:37'),
(17, 8, 2, 300, '2023-12-11 20:55:37', '2023-12-11 20:55:37'),
(18, 8, 1, 320, '2023-12-11 20:55:37', '2023-12-11 20:55:37'),
(19, 9, 3, 100, '2023-12-11 20:55:59', '2023-12-11 20:55:59'),
(20, 9, 2, 500, '2023-12-11 20:55:59', '2023-12-11 20:55:59'),
(21, 9, 1, 520, '2023-12-11 20:55:59', '2023-12-11 20:55:59'),
(22, 10, 3, 130, '2023-12-11 20:57:07', '2023-12-11 20:57:07'),
(23, 10, 2, 875, '2023-12-11 20:57:07', '2023-12-11 20:57:07'),
(24, 10, 1, 900, '2023-12-11 20:57:07', '2023-12-11 20:57:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_27_120649_create_produk_models_table', 1),
(6, '2023_11_27_124150_create_bahan_models_table', 1),
(7, '2023_11_27_125717_create_estimasi_models_table', 2),
(8, '2023_11_27_130343_create_produks_table', 3),
(9, '2023_11_27_130356_create_bahans_table', 3),
(10, '2023_11_27_130536_create_produk_bahans_table', 3),
(11, '2023_11_27_131015_create_estimasis_table', 3),
(12, '2023_11_29_111504_create_formulas_table', 4),
(13, '2023_11_29_111542_create_formula_details_table', 4),
(14, '2014_10_12_100000_create_password_resets_table', 5),
(15, '2023_12_30_041116_create_categories_table', 5),
(16, '2023_12_30_042153_create_table_produk', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produks`
--

INSERT INTO `produks` (`id`, `category_id`, `nama`, `slug`, `img`, `desc`, `harga`, `created_at`, `updated_at`) VALUES
(1, 1, 'Frame foto/ pigura foto/ pigura / bingkai foto 10R', 'frame-foto-pigura-foto-pigura-bingkai-foto-10r', '658fadaa52fca.jpeg', '<p>HASIL PRODUKSI SENDIRI YA :)</p>\r\n\r\n<p>❤︎Untuk foto ukuran 10R 20x25cm</p>\r\n\r\n<p>❤︎Bahan frame</p>\r\n\r\n<ul>\r\n	<li>menggunakan fiber minimalis anti rayap, anti air &amp; anti jamur</li>\r\n	<li>kaca bening 2mm</li>\r\n	<li>bagian belakang ada tutupnya</li>\r\n	<li>sudah dipasangi gantungan, tinggal pasang ditembok</li>\r\n</ul>', 25000, '2023-12-29 22:42:02', '2023-12-29 22:42:02'),
(3, 1, 'FRAME FOTO / FIGURA / PIGURA / BINGKAI A4', 'frame-foto-figura-pigura-bingkai-a4', '658fc21bb348e.jpeg', '<p>Ukuran 8RP PAS 20X30</p>\r\n\r\n<p>Bahan Fiber</p>\r\n\r\n<p>model Motif</p>\r\n\r\n<p>Sudah termasuk Kaca</p>\r\n\r\n<p>biasa dipakai untuk foto IJASAH atau ukuran A4</p>\r\n\r\n<p>Warna yang tersedia</p>\r\n\r\n<p>-Silver</p>\r\n\r\n<p>-Gold</p>\r\n\r\n<p>-Cokelat</p>', 18000, '2023-12-30 00:09:15', '2023-12-30 00:09:15'),
(4, 1, 'BINGKAI PIGURA FOTO 4R MINIMALIS', 'bingkai-pigura-foto-4r-minimalis', '658fd1aa711ae.jpeg', '<p>Warna frame :</p>\r\n\r\n<p>-Putih</p>\r\n\r\n<p>-Kayu</p>\r\n\r\n<p>-Hitam</p>', 15000, '2023-12-30 01:15:38', '2023-12-30 01:15:38'),
(5, 1, 'Frame Foto / Pigura 5R  Susun', 'frame-foto-pigura-5r-susun', '658fd2ae4edfc.jpeg', '<p>Frame 5R PP (susun 3)</p>\r\n\r\n<p>include kaca</p>\r\n\r\n<p>Bahan kayu premium</p>\r\n\r\n<p>Kualitas super.. Kuat dan tidak mudah keropos</p>\r\n\r\n<p>Bisa standing dan bisa gantung</p>', 30000, '2023-12-30 01:19:58', '2023-12-30 01:21:06'),
(6, 2, 'Kaca  / Cermin Full body  120x43cm', 'kaca-cermin-full-body-120x43cm', '658fd54c0f82a.jpeg', '<p>Cermin Full body Standing Mirror kami produksi sendiri dengan spek istimewa</p>\r\n\r\n<p>✅ Menggunakan bingkai minimalis modern</p>\r\n\r\n<p>✅ CERMIN STANDING : ADA STAND</p>\r\n\r\n<p>✅ Ukuran keseluruhan 120x43cm // 128x48 cm (ukuran termasuk bingkai)</p>\r\n\r\n<p>✅ Berbahan kaca cermin</p>\r\n\r\n<p>✅ Standing dengan penyangga</p>\r\n\r\n<p>✅ Bahan bingkai fiber premium anti rayap, anti air</p>\r\n\r\n<p>✅ Kaca cermin sudah dilap bersih siap pakai 👍🏼</p>\r\n\r\n<p>✅ Real picture 100%</p>\r\n\r\n<p>Bisa custom warna</p>\r\n\r\n<p>💕 Putih</p>\r\n\r\n<p>💕 Coklat</p>\r\n\r\n<p>💕 Hitam</p>', 230000, '2023-12-30 01:31:08', '2023-12-30 01:31:08'),
(7, 2, 'kaca cermin dinding size 25x65cm', 'kaca-cermin-dinding-size-25x65cm', '658fd92dd43e0.jpeg', '<p>- size 25x65cm</p>\r\n\r\n<p>- frame bahan fiber (tahan air dan anti rayap)</p>\r\n\r\n<p>- belakang kaca lapis triplek (anti jamur)</p>', 80000, '2023-12-30 01:47:41', '2023-12-30 01:47:41'),
(8, 4, 'Hiasan Dinding  Ayat Qursy plus Bingkai  50cm x 100 cm', 'hiasan-dinding-ayat-qursy-plus-bingkai-50cm-x-100-cm', '658fda0d73760.jpeg', '<p>kaligrafi cetak plus bingkai uk;50cm x 100cn</p>\r\n\r\n<p>bahan flexy</p>\r\n\r\n<p>bahan bingkai kayu</p>\r\n\r\n<p>pemakaian mika</p>\r\n\r\n<p>sudah lengkap pin &amp; paku gantungan&nbsp;</p>\r\n\r\n<p>sangat cocok untuk dekorasi ruangan anda</p>', 130000, '2023-12-30 01:51:25', '2023-12-30 01:52:27'),
(9, 4, 'Lukisan Pemandangan plus Bingkai 65cm × 45cm', 'lukisan-pemandangan-plus-bingkai-65cm-45cm', '658fdc46aa061.jpeg', '<p>lukisan cetak Plus bingkai ukuran 65&times;45</p>\r\n\r\n<p>bahan flexy .</p>\r\n\r\n<p>bahan mengkilap dan awet</p>\r\n\r\n<p>bahan bingkai terbuat dari kayu berkualitas</p>\r\n\r\n<p>desain bingkai elegant</p>\r\n\r\n<p>desain lukisan modern kalsik religius dll</p>\r\n\r\n<p>cocok buat Hiasan dinding</p>', 180000, '2023-12-30 02:00:54', '2023-12-30 02:01:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'putranta', 'putrantaaswintama21@gmail.com', NULL, '$2y$12$tLtk61Ynu1d5NKPnWDDjt.XpFshqr7FnjtH0bjMxHws/aJFnepQKy', NULL, '2023-12-13 22:19:54', '2023-12-13 22:19:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `hits` int(11) NOT NULL,
  `online` int(20) NOT NULL,
  `time` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `visitors`
--

INSERT INTO `visitors` (`id`, `ip`, `date`, `hits`, `online`, `time`, `created_at`, `updated_at`) VALUES
(14, '127.0.0.1', '2023-12-30', 4, 1703940665, '2023-12-30 10:48:13', '2023-12-30 03:48:13', '2023-12-30 12:51:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bahans`
--
ALTER TABLE `bahans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `estimasis`
--
ALTER TABLE `estimasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `formulas`
--
ALTER TABLE `formulas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `formulas_produk_id_index` (`produk_id`);

--
-- Indeks untuk tabel `formula_details`
--
ALTER TABLE `formula_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `formula_details_formula_id_index` (`formula_id`),
  ADD KEY `formula_details_bahan_id_index` (`bahan_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produks_category_id_index` (`category_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bahans`
--
ALTER TABLE `bahans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `estimasis`
--
ALTER TABLE `estimasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `formulas`
--
ALTER TABLE `formulas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `formula_details`
--
ALTER TABLE `formula_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `formulas`
--
ALTER TABLE `formulas`
  ADD CONSTRAINT `formulas_produk_id_foreign` FOREIGN KEY (`produk_id`) REFERENCES `produks` (`id`);

--
-- Ketidakleluasaan untuk tabel `formula_details`
--
ALTER TABLE `formula_details`
  ADD CONSTRAINT `formula_details_bahan_id_foreign` FOREIGN KEY (`bahan_id`) REFERENCES `bahans` (`id`),
  ADD CONSTRAINT `formula_details_formula_id_foreign` FOREIGN KEY (`formula_id`) REFERENCES `formulas` (`id`);

--
-- Ketidakleluasaan untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD CONSTRAINT `produks_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

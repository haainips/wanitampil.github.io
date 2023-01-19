-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jan 2023 pada 11.36
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wanitampil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `katalog`
--

CREATE TABLE `katalog` (
  `id` int(5) NOT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `url` varchar(150) NOT NULL,
  `kategori` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `katalog`
--

INSERT INTO `katalog` (`id`, `nama`, `harga`, `url`, `kategori`) VALUES
(44, 'Relaxed T Shirt', 80000, 'https://hm-media-prod.s3.amazonaws.com/pub/media/catalog/product/medium/b8d06e38d9144ba75166a75aa8e6ec2c25c1569d_xxl-1.jpg', 'T Shirt'),
(45, 'T Shirt', 70000, 'https://hm-media-prod.s3.amazonaws.com/pub/media/catalog/product/medium/a3bfc81d2db797e2d85fb0348b88c86e71561dee_xxl-1.jpg', 'T Shirt'),
(46, 'Black Shirt', 75000, 'https://hm-media-prod.s3.amazonaws.com/pub/media/catalog/product/medium/00cbd46b021cb2a969adb568b23ac7c8564c39ef_xxl-1.jpg', 'T Shirt'),
(47, 'Relaxed Hoodie Blue', 250000, 'https://hm-media-prod.s3.amazonaws.com/pub/media/catalog/product/medium/b68f8925c6cbce864d2f95dfb54c7078dba8ad76_xxl-1.jpg', 'hoodie'),
(49, 'Hooded Top Blue Ocean', 200000, 'https://hm-media-prod.s3.amazonaws.com/pub/media/catalog/product/medium/dede46957c757e840b23ff94d99b5b1f58994dcd_xxl-1.jpg', 'Hoodie'),
(50, 'Socks', 180000, 'https://d29c1z66frfv6c.cloudfront.net/pub/media/catalog/product/large/aa40913d0a2d41c8855193ae6b6749130d48094a_xxl-1.jpg', 'socks');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `password` varchar(150) DEFAULT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `gambar`, `password`, `role_id`) VALUES
(6, 'admin', 'admin@gmail.com', 'default.jpg', '$2y$10$rdrFmXD.S4rFVUdlJiqpue2qvGgvU4HUDeMinBV8t6QFpSLCws2RG', 1),
(7, 'wanitampil', 'wanitampil@gmail.com', 'default.jpg', '$2y$10$jgLtbO6RDW57o/oRcwpt..gtUh9vjZThqlkYGySTOSp7h2r63tyfG', 2),
(8, 'user', 'user@gmail.com', 'default.jpg', '$2y$10$OamdOR.CupyqiVKiF8.FKO5TCo65yKNLRC95PkqegOwqK82izpUC2', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

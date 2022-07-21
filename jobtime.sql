-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 06:47 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobtime`
--

-- --------------------------------------------------------

--
-- Table structure for table `chart`
--

CREATE TABLE `chart` (
  `id` int(11) NOT NULL,
  `month` varchar(100) NOT NULL,
  `sales` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chart`
--

INSERT INTO `chart` (`id`, `month`, `sales`) VALUES
(1, 'Januari', 100),
(2, 'Februari', 200),
(3, 'Maret', 150),
(4, 'April', 300),
(5, 'Mei', 400),
(6, 'Juni', 390),
(7, 'Juli', 350),
(8, 'Agustus', 290),
(9, 'September', 500),
(10, 'Oktober', 520),
(11, 'November', 600),
(12, 'Desember', 650);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jobs`
--

CREATE TABLE `tb_jobs` (
  `likes` int(1) NOT NULL DEFAULT 0,
  `id_jobs` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_jobs_status` int(1) NOT NULL,
  `logo` varchar(300) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `perusahaan_nama` varchar(100) NOT NULL,
  `perusahaan_lokasi` varchar(100) NOT NULL,
  `gaji` int(30) DEFAULT NULL,
  `deskripsi` varchar(500) DEFAULT NULL,
  `syarat` varchar(500) DEFAULT NULL,
  `jobs_created_at` datetime NOT NULL,
  `jobs_updated_at` datetime DEFAULT NULL,
  `deadline` datetime NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jobs`
--

INSERT INTO `tb_jobs` (`likes`, `id_jobs`, `id_user`, `id_jobs_status`, `logo`, `judul`, `perusahaan_nama`, `perusahaan_lokasi`, `gaji`, `deskripsi`, `syarat`, `jobs_created_at`, `jobs_updated_at`, `deadline`, `link`) VALUES
(0, 12, 1, 2, 'Warna-Background-Foto-Buku-Nikah.jpg', 'asdasdsad', 'asdasd', 'wringin anom', 12321312, 'asdasd', 'asdasdasdasdas', '2022-06-26 17:03:22', '2022-06-26 17:04:02', '2022-06-16 17:03:00', 'https://wa.me/+6283831720576'),
(0, 14, 10, 2, 'Screenshot_(1).png', 'barbershop', 'jober', 'wringin anom', 1111111, '123', '123', '2022-06-30 06:48:17', '2022-06-30 06:48:51', '2022-07-30 06:47:00', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jobs_fav`
--

CREATE TABLE `tb_jobs_fav` (
  `id_jobs_fav` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_jobs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jobs_status`
--

CREATE TABLE `tb_jobs_status` (
  `id_jobs_status` int(1) NOT NULL,
  `name_jobs_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jobs_status`
--

INSERT INTO `tb_jobs_status` (`id_jobs_status`, `name_jobs_status`) VALUES
(1, 'Belum direview'),
(2, 'Terkonfirmasi'),
(3, 'Kadaluarsa'),
(4, 'Ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(10) NOT NULL,
  `id_role` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `foto` varchar(30) DEFAULT NULL,
  `provinsi` varchar(30) DEFAULT NULL,
  `kota` varchar(30) DEFAULT NULL,
  `kecamatan` varchar(30) DEFAULT NULL,
  `desa` varchar(30) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `id_role`, `nama`, `email`, `password`, `no_hp`, `tgl_lahir`, `jenis_kelamin`, `foto`, `provinsi`, `kota`, `kecamatan`, `desa`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dave', 'dave@gmail.com', '1610838743cc90e3e4fdda748282d9b8', '081234081234', '2000-01-02', 'Laki - Laki', 'default.jpg', 'Jawa Timur', 'Jember', 'Sumbersari', 'Sumbersari', 'Jl. Kalimantan', '2022-06-09 06:37:17', '2022-06-10 16:21:43'),
(2, 2, 'Toni', 'toni@gmail.com', 'aefe34008e63f1eb205dc4c4b8322253', '082345082345', '2000-02-02', 'Laki - Laki', 'default.jpg', 'Jawa Timur', 'Situbondo', 'Panji', 'Mimbaan', 'Jl. Semeru', '2022-06-09 06:39:02', '2022-06-09 06:39:02'),
(3, 2, 'Arman', 'armanmaulanasaputra15@gmail.com', '66059a527018b32e4597dd27574929f6', '', '0000-00-00', 'Laki- Laki', 'default.jpg', '', '', '', '', 'Lumajang', '2022-06-12 14:29:13', '2022-06-12 19:33:33'),
(4, 2, 'coba', 'coba@gmail.com', '1621a5dc746d5d19665ed742b2ef9736', NULL, NULL, NULL, 'default.jpg', NULL, NULL, NULL, NULL, NULL, '2022-06-17 16:04:43', '2022-06-17 16:04:43'),
(5, 1, 'admin1', 'admin1@gmail.com', '0192023a7bbd73250516f069df18b500', NULL, NULL, NULL, 'default.jpg', NULL, NULL, NULL, NULL, NULL, '2022-06-18 23:27:58', '2022-06-18 23:27:58'),
(6, 1, 'admin', 'admin@m.m', '21232f297a57a5a743894a0e4a801fc3', NULL, NULL, NULL, 'default.jpg', NULL, NULL, NULL, NULL, NULL, '2022-06-18 23:30:28', '2022-06-18 23:30:28'),
(7, 1, 'adminn', 'adminn@gmail.com', '9c1ad00a16a7c67e2727b471ac969e96', NULL, NULL, NULL, 'default.jpg', NULL, NULL, NULL, NULL, NULL, '2022-06-18 23:31:47', '2022-06-18 23:31:47'),
(8, 1, 'ada', 'ada@gmail.com', '52cb2d1dfc5484bdb5c5077b75b1a9f4', NULL, NULL, NULL, 'default.jpg', NULL, NULL, NULL, NULL, NULL, '2022-06-29 03:11:42', '2022-06-29 03:11:42'),
(9, 3, 'recruiter1', 'recruiter1@gmail.com', 'e1c1dd417ec85e8d75882a82e59ca10b', NULL, NULL, NULL, 'default.jpg', NULL, NULL, NULL, NULL, NULL, '2022-06-29 05:59:00', '2022-06-29 05:59:00'),
(10, 3, 'r1', 'rq@r1', '18f9436e6e7ecba68ba1034460a7617f', NULL, NULL, NULL, 'default.jpg', NULL, NULL, NULL, NULL, NULL, '2022-06-29 06:20:47', '2022-06-29 06:20:47'),
(11, 3, 'rrr', 'rrr@rrr', '517a7d396856e2182621e311b4af5ca8', NULL, NULL, NULL, 'default.jpg', NULL, NULL, NULL, NULL, NULL, '2022-06-29 06:21:57', '2022-06-29 06:21:57'),
(12, 2, 'r', 'r@r', '577861a6095d8f211c80097b2fb5872e', NULL, NULL, NULL, 'default.jpg', NULL, NULL, NULL, NULL, NULL, '2022-06-29 13:07:40', '2022-06-29 13:07:40');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_role`
--

CREATE TABLE `tb_user_role` (
  `id_role` int(1) NOT NULL,
  `nama_role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user_role`
--

INSERT INTO `tb_user_role` (`id_role`, `nama_role`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Recruiter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chart`
--
ALTER TABLE `chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jobs`
--
ALTER TABLE `tb_jobs`
  ADD PRIMARY KEY (`id_jobs`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_jobs_status` (`id_jobs_status`);

--
-- Indexes for table `tb_jobs_fav`
--
ALTER TABLE `tb_jobs_fav`
  ADD PRIMARY KEY (`id_jobs_fav`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_jobs` (`id_jobs`);

--
-- Indexes for table `tb_jobs_status`
--
ALTER TABLE `tb_jobs_status`
  ADD PRIMARY KEY (`id_jobs_status`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_role` (`id_role`);

--
-- Indexes for table `tb_user_role`
--
ALTER TABLE `tb_user_role`
  ADD PRIMARY KEY (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chart`
--
ALTER TABLE `chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_jobs`
--
ALTER TABLE `tb_jobs`
  MODIFY `id_jobs` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_jobs_fav`
--
ALTER TABLE `tb_jobs_fav`
  MODIFY `id_jobs_fav` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_jobs_status`
--
ALTER TABLE `tb_jobs_status`
  MODIFY `id_jobs_status` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_user_role`
--
ALTER TABLE `tb_user_role`
  MODIFY `id_role` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_jobs`
--
ALTER TABLE `tb_jobs`
  ADD CONSTRAINT `tb_jobs_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`),
  ADD CONSTRAINT `tb_jobs_ibfk_2` FOREIGN KEY (`id_jobs_status`) REFERENCES `tb_jobs_status` (`id_jobs_status`);

--
-- Constraints for table `tb_jobs_fav`
--
ALTER TABLE `tb_jobs_fav`
  ADD CONSTRAINT `id_jobs` FOREIGN KEY (`id_jobs`) REFERENCES `tb_jobs` (`id_jobs`),
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `tb_user_role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

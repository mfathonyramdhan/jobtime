-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 01:45 AM
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
-- Table structure for table `tb_jobs`
--

CREATE TABLE `tb_jobs` (
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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `deadline` datetime NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jobs`
--

INSERT INTO `tb_jobs` (`id_jobs`, `id_user`, `id_jobs_status`, `logo`, `judul`, `perusahaan_nama`, `perusahaan_lokasi`, `gaji`, `deskripsi`, `syarat`, `created_at`, `updated_at`, `deadline`, `link`) VALUES
(1, 1, 1, 'job1.png', 'Front-End Developer', 'PT. Djaya Tech. Solution', 'Jawa Timur - Jember', 5000000, 'Dibutuhkan FE Web Dev di perusahaan kami dengan jobdesk sebagai berikut : Mengatur tampilan website dan maintenance UI / UX', '1. S1 Teknologi Informasi, \r\n2. Mampu Bekerja Sama dengan Tim, \r\n3. Mampu bekerja dibawah tekanan, \r\n4. Menyukai tantangan', '2022-06-09 06:41:44', '2022-06-09 06:41:44', '2022-07-31 13:39:15', 'https://wa.me/+62895337337339');

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
(3, 'Kadaluarsa');

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
  `tgl_lahir` datetime DEFAULT NULL,
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
(1, 1, 'Dave', 'dave@gmail.com', 'dave', '081234081234', '2000-01-01 13:34:50', 'Laki - Laki', 'dave.png', 'Jawa Timur', 'Jember', 'Sumbersari', 'Sumbersari', 'Jl. Kalimantan', '2022-06-09 06:37:17', '2022-06-09 06:37:17'),
(2, 2, 'Toni', 'toni@gmail.com', 'toni', '082345082345', '2000-02-02 13:37:43', 'Laki - Laki', 'toni.png', 'Jawa Timur', 'Situbondo', 'Panji', 'Mimbaan', 'Jl. Semeru', '2022-06-09 06:39:02', '2022-06-09 06:39:02');

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
(2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jobs`
--
ALTER TABLE `tb_jobs`
  ADD PRIMARY KEY (`id_jobs`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_jobs_status` (`id_jobs_status`);

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
-- AUTO_INCREMENT for table `tb_jobs`
--
ALTER TABLE `tb_jobs`
  MODIFY `id_jobs` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_jobs_status`
--
ALTER TABLE `tb_jobs_status`
  MODIFY `id_jobs_status` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user_role`
--
ALTER TABLE `tb_user_role`
  MODIFY `id_role` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `tb_user_role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

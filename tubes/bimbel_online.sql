-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2023 at 05:00 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bimbel_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `nama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(11, 'Perguruan Tinggi Negeri'),
(12, 'Sekolah Menengah Atas'),
(13, 'Sekolah Menengah Pertama'),
(14, 'Sekolah Dasar');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int NOT NULL,
  `kategori_id` int NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harga` varchar(100) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `detail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `ketersediaan_stok` enum('habis','tersedia') DEFAULT 'tersedia'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kategori_id`, `nama`, `harga`, `foto`, `detail`, `ketersediaan_stok`) VALUES
(9, 11, 'Paket Intensif UTBK - 2023', '900.000', 'S.jpg', '                                                                                                                                                                                                                        Paket Intensif UTBK adalah sebuah program yang dirancang khusus untuk membantu calon mahasiswa yang akan mengikuti Ujian Tulis Berbasis Komputer (UTBK) dalam persiapan mereka. Program ini menyediakan berbagai materi dan latihan intensif guna meningkatkan pemahaman dan keterampilan peserta dalam menghadapi UTBK.                                                                                                                                                                                    ', 'tersedia'),
(10, 12, 'Paket Ujian Sekolah Kelas 12', '600.000', 'e.jpg', '                                                Paket Ujian Sekolah Kelas 12 adalah program yang dirancang khusus untuk membantu siswa kelas 12 dalam persiapan menghadapi ujian sekolah. Program ini menyediakan materi, latihan, dan sumber daya yang komprehensif guna meningkatkan pemahaman dan keterampilan siswa dalam menghadapi ujian penting ini.                                        ', 'tersedia'),
(11, 12, 'Paket Ujian Sekolah K11 dan K10', '700.000', 'm.jpg', '                                                                                                Paket Ujian Sekolah Kelas 11 dan 10 adalah program yang dirancang khusus untuk membantu siswa kelas 11 dan 10 dalam persiapan menghadapi ujian sekolah. Program ini menyediakan materi, latihan, dan sumber daya yang komprehensif guna meningkatkan pemahaman dan keterampilan siswa dalam menghadapi ujian penting ini.                                                                                ', 'tersedia'),
(12, 13, 'Paket Ujian Sekolah Kelas 9', '600.000', '7.jpg', '                                                Paket Ujian Sekolah Kelas 9 adalah program yang dirancang khusus untuk membantu siswa kelas 9 dalam persiapan menghadapi ujian sekolah.  Produk ini dilengkapi dengan kumpulan soal latihan ujian sekolah yang bervariasi dan berkualitas. Soal-soal ini dirancang untuk mencakup berbagai tingkat kesulitan dan mempersiapkan siswa menghadapi tipe soal yang sering muncul dalam ujian sekolah. Latihan soal membantu siswa untuk menguasai materi dan mengasah kemampuan pengerjaan soal.                                        ', 'tersedia'),
(14, 14, 'SD Super 1 Tahun Ajaran', '400.000', 'v.jpg', '                                                Paket SD Super 1 Tahun Ajaran adalah program lengkap yang dirancang khusus untuk siswa Sekolah Dasar (SD) dalam menjalani satu tahun ajaran. Program ini mencakup berbagai materi pelajaran, latihan soal, dan sumber daya pendukung yang bertujuan untuk meningkatkan pemahaman dan prestasi akademik siswa dalam semua mata pelajaran yang diujikan di tingkat SD.                                        ', 'tersedia'),
(16, 13, 'Paket Ujian Sekolah K8 dan K7', '500.000', '8.jpg', '                                                 Paket Ujian Sekolah Kelas 8 dan 7 adalah program yang dirancang khusus untuk membantu siswa kelas 8 dan 7 dalam persiapan menghadapi ujian sekolah. Panduan Strategi dan Tips untuk Program ini juga dilengkapi dengan panduan strategi dan tips khusus untuk menghadapi ujian sekolah. Siswa akan diberikan wawasan dan teknik yang berguna untuk meningkatkan efisiensi dan efektivitas mereka dalam menjawab soal-soal dengan tepat. Panduan ini mencakup teknik mengerjakan soal, manajemen waktu, dan cara menghadapi soal yang sulit.                                          ', 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(15, 'admin', '$2y$10$ZcQu59Usk5BtxyJrjSDzce5qMtQX5rgV6P5Lt8oSho4MS2bRbMhhW', 'admin'),
(16, 'zuhdi', '$2y$10$hrxRnalJKs.3DrlmMest..Mx1Q02VarUjVpreoqCiDSTFj19TRAhi', 'user'),
(17, 'kaka', '$2y$10$jj3s8a8Lkk8ARMaTyTrIeetIm1IbXOsbx9g5HdSCf2ptWoTaU1.Pa', 'user'),
(18, 'caca', '$2y$10$68ikCn2Cq44yTeFH1CzRxutFBrVJxp0omyXHd40bKAUS4l75ZFvdq', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`),
  ADD KEY `kategori_produk` (`kategori_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `kategori_produk` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

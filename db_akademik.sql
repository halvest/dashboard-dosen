-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2024 at 11:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nip`, `nama`, `alamat`, `created_at`, `updated_at`) VALUES
(1, '101', 'Firman Asharudin, S.Kom, M.Kom', 'Jl. Anggrek No.1', '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(2, '102', 'Sharazita Dyah Anggita, M.Kom', 'Jl. Melati No.2', '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(3, '103', 'Nila Feby Puspitasari, S.Kom, M.Cs', 'Jl. Kenanga No.3', '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(4, '104', 'Toto Indriyatmoko, M.Kom', 'Jl. Mawar No.4', '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(5, '105', 'Arvin Claudy Frobenius, M.Kom', 'Jl. Anggrek No.5', '2024-12-14 09:27:59', '2024-12-14 09:27:59');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_mengajar`
--

CREATE TABLE `jadwal_mengajar` (
  `id_jadwal` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `id_mata_kuliah` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu') NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ;

--
-- Dumping data for table `jadwal_mengajar`
--

INSERT INTO `jadwal_mengajar` (`id_jadwal`, `id_dosen`, `id_mata_kuliah`, `id_kelas`, `hari`, `jam_mulai`, `jam_selesai`, `created_at`, `updated_at`) VALUES
(12, 1, 1, 3, 'Senin', '10:40:00', '12:20:00', '2024-12-14 09:30:42', '2024-12-14 09:30:42'),
(13, 3, 2, 3, 'Senin', '13:20:00', '15:00:00', '2024-12-14 09:30:42', '2024-12-14 09:30:42'),
(14, 5, 3, 3, 'Senin', '15:30:00', '17:10:00', '2024-12-14 09:30:42', '2024-12-14 09:30:42'),
(15, 3, 4, 2, 'Selasa', '07:00:00', '08:40:00', '2024-12-14 09:30:42', '2024-12-14 09:30:42'),
(16, 2, 5, 1, 'Rabu', '07:00:00', '08:40:00', '2024-12-14 09:30:42', '2024-12-14 09:30:42'),
(17, 2, 6, 2, 'Rabu', '10:40:00', '12:20:00', '2024-12-14 09:30:42', '2024-12-14 09:30:42'),
(18, 1, 7, 3, 'Rabu', '15:30:00', '17:10:00', '2024-12-14 09:30:42', '2024-12-14 09:30:42'),
(19, 3, 8, 2, 'Kamis', '08:50:00', '10:30:00', '2024-12-14 09:30:42', '2024-12-14 09:30:42'),
(20, 1, 9, 3, 'Kamis', '15:30:00', '17:10:00', '2024-12-14 09:30:42', '2024-12-14 09:30:42'),
(21, 2, 10, 2, 'Jumat', '07:00:00', '08:40:00', '2024-12-14 09:30:42', '2024-12-14 09:30:42'),
(22, 4, 11, 3, 'Jumat', '15:30:00', '17:10:00', '2024-12-14 09:30:42', '2024-12-14 09:30:42');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `created_at`, `updated_at`) VALUES
(1, 'D3TI-01', '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(2, 'D3TI-02', '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(3, 'D3TI-03', '2024-12-14 09:27:59', '2024-12-14 09:27:59');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nim`, `nama`, `id_kelas`, `created_at`, `updated_at`) VALUES
(1, '23.01.5103', 'Hasyim Adani', 3, '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(2, '23.01.5104', 'Tina Susanti', 3, '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(3, '23.01.5105', 'John Doe', 2, '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(4, '23.01.5106', 'Jane Doe', 2, '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(5, '23.01.5107', 'Rizky Amalia', 1, '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(6, '23.01.5108', 'Afif Saputra', 3, '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(7, '23.01.5109', 'Yulia Trisna', 3, '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(8, '23.01.5110', 'Agus Prayoga', 1, '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(9, '23.01.5111', 'Silvia Susanti', 2, '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(10, '23.01.5112', 'Benny Gunawan', 2, '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(11, '23.01.5113', 'Nur Anifah', 1, '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(12, '23.01.5114', 'Fadly Hakim', 3, '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(13, '23.01.5115', 'Melani Agus', 2, '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(14, '23.01.5116', 'Taufik Anwar', 1, '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(15, '23.01.5117', 'Wahyu Satria', 1, '2024-12-14 09:27:59', '2024-12-14 09:27:59');

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id_mata_kuliah` int(11) NOT NULL,
  `nama_mata_kuliah` varchar(100) NOT NULL,
  `sks` int(11) NOT NULL CHECK (`sks` > 0),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id_mata_kuliah`, `nama_mata_kuliah`, `sks`, `created_at`, `updated_at`) VALUES
(1, 'STRUKTUR DATA (Teori)', 3, '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(2, 'REKAYASA PERANGKAT LUNAK (Teori)', 3, '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(3, 'HUMAN COMPUTER INTERACTION (Teori)', 3, '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(4, 'SUCCESS SKILL (Teori)', 2, '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(5, 'BAHASA INDONESIA (Teori)', 2, '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(6, 'PENGOLAHAN BASIS DATA (Teori)', 3, '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(7, 'BACK END DEVELOPMENT (Teori)', 3, '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(8, 'REKAYASA PERANGKAT LUNAK (Praktikum)', 2, '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(9, 'BACK END DEVELOPMENT (Praktikum)', 2, '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(10, 'PENGOLAHAN BASIS DATA (Praktikum)', 2, '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(11, 'STRUKTUR DATA (Praktikum)', 2, '2024-12-14 09:27:59', '2024-12-14 09:27:59');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_mahasiswa`
--

CREATE TABLE `nilai_mahasiswa` (
  `id_nilai` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `id_mata_kuliah` int(11) NOT NULL,
  `tugas` decimal(5,2) DEFAULT 0.00 CHECK (`tugas` >= 0 and `tugas` <= 100),
  `responsi` decimal(5,2) DEFAULT 0.00 CHECK (`responsi` >= 0 and `responsi` <= 100),
  `uts` decimal(5,2) DEFAULT 0.00 CHECK (`uts` >= 0 and `uts` <= 100),
  `uas` decimal(5,2) DEFAULT 0.00 CHECK (`uas` >= 0 and `uas` <= 100),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nilai_mahasiswa`
--

INSERT INTO `nilai_mahasiswa` (`id_nilai`, `id_mahasiswa`, `id_mata_kuliah`, `tugas`, `responsi`, `uts`, `uas`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 85.00, 90.00, 88.00, 92.00, '2024-12-14 09:31:45', '2024-12-14 09:31:45'),
(2, 2, 1, 78.00, 75.00, 80.00, 82.00, '2024-12-14 09:31:45', '2024-12-14 09:31:45'),
(3, 3, 2, 88.00, 85.00, 87.00, 90.00, '2024-12-14 09:31:45', '2024-12-14 09:31:45'),
(4, 4, 2, 75.00, 78.00, 80.00, 77.00, '2024-12-14 09:31:45', '2024-12-14 09:31:45'),
(5, 5, 3, 80.00, 85.00, 88.00, 85.00, '2024-12-14 09:31:45', '2024-12-14 09:31:45'),
(6, 6, 3, 82.00, 80.00, 84.00, 85.00, '2024-12-14 09:31:45', '2024-12-14 09:31:45'),
(7, 7, 4, 78.00, 80.00, 82.00, 80.00, '2024-12-14 09:31:45', '2024-12-14 09:31:45'),
(8, 8, 4, 85.00, 88.00, 87.00, 90.00, '2024-12-14 09:31:45', '2024-12-14 09:31:45'),
(9, 9, 5, 90.00, 88.00, 92.00, 93.00, '2024-12-14 09:31:45', '2024-12-14 09:31:45'),
(10, 10, 6, 85.00, 80.00, 87.00, 88.00, '2024-12-14 09:31:45', '2024-12-14 09:31:45'),
(11, 11, 6, 78.00, 82.00, 80.00, 85.00, '2024-12-14 09:31:45', '2024-12-14 09:31:45'),
(12, 12, 7, 88.00, 85.00, 87.00, 90.00, '2024-12-14 09:31:45', '2024-12-14 09:31:45'),
(13, 13, 8, 90.00, 87.00, 85.00, 92.00, '2024-12-14 09:31:45', '2024-12-14 09:31:45'),
(14, 14, 9, 85.00, 88.00, 90.00, 89.00, '2024-12-14 09:31:45', '2024-12-14 09:31:45'),
(15, 15, 10, 75.00, 78.00, 80.00, 77.00, '2024-12-14 09:31:45', '2024-12-14 09:31:45');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','dosen','mahasiswa') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin1', 'admin123', 'admin', '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(2, '101', 'dosen123', 'dosen', '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(3, '23.01.5103', 'hasyimadani', 'mahasiswa', '2024-12-14 09:27:59', '2024-12-14 09:27:59'),
(4, 'admin', 'c3284d0f94606de1fd2af172aba15bf3', 'admin', '2024-12-14 09:42:04', '2024-12-14 09:42:04'),
(5, 'hasyim', 'fffeb3bbe902e2f149f456a08f4aacb4', 'mahasiswa', '2024-12-18 14:00:04', '2024-12-18 14:00:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indexes for table `jadwal_mengajar`
--
ALTER TABLE `jadwal_mengajar`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_dosen` (`id_dosen`),
  ADD KEY `id_mata_kuliah` (`id_mata_kuliah`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD UNIQUE KEY `nama_kelas` (`nama_kelas`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD UNIQUE KEY `nim` (`nim`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id_mata_kuliah`),
  ADD UNIQUE KEY `nama_mata_kuliah` (`nama_mata_kuliah`);

--
-- Indexes for table `nilai_mahasiswa`
--
ALTER TABLE `nilai_mahasiswa`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`),
  ADD KEY `id_mata_kuliah` (`id_mata_kuliah`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jadwal_mengajar`
--
ALTER TABLE `jadwal_mengajar`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  MODIFY `id_mata_kuliah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `nilai_mahasiswa`
--
ALTER TABLE `nilai_mahasiswa`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal_mengajar`
--
ALTER TABLE `jadwal_mengajar`
  ADD CONSTRAINT `jadwal_mengajar_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`) ON DELETE CASCADE,
  ADD CONSTRAINT `jadwal_mengajar_ibfk_2` FOREIGN KEY (`id_mata_kuliah`) REFERENCES `mata_kuliah` (`id_mata_kuliah`) ON DELETE CASCADE,
  ADD CONSTRAINT `jadwal_mengajar_ibfk_3` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE;

--
-- Constraints for table `nilai_mahasiswa`
--
ALTER TABLE `nilai_mahasiswa`
  ADD CONSTRAINT `nilai_mahasiswa_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`) ON DELETE CASCADE,
  ADD CONSTRAINT `nilai_mahasiswa_ibfk_2` FOREIGN KEY (`id_mata_kuliah`) REFERENCES `mata_kuliah` (`id_mata_kuliah`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 02, 2024 at 07:44 AM
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
-- Database: `web_jurusan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '$2y$10$y6Xpzj2UYFXl4yY5T8sbQ.4fzIjPdJLWqSHo/./MtgJGjeBq6EWJi', '2023-11-28 18:15:02', '2023-11-28 18:15:02');

-- --------------------------------------------------------

--
-- Table structure for table `akreditasi_sipil`
--

CREATE TABLE `akreditasi_sipil` (
  `id` int NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `akreditasi_sipil`
--

INSERT INTO `akreditasi_sipil` (`id`, `foto`, `keterangan`, `created_at`, `updated_at`) VALUES
(4, 'app/akreditasisipil/1703056732-XOliw.png', '23 Februari 2022 - 23 Februari 2027', '2023-12-20 00:18:52', '2023-12-20 00:20:19');

-- --------------------------------------------------------

--
-- Table structure for table `akreditasi_tambang`
--

CREATE TABLE `akreditasi_tambang` (
  `id` int NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `akreditasi_tambang`
--

INSERT INTO `akreditasi_tambang` (`id`, `foto`, `keterangan`, `created_at`, `updated_at`) VALUES
(4, 'app/akreditasitambang/1703057208-m9QLT.png', '10 Oktober 2023 - 10 Oktober 2028', '2023-12-12 21:14:44', '2023-12-20 00:27:38');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int NOT NULL,
  `foto` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `keterangan` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `foto`, `keterangan`, `deskripsi`, `created_at`, `updated_at`) VALUES
(14, 'app/berita/1702544290-M5MEx.jpg', 'Tim PBL Sistem Informasi Jurusan Teknik Sipil dan Pertambangan', 'Project Based Learning (PBL) merupakan salah satu sistem pembelajaran yang ada di Program Studi Teknologi Informasi Politeknik Negeri Ketapang. Dalam kelompok PBL biasa nya di isi dengan 9 sampai 10 mahasiswa gabungan antara mahasiswa semester I dan semester III. Jenjang waktu 3 bulan mahasiswa mengerjakan sebuah project baik internal kampus maupun eksternal, Seperti ke sembilan mahasiswa di atas yang mengerjakan project internal kampus yaitu Sistem Informasi Jurusan Teknik Sipil dan Pertambangan. Tujuan dari pembuatan Sistem Informasi Jurusan tersebut adalah agar semua orang bisa mengetahui informasi tentang Jurusan Teknik Sipil dan Pertambangan yang ada di Politeknik Negeri Ketapang.', '2023-12-14 01:41:32', '2023-12-14 01:58:10');

-- --------------------------------------------------------

--
-- Table structure for table `dosen_sipil`
--

CREATE TABLE `dosen_sipil` (
  `id` int NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nidn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dosen_sipil`
--

INSERT INTO `dosen_sipil` (`id`, `foto`, `nama`, `jabatan`, `nidn`, `nip`, `created_at`, `updated_at`) VALUES
(11, 'app/dosensipil/1702711720-ktOnK.png', 'Ir. Suratmin, MT', 'Dosen', '008106310', '196310081996031003', '2023-12-02 08:55:25', '2023-12-16 00:28:40'),
(13, 'app/dosensipil/1702709967-DBq2N.png', 'Firmanilah Kamil, S.Pd., M.Pd', 'Dosen', '-', '199308182019032026', '2023-12-15 21:33:02', '2023-12-15 23:59:28'),
(14, 'app/dosensipil/1702713301-hkw7S.png', 'Nely Kurnila, S.Pd., M.Pd', 'Dosen', '-', '198310012021212004', '2023-12-15 21:33:54', '2023-12-16 00:55:01'),
(15, 'app/dosensipil/1702710338-9yU7s.png', 'Khairul Muttaqin, S.Pd.I., M.Ag', 'Dosen', '-', '198404252021211001', '2023-12-15 21:34:42', '2023-12-16 00:05:38'),
(16, 'app/dosensipil/1702710489-njz31.png', 'Ahmad Ravi, S.Pd., M.Pd', 'Dosen', '-', '198908162019031002', '2023-12-16 00:08:09', '2023-12-16 00:08:09'),
(17, 'app/dosensipil/1702710646-pBuOq.png', 'Syf. Umi Kalsum, S.Sos., M.AP', 'Dosen', '-', '19810817200801042', '2023-12-16 00:10:46', '2023-12-16 00:10:46'),
(18, 'app/dosensipil/1702710723-AGmyT.png', 'Agung Iswandi, S.T', 'Dosen', '-', '19940702201709223', '2023-12-16 00:12:03', '2023-12-16 00:12:03'),
(19, 'app/dosensipil/1702710838-HvuPV.png', 'Ir. Alan Putranto, S.T., MT.IPP', 'Dosen', '-', '19941011201803239', '2023-12-16 00:13:58', '2023-12-16 00:13:58'),
(20, 'app/dosensipil/1702710931-QT1KQ.png', 'Saima Putrini R Harahap, S.Pd., M.Pd', 'Dosen', '-', '199106172019032022', '2023-12-16 00:15:31', '2023-12-16 00:15:31'),
(21, 'app/dosensipil/1702711174-NuqO3.png', 'Julyan Purnomo, S.ST., M.T', 'Dosen', '-', '19850707200801063', '2023-12-16 00:19:34', '2023-12-16 00:19:34'),
(22, 'app/dosensipil/1702711381-lc3i8.png', 'Hurul \'Ain, ST., MT', 'Dosen', '-', '198804242019032012', '2023-12-16 00:23:01', '2023-12-16 00:23:01'),
(23, 'app/dosensipil/1702711480-ImUnC.png', 'M. Hanif Faisal, S.T., M.T.', 'Dosen', '-', '19840207201001092', '2023-12-16 00:24:40', '2023-12-16 00:24:40'),
(24, 'app/dosensipil/1703057972-ymO8h.png', 'Nur Aida, S.Pd., M.Pd', 'Dosen', '-', '198508052021212009', '2023-12-20 00:39:32', '2023-12-20 00:39:32');

-- --------------------------------------------------------

--
-- Table structure for table `dosen_tambang`
--

CREATE TABLE `dosen_tambang` (
  `id` int NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nidn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dosen_tambang`
--

INSERT INTO `dosen_tambang` (`id`, `foto`, `nama`, `jabatan`, `nidn`, `nip`, `created_at`, `updated_at`) VALUES
(6, 'app/dosentambang/1701694657-ewJlN.png', 'Herman, S.Si.,MT', 'Dosen', '0019098805', '198809192019031014', '2023-12-04 05:57:37', '2023-12-04 05:57:37'),
(7, 'app/dosentambang/1701694710-zLNXA.png', 'Sartika, S.Si.,MT', 'Dosen', '0021019002', '199001212018032001', '2023-12-04 05:58:30', '2023-12-04 05:58:30'),
(8, 'app/dosentambang/1701694766-PwV4n.png', 'Syarifah Aqla, S.Pd.,MT', 'Dosen', '0023068903', '198906232019032015', '2023-12-04 05:59:26', '2023-12-04 05:59:26'),
(9, 'app/dosentambang/1701694815-FMntK.png', 'Sy. Indra Septiansyah, S.Si.,MT', 'Dosen', '0001098804', '198809012019031010', '2023-12-04 06:00:15', '2023-12-04 06:00:15'),
(10, 'app/dosentambang/1701694889-Mfkzh.png', 'Maya Santi, S.Pd.,MT', 'Dosen', '0015038802', '198803152019032011', '2023-12-04 06:01:29', '2023-12-04 06:01:29'),
(11, 'app/dosentambang/1701694935-XsR3d.png', 'Noprizan Azmi, ST', 'Dosen', '9900007098', '19881113201601182', '2023-12-04 06:02:15', '2023-12-04 06:02:15');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id` int NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id`, `foto`, `created_at`, `updated_at`) VALUES
(20, 'app/slide/1703314172-5xuKB.png', '2023-11-30 01:30:19', '2023-12-22 23:49:32'),
(22, 'app/slide/1703315846-HsuAW.png', '2023-12-19 22:10:52', '2023-12-23 00:17:26'),
(23, 'app/slide/1703314206-lVOvJ.png', '2023-12-19 22:16:41', '2023-12-22 23:50:06'),
(24, 'app/slide/1703314354-Ytw7K.jpg', '2023-12-19 22:19:04', '2023-12-22 23:52:34'),
(25, 'app/slide/1703314515-mDRE0.png', '2023-12-19 22:20:48', '2023-12-22 23:55:15'),
(26, 'app/slide/1703316290-UWEQu.jpg', '2023-12-19 22:28:56', '2023-12-23 00:24:50'),
(27, 'app/slide/1703314763-WGbAI.jpg', '2023-12-19 22:29:18', '2023-12-22 23:59:23'),
(28, 'app/slide/1703314841-AjGkF.png', '2023-12-19 22:30:42', '2023-12-23 00:00:41'),
(29, 'app/slide/1703315219-h7uDS.jpg', '2023-12-19 22:30:53', '2023-12-23 00:06:59'),
(30, 'app/slide/1703315277-Z9xtX.png', '2023-12-19 22:31:02', '2023-12-23 00:07:57'),
(32, 'app/slide/1703316003-DV2Mn.png', '2023-12-19 22:36:20', '2023-12-23 00:20:03'),
(33, 'app/slide/1703316084-yj27W.jpg', '2023-12-19 22:39:08', '2023-12-23 00:21:24'),
(35, 'app/slide/1703316524-93Nys.jpg', '2023-12-22 23:24:00', '2023-12-23 00:28:44'),
(36, 'app/slide/1703316744-qq3DB.jpg', '2023-12-22 23:24:21', '2023-12-23 00:32:24'),
(37, 'app/slide/1703313156-sHQri.jpg', '2023-12-22 23:26:39', '2023-12-22 23:32:37'),
(38, 'app/slide/1703317215-pj1T0.jpg', '2023-12-23 00:40:15', '2023-12-23 00:40:15'),
(39, 'app/slide/1703397147-FSWaT.png', '2023-12-23 22:47:46', '2023-12-23 22:52:27'),
(40, 'app/slide/1703396879-ap4rm.jpg', '2023-12-23 22:47:59', '2023-12-23 22:47:59');

-- --------------------------------------------------------

--
-- Table structure for table `laboratorium_sipil`
--

CREATE TABLE `laboratorium_sipil` (
  `id` int NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `laboratorium_sipil`
--

INSERT INTO `laboratorium_sipil` (`id`, `foto`, `nama`, `deskripsi`, `created_at`, `updated_at`) VALUES
(9, 'app/laboratoriumsipil/1701920989-bce2I.jpg', 'Laboratorium I', 'Laboratorium ini memiliki ukuran 8 m x 13 m serta ditunjang dengan fasilitas pendukung. Memeberikan kesempatan kepada mahasiswa untuk menerapkan konsep teori yang dipelajari dikelas. Membantu mahasiswa untuk memahami konsep secara lebih mendalam dengan melakukan eksperimen dan observasi langsung. Melakukan pengamatan dan eksperimen langsung, memungkinkan mahasiswa untuk melihat konsep-konsep teoritis bekerja dalam praktik.', '2023-12-06 20:49:50', '2023-12-06 22:14:29'),
(10, 'app/laboratoriumsipil/1701926050-niZGQ.jpg', 'Laboratorium II', 'Laboratorium ini memiliki ukuran 8 m x 13 m serta ditunjang dengan fasilitas pendukung. Memeberikan kesempatan kepada mahasiswa untuk menerapkan konsep teori yang dipelajari dikelas. Membantu mahasiswa untuk memahami konsep secara lebih mendalam dengan melakukan eksperimen dan observasi langsung. Melakukan pengamatan dan eksperimen langsung, memungkinkan mahasiswa untuk melihat konsep-konsep teoritis bekerja dalam praktik.', '2023-12-06 22:14:11', '2023-12-06 22:14:11'),
(11, 'app/laboratoriumsipil/1701929898-K7GJe.jpg', 'Laboratorium', 'Laboratorium sering melibatkan kerja kelompok, memungkinkan mahasiswa untuk berkolaborasi dengan teman-teman mereka. Ini tidak hanya membangun keterampilan sosial, tetapi juga memperkenalkan mereka pada pemikiran dan perspektif yang berbeda. Mahasiswa dapat menguji dan memverifikasi konsep-konsep tertentu yang telah mereka pelajari di kelas melalui eksperimen dan observasi langsung. Ini membantu memperkuat pemahaman mereka terhadap materi pelajaran.', '2023-12-06 23:18:18', '2023-12-06 23:18:18');

-- --------------------------------------------------------

--
-- Table structure for table `laboratorium_tambang`
--

CREATE TABLE `laboratorium_tambang` (
  `id` int NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `laboratorium_tambang`
--

INSERT INTO `laboratorium_tambang` (`id`, `foto`, `nama`, `deskripsi`, `created_at`, `updated_at`) VALUES
(5, 'app/laboratoriumtambang/1701930601-z5sVQ.jpg', 'Laboratorium Pengolahan Bahan Galian', 'Laboratorium ini memberikan kesempatan kepada mahasiswa untuk menerapkan konsep teori yang dipelajari di kelas. Ini membantu mahasiswa untuk memahami konsep secara lebih mendalam dengan melakukan eksperimen dan observasi langsung.  Memberikan kesempatan untuk melakukan pengamatan dan eksperimen langsung, memungkinkan mahasiswa untuk melihat konsep-konsep teoritis bekerja dalam praktik.', '2023-12-06 23:30:02', '2023-12-06 23:30:02'),
(6, 'app/laboratoriumtambang/1701930910-eAqRp.jpg', 'Laboratorium Mekanika Batuan', 'Laboratorium ini memberikan kesempatan kepada mahasiswa untuk menerapkan konsep teori yang dipelajari di kelas. Ini membantu mahasiswa untuk memahami konsep secara lebih mendalam dengan melakukan eksperimen dan observasi langsung.  Memberikan kesempatan untuk melakukan pengamatan dan eksperimen langsung, memungkinkan mahasiswa untuk melihat konsep-konsep teoritis bekerja dalam praktik.', '2023-12-06 23:35:11', '2023-12-06 23:35:11'),
(7, 'app/laboratoriumtambang/1701931069-tjkAd.jpg', 'Laboratorium Eksplorasi', 'Laboratorium ini memberikan kesempatan kepada mahasiswa untuk menerapkan konsep teori yang dipelajari di kelas. Ini membantu mahasiswa untuk memahami konsep secara lebih mendalam dengan melakukan eksperimen dan observasi langsung.  Memberikan kesempatan untuk melakukan pengamatan dan eksperimen langsung, memungkinkan mahasiswa untuk melihat konsep-konsep teoritis bekerja dalam praktik.', '2023-12-06 23:37:49', '2023-12-06 23:37:49');

-- --------------------------------------------------------

--
-- Table structure for table `lab_tambang`
--

CREATE TABLE `lab_tambang` (
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manajemen_sipil`
--

CREATE TABLE `manajemen_sipil` (
  `id` int NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `manajemen_sipil`
--

INSERT INTO `manajemen_sipil` (`id`, `foto`, `nama`, `deskripsi`, `created_at`, `updated_at`) VALUES
(3, 'app/manajemensipil/1701941630-XeV5J.jpg', 'Ruang Ketua Jurusan', 'Ruang Ketua Jurusan Teknik Sipil dan Pertambangan terletak di lantai 1 Gedung Laboratorium Terpadu. Digunakan sebagai pelayanan terhadap Mitra dan civitas akademika Politeknik Negeri Ketapang. Selain itu juga sebagai ruang untuk menjalankan tugas sebagai ketua jurusan dalam menyusun rencana dan mengevaluasi pelaksanaan Tri Dharma yang dilaksanakan oleh Dosen, Teknisi, Staf Admin dan Mahasiswa dilingkungan Jurusan.', '2023-12-07 02:33:50', '2023-12-07 04:07:26'),
(4, 'app/manajemensipil/1701944183-4Rvd4.jpg', 'Ruang Sekretaris Jurusan', 'Ruang Sekretaris Jurusan Teknik Sipil dan Pertambangan terletak di lantai 1 Gedung Laboratorium Terpadu. Digunakan sebagai pelayanan terhadap Mitra dan civitas akademika Politeknik Negeri Ketapang. Selain itu juga sebagai ruang untuk menjalankan tugas sebagai sekretaris jurusan dalam melaksanakan kegiatan administratif dan kesekretariatan jurusan dalam menunjang pelaksanaan Tri Dharma dilingkungan Jurusan.', '2023-12-07 03:16:23', '2023-12-07 04:08:07'),
(5, 'app/manajemensipil/1701944999-iryM5.jpg', 'Ruang Koordinator Program Studi', 'Ruang Koordinator Prodi Teknologi Rekayasa Konstruksi Jalan dan Jembatan terletak di lantai 1 Gedung Laboratorium Terpadu. Digunakan Koordinator Program studi Teknologi Rekayasa Konstruksi Jalan dan Jembatan untuk membantu tugas ketua jurusan dalam pelaksanaan peningkatan mutu akademik, penelitian, dan pengabdian kepada masyarakat (Tri Dharma Perguruan Tinggi) pada tingkat Program Studi.', '2023-12-07 03:30:00', '2023-12-07 04:08:49'),
(6, 'app/manajemensipil/1701945992-6mpYK.jpg', 'Ruang Dosen', 'Ruang dosen program studi Teknologi Rekayasa Konstruksi Jalan dan Jembatan terletak di lantai 1 Gedung Laboratorium Terpadu Politeknik Negeri Ketapang. Ruang dosen berfungsi sebagai ruang kerja para dosen. Ruang ini dilengkapi dengan meja kerja dan kursi yang biasanya dimanfaatkan oleh dosen sebagai tempat untuk konsultasi dengan mahasiswa, penelitian dan persiapan mengajar. Dengan Ruang dosen yang nyaman, dosen dapat memberikan pengarahan (asistensi) kepada mahasiswa di ruangan tersebut. Sebagai tempat untuk konsultasi, penelitian, dan persiapan mengajar.', '2023-12-07 03:46:32', '2023-12-07 04:09:15'),
(7, 'app/manajemensipil/1701946542-FMlA1.jpg', 'Ruang Teknisi - I', 'Ruang Teknisi-I Program Studi Teknologi Rekayasa Konstruksi Jalan dan Jembatan terletak di Gedung Laboratorium Terpadu Politeknik Negeri Ketapang. Ruang di mana teknisi atau personel teknis bekerja untuk melakukan pemeliharaan, perbaikan, instalasi, atau pengelolaan.', '2023-12-07 03:55:43', '2023-12-07 04:10:55'),
(8, 'app/manajemensipil/1701946660-nYRl4.jpg', 'Ruang Teknisi - II', 'Ruang Teknisi-I Program Studi Teknologi Rekayasa Konstruksi Jalan dan Jembatan terletak di Gedung Laboratorium Terpadu Politeknik Negeri Ketapang. Ruang di mana teknisi atau personel teknis bekerja untuk melakukan pemeliharaan, perbaikan, instalasi, atau pengelolaan.', '2023-12-07 03:57:40', '2023-12-07 04:11:22'),
(9, 'app/manajemensipil/1701946950-DjFRy.jpg', 'Ruang Administrasi', 'Ruang Administrasi Program Studi Teknologi Rekayasa Konstruksi Jalan dan Jembatan terletak di lantai 1 Gedung Laboratorium Terpadu. Digunakan Staf Administrasi Program studi dalam mengkoordinir dan melaksanakan administrasi pendidikan di tingkat jurusan dan membantu sekretaris jurusan dan koordinator program studi dalam melaksanakan kegiatan administratif dan kesekretariatan program studi dan jurusan.', '2023-12-07 04:02:30', '2023-12-07 04:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `manajemen_tambang`
--

CREATE TABLE `manajemen_tambang` (
  `id` int NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `manajemen_tambang`
--

INSERT INTO `manajemen_tambang` (`id`, `foto`, `nama`, `deskripsi`, `created_at`, `updated_at`) VALUES
(5, 'app/manajementambang/1701948180-xO1Ly.jpg', 'Ruang Ketua Jurusan', 'Ruang Ketua Jurusan Teknik Sipil dan Pertambangan terletak di lantai 1 Gedung Laboratorium Terpadu. Digunakan sebagai pelayanan terhadap Mitra dan civitas akademika Politeknik Negeri Ketapang. Selain itu juga sebagai ruang untuk menjalankan tugas sebagai ketua jurusan dalam menyusun rencana dan mengevaluasi pelaksanaan Tri Dharma yang dilaksanakan oleh Dosen, Teknisi, Staf Admin dan Mahasiswa dilingkungan Jurusan.', '2023-12-07 04:23:00', '2023-12-07 04:23:00'),
(6, 'app/manajementambang/1701952214-j1DFb.jpg', 'Ruang Sekretaris Jurusan', 'Ruang Sekretaris Jurusan Teknik Sipil dan Pertambangan terletak di lantai 1 Gedung Laboratorium Terpadu. Digunakan sebagai pelayanan terhadap Mitra dan civitas akademika Politeknik Negeri Ketapang. Selain itu juga sebagai ruang untuk menjalankan tugas sebagai sekretaris jurusan dalam melaksanakan kegiatan administratif dan kesekretariatan jurusan dalam menunjang pelaksanaan Tri Dharma dilingkungan Jurusan.', '2023-12-07 05:30:14', '2023-12-07 05:30:14'),
(7, 'app/manajementambang/1701952867-fQSF8.jpg', 'Ruang Koordinator Program Studi', 'Ruang Koordinator Prodi Teknologi Pertambangan terletak di Gedung Laboratorium Teknologi Pertambangan Politeknik Negeri Ketapang. Digunakan Koordinator Program studi Teknologi Pertambangan untuk membantu tugas ketua jurusan dalam pelaksanaan peningkatan mutu akademik, penelitian, dan pengabdian kepada masyarakat (Tri Dharma Perguruan Tinggi) pada tingkat Program Studi.', '2023-12-07 05:41:07', '2023-12-07 05:51:09'),
(8, 'app/manajementambang/1701953363-5Sx9z.jpg', 'Ruang Dosen', 'Ruang dosen program studi Teknologi Pertambangan terletak di Gedung Laboratorium Teknologi Pertambangan Politeknik Negeri Ketapang. Ruang dosen berfungsi sebagai ruang kerja para dosen. Ruang ini dilengkapi dengan meja kerja dan kursi yang biasanya dimanfaatkan oleh dosen sebagai tempat untuk konsultasi dengan mahasiswa, penelitian dan persiapan mengajar. Dengan Ruang dosen yang nyaman, dosen dapat memberikan pengarahan (asistensi) kepada mahasiswa di ruangan tersebut. sebagai tempat untuk konsultasi, penelitian, dan persiapan mengajar.', '2023-12-07 05:49:23', '2023-12-07 05:50:11'),
(9, 'app/manajementambang/1701954408-6fZCJ.jpg', 'Ruang Rapat', 'Ruang rapat jurusan merupakan salah satu tempat yang sangat penting di Program Studi Teknologi Pertambangan Politeknik Negeri Ketapang. Di ruangan inilah biasanya berbagai acara atau kegiatan resmi diselenggarakan. Misalnya kegiatan sosialisasi manajemen jurusan dan program studi, pertemuan dengan manajemen Politeknik Negeri Ketapang, rapat jurusan dan program studi, dan lain-lain. Ruangan ini terletak di ruangan program studi Teknologi Pertambangan. Selain itu ruang rapat juga dapat digunakan sebagai: 1) Diskusi, Diskusi adalah hal mendasar dalam membangun dan menjaga hubungan antar rekan kerja. Diskusi mengharuskan individu-individu dalam sebuah tim membuka diri dengan yang lainnya. Hasilnya individu dalam tim kerja tersebut akan lebih peduli satu dengan lainnya, mengurangi depresi individu, dan lebih produktif dalam bekerja. 2) Workshop, Dalam hal ini, workshop bermaksud untuk memberikan tambahan kemampuan lewat aktivitas dan kegiatan yang dilakukan secara bersama-sama. Workshop bisa memberikan kemampuan secara hard skill atau soft skill. Hal ini berdampak mengurangi kejenuhan rekan-rekan kerja atas rutinitas kerjanya serta menambah wawasan dan kemampuan setiap orang. 3) Brainstorming, Brainstorming dilakukan dengan tujuan untuk menghasilkan ide yang solutif, tepat, dan bermanfaat dalam menghadapi sebuah permasalahan. Dalam menghasilkan ide tersebut perlu pemikiran-pemikiran yang diutarakan oleh tiap individu dalam sebuah cara pandang baru dalam memandang sebuah persoalan atau permasalahan. Ruang rapat yang nyaman akan mendukung proses brainstorming tersebut terjadi dengan efektif.', '2023-12-07 06:06:48', '2023-12-07 06:06:48'),
(10, 'app/manajementambang/1702440403-sU9Pf.jpg', 'Ruang Teknisi', 'Ruang Teknisi Program Studi Teknologi Pertambangan terletak di Gedung Laboratorium Teknologi Pertambangan Politeknik Negeri Ketapang. Ruang di mana teknisi atau personel teknis bekerja untuk melakukan pemeliharaan, perbaikan, instalasi, atau pengelolaan.', '2023-12-12 21:06:45', '2023-12-12 21:06:45'),
(11, 'app/manajementambang/1702440568-fv33b.jpg', 'Ruang Administrasi', 'Ruang Administrasi Program Studi Teknologi Pertambangan terletak di Gedung Laboratorium Teknologi Pertambangan Politeknik Negeri Ketapang. Digunakan Staf Administrasi Program studi dalam mengkoordinir dan melaksanakan administrasi pendidikan di tingkat jurusan dan membantu sekretaris jurusan dan koordinator program studi dalam melaksanakan kegiatan administratif dan kesekretariatan program studi dan jurusan.', '2023-12-12 21:09:28', '2023-12-12 21:10:40');

-- --------------------------------------------------------

--
-- Table structure for table `misi_sipil`
--

CREATE TABLE `misi_sipil` (
  `id` int NOT NULL,
  `deskripsi` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `misi_sipil`
--

INSERT INTO `misi_sipil` (`id`, `deskripsi`, `created_at`, `updated_at`, `jenis`) VALUES
(32, 'Sebagai penyelenggara pendidikan vokasional dalam bidang keahlian Teknik Sipil konsentrasi Perancangan Jalan dan Jembatan yang unggul khususnya di Provinsi Kalimantan Barat serta mampu menguasai tantangan global', '2023-12-06 19:41:44', '2023-12-14 02:11:29', 'Visi'),
(33, '1) Menyelenggarakan pendidikan vokasi pada bidang keahlian Teknik Sipil konsentrasi Perancangan Jalan dan Jembatan serta menghasilkan lulusan yang berkualitas, disiplin, bermoral, berbasis ilmu pengetahuan dan teknologi yang berkarakter dan bertaqwa kepada Tuhan Yang Maha Esa.\r\n2) Mengembangkan dan meningkatkan mutu pendidikan dan budaya penelitian terapan serta inovatif dalam bidang keahlian Teknik Sipil konsentrasi Perancangan Jalan dan Jembatan serta mempromosikan penerapan ilmu pengetahuan dan teknologi guna meningkatkan daya saing dengan menjalin kemitraan di bidang jalan dan jembatan.\r\n3) Mengembangkan program studi yang efisien, efektif, akuntabel dan berkelanjutan berbasis ICT (Information Communication Technology) dalam bidang keahlian Teknik Sipil konsentrasi Perancangan Jalan dan Jembatan.', '2023-12-06 19:42:46', '2023-12-06 19:42:46', 'Misi'),
(34, '1) Menghasilkan sumber daya manusia di bidang Teknik Sipil konsentrasi Perancangan Jalan dan Jembatan yang bertaqwa kepada Tuhan Yang Maha Esa, berkarakter, terampil, berjiwa wirausaha, berwawasan lingkungan, dan mampu bersaing.\r\n2) Terciptanya iklim penelitian terapan di bidang Teknik Sipil konsentrasi Perancangan Jalan dan Jembatan yang mampu mendukung pengembangan ilmu pengetahuan dan teknologi yang diaplikasikan dalam pengabdian kepada masyarakat guna meningkatkan daya saing bangsa.\r\n3) Terbangunnya jaringan kerjasama program studi, secara nasional dan internasional untuk meningkatkan kemampuan SDM dan pengembangan program studi Teknik Sipil konsentrasi Perancangan Jalan dan Jembatan.', '2023-12-06 19:43:12', '2023-12-06 19:43:12', 'Tujuan');

-- --------------------------------------------------------

--
-- Table structure for table `misi_tambang`
--

CREATE TABLE `misi_tambang` (
  `id` int NOT NULL,
  `deskripsi` text,
  `jenis` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `misi_tambang`
--

INSERT INTO `misi_tambang` (`id`, `deskripsi`, `jenis`, `created_at`, `updated_at`) VALUES
(9, 'Menjadikan program studi Teknik Pertambangan jurusan Teknik Pertambangan Politeknik Negeri Ketapang sebagai institusi penyelenggara program pendidikan vokasi yang unggul di bidang Teknik Pertambangan dan memiliki keunggulan bersaing baik di tingkat nasional maupun internasional dalam melaksanakan tri dharma perguruan tinggi, berbasis ilmu pengetahuan dan teknologi terapan dengan menjunjung tinggi kebudayaan nasional dan wawasan pelestarian lingkungan yang selaras dengan Visi Politeknik Negeri Ketapang.', 'Visi', '2023-12-06 19:45:54', '2023-12-14 02:16:03'),
(10, 'Menyelenggarakan program pendidikan vokasi yang terakreditasi secara institusional di bidang Teknik Pertambangan dan memiliki daya saing di pasar global; mengembangkan ilmu pengetahuan dan teknologi bidang Teknik Pertambangan yang relevan dengan kebutuhan industri; mengembangkan penelitian terapan bidang Teknik Pertambangan sebagai penggerak utama dilaksanakannya dharma pengabdian kepada masyarakat; menghasilkan lulusan yang mudah beradaptasi dengan perkembangan ilmu pengetahuan dan teknologi serta memiliki kemampuan manajerial dan berjiwa wirausaha; berperan serta secara aktif untuk meningkatkan kesejahteraan masyarakat, khususnya di Kabupaten Ketapang, dengan meningkatkan keahlian secara berkelanjutan untuk membantu memecahkan masalah lokal yang berhubungan dengan bidang Teknik Pertambangan.', 'Misi', '2023-12-06 19:46:27', '2023-12-06 19:46:27'),
(11, '1. Menyelenggarakan pendidikan vokasi di bidang Teknik Pertambangan untuk menghasilkan lulusan unggul yang memiliki\r\nkekhasan dan berkepribadian serta memiliki keunggulan bersaing;\r\n2. Mengembangan ilmu pengetahuan dan teknologi terapan untuk mendukung pembangunan bidang Teknik Pertambangan;\r\n3. Menerapkan hasil-hasil penelitian sebagai wujud tanggung jawab dan kepedulian terhadap kesejahteraan masyarakat;\r\n4. Menciptakan iklim akademik yang sehat dan dinamis;\r\n5. Mengembangkan kerjasama yang lebih erat dan saling menguntungkan dengan pihak-pihak yang peduli dan berkepentingan dengan profesi Teknik Pertambangan.', 'Tujuan', '2023-12-06 19:46:58', '2023-12-06 19:46:58');

-- --------------------------------------------------------

--
-- Table structure for table `pimpinan`
--

CREATE TABLE `pimpinan` (
  `id` int NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `nidn` varchar(255) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pimpinan`
--

INSERT INTO `pimpinan` (`id`, `foto`, `nama`, `jabatan`, `nidn`, `nip`, `created_at`, `updated_at`) VALUES
(27, 'app/pimpinan/1701500893-YuErB.png', 'Ir. Suratmin, MT', 'Ketua Jurusan', '008106310', '196310081996031003', '2023-12-02 00:06:21', '2023-12-02 00:08:13'),
(28, 'app/pimpinan/1701532073-JiSGN.png', 'Syarifah Mastura,S.Pd. M.Pd', 'Sekretaris Jurusan', '0026019004', '19900126201409141', '2023-12-02 08:47:53', '2023-12-04 05:43:46'),
(29, 'app/pimpinan/1702712635-luWhE.png', 'Julyan Purnomo, S.ST., M.T', 'Koordinator Prodi Teknologi Rekayasa  Konstruksi Jalan dan Jembatan', '1023033', '199006192021211001', '2023-12-04 05:47:42', '2023-12-16 00:43:55'),
(30, 'app/pimpinan/1701694144-lIpbe.png', 'Idris Herkan Afandi, S.Pd.,MT', 'Koordinator Prodi Teknologi Pertambangan', '0004118802', '198811042019031004', '2023-12-04 05:49:04', '2023-12-04 05:49:04'),
(31, 'app/pimpinan/1702712649-IdyZY.png', 'M. Hanif Faisal, S.T., M.T.', 'Kepala Laboratorium  Prodi Teknologi Rekayasa Konstruksi Jalan dan Jembatan', '1023033', '198805132021211001', '2023-12-04 05:51:47', '2023-12-16 00:44:09'),
(32, 'app/pimpinan/1701694395-NP9P1.png', 'Firman, S.Pd. M.PFis', 'Kepala Laboratorium  Teknologi Pertambangan', '0024018904', '19890124201512172', '2023-12-04 05:53:15', '2023-12-04 05:53:15');

-- --------------------------------------------------------

--
-- Table structure for table `ruang_sipil`
--

CREATE TABLE `ruang_sipil` (
  `id` int NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ruang_sipil`
--

INSERT INTO `ruang_sipil` (`id`, `foto`, `nama`, `deskripsi`, `created_at`, `updated_at`) VALUES
(6, 'app/ruangsipil/1701932470-yLgun.jpg', 'Ruang Perkuliahan Semester I.A', 'Ruangan ini digunakan untuk perkuliahan teori atau responsi untuk mahasiswa semester I.A dengan kapasitas 30 meja mahasiswa, 30 kursi mahasiswa, 1 meja dosen dan 1 kursi dosen. Setiap ruang perkuliahan dilengkapi dengan kursi untuk mahasiswa, meja dan kursi untuk dosen, dan proyektor yang telah terpasang pada dak plafon.', '2023-12-06 23:54:20', '2023-12-07 00:04:27'),
(7, 'app/ruangsipil/1701932521-BzGLs.jpg', 'Ruang Perkuliahan Semester I.B', 'Ruangan ini digunakan untuk perkuliahan teori atau responsi untuk mahasiswa semester I.B dengan kapasitas 30 meja mahasiswa, 30 kursi mahasiswa, 1 meja dosen dan 1 kursi dosen. Setiap ruang perkuliahan dilengkapi dengan kursi untuk mahasiswa, meja dan kursi untuk dosen, dan proyektor yang telah terpasang pada dak plafon.', '2023-12-07 00:02:01', '2023-12-07 00:03:46'),
(8, 'app/ruangsipil/1701934585-MKaaV.jpg', 'Ruang Perkuliahan Semester III.A', 'Ruangan ini digunakan untuk perkuliahan teori atau responsi untuk mahasiswa semester III.A dengan kapasitas 30 meja mahasiswa, 30 kursi mahasiswa, 1 meja dosen dan 1 kursi dosen. Setiap ruang perkuliahan dilengkapi dengan kursi untuk mahasiswa, meja dan kursi untuk dosen, dan proyektor yang telah terpasang pada dak plafon.', '2023-12-07 00:36:25', '2023-12-07 00:36:25'),
(9, 'app/ruangsipil/1701934810-R8zsk.jpg', 'Ruang Perkuliahan Semester III.B', 'Ruangan ini digunakan untuk perkuliahan teori atau responsi untuk mahasiswa semester III.B dengan kapasitas 30 meja mahasiswa, 30 kursi mahasiswa, 1 meja dosen dan 1 kursi dosen. Setiap ruang perkuliahan dilengkapi dengan kursi untuk mahasiswa, meja dan kursi untuk dosen, dan proyektor yang telah terpasang pada dak plafon.', '2023-12-07 00:40:10', '2023-12-07 00:40:10'),
(10, 'app/ruangsipil/1701935163-aMZM2.jpg', 'Ruang Perkuliahan Semester VI.A', 'Ruangan ini digunakan untuk perkuliahan teori atau responsi untuk mahasiswa semester VI.A dengan kapasitas 30 meja mahasiswa, 30 kursi mahasiswa, 1 meja dosen dan 1 kursi dosen. Setiap ruang perkuliahan dilengkapi dengan kursi untuk mahasiswa, meja dan kursi untuk dosen, dan proyektor yang telah terpasang pada dak plafon.', '2023-12-07 00:46:03', '2023-12-07 00:46:03'),
(11, 'app/ruangsipil/1701935251-4TRLu.jpg', 'Ruang Perkuliahan Semester VI.B', 'Ruangan ini digunakan untuk perkuliahan teori atau responsi untuk mahasiswa semester VI.B dengan kapasitas 30 meja mahasiswa, 30 kursi mahasiswa, 1 meja dosen dan 1 kursi dosen. Setiap ruang perkuliahan dilengkapi dengan kursi untuk mahasiswa, meja dan kursi untuk dosen, dan proyektor yang telah terpasang pada dak plafon.', '2023-12-07 00:47:31', '2023-12-07 00:47:31'),
(12, 'app/ruangsipil/1701935431-EPIlY.jpg', 'Ruang Perkuliahan Semester VII.A/B', 'Ruangan ini digunakan untuk perkuliahan teori atau responsi untuk mahasiswa semester VII.A dan VII.B dengan kapasitas 30 meja mahasiswa, 30 kursi mahasiswa, 1 meja dosen dan 1 kursi dosen. Setiap ruang perkuliahan dilengkapi dengan kursi untuk mahasiswa, meja dan kursi untuk dosen, dan proyektor yang telah terpasang pada dak plafon.', '2023-12-07 00:50:31', '2023-12-07 00:50:31');

-- --------------------------------------------------------

--
-- Table structure for table `ruang_tambang`
--

CREATE TABLE `ruang_tambang` (
  `id` int NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ruang_tambang`
--

INSERT INTO `ruang_tambang` (`id`, `foto`, `nama`, `deskripsi`, `created_at`, `updated_at`) VALUES
(4, 'app/ruangtambang/1701938996-D2eWn.jpg', 'Ruang Perkuliahan Semester I.A', 'Ruangan ini digunakan untuk perkuliahan teori atau responsi untuk mahasiswa semester I.A dengan kapasitas 30 meja mahasiswa, 30 kursi mahasiswa, 1 meja dosen dan 1 kursi dosen. Setiap ruang perkuliahan dilengkapi dengan kursi untuk mahasiswa, meja dan kursi untuk dosen, dan proyektor yang telah terpasang pada dak plafon.', '2023-12-07 01:49:57', '2023-12-07 01:49:57'),
(5, 'app/ruangtambang/1701939060-JtwIr.jpg', 'Ruang Perkuliahan Semester I.B', 'Ruangan ini digunakan untuk perkuliahan teori atau responsi untuk mahasiswa semester I.B dengan kapasitas 30 meja mahasiswa, 30 kursi mahasiswa, 1 meja dosen dan 1 kursi dosen. Setiap ruang perkuliahan dilengkapi dengan kursi untuk mahasiswa, meja dan kursi untuk dosen, dan proyektor yang telah terpasang pada dak plafon.', '2023-12-07 01:51:00', '2023-12-07 01:51:00'),
(6, 'app/ruangtambang/1701939265-WYEfI.jpg', 'Ruang Perkuliahan Semester III.A', 'Ruangan ini digunakan untuk perkuliahan teori atau responsi untuk mahasiswa semester III.A dengan kapasitas 30 meja mahasiswa, 30 kursi mahasiswa, 1 meja dosen dan 1 kursi dosen. Setiap ruang perkuliahan dilengkapi dengan kursi untuk mahasiswa, meja dan kursi untuk dosen, dan proyektor yang telah terpasang pada dak plafon.', '2023-12-07 01:54:25', '2023-12-07 01:54:25'),
(7, 'app/ruangtambang/1701939350-RzQ6B.jpg', 'Ruang Perkuliahan Semester III.B', 'Ruangan ini digunakan untuk perkuliahan teori atau responsi untuk mahasiswa semester III.B dengan kapasitas 30 meja mahasiswa, 30 kursi mahasiswa, 1 meja dosen dan 1 kursi dosen. Setiap ruang perkuliahan dilengkapi dengan kursi untuk mahasiswa, meja dan kursi untuk dosen, dan proyektor yang telah terpasang pada dak plafon.', '2023-12-07 01:55:50', '2023-12-07 01:55:50'),
(8, 'app/ruangtambang/1701939446-jTtLQ.jpg', 'Ruang Perkuliahan Semester V.A', 'Ruangan ini digunakan untuk perkuliahan teori atau responsi untuk mahasiswa semester V.A dengan kapasitas 30 meja mahasiswa, 30 kursi mahasiswa, 1 meja dosen dan 1 kursi dosen. Setiap ruang perkuliahan dilengkapi dengan kursi untuk mahasiswa, meja dan kursi untuk dosen, dan proyektor yang telah terpasang pada dak plafon.', '2023-12-07 01:57:26', '2023-12-07 01:59:57'),
(9, 'app/ruangtambang/1701939507-0b30z.jpg', 'Ruang Perkuliahan Semester V.B', 'Ruangan ini digunakan untuk perkuliahan teori atau responsi untuk mahasiswa semester V.B dengan kapasitas 30 meja mahasiswa, 30 kursi mahasiswa, 1 meja dosen dan 1 kursi dosen. Setiap ruang perkuliahan dilengkapi dengan kursi untuk mahasiswa, meja dan kursi untuk dosen, dan proyektor yang telah terpasang pada dak plafon.', '2023-12-07 01:58:27', '2023-12-07 01:58:27');

-- --------------------------------------------------------

--
-- Table structure for table `teknisi_sipil`
--

CREATE TABLE `teknisi_sipil` (
  `id` int NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nidn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `teknisi_sipil`
--

INSERT INTO `teknisi_sipil` (`id`, `foto`, `nama`, `jabatan`, `nidn`, `nip`, `created_at`, `updated_at`) VALUES
(4, 'app/teknisisipil/1702711893-iD3zz.png', 'Abdul Hafid, ST', 'Teknisi', '-', '19850220201601192', '2023-12-02 09:06:41', '2023-12-16 00:31:33'),
(7, 'app/teknisisipil/1702711981-a1g3h.png', 'Ardian Syahputra, A.Md', 'Teknisi', '-', '198205202021211005', '2023-12-16 00:33:01', '2023-12-16 00:33:01'),
(8, 'app/teknisisipil/1702712083-z9DXS.png', 'Irfan, A.Md', 'Teknisi', '-', '19890404201512117', '2023-12-16 00:34:43', '2023-12-16 00:34:43'),
(9, 'app/teknisisipil/1702712166-VhNIw.png', 'Erma Novita, A.Md', 'Teknisi', '-', '197910022021212008', '2023-12-16 00:36:06', '2023-12-16 00:36:06'),
(10, 'app/teknisisipil/1702712336-9tB5N.png', 'Mia Anggreini, A.Md', 'Teknisi', '-', '199204142019032025', '2023-12-16 00:38:56', '2023-12-16 00:38:56'),
(11, 'app/teknisisipil/1702712443-TaSTD.png', 'Fajar Pebriyono, A.Md', 'Teknisi', '-', '199102172021211002', '2023-12-16 00:40:44', '2023-12-16 00:40:44'),
(12, 'app/teknisisipil/1702712502-nDUDw.png', 'Nasriadi, A.Md', 'Teknisi', '-', '199012302021211001', '2023-12-16 00:41:42', '2023-12-16 00:41:42'),
(13, 'app/teknisisipil/1703058200-kbjjJ.png', 'Endi, SE.', 'Administrasi', '-', '19860715200810025', '2023-12-20 00:43:20', '2023-12-20 00:43:20');

-- --------------------------------------------------------

--
-- Table structure for table `teknisi_tambang`
--

CREATE TABLE `teknisi_tambang` (
  `id` int NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nidn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `teknisi_tambang`
--

INSERT INTO `teknisi_tambang` (`id`, `foto`, `nama`, `jabatan`, `nidn`, `nip`, `created_at`, `updated_at`) VALUES
(6, 'app/teknisitambang/1701695071-4T7C5.png', 'Citro handoyo, ST', 'Teknisi', '-', '198805132021211001', '2023-12-04 06:04:31', '2023-12-04 06:04:31'),
(7, 'app/teknisitambang/1701695110-LjlcS.png', 'Rahmat Aryanto, A.Md', 'Teknisi', '-', '199312282019031002', '2023-12-04 06:05:10', '2023-12-04 06:05:10'),
(8, 'app/teknisitambang/1701695148-WoCmq.png', 'Zulpandi, A.Md', 'Teknisi', '-', '199006192021211001', '2023-12-04 06:05:48', '2023-12-04 06:05:48'),
(9, 'app/teknisitambang/1701695207-2olrO.png', 'Faisal, A.Md', 'Teknisi', '-', '198903162021211001', '2023-12-04 06:06:47', '2023-12-04 06:06:47'),
(10, 'app/teknisitambang/1701695260-r93mc.png', 'Nisa Zahara, A.Md', 'Teknisi', '-', '199002282021212001', '2023-12-04 06:07:40', '2023-12-04 06:07:40'),
(11, 'app/teknisitambang/1701695303-PHY9Q.png', 'Kurnia Dewi Permata Sari, A.Md', 'Teknisi', '-', '199006142021212001', '2023-12-04 06:08:23', '2023-12-04 06:08:23'),
(12, 'app/teknisitambang/1701695348-JzAfh.png', 'Uci Novianti, S.Pd', 'Administrasi', '-', '19901117201604205', '2023-12-04 06:09:08', '2023-12-04 06:09:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akreditasi_sipil`
--
ALTER TABLE `akreditasi_sipil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akreditasi_tambang`
--
ALTER TABLE `akreditasi_tambang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen_sipil`
--
ALTER TABLE `dosen_sipil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen_tambang`
--
ALTER TABLE `dosen_tambang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laboratorium_sipil`
--
ALTER TABLE `laboratorium_sipil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laboratorium_tambang`
--
ALTER TABLE `laboratorium_tambang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manajemen_sipil`
--
ALTER TABLE `manajemen_sipil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manajemen_tambang`
--
ALTER TABLE `manajemen_tambang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `misi_sipil`
--
ALTER TABLE `misi_sipil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `misi_tambang`
--
ALTER TABLE `misi_tambang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pimpinan`
--
ALTER TABLE `pimpinan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruang_sipil`
--
ALTER TABLE `ruang_sipil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruang_tambang`
--
ALTER TABLE `ruang_tambang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teknisi_sipil`
--
ALTER TABLE `teknisi_sipil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teknisi_tambang`
--
ALTER TABLE `teknisi_tambang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `akreditasi_sipil`
--
ALTER TABLE `akreditasi_sipil`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `akreditasi_tambang`
--
ALTER TABLE `akreditasi_tambang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `dosen_sipil`
--
ALTER TABLE `dosen_sipil`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `dosen_tambang`
--
ALTER TABLE `dosen_tambang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `laboratorium_sipil`
--
ALTER TABLE `laboratorium_sipil`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `laboratorium_tambang`
--
ALTER TABLE `laboratorium_tambang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `manajemen_sipil`
--
ALTER TABLE `manajemen_sipil`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `manajemen_tambang`
--
ALTER TABLE `manajemen_tambang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `misi_sipil`
--
ALTER TABLE `misi_sipil`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `misi_tambang`
--
ALTER TABLE `misi_tambang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pimpinan`
--
ALTER TABLE `pimpinan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `ruang_sipil`
--
ALTER TABLE `ruang_sipil`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ruang_tambang`
--
ALTER TABLE `ruang_tambang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teknisi_sipil`
--
ALTER TABLE `teknisi_sipil`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `teknisi_tambang`
--
ALTER TABLE `teknisi_tambang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

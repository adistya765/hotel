-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 03:45 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adistya_reser`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `id_ruangan` int(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `user_id` int(255) NOT NULL,
  `tipe_kamar` varchar(255) NOT NULL,
  `kode_booking` varchar(128) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `check_in` int(11) NOT NULL,
  `check_out` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `nomor` text NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id` int(11) NOT NULL,
  `id_tipe_kamar` int(128) NOT NULL,
  `nomor_ruangan` int(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id`, `id_tipe_kamar`, `nomor_ruangan`, `status`) VALUES
(1, 9, 123, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipe_kamar`
--

CREATE TABLE `tipe_kamar` (
  `id` int(11) NOT NULL,
  `nama_kamar` varchar(128) NOT NULL,
  `fasilitas_kamar` text NOT NULL,
  `tipe_harga` int(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `tanggal_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipe_kamar`
--

INSERT INTO `tipe_kamar` (`id`, `nama_kamar`, `fasilitas_kamar`, `tipe_harga`, `img`, `tanggal_update`) VALUES
(30, 'Double', 'Premium Di atas tipe kamar hotel superior room adalah deluxe room. Kamar ini tentu memiliki kamar yang lebih besar. Tersedia pilihan kasur yang bisa kamu pilih, double bed atau twin bed. Biasanya, dari segi interior kamar ini terkesan lebih mewah', 349999, 'download_(3).jpg', '2022-03-13'),
(31, 'Deluxe', 'Premium Di atas tipe kamar hotel superior room adalah deluxe room. Kamar ini tentu memiliki kamar yang lebih besar. Tersedia pilihan kasur yang bisa kamu pilih, double bed atau twin bed. Biasanya, dari segi interior kamar ini terkesan lebih mewah', 700, 'download_(1).jpg', '2002-12-21'),
(32, 'Standart', 'Premium Di atas tipe kamar hotel superior room adalah deluxe room. Kamar ini tentu memiliki kamar yang lebih besar. Tersedia pilihan kasur yang bisa kamu pilih, double bed atau twin bed. Biasanya, dari segi interior kamar ini terkesan lebih mewah', 60000, 'download_(2).jpg', '2022-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `user_pengguna`
--

CREATE TABLE `user_pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(256) NOT NULL,
  `telepon` int(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `status` varchar(128) NOT NULL,
  `level` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_pengguna`
--

INSERT INTO `user_pengguna` (`id`, `username`, `password`, `nama`, `email`, `telepon`, `tempat_lahir`, `tgl_lahir`, `alamat`, `gender`, `status`, `level`) VALUES
(37, 'raihanks765', '$2y$10$TslsPZrrbT4WCNGzUSS20OVbE7J/CWXuVeYfG7fc27drZe1R4SP1.', 'nopi', 'adi123@gmail.com', 9, 'jogja', '2022-11-03', 'jogja', 'L', 'kerja', '1'),
(38, 'mahespai', '$2y$10$g/./Xc.n8vdOV3Cek61UA.BWDiwxfI1hVWlLmksgwR8fPwcMPnhZ2', 'anjay', 'awu@gmail.com', 12, 'jogja', '2022-11-24', 'jogja', 'P', 'kerja', '3'),
(39, 'Wardhana', '$2y$10$kh74DQPy/mmdsC8ZybAb9ew.C5bx2t3HzjMtPdApcjbfMVIIk7NKa', 'pepe', 'aw@gmail.com', 123, 'jogja', '2022-11-15', 'jogja', 'L', 'kerja', '2'),
(40, 'lope', '$2y$10$NIR0KxZaLiM10sQg4PVhn.izptMtGpkirglw2luhFKZvYG8BY8Kva', 'lope', 'lope@gmail.com', 231, 'jogja', '2022-11-08', 'jogja', 'P', 'kerja', '3'),
(42, 'hai', '$2y$10$Cwkp/vWuL1m1mmS/E7DpLOlwGRMOq/lFOqy0JhsG0ZjJ73Zq.Ux3q', 'edoo', 'edo@gmail.com', 12, 'jogja', '2022-11-09', 'surabaya', 'L', 'yo', '3'),
(51, 'yeni', '$2y$10$nNPmgO7YasNtyBDjLSNda.X2kin1ywQPt1I6GdVaNvtiPgixpnSIK', 'yenii', 'yen@gmail.com', 123, 'jogja', '2022-11-09', 'surabaya', 'P', 'yo', '1'),
(62, 'jb_reydams', '$2y$10$IdH4rFS0cgLuwQ7rAMoOgeTyH/MZo4HaFx0dZBMXNZyiK6XK8HBzK', 'rey', 'r@gmail.com', 2147483647, '1', '2022-11-18', 'surabaya', 'L', 'nikah', '1'),
(63, 'ardhan', '$2y$10$4EciOhN9j0zzpCXAWmTFVu8iOzRQ39xZJFn0Di7JQYYfdgA9h6L.G', 'ardhan', 'ar@gmail.com', 2147483647, 'jogja', '2022-11-18', 'yogyakarta', 'L', 'nikah', '1'),
(65, 'ardhan', '$2y$10$dnkMvPtVrQEUVM8ZhOqgSeiXy1yJ78DWHlQcJnzJIsQDdcHVJfGR.', 'edo', 'o@gmail.com', 2147483647, 'jogja', '2022-12-02', 'surabaya', 'P', 'nikah', '3'),
(66, 'ardhan', '$2y$10$jpEedvcHjvRteXAXJsTd1epUctmjc8E2I0NoyHpIsb6v9jtrcLYPG', 'adca', 'c@gmail.com', 2147483647, 'jogja', '2022-12-02', 'surabaya', 'L', 'nikah', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_pengguna`
--
ALTER TABLE `user_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user_pengguna`
--
ALTER TABLE `user_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

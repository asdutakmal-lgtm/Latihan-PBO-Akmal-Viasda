-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 15, 2026 at 05:09 AM
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
-- Database: `db_latihan_pbo_ti1c_akmalviasda`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_tiket`
--

CREATE TABLE `tabel_tiket` (
  `id_tiket` int NOT NULL,
  `nama_film` varchar(255) NOT NULL,
  `jadwal_tayang` datetime NOT NULL,
  `jumlah_kursi` int NOT NULL,
  `harga_dasar_tiket` decimal(10,2) NOT NULL,
  `jenis_studio` enum('Regular','IMAX','Velvet') NOT NULL,
  `tipe_audio` varchar(50) DEFAULT NULL,
  `lokasi_baris` varchar(50) DEFAULT NULL,
  `kacamata_3d_id` varchar(50) DEFAULT NULL,
  `efek_gerak_fitur` varchar(100) DEFAULT NULL,
  `bantal_selimut_pack` varchar(50) DEFAULT NULL,
  `layanan_butler` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_tiket`
--

INSERT INTO `tabel_tiket` (`id_tiket`, `nama_film`, `jadwal_tayang`, `jumlah_kursi`, `harga_dasar_tiket`, `jenis_studio`, `tipe_audio`, `lokasi_baris`, `kacamata_3d_id`, `efek_gerak_fitur`, `bantal_selimut_pack`, `layanan_butler`) VALUES
(22, 'The Avengers: Secret Wars', '2026-07-01 13:00:00', 1, '50000.00', 'Regular', 'Dolby Digital 5.1', 'Row E', NULL, NULL, NULL, NULL),
(23, 'The Avengers: Secret Wars', '2026-07-01 13:00:00', 1, '50000.00', 'Regular', 'Dolby Digital 5.1', 'Row E', NULL, NULL, NULL, NULL),
(24, 'Avatar 4', '2026-07-01 15:30:00', 2, '55000.00', 'Regular', 'Dolby Atmos', 'Row G', NULL, NULL, NULL, NULL),
(25, 'Avatar 4', '2026-07-01 15:30:00', 2, '55000.00', 'Regular', 'Dolby Atmos', 'Row G', NULL, NULL, NULL, NULL),
(26, 'Sherlock Holmes 3', '2026-07-02 19:00:00', 1, '50000.00', 'Regular', 'Standard Stereo', 'Row C', NULL, NULL, NULL, NULL),
(27, 'Sherlock Holmes 3', '2026-07-02 19:00:00', 1, '50000.00', 'Regular', 'Standard Stereo', 'Row C', NULL, NULL, NULL, NULL),
(28, 'Gundala: Putra Petir', '2026-07-02 21:15:00', 1, '45000.00', 'Regular', 'Dolby Digital 5.1', 'Row F', NULL, NULL, NULL, NULL),
(29, 'Interstellar: Re-Release', '2026-07-01 12:00:00', 1, '95000.00', 'IMAX', 'IMAX 12-Channel', 'Row H', 'GLASSES-IMAX-01', 'Dual Laser Projection', NULL, NULL),
(30, 'Interstellar: Re-Release', '2026-07-01 12:00:00', 1, '95000.00', 'IMAX', 'IMAX 12-Channel', 'Row H', 'GLASSES-IMAX-02', 'Dual Laser Projection', NULL, NULL),
(31, 'Dune: Part Three', '2026-07-01 16:00:00', 2, '110000.00', 'IMAX', 'IMAX 12-Channel', 'Row J', 'GLASSES-IMAX-09', 'GT Laser System', NULL, NULL),
(32, 'Dune: Part Three', '2026-07-01 16:00:00', 2, '110000.00', 'IMAX', 'IMAX 12-Channel', 'Row J', 'GLASSES-IMAX-10', 'GT Laser System', NULL, NULL),
(33, 'Star Wars: New Jedi Order', '2026-07-02 14:00:00', 1, '100000.00', 'IMAX', 'Dolby Atmos IMAX', 'Row I', NULL, 'Xenon Digital', NULL, NULL),
(34, 'Star Wars: New Jedi Order', '2026-07-02 14:00:00', 1, '100000.00', 'IMAX', 'Dolby Atmos IMAX', 'Row I', NULL, 'Xenon Digital', NULL, NULL),
(35, 'Dune: Part Three', '2026-07-02 20:00:00', 1, '110000.00', 'IMAX', 'IMAX 12-Channel', 'Row K', 'GLASSES-IMAX-44', 'GT Laser System', NULL, NULL),
(36, 'The Great Gatsby: Remake', '2026-07-01 14:30:00', 2, '250000.00', 'Velvet', 'DTS:X Premium', 'Row Velvet A', NULL, NULL, 'Premium Pillow & Blanket Pack A', 'Full Service Butler'),
(37, 'The Great Gatsby: Remake', '2026-07-01 14:30:00', 2, '250000.00', 'Velvet', 'DTS:X Premium', 'Row Velvet A', NULL, NULL, 'Premium Pillow & Blanket Pack A', 'Full Service Butler'),
(38, 'No Time To Die', '2026-07-01 20:00:00', 2, '300000.00', 'Velvet', 'Dolby Atmos Suite', 'Row Velvet B', NULL, NULL, 'Silk Blanket Pack B', 'On-Demand Call Butler'),
(39, 'No Time To Die', '2026-07-01 20:00:00', 2, '300000.00', 'Velvet', 'Dolby Atmos Suite', 'Row Velvet B', NULL, NULL, 'Silk Blanket Pack B', 'On-Demand Call Butler'),
(40, 'La La Land: Anniversary', '2026-07-02 16:00:00', 2, '250000.00', 'Velvet', 'Standard Stereo Premium', 'Row Velvet C', NULL, NULL, 'Standard Velvet Pack C', 'Welcome Drink Service Only'),
(41, 'La La Land: Anniversary', '2026-07-02 16:00:00', 2, '250000.00', 'Velvet', 'Standard Stereo Premium', 'Row Velvet C', NULL, NULL, 'Standard Velvet Pack C', 'Welcome Drink Service Only'),
(42, 'No Time To Die', '2026-07-02 22:30:00', 2, '300000.00', 'Velvet', 'Dolby Atmos Suite', 'Row Velvet A', NULL, NULL, 'Silk Blanket Pack A', 'On-Demand Call Butler');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_tiket`
--
ALTER TABLE `tabel_tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_tiket`
--
ALTER TABLE `tabel_tiket`
  MODIFY `id_tiket` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

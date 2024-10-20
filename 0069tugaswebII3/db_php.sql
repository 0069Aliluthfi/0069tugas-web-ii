-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2024 at 01:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` char(13) NOT NULL,
  `jenis_kelamin` enum('Jaler','Estri') NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `nama`, `alamat`, `nohp`, `jenis_kelamin`, `email`, `foto`) VALUES
(1, 'Ari Putra', 'Menjangan Bojong', '085742014272', '', 'ari@gmail.com', 'ufuguf'),
(2, 'Maharani', 'Binagriya Pekalongan', '085742117500', 'Jaler', '', ''),
(3, 'Megantara Wati', 'Wiradesa', '081322456678', 'Jaler', '', ''),
(4, 'Panji Setya', 'Podosugih Pekalongan', '081322659901', 'Jaler', '', ''),
(6, 'Sulistyawati', 'Kajen Pekalongan', '088211883444', 'Jaler', '', ''),
(7, 'mikel arteta', 'London', '085273649865', 'Jaler', '', ''),
(8, 'Pep Guardiola', 'Manchester', '081256374899', 'Jaler', '', ''),
(9, 'Arne Slot', 'Merseyside', '081355879411', 'Jaler', '', ''),
(10, 'Taraemon', 'Japos', '081369699910', 'Jaler', 'Taraunch@gmail.com', 'https://i.ytimg.com/vi/wYrVUwWQsuY/maxresdefault.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

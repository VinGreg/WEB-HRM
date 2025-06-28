-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2020 at 09:03 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tutorialphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `tempat`, `tgl_lahir`, `alamat`) VALUES
(1, 'A1318473482', 'Dody Irawan', 'Pelaihari', '1997-03-02', 'Jl. A.Yani Km.6 Desa Panggung\r\n'),
(2, 'A131', 'Budi', 'PLH', '1990-12-12', 'Pelaihari'),
(3, 'Edy', 'A13123', 'Pelaihari', '1998-12-11', 'Pelaihari'),
(4, 'A13145', 'Firly', 'Pelaihari', '1978-12-12', 'Pelaihari'),
(5, 'A13190', 'Gazali', 'Pelaihari', '1990-12-12', ''),
(6, 'A13132', 'Hadi', 'Pelaihari', '1998-12-12', ''),
(7, 'A1318921', 'Indra', 'Bati-bati', '1990-12-12', 'Ujung Batu');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

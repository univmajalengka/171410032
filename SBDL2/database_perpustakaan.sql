-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2019 at 12:36 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_anggota`
--

CREATE TABLE `tabel_anggota` (
  `kd_anggota` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `alamat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_anggota`
--

INSERT INTO `tabel_anggota` (`kd_anggota`, `nama`, `jk`, `alamat`) VALUES
(1212, 'luki', 'laki', 'nanggewer'),
(1234, 'kepin', 'laki', 'cirebon'),
(2111, 'pipah', 'perempuan', 'bandung'),
(2210, 'pipil', 'perempuan', 'bandung'),
(2222, 'cibi', 'perempuan', 'bandung'),
(2333, 'kiko', 'laki', 'bandung'),
(2444, 'indah', 'perempuan', 'bandung'),
(2555, 'lili', 'perempuan', 'bandung'),
(2666, 'loli', 'perempuan', 'bandung'),
(2777, 'dendi', 'laki', 'bandung'),
(2888, 'surin', 'perempuan', 'bandung'),
(2999, 'jaka', 'laki', 'bandung');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_buku`
--

CREATE TABLE `tabel_buku` (
  `kd_buku` int(5) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `pengarang` varchar(25) NOT NULL,
  `penerbit` varchar(25) NOT NULL,
  `tahun_terbit` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_buku`
--

INSERT INTO `tabel_buku` (`kd_buku`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`) VALUES
(9111, 'ensiklopedia', 'kirma', 'erlangga', 1999),
(9222, 'sains', 'prayoga', 'gramedia', 1990),
(9333, 'teknologi', 'carles', 'gramedia', 1996),
(9444, 'masakan enak', 'hime', 'gramedia', 2000),
(9555, 'kalkulus', 'tita', 'erlangga', 1994),
(9666, 'brownies lumer', 'kimmy', 'gramedia', 2005),
(9777, 'fisika', 'sopyan', 'erlangga', 2000),
(9888, 'pancake coklat', 'cimi', 'gramedia', 2006),
(9910, 'pencinta alam', 'burhan', 'gramedia', 1999),
(9999, 'kompetisi tik', 'jordan', 'erlangga', 1999),
(71617, 'ayat cinta', 'abdul', 'gramedia', 2010);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kembali`
--

CREATE TABLE `tabel_kembali` (
  `kd_kembali` int(10) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `denda_per_hari` int(11) NOT NULL,
  `jml_hari` int(11) NOT NULL,
  `kd_petugas` int(10) NOT NULL,
  `kd_buku` int(10) NOT NULL,
  `kd_anggota` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_kembali`
--

INSERT INTO `tabel_kembali` (`kd_kembali`, `tgl_kembali`, `denda_per_hari`, `jml_hari`, `kd_petugas`, `kd_buku`, `kd_anggota`) VALUES
(5555, '2019-03-03', 10000, 4, 917, 9555, 2777),
(5556, '2019-03-10', 10000, 3, 910, 9444, 2210);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_petugas`
--

CREATE TABLE `tabel_petugas` (
  `kd_petugas` int(10) NOT NULL,
  `nama_petugas` text NOT NULL,
  `jabatan` text NOT NULL,
  `jk` varchar(15) NOT NULL,
  `jam_tugas` time NOT NULL,
  `telp` int(11) NOT NULL,
  `alamat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_petugas`
--

INSERT INTO `tabel_petugas` (`kd_petugas`, `nama_petugas`, `jabatan`, `jk`, `jam_tugas`, `telp`, `alamat`) VALUES
(910, 'pipih', 'keamanan', 'perempuan', '01:00:00', 876365736, 'bandung'),
(911, 'hikmah', 'kasir', 'perempuan', '02:00:00', 876635733, 'cirebon'),
(912, 'ihya', 'penjaga', 'laki', '03:00:00', 875672528, 'bandung'),
(913, 'jepy', 'penjaga', 'laki', '04:00:00', 876366377, 'bandung'),
(914, 'intan', 'kasir', 'perempuan', '03:00:00', 876567338, 'bandung'),
(915, 'ajeng', 'kasir', 'perempuan', '03:00:00', 876356727, 'bandung'),
(916, 'momon', 'penjaga', 'laki', '03:00:00', 878736829, 'bandung'),
(917, 'fika', 'sekertaris', 'perempuan', '02:00:00', 87635272, 'bandung'),
(918, 'haykal', 'ketua', 'laki', '08:00:00', 86786533, 'bandung'),
(919, 'ikah', 'wakil', 'perempuan', '10:00:00', 887376333, 'bandung'),
(6571, 'anggun', 'sekertaris', 'perempuan', '00:00:00', 2147483647, 'cirebon');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pinjam`
--

CREATE TABLE `tabel_pinjam` (
  `kd_pinjam` int(6) NOT NULL,
  `kd_buku` int(6) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `kd_petugas` int(10) NOT NULL,
  `kd_anggota` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_pinjam`
--

INSERT INTO `tabel_pinjam` (`kd_pinjam`, `kd_buku`, `tgl_pinjam`, `tgl_kembali`, `kd_petugas`, `kd_anggota`) VALUES
(1, 9222, '2018-12-02', '2018-12-04', 911, 2111),
(2, 9777, '2018-08-08', '2018-08-10', 912, 2222),
(3, 9333, '2018-08-01', '2019-03-03', 913, 2333),
(4, 9999, '2019-02-11', '2019-03-13', 914, 2444),
(5, 9888, '2019-01-09', '2019-01-11', 915, 2555),
(6, 9111, '2018-09-11', '2018-09-13', 916, 2666),
(7, 9555, '2019-02-01', '2019-03-03', 917, 2777),
(8, 9999, '2019-02-19', '2019-02-21', 918, 2888),
(9, 9444, '2019-03-04', '2019-03-06', 919, 2999),
(10, 9444, '2019-03-08', '2019-03-10', 910, 2210);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_rak`
--

CREATE TABLE `tabel_rak` (
  `kd_rak` int(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `kd_buku` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_rak`
--

INSERT INTO `tabel_rak` (`kd_rak`, `nama`, `kd_buku`) VALUES
(4111, 'ensiklopedia', 9111),
(4222, 'sains', 9222),
(4333, 'ipa', 9333),
(4410, 'kalkulus', 9910),
(4444, 'teknologi', 9444),
(4555, 'pecinta alam', 9555),
(4666, 'kimia', 9666),
(4777, 'biologi', 9777),
(4888, 'tik', 9888),
(4999, 'matematika', 9999);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_pinjam`
-- (See below for the actual view)
--
CREATE TABLE `view_pinjam` (
`kd_pinjam` int(6)
,`judul` varchar(25)
,`nama_petugas` text
,`nama` varchar(20)
,`tgl_pinjam` date
,`tgl_kembali` date
);

-- --------------------------------------------------------

--
-- Structure for view `view_pinjam`
--
DROP TABLE IF EXISTS `view_pinjam`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pinjam`  AS  select `a`.`kd_pinjam` AS `kd_pinjam`,`b`.`judul` AS `judul`,`c`.`nama_petugas` AS `nama_petugas`,`d`.`nama` AS `nama`,`a`.`tgl_pinjam` AS `tgl_pinjam`,`a`.`tgl_kembali` AS `tgl_kembali` from (((`tabel_pinjam` `a` join `tabel_buku` `b` on((`b`.`kd_buku` = `a`.`kd_buku`))) join `tabel_petugas` `c` on((`c`.`kd_petugas` = `a`.`kd_petugas`))) join `tabel_anggota` `d` on((`d`.`kd_anggota` = `a`.`kd_anggota`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_anggota`
--
ALTER TABLE `tabel_anggota`
  ADD PRIMARY KEY (`kd_anggota`);

--
-- Indexes for table `tabel_buku`
--
ALTER TABLE `tabel_buku`
  ADD PRIMARY KEY (`kd_buku`);

--
-- Indexes for table `tabel_kembali`
--
ALTER TABLE `tabel_kembali`
  ADD PRIMARY KEY (`kd_kembali`),
  ADD KEY `kd_petugas` (`kd_petugas`,`kd_buku`,`kd_anggota`),
  ADD KEY `fk1_kembali` (`kd_anggota`),
  ADD KEY `fk3_kembali` (`kd_buku`);

--
-- Indexes for table `tabel_petugas`
--
ALTER TABLE `tabel_petugas`
  ADD PRIMARY KEY (`kd_petugas`);

--
-- Indexes for table `tabel_pinjam`
--
ALTER TABLE `tabel_pinjam`
  ADD PRIMARY KEY (`kd_pinjam`),
  ADD KEY `kd_petugas` (`kd_petugas`),
  ADD KEY `kd_petugas_2` (`kd_petugas`),
  ADD KEY `kd_buku` (`kd_buku`,`kd_anggota`),
  ADD KEY `fk2_pinjam` (`kd_anggota`);

--
-- Indexes for table `tabel_rak`
--
ALTER TABLE `tabel_rak`
  ADD PRIMARY KEY (`kd_rak`),
  ADD KEY `kd_buku` (`kd_buku`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_kembali`
--
ALTER TABLE `tabel_kembali`
  ADD CONSTRAINT `fk1_kembali` FOREIGN KEY (`kd_anggota`) REFERENCES `tabel_anggota` (`kd_anggota`),
  ADD CONSTRAINT `fk2_kembali` FOREIGN KEY (`kd_petugas`) REFERENCES `tabel_petugas` (`kd_petugas`),
  ADD CONSTRAINT `fk3_kembali` FOREIGN KEY (`kd_buku`) REFERENCES `tabel_buku` (`kd_buku`);

--
-- Constraints for table `tabel_pinjam`
--
ALTER TABLE `tabel_pinjam`
  ADD CONSTRAINT `fk2_pinjam` FOREIGN KEY (`kd_anggota`) REFERENCES `tabel_anggota` (`kd_anggota`),
  ADD CONSTRAINT `fk3_pinjam` FOREIGN KEY (`kd_petugas`) REFERENCES `tabel_petugas` (`kd_petugas`),
  ADD CONSTRAINT `flk1_pinjam` FOREIGN KEY (`kd_buku`) REFERENCES `tabel_buku` (`kd_buku`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tabel_rak`
--
ALTER TABLE `tabel_rak`
  ADD CONSTRAINT `fk1_rak` FOREIGN KEY (`kd_buku`) REFERENCES `tabel_buku` (`kd_buku`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

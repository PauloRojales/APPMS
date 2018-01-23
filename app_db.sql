-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2018 at 10:46 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `apptopus_externalcustomers`
--

CREATE TABLE `apptopus_externalcustomers` (
  `app_school_id` int(11) NOT NULL,
  `app_school_name` varchar(255) NOT NULL,
  `app_school_address` varchar(255) NOT NULL,
  `app_school_preschool` int(10) NOT NULL,
  `app_school_gradeschool` int(10) NOT NULL,
  `app_school_highschool` int(10) NOT NULL,
  `app_school_employees` int(10) NOT NULL,
  `app_school_principal` varchar(255) NOT NULL,
  `app_principal_birthday` date NOT NULL,
  `app_principal_facebook` varchar(25) NOT NULL,
  `app_principal_email` varchar(255) NOT NULL,
  `app_principal_landline` varchar(25) NOT NULL,
  `app_principal_cellphone` varchar(25) NOT NULL,
  `app_school_admin` varchar(255) NOT NULL,
  `app_admin_birthday` date NOT NULL,
  `app_admin_facebook` varchar(255) NOT NULL,
  `app_admin_email` varchar(255) NOT NULL,
  `app_admin_landline` varchar(255) NOT NULL,
  `app_admin_cellphone` varchar(255) NOT NULL,
  `app_school_sysadmin` varchar(255) NOT NULL,
  `app_sysadmin_number` varchar(255) NOT NULL,
  `app_sysadmin_email` varchar(255) NOT NULL,
  `app_relation_manager` varchar(255) NOT NULL,
  `app_avail_product` varchar(255) NOT NULL,
  `app_start_finish` date NOT NULL,
  `app_school_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apptopus_externalcustomers`
--

INSERT INTO `apptopus_externalcustomers` (`app_school_id`, `app_school_name`, `app_school_address`, `app_school_preschool`, `app_school_gradeschool`, `app_school_highschool`, `app_school_employees`, `app_school_principal`, `app_principal_birthday`, `app_principal_facebook`, `app_principal_email`, `app_principal_landline`, `app_principal_cellphone`, `app_school_admin`, `app_admin_birthday`, `app_admin_facebook`, `app_admin_email`, `app_admin_landline`, `app_admin_cellphone`, `app_school_sysadmin`, `app_sysadmin_number`, `app_sysadmin_email`, `app_relation_manager`, `app_avail_product`, `app_start_finish`, `app_school_status`) VALUES
(1, '-', '-', 0, 5, 5, 5, '5', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '-'),
(2, '-', '', 0, 0, 0, 0, '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00', ''),
(3, '-', '', 0, 0, 0, 0, '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00', ''),
(4, '-', '', 0, 0, 0, 0, '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00', ''),
(5, '-', '', 0, 0, 0, 0, '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00', ''),
(6, '123', '', 0, 0, 0, 0, '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00', ''),
(11, '9', '', 0, 0, 0, 0, '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00', ''),
(13, '99', '', 0, 0, 0, 0, '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00', ''),
(14, '', '', 0, 0, 0, 0, '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `apptopus_internalcustomers`
--

CREATE TABLE `apptopus_internalcustomers` (
  `apptopus_internal_id` int(10) NOT NULL,
  `apptopus_employee_fname` varchar(255) NOT NULL,
  `apptopus_employee_mname` varchar(255) NOT NULL,
  `apptopus_employee_lname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apptopus_internalcustomers`
--

INSERT INTO `apptopus_internalcustomers` (`apptopus_internal_id`, `apptopus_employee_fname`, `apptopus_employee_mname`, `apptopus_employee_lname`) VALUES
(1, 'pau', 'chirstian', 'rojales');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `username` varchar(35) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`username`, `password`, `level`, `nama`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Pau Rojales');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nis` varchar(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tmpt_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nama_ayah` varchar(200) NOT NULL,
  `nama_ibu` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nama`, `jk`, `tmpt_lahir`, `tgl_lahir`, `alamat`, `nama_ayah`, `nama_ibu`) VALUES
('12121262', 'Dewi Lestari', 'Perempuan', 'Bandung', '1997-07-17', 'Jakarta', 'Dendi', 'Heni'),
('12212322', 'Heni Wati', 'Perempuan', 'Malang', '1996-09-09', 'Jakarta', 'Edo', 'Yuni'),
('12323245', 'Indri Rahayu', 'Perempuan', 'Malang', '1994-02-02', 'Malang', 'Sugeng', 'Heni'),
('12382212', 'Sugeng Putro', 'Laki - Laki', 'Malang', '1995-08-18', 'Malang', 'Darmaji', 'Yuli'),
('13291722', 'Dedi Hermawan Putra', 'Laki - Laki', 'Malang', '1997-08-06', 'Blitar', 'Hedi', 'Heni'),
('14201021', 'Arista Septiana Dewi', 'Perempuan', 'Situbondo', '1996-06-12', 'Malang', 'Dani', 'Heni'),
('14201064', 'Rian Priskanova', 'Laki - Laki', 'Malang', '1996-05-08', 'Malang', 'Sugianto', 'Rina'),
('14201073', 'Rian Tani Hermantio', 'Laki - Laki', 'Malang', '1995-05-10', 'Surabaya', 'Doni', 'Indris'),
('14201075', 'Mahrus Khomaini', 'Laki - Laki', 'Sungai Durian', '1995-07-12', 'Malang', 'Muhammad Makky', 'Rusminah'),
('14201076', 'Muhammad Indris', 'Laki - Laki', 'Blitar', '1998-07-05', 'Malang', 'Sugeng', 'Dewi Sakinah'),
('14201077', 'Muhammad Yusuf', 'Laki - Laki', 'Malang', '1994-06-14', 'Malang', 'Sigit', 'Donita'),
('23239822', 'Muhammad Musfafa', 'Laki - Laki', 'Banjarmasin', '1998-12-02', 'Banjarmasin', 'Ahmat Tani', 'Tina'),
('32323822', 'Lingga Dewi Ramadhani', 'Perempuan', 'Malang', '1995-07-05', 'Malang', 'Ramadhan', 'Dewi'),
('45493876', 'Devi Rahayu', 'Perempuan', 'Surabaya', '1997-02-21', 'Bandung', 'Antoni', 'Sakinah'),
('54355467', 'Ramadhan Ade', 'Laki - Laki', 'Jambi', '1994-06-07', 'Bandung', 'SigitnPurnomo', 'Dewi Satina'),
('72129377', 'Achmad Dani Saputra', 'Laki - Laki', 'Bandung', '1998-12-19', 'Malang', 'Eko Aji', 'Tanti'),
('75675667', 'Eko Ramadhan', 'Laki - Laki', 'Jakarta', '1997-12-08', 'Surabaya', 'Darji Santo', 'Santi Putirani'),
('76589144', 'Muhammad Nasution Putra', 'Laki - Laki', 'Banjarmasin', '1997-03-09', 'Blitar', 'Sodik', 'Dewilah'),
('76886790', 'Arka Jaya Romadhon', 'Laki - Laki', 'Bandung', '1997-07-22', 'Bandung', 'Sutisna', 'Eni'),
('78659488', 'Taufiqi Maulana', 'Laki - Laki', 'Blitar', '1996-07-08', 'Surabaya', 'Achmat', 'Heni'),
('83019298', 'Dani Prasetyo Ramadhan', 'Laki - Laki', 'Malang', '1998-06-11', 'Malang', 'Darmaji', 'Hardiana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apptopus_externalcustomers`
--
ALTER TABLE `apptopus_externalcustomers`
  ADD PRIMARY KEY (`app_school_id`);

--
-- Indexes for table `apptopus_internalcustomers`
--
ALTER TABLE `apptopus_internalcustomers`
  ADD PRIMARY KEY (`apptopus_internal_id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apptopus_externalcustomers`
--
ALTER TABLE `apptopus_externalcustomers`
  MODIFY `app_school_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `apptopus_internalcustomers`
--
ALTER TABLE `apptopus_internalcustomers`
  MODIFY `apptopus_internal_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2018 at 09:59 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

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
-- Table structure for table `apptopus_account`
--

CREATE TABLE `apptopus_account` (
  `apptopus_account_id` int(11) NOT NULL,
  `apptopus_account_name` varchar(255) NOT NULL,
  `apptopus_account_budget` int(11) NOT NULL,
  `apptopus_account_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apptopus_account`
--

INSERT INTO `apptopus_account` (`apptopus_account_id`, `apptopus_account_name`, `apptopus_account_budget`, `apptopus_account_date`) VALUES
(0, '123', 900000, '0000-00-00'),
(0, '123', 900000, '2019-10-10'),
(123, 'Car', 0, '2018-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `apptopus_department`
--

CREATE TABLE `apptopus_department` (
  `apptopus_department_id` int(11) NOT NULL,
  `apptopus_department_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `app_start` date NOT NULL,
  `app_finish` date NOT NULL,
  `app_school_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apptopus_externalcustomers`
--

INSERT INTO `apptopus_externalcustomers` (`app_school_id`, `app_school_name`, `app_school_address`, `app_school_preschool`, `app_school_gradeschool`, `app_school_highschool`, `app_school_employees`, `app_school_principal`, `app_principal_birthday`, `app_principal_facebook`, `app_principal_email`, `app_principal_landline`, `app_principal_cellphone`, `app_school_admin`, `app_admin_birthday`, `app_admin_facebook`, `app_admin_email`, `app_admin_landline`, `app_admin_cellphone`, `app_school_sysadmin`, `app_sysadmin_number`, `app_sysadmin_email`, `app_relation_manager`, `app_avail_product`, `app_start`, `app_finish`, `app_school_status`) VALUES
(2, 'Academia De Julia Victoria Of Cavite', 'National Road, Buhay na Tubig, Imus City', 158, 75, 77, 40, 'Pamela A. Marasigan', '1975-10-06', 'paramarasigan93@gmail.com', 'paramarasigan93@gmail.com', '489-4004', '09065502026', 'Julienne V. Clet', '1985-09-28', 'julesvalencia@gmail.com', 'julesvalencia@gmail.com', '489-4004', '09258204762', 'Julienne V. Clet', '09258204762', 'julesvalencia@gmail.com', 'Ms. Elizze Obis', 'Prime', '2019-05-31', '2016-06-01', ''),
(3, 'Alliance Christian School Tutorial Services Inc.', '10 Marble Road, Pilar Village Las Pinas City', 0, 0, 0, 0, 'Doreen T. Cole', '1966-12-11', 'Doreencole', 'principal@alliance.edu.ph', '501-61-94', '09177293966', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(18, 'CHRIST THE KING COLLEGE OF SCIENCE AND TECHNOLOGY INC.', 'MUNTINLUPA CITY', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', 'DAVID LAWRENCE V. YASON', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', 'LUCKY SAME O. CAIMOL', 'PREMIERE', '0000-00-00', '0000-00-00', ''),
(4, 'Acts Learning Center INC.', '138 Ruby St. Shineland Vill. Sala, Cabuyao Laguna', 0, 0, 0, 0, 'Emelita E. Balisacan', '0000-00-00', '-', 'emmie_balisacan@yahoo.com', '(049) 544 0752', '09988629934', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '2017-06-01', ''),
(5, 'Batangas Christian School', '-', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(6, 'Blue Isle Integrated School', 'Filinvest, Blue Isle Subd. Sta Maria, Sto. Tomas, Batangas', 34, 161, 114, 23, 'Ricardo Luis P. Angeles', '0000-00-00', 'loloyfmf@yahoo.com', 'loloyfmf@yahoo.com', '(043) 784-3653', '09178870658', 'Marites P. Angeles', '0000-00-00', 'mpa58_angeles@yahoo.com', 'mpa58_angeles@yahoo.com', '(043) 784-3653', '09189205645', 'Cynthia E. Recillo', '09475199838', 'cynt_29@yahoo.com', 'Arnold Buluran', 'Advance', '0000-00-00', '0000-00-00', ''),
(7, 'Beatea Maria Academy', 'Blk 2 Lot Phase  St. James St. Mary Homes Subd. Molino IV Bacoor City Cavite', 0, 0, 0, 0, 'Iris Serdon Yu', '1986-03-13', '-', 'bma.edu@gmail.com', '(046) 435-7408', '09985856735', 'Mercedita Serdon Yu', '1957-08-09', '-', 'bma.edu@gmail.com', '(046) 435-7408', '09166110793', 'Joseph Yu', '09335655577', 'yujosephyayol@yahoo.com', '-', '-', '0000-00-00', '0000-00-00', ''),
(8, 'Blessed Land Academy Of Taguig', '12 14th St. Purok 6B Lower Bicutan, Taguig City', 0, 0, 0, 0, 'Pureza Manlangit', '0000-00-00', '-', 'Blessedlandacademy2005@yahoo.com', '-', '09193603332', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(9, 'Blessed  Maria Cristina Brando School', '419 Arnaldo Highway Brgy. Santiago Gen. Trias Cavite', 39, 172, 102, 21, 'Sr. Ma. Margherita E. Mondano, Oses', '1969-03-14', 'Bmcbs Brandonians', 'bmcbs-m@yahoo.com', '(046) 686-69-32', '09166096054', 'Sr. Emilia Y. Loria Oses', '1983-01-14', '-', '-', '-', '-', 'Sr. Ma. Margherita E. Mondano, Oses', '09166096054', 'bmcbs-m@yahoo.com', '-', '-', '0000-00-00', '0000-00-00', ''),
(10, 'Bethany Christian Academy Of Tagaytay', 'Aguinaldo H-way Maitim 2nd East Tagatay City', 0, 0, 0, 0, 'Josefina B. Susa', '0000-00-00', '-', '-', '(046) - 413- 1932', '09186987341', 'Julius Deuz Depaor', '1972-07-18', 'julzdepaor_bcat@yahoo.com', 'julzdepaor_bcat@yahoo.com', '(046) 512-3928', '09204378830', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(11, 'Berean Integrated School', '-', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(12, 'Blue Danube School', 'SAN PABLO CITY', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', 'MR. ALFREDO O. FERRER', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(13, 'Bristol Integrated School', '-', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(14, 'ACADEMIA DE JULIA VICTORIA OF CAVITE', 'NATIONAL ROAD, BUHAY NA TUBIG, IMUS CITY, CAVITE', 158, 153, 0, 40, 'PAMELA A. MARASIGAN', '0000-00-00', 'pamarasigan93@gmail.com', '-', '489-4004', '0906-550-2026', 'JULIENNE V. CLET', '0000-00-00', 'julesvalencia@gmail.com', 'julesvalencia@gmail.com', '489-4004', '0925-820-4762', '-', '-', '-', '-', 'Advance', '0000-00-00', '0000-00-00', ''),
(15, 'CALVARY BAPTIST ACADEMY OF DASMARINAS, INC.', '039  INT. CAMERINO AVENUE, DASMARINAS CITY, CAVITE', 12, 59, 42, 24, 'DR. NEMUEL G. LESADA', '0000-00-00', '-', 'nemlynn218@yahoo.com', '046- 432-0385', '0917-539-3460', 'EDNA S. RESCOBER', '0000-00-00', '-', 'esrescober@yahoo.com', '(046) 9737452', '0917-526-7357', 'ABIGAIL T. QUITLONG', '0935- 634-4261', 'calvarybaptistacademy.dasma@gmail.com', 'LARRY BABLONIA', 'ADVANCE', '0000-00-00', '0000-00-00', ''),
(16, 'CHILDREN\'S HOUSE A MONTESSORI SCHOOL LUCENA INC.', 'DON CRISANTO COR. MANGGA STS., MARKETVIEW LUCENA CITY', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', 'KATHERINE R. ARILES', '0000-00-00', '-', '-', '-', '0922-821-1983', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(17, 'CHRIST LIFE ACADEMY, INC.', 'BLK 9 LOT 15 CAMELLA SORRENTO AVE. CITY OF BACOOR', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', 'ANNALYN C. SUAREZ', '0000-00-00', '-', 'christlifesorrento@gmail.com', '(046) 571 7009', '0947-994-7879', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(19, 'CHRIST THE LORD INSTITUTE FOUNDATION LUCENA CITY, INC.', 'MAHARLIKA HIGHWAY IBABANG IYAM LUCENA CITY', 13, 100, 92, 22, 'CYNTHIA B. LADINES', '0000-00-00', 'CYNTHIA LADINES', 'jingjingladines@yahoo.com', '-', '0922-408-0580', 'LUISITA A. ABAT', '0000-00-00', 'WHESA ANOSO ABAT', 'weji_a@yahoo.com', '-', '0933-533-9772', 'JONATHAN V. RABY', '0942-359-8140', 'jonversion10@outlook.com', '-', 'ADVANCE', '0000-00-00', '0000-00-00', ''),
(20, 'Christian Values School Foundation Inc.', 'KM 18 Aguinaldo Highway Bacoor City, Cavite', 0, 76, 224, 0, 'Susan R. Capili', '0000-00-00', 'christianvaluesschool@yah', 'susanrcapili@yahoo.com', '(046) 472-0771', '0917-547-2799', 'Cathrine S. Laus', '0000-00-00', 'matt16_26kats@yahoo.com', 'katslaus@gmail.com', '(046) 472-0771', '0927-650-7731', 'Peter C. Radin', '0998-884-7586', 'petercradin@gmail.com', '-', '-', '0000-00-00', '0000-00-00', ''),
(21, 'Colegio de Montessori', 'A. Soriano Hi-way, Timalan, Naic, Cavite', 114, 232, 70, 31, 'Elenita F. Parra', '0000-00-00', '-', 'ellenparra@yahoo.com', '413-07-51', '0935-101-1401', 'Elmina P. Salazar', '0000-00-00', '-', '-', '413-07-51', '0928-983-6627', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(22, 'Colegio de Naic', 'Public Market Rd. Governor\'s Drive Ibayo Silangan Naic, Cavite', 0, 0, 0, 0, 'Bituin Janabajal', '0000-00-00', '-', 'colegio_de_naic@yahoo.com', '(046) 686-0722', '-', 'Arnel Janabajal', '0000-00-00', '-', '-', '-', '-', 'Girlie D. Vergara', '0927-384-1718', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(23, 'Colegio de San Francisco', 'Sampalucan, General Trias City, Cavite', 0, 0, 0, 0, 'Joel Espedido', '0000-00-00', '-', 'colegiodesanfrancisco2003@yahoo.com.ph', '046-484-3055', '0947-990-6347', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(24, 'De La Salle University- Dasmarinas', '-', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(25, 'Flight School International', '-', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(26, 'Galilee Academy', '520- C Rosario, Cavite', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(27, 'Gardner School of Multiple Intelligences, Inc.', 'San Antonio, San Pascual, Batangas', 60, 66, 0, 28, 'Imeilyn Macaraig- Faltado', '0000-00-00', 'Gardner School Multiple I', 'stcj_mis@yahoo.com.ph', '(043)984-6533', '-', 'Eusebio C. Faltado Jr.', '0000-00-00', 'Gardner School Multiple Intelligences', 'stcj_mis@yahoo.com.ph', '(043)984-6533', '-', '-', '0917-936-1967', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(28, 'Grabsum School Inc.', 'Masalukot 1, Candelaria Quezon', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(29, 'Grace Christ Christian School', '-', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(30, 'Grace Horizon Grade School', 'B83 Lot 24 Mabuhay Homes Salawag Dassmarinas City, Cavite', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(31, 'Graceland Academy', '-', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(32, 'Guadette Study Center', '-', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(33, 'Genesis Educational Services Foundation, Inc.', '08 Balleser St., Zone 2, Signal Village, Taguig City', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(34, 'Holy Nazarene Christian School ', '101 Nazarene Compound Mulawin, Tanza, Cavite', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', 'Teodora F. Nazareno', '0000-00-00', '-', 'holynazarene@yahoo.com', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(35, 'Jeremiah Montessori School, Inc.', 'B27 L27 Milan St. Ph2 St. Joseph Village 6, Cabuyao City, Laguna', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(36, 'Josiah Christian Values School', 'Blk 26 Lot 3', 25, 84, 220, 22, 'Jessa D. Sanorjo', '0000-00-00', '-', '-', '-', '-', 'Jocelyn S. Maniago', '0000-00-00', '-', '-', '(046) 489-2183', '-', 'Leo S. Sarne', '0908-883-6955', 'josiahchristianvalues@yahoo.com', '-', '-', '0000-00-00', '0000-00-00', ''),
(37, 'Kiddie Corner School', 'Villa Rosario Subdivision Tiang, Quezon', 0, 0, 0, 0, 'Alma A. Baldemos', '0000-00-00', '-', 'alma_bldms@yahoo.com', '5459388', '0908-707-3708', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', 'Larry Babilonia/ Arnold Buluran', '-', '0000-00-00', '0000-00-00', ''),
(38, 'King\'s Way Christian Academe Inc.', 'San Roque Naic, Cavite', 0, 0, 0, 0, 'Jarvin M. Resus', '0000-00-00', '-', 'kingswaynaic@yahoo.com', '412-22-96', '0917-636-4200', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(39, 'La Verne Academy, Inc.', 'B29 L22 Phase 1, Washington St. Anabu 2F Golden City, Imus City, Cavite', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(40, 'La Trinidad Academy Inc.', 'Treelane III-C, Bayan Loma IX, Imus City, Cavite', 0, 0, 0, 0, '-', '0000-00-00', '--', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(41, 'Little Haven Christian School', '#26 Margelo Street, Camella Homes, Bayan Luma V, Imus City, Cavite', 20, 84, 16, 16, 'Rodrigo Asegurado', '0000-00-00', 'Rod Asegurado', 'asegurado79@gmail.com', '(046) 471-9844', '0925-311-1271', 'Yolanda R. Ubusan', '0000-00-00', 'yru9888', 'yru9888@yahoo.com', '(046)471 2361', '0927-322-3921', 'Yolanda R. Ubusan', '0927 461 5615', 'yru9888@yahoo.com', '-', '-', '0000-00-00', '0000-00-00', ''),
(42, 'Magnum  Opus Formation School, Inc.', 'Poblacion, Padre Garcia, Batangas', 58, 153, 0, 21, 'Edwin L. Cubero', '0000-00-00', '-', '-', '(043)741-1681', '-', 'Narciso A. Baculo', '0000-00-00', 'June R. Escabosa', '-', '-', '0921-212-0614', '-', '0939-448-1538', 'magnumopusformationschool@yahoo.com', '-', 'Advance', '0000-00-00', '0000-00-00', ''),
(43, 'Maria Mae Academy, Inc.', 'B1 L10 PH1-A Mary Homes Subdivision Molino IV, Bacoor, Cavite', 78, 217, 21, 0, '-', '0000-00-00', '-', '-', '-', '-', 'Nonitha S. Figuerrez', '0000-00-00', '-', 'mma_1997@yahoo.com', '(046) 477 1860', '-', 'Glenn M. Serdon', '0929- 260- 2373', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(44, 'Mary\'s Greenfield Academy, Inc.', 'St. Francis St., Brgy. Miguel Mojica, Mendez, Cavite', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(45, 'Metro Lucena Integrated Learning  Center', '118 M.L Tagarao St., Ilayang Iyam, Lucena City', 0, 0, 0, 0, 'Ctherine Hidalgo', '0000-00-00', 'echidalgo08@yahoo.com', 'echidalgo08@yahoo.com', '-', '0947-996-1796', 'Cindy Larosa', '0000-00-00', '-', '22024@msn.com', '(042) 373- 3610', '0927-685-9110', 'Peter Paul Adofina', '0925-523-3665', 'ppgadofina@gmail.com', '-', '-', '0000-00-00', '0000-00-00', ''),
(46, 'Mizpah Community Academy Foundation Inc.', 'P8 L10 Congression Molino II, Bacoor City, Cavite', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(47, 'Mother Care Academy, Inc.', '#90 Avenida Rizal St. Ph2 Bahay Pag-asa', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(48, 'Nicolites Montessori School', 'San Roque St. Brgy. 4 Nasugbu, Batangas', 27, 124, 185, 35, 'Fortunata Tiangco', '0000-00-00', '-', '-', '-', '0905-354-9243', 'Ronald M. Orcuse', '0000-00-00', 'Ronald Orcuse', 'orcuse@yahoo.com', '(043)416-0149', '0917-515-1667', 'Jenvib Punongbayan', '0917-619-9746', 'nicolites_mpntessori@yahoo.com', '-', '-', '0000-00-00', '0000-00-00', ''),
(49, 'NiÃ±o Jesus Science Oriented Montessori School, Inc.', 'Farconville Subd. Phase 1, San Pablo City, Laguna', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', 'Jacqueline Garcia Villeno', '0000-00-00', '-', '-', '049-503-4105', '0917- 371- 9472', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(50, 'Our Lady of Fatima Academy of Binakayan, Inc.', '3875 V. Marquez St. Binakaya, Kawit, Cavite', 22, 95, 83, 20, 'Joe Kris Erickson O. Caimol', '0000-00-00', '-', '-', '(046)434-0771', '-', 'Lolita O. Caimol', '0000-00-00', '-', '(046) 434-0771', '-', '-', 'Angel Inot', '-', '-', 'Lucy Same O. Caimol', 'Advance', '0000-00-00', '0000-00-00', ''),
(51, 'Padre Vicente Garcia Memorial Academy', '-', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(52, 'Potters Heart of Wisdom Academy', 'Blk 38 Lot 28 ACM Paramount Navarro General Trias City, Cavite', 62, 84, 0, 0, 'Martina P. Jose', '0000-00-00', '-', '-', '436-7434', '03020-254-2618', 'Rodolfo C. JoSE', '0000-00-00', '-', '-', '-', '0315-326-6814', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(53, 'Prime Heights Learning Center', '-', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(54, 'PTS College and Advanced Studies, Inc.', 'CQT Salitran IV, DasmariÃ±as City, Cavite', 0, 0, 0, 0, 'Amanda Ortega', '0000-00-00', '-', 'jjjortega@yahoo.com', '046-512-4941', '0905-413-3243', 'Laurence B. Gatawa', '0000-00-00', 'Laurence Gatawa', 'lgatawa@gmail.com', '046-512-4941', '0923-893-2794', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(55, 'Queen\'s Row Integrated Science School', 'Queens Row Bacoor City', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(56, 'Redeeming Grace Learning Center', 'Blk 8 Lot 1 Ph 1, Maryhomes Subdivision Molino 4, Bacoor City', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(57, 'Rizal Standard Academy', '136 Rizal Avenue Poblacio 2, Nagcarlan, Batangas', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(58, 'Rochepol Jane Acdemy- Main', '-', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(59, 'Rochepol Jane Academy Inc.', '1407 Maliksi III, Bacoor City, Cavite', 78, 243, 0, 22, 'Jean G. Arguelles', '0000-00-00', 'Jean Galarce Arguelles', 'jeanarguelles11@yahoo.com', '(046)434-1631', '0998-993-6224', 'Imelda L. Bartolome', '0000-00-00', 'Imelda Leyran Bartolome', 'meldaleyranbartolome@gmail.com', '(046)417-8394', '0915-964-3205', 'Bernalenn Joy E. Sanchez', '0932-470-1018', 'estebanbernalennjhoy@gmail.com', '-', '-', '0000-00-00', '0000-00-00', ''),
(60, 'Rochepol Jane Academy- Poblacion', 'Ilaya St. Habay 1, Bacoor City, Cavite', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', 'Apolla L. Nazairre', '0000-00-00', '-', 'jeanarguelles11@yahoo.com', '(046)434-4631', '0926-720-0692', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(61, 'Rogationist College', 'Silang, Cavite', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(62, 'Rondlhan Ministries of Love and Compassion', '473 Malunggay St. Ph.3 CAA, Las PiÃ±as City', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(63, 'Saint Charles Borromeo Integrated School', '-', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(64, 'Samuel Mission International School', 'Lourdes St. Maitim 2nd Central Tagaytay City', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(65, 'San Isidro Institute of Imus, Inc.', '-', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', 'Glen A. Capellan', '0000-00-00', '-', 'capellanglen@gmail.com', '-', '0927-300-4761', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(66, 'School of Our Lady of a La Salette', '24 Maryland St. Cubao, Quezon City', 0, 0, 0, 0, 'Leticia Valdez', '0000-00-00', '-', 'leticiavaldez@yahoo.com', '044-815-4201', '0915-727-0342', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(67, 'Seed of Wisdom', 'B G Aurora St. Camella Homes, Salinas I', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(68, 'Shekinah Learning School', 'Blk 18 Lot 12 San Jose GMA, Cavite', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', 'Digna S. Ibarra', '0000-00-00', '-', 'shekinahls_den@yahoo.com', '519-01-46', '0939-782-1628', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(69, 'South Side Integrated School', '-', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(70, 'St. Anthony Montessori- Integrated School', 'Diamond Village, DasmariÃ±as City, Cavite', 21, 96, 112, 20, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(71, 'St. Jude College- DasmariÃ±as', 'URC Avenue Salitran IV, DasmariÃ±as City, Cavite', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(72, 'St. Michael Montessori De Carmona', 'Cityland Subdivision Mabuhay Carmona, Cavite', 0, 0, 0, 0, 'Cezar Molina', '0000-00-00', '-', 'smmc_montessori@yahoo.com', '-', '0905-651-3575', '-', '0000-00-00', '-', '-', '-', '-', 'Gino Romero', '0928-744-5831', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(73, 'Sto. NiÃ±o De Lebelle Academy Inc.', 'St. Anthony St. Belvedere Town Paradahan Tanza, Cavite', 51, 191, 0, 16, 'Isabel A. Jordan', '0000-00-00', '-', 'sndla_2000@yahoo.com', '5300864', '0915-683-3246', 'Joyce Marie Bustillo', '0000-00-00', 'Joyce Matro', 'joyce_king2@yahoo.com', '-', '0929-277-2513', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(74, 'St. Simon Montessori School', '-', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(75, 'St. Therese of the Child Jesus Multiple Intelligences School, Inc.', 'Pastor Avenue, Palocan West, Batangas City', 181, 259, 21, 53, 'Imeilyn Macaraig- Faltado', '0000-00-00', 'STCJ Multiple Intelligenc', 'stmj_mis@yahoo.com.ph', '(043) 723-1608', '-', 'Eusebio C. Faltado Jr.', '0000-00-00', 'STCJ Multiple Intelligences', 'stmj_mis@yahoo.com.ph', '(043) 723-1608', '-', '-', '0947-936-1967', 'stmj_mis@yahoo.com.ph', 'Arnold Buluran/ Larry Babilonia', '-', '0000-00-00', '0000-00-00', ''),
(76, 'St. Thomas Becket Academy', 'Indang Road, Brgy. Inocencio, Trece Martires City, Cavite', 31, 114, 90, 23, 'Anastacia M. Bayas', '0000-00-00', '-', 'tessie_bayas@yahoo.com', '4191387', '0917-315-0366', 'Ailyn L. Cortez', '0000-00-00', '-', '-', '4191387', '0917-807-9295', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(77, 'St. Joseph College of Rosario Batangas Inc.', 'Rosario, Batangas', 0, 0, 0, 0, 'Fr. Joseph P. Santiago', '0000-00-00', '-', 'josephosj@yahoo.com', '-', '0917-873-5565', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(78, 'The Strong Tower Christian Academy', 'Lot 14 Blk 2 Crismor Subdivision San Pedro Laguna', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(79, 'Taytay United Methodist Christian School Inc.', '-', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(80, 'Technology Integrated Montessori of Meadowood', 'Tanguile St. Phase 1, Meadowood Executive Village, Bacoor City, Cavite', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', 'Jeanie A. Villamor', '0000-00-00', '-', 'ti_montessori@yahoo.com', '(046)424 4513', '0919-691-5047', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(81, 'The Treehouse Child Developement and Learning Center', '274 Geronimo St. Malibay Pasay City', 128, 287, 0, 20, '-', '0000-00-00', '-', '-', '-', '-', 'Maria Dare C. To- ong', '0000-00-00', '-', 'daretoong@yahoo.com', '(02) 854-7321', '0917-808-0081', 'Roel B. Monsuller', '0956-925-9388', 'roelmonsuller@gmail.com', '-', '-', '0000-00-00', '0000-00-00', ''),
(82, 'Witzkidz Montessori', 'Lemilla Subdivision Sabutan Silang, Cavite', 0, 0, 0, 0, '-', '0000-00-00', '-', '-', '-', '-', 'Ludith R. Lin', '0000-00-00', '-', 'montessoriwitzkidz@yahoo.com', '(046) 686-0012', '0998-859-8010', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', ''),
(83, 'Young Kwang Gukje School', '2767 Panungyana I, Alfonso Road Mendez, Cavite', 19, 81, 44, 13, 'Elenita F. Parra', '0000-00-00', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '0908-486-1820', 'youngkwanggukjeschool@yahoo.com', '-', '-', '0000-00-00', '0000-00-00', '');

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
(7, 'Paulo', 'Christian', 'Rojales');

-- --------------------------------------------------------

--
-- Table structure for table `apptopus_payment`
--

CREATE TABLE `apptopus_payment` (
  `apptopus_payment_id` int(10) NOT NULL,
  `apptopus_payment_month` varchar(255) NOT NULL,
  `app_check_id` int(10) NOT NULL,
  `apptopus_payment_date` date NOT NULL,
  `apptopus_payment_checkno` int(10) NOT NULL,
  `apptopus_payment_bank` varchar(255) NOT NULL,
  `apptopus_payment_amount` varchar(255) NOT NULL,
  `apptopus_payment_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apptopus_payment`
--

INSERT INTO `apptopus_payment` (`apptopus_payment_id`, `apptopus_payment_month`, `app_check_id`, `apptopus_payment_date`, `apptopus_payment_checkno`, `apptopus_payment_bank`, `apptopus_payment_amount`, `apptopus_payment_status`) VALUES
(3, 'Jun', 1, '2017-06-01', 1360175, 'China Bank', '8000', 'uncleared'),
(3, 'Jul', 2, '2017-07-01', 1360176, 'China bank', '8000', 'uncleared'),
(3, 'Jan', 7, '0000-00-00', 123, 'BDO', '50000', 'cleared'),
(2, 'Jan', 9, '0000-00-00', 123, 'BDO', '30000', 'uncleared'),
(13, 'Jan', 10, '0000-00-00', 123, 'BDO', '5000', 'cleared');

-- --------------------------------------------------------

--
-- Table structure for table `apptopus_possiblecustomers`
--

CREATE TABLE `apptopus_possiblecustomers` (
  `app_possible_customer_id` int(10) NOT NULL,
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
  `app_start` date NOT NULL,
  `app_finish` date NOT NULL,
  `app_school_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `apptopus_product`
--

CREATE TABLE `apptopus_product` (
  `apptopus_product_id` int(11) NOT NULL,
  `product_package` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apptopus_product`
--

INSERT INTO `apptopus_product` (`apptopus_product_id`, `product_package`) VALUES
(3, 'Advance'),
(4, 'Premium'),
(5, 'Premier');

-- --------------------------------------------------------

--
-- Table structure for table `app_vouchers`
--

CREATE TABLE `app_vouchers` (
  `vouchers_id` int(11) NOT NULL,
  `apptopus_date_vouchers` date NOT NULL,
  `apptopus_particular_vouchers` varchar(255) NOT NULL,
  `apptopus_amount_vouchers` int(11) NOT NULL,
  `apptopus_chargeto_vouchers` varchar(255) NOT NULL,
  `apptopus_vouchers_bank` varchar(255) NOT NULL,
  `apptopus_vouchers_banknum` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_vouchers`
--

INSERT INTO `app_vouchers` (`vouchers_id`, `apptopus_date_vouchers`, `apptopus_particular_vouchers`, `apptopus_amount_vouchers`, `apptopus_chargeto_vouchers`, `apptopus_vouchers_bank`, `apptopus_vouchers_banknum`) VALUES
(1, '2018-02-26', 'representation', 3000, 'cheung', '', '');

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
-- Indexes for table `apptopus_department`
--
ALTER TABLE `apptopus_department`
  ADD PRIMARY KEY (`apptopus_department_id`);

--
-- Indexes for table `apptopus_internalcustomers`
--
ALTER TABLE `apptopus_internalcustomers`
  ADD PRIMARY KEY (`apptopus_internal_id`);

--
-- Indexes for table `apptopus_payment`
--
ALTER TABLE `apptopus_payment`
  ADD PRIMARY KEY (`app_check_id`);

--
-- Indexes for table `apptopus_possiblecustomers`
--
ALTER TABLE `apptopus_possiblecustomers`
  ADD PRIMARY KEY (`app_possible_customer_id`);

--
-- Indexes for table `apptopus_product`
--
ALTER TABLE `apptopus_product`
  ADD PRIMARY KEY (`apptopus_product_id`);

--
-- Indexes for table `app_vouchers`
--
ALTER TABLE `app_vouchers`
  ADD PRIMARY KEY (`vouchers_id`);

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
-- AUTO_INCREMENT for table `apptopus_department`
--
ALTER TABLE `apptopus_department`
  MODIFY `apptopus_department_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `apptopus_internalcustomers`
--
ALTER TABLE `apptopus_internalcustomers`
  MODIFY `apptopus_internal_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `apptopus_payment`
--
ALTER TABLE `apptopus_payment`
  MODIFY `app_check_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `apptopus_possiblecustomers`
--
ALTER TABLE `apptopus_possiblecustomers`
  MODIFY `app_possible_customer_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `apptopus_product`
--
ALTER TABLE `apptopus_product`
  MODIFY `apptopus_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `app_vouchers`
--
ALTER TABLE `app_vouchers`
  MODIFY `vouchers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

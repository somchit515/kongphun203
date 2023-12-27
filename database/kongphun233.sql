-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 09:56 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kongphun233`
--

-- --------------------------------------------------------

--
-- Table structure for table `duties`
--

CREATE TABLE `duties` (
  `dts_id` int(11) NOT NULL,
  `dt_name` varchar(200) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `duties`
--

INSERT INTO `duties` (`dts_id`, `dt_name`, `user_id`) VALUES
(1, 'ຫົວໜ້າການເມືອງ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `historys_personsall`
--

CREATE TABLE `historys_personsall` (
  `hp_id` varchar(200) NOT NULL,
  `flname_hp` varchar(200) NOT NULL,
  `pl_id` int(11) NOT NULL,
  `dts_id` int(11) NOT NULL,
  `sk_id` int(11) NOT NULL,
  `gender_hp` varchar(20) NOT NULL,
  `status_mw` varchar(20) NOT NULL,
  `hbd_hp` date NOT NULL,
  `datel_hp` date NOT NULL,
  `dateh_hp` date NOT NULL,
  `dateb_hp` date NOT NULL,
  `datek_hp` date NOT NULL,
  `daten_hp` date NOT NULL,
  `datew_hp` date NOT NULL,
  `vg_id` int(5) NOT NULL,
  `dt_id` int(5) NOT NULL,
  `pn_id` int(5) NOT NULL,
  `lv_lead_hp` varchar(200) NOT NULL,
  `lv_sadsana_hp` varchar(200) NOT NULL,
  `lv_zanpao_hp` varchar(200) NOT NULL,
  `lv_vizasapor_hp` varchar(200) NOT NULL,
  `villn_hp` varchar(200) NOT NULL,
  `disn_hp` varchar(200) NOT NULL,
  `provn_hp` varchar(200) NOT NULL,
  `remark_hp` text NOT NULL,
  `datenow_hp` date NOT NULL,
  `status_hp` varchar(1) NOT NULL,
  `dateout_hp` date NOT NULL,
  `img_photo` text NOT NULL,
  `user_id` int(5) NOT NULL,
  `created_hp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `historys_personsall`
--

INSERT INTO `historys_personsall` (`hp_id`, `flname_hp`, `pl_id`, `dts_id`, `sk_id`, `gender_hp`, `status_mw`, `hbd_hp`, `datel_hp`, `dateh_hp`, `dateb_hp`, `datek_hp`, `daten_hp`, `datew_hp`, `vg_id`, `dt_id`, `pn_id`, `lv_lead_hp`, `lv_sadsana_hp`, `lv_zanpao_hp`, `lv_vizasapor_hp`, `villn_hp`, `disn_hp`, `provn_hp`, `remark_hp`, `datenow_hp`, `status_hp`, `dateout_hp`, `img_photo`, `user_id`, `created_hp`) VALUES
('1', 'ນ້ອຍ', 1, 1, 4, 'ຊາຍ', 'ໂສດ', '2023-10-24', '2023-10-19', '2023-10-19', '2023-10-19', '2023-10-11', '2023-10-11', '2023-11-01', 2, 1, 1, 'ປເອກ', 'ລາວສູງ', 'ຢຣູ', 'ຊັ້ນສູງ', 'ນາກະສັງ', 'ໂຂງ', 'ນະຄອນຫລວງ2', 'ພັນທະ', '2023-10-15', '1', '0000-00-00', 'img_652b67526b406.jpg', 1, '2023-10-15 04:15:14');

-- --------------------------------------------------------

--
-- Table structure for table `positionlevel`
--

CREATE TABLE `positionlevel` (
  `pl_id` int(11) NOT NULL,
  `pl_name` varchar(200) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `positionlevel`
--

INSERT INTO `positionlevel` (`pl_id`, `pl_name`, `user_id`) VALUES
(1, 'ຊັ້ນ II', 1),
(2, 'ຊັ້ນ I', 1),
(3, 'ສຕ', 1),
(4, 'ສທ', 1),
(5, 'ສອ', 1),
(7, 'ຮຕ', 1),
(9, 'ວທ', 1),
(11, 'ຮທ', 1),
(12, 'ຮອ', 1),
(13, 'ພັຕ', 1),
(14, 'ພັທ', 1),
(15, 'ພັອ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sungkud`
--

CREATE TABLE `sungkud` (
  `sk_id` int(11) NOT NULL,
  `sk_name` varchar(200) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sungkud`
--

INSERT INTO `sungkud` (`sk_id`, `sk_name`, `user_id`) VALUES
(1, 'ສຳນັກງານ', 1),
(2, 'ກອງຮ້ອຍ I', 1),
(3, 'ກອງຮ້ອຍ II', 1),
(4, 'ກອງຮ້ອຍ III', 1),
(5, 'ກອງຮ້ອຍ IV', 0),
(7, 'ພາລາ', 1),
(34, 'ຄອມພິວເຕີ', 1),
(35, 'ໄຟຟ້າ', 1),
(36, 'ເສນາ', 1),
(37, 'ຫົວໜ້າການທະຫານ', 1),
(38, 'ຫົວໜ້າການເມືອງ', 1),
(39, 'ຮອງການທະຫານ', 1),
(40, 'ໝວດປ້ອງກັນ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_district`
--

CREATE TABLE `tb_district` (
  `dt_id` int(5) NOT NULL,
  `dt_name` varchar(200) NOT NULL,
  `pn_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_district`
--

INSERT INTO `tb_district` (`dt_id`, `dt_name`, `pn_id`, `user_id`) VALUES
(1, 'ໄຊທານີ', 1, 1),
(3, 'ນ້ອຍ', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_province`
--

CREATE TABLE `tb_province` (
  `pn_id` int(5) NOT NULL,
  `pn_name` varchar(200) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_province`
--

INSERT INTO `tb_province` (`pn_id`, `pn_name`, `user_id`) VALUES
(1, 'ນະຄອນຫລວງ2', 1),
(3, 'ຈຳປາສັກ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_village`
--

CREATE TABLE `tb_village` (
  `vg_id` int(5) NOT NULL,
  `vg_name` varchar(200) NOT NULL,
  `dt_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_village`
--

INSERT INTO `tb_village` (`vg_id`, `vg_name`, `dt_id`, `user_id`) VALUES
(2, 'ໂນນສະອາດ', 1, 1),
(3, 'hhh', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `in_date` date NOT NULL,
  `ps_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `gender`, `user_name`, `user_pass`, `status`, `tel`, `in_date`, `ps_img`) VALUES
(1, 'ສົມສຸກ3', 'ສຸວັນນະລາດ3', 'ຍິງ', 's', 's', 1, '5454', '0000-00-00', 'img_652b6515c7da1.png'),
(2, 'd ສ.ນ ແສງພູວັນ', 'ສີສະໝຸດ', 'ຊາຍ', 'bue', 'm', 1, '896757', '2023-10-15', 'img_652b61ce7417a.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `duties`
--
ALTER TABLE `duties`
  ADD PRIMARY KEY (`dts_id`);

--
-- Indexes for table `historys_personsall`
--
ALTER TABLE `historys_personsall`
  ADD PRIMARY KEY (`hp_id`);

--
-- Indexes for table `positionlevel`
--
ALTER TABLE `positionlevel`
  ADD PRIMARY KEY (`pl_id`);

--
-- Indexes for table `sungkud`
--
ALTER TABLE `sungkud`
  ADD PRIMARY KEY (`sk_id`);

--
-- Indexes for table `tb_district`
--
ALTER TABLE `tb_district`
  ADD PRIMARY KEY (`dt_id`);

--
-- Indexes for table `tb_province`
--
ALTER TABLE `tb_province`
  ADD PRIMARY KEY (`pn_id`);

--
-- Indexes for table `tb_village`
--
ALTER TABLE `tb_village`
  ADD PRIMARY KEY (`vg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `duties`
--
ALTER TABLE `duties`
  MODIFY `dts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `positionlevel`
--
ALTER TABLE `positionlevel`
  MODIFY `pl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sungkud`
--
ALTER TABLE `sungkud`
  MODIFY `sk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tb_district`
--
ALTER TABLE `tb_district`
  MODIFY `dt_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_province`
--
ALTER TABLE `tb_province`
  MODIFY `pn_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_village`
--
ALTER TABLE `tb_village`
  MODIFY `vg_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

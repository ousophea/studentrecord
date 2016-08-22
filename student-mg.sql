# --------------------------------------------------------
# Host:                         127.0.0.1
# Server version:               5.1.53-community-log
# Server OS:                    Win64
# HeidiSQL version:             6.0.0.3603
# Date/time:                    2013-05-08 10:38:37
# --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

# Dumping database structure for autoselection
DROP DATABASE IF EXISTS `autoselection`;
CREATE DATABASE IF NOT EXISTS `autoselection` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `autoselection`;


# Dumping structure for table autoselection.tbl_classes
DROP TABLE IF EXISTS `tbl_classes`;
CREATE TABLE IF NOT EXISTS `tbl_classes` (
  `cla_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `cla_name` varchar(50) DEFAULT NULL,
  `cla_curicula` varchar(50) DEFAULT NULL,
  `cla_description` varchar(100) DEFAULT NULL,
  `cla_gan_id` int(10) unsigned DEFAULT NULL,
  KEY `cla_id` (`cla_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

# Dumping data for table autoselection.tbl_classes: 4 rows
/*!40000 ALTER TABLE `tbl_classes` DISABLE KEYS */;
INSERT INTO `tbl_classes` (`cla_id`, `cla_name`, `cla_curicula`, `cla_description`, `cla_gan_id`) VALUES
	(4, 'WEP2014_B', '1', 'Web Programing', 2),
	(2, 'WEP2013_B', '1', 'Web Programing', 1),
	(1, 'WEP2013_A', '1', 'Web Programing', 1),
	(3, 'WEP2014_A', '1', 'Web Programing', 2);
/*!40000 ALTER TABLE `tbl_classes` ENABLE KEYS */;


# Dumping structure for table autoselection.tbl_ganeration
DROP TABLE IF EXISTS `tbl_ganeration`;
CREATE TABLE IF NOT EXISTS `tbl_ganeration` (
  `gan_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gan_name` varchar(20) DEFAULT NULL,
  `gan_description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`gan_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

# Dumping data for table autoselection.tbl_ganeration: 3 rows
/*!40000 ALTER TABLE `tbl_ganeration` DISABLE KEYS */;
INSERT INTO `tbl_ganeration` (`gan_id`, `gan_name`, `gan_description`) VALUES
	(1, 'SNA/WEP2012', NULL),
	(2, 'SNA/WEP2013', NULL),
	(3, 'SNA/WEP2014', NULL);
/*!40000 ALTER TABLE `tbl_ganeration` ENABLE KEYS */;


# Dumping structure for table autoselection.tbl_students
DROP TABLE IF EXISTS `tbl_students`;
CREATE TABLE IF NOT EXISTS `tbl_students` (
  `stu_id` tinyint(10) unsigned NOT NULL AUTO_INCREMENT,
  `stu_first_name` varchar(50) DEFAULT NULL,
  `stu_last_name` varchar(50) DEFAULT NULL,
  `stu_kh_name` text,
  `stu_card_id` varchar(20) DEFAULT NULL,
  `stu_sex` char(1) DEFAULT NULL,
  `stu_address` varchar(200) DEFAULT NULL,
  `stu_dob` date DEFAULT NULL,
  `stu_photo` varchar(50) DEFAULT NULL,
  `stu_cla_id` int(5) unsigned DEFAULT NULL,
  KEY `stu_id` (`stu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=227 DEFAULT CHARSET=latin1;

# Dumping data for table autoselection.tbl_students: 99 rows
/*!40000 ALTER TABLE `tbl_students` DISABLE KEYS */;
INSERT INTO `tbl_students` (`stu_id`, `stu_first_name`, `stu_last_name`, `stu_kh_name`, `stu_card_id`, `stu_sex`, `stu_address`, `stu_dob`, `stu_photo`, `stu_cla_id`) VALUES
	(1, 'chem', 'sokea', '???   ????', 'PNC2013_002', 'F', '', '0000-00-00', 'chem_sokea.png', 1),
	(2, 'chet', 'sreynak', '???   ????????', 'PNC2013_003', 'F', '', '0000-00-00', 'chet_sreynak.png', 1),
	(3, 'chhum', 'sina', '???     ?????', 'PNC2013_008', 'M', '', '0000-00-00', 'chhum_sina.png', 1),
	(4, 'chun', 'dany', '???   ????', 'PNC2013_013', 'M', '', '0000-00-00', 'chun_dany.png', 1),
	(5, 'hem', 'chhingchhing', '???   ??????', 'PNC2013_017', 'F', '', '0000-00-00', 'hem_chhingchhing.png', 1),
	(6, 'hoem', 'sodaly', '????   ??????', 'PNC2013_020', 'F', '', '0000-00-00', 'hoem_sodaly.png', 1),
	(7, 'keo', 'vicheka', '???   ????????', 'PNC2013_023', 'F', '', '0000-00-00', 'keo_vicheka.png', 1),
	(8, 'lann', 'solak', '????   ???????', 'PNC2013_032', 'M', '', '0000-00-00', 'lann_solak.png', 1),
	(9, 'oum', 'thavy', '????   ????', 'PNC2013_045', 'F', '', '0000-00-00', 'oum_thavy.png', 1),
	(10, 'pen', 'thida', '????   ????', 'PNC2013_048', 'F', '', '0000-00-00', 'pen_thida.png', 1),
	(11, 'phan', 'saorin', '???  ?????', 'PNC2013_050', 'F', '', '0000-00-00', 'phan_saorin.png', 1),
	(12, 'phou', 'sophorn', '??  ???????', 'PNC2013_053', 'M', '', '0000-00-00', 'phou_sophorn.png', 1),
	(13, 'piv', 'thavry', '???   ?????', 'PNC2013_054', 'F', '', '0000-00-00', 'piv_thavry.png', 1),
	(14, 'pom', 'ratanak', '???   ????', 'PNC2013_057', 'M', '', '0000-00-00', 'pom_ratanak.png', 1),
	(15, 'pov', 'rina', '??   ????', 'PNC2013_059', 'F', '', '0000-00-00', 'pov_rina.png', 1),
	(16, 'rauen', 'sambo', '????   ?????', 'PNC2013_063', 'F', '', '0000-00-00', 'rauen_sambo.png', 1),
	(17, 'san', 'kimson', '???   ???????', 'PNC2013_065', 'M', '', '0000-00-00', 'san_kimson.png', 1),
	(18, 'sat', 'sokry', '???  ?????', 'PNC2013_067', 'F', '', '0000-00-00', 'sat_sokry.png', 1),
	(19, 'sat', 'thary', '???   ????', 'PNC2013_068', 'M', '', '0000-00-00', 'sat_thary.png', 1),
	(20, 'sea', 'sothea', '???   ????', 'PNC2013_070', 'F', '', '0000-00-00', 'sea_sothea.png', 1),
	(21, 'sie', 'sokun', '??  ?????', 'PNC2013_073', 'F', '', '0000-00-00', 'sie_sokun.png', 1),
	(22, 'sim', 'sokeara', '????   ???????', 'PNC2013_074', 'M', '', '0000-00-00', 'sim_sokeara.png', 1),
	(23, 'sok', 'sreychen', '???   ???????', 'PNC2013_079', 'F', '', '0000-00-00', 'sok_sreychen.png', 1),
	(24, 'vann', 'chivorn', '?????  ??????', 'PNC2013_097', 'M', '', '0000-00-00', 'vann_chivorn.png', 1),
	(25, 'yeen', 'pisith', '???   ???????', 'PNC2013_100', 'M', '', '0000-00-00', 'yeen_pisith.png', 1),
	(152, 'CHAN ', ' Palleak', '?? ???????', 'PNC2014_004', 'F', '', '0000-00-00', 'chan_palleak.jpg', 4),
	(136, 'SRENG', 'Khorn', '????? ??', 'PNC2014_078', 'M', '', '0000-00-00', 'sreng_khorn.jpg', 3),
	(135, 'SONG', 'Savoeun', '??? ?????', 'PNC2014_076', 'F', '', '0000-00-00', 'song_savoeun.jpg', 3),
	(134, 'SMAI', 'Muth', '???? ???', 'PNC2014_073', 'M', '', '0000-00-00', 'smai_muth.jpg', 3),
	(133, 'RUMSAY', 'Raksmey', '?????  ?????', 'PNC2014_066', 'F', '', '0000-00-00', 'rumsay_raksmey.jpg', 3),
	(132, 'RIN', 'Theary', '??? ????', 'PNC2014_063', 'F', '', '0000-00-00', 'rin_theary.jpg', 3),
	(131, 'PEN', 'Srem', '???? ??????', 'PNC2014_056', 'F', '', '0000-00-00', 'pen_srem.jpg', 3),
	(130, 'NOEM', 'Sreyoun', '??? ???????', 'PNC2014_052', 'F', '', '0000-00-00', 'noem_sreyoun.jpg', 3),
	(129, 'MEN', 'Pachak', '???? ?????', 'PNC2014_045', 'M', '', '0000-00-00', 'men_pachak.jpg', 3),
	(128, 'MEAS', 'Sreylak', '??? ?????????', 'PNC2014_044', 'F', '', '0000-00-00', 'meas_sreylak.jpg', 3),
	(127, 'MAO', 'Rith', '??? ???', 'PNC2014_043', 'F', '', '0000-00-00', 'mao_rith.jpg', 3),
	(126, 'LY', 'Sokla', '??  ?????', 'PNC2014_039', 'F', '', '0000-00-00', 'ly_sokla.jpg', 3),
	(125, 'LOK', 'Puth Terika', '?? ???????????', 'PNC2014_038', 'F', '', '0000-00-00', 'lok_puth terika.jpg', 3),
	(124, 'KONG', 'Kunthea', '??? ?????', 'PNC2014_036', 'F', '', '0000-00-00', 'kong_kunthea.jpg', 3),
	(123, 'KHOEURN', 'Rotha', '??? ?????', 'PNC2014_032', 'F', '', '0000-00-00', 'khoeurn_rotha.jpg', 3),
	(122, 'KEO', 'Nika', '??? ????', 'PNC2014_031', 'F', '', '0000-00-00', 'keo_nika.jpg', 3),
	(121, 'HEM ', 'Sotheam', '??? ?????', 'PNC2014_026', 'F', '', '0000-00-00', 'hem_sotheam.jpg', 3),
	(120, 'EM', 'Phalla', '?? ?????', 'PNC2014_023', 'F', '', '0000-00-00', 'em_phalla.jpg', 3),
	(119, 'DIM', 'Bunthoeun', '??? ???????', 'PNC2014_020', 'M', '', '0000-00-00', 'dim_bunthoeun.jpg', 3),
	(118, 'CHHUO', 'Kea Nimol', '??? ??????', 'PNC2014_016', 'F', '', '0000-00-00', 'chhuo_kea nimol.jpg', 3),
	(116, 'CHEA', 'Vichet', '?? ???????', 'PNC2014_009', 'M', '', '0000-00-00', 'chea_vichet.jpg', 3),
	(117, 'CHHEAN', 'Samphors', '??? ???????', 'PNC2014_014', 'M', '', '0000-00-00', 'chhean_samphos.jpg', 3),
	(137, 'THORNG ', 'Chenda', '?? ??????', 'PNC2014_088', 'F', '', '0000-00-00', 'thorng _chenda.jpg', 3),
	(138, 'TIN ', 'Srong', '??? ?????', 'PNC2014_089', 'M', '', '0000-00-00', 'tin_srong.jpg', 3),
	(139, 'VAD ', 'Aoukdom', '??? ?????', 'PNC2014_093', 'M', '', '0000-00-00', 'vad_aoukdom.jpg', 3),
	(140, 'YANN ', 'Chomno', '????? ????', 'PNC2014_098', 'M', '', '0000-00-00', 'yann_chomnor.jpg', 3),
	(154, 'CHANN ', 'Soakphivath', '????? ????????????', 'PNC2014_008', 'M', '', '0000-00-00', 'chann_soakphivath.jpg', 4),
	(153, 'CHAN ', ' Vanneth', '???? ????????', 'PNC2014_007', 'F', '', '0000-00-00', 'chan_vanneth.jpg', 4),
	(155, 'CHEAP ', ' Sok Kagna', '??? ??????????', 'PNC2014_010', 'F', '', '0000-00-00', 'cheap_sokkagna.jpg', 4),
	(156, 'DARA ', ' Rithy', '????? ??????', 'PNC2014_019', 'M', '', '0000-00-00', 'dara_rithy.jpg', 4),
	(157, 'DIN ', ' Sothavy', '??? ??????', 'PNC2014_021', 'F', '', '0000-00-00', 'din_sothavy.jpg', 4),
	(158, 'HEL ', ' Srey Et', '??? ???? ???', 'PNC2014_025', 'F', '', '0000-00-00', 'hel_sreyet.jpg', 4),
	(159, 'HING ', ' Sokneng', '???? ??????', 'PNC2014_028', 'M', '', '0000-00-00', 'hing_sokneng.jpg', 4),
	(160, 'HORN ', ' Sokunthea', '??? ???????', 'PNC2014_029', 'F', '', '0000-00-00', 'horn_sokunthea.jpg', 4),
	(161, 'LY', 'Sovann Borey', '??  ??????????', 'PNC2014_040', 'F', '', '0000-00-00', 'ly_sovannborey.jpg', 4),
	(162, 'MICH', ' Uch', '??? ????', 'PNC2014_047', 'F', '', '0000-00-00', 'mich_uch.jpg', 4),
	(163, 'MAO ', 'Vannakpanha', '??? ?????????', 'PNC2014_049', 'M', '', '0000-00-00', 'mao_vannakpanha.jpg', 4),
	(164, 'NORN ', ' Sreyleak', '??? ?????????', 'PNC2014_053', 'F', '', '0000-00-00', 'norn_sreyleak.jpg', 4),
	(165, 'PEN ', ' Cheadarith', '???? ?????????', 'PNC2014_055', 'M', '', '0000-00-00', 'pen_cheadarith.jpg', 4),
	(166, 'SAO ', ' Vet ', '?? ???', 'PNC2014_067', 'M', '', '0000-00-00', 'sao_vet.jpg', 4),
	(167, 'SE ', ' Reaksmey', '?? ?????', 'PNC2014_069', 'M', '', '0000-00-00', 'se_reaksmey.jpg', 4),
	(168, 'SEM ', ' Sokann', '??? ??????', 'PNC2014_070', 'F', '', '0000-00-00', 'sem_sokann.jpg', 4),
	(169, 'SIN ', ' Naisim', '???? ??????', 'PNC2014_072', 'F', '', '0000-00-00', 'sin_naisim.jpg', 4),
	(170, 'SOEURN ', ' Sida', '??? ?????', 'PNC2014_075', 'F', '', '0000-00-00', 'soeurn_sida.jpg', 4),
	(171, 'SRENG ', ' Kimhoun', '????? ???????', 'PNC2014_079', 'F', '', '0000-00-00', 'sreng_kimhoun.jpg', 4),
	(172, 'SUM', ' Yeang', '???? ???', 'PNC2014_082', 'F', '', '0000-00-00', 'sum_yeang.jpg', 4),
	(173, 'TEM ', ' Toeurng', '??? ???', 'PNC2014_084', 'M', '', '0000-00-00', 'tem_toeurng.jpg', 4),
	(174, 'THEANG', ' Vikay', '??? ?????', 'PNC2014_086', 'F', '', '0000-00-00', 'theang_vikay.jpg', 4),
	(175, 'VA ', ' Hong', '??? ???', 'PNC2014_092', 'M', '', '0000-00-00', 'va_hong.jpg', 4),
	(176, 'Y ', 'Vanheing', '??? ???????', 'PNC2014_096', 'M', '', '0000-00-00', 'y_vanheing.jpg', 4),
	(222, 'SUM', 'Soknoeurn', '????   ??????', 'PNC2013_085', 'F', '', '0000-00-00', 'sum_soknoeurn.jpg', 2),
	(220, 'SEAN ', 'Sen', '????  ???', 'PNC2013_071', 'M', '', '0000-00-00', 'sean _sen.jpg', 2),
	(219, 'SAY', 'Sokna', '???    ?????', 'PNC2013_069', 'F', '', '0000-00-00', 'say_sokna.jpg', 2),
	(218, 'PRON', 'pha', '????    ??', 'PNC2013_061', 'M', '', '0000-00-00', 'pron_pha.jpg', 2),
	(217, 'POY', 'Sithon', '???    ??????', 'PNC2013_060', 'F', '', '0000-00-00', 'poy_sithon.jpg', 2),
	(216, 'PON', 'Lyhong', '????    ?????', 'PNC2013_058', 'M', '', '0000-00-00', 'pon_lyhong.jpg', 2),
	(215, 'OUM', ' Sokleng', '????    ??????', 'PNC2013_046', 'F', '', '0000-00-00', 'oum_ sokleng.jpg', 2),
	(214, 'NY', 'Sreypao', '??    ??????', 'PNC2013_044', 'F', '', '0000-00-00', 'ny_sreypao.jpg', 2),
	(213, 'MAO', 'Meyleang', '???    ??????', 'PNC2013_038', 'F', '', '0000-00-00', 'mao_meyleang.jpg', 2),
	(212, 'MAO', 'Chanthorn', '???   ??????', 'PNC2013_037', 'F', '', '0000-00-00', 'mao_chanthorn.jpg', 2),
	(211, 'MAO', 'Neariday', '???    ?????', 'PNC2013_036', 'F', '', '0000-00-00', 'mao_neariday.jpg', 2),
	(210, 'LOY', 'Prathna', '??   ????????', 'PNC2013_035', 'M', '', '0000-00-00', 'loy_prathna.jpg', 2),
	(209, 'LOUER', 'Chaiya', '??    ?????', 'PNC2013_034', 'F', '', '0000-00-00', 'louer_chaiya.jpg', 2),
	(208, 'LANH', 'Gachseang', '????    ????????', 'PNC2013_031', 'F', '', '0000-00-00', 'lanh_gachseang.jpg', 2),
	(207, 'KIM', ' Cheth', '???    ?????', 'PNC2013_029', 'M', '', '0000-00-00', 'kim_ cheth.jpg', 2),
	(206, 'KHONG', 'Sothorn', '???   ????', 'PNC2013_027', 'M', '', '0000-00-00', 'khong_sothorn.jpg', 2),
	(205, 'HONG', 'Youlay', '????    ?????', 'PNC2013_021', 'M', '', '0000-00-00', 'hong_youlay.jpg', 2),
	(204, 'CHOEUNG', 'Chantra', '???    ???????', 'PNC2013_010', 'F', '', '0000-00-00', 'choeung_chantra.jpg', 2),
	(203, 'CHIN ', 'Sona', '???    ????', 'PNC2013_009', 'F', '', '0000-00-00', 'chin _sona.jpg', 2),
	(202, 'BUN', 'Phea', '????    ??', 'PNC2013_001', 'M', '', '0000-00-00', 'bun_phea.jpg', 2),
	(223, 'THIENG', 'Srey Roth', '???    ?????????', 'PNC2013_088', 'F', '', '0000-00-00', 'thieng_srey roth.jpg', 2),
	(224, 'THORN', 'Visal', '??   ?????', 'PNC2013_076', 'M', '', '0000-00-00', 'thorn_visal.jpg', 2),
	(225, 'Tom', 'Sokhak', '??? ????  ??? ????', 'PNC2013_094', 'M', '', '0000-00-00', 'tom_sokhak.jpg', 2),
	(226, 'TY', 'Votey', '??    ?????', 'PNC2013_095', 'F', '', '0000-00-00', 'ty_votey.jpg', 2);
/*!40000 ALTER TABLE `tbl_students` ENABLE KEYS */;


# Dumping structure for table autoselection.tbl_teachers
DROP TABLE IF EXISTS `tbl_teachers`;
CREATE TABLE IF NOT EXISTS `tbl_teachers` (
  `tea_id` int(10) NOT NULL DEFAULT '0',
  `tea_name` varchar(50) DEFAULT '0',
  `tea_password` varchar(50) DEFAULT '0',
  PRIMARY KEY (`tea_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# Dumping data for table autoselection.tbl_teachers: 0 rows
/*!40000 ALTER TABLE `tbl_teachers` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_teachers` ENABLE KEYS */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

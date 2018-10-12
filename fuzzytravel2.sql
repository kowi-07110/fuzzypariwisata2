/*
Navicat MySQL Data Transfer

Source Server         : MYSQL
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : fuzzytravel2

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-02-19 16:18:44
*/
DROP DATABASE IF EXISTS `fuzzytravel2`;
CREATE DATABASE IF NOT EXISTS `fuzzytravel2` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `fuzzytravel2`;

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `akomodasi`
-- ----------------------------
DROP TABLE IF EXISTS `akomodasi`;
CREATE TABLE `akomodasi` (
  `id_akomodasi` int(11) NOT NULL AUTO_INCREMENT,
  `id_kamar` int(11) DEFAULT NULL,
  `id_bintang` int(11) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `kota` varchar(100) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `fasilitas` text,
  `keterangan` text,
  `datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id_akomodasi`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of akomodasi
-- ----------------------------
INSERT INTO akomodasi VALUES ('2', '1', '2', 'Akomodasi 1', '1231', '123', '123', '123', '123', '123', '2015-02-12 17:02:44');
INSERT INTO akomodasi VALUES ('3', '1', '1', 'Akomodasi 2', 'asd', 'zxc', 'qwe', '123', 'dfg', 'dv', '2015-02-13 05:02:23');
INSERT INTO akomodasi VALUES ('4', '2', '3', 'Spesial 5', 'Batu', 'alamat', 'kota', 'telp', 'lux', 'all in', '2015-02-18 04:02:16');
INSERT INTO akomodasi VALUES ('5', '2', '2', 'Bintang 4 Spesial', 'Batu', 'alamat', 'kota', 'telp', 'fasilitas', 'keterangan', '2015-02-18 04:02:55');

-- ----------------------------
-- Table structure for `files`
-- ----------------------------
DROP TABLE IF EXISTS `files`;
CREATE TABLE `files` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `id_obyek` int(11) DEFAULT NULL,
  `id_paket` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of files
-- ----------------------------
INSERT INTO files VALUES ('14', 'WebGis-Sample.jpg', '216832', 'image/jpeg', null, 'qwe', 'qwe', '3', '0');
INSERT INTO files VALUES ('15', 'Struktur_Ruang_2030.jpg', '85230', 'image/jpeg', null, 'wr', 'wer', '3', '0');
INSERT INTO files VALUES ('16', 'WebGis-Sample (1).jpg', '216832', 'image/jpeg', null, 'ret', 'ert', '4', '0');
INSERT INTO files VALUES ('17', 'High_res_leaf_texture_by_hhh316.jpg', '423543', 'image/jpeg', null, 'er', 'tr', '4', '0');
INSERT INTO files VALUES ('20', 'html2wordpress-part4.jpg', '78149', 'image/jpeg', null, 'df', 'sdf', '2', '0');
INSERT INTO files VALUES ('21', '\'SPK PPDB - Fuzzy Hibrid\' - localhost_fuzzyhibrid2_standard_gap_php.jpg', '55037', 'image/jpeg', null, 'wer', 'wer', '3', '0');
INSERT INTO files VALUES ('22', 'Yahoo-Original-vs-Wirify-wireframe.jpg', '150736', 'image/jpeg', null, 'weqw', 'qweqwe', '3', '0');
INSERT INTO files VALUES ('23', 'wordpress-instalasi.png', '40091', 'image/png', null, 'instalasi', 'wordpress', '3', '0');

-- ----------------------------
-- Table structure for `jenis`
-- ----------------------------
DROP TABLE IF EXISTS `jenis`;
CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jenis
-- ----------------------------
INSERT INTO jenis VALUES ('1', 'Wisata Alam', '2015-02-18 10:02:55');
INSERT INTO jenis VALUES ('2', 'Wisata Belanja', null);
INSERT INTO jenis VALUES ('3', 'Wisata Kuliner', null);
INSERT INTO jenis VALUES ('4', 'Wisata Religi', null);
INSERT INTO jenis VALUES ('5', 'Wisata Rekreasi', null);
INSERT INTO jenis VALUES ('6', 'Wisata Edukasi', null);
INSERT INTO jenis VALUES ('7', 'Wisata Budaya', null);
INSERT INTO jenis VALUES ('8', 'Wisata Sejarah', null);
INSERT INTO jenis VALUES ('9', 'Outbound/Game', null);

-- ----------------------------
-- Table structure for `obyek_wisata`
-- ----------------------------
DROP TABLE IF EXISTS `obyek_wisata`;
CREATE TABLE `obyek_wisata` (
  `id_obyek` int(11) NOT NULL AUTO_INCREMENT,
  `id_jenis` int(11) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `kota` varchar(100) DEFAULT NULL,
  `keterangan` text,
  `fasilitas` text,
  `tiket_regular` varchar(12) DEFAULT NULL,
  `tiket_weekend` varchar(12) DEFAULT NULL,
  `visitor` int(11) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id_obyek`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of obyek_wisata
-- ----------------------------
INSERT INTO obyek_wisata VALUES ('1', '2', 'wisata1', null, null, null, null, null, null, null, '100000', null);
INSERT INTO obyek_wisata VALUES ('2', '3', 'wisata 2', null, null, null, null, null, null, null, '5000', null);
INSERT INTO obyek_wisata VALUES ('3', '4', 'wisata 3', 'alamat', 'lokasi', '234', 'keterangan234', '234', '234', '234', '5000', '2015-02-18 08:02:40');
INSERT INTO obyek_wisata VALUES ('4', '5', 'wisata 4', null, null, null, null, null, null, null, '4000', null);

-- ----------------------------
-- Table structure for `paket`
-- ----------------------------
DROP TABLE IF EXISTS `paket`;
CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL AUTO_INCREMENT,
  `id_obyek` int(11) DEFAULT NULL,
  `nama` varchar(200) NOT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `keterangan` text,
  `include` varchar(100) DEFAULT NULL,
  `exclude` varchar(100) DEFAULT NULL,
  `durasi_hari` tinyint(4) DEFAULT NULL,
  `durasi_malam` tinyint(4) DEFAULT NULL,
  `durasi_jam` float DEFAULT NULL,
  `id_transport` int(11) DEFAULT NULL,
  `id_akomodasi` int(11) DEFAULT NULL,
  `price_person` float DEFAULT NULL,
  `price_group` float DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id_paket`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of paket
-- ----------------------------
INSERT INTO paket VALUES ('5', '3', 'paket 1', 'dua', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labor', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labor', '0', '1', '0', '2', '2', '500000', '10000', '2015-02-12 08:02:44');
INSERT INTO paket VALUES ('6', '4', 'Paket 2', 'dua', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'masuk', 'masak', '1', '0', '0', '5', '3', '600000', '10000', '2015-02-18 04:02:31');
INSERT INTO paket VALUES ('7', '1', 'Paket 3', 'dua', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labor', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labor', '1', '1', '0', '2', '2', '550000', '10000', '2015-02-12 17:02:07');
INSERT INTO paket VALUES ('8', '4', 'Paket 4', 'dua', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'masuk', 'masak', '1', '2', '0', '4', '5', '1500000', '10000', '2015-02-18 04:02:41');
INSERT INTO paket VALUES ('9', '2', 'Paket 5', '234', '2342', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labor', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labor', '1', '2', '0', '1', '2', '750000', '234', '2015-02-13 04:02:46');
INSERT INTO paket VALUES ('10', '1', 'Paket 6', '234', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labor', '234', '2', '1', '0', '3', '4', '1000000', '234', '2015-02-13 04:02:30');
INSERT INTO paket VALUES ('11', '3', 'Paket 7', 'Lokasi 7', 'sdf', 'sdf', 'sdf', '3', '3', '0', '4', '2', '650000', '234', '2015-02-18 04:02:21');
INSERT INTO paket VALUES ('12', '4', 'Paket 8', 'Lokasi 8', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Include 8', 'Exclude 8', '3', '2', '0', '5', '2', '2500000', '0', '2015-02-18 00:02:33');
INSERT INTO paket VALUES ('13', '2', 'Paket 9', 'Lokasi 9', 'Keterangan', '', '', '2', '3', '0', '1', '3', '2700000', '0', '2015-02-18 00:02:02');

-- ----------------------------
-- Table structure for `pesan`
-- ----------------------------
DROP TABLE IF EXISTS `pesan`;
CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL AUTO_INCREMENT,
  `id_wisata` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `ktp` varchar(25) DEFAULT NULL,
  `telp` varchar(12) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `status` enum('Pesan','Konfirmasi','Lunas','Konfirmasi Pembayaran','Selesai') DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id_pesan`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pesan
-- ----------------------------
INSERT INTO pesan VALUES ('2', '0', '0', '', '', '', '', '0000-00-00', 'Pesan', '2015-02-19 03:02:01');
INSERT INTO pesan VALUES ('3', '0', '0', '', '', '', '', '0000-00-00', 'Pesan', '2015-02-19 03:02:03');
INSERT INTO pesan VALUES ('4', '0', '0', '', '', '', '', '0000-00-00', '', '2015-02-19 03:02:06');
INSERT INTO pesan VALUES ('5', '11', '5', 'nama pesan', 'alamat pesan', 'ktp pesan', 'telp', '0000-00-00', 'Pesan', '2015-02-19 03:02:41');
INSERT INTO pesan VALUES ('6', '0', '0', '', '', '', '', '0000-00-00', '', '2015-02-19 03:02:42');
INSERT INTO pesan VALUES ('7', '0', '0', '', '', '', '', '0000-00-00', '', '2015-02-19 03:02:59');
INSERT INTO pesan VALUES ('8', '12', '8', 'AngkasaLuas', 'asdasd', 'asd', '123', '0000-00-00', '', '2015-02-19 03:02:41');
INSERT INTO pesan VALUES ('9', '14', '6', 'Nama Pemesan', 'Alamat', 'KTP', 'Telp', '0000-00-00', 'Pesan', '2015-02-19 04:02:49');
INSERT INTO pesan VALUES ('10', '11', '6', 'luxio', 'amsdlamsd;lamsd', '23409', '0838821231', '0000-00-00', 'Pesan', '2015-02-19 04:02:28');

-- ----------------------------
-- Table structure for `rules`
-- ----------------------------
DROP TABLE IF EXISTS `rules`;
CREATE TABLE `rules` (
  `rule_id` int(11) NOT NULL AUTO_INCREMENT,
  `rulename` varchar(50) NOT NULL DEFAULT '0',
  `budget` varchar(50) NOT NULL DEFAULT '0',
  `durasi` varchar(50) NOT NULL DEFAULT '0',
  `visitor` varchar(100) NOT NULL DEFAULT '0',
  `fuzzy_output` varchar(100) NOT NULL DEFAULT '0',
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`rule_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of rules
-- ----------------------------
INSERT INTO rules VALUES ('1', 'R1', 'Sedikit', 'Pendek', 'Sepi', 'Tidak Mungkin', '2015-02-13 21:00:39');
INSERT INTO rules VALUES ('2', 'R2', 'Sedikit', 'Pendek', 'Sedang', 'Kurang Mungkin', '2015-02-13 21:00:56');
INSERT INTO rules VALUES ('3', 'R3', 'Sedikit', 'Pendek', 'Rame', 'Memungkinkan', '2015-02-13 21:01:07');
INSERT INTO rules VALUES ('4', 'R4', 'Sedikit', 'Sedang', 'Sepi', 'Tidak Mungkin', '2015-02-13 21:00:39');
INSERT INTO rules VALUES ('5', 'R5', 'Sedikit', 'Sedang', 'Sedang', 'Kurang Mungkin', '2015-02-13 21:00:56');
INSERT INTO rules VALUES ('6', 'R6', 'Sedikit', 'Sedang', 'Rame', 'Memungkinkan', '2015-02-13 21:01:07');
INSERT INTO rules VALUES ('7', 'R7', 'Sedikit', 'Panjang', 'Sepi', 'Tidak Mungkin', '2015-02-13 21:00:39');
INSERT INTO rules VALUES ('8', 'R8', 'Sedikit', 'Panjang', 'Sedang', 'Kurang Mungkin', '2015-02-13 21:00:56');
INSERT INTO rules VALUES ('9', 'R9', 'Sedikit', 'Panjang', 'Rame', 'Memungkinkan', '2015-02-13 21:01:07');
INSERT INTO rules VALUES ('10', 'R10', 'Sedang', 'Pendek', 'Sepi', 'Tidak Mungkin', '2015-02-13 21:00:39');
INSERT INTO rules VALUES ('11', 'R11', 'Sedang', 'Pendek', 'Sedang', 'Kurang Mungkin', '2015-02-13 21:00:56');
INSERT INTO rules VALUES ('12', 'R12', 'Sedang', 'Pendek', 'Rame', 'Memungkinkan', '2015-02-13 21:01:07');
INSERT INTO rules VALUES ('13', 'R13', 'Sedang', 'Sedang', 'Sepi', 'Tidak Mungkin', '2015-02-13 21:00:39');
INSERT INTO rules VALUES ('14', 'R14', 'Sedang', 'Sedang', 'Sedang', 'Kurang Mungkin', '2015-02-13 21:00:56');
INSERT INTO rules VALUES ('15', 'R15', 'Sedang', 'Sedang', 'Rame', 'Memungkinkan', '2015-02-13 21:01:07');
INSERT INTO rules VALUES ('16', 'R16', 'Sedang', 'Panjang', 'Sepi', 'Tidak Mungkin', '2015-02-13 21:00:39');
INSERT INTO rules VALUES ('17', 'R17', 'Sedang', 'Panjang', 'Sedang', 'Kurang Mungkin', '2015-02-13 21:00:56');
INSERT INTO rules VALUES ('18', 'R18', 'Sedang', 'Panjang', 'Rame', 'Memungkinkan', '2015-02-13 21:01:07');
INSERT INTO rules VALUES ('19', 'R19', 'Banyak', 'Pendek', 'Sepi', 'Tidak Mungkin', '2015-02-13 21:00:39');
INSERT INTO rules VALUES ('20', 'R20', 'Banyak', 'Pendek', 'Sedang', 'Kurang Mungkin', '2015-02-13 21:00:56');
INSERT INTO rules VALUES ('21', 'R21', 'Banyak', 'Pendek', 'Rame', 'Memungkinkan', '2015-02-13 21:01:07');
INSERT INTO rules VALUES ('22', 'R22', 'Banyak', 'Sedang', 'Sepi', 'Memungkinkan', '2015-02-18 11:15:44');
INSERT INTO rules VALUES ('23', 'R23', 'Banyak', 'Sedang', 'Sedang', 'Memungkinkan', '2015-02-18 11:15:13');
INSERT INTO rules VALUES ('24', 'R24', 'Banyak', 'Sedang', 'Rame', 'Memungkinkan', '2015-02-13 21:01:07');
INSERT INTO rules VALUES ('25', 'R25', 'Banyak', 'Panjang', 'Sepi', 'Memungkinkan', '2015-02-18 00:02:36');
INSERT INTO rules VALUES ('26', 'R26', 'Banyak', 'Panjang', 'Sedang', 'Memungkinkan', '2015-02-18 00:02:55');
INSERT INTO rules VALUES ('27', 'R27', 'Banyak', 'Panjang', 'Rame', 'Memungkinkan', '2015-02-18 20:53:39');

-- ----------------------------
-- Table structure for `transport`
-- ----------------------------
DROP TABLE IF EXISTS `transport`;
CREATE TABLE `transport` (
  `id_transport` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipe` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `max` varchar(10) DEFAULT NULL,
  `is_ac` enum('1','0') DEFAULT NULL,
  `is_recleaning` enum('1','0') DEFAULT NULL,
  `is_mineral` enum('1','0') DEFAULT NULL,
  `is_hiburan` enum('1','0') DEFAULT NULL,
  `is_bbm` enum('1','0') DEFAULT NULL,
  `is_driver` enum('1','0') DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id_transport`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of transport
-- ----------------------------
INSERT INTO transport VALUES ('1', '0', 'Avanza', '7', '1', '0', '0', '1', '1', '1', '2015-02-12 04:02:33');
INSERT INTO transport VALUES ('2', '0', 'Xenia', '7', '1', '0', '1', '1', '0', '1', '2015-02-18 04:02:41');
INSERT INTO transport VALUES ('3', '2', 'Bus', '59', '1', '0', '1', '0', '1', '0', '2015-02-12 04:02:44');
INSERT INTO transport VALUES ('4', '0', 'Avanza', '3', '1', '1', '1', '1', '1', '1', '2015-02-18 04:02:05');
INSERT INTO transport VALUES ('5', '0', 'Luxio', '5', '1', '1', '1', '1', '1', '1', '2015-02-18 04:02:53');
INSERT INTO transport VALUES ('6', '0', 'Rush', '3', '1', '1', '1', '1', '1', '1', '2015-02-18 04:02:19');
INSERT INTO transport VALUES ('7', '0', 'Pajero', '2', '1', '1', '1', '1', '1', '1', '2015-02-18 04:02:30');

-- ----------------------------
-- Table structure for `wisata`
-- ----------------------------
DROP TABLE IF EXISTS `wisata`;
CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL AUTO_INCREMENT,
  `id_paket` int(11) NOT NULL,
  `budget` float NOT NULL,
  `waktu` float NOT NULL,
  `visitor` float NOT NULL,
  `datetime` datetime DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_wisata`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of wisata
-- ----------------------------
INSERT INTO wisata VALUES ('1', '0', '40000', '12', '100', '2015-02-18 15:02:32', null);
INSERT INTO wisata VALUES ('2', '0', '40000', '12', '100', '2015-02-18 15:02:40', null);
INSERT INTO wisata VALUES ('3', '0', '5000', '12', '4000', '2015-02-18 15:02:43', null);
INSERT INTO wisata VALUES ('4', '0', '6000', '12', '1000', '2015-02-18 15:02:08', null);
INSERT INTO wisata VALUES ('5', '0', '40000', '12', '10000', '2015-02-18 15:02:42', null);
INSERT INTO wisata VALUES ('6', '0', '40000', '12', '1000', '2015-02-18 23:02:22', null);
INSERT INTO wisata VALUES ('7', '0', '1000000', '12', '100', '2015-02-18 23:02:24', null);
INSERT INTO wisata VALUES ('8', '0', '400000', '36', '10000', '2015-02-18 23:02:54', null);
INSERT INTO wisata VALUES ('9', '0', '0', '0', '0', '2015-02-18 23:02:48', null);
INSERT INTO wisata VALUES ('10', '0', '500000', '12', '5000', '2015-02-19 00:02:06', null);
INSERT INTO wisata VALUES ('11', '0', '40000', '12', '5000', '2015-02-19 00:02:26', null);
INSERT INTO wisata VALUES ('12', '0', '1500000', '12', '10000', '2015-02-19 03:02:31', null);
INSERT INTO wisata VALUES ('13', '0', '100000', '12', '1000', '2015-02-19 04:02:08', null);
INSERT INTO wisata VALUES ('14', '0', '1250000', '12', '1000', '2015-02-19 04:02:22', null);

-- ----------------------------
-- View structure for `01-1-view-transport`
-- ----------------------------
DROP VIEW IF EXISTS `01-1-view-transport`;
CREATE VIEW `01-1-view-transport` AS select `a`.`id_transport` AS `id_transport`,`a`.`nama` AS `nama`,`a`.`max` AS `max`,`a`.`is_ac` AS `is_ac`,`a`.`is_recleaning` AS `is_recleaning`,`a`.`is_mineral` AS `is_mineral`,`a`.`is_hiburan` AS `is_hiburan`,`a`.`is_bbm` AS `is_bbm`,`a`.`is_driver` AS `is_driver` from `transport` `a`;

-- ----------------------------
-- View structure for `01-2-view-akomodasi`
-- ----------------------------
DROP VIEW IF EXISTS `01-2-view-akomodasi`;
CREATE VIEW `01-2-view-akomodasi` AS select `a`.`id_akomodasi` AS `id_akomodasi`,`a`.`id_kamar` AS `id_kamar`,`a`.`id_bintang` AS `id_bintang`,`a`.`nama` AS `nama`,if((`a`.`id_kamar` = 1),'Standard Room','Suite Room') AS `kamar`,if((`a`.`id_bintang` = 1),'Bintang 3',if((`a`.`id_bintang` = 2),'Bintang 4','Bintang 5')) AS `bintang`,`a`.`lokasi` AS `lokasi`,`a`.`alamat` AS `alamat`,`a`.`kota` AS `kota`,`a`.`telp` AS `telp`,`a`.`fasilitas` AS `fasilitas`,`a`.`keterangan` AS `keterangan` from `akomodasi` `a`;

-- ----------------------------
-- View structure for `01-3-view-jenis`
-- ----------------------------
DROP VIEW IF EXISTS `01-3-view-jenis`;
CREATE VIEW `01-3-view-jenis` AS select `jenis`.`id_jenis` AS `id_jenis`,`jenis`.`nama` AS `nama`,`jenis`.`datetime` AS `datetime` from `jenis`;

-- ----------------------------
-- View structure for `01-4-view-obyek-wisata`
-- ----------------------------
DROP VIEW IF EXISTS `01-4-view-obyek-wisata`;
CREATE VIEW `01-4-view-obyek-wisata` AS select `a`.`id_obyek` AS `id_obyek`,`a`.`nama` AS `nama`,`b`.`nama` AS `namajenis`,`a`.`alamat` AS `alamat`,`a`.`lokasi` AS `lokasi`,`a`.`kota` AS `kota`,`a`.`keterangan` AS `keterangan`,`a`.`fasilitas` AS `fasilitas`,`a`.`visitor` AS `visitor`,`a`.`id_jenis` AS `id_jenis` from (`obyek_wisata` `a` left join `01-3-view-jenis` `b` on((`b`.`id_jenis` = `a`.`id_jenis`)));

-- ----------------------------
-- View structure for `01-5-view-paket`
-- ----------------------------
DROP VIEW IF EXISTS `01-5-view-paket`;
CREATE VIEW `01-5-view-paket` AS select `a`.`id_paket` AS `id_paket`,`a`.`id_obyek` AS `id_obyek`,`a`.`nama` AS `nama`,`b`.`nama` AS `namaobyek`,`b`.`visitor` AS `visitor`,`b`.`namajenis` AS `namajenis`,`d`.`nama` AS `namaakomodasi`,`d`.`kamar` AS `kamar`,`a`.`keterangan` AS `keterangan`,`a`.`lokasi` AS `lokasi`,`d`.`bintang` AS `bintang`,`c`.`nama` AS `namatransport`,`c`.`max` AS `max`,`a`.`include` AS `include`,`a`.`exclude` AS `exclude`,`a`.`durasi_hari` AS `durasi_hari`,`a`.`durasi_malam` AS `durasi_malam`,((`a`.`durasi_hari` + `a`.`durasi_malam`) * 12) AS `jamdurasi`,`a`.`id_transport` AS `id_transport`,`a`.`id_akomodasi` AS `id_akomodasi`,`a`.`price_person` AS `price_person`,`a`.`datetime` AS `datetime` from (((`paket` `a` left join `01-4-view-obyek-wisata` `b` on((`b`.`id_obyek` = `a`.`id_obyek`))) left join `01-2-view-akomodasi` `d` on((`d`.`id_akomodasi` = `a`.`id_akomodasi`))) left join `01-1-view-transport` `c` on((`c`.`id_transport` = `a`.`id_transport`)));

-- ----------------------------
-- View structure for `01-6-view-wisata`
-- ----------------------------
DROP VIEW IF EXISTS `01-6-view-wisata`;
CREATE VIEW `01-6-view-wisata` AS select `a`.`id_wisata` AS `id_wisata`,`a`.`budget` AS `budget`,`a`.`waktu` AS `waktu`,`a`.`visitor` AS `visitor`,`a`.`datetime` AS `datetime` from `wisata` `a`;

-- ----------------------------
-- View structure for `01-7-view-rules`
-- ----------------------------
DROP VIEW IF EXISTS `01-7-view-rules`;
CREATE VIEW `01-7-view-rules` AS select `rules`.`rule_id` AS `rule_id`,`rules`.`rulename` AS `rulename`,`rules`.`budget` AS `budget`,`rules`.`durasi` AS `durasi`,`rules`.`visitor` AS `visitor`,`rules`.`fuzzy_output` AS `fuzzy_output`,`rules`.`datetime` AS `datetime` from `rules`;

-- ----------------------------
-- View structure for `02-view-standard-value`
-- ----------------------------
DROP VIEW IF EXISTS `02-view-standard-value`;
CREATE VIEW `02-view-standard-value` AS select `a`.`id_paket` AS `id_paket`,`a`.`nama` AS `nama`,`a`.`price_person` AS `price_person`,`a`.`durasi_hari` AS `durasi_hari`,`a`.`durasi_malam` AS `durasi_malam`,(`a`.`durasi_hari` + `a`.`durasi_malam`) AS `totaldurasi`,`a`.`jamdurasi` AS `jamdurasi`,`a`.`visitor` AS `visitor`,round(((`a`.`price_person` * 3) / 3),2) AS `maxprice`,round(((`a`.`price_person` * 2) / 3),2) AS `midprice`,round(((`a`.`price_person` * 1) / 3),2) AS `minprice`,((`a`.`jamdurasi` * 3) / 3) AS `maxtime`,((`a`.`jamdurasi` * 2) / 3) AS `midtime`,((`a`.`jamdurasi` * 1) / 3) AS `mintime`,round(((`a`.`visitor` * 3) / 3),2) AS `maxvisitor`,round(((`a`.`visitor` * 2) / 3),2) AS `midvisitor`,round(((`a`.`visitor` * 1) / 3),2) AS `minvisitor` from `01-5-view-paket` `a`;

-- ----------------------------
-- View structure for `03-view-standar-value-wisata`
-- ----------------------------
DROP VIEW IF EXISTS `03-view-standar-value-wisata`;
CREATE VIEW `03-view-standar-value-wisata` AS select `a`.`id_wisata` AS `id_wisata`,`a`.`budget` AS `budgetminta`,`a`.`waktu` AS `waktuminta`,`a`.`visitor` AS `visitorminta`,`b`.`id_paket` AS `id_paket`,`b`.`nama` AS `nama`,`b`.`price_person` AS `price_person`,`b`.`durasi_hari` AS `durasi_hari`,`b`.`durasi_malam` AS `durasi_malam`,`b`.`totaldurasi` AS `totaldurasi`,`b`.`jamdurasi` AS `jamdurasi`,`b`.`visitor` AS `visitor`,`b`.`maxprice` AS `maxprice`,`b`.`midprice` AS `midprice`,`b`.`minprice` AS `minprice`,`b`.`maxtime` AS `maxtime`,`b`.`midtime` AS `midtime`,`b`.`mintime` AS `mintime`,`b`.`maxvisitor` AS `maxvisitor`,`b`.`midvisitor` AS `midvisitor`,`b`.`minvisitor` AS `minvisitor` from (`01-6-view-wisata` `a` join `02-view-standard-value` `b`) order by `a`.`id_wisata`,`b`.`id_paket`;

-- ----------------------------
-- View structure for `04-1-view-himpunan`
-- ----------------------------
DROP VIEW IF EXISTS `04-1-view-himpunan`;
CREATE VIEW `04-1-view-himpunan` AS select `a`.`id_wisata` AS `id_wisata`,`a`.`id_paket` AS `id_paket`,`a`.`nama` AS `nama`,`a`.`budgetminta` AS `budgetminta`,`a`.`minprice` AS `minprice`,`a`.`midprice` AS `midprice`,`a`.`maxprice` AS `maxprice`,if((`a`.`budgetminta` = `a`.`minprice`),1,if(((`a`.`budgetminta` >= 0) and (`a`.`budgetminta` < `a`.`midprice`)),1,0)) AS `bmin`,if((`a`.`budgetminta` = `a`.`midprice`),1,if(((`a`.`budgetminta` >= `a`.`minprice`) and (`a`.`budgetminta` < `a`.`maxprice`)),1,0)) AS `bmid`,if((`a`.`budgetminta` = `a`.`maxprice`),1,if(((`a`.`budgetminta` >= `a`.`midprice`) or (`a`.`budgetminta` >= `a`.`maxprice`)),1,0)) AS `bmax`,`a`.`waktuminta` AS `waktuminta`,`a`.`midtime` AS `midtime`,`a`.`mintime` AS `mintime`,`a`.`maxtime` AS `maxtime`,if((`a`.`waktuminta` = `a`.`mintime`),1,if(((`a`.`waktuminta` >= 0) and (`a`.`waktuminta` < `a`.`midtime`)),1,0)) AS `tmin`,if((`a`.`waktuminta` = `a`.`midtime`),1,if(((`a`.`waktuminta` >= `a`.`mintime`) and (`a`.`waktuminta` < `a`.`maxtime`)),1,0)) AS `tmid`,if((`a`.`waktuminta` = `a`.`maxtime`),1,if(((`a`.`waktuminta` >= `a`.`midtime`) or (`a`.`waktuminta` >= `a`.`maxtime`)),1,0)) AS `tmax`,`a`.`visitorminta` AS `visitorminta`,`a`.`minvisitor` AS `minvisitor`,`a`.`midvisitor` AS `midvisitor`,`a`.`maxvisitor` AS `maxvisitor`,if((`a`.`visitorminta` = `a`.`minvisitor`),1,if(((`a`.`visitorminta` >= 0) and (`a`.`visitorminta` < `a`.`midvisitor`)),1,0)) AS `vmin`,if((`a`.`visitorminta` = `a`.`midvisitor`),1,if(((`a`.`visitorminta` >= `a`.`minvisitor`) and (`a`.`visitorminta` < `a`.`maxvisitor`)),1,0)) AS `vmid`,if((`a`.`visitorminta` = `a`.`maxvisitor`),1,if(((`a`.`visitorminta` >= `a`.`midvisitor`) or (`a`.`visitorminta` >= `a`.`maxvisitor`)),1,0)) AS `vmax` from `03-view-standar-value-wisata` `a`;

-- ----------------------------
-- View structure for `04-2-view-himpunan-logika`
-- ----------------------------
DROP VIEW IF EXISTS `04-2-view-himpunan-logika`;
CREATE VIEW `04-2-view-himpunan-logika` AS select `a`.`id_wisata` AS `id_wisata`,`a`.`id_paket` AS `id_paket`,`a`.`nama` AS `nama`,`a`.`budgetminta` AS `budgetminta`,if((`a`.`budgetminta` = `a`.`minprice`),1,if(((`a`.`budgetminta` >= 0) and (`a`.`budgetminta` < `a`.`midprice`)),1,0)) AS `bmin`,if((`a`.`budgetminta` = `a`.`midprice`),1,if(((`a`.`budgetminta` >= `a`.`minprice`) and (`a`.`budgetminta` < `a`.`maxprice`)),1,0)) AS `bmid`,if((`a`.`budgetminta` = `a`.`maxprice`),1,if(((`a`.`budgetminta` >= `a`.`midprice`) or (`a`.`budgetminta` >= `a`.`maxprice`)),1,0)) AS `bmax`,`a`.`waktuminta` AS `waktuminta`,if((`a`.`waktuminta` = `a`.`mintime`),1,if(((`a`.`waktuminta` >= 0) and (`a`.`waktuminta` < `a`.`midtime`)),1,0)) AS `tmin`,if((`a`.`waktuminta` = `a`.`midtime`),1,if(((`a`.`waktuminta` >= `a`.`mintime`) and (`a`.`waktuminta` < `a`.`maxtime`)),1,0)) AS `tmid`,if((`a`.`waktuminta` = `a`.`maxtime`),1,if(((`a`.`waktuminta` >= `a`.`midtime`) or (`a`.`waktuminta` >= `a`.`maxtime`)),1,0)) AS `tmax`,`a`.`visitorminta` AS `visitorminta`,if((`a`.`visitorminta` = `a`.`minvisitor`),1,if(((`a`.`visitorminta` >= 0) and (`a`.`visitorminta` < `a`.`midvisitor`)),1,0)) AS `vmin`,if((`a`.`visitorminta` = `a`.`midvisitor`),1,if(((`a`.`visitorminta` >= `a`.`minvisitor`) and (`a`.`visitorminta` < `a`.`maxvisitor`)),1,0)) AS `vmid`,if((`a`.`visitorminta` = `a`.`maxvisitor`),1,if(((`a`.`visitorminta` >= `a`.`midvisitor`) or (`a`.`visitorminta` >= `a`.`maxvisitor`)),1,0)) AS `vmax` from `03-view-standar-value-wisata` `a`;

-- ----------------------------
-- View structure for `05-1-fuzzyfikasi`
-- ----------------------------
DROP VIEW IF EXISTS `05-1-fuzzyfikasi`;
CREATE VIEW `05-1-fuzzyfikasi` AS select `a`.`id_wisata` AS `id_wisata`,`a`.`id_paket` AS `id_paket`,`a`.`nama` AS `nama`,`a`.`budgetminta` AS `budgetminta`,`a`.`minprice` AS `minprice`,`a`.`midprice` AS `midprice`,`a`.`maxprice` AS `maxprice`,`a`.`bmin` AS `bmin`,`a`.`bmid` AS `bmid`,`a`.`bmax` AS `bmax`,round(if((`a`.`bmin` = 1),(`a`.`budgetminta` / `a`.`minprice`),0),2) AS `budgetmin`,round(if((`a`.`bmid` = 1),((`a`.`maxprice` - `a`.`budgetminta`) / `a`.`minprice`),0),2) AS `budgetmid`,round(if((`a`.`bmax` = 1),((`a`.`budgetminta` - `a`.`midprice`) / `a`.`minprice`),0),2) AS `budgetmax`,`a`.`waktuminta` AS `waktuminta`,`a`.`midtime` AS `midtime`,`a`.`mintime` AS `mintime`,`a`.`maxtime` AS `maxtime`,`a`.`tmin` AS `tmin`,`a`.`tmid` AS `tmid`,`a`.`tmax` AS `tmax`,round(if((`a`.`tmin` = 1),(`a`.`waktuminta` / `a`.`mintime`),0),2) AS `waktumin`,round(if((`a`.`tmid` = 1),((`a`.`maxtime` - `a`.`waktuminta`) / `a`.`mintime`),0),2) AS `waktumid`,round(if((`a`.`tmax` = 1),((`a`.`waktuminta` - `a`.`midtime`) / `a`.`mintime`),0),2) AS `waktumax`,`a`.`visitorminta` AS `visitorminta`,`a`.`minvisitor` AS `minvisitor`,`a`.`midvisitor` AS `midvisitor`,`a`.`maxvisitor` AS `maxvisitor`,`a`.`vmin` AS `vmin`,`a`.`vmid` AS `vmid`,`a`.`vmax` AS `vmax`,round(if((`a`.`vmin` = 1),(`a`.`visitorminta` / `a`.`minvisitor`),0),2) AS `visitormin`,round(if((`a`.`vmid` = 1),((`a`.`maxvisitor` - `a`.`visitorminta`) / `a`.`minvisitor`),0),2) AS `visitormid`,round(if((`a`.`vmax` = 1),((`a`.`visitorminta` - `a`.`midvisitor`) / `a`.`minvisitor`),0),2) AS `visitormax` from `04-1-view-himpunan` `a`;

-- ----------------------------
-- View structure for `05-2-fuzzyfikasi-logika`
-- ----------------------------
DROP VIEW IF EXISTS `05-2-fuzzyfikasi-logika`;
CREATE VIEW `05-2-fuzzyfikasi-logika` AS select `a`.`id_wisata` AS `id_wisata`,`a`.`id_paket` AS `id_paket`,`a`.`nama` AS `nama`,`a`.`budgetminta` AS `budgetminta`,`a`.`waktuminta` AS `waktuminta`,`a`.`visitorminta` AS `visitorminta`,round(if((`a`.`bmin` = 1),(`a`.`budgetminta` / `a`.`minprice`),0),2) AS `budgetmin`,round(if((`a`.`bmid` = 1),((`a`.`maxprice` - `a`.`budgetminta`) / `a`.`minprice`),0),2) AS `budgetmid`,round(if((`a`.`bmax` = 1),((`a`.`budgetminta` - `a`.`midprice`) / `a`.`minprice`),0),2) AS `budgetmax`,round(if((`a`.`tmin` = 1),(`a`.`waktuminta` / `a`.`mintime`),0),2) AS `waktumin`,round(if((`a`.`tmid` = 1),((`a`.`maxtime` - `a`.`waktuminta`) / `a`.`mintime`),0),2) AS `waktumid`,round(if((`a`.`tmax` = 1),((`a`.`waktuminta` - `a`.`midtime`) / `a`.`mintime`),0),2) AS `waktumax`,round(if((`a`.`vmin` = 1),(`a`.`visitorminta` / `a`.`minvisitor`),0),2) AS `visitormin`,round(if((`a`.`vmid` = 1),((`a`.`maxvisitor` - `a`.`visitorminta`) / `a`.`minvisitor`),0),2) AS `visitormid`,round(if((`a`.`vmax` = 1),((`a`.`visitorminta` - `a`.`midvisitor`) / `a`.`minvisitor`),0),2) AS `visitormax` from `04-1-view-himpunan` `a`;

-- ----------------------------
-- View structure for `06-1-rulebase`
-- ----------------------------
DROP VIEW IF EXISTS `06-1-rulebase`;
CREATE VIEW `06-1-rulebase` AS select `a`.`id_wisata` AS `id_wisata`,`a`.`id_paket` AS `id_paket`,`a`.`nama` AS `nama`,`a`.`budgetminta` AS `budgetminta`,`a`.`waktuminta` AS `waktuminta`,`a`.`visitorminta` AS `visitorminta`,`a`.`bmin` AS `bmin`,`a`.`bmid` AS `bmid`,`a`.`bmax` AS `bmax`,`a`.`tmin` AS `tmin`,`a`.`tmid` AS `tmid`,`a`.`tmax` AS `tmax`,`a`.`vmin` AS `vmin`,`a`.`vmid` AS `vmid`,`a`.`vmax` AS `vmax`,`b`.`rule_id` AS `rule_id`,`b`.`rulename` AS `rulename`,`b`.`budget` AS `budget`,`b`.`durasi` AS `durasi`,`b`.`visitor` AS `visitor`,`b`.`fuzzy_output` AS `fuzzy_output`,`a`.`budgetmin` AS `budgetmin`,`a`.`budgetmid` AS `budgetmid`,`a`.`budgetmax` AS `budgetmax`,`a`.`waktumin` AS `waktumin`,`a`.`waktumid` AS `waktumid`,`a`.`waktumax` AS `waktumax`,`a`.`visitormin` AS `visitormin`,`a`.`visitormid` AS `visitormid`,`a`.`visitormax` AS `visitormax` from (`05-1-fuzzyfikasi` `a` join `rules` `b`) where ((if((`a`.`bmin` = 1),(`b`.`budget` = 'Sedikit'),'') or if((`a`.`bmid` = 1),(`b`.`budget` = 'Sedang'),'') or if((`a`.`bmax` = 1),(`b`.`budget` = 'Banyak'),'')) and (if((`a`.`tmin` = 1),(`b`.`durasi` = 'Pendek'),'') or if((`a`.`tmid` = 1),(`b`.`durasi` = 'Sedang'),'') or if((`a`.`tmax` = 1),(`b`.`durasi` = 'Panjang'),'')) and (if((`a`.`vmin` = 1),(`b`.`visitor` = 'Sepi'),'') or if((`a`.`vmid` = 1),(`b`.`visitor` = 'Sedang'),'') or if((`a`.`vmax` = 1),(`b`.`visitor` = 'Rame'),''))) order by `a`.`id_wisata`,`a`.`id_paket`,`b`.`rule_id`;

-- ----------------------------
-- View structure for `06-2-fuzzy-rulebase`
-- ----------------------------
DROP VIEW IF EXISTS `06-2-fuzzy-rulebase`;
CREATE VIEW `06-2-fuzzy-rulebase` AS select `a`.`id_wisata` AS `id_wisata`,`a`.`id_paket` AS `id_paket`,`a`.`rule_id` AS `rule_id`,`a`.`rulename` AS `rulename`,`a`.`budget` AS `budget`,`a`.`durasi` AS `durasi`,`a`.`visitor` AS `visitor`,`a`.`budgetmin` AS `budgetmin`,`a`.`budgetmid` AS `budgetmid`,`a`.`budgetmax` AS `budgetmax`,`a`.`waktumin` AS `waktumin`,`a`.`waktumid` AS `waktumid`,`a`.`waktumax` AS `waktumax`,`a`.`visitormin` AS `visitormin`,`a`.`visitormid` AS `visitormid`,`a`.`visitormax` AS `visitormax`,if((`a`.`budget` = 'Sedikit'),`a`.`budgetmin`,if((`a`.`budget` = 'Sedang'),`a`.`budgetmid`,`a`.`budgetmax`)) AS `fuzzy_budget`,if((`a`.`durasi` = 'Pendek'),`a`.`waktumin`,if((`a`.`durasi` = 'Sedang'),`a`.`waktumid`,`a`.`waktumax`)) AS `fuzzy_durasi`,if((`a`.`visitor` = 'Sepi'),`a`.`visitormin`,if((`a`.`visitor` = 'Sedang'),`a`.`visitormid`,`a`.`visitormax`)) AS `fuzzy_visitor`,`a`.`fuzzy_output` AS `fuzzy_output` from `06-1-rulebase` `a` order by `a`.`id_wisata`,`a`.`id_paket`,`a`.`rule_id`;

-- ----------------------------
-- View structure for `06-3-rulebase-minmax`
-- ----------------------------
DROP VIEW IF EXISTS `06-3-rulebase-minmax`;
CREATE VIEW `06-3-rulebase-minmax` AS select distinct `a`.`id_wisata` AS `id_wisata`,`a`.`id_paket` AS `id_paket`,`a`.`rule_id` AS `rule_id`,`a`.`rulename` AS `rulename`,`a`.`fuzzy_output` AS `fuzzy_output`,`a`.`fuzzy_budget` AS `fuzzy_budget`,`a`.`fuzzy_durasi` AS `fuzzy_durasi`,`a`.`fuzzy_visitor` AS `fuzzy_visitor` from `06-2-fuzzy-rulebase` `a`;

-- ----------------------------
-- View structure for `07-1-min-alpha-predikat-z`
-- ----------------------------
DROP VIEW IF EXISTS `07-1-min-alpha-predikat-z`;
CREATE VIEW `07-1-min-alpha-predikat-z` AS select `a`.`id_wisata` AS `id_wisata`,`a`.`id_paket` AS `id_paket`,`a`.`rule_id` AS `rule_id`,`a`.`rulename` AS `rulename`,`a`.`budget` AS `budget`,`a`.`durasi` AS `durasi`,`a`.`visitor` AS `visitor`,`a`.`fuzzy_budget` AS `fuzzy_budget`,`a`.`fuzzy_durasi` AS `fuzzy_durasi`,`a`.`fuzzy_visitor` AS `fuzzy_visitor`,least(`a`.`fuzzy_budget`,`a`.`fuzzy_durasi`,`a`.`fuzzy_visitor`) AS `min_alpha_predikat`,`a`.`fuzzy_output` AS `rule_fuzzy_ouput`,if((`a`.`fuzzy_output` = 'Memungkinkan'),100,if((`a`.`fuzzy_output` = 'Kurang Mungkin'),60,20)) AS `z` from `06-2-fuzzy-rulebase` `a` where (least(`a`.`fuzzy_budget`,`a`.`fuzzy_durasi`,`a`.`fuzzy_visitor`) <> 0);

-- ----------------------------
-- View structure for `07-2-min-alpha-z`
-- ----------------------------
DROP VIEW IF EXISTS `07-2-min-alpha-z`;
CREATE VIEW `07-2-min-alpha-z` AS select `a`.`id_wisata` AS `id_wisata`,`a`.`id_paket` AS `id_paket`,`a`.`rule_id` AS `rule_id`,`a`.`rulename` AS `rulename`,`a`.`rule_fuzzy_ouput` AS `rule_fuzzy_ouput`,`a`.`budget` AS `budget`,`a`.`durasi` AS `durasi`,`a`.`visitor` AS `visitor`,`a`.`fuzzy_budget` AS `fuzzy_budget`,`a`.`fuzzy_durasi` AS `fuzzy_durasi`,`a`.`fuzzy_visitor` AS `fuzzy_visitor`,`a`.`min_alpha_predikat` AS `min_alpha_predikat`,`a`.`z` AS `z`,(`a`.`z` * `a`.`min_alpha_predikat`) AS `min_alphaz` from `07-1-min-alpha-predikat-z` `a`;

-- ----------------------------
-- View structure for `07-3-sum-alpha`
-- ----------------------------
DROP VIEW IF EXISTS `07-3-sum-alpha`;
CREATE VIEW `07-3-sum-alpha` AS select `a`.`id_wisata` AS `id_wisata`,`a`.`id_paket` AS `id_paket`,`a`.`min_alpha_predikat` AS `min_alpha_predikat`,`a`.`z` AS `z`,`a`.`min_alphaz` AS `min_alphaz`,sum(`a`.`min_alpha_predikat`) AS `sum_alpha`,sum(`a`.`min_alphaz`) AS `sum_alphaz` from `07-2-min-alpha-z` `a` group by `a`.`id_wisata`,`a`.`id_paket`;

-- ----------------------------
-- View structure for `08-defuzzy`
-- ----------------------------
DROP VIEW IF EXISTS `08-defuzzy`;
CREATE VIEW `08-defuzzy` AS select `a`.`id_wisata` AS `id_wisata`,`a`.`id_paket` AS `id_paket`,`a`.`min_alpha_predikat` AS `min_alpha_predikat`,`a`.`z` AS `z`,`a`.`min_alphaz` AS `min_alphaz`,`a`.`sum_alpha` AS `sum_alpha`,`a`.`sum_alphaz` AS `sum_alphaz`,round((`a`.`sum_alphaz` / `a`.`sum_alpha`),2) AS `defuzzy` from `07-3-sum-alpha` `a` order by (`a`.`sum_alphaz` / `a`.`sum_alpha`) desc,`a`.`id_wisata`;

-- ----------------------------
-- View structure for `09-fuzzy-output`
-- ----------------------------
DROP VIEW IF EXISTS `09-fuzzy-output`;
CREATE VIEW `09-fuzzy-output` AS select `a`.`id_wisata` AS `id_wisata`,`a`.`id_paket` AS `id_paket`,`a`.`defuzzy` AS `defuzzy`,if(((`a`.`defuzzy` >= 0) and (`a`.`defuzzy` <= 20)),'Tidak Memungkinkan',if(((`a`.`defuzzy` > 20) and (`a`.`defuzzy` <= 60)),'Kurang Memungkinkan',if(((`a`.`defuzzy` > 60) and (`a`.`defuzzy` <= 100)),'Memungkinkan',''))) AS `fuzzy_output_sugeno` from `08-defuzzy` `a` order by `a`.`id_wisata`,`a`.`id_paket`;

-- ----------------------------
-- View structure for `view-fuzzy-sugeno`
-- ----------------------------
DROP VIEW IF EXISTS `view-fuzzy-sugeno`;
CREATE VIEW `view-fuzzy-sugeno` AS select `b`.`id_wisata` AS `id_wisata`,`c`.`budget` AS `budgetminta`,`c`.`waktu` AS `waktuminta`,`c`.`visitor` AS `visitorminta`,`a`.`id_paket` AS `id_paket`,`a`.`nama` AS `nama`,`a`.`namaobyek` AS `namaobyek`,`a`.`visitor` AS `visitor`,`a`.`price_person` AS `price_person`,`a`.`namajenis` AS `namajenis`,`a`.`namaakomodasi` AS `namaakomodasi`,`a`.`kamar` AS `kamar`,`a`.`bintang` AS `bintang`,`a`.`namatransport` AS `namatransport`,`a`.`max` AS `max`,`a`.`durasi_hari` AS `durasi_hari`,`a`.`durasi_malam` AS `durasi_malam`,`b`.`defuzzy` AS `defuzzy`,`b`.`fuzzy_output_sugeno` AS `fuzzy_output_sugeno`,`a`.`id_obyek` AS `id_obyek` from ((`01-5-view-paket` `a` join `09-fuzzy-output` `b` on((`a`.`id_paket` = `b`.`id_paket`))) join `01-6-view-wisata` `c` on((`c`.`id_wisata` = `b`.`id_wisata`)));

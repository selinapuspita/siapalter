/*
 Navicat Premium Dump SQL

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100428 (10.4.28-MariaDB-log)
 Source Host           : localhost:3306
 Source Schema         : siapalter

 Target Server Type    : MySQL
 Target Server Version : 100428 (10.4.28-MariaDB-log)
 File Encoding         : 65001

 Date: 29/05/2025 13:37:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for data_absen
-- ----------------------------
DROP TABLE IF EXISTS `data_absen`;
CREATE TABLE `data_absen`  (
  `ID` bigint NOT NULL AUTO_INCREMENT,
  `ID_USER` int NOT NULL,
  `TANGGAL` date NOT NULL,
  `JAM` time NOT NULL,
  `IP` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `LOKASI` varchar(1000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `GPS` varchar(10000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `AGENT` varchar(5000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `GAMBAR` varchar(2500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `KETERANGAN` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  INDEX `ID_USER`(`ID_USER`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 265 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_absen
-- ----------------------------
INSERT INTO `data_absen` VALUES (263, 22, '2025-05-29', '12:25:12', '::1', ',', '-6.5782142,106.758861', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '22_29052025122511.jpg', 'pulang');
INSERT INTO `data_absen` VALUES (260, 22, '2025-05-23', '22:11:14', '::1', ',', '-6.2062592,106.7843584', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '22_24052025151113.jpg', 'hadir');
INSERT INTO `data_absen` VALUES (261, 22, '2025-05-24', '09:12:17', '::1', ',', '-6.2062592,106.7843584', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '22_24052025151215.jpg', 'pulang');
INSERT INTO `data_absen` VALUES (262, 22, '2025-05-29', '12:24:33', '::1', ',', '-6.5782142,106.758861', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '22_29052025122432.jpg', 'hadir');
INSERT INTO `data_absen` VALUES (264, 22, '2025-05-29', '12:27:29', '::1', ',', '-6.5782142,106.758861', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '22_29052025122728.jpg', 'asasa');

-- ----------------------------
-- Table structure for data_cek
-- ----------------------------
DROP TABLE IF EXISTS `data_cek`;
CREATE TABLE `data_cek`  (
  `ID` bigint NOT NULL AUTO_INCREMENT,
  `ID_USER` int NOT NULL,
  `TANGGAL` date NOT NULL,
  `JAM` time NOT NULL,
  `POS` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `IP` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `LOKASI` varchar(1000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `GPS` varchar(10000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `AGENT` varchar(5000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `GAMBAR` varchar(2500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `KETERANGAN` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  INDEX `ID_USER`(`ID_USER`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 242 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_cek
-- ----------------------------

-- ----------------------------
-- Table structure for data_clientvisit
-- ----------------------------
DROP TABLE IF EXISTS `data_clientvisit`;
CREATE TABLE `data_clientvisit`  (
  `ID` bigint NOT NULL AUTO_INCREMENT,
  `ID_USER` int NOT NULL,
  `TANGGAL` date NOT NULL,
  `JAM` time NOT NULL,
  `IP` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `LOKASI` varchar(1000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `GPS` varchar(10000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `AGENT` varchar(5000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `GAMBAR` varchar(2500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `KETERANGAN` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  INDEX `ID_USER`(`ID_USER`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_clientvisit
-- ----------------------------

-- ----------------------------
-- Table structure for data_log
-- ----------------------------
DROP TABLE IF EXISTS `data_log`;
CREATE TABLE `data_log`  (
  `ID` bigint NOT NULL AUTO_INCREMENT,
  `ID_USER` int NOT NULL,
  `TANGGAL` date NOT NULL,
  `JAM_MASUK` time NOT NULL,
  `JAM_KELUAR` time NOT NULL,
  `TERLAMBAT` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `PULANG_CEPAT` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ID_MASUK` varchar(25000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ABSEN_MASUK` datetime NOT NULL,
  `KETERANGAN_MASUK` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ID_KELUAR` varchar(25000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ABSEN_KELUAR` datetime NOT NULL,
  `KETERANGAN_KELUAR` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  INDEX `ID_USER`(`ID_USER`) USING BTREE,
  INDEX `TANGGAL`(`TANGGAL`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 155 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_log
-- ----------------------------
INSERT INTO `data_log` VALUES (153, 22, '2025-05-24', '08:00:00', '17:00:00', '7:11:14', '1:47:43', '260', '2025-05-24 15:11:14', 'hadir', '261', '2025-05-24 15:12:17', 'pulang');
INSERT INTO `data_log` VALUES (154, 22, '2025-05-29', '08:00:00', '17:00:00', '4:24:33', '4:32:31', '262', '2025-05-29 12:24:33', 'hadir', '264', '2025-05-29 12:27:29', 'asasa');

-- ----------------------------
-- Table structure for data_pos
-- ----------------------------
DROP TABLE IF EXISTS `data_pos`;
CREATE TABLE `data_pos`  (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NAMAPOS` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `CODE` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `LOKASI` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_pos
-- ----------------------------

-- ----------------------------
-- Table structure for data_setting
-- ----------------------------
DROP TABLE IF EXISTS `data_setting`;
CREATE TABLE `data_setting`  (
  `ID` int NOT NULL AUTO_INCREMENT,
  `TAG` varchar(1000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `VALUE` varchar(5000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_setting
-- ----------------------------
INSERT INTO `data_setting` VALUES (1, 'JAM_MASUK', '08:00:00');
INSERT INTO `data_setting` VALUES (2, 'JAM_KELUAR', '17:00:00');
INSERT INTO `data_setting` VALUES (4, 'NAMA_APLIKASI', 'SIAP ALTER - DEMO');
INSERT INTO `data_setting` VALUES (5, 'ID_APLIKASI', 'SIAP - BAKTI ALTER PURBA');
INSERT INTO `data_setting` VALUES (8, 'JAM_MASUK_JUMAT', '08:00:00');
INSERT INTO `data_setting` VALUES (9, 'JAM_KELUAR_JUMAT', '17:00:00');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NAMA` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `NIK` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `NO_HP` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `JABATAN` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `AREA` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `USERNAME` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `PASSWORD` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `LEVEL` int NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 58 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (22, 'Administrator', 'admin123', '081310936317', 'Admin IT', 'Head Office', 'demo', 'd3ad9315b7be5dd53b31a273b3b3aba5defe700808305aa16a3062b76658a791', 99);

SET FOREIGN_KEY_CHECKS = 1;

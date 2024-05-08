/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50733
 Source Host           : localhost:3306
 Source Schema         : sanbongdp_db

 Target Server Type    : MySQL
 Target Server Version : 50733
 File Encoding         : 65001

 Date: 23/02/2022 12:22:34
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for chi_tiet_dat_san
-- ----------------------------
DROP TABLE IF EXISTS `chi_tiet_dat_san`;
CREATE TABLE `chi_tiet_dat_san`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ma_dat_san` int(11) NULL DEFAULT NULL,
  `ma_san` int(11) UNSIGNED NOT NULL,
  `khung_gio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `ma_loai_dv` int(11) NOT NULL,
  `so_luong_dv` int(11) NULL DEFAULT NULL,
  `ngay_gio_huy` date NULL DEFAULT NULL,
  `ngay_su_dung` date NULL DEFAULT NULL,
  `gia_tien` double(8, 2) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `ma_tk` int(5) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `ma_tk`(`ma_tk`) USING BTREE,
  INDEX `ma_san`(`ma_san`) USING BTREE,
  INDEX `ma_loai_dv`(`ma_loai_dv`) USING BTREE,
  CONSTRAINT `chi_tiet_dat_san_ibfk_1` FOREIGN KEY (`ma_san`) REFERENCES `san` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `chi_tiet_dat_san_ibfk_2` FOREIGN KEY (`ma_loai_dv`) REFERENCES `dich_vu` (`ma_loai_dv`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 59 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of chi_tiet_dat_san
-- ----------------------------
INSERT INTO `chi_tiet_dat_san` VALUES (3, 2102011816, 4, '17', 1, 12, '2022-01-06', '2021-12-30', 420000.00, '2021-12-30 13:18:51', '2022-01-06 07:51:28', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (5, 1807000832, 3, '23', 2, 10, NULL, '2021-12-30', 410000.00, '2021-12-30 13:20:34', '2021-12-30 13:20:34', 3);
INSERT INTO `chi_tiet_dat_san` VALUES (6, 1509485703, 1, '16', 1, 12, NULL, '2022-01-01', 400000.00, '2021-12-31 00:37:38', '2021-12-31 00:37:38', 5);
INSERT INTO `chi_tiet_dat_san` VALUES (7, 3869, 3, '6', 2, 12, NULL, '2022-01-04', 280000.00, '2022-01-04 07:42:10', '2022-01-04 07:42:10', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (8, 6587, 1, '5', 2, 12, NULL, '2022-01-04', 280000.00, '2022-01-04 07:42:10', '2022-01-04 07:42:10', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (9, 4603, 1, '5', 1, 12, '2022-01-06', '2022-01-06', 340000.00, '2022-01-06 05:33:24', '2022-01-06 07:30:30', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (10, 2765, 1, '17', 1, 12, NULL, '2022-01-06', 420000.00, '2022-01-06 07:07:47', '2022-01-06 07:07:47', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (11, 2102011816, 4, '17', 1, 12, '2022-01-06', '2021-12-30', 420000.00, '2022-01-06 07:30:19', '2022-01-06 07:55:08', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (13, 3921, 1, '6', 2, 10, NULL, '2022-01-07', 270000.00, '2022-01-06 23:24:13', '2022-01-06 23:54:14', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (15, 3921, 1, '17', 1, 8, NULL, '2022-01-07', 380000.00, '2022-01-06 23:24:13', '2022-01-06 23:24:13', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (16, 2608, 1, '16', 1, 12, NULL, '2022-01-08', 400000.00, '2022-01-06 23:55:57', '2022-01-06 23:55:57', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (17, 9295, 1, '17', 2, 5, NULL, '2022-01-09', 325000.00, '2022-01-06 23:55:57', '2022-01-07 02:08:26', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (18, 9295, 1, '18', 1, 8, NULL, '2022-01-09', 400000.00, '2022-01-06 23:55:57', '2022-01-06 23:55:57', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (19, 6610, 1, '5', 1, 12, NULL, '2022-01-01', 340000.00, '2022-01-06 23:58:15', '2022-01-06 23:58:15', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (20, 6610, 1, '6', 2, 10, NULL, '2022-01-01', 270000.00, '2022-01-06 23:58:15', '2022-01-06 23:58:15', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (21, 6610, 1, '7', 2, 8, NULL, '2022-01-01', 260000.00, '2022-01-06 23:58:15', '2022-01-06 23:58:15', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (22, 6610, 1, '8', 2, 12, NULL, '2022-01-01', 280000.00, '2022-01-06 23:58:15', '2022-01-06 23:58:15', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (23, 6610, 1, '9', 2, 7, NULL, '2022-01-01', 255000.00, '2022-01-06 23:58:15', '2022-01-06 23:58:15', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (24, 5789, 1, '5', 1, 12, NULL, '2022-01-07', 340000.00, '2022-01-07 01:46:38', '2022-01-07 01:46:38', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (25, 1906, 1, '7', 2, 12, NULL, '2022-01-07', 280000.00, '2022-01-07 01:51:45', '2022-01-07 01:51:45', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (26, 1906, 1, '8', 1, 12, NULL, '2022-01-07', 340000.00, '2022-01-07 01:51:45', '2022-01-07 01:51:45', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (27, 9984, 1, '5', 1, 12, NULL, '2022-01-10', 340000.00, '2022-01-10 01:11:20', '2022-01-10 01:11:20', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (28, 4970, 1, '6', 1, 12, NULL, '2022-01-10', 340000.00, '2022-01-10 01:11:20', '2022-01-10 01:11:20', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (30, 9803, 1, '6', 2, 10, '2022-01-11', '2022-01-11', 270000.00, '2022-01-11 03:54:27', '2022-01-11 04:56:50', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (31, 9803, 1, '7', 1, 8, NULL, '2022-01-11', 300000.00, '2022-01-11 03:54:27', '2022-01-11 03:54:27', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (32, 3055, 1, '8', 1, 12, NULL, '2022-01-11', 340000.00, '2022-01-11 04:56:34', '2022-01-11 04:56:34', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (34, 7853, 1, '5', 2, 12, NULL, '2022-01-17', 260000.00, '2022-01-17 07:30:04', '2022-01-17 07:30:04', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (35, 4005, 1, '5', 1, 20, NULL, '2022-01-17', 400000.00, '2022-01-17 07:32:35', '2022-01-17 07:32:35', 14);
INSERT INTO `chi_tiet_dat_san` VALUES (36, 4474, 6, '7', 2, 10, NULL, '2022-01-18', 270000.00, '2022-01-17 09:01:36', '2022-01-17 09:01:36', 15);
INSERT INTO `chi_tiet_dat_san` VALUES (37, 3336, 1, '5', 1, 3, NULL, '2022-01-17', 230000.00, '2022-01-17 09:23:39', '2022-01-17 09:23:39', 16);
INSERT INTO `chi_tiet_dat_san` VALUES (38, 5354, 1, '6', 1, 12, NULL, '2022-01-17', 340000.00, '2022-01-17 10:02:11', '2022-01-17 10:02:11', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (39, 4074, 1, '7', 2, 0, NULL, '2022-01-17', 220000.00, '2022-01-17 10:39:41', '2022-01-17 10:39:41', 25);
INSERT INTO `chi_tiet_dat_san` VALUES (40, 2417, 5, '22', 2, 8, NULL, '2022-01-17', 400000.00, '2022-01-17 12:52:14', '2022-01-17 12:52:14', 17);
INSERT INTO `chi_tiet_dat_san` VALUES (41, 5091, 1, '5', 1, 12, NULL, '2022-01-18', 320000.00, '2022-01-18 08:37:54', '2022-01-18 08:37:54', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (42, 5170, 1, '5', 1, 12, NULL, '2022-01-19', 320000.00, '2022-01-19 13:36:47', '2022-01-19 13:36:47', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (43, 9954, 1, '5', 1, 9, NULL, '2022-01-19', 290000.00, '2022-01-19 13:49:09', '2022-01-19 13:49:09', 29);
INSERT INTO `chi_tiet_dat_san` VALUES (44, 9000, 3, '6', 2, 6, NULL, '2022-01-19', 250000.00, '2022-01-19 13:49:09', '2022-01-19 13:49:09', 29);
INSERT INTO `chi_tiet_dat_san` VALUES (45, 2598, 1, '5', 2, 12, NULL, '2022-01-20', 260000.00, '2022-01-20 02:28:49', '2022-01-20 02:28:49', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (50, 7931, 3, '16', 2, 12, NULL, '2022-02-17', 340000.00, '2022-02-17 13:26:04', '2022-02-17 13:26:04', 3);
INSERT INTO `chi_tiet_dat_san` VALUES (52, 4547, 3, '17', 2, 12, NULL, '2022-02-17', 360000.00, '2022-02-17 13:38:17', '2022-02-17 13:38:17', 3);
INSERT INTO `chi_tiet_dat_san` VALUES (53, 3496, 3, '21', 2, 12, NULL, '2022-02-17', 400000.00, '2022-02-17 13:47:41', '2022-02-17 13:47:41', 3);
INSERT INTO `chi_tiet_dat_san` VALUES (54, 3496, 3, '22', 1, 12, NULL, '2022-02-17', 480000.00, '2022-02-17 13:47:41', '2022-02-17 13:47:41', 3);
INSERT INTO `chi_tiet_dat_san` VALUES (55, 3496, 3, '23', 1, 12, NULL, '2022-02-17', 480000.00, '2022-02-17 13:47:41', '2022-02-17 13:47:41', 3);
INSERT INTO `chi_tiet_dat_san` VALUES (56, 3663, 1, '16', 2, 10, NULL, '2022-02-18', 330000.00, '2022-02-18 00:38:35', '2022-02-18 00:38:35', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (57, 3663, 1, '17', 2, 10, NULL, '2022-02-18', 350000.00, '2022-02-18 00:38:35', '2022-02-18 00:38:35', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (58, 3663, 1, '18', 2, 10, NULL, '2022-02-18', 370000.00, '2022-02-18 00:38:35', '2022-02-18 00:38:35', 1);

-- ----------------------------
-- Table structure for dat_san
-- ----------------------------
DROP TABLE IF EXISTS `dat_san`;
CREATE TABLE `dat_san`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ma_tk` int(11) NOT NULL,
  `ngay_dat` date NOT NULL,
  `ten_nguoi_dat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt_nguoi_dat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_trang_thai` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`, `ma_tk`) USING BTREE,
  INDEX `ma_tk`(`ma_tk`) USING BTREE,
  INDEX `ma_trang_thai`(`ma_trang_thai`) USING BTREE,
  INDEX `ma_tk_2`(`ma_tk`) USING BTREE,
  CONSTRAINT `dat_san_ibfk_1` FOREIGN KEY (`ma_tk`) REFERENCES `tai_khoan` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `ma_trang_thai` FOREIGN KEY (`ma_trang_thai`) REFERENCES `trang_thai_dat_san` (`ma_trang_thai`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 59 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of dat_san
-- ----------------------------
INSERT INTO `dat_san` VALUES (3, 1, '2021-12-30', 'Quang Qui', '0877778819', 3, '2021-12-30 13:18:51', '2021-12-30 13:18:51');
INSERT INTO `dat_san` VALUES (5, 3, '2021-12-30', 'Quang Huy', '0988899999', 2, '2021-12-30 13:20:34', '2021-12-30 14:28:31');
INSERT INTO `dat_san` VALUES (6, 5, '2021-12-31', 'Nguyễn Duy Vinh', '0935456789', 2, '2021-12-31 00:38:23', '2021-12-31 00:38:23');
INSERT INTO `dat_san` VALUES (7, 1, '2022-01-04', 'Quang Qui', '0877778819', 2, '2022-01-04 07:42:10', '2022-01-04 07:42:10');
INSERT INTO `dat_san` VALUES (8, 1, '2022-01-04', 'Quang Qui', '0877778819', 2, '2022-01-04 07:42:10', '2022-01-04 07:42:10');
INSERT INTO `dat_san` VALUES (9, 1, '2022-01-06', 'Quang Qui', '0877778819', 3, '2022-01-06 05:33:24', '2022-01-06 07:30:30');
INSERT INTO `dat_san` VALUES (10, 1, '2022-01-06', 'Quang Qui', '0877778819', 2, '2022-01-06 07:07:47', '2022-01-06 07:07:47');
INSERT INTO `dat_san` VALUES (11, 1, '2022-01-06', 'Quang Qui', '0877778819', 3, '2022-01-06 07:30:19', '2022-01-06 07:55:08');
INSERT INTO `dat_san` VALUES (13, 1, '2022-01-07', 'Quang Qui', '0877778819', 2, '2022-01-06 23:24:13', '2022-01-06 23:54:14');
INSERT INTO `dat_san` VALUES (15, 1, '2022-01-07', 'Quang Qui', '0877778819', 2, '2022-01-06 23:24:13', '2022-01-06 23:24:13');
INSERT INTO `dat_san` VALUES (16, 1, '2022-01-07', 'Quang Qui', '0877778819', 2, '2022-01-06 23:55:57', '2022-01-06 23:55:57');
INSERT INTO `dat_san` VALUES (17, 1, '2022-01-07', 'Quang Qui', '0877778819', 2, '2022-01-06 23:55:57', '2022-01-07 02:07:00');
INSERT INTO `dat_san` VALUES (18, 1, '2022-01-07', 'Quang Qui', '0877778819', 2, '2022-01-06 23:55:57', '2022-01-06 23:55:57');
INSERT INTO `dat_san` VALUES (19, 1, '2022-01-07', 'Quang Qui', '0877778819', 2, '2022-01-06 23:58:15', '2022-01-06 23:58:15');
INSERT INTO `dat_san` VALUES (20, 1, '2022-01-07', 'Quang Qui', '0877778819', 2, '2022-01-06 23:58:15', '2022-01-06 23:58:15');
INSERT INTO `dat_san` VALUES (21, 1, '2022-01-07', 'Quang Qui', '0877778819', 2, '2022-01-06 23:58:15', '2022-01-06 23:58:15');
INSERT INTO `dat_san` VALUES (22, 1, '2022-01-07', 'Quang Qui', '0877778819', 2, '2022-01-06 23:58:15', '2022-01-06 23:58:15');
INSERT INTO `dat_san` VALUES (23, 1, '2022-01-07', 'Quang Qui', '0877778819', 2, '2022-01-06 23:58:15', '2022-01-06 23:58:15');
INSERT INTO `dat_san` VALUES (24, 1, '2022-01-07', 'Quang Qui', '0877778819', 2, '2022-01-07 01:46:39', '2022-01-07 01:46:39');
INSERT INTO `dat_san` VALUES (25, 1, '2022-01-07', 'Quang Qui', '0877778819', 2, '2022-01-07 01:51:45', '2022-01-07 01:51:45');
INSERT INTO `dat_san` VALUES (26, 1, '2022-01-07', 'Quang Qui', '0877778819', 2, '2022-01-07 01:51:45', '2022-01-07 01:51:45');
INSERT INTO `dat_san` VALUES (27, 1, '2022-01-10', 'Quang Qui', '0877778819', 2, '2022-01-10 01:11:20', '2022-01-10 01:11:20');
INSERT INTO `dat_san` VALUES (28, 1, '2022-01-10', 'Quang Qui', '0877778819', 2, '2022-01-10 01:11:20', '2022-01-10 01:11:20');
INSERT INTO `dat_san` VALUES (30, 1, '2022-01-11', 'Quang Qui', '0877778819', 3, '2022-01-11 03:54:27', '2022-01-11 04:56:50');
INSERT INTO `dat_san` VALUES (31, 1, '2022-01-11', 'Quang Qui', '0877778819', 2, '2022-01-11 03:54:27', '2022-01-11 03:54:27');
INSERT INTO `dat_san` VALUES (32, 1, '2022-01-11', 'Quang Qui', '0877778819', 2, '2022-01-11 04:56:34', '2022-01-11 04:56:34');
INSERT INTO `dat_san` VALUES (34, 1, '2022-01-17', 'Quang Qui', '0877778819', 2, '2022-01-17 07:30:04', '2022-01-17 07:30:04');
INSERT INTO `dat_san` VALUES (35, 14, '2022-01-17', 'Anh Khoa', '065072230', 2, '2022-01-17 07:32:35', '2022-01-17 07:32:35');
INSERT INTO `dat_san` VALUES (36, 15, '2022-01-17', 'abc', '123', 2, '2022-01-17 09:01:36', '2022-01-17 09:01:36');
INSERT INTO `dat_san` VALUES (37, 16, '2022-01-17', 'dcsdc', '0836707111', 2, '2022-01-17 09:23:39', '2022-01-17 09:23:39');
INSERT INTO `dat_san` VALUES (38, 1, '2022-01-17', 'Quang Qui', '0877778819', 2, '2022-01-17 10:02:11', '2022-01-17 10:02:11');
INSERT INTO `dat_san` VALUES (39, 25, '2022-01-17', 'Trần Quang Phú', '0839641618', 2, '2022-01-17 10:39:41', '2022-01-17 10:39:41');
INSERT INTO `dat_san` VALUES (40, 17, '2022-01-17', 'daica', '08897643535', 2, '2022-01-17 12:52:14', '2022-01-17 12:52:14');
INSERT INTO `dat_san` VALUES (41, 1, '2022-01-18', 'Quang Qui', '0877778819', 2, '2022-01-18 08:37:54', '2022-01-18 08:37:54');
INSERT INTO `dat_san` VALUES (42, 1, '2022-01-19', 'Quang Qui', '0877778819', 2, '2022-01-19 13:36:47', '2022-01-19 13:36:47');
INSERT INTO `dat_san` VALUES (43, 29, '2022-01-19', 'văn quý thọ', '0889198108', 2, '2022-01-19 13:49:09', '2022-01-19 13:49:09');
INSERT INTO `dat_san` VALUES (44, 29, '2022-01-19', 'văn quý thọ', '0889198108', 2, '2022-01-19 13:49:09', '2022-01-19 13:49:09');
INSERT INTO `dat_san` VALUES (45, 1, '2022-01-20', 'Quang Qui', '0877778819', 2, '2022-01-20 02:28:49', '2022-01-20 02:28:49');
INSERT INTO `dat_san` VALUES (47, 3, '2022-02-17', 'Quang Huy', '0988899999', 2, '2022-02-17 13:11:34', '2022-02-17 13:11:34');
INSERT INTO `dat_san` VALUES (50, 3, '2022-02-17', 'Quang Huy', '0988899999', 2, '2022-02-17 13:26:04', '2022-02-17 13:26:04');
INSERT INTO `dat_san` VALUES (52, 3, '2022-02-17', 'Quang Huy', '0988899999', 2, '2022-02-17 13:38:17', '2022-02-17 13:38:17');
INSERT INTO `dat_san` VALUES (53, 3, '2022-02-17', 'Quang Huy', '0988899999', 2, '2022-02-17 13:47:41', '2022-02-17 13:47:41');
INSERT INTO `dat_san` VALUES (54, 3, '2022-02-17', 'Quang Huy', '0988899999', 2, '2022-02-17 13:47:41', '2022-02-17 13:47:41');
INSERT INTO `dat_san` VALUES (55, 3, '2022-02-17', 'Quang Huy', '0988899999', 2, '2022-02-17 13:47:41', '2022-02-17 13:47:41');
INSERT INTO `dat_san` VALUES (56, 1, '2022-02-18', 'Quang Qui', '0877778819', 2, '2022-02-18 00:38:35', '2022-02-18 00:38:35');
INSERT INTO `dat_san` VALUES (57, 1, '2022-02-18', 'Quang Qui', '0877778819', 2, '2022-02-18 00:38:35', '2022-02-18 00:38:35');
INSERT INTO `dat_san` VALUES (58, 1, '2022-02-18', 'Quang Qui', '0877778819', 2, '2022-02-18 00:38:35', '2022-02-18 00:38:35');

-- ----------------------------
-- Table structure for dich_vu
-- ----------------------------
DROP TABLE IF EXISTS `dich_vu`;
CREATE TABLE `dich_vu`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ma_loai_dv` int(11) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_tien` double(8, 2) NOT NULL,
  `don_vi` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `ma_loai_dv`(`ma_loai_dv`) USING BTREE,
  INDEX `id`(`id`) USING BTREE,
  CONSTRAINT `ma_loai_dv` FOREIGN KEY (`ma_loai_dv`) REFERENCES `loai_dich_vu` (`ma_dv`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of dich_vu
-- ----------------------------
INSERT INTO `dich_vu` VALUES (1, 1, 'Nước khoáng lạc', 10000.00, 100, NULL, NULL);
INSERT INTO `dich_vu` VALUES (2, 2, 'Nước lọc', 5000.00, 100, NULL, NULL);

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for gia_theo_khung_gio
-- ----------------------------
DROP TABLE IF EXISTS `gia_theo_khung_gio`;
CREATE TABLE `gia_theo_khung_gio`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ma_loai_san` bigint(20) UNSIGNED NOT NULL,
  `khung_gio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `gia_tien` double(8, 2) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `ma_loai_san`(`ma_loai_san`) USING BTREE,
  CONSTRAINT `gia_theo_khung_gio_ibfk_1` FOREIGN KEY (`ma_loai_san`) REFERENCES `loai_san` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of gia_theo_khung_gio
-- ----------------------------
INSERT INTO `gia_theo_khung_gio` VALUES (1, 1, '05:00-06:00', NULL, 200000.00, NULL, '2022-01-17 03:16:26');
INSERT INTO `gia_theo_khung_gio` VALUES (2, 1, '06:00-07:00', NULL, 220000.00, NULL, NULL);
INSERT INTO `gia_theo_khung_gio` VALUES (3, 1, '07:00-08:00', NULL, 220000.00, NULL, NULL);
INSERT INTO `gia_theo_khung_gio` VALUES (4, 1, '08:00-09:00', NULL, 220000.00, NULL, NULL);
INSERT INTO `gia_theo_khung_gio` VALUES (5, 1, '09:00-10:00', NULL, 220000.00, NULL, NULL);
INSERT INTO `gia_theo_khung_gio` VALUES (6, 1, '14:00-15:00', NULL, 240000.00, NULL, NULL);
INSERT INTO `gia_theo_khung_gio` VALUES (7, 1, '15:00-16:00', NULL, 240000.00, NULL, NULL);
INSERT INTO `gia_theo_khung_gio` VALUES (8, 1, '16:00-17:00', NULL, 280000.00, NULL, NULL);
INSERT INTO `gia_theo_khung_gio` VALUES (9, 1, '17:00-18:00', NULL, 300000.00, NULL, NULL);
INSERT INTO `gia_theo_khung_gio` VALUES (10, 1, '18:00-19:00', NULL, 320000.00, NULL, NULL);
INSERT INTO `gia_theo_khung_gio` VALUES (11, 1, '19:00-20:00', NULL, 320000.00, NULL, NULL);
INSERT INTO `gia_theo_khung_gio` VALUES (12, 1, '20:00-21:00', NULL, 340000.00, NULL, NULL);
INSERT INTO `gia_theo_khung_gio` VALUES (13, 1, '21:00-22:00', NULL, 340000.00, NULL, NULL);
INSERT INTO `gia_theo_khung_gio` VALUES (14, 1, '22:00-23:00', NULL, 360000.00, NULL, NULL);
INSERT INTO `gia_theo_khung_gio` VALUES (15, 1, '23:00-24:00', NULL, 360000.00, NULL, NULL);
INSERT INTO `gia_theo_khung_gio` VALUES (16, 1, '10:00-11:00', NULL, 250000.00, NULL, NULL);

-- ----------------------------
-- Table structure for loai_dich_vu
-- ----------------------------
DROP TABLE IF EXISTS `loai_dich_vu`;
CREATE TABLE `loai_dich_vu`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ma_dv` int(11) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `ma_dv`(`ma_dv`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of loai_dich_vu
-- ----------------------------
INSERT INTO `loai_dich_vu` VALUES (1, 1, 'Nước khoáng', NULL, NULL);
INSERT INTO `loai_dich_vu` VALUES (2, 2, 'Nước lọc', NULL, NULL);
INSERT INTO `loai_dich_vu` VALUES (3, 3, 'Nước chanh muối', NULL, NULL);

-- ----------------------------
-- Table structure for loai_san
-- ----------------------------
DROP TABLE IF EXISTS `loai_san`;
CREATE TABLE `loai_san`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_luong_nguoi_da` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_san` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `ma_san`(`ma_san`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of loai_san
-- ----------------------------
INSERT INTO `loai_san` VALUES (1, 'Sân 5', '5 người', 1, NULL, NULL);
INSERT INTO `loai_san` VALUES (2, 'Sân 7', '7 người', 2, NULL, NULL);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2021_11_09_021307_create_quyen_table', 1);
INSERT INTO `migrations` VALUES (5, '2021_11_09_021504_create_quidinh_table', 1);
INSERT INTO `migrations` VALUES (6, '2021_11_09_021544_create_taikhoan_table', 1);
INSERT INTO `migrations` VALUES (7, '2021_11_09_021615_create_loaisan_table', 1);
INSERT INTO `migrations` VALUES (8, '2021_11_09_021636_create_san_table', 1);
INSERT INTO `migrations` VALUES (9, '2021_11_09_021702_create_dichvu_table', 1);
INSERT INTO `migrations` VALUES (10, '2021_11_09_021844_create_loaidichvu_table', 1);
INSERT INTO `migrations` VALUES (11, '2021_11_09_022011_create_chitietdatsan_table', 1);
INSERT INTO `migrations` VALUES (12, '2021_12_16_030159_create_chitietdichvu_table', 1);
INSERT INTO `migrations` VALUES (13, '2021_12_16_030401_create_giatheokhunggio_table', 1);
INSERT INTO `migrations` VALUES (14, '2021_12_16_030751_create_trangthaidatsan_table', 1);
INSERT INTO `migrations` VALUES (15, '2021_12_16_030936_create_datsan_table', 1);
INSERT INTO `migrations` VALUES (16, '2021_12_28_032741_create_payments_table', 2);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for quyen
-- ----------------------------
DROP TABLE IF EXISTS `quyen`;
CREATE TABLE `quyen`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_quyen` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `ma_quyen`(`ma_quyen`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of quyen
-- ----------------------------
INSERT INTO `quyen` VALUES (1, 'Quản lý', 0, NULL, NULL);
INSERT INTO `quyen` VALUES (2, 'Nhân viên', 1, NULL, NULL);
INSERT INTO `quyen` VALUES (3, 'Khách hàng', 2, NULL, NULL);

-- ----------------------------
-- Table structure for san
-- ----------------------------
DROP TABLE IF EXISTS `san`;
CREATE TABLE `san`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ma_loai_san` int(11) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `ma_loai_san`(`ma_loai_san`) USING BTREE,
  CONSTRAINT `ma_loai_san` FOREIGN KEY (`ma_loai_san`) REFERENCES `loai_san` (`ma_san`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of san
-- ----------------------------
INSERT INTO `san` VALUES (1, 1, 'Sân 5A', 'Sân 5A', NULL, NULL);
INSERT INTO `san` VALUES (3, 1, 'Sân 5B', '5B', NULL, NULL);
INSERT INTO `san` VALUES (4, 1, 'Sân 5C', '5C', NULL, NULL);
INSERT INTO `san` VALUES (5, 1, 'Sân 5D', '5D', NULL, NULL);
INSERT INTO `san` VALUES (6, 1, 'Sân 5E', '5E', NULL, NULL);

-- ----------------------------
-- Table structure for tai_khoan
-- ----------------------------
DROP TABLE IF EXISTS `tai_khoan`;
CREATE TABLE `tai_khoan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `ngay_sinh` date NULL DEFAULT NULL,
  `dia_chi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sdt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioi_tinh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `quoc_tich` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `ngay_lam_viec` date NULL DEFAULT NULL,
  `ma_quyen` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `tai_khoan_email_unique`(`email`) USING BTREE,
  INDEX `ma_quyen`(`ma_quyen`) USING BTREE,
  CONSTRAINT `ma_quyen` FOREIGN KEY (`ma_quyen`) REFERENCES `quyen` (`ma_quyen`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 30 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tai_khoan
-- ----------------------------
INSERT INTO `tai_khoan` VALUES (1, 'Quang Qui', 'qui@gmail.com', '$2y$10$uvdGmf0Q1PrcVD8om/N7meWFDJsowuO0W5H8wj1GEOrWZFtVNxe7i', '2000-01-02', 'Quang Nam', '0877778819', 'Nam', 'Viet Nam', NULL, 2, '2021-12-22 13:17:13', '2022-01-06 23:44:25');
INSERT INTO `tai_khoan` VALUES (3, 'Quang Huy', 'huy@gmail.com', '$2y$10$CUpzakphQ3NDwlXaXLZYROdGg3u/ZWVnyYONVQV1SjEliyF/Q7lfW', '2021-12-31', 'Quang Nam', '0988899999', 'Nam', 'Viet Nam', NULL, 2, '2021-12-28 06:44:23', '2021-12-31 03:17:58');
INSERT INTO `tai_khoan` VALUES (5, 'Nguyễn Duy Vinh', 'vinh@gmail.com', '$2y$10$9dou.ZBtiS4qdLONdExWvOakvnnHeyLUg0S.V2MWtIKEVXRGimhmm', '2001-01-31', 'Da Nang', '0935456789', 'Nam', 'Viet Nam', NULL, 2, '2021-12-31 00:35:58', '2021-12-31 00:48:07');
INSERT INTO `tai_khoan` VALUES (6, 'Huy Tran', NULL, NULL, '2022-01-01', 'Da Nang', '0877778819', 'Nam', 'Viet Nam', NULL, 2, '2022-01-06 07:47:11', '2022-01-06 07:47:11');
INSERT INTO `tai_khoan` VALUES (10, 'Quản lý', 'admin@gmail.com', '$2y$10$AjXOQE0LgM6Y5iqik2a/9eSozrP7yyaTKiSfa35nNnyfXCR6DfAWi', NULL, 'Da Nang', '0877778888', NULL, 'Viet Nam', NULL, 0, '2022-01-07 01:55:30', '2022-01-07 01:58:02');
INSERT INTO `tai_khoan` VALUES (11, 'Nhân viên', 'personnel@gmail.com', '$2y$10$haFCdxamT1QLopLqpgxPzu7YSWlVuPLDI230nhR/g2x65tDfTKKoG', NULL, NULL, '0707079999', NULL, NULL, NULL, 1, '2022-01-07 02:05:26', '2022-01-07 02:05:26');
INSERT INTO `tai_khoan` VALUES (13, 'Nhân viên', 'nhanvien@gmail.com', '$2y$10$S5tlqaX470cy2wOVwg.8IeFQJpuNtNoA8RRLz2Uv6fW4E475Q98Z.', NULL, NULL, '0877777777', NULL, NULL, NULL, 1, '2022-01-11 03:58:15', '2022-01-11 03:58:15');
INSERT INTO `tai_khoan` VALUES (14, 'Anh Khoa', 'nvanhkhoa148@gmail.com', '$2y$10$CpqK6/RKlJI/dWOPWElUEuYJpreeUiw0YZ3Wo8Io1TJQHGUYZwCEi', NULL, NULL, '065072230', NULL, NULL, NULL, 2, '2022-01-17 07:30:11', '2022-01-17 07:30:11');
INSERT INTO `tai_khoan` VALUES (15, 'abc', 'abc@gmail.com', '$2y$10$M/R.elEZkv8x9GUlSG5rh.8N/GZgTCiCpqA9bltO5RoM4Ni2tKwNO', NULL, NULL, '123', NULL, NULL, NULL, 2, '2022-01-17 08:43:34', '2022-01-17 08:43:34');
INSERT INTO `tai_khoan` VALUES (16, 'dcsdc', 'voanhnguyen1323@gmail.com', '$2y$10$8KJ10Svtsh/NmsBrG6buyOTCWTc2jS12NBVz5DxyWqyfYtW4.AfZa', NULL, NULL, '0836707111', NULL, NULL, NULL, 2, '2022-01-17 09:21:10', '2022-01-17 09:21:10');
INSERT INTO `tai_khoan` VALUES (17, 'daica', 'daica@gmail.com', '$2y$10$bNA1DhBKh1BcbxTVgDEll.crK/Ka4T2JAkUlLgI9Mgeyd.hIN.Jqi', NULL, NULL, '08897643535', NULL, NULL, NULL, 2, '2022-01-17 09:24:22', '2022-01-17 09:24:22');
INSERT INTO `tai_khoan` VALUES (21, 'Minh Tâm', 'tam@gmail.com', '$2y$10$ha3q0DOZ9Vccu5zCBWlvkusvLKe/aUOS4LIl8DXNZt4hhg8l1I.D.', NULL, NULL, '00099999', NULL, NULL, NULL, 2, '2022-01-17 09:28:34', '2022-01-17 09:28:34');
INSERT INTO `tai_khoan` VALUES (22, 'Quang Huy Tran', 'huytran@gmail.com', '$2y$10$cIdAfdCJG.M.3MMwuOYa.eBOlEjXgy0sen5bnfobSqVdAzVGmGdR6', NULL, NULL, '11112345667', NULL, NULL, NULL, 2, '2022-01-17 09:32:49', '2022-01-17 09:32:49');
INSERT INTO `tai_khoan` VALUES (23, 'Tung', 'tung@gmail.com', '$2y$10$sAkBLpDM2sR5wu30BrqBMuiJsD2K0ZoBcNbYQLpbb7OsPG7SeXMBm', NULL, NULL, '0877778819', NULL, NULL, NULL, 2, '2022-01-17 09:33:29', '2022-01-17 09:33:29');
INSERT INTO `tai_khoan` VALUES (24, 'Võ Nguyên', 'Voanhnguyenxd@gmail.com', '$2y$10$Zdh37wYRPthLSQ2BsCnbRO4yyhu/ljsnX5w/RwJK4ug2pQlGmdGzG', NULL, NULL, '0889196554', NULL, NULL, NULL, 2, '2022-01-17 10:16:18', '2022-01-17 10:16:18');
INSERT INTO `tai_khoan` VALUES (25, 'Trần Quang Phú', 'tranquangphu29@gmail.com', '$2y$10$Hes.tJRBtxiJYa.SRffrJ.GepPilsDBQ2iKX6/RL3jagZf16CU42G', '2022-01-01', 'Da Nang', '0839641618', 'Nam', 'Viet Nam', NULL, 2, '2022-01-17 10:34:48', '2022-01-20 02:38:54');
INSERT INTO `tai_khoan` VALUES (27, 'Quản lý', 'quanly@gmail.com', '$2y$10$GGo91UdV/tngKYm.VexUmuQknf7Z3//C.na6y2PSO/p3g6csX5U/i', NULL, NULL, '0877778819', NULL, NULL, NULL, 0, '2022-01-17 23:58:27', '2022-01-17 23:58:27');
INSERT INTO `tai_khoan` VALUES (28, 'Van Tu', 'tu@gmail.com', '$2y$10$93uwHJWUcRvnwAGGg2M72ecANLCr8hBOhwpCaq2t64VMpF2yewcSe', '2022-01-01', 'Quang Nam', '0877777777', 'Nam', 'Viet Nam', NULL, 2, '2022-01-18 08:39:26', '2022-01-20 02:38:40');
INSERT INTO `tai_khoan` VALUES (29, 'văn quý thọ', 'vanquytho12345@gmail.com', '$2y$10$mqKX7olIxKOPmItoeKiuw./.44IeVbv009ba12SizhoHKSPjhb08G', '2022-01-01', 'Da Nang', '0889198108', 'Nam', 'Viet Nam', NULL, 2, '2022-01-19 13:45:49', '2022-01-20 02:38:30');

-- ----------------------------
-- Table structure for trang_thai_dat_san
-- ----------------------------
DROP TABLE IF EXISTS `trang_thai_dat_san`;
CREATE TABLE `trang_thai_dat_san`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ma_trang_thai` int(11) NOT NULL,
  `ten_trang_thai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `ma_trang_thai`(`ma_trang_thai`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of trang_thai_dat_san
-- ----------------------------
INSERT INTO `trang_thai_dat_san` VALUES (2, 2, 'Đã đặt', NULL, NULL);
INSERT INTO `trang_thai_dat_san` VALUES (3, 3, 'Đã hủy', NULL, NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;

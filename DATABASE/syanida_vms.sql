/*
 Navicat Premium Data Transfer

 Source Server         : 10.194.51.88-Profiling TBB
 Source Server Type    : MySQL
 Source Server Version : 50173
 Source Host           : 10.194.51.88:3306
 Source Schema         : syanida_vms

 Target Server Type    : MySQL
 Target Server Version : 50173
 File Encoding         : 65001

 Date: 24/09/2021 11:12:22
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for sys_authorized
-- ----------------------------
DROP TABLE IF EXISTS `sys_authorized`;
CREATE TABLE `sys_authorized`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_level` int(11) NULL DEFAULT NULL,
  `id_form` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `iid`(`id`) USING BTREE,
  INDEX `ilevel`(`id_level`, `id_form`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 308 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of sys_authorized
-- ----------------------------
INSERT INTO `sys_authorized` VALUES (30, 1, 1);
INSERT INTO `sys_authorized` VALUES (1, 1, 2);
INSERT INTO `sys_authorized` VALUES (2, 1, 3);
INSERT INTO `sys_authorized` VALUES (3, 1, 4);
INSERT INTO `sys_authorized` VALUES (4, 1, 5);
INSERT INTO `sys_authorized` VALUES (5, 1, 6);
INSERT INTO `sys_authorized` VALUES (6, 1, 7);
INSERT INTO `sys_authorized` VALUES (7, 1, 8);
INSERT INTO `sys_authorized` VALUES (8, 1, 9);
INSERT INTO `sys_authorized` VALUES (9, 1, 10);
INSERT INTO `sys_authorized` VALUES (10, 1, 11);
INSERT INTO `sys_authorized` VALUES (11, 1, 12);
INSERT INTO `sys_authorized` VALUES (12, 1, 13);
INSERT INTO `sys_authorized` VALUES (13, 1, 14);
INSERT INTO `sys_authorized` VALUES (14, 1, 15);
INSERT INTO `sys_authorized` VALUES (15, 1, 16);
INSERT INTO `sys_authorized` VALUES (16, 1, 17);
INSERT INTO `sys_authorized` VALUES (17, 1, 18);
INSERT INTO `sys_authorized` VALUES (18, 1, 19);
INSERT INTO `sys_authorized` VALUES (19, 1, 20);
INSERT INTO `sys_authorized` VALUES (20, 1, 21);
INSERT INTO `sys_authorized` VALUES (21, 1, 22);
INSERT INTO `sys_authorized` VALUES (22, 1, 23);
INSERT INTO `sys_authorized` VALUES (23, 1, 24);
INSERT INTO `sys_authorized` VALUES (24, 1, 25);
INSERT INTO `sys_authorized` VALUES (25, 1, 26);
INSERT INTO `sys_authorized` VALUES (27, 1, 28);
INSERT INTO `sys_authorized` VALUES (28, 1, 29);
INSERT INTO `sys_authorized` VALUES (29, 1, 30);
INSERT INTO `sys_authorized` VALUES (31, 1, 31);
INSERT INTO `sys_authorized` VALUES (32, 1, 32);
INSERT INTO `sys_authorized` VALUES (33, 1, 33);
INSERT INTO `sys_authorized` VALUES (34, 1, 34);
INSERT INTO `sys_authorized` VALUES (35, 1, 35);
INSERT INTO `sys_authorized` VALUES (36, 1, 36);
INSERT INTO `sys_authorized` VALUES (37, 1, 37);
INSERT INTO `sys_authorized` VALUES (38, 1, 38);
INSERT INTO `sys_authorized` VALUES (39, 1, 39);
INSERT INTO `sys_authorized` VALUES (40, 1, 40);
INSERT INTO `sys_authorized` VALUES (41, 1, 41);
INSERT INTO `sys_authorized` VALUES (42, 1, 42);
INSERT INTO `sys_authorized` VALUES (43, 1, 43);
INSERT INTO `sys_authorized` VALUES (44, 1, 44);
INSERT INTO `sys_authorized` VALUES (45, 1, 45);
INSERT INTO `sys_authorized` VALUES (46, 1, 46);
INSERT INTO `sys_authorized` VALUES (47, 1, 47);
INSERT INTO `sys_authorized` VALUES (48, 1, 48);
INSERT INTO `sys_authorized` VALUES (49, 1, 49);
INSERT INTO `sys_authorized` VALUES (50, 1, 50);
INSERT INTO `sys_authorized` VALUES (51, 1, 51);
INSERT INTO `sys_authorized` VALUES (52, 1, 52);
INSERT INTO `sys_authorized` VALUES (53, 1, 53);
INSERT INTO `sys_authorized` VALUES (54, 1, 54);
INSERT INTO `sys_authorized` VALUES (55, 1, 55);
INSERT INTO `sys_authorized` VALUES (56, 1, 56);
INSERT INTO `sys_authorized` VALUES (57, 1, 57);
INSERT INTO `sys_authorized` VALUES (58, 1, 58);
INSERT INTO `sys_authorized` VALUES (59, 1, 59);
INSERT INTO `sys_authorized` VALUES (60, 1, 60);
INSERT INTO `sys_authorized` VALUES (61, 1, 61);
INSERT INTO `sys_authorized` VALUES (62, 1, 62);
INSERT INTO `sys_authorized` VALUES (63, 1, 63);
INSERT INTO `sys_authorized` VALUES (64, 1, 64);
INSERT INTO `sys_authorized` VALUES (65, 1, 65);
INSERT INTO `sys_authorized` VALUES (66, 1, 66);
INSERT INTO `sys_authorized` VALUES (67, 1, 67);
INSERT INTO `sys_authorized` VALUES (68, 1, 68);
INSERT INTO `sys_authorized` VALUES (69, 1, 69);
INSERT INTO `sys_authorized` VALUES (70, 1, 70);
INSERT INTO `sys_authorized` VALUES (71, 1, 71);
INSERT INTO `sys_authorized` VALUES (72, 1, 72);
INSERT INTO `sys_authorized` VALUES (73, 1, 73);
INSERT INTO `sys_authorized` VALUES (74, 1, 74);
INSERT INTO `sys_authorized` VALUES (75, 1, 75);
INSERT INTO `sys_authorized` VALUES (293, 1, 90);
INSERT INTO `sys_authorized` VALUES (294, 1, 111);
INSERT INTO `sys_authorized` VALUES (295, 1, 112);
INSERT INTO `sys_authorized` VALUES (296, 1, 113);
INSERT INTO `sys_authorized` VALUES (297, 1, 128);
INSERT INTO `sys_authorized` VALUES (301, 1, 129);
INSERT INTO `sys_authorized` VALUES (302, 1, 130);
INSERT INTO `sys_authorized` VALUES (303, 1, 131);
INSERT INTO `sys_authorized` VALUES (304, 1, 132);
INSERT INTO `sys_authorized` VALUES (108, 6, 76);
INSERT INTO `sys_authorized` VALUES (109, 6, 77);
INSERT INTO `sys_authorized` VALUES (110, 6, 78);
INSERT INTO `sys_authorized` VALUES (209, 7, 105);
INSERT INTO `sys_authorized` VALUES (305, 8, 90);
INSERT INTO `sys_authorized` VALUES (306, 8, 128);
INSERT INTO `sys_authorized` VALUES (307, 8, 130);
INSERT INTO `sys_authorized` VALUES (300, 9, 128);
INSERT INTO `sys_authorized` VALUES (280, 10, 90);
INSERT INTO `sys_authorized` VALUES (281, 10, 116);

-- ----------------------------
-- Table structure for sys_authorized_menu
-- ----------------------------
DROP TABLE IF EXISTS `sys_authorized_menu`;
CREATE TABLE `sys_authorized_menu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_level` int(11) NULL DEFAULT NULL,
  `id_menu` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 288 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of sys_authorized_menu
-- ----------------------------
INSERT INTO `sys_authorized_menu` VALUES (1, 1, 1);
INSERT INTO `sys_authorized_menu` VALUES (2, 1, 2);
INSERT INTO `sys_authorized_menu` VALUES (3, 1, 3);
INSERT INTO `sys_authorized_menu` VALUES (4, 1, 4);
INSERT INTO `sys_authorized_menu` VALUES (5, 1, 5);
INSERT INTO `sys_authorized_menu` VALUES (6, 1, 6);
INSERT INTO `sys_authorized_menu` VALUES (287, 1, 113);

-- ----------------------------
-- Table structure for sys_complite
-- ----------------------------
DROP TABLE IF EXISTS `sys_complite`;
CREATE TABLE `sys_complite`  (
  `id` int(11) NOT NULL,
  `complite` char(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of sys_complite
-- ----------------------------

-- ----------------------------
-- Table structure for sys_dashboard
-- ----------------------------
DROP TABLE IF EXISTS `sys_dashboard`;
CREATE TABLE `sys_dashboard`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_form` int(11) NULL DEFAULT NULL,
  `id_user` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `i_user`(`id_user`) USING BTREE,
  INDEX `i_id`(`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of sys_dashboard
-- ----------------------------

-- ----------------------------
-- Table structure for sys_form
-- ----------------------------
DROP TABLE IF EXISTS `sys_form`;
CREATE TABLE `sys_form`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` char(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `link` char(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `form_name` char(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `shortcut` int(11) NULL DEFAULT NULL COMMENT '1=YA, 2=TIDAK\r\nAkses langsung halaman melalui exekusi kode',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `iid`(`id`) USING BTREE,
  INDEX `icode`(`code`) USING BTREE,
  INDEX `ilink`(`link`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 133 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of sys_form
-- ----------------------------
INSERT INTO `sys_form` VALUES (1, '000', '#', '--NO LINK--', 1);
INSERT INTO `sys_form` VALUES (2, 'SP', 'sistem/Pengaturan', 'SISTEM : Daftar Menu Pengaturan Sistem', 1);
INSERT INTO `sys_form` VALUES (3, 'SPMM', 'sistem/Pengaturan_tampilan/menu_management', 'SISTEM : Daftar Menu Management', 1);
INSERT INTO `sys_form` VALUES (4, 'SPMM01', 'sistem/Pengaturan_tampilan/create_menu', 'SISTEM : Form Buat Menu Baru', 1);
INSERT INTO `sys_form` VALUES (5, 'SPMM02', 'sistem/Pengaturan_tampilan/create_menu_action', 'SISTEM : Action Simpan  Menu Baru', 2);
INSERT INTO `sys_form` VALUES (6, 'SPMM03', 'sistem/Pengaturan_tampilan/update_menu', 'SISTEM : Form Update Menu', 2);
INSERT INTO `sys_form` VALUES (7, 'SPMM04', 'sistem/Pengaturan_tampilan/update_action', 'SISTEM : Action Simpan Update Menu', 2);
INSERT INTO `sys_form` VALUES (8, 'SPMM05', 'sistem/Pengaturan_tampilan/delete_multiple', 'SISTEM : Action Hapus Menu', 2);
INSERT INTO `sys_form` VALUES (9, 'SPR', 'sistem/Registrasi_form', 'SISTEM : Daftar Registrasi URL', 1);
INSERT INTO `sys_form` VALUES (10, 'SPR01', 'sistem/Registrasi_form/create', 'SISTEM : Form Buat Registrasi URL Baru', 1);
INSERT INTO `sys_form` VALUES (11, 'SPR02', 'sistem/Registrasi_form/create_action', 'SISTEM : Actionl Simpan Registrasi URL Baru', 2);
INSERT INTO `sys_form` VALUES (12, 'SPR03', 'sistem/Registrasi_form/update', 'SISTEM : Form  Update Registrasi', 2);
INSERT INTO `sys_form` VALUES (13, 'SPR04', 'sistem/Registrasi_form/update_action', 'SISTEM : Action Simpan Update Registrasi', 2);
INSERT INTO `sys_form` VALUES (14, 'SPR05', 'sistem/Registrasi_form/delete_multiple', 'SISTEM : Action  Hapus Registrasi', 2);
INSERT INTO `sys_form` VALUES (15, 'SPL', 'sistem/Pengaturan_level', 'SISTEM : Daftar Level', 1);
INSERT INTO `sys_form` VALUES (16, 'SPL01', 'sistem/Pengaturan_level/create', 'SISTEM : Form  Buat Level Konfigurasi Baru', 1);
INSERT INTO `sys_form` VALUES (17, 'SPL02', 'sistem/Pengaturan_level/create_action', 'SISTEM : Action Simpan  Level Konfigurasi Baru', 2);
INSERT INTO `sys_form` VALUES (18, 'SPL03', 'sistem/Pengaturan_level/update', 'SISTEM : Form Update Level', 2);
INSERT INTO `sys_form` VALUES (19, 'SPL04', 'sistem/Pengaturan_level/update_action', 'SISTEM : Action Simpan Update Level', 2);
INSERT INTO `sys_form` VALUES (20, 'SPL05', 'sistem/Pengaturan_level/delete_multiple', 'SISTEM : Action Hapus Level', 2);
INSERT INTO `sys_form` VALUES (21, 'SPU', 'sistem/Pengaturan_pengguna', 'SISTEM : Daftar User', 1);
INSERT INTO `sys_form` VALUES (22, 'SPU01', 'sistem/Pengaturan_pengguna/create', 'SISTEM : Form Buat User Baru', 1);
INSERT INTO `sys_form` VALUES (23, 'SPU02', 'sistem/Pengaturan_pengguna/create_action', 'SISTEM : Action Simpan User Baru', 2);
INSERT INTO `sys_form` VALUES (24, 'SPU03', 'sistem/Pengaturan_pengguna/update', 'SISTEM : Form Update User', 2);
INSERT INTO `sys_form` VALUES (25, 'SPU04', 'sistem/Pengaturan_pengguna/update_action', 'SISTEM : Action Simpan Update User', 2);
INSERT INTO `sys_form` VALUES (26, 'SPU05', 'sistem/Pengaturan_pengguna/delete_multiple', 'SISTEM : Action  Hapus User', 2);
INSERT INTO `sys_form` VALUES (28, 'DSI', 'sistem/Dokumentasi/sample_icon', 'SISTEM DOKUMENTASI : Daftar Sample Icon', 1);
INSERT INTO `sys_form` VALUES (29, 'DPK', 'sistem/Dokumentasi/petunjuk_penggunaan', 'SISTEM DOKUMENTASI : Petunjuk Penggunaan', 1);
INSERT INTO `sys_form` VALUES (30, 'DSE', 'sistem/Dokumentasi/sample_element', 'SISTEM DOKUMENTASI : Sample Element', 1);
INSERT INTO `sys_form` VALUES (31, 'CRUD', 'sistem/Crud_generator', 'SISTEM : CRUD GENERATOR', 1);
INSERT INTO `sys_form` VALUES (32, 'DSED', 'sistem/Dokumentasi/sample_element_dropzone', 'SISTEM DOKUMENTASI : Sample Element Dropzone', 1);
INSERT INTO `sys_form` VALUES (33, 'DSEP', 'sistem/Dokumentasi/petunjuk_penggunaan_tahap_lanjut', 'SISTEM DOKUMENTASI : Petunjuk Penggunaan Tahap Lanjut', 1);
INSERT INTO `sys_form` VALUES (34, 'SECER', 'sistem/Keamanan/error_report', 'SISTEM KEAMANAN: Error Report', 1);
INSERT INTO `sys_form` VALUES (35, 'SECCSRF', 'sistem/Keamanan/csrf_protection', 'SISTEM KEAMANAN: CSRF Protection', 1);
INSERT INTO `sys_form` VALUES (36, 'SECINJ', 'sistem/Keamanan/monitoring_injection', 'SISTEM KEAMANAN: Monitoring Injection', 1);
INSERT INTO `sys_form` VALUES (37, 'SPU06', 'sistem/Pengaturan_pengguna/create_multiple', 'SISTEM : Form Buat User Baru From Excel', 1);
INSERT INTO `sys_form` VALUES (38, 'SPU07', 'sistem/Pengaturan_pengguna/download_template_user', 'SISTEM : Download Template User', 2);
INSERT INTO `sys_form` VALUES (39, 'STS', 'sistem/Template_system/style', 'SISTEM : Pengaturan Logo Template', 1);
INSERT INTO `sys_form` VALUES (40, 'STS01', 'sistem/Template_system/update_login_setting', 'SISTEM : Pengaturan Logo Template  - Update Logo Login', 2);
INSERT INTO `sys_form` VALUES (41, 'STS02', 'sistem/Template_system/update_template_setting', 'SISTEM : Pengaturan Logo Template  - Update Logo Template', 2);
INSERT INTO `sys_form` VALUES (42, 'DK01', 'sistem/Dokumentasi_109', 'SISTEM : Dokumentasi 1.0.9', 1);
INSERT INTO `sys_form` VALUES (43, 'DK02', 'sistem/Dokumentasi_109/general', 'SISTEM : Dokumentasi 1.0.9 - Introduce', 1);
INSERT INTO `sys_form` VALUES (44, 'DK03', 'sistem/Dokumentasi_109/system_requirtment', 'SISTEM : Dokumentasi 1.0.9 - System Reqruitment', 1);
INSERT INTO `sys_form` VALUES (45, 'DK04', 'sistem/Dokumentasi_109/pengaturan_menu', 'SISTEM : Dokumentasi 1.0.9 - Pengaturan Menu', 1);
INSERT INTO `sys_form` VALUES (46, 'DK05', 'sistem/Dokumentasi_109/pengaturan_template', 'SISTEM : Dokumentasi 1.0.9 - Pengaturan Template', 1);
INSERT INTO `sys_form` VALUES (47, 'DK06', 'sistem/Dokumentasi_109/registrasi_form', 'SISTEM : Dokumentasi 1.0.9 - Registrasi Form', 1);
INSERT INTO `sys_form` VALUES (48, 'DK07', 'sistem/Dokumentasi_109/level_konfigurasi', 'SISTEM : Dokumentasi 1.0.9 - Level Konfigurasi', 1);
INSERT INTO `sys_form` VALUES (49, 'DK08', 'sistem/Dokumentasi_109/user_konfigurasi', 'SISTEM : Dokumentasi 1.0.9 - User Konfigurasi', 1);
INSERT INTO `sys_form` VALUES (50, 'DK09', 'sistem/Dokumentasi_109/crud_generator', 'SISTEM : Dokumentasi 1.0.9 - CRUD Generator', 1);
INSERT INTO `sys_form` VALUES (51, 'DK10', 'sistem/Dokumentasi_109/error_report', 'SISTEM : Dokumentasi 1.0.9 - Error Report', 1);
INSERT INTO `sys_form` VALUES (52, 'DK11', 'sistem/Dokumentasi_109/csrf_protection', 'SISTEM : Dokumentasi 1.0.9 - CSRF Protection', 1);
INSERT INTO `sys_form` VALUES (53, 'DK12', 'sistem/Dokumentasi_109/front_end', 'SISTEM : Dokumentasi 1.0.9 - Front End', 1);
INSERT INTO `sys_form` VALUES (54, 'DK13', 'sistem/Dokumentasi_109/page_maintenance', 'SISTEM : Dokumentasi 1.0.9 - Page Maintenance', 1);
INSERT INTO `sys_form` VALUES (55, 'DK14', 'sistem/Dokumentasi_109/panduan_form', 'SISTEM : Dokumentasi 1.0.9 - Panduan Form', 1);
INSERT INTO `sys_form` VALUES (56, 'DK15', 'sistem/Dokumentasi_109/panduan_form_lanjutan', 'SISTEM : Dokumentasi 1.0.9 - Panduan Form Lanjutan', 1);
INSERT INTO `sys_form` VALUES (58, 'REGIP', 'sistem/Register_ip', 'SISTEM : Register IP', 1);
INSERT INTO `sys_form` VALUES (59, 'REGIP01', 'sistem/Register_ip/create', 'SISTEM : Register IP - Form Buat Baru', 1);
INSERT INTO `sys_form` VALUES (60, 'REGIP02', 'sistem/Register_ip/create_action', 'SISTEM : Register IP - Tombol Simpan Form Buat Baru', 2);
INSERT INTO `sys_form` VALUES (61, 'REGIP03', 'sistem/Register_ip/update', 'SISTEM : Register IP - Form Update', 2);
INSERT INTO `sys_form` VALUES (62, 'REGIP04', 'sistem/Register_ip/update_action', 'SISTEM : Register IP - Tombol Simpan Form Update', 2);
INSERT INTO `sys_form` VALUES (63, 'REGIP05', 'sistem/Register_ip/delete_multiple', 'SISTEM : Register IP - Hapus Data', 2);
INSERT INTO `sys_form` VALUES (64, 'MNTC01', 'sistem/Maintenance/maintenance_setting_list', 'SISTEM : MAINTENANCE - List Data', 1);
INSERT INTO `sys_form` VALUES (65, 'MNTC02', 'sistem/Maintenance/create', 'SISTEM : MAINTENANCE - Form Buat Baru', 1);
INSERT INTO `sys_form` VALUES (66, 'MNTC03', 'sistem/Maintenance/save_n_run', 'SISTEM : MAINTENANCE - Tombo Save n Run Form Buat Baru', 2);
INSERT INTO `sys_form` VALUES (67, 'MNTC04', 'sistem/Maintenance/download_urlkey', 'SISTEM : MAINTENANCE -  Tombol Download Key', 2);
INSERT INTO `sys_form` VALUES (68, 'MNTC05', 'sistem/Maintenance/delete_schedule', 'SISTEM : MAINTENANCE -  Delete Schedule', 2);
INSERT INTO `sys_form` VALUES (69, 'MNTC06', 'sistem/Maintenance/stop_maintenance', 'SISTEM : MAINTENANCE -  Stop Maintenance', 2);
INSERT INTO `sys_form` VALUES (70, 'SECFRN', 'sistem/Keamanan/access_front_end', 'SISTEM KEAMANAN: Access Front End', 1);
INSERT INTO `sys_form` VALUES (71, 'SECLOG', 'sistem/User_Log', 'SISTEM KEAMANAN: Login Activity', 1);
INSERT INTO `sys_form` VALUES (72, 'SECLOG01', 'sistem/User_Log/detail', 'SISTEM KEAMANAN: Login Activity - Detail', 2);
INSERT INTO `sys_form` VALUES (73, 'SECLOG02', 'sistem/User_Log/delete_multiple', 'SISTEM KEAMANAN: Login Activity - Hapus Log', 2);
INSERT INTO `sys_form` VALUES (74, 'DK16', 'sistem/Dokumentasi_109/panduan_upload_file', 'SISTEM : Dokumentasi 1.0.9 - Panduan Upload File', 1);
INSERT INTO `sys_form` VALUES (75, 'CRUD01', 'sistem/Crud_generator/generator_form', 'SISTEM : CRUD GENERATOR - Tombol Generate Form', 2);
INSERT INTO `sys_form` VALUES (131, 'mgt_vouche', 'T_mgtvoucher/T_mgtvoucher', 'mgt_voucher', 1);

-- ----------------------------
-- Table structure for sys_level
-- ----------------------------
DROP TABLE IF EXISTS `sys_level`;
CREATE TABLE `sys_level`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nmlevel` char(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `opt_status` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `iid`(`id`) USING BTREE,
  INDEX `inmlevel`(`nmlevel`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of sys_level
-- ----------------------------
INSERT INTO `sys_level` VALUES (1, 'Configurator', 1);
INSERT INTO `sys_level` VALUES (6, 'Administrator', 1);
INSERT INTO `sys_level` VALUES (7, 'SV', 1);
INSERT INTO `sys_level` VALUES (8, 'AGENT', 1);
INSERT INTO `sys_level` VALUES (9, 'Team Leader', 1);
INSERT INTO `sys_level` VALUES (10, 'Admin', 1);

-- ----------------------------
-- Table structure for sys_maintenance_ip
-- ----------------------------
DROP TABLE IF EXISTS `sys_maintenance_ip`;
CREATE TABLE `sys_maintenance_ip`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of sys_maintenance_ip
-- ----------------------------

-- ----------------------------
-- Table structure for sys_maintenance_mode
-- ----------------------------
DROP TABLE IF EXISTS `sys_maintenance_mode`;
CREATE TABLE `sys_maintenance_mode`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mode` int(11) NULL DEFAULT NULL COMMENT '0 = Disable maintenance,\r\n1 = Enable Maintenance',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of sys_maintenance_mode
-- ----------------------------
INSERT INTO `sys_maintenance_mode` VALUES (1, 0);

-- ----------------------------
-- Table structure for sys_maintenance_schedule
-- ----------------------------
DROP TABLE IF EXISTS `sys_maintenance_schedule`;
CREATE TABLE `sys_maintenance_schedule`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start` int(11) NULL DEFAULT NULL,
  `desc` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `actual_finish` int(11) NULL DEFAULT NULL,
  `days` int(11) NULL DEFAULT NULL,
  `hours` int(11) NULL DEFAULT NULL,
  `minutes` int(11) NULL DEFAULT NULL,
  `key` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of sys_maintenance_schedule
-- ----------------------------

-- ----------------------------
-- Table structure for sys_menu
-- ----------------------------
DROP TABLE IF EXISTS `sys_menu`;
CREATE TABLE `sys_menu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_form` int(11) NULL DEFAULT NULL,
  `name` char(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `icon` char(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `is_parent` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `iid`(`id`) USING BTREE,
  INDEX `iname`(`name`) USING BTREE,
  INDEX `iparent`(`is_parent`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 114 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of sys_menu
-- ----------------------------
INSERT INTO `sys_menu` VALUES (1, 1, 'Pengaturan', 'fe fe-box', 0);
INSERT INTO `sys_menu` VALUES (6, 2, 'Sistem', 'fe fe-activity', 1);
INSERT INTO `sys_menu` VALUES (81, 1, 'EBS SETTING', '#', 1);
INSERT INTO `sys_menu` VALUES (82, 1, 'RUNNING TEXT', '#', 1);
INSERT INTO `sys_menu` VALUES (83, 1, 'DEPARTEMENTS', '#', 1);
INSERT INTO `sys_menu` VALUES (84, 1, 'TODO', '#', 1);
INSERT INTO `sys_menu` VALUES (85, 1, 'KNOWLEDGEBASE', '#', 1);
INSERT INTO `sys_menu` VALUES (86, 1, 'MANAGE SKUM', '#', 1);
INSERT INTO `sys_menu` VALUES (87, 1, 'FLAT FILE POSINDO', '#', 1);
INSERT INTO `sys_menu` VALUES (113, 131, 'Voucher Management', 'fa fa-tags', 0);

-- ----------------------------
-- Table structure for sys_show
-- ----------------------------
DROP TABLE IF EXISTS `sys_show`;
CREATE TABLE `sys_show`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `show` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `ishow`(`show`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of sys_show
-- ----------------------------

-- ----------------------------
-- Table structure for sys_status
-- ----------------------------
DROP TABLE IF EXISTS `sys_status`;
CREATE TABLE `sys_status`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` char(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `iid`(`id`) USING BTREE,
  INDEX `istatus`(`status`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of sys_status
-- ----------------------------

-- ----------------------------
-- Table structure for sys_user
-- ----------------------------
DROP TABLE IF EXISTS `sys_user`;
CREATE TABLE `sys_user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nmuser` char(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `passuser` char(100) CHARACTER SET latin1 COLLATE latin1_bin NULL DEFAULT NULL,
  `opt_level` int(11) NULL DEFAULT NULL COMMENT '1=admin',
  `opt_status` int(11) NULL DEFAULT NULL COMMENT '0=nonaktif,1=aktif, 2 = delete',
  `picture` char(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `agentid` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `kategori` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `tl` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `nik_absensi` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `login` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `iopt_level`(`opt_level`) USING BTREE,
  INDEX `iagentid`(`agentid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 101 CHARACTER SET = latin1 COLLATE = latin1_general_cs ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of sys_user
-- ----------------------------
INSERT INTO `sys_user` VALUES (1, 'administrator', '64be7986b632435c109b6a07b4106d36', 1, 1, '1xx_xx1580177380.jpg', 'Ahmad Sadikin', 'A001', '', '', '1', NULL);
INSERT INTO `sys_user` VALUES (2, 'SPV', 'a26f744bda571e0de7f75bac2c08e4e3', 7, 1, 'default.png', 'SPV', 'SPV', '-', '', NULL, NULL);
INSERT INTO `sys_user` VALUES (69, 'admin', '31e653dddbc6e1e1c12214a6c996e8bd', 7, 1, 'default.png', 'Admin', 'admin', '-', 'admin', NULL, NULL);
INSERT INTO `sys_user` VALUES (72, 'zulfa', 'd3dd5d934e11c33f650b627ee2ebb628', 8, 1, 'default.png', 'ZULFA DAMAYANTI', 'zulfa', '-', 'zulfa', '31177', NULL);
INSERT INTO `sys_user` VALUES (73, 'diky', 'b5a55915cd40cd4b635bbcc566000f84', 8, 1, 'default.png', 'DIKY SUBARKAH', 'diky', '-', 'diky', '53529', NULL);
INSERT INTO `sys_user` VALUES (74, 'mulyadi', '221a5bed528b4759c36c4061d17bb47b', 8, 1, 'default.png', 'MULYADI LATIEF', 'mulyadi', '-', 'mulyadi', '53536', NULL);
INSERT INTO `sys_user` VALUES (75, 'sigit', '29f3a8171286d692fa2ae615432af745', 8, 1, 'default.png', 'SIGIT WIDODO', 'sigit', '-', 'sigit', '12097', NULL);
INSERT INTO `sys_user` VALUES (76, 'yunizar', '8522a14550dacd8f40cdfcfd212acb92', 8, 1, 'default.png', 'YUNIZAR RADIANSYAH', 'yunizar', '-', 'yunizar', '39500', NULL);
INSERT INTO `sys_user` VALUES (77, 'dwi', 'ad4f15809665717d6cf4e2f2a2f090f6', 8, 1, 'default.png', 'DWI NOVANDI', 'dwi', '-', 'dwi', '39501', NULL);
INSERT INTO `sys_user` VALUES (78, 'fandi', '73abb08bf938ea05900d430635faa503', 8, 1, 'default.png', 'FANDY FAZARIANTO', 'fandi', '-', 'fandi', '31224', NULL);
INSERT INTO `sys_user` VALUES (79, 'helpdesk', '158053279fd3a460f368627ec7238d55', 10, 1, 'default.png', 'admin', 'admin', '-', 'admin', NULL, NULL);
INSERT INTO `sys_user` VALUES (80, 'ideas', 'd7b0ae3901fb9964e217636ec90aa682', 10, 1, 'default.png', 'Ahmad Sadikin', '-', '-', '-', NULL, NULL);
INSERT INTO `sys_user` VALUES (81, 'AS131198', '17ea7d9a61d93c4606814ad8fe1479ed', 8, 1, 'default.png', 'Ayu Sutriani Lingga', 'AS131198', 'REG', '300003', 'AS131198', 'AS131198');
INSERT INTO `sys_user` VALUES (82, 'BP011094', 'b50f26dd23de9f495a18bbce02f11b0a', 8, 1, 'default.png', 'Bayu Purnomo', 'BP011094', 'REG', '300003', 'BP011094', 'BP011094');
INSERT INTO `sys_user` VALUES (83, 'CP071092', '17ea7d9a61d93c4606814ad8fe1479ed', 8, 1, 'default.png', 'citra puspa lestari', 'CP071092', 'REG', '300003', 'CP071092', 'CP071092');
INSERT INTO `sys_user` VALUES (84, 'DN090499', '17ea7d9a61d93c4606814ad8fe1479ed', 8, 1, 'default.png', 'Dela Nawa Aprilianti ', 'DN090499', 'REG', '300003', 'DN090499', 'DN090499');
INSERT INTO `sys_user` VALUES (85, 'FG171097', '17ea7d9a61d93c4606814ad8fe1479ed', 8, 1, 'default.png', 'Farras Ghina Azzahra', 'FG171097', 'REG', '300003', 'FG171097', 'FG171097');
INSERT INTO `sys_user` VALUES (86, 'GW190598', '17ea7d9a61d93c4606814ad8fe1479ed', 8, 1, 'default.png', 'Galuh Wigati Ningtyas', 'GW190598', 'REG', '300003', 'GW190598', 'GW190598');
INSERT INTO `sys_user` VALUES (87, 'GN120595', '17ea7d9a61d93c4606814ad8fe1479ed', 8, 1, 'default.png', 'Gita Nurfadillah Gustary', 'GN120595', 'REG', '300003', 'GN120595', 'GN120595');
INSERT INTO `sys_user` VALUES (88, 'MN130600', '17ea7d9a61d93c4606814ad8fe1479ed', 8, 1, 'default.png', 'Milad Nurfadilah ', 'MN130600', 'REG', '300003', 'MN130600', 'MN130600');
INSERT INTO `sys_user` VALUES (89, 'MI250493', '17ea7d9a61d93c4606814ad8fe1479ed', 8, 1, 'default.png', 'Muhamad Iqbal Taufan', 'MI250493', 'REG', '300003', 'MI250493', 'MI250493');
INSERT INTO `sys_user` VALUES (90, 'MR040598', '3db9670520bde801f27757c138ea43c8', 8, 1, 'default.png', 'Muhammad Rodibillah', 'MR040598', 'REG', '300003', 'MR040598', 'MR040598');
INSERT INTO `sys_user` VALUES (91, 'RZ070991', 'cbe5df3f88581281a57ab2cbea4d61bc', 8, 1, 'default.png', 'Rizki', 'RZ070991', 'REG', '300003', 'RZ070991', 'RZ070991');
INSERT INTO `sys_user` VALUES (92, 'SM170195', '17ea7d9a61d93c4606814ad8fe1479ed', 8, 1, 'default.png', 'Saeful Muminin AS', 'SM170195', 'REG', '300003', 'SM170195', 'SM170195');
INSERT INTO `sys_user` VALUES (93, 'SN130798', '17ea7d9a61d93c4606814ad8fe1479ed', 8, 1, 'default.png', 'Selly nur utamima nisa', 'SN130798', 'REG', '300003', 'SN130798', 'SN130798');
INSERT INTO `sys_user` VALUES (94, 'SR130989', '17ea7d9a61d93c4606814ad8fe1479ed', 8, 1, 'default.png', 'SYAIFUL RAMDANI', 'SR130989', 'REG', '300003', 'SR130989', 'SR130989');
INSERT INTO `sys_user` VALUES (95, 'SN110898', '17ea7d9a61d93c4606814ad8fe1479ed', 8, 1, 'default.png', 'Syifa Nur Azizah', 'SN110898', 'REG', '300003', 'SN110898', 'SN110898');
INSERT INTO `sys_user` VALUES (96, '300003', '17ea7d9a61d93c4606814ad8fe1479ed', 9, 1, '1603', 'DEDEN ANJAR SOFYAN', '300003', NULL, '-', '300003', '300003');

-- ----------------------------
-- Table structure for sys_user_detail
-- ----------------------------
DROP TABLE IF EXISTS `sys_user_detail`;
CREATE TABLE `sys_user_detail`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agentid` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tempat_lahir` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal_lahir` date NULL DEFAULT NULL,
  `tanggal_gabung` date NULL DEFAULT NULL,
  `jenis_kelamin` int(11) NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status_perkawinan` int(11) NULL DEFAULT NULL,
  `kelurahan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kecamatan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kabupaten_kota` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `provinsi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_hp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_hp_lain` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_ktp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pendidikan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jurusan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sekolah` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tahun_lulus` int(11) NULL DEFAULT NULL,
  `no_rekening` int(11) NULL DEFAULT NULL,
  `nama_bank` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `npwp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `perner` int(11) NULL DEFAULT NULL,
  `no_pkwt` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_lengkap` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat_kosan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_sutri` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal_menikah` date NULL DEFAULT NULL,
  `tanggal_lhrsutri` date NULL DEFAULT NULL,
  `jml_anak` int(11) NULL DEFAULT NULL,
  `u_anakterakhir` date NULL DEFAULT NULL,
  `emergency_kontak` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_emergency` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nomor_emergency` int(11) NULL DEFAULT NULL,
  `bank_an` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `npwp_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bpjs_ket` int(11) NULL DEFAULT NULL,
  `bpjs_kes` int(11) NULL DEFAULT NULL,
  `tanggal_akhir` date NULL DEFAULT NULL,
  `fb` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `twitter` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ig` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of sys_user_detail
-- ----------------------------

-- ----------------------------
-- Table structure for sys_user_log_accessuri
-- ----------------------------
DROP TABLE IF EXISTS `sys_user_log_accessuri`;
CREATE TABLE `sys_user_log_accessuri`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_login` int(11) NULL DEFAULT NULL,
  `url_access` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `type_request` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `os_access` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ip_address_access` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `time_access` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `iid`(`id`) USING BTREE,
  INDEX `iid_login`(`id_login`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 52 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of sys_user_log_accessuri
-- ----------------------------
INSERT INTO `sys_user_log_accessuri` VALUES (1, 60364, 'https://10.194.51.88/syanida/vms/', 'get', 'Windows 10', '10.194.24.140', 1630384626);
INSERT INTO `sys_user_log_accessuri` VALUES (2, 60364, 'https://10.194.51.88/syanida/vms/auth', 'post', 'Windows 10', '10.194.24.140', 1630384635);
INSERT INTO `sys_user_log_accessuri` VALUES (3, 1, 'https://10.194.51.88/syanida/vms/Home', 'get', 'Windows 10', '10.194.24.140', 1630384635);
INSERT INTO `sys_user_log_accessuri` VALUES (4, 1, 'https://10.194.51.88/syanida/vms/Home', 'get', 'Windows 10', '10.194.24.140', 1630384707);
INSERT INTO `sys_user_log_accessuri` VALUES (5, 1, 'https://10.194.51.88/syanida/vms/auth', 'get', 'Windows 10', '10.194.24.140', 1630384707);
INSERT INTO `sys_user_log_accessuri` VALUES (6, 1, 'https://10.194.51.88/syanida/vms/auth', 'post', 'Windows 10', '10.194.24.140', 1630384715);
INSERT INTO `sys_user_log_accessuri` VALUES (7, 2, 'https://10.194.51.88/syanida/vms/Home', 'get', 'Windows 10', '10.194.24.140', 1630384715);
INSERT INTO `sys_user_log_accessuri` VALUES (8, 2, 'https://10.194.51.88/syanida/vms/T_mgtvoucher/T_mgtvoucher', 'get', 'Windows 10', '10.194.24.140', 1630384719);
INSERT INTO `sys_user_log_accessuri` VALUES (9, 2, 'https://10.194.51.88/syanida/vms/T_mgtvoucher/T_mgtvoucher', 'get', 'Windows 10', '10.194.24.140', 1630386067);
INSERT INTO `sys_user_log_accessuri` VALUES (10, 2, 'https://10.194.51.88/syanida/vms/auth', 'get', 'Windows 10', '10.194.24.140', 1630386068);
INSERT INTO `sys_user_log_accessuri` VALUES (11, 3, 'https://10.194.51.88/syanida/vms/Home', 'get', 'Windows 10', '10.194.53.228', 1632386942);
INSERT INTO `sys_user_log_accessuri` VALUES (12, 4, 'https://10.194.51.88/syanida/vms/Home', 'get', 'Windows 10', '10.194.53.239', 1632390610);
INSERT INTO `sys_user_log_accessuri` VALUES (13, 4, 'https://10.194.51.88/syanida/vms/T_mgtvoucher/T_mgtvoucher', 'get', 'Windows 10', '10.194.53.239', 1632390616);
INSERT INTO `sys_user_log_accessuri` VALUES (14, 4, 'https://10.194.51.88/syanida/vms/T_mgtvoucher/T_mgtvoucher/create', 'get', 'Windows 10', '10.194.53.239', 1632390622);
INSERT INTO `sys_user_log_accessuri` VALUES (15, 4, 'https://10.194.51.88/syanida/vms/T_mgtvoucher/T_mgtvoucher', 'get', 'Windows 10', '10.194.53.239', 1632390626);
INSERT INTO `sys_user_log_accessuri` VALUES (16, 4, 'https://10.194.51.88/syanida/vms/T_mgtvoucher/T_mgtvoucher/create', 'get', 'Windows 10', '10.194.53.239', 1632390630);
INSERT INTO `sys_user_log_accessuri` VALUES (17, 4, 'https://10.194.51.88/syanida/vms/T_mgtvoucher/T_mgtvoucher', 'get', 'Windows 10', '10.194.53.239', 1632390637);
INSERT INTO `sys_user_log_accessuri` VALUES (18, 3, 'https://10.194.51.88/syanida/vms/T_mgtvoucher/T_mgtvoucher', 'get', 'Windows 10', '10.194.53.228', 1632390645);
INSERT INTO `sys_user_log_accessuri` VALUES (19, 3, 'https://10.194.51.88/syanida/vms/auth', 'get', 'Windows 10', '10.194.53.228', 1632390645);
INSERT INTO `sys_user_log_accessuri` VALUES (20, 4, 'https://10.194.51.88/syanida/vms/T_mgtvoucher/T_mgtvoucher/create', 'get', 'Windows 10', '10.194.53.239', 1632390651);
INSERT INTO `sys_user_log_accessuri` VALUES (21, 4, 'https://10.194.51.88/syanida/vms/T_mgtvoucher/T_mgtvoucher', 'get', 'Windows 10', '10.194.53.239', 1632390655);
INSERT INTO `sys_user_log_accessuri` VALUES (22, 4, 'https://10.194.51.88/syanida/vms/T_mgtvoucher/T_mgtvoucher', 'get', 'Windows 10', '10.194.53.239', 1632390662);
INSERT INTO `sys_user_log_accessuri` VALUES (23, 4, 'https://10.194.51.88/syanida/vms/home', 'get', 'Windows 10', '10.194.53.239', 1632390670);
INSERT INTO `sys_user_log_accessuri` VALUES (24, 4, 'https://10.194.51.88/syanida/vms/T_mgtvoucher/T_mgtvoucher', 'get', 'Windows 10', '10.194.53.239', 1632390673);
INSERT INTO `sys_user_log_accessuri` VALUES (25, 4, 'https://10.194.51.88/syanida/vms/T_mgtvoucher/T_mgtvoucher/create', 'get', 'Windows 10', '10.194.53.239', 1632391484);
INSERT INTO `sys_user_log_accessuri` VALUES (26, 4, 'https://10.194.51.88/syanida/vms/T_mgtvoucher/T_mgtvoucher/create', 'get', 'Windows 10', '10.194.53.239', 1632391486);
INSERT INTO `sys_user_log_accessuri` VALUES (27, 4, 'https://10.194.51.88/syanida/vms/T_mgtvoucher/T_mgtvoucher', 'get', 'Windows 10', '10.194.53.239', 1632391487);
INSERT INTO `sys_user_log_accessuri` VALUES (28, 3, 'https://10.194.51.88/syanida/vms/auth', 'post', 'Windows 10', '10.194.53.228', 1632391520);
INSERT INTO `sys_user_log_accessuri` VALUES (29, 5, 'https://10.194.51.88/syanida/vms/Home', 'get', 'Windows 10', '10.194.53.228', 1632391521);
INSERT INTO `sys_user_log_accessuri` VALUES (30, 5, 'https://10.194.51.88/syanida/vms/sistem/logout', 'get', 'Windows 10', '10.194.53.228', 1632391523);
INSERT INTO `sys_user_log_accessuri` VALUES (31, 6, 'https://10.194.51.88/syanida/vms/Home', 'get', 'Windows 10', '10.194.53.228', 1632391533);
INSERT INTO `sys_user_log_accessuri` VALUES (32, 6, 'https://10.194.51.88/syanida/vms/T_mgtvoucher/T_mgtvoucher', 'get', 'Windows 10', '10.194.53.228', 1632391535);
INSERT INTO `sys_user_log_accessuri` VALUES (33, 6, 'https://10.194.51.88/syanida/vms/T_mgtvoucher/T_mgtvoucher/create', 'get', 'Windows 10', '10.194.53.228', 1632391537);
INSERT INTO `sys_user_log_accessuri` VALUES (34, 6, 'https://10.194.51.88/syanida/vms/T_mgtvoucher/T_mgtvoucher/create', 'get', 'Windows 10', '10.194.53.228', 1632391565);
INSERT INTO `sys_user_log_accessuri` VALUES (35, 6, 'https://10.194.51.88/syanida/vms/T_mgtvoucher/T_mgtvoucher/create', 'get', 'Windows 10', '10.194.53.228', 1632391579);
INSERT INTO `sys_user_log_accessuri` VALUES (36, 6, 'https://10.194.51.88/syanida/vms/T_mgtvoucher/T_mgtvoucher/create', 'get', 'Windows 10', '10.194.53.228', 1632391672);
INSERT INTO `sys_user_log_accessuri` VALUES (37, 6, 'https://10.194.51.88/syanida/vms/T_mgtvoucher/T_mgtvoucher/create', 'get', 'Windows 10', '10.194.53.228', 1632391945);
INSERT INTO `sys_user_log_accessuri` VALUES (38, 6, 'https://10.194.51.88/syanida/vms/T_mgtvoucher/T_mgtvoucher/create', 'get', 'Windows 10', '10.194.53.228', 1632391973);
INSERT INTO `sys_user_log_accessuri` VALUES (39, 6, 'https://10.194.51.88/syanida/vms/T_mgtvoucher/T_mgtvoucher/create', 'get', 'Windows 10', '10.194.53.228', 1632392058);
INSERT INTO `sys_user_log_accessuri` VALUES (40, 7, 'https://10.194.51.88/syanida/vms/Home', 'get', 'Windows 10', '10.194.60.82', 1632402252);
INSERT INTO `sys_user_log_accessuri` VALUES (41, 7, 'https://10.194.51.88/syanida/vms/T_mgtvoucher/T_mgtvoucher', 'get', 'Windows 10', '10.194.60.82', 1632402255);
INSERT INTO `sys_user_log_accessuri` VALUES (42, 7, 'https://10.194.51.88/syanida/vms/T_mgtvoucher/T_mgtvoucher/create', 'get', 'Windows 10', '10.194.60.82', 1632402260);
INSERT INTO `sys_user_log_accessuri` VALUES (43, 7, 'https://10.194.51.88/syanida/vms/T_mgtvoucher/T_mgtvoucher', 'get', 'Windows 10', '10.194.60.82', 1632402334);
INSERT INTO `sys_user_log_accessuri` VALUES (44, 8, 'https://10.194.51.88/syanida/vms/Home', 'get', 'Windows 10', '10.194.53.244', 1632449240);
INSERT INTO `sys_user_log_accessuri` VALUES (45, 9, 'https://10.194.51.88/syanida/vms/Home', 'get', 'Windows 10', '10.194.53.228', 1632453415);
INSERT INTO `sys_user_log_accessuri` VALUES (46, 9, 'https://10.194.51.88/syanida/vms/T_mgtvoucher/T_mgtvoucher', 'get', 'Windows 10', '10.194.53.228', 1632453438);
INSERT INTO `sys_user_log_accessuri` VALUES (47, 9, 'https://10.194.51.88/syanida/vms/T_mgtvoucher/T_mgtvoucher/create', 'get', 'Windows 10', '10.194.53.228', 1632453456);
INSERT INTO `sys_user_log_accessuri` VALUES (48, 9, 'https://10.194.51.88/syanida/vms/T_mgtvoucher/T_mgtvoucher', 'get', 'Windows 10', '10.194.53.228', 1632453582);
INSERT INTO `sys_user_log_accessuri` VALUES (49, 9, 'https://10.194.51.88/syanida/vms/T_mgtvoucher/T_mgtvoucher', 'get', 'Windows 10', '10.194.53.228', 1632455919);
INSERT INTO `sys_user_log_accessuri` VALUES (50, 9, 'https://10.194.51.88/syanida/vms/home', 'get', 'Windows 10', '10.194.53.228', 1632455921);
INSERT INTO `sys_user_log_accessuri` VALUES (51, 9, 'https://10.194.51.88/syanida/vms/sistem/logout', 'get', 'Windows 10', '10.194.53.228', 1632455927);

-- ----------------------------
-- Table structure for sys_user_log_in_out
-- ----------------------------
DROP TABLE IF EXISTS `sys_user_log_in_out`;
CREATE TABLE `sys_user_log_in_out`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NULL DEFAULT NULL,
  `login_time` timestamp NULL DEFAULT NULL,
  `logout_time` timestamp NULL DEFAULT NULL,
  `agentid` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ket` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `iid`(`id`) USING BTREE,
  INDEX `iuser`(`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of sys_user_log_in_out
-- ----------------------------

-- ----------------------------
-- Table structure for sys_user_log_login
-- ----------------------------
DROP TABLE IF EXISTS `sys_user_log_login`;
CREATE TABLE `sys_user_log_login`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NULL DEFAULT NULL,
  `login_time` int(11) NULL DEFAULT NULL,
  `logout_time` int(11) NULL DEFAULT NULL,
  `ip` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `browser` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `os` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `agentid` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `iid`(`id`) USING BTREE,
  INDEX `iuser`(`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of sys_user_log_login
-- ----------------------------
INSERT INTO `sys_user_log_login` VALUES (1, 1, 1630384635, 1630384715, '10.194.24.140', 'Chrome 92.0.4515.159', 'Windows 10', NULL);
INSERT INTO `sys_user_log_login` VALUES (2, 1, 1630384715, 1632386941, '10.194.24.140', 'Chrome 92.0.4515.159', 'Windows 10', NULL);
INSERT INTO `sys_user_log_login` VALUES (3, 1, 1632386941, 1632390610, '10.194.53.228', 'Chrome 93.0.4577.82', 'Windows 10', NULL);
INSERT INTO `sys_user_log_login` VALUES (4, 1, 1632390610, 1632391532, '10.194.53.239', 'Chrome 93.0.4577.82', 'Windows 10', NULL);
INSERT INTO `sys_user_log_login` VALUES (5, 69, 1632391520, 1632391523, '10.194.53.228', 'Chrome 93.0.4577.82', 'Windows 10', NULL);
INSERT INTO `sys_user_log_login` VALUES (6, 1, 1632391532, 1632402251, '10.194.53.228', 'Chrome 93.0.4577.82', 'Windows 10', NULL);
INSERT INTO `sys_user_log_login` VALUES (7, 1, 1632402251, 1632449236, '10.194.60.82', 'Chrome 93.0.4577.82', 'Windows 10', NULL);
INSERT INTO `sys_user_log_login` VALUES (8, 1, 1632449236, 1632453415, '10.194.53.244', 'Chrome 93.0.4577.82', 'Windows 10', NULL);
INSERT INTO `sys_user_log_login` VALUES (9, 1, 1632453415, 1632455927, '10.194.53.228', 'Chrome 93.0.4577.82', 'Windows 10', NULL);

-- ----------------------------
-- Table structure for sys_user_moss
-- ----------------------------
DROP TABLE IF EXISTS `sys_user_moss`;
CREATE TABLE `sys_user_moss`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agentid` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `periode_start` date NULL DEFAULT NULL,
  `periode_end` date NULL DEFAULT NULL,
  `shift` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 15 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of sys_user_moss
-- ----------------------------

-- ----------------------------
-- Table structure for sys_user_upload
-- ----------------------------
DROP TABLE IF EXISTS `sys_user_upload`;
CREATE TABLE `sys_user_upload`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NULL DEFAULT NULL,
  `file_path` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `orig_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ext` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `time` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `iuser`(`id_user`, `time`) USING BTREE,
  INDEX `iid`(`id`) USING BTREE,
  INDEX `iex`(`id_user`, `ext`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of sys_user_upload
-- ----------------------------

-- ----------------------------
-- Table structure for sys_user_upload_temp
-- ----------------------------
DROP TABLE IF EXISTS `sys_user_upload_temp`;
CREATE TABLE `sys_user_upload_temp`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NULL DEFAULT NULL,
  `file_path` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `orig_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ext` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `time` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `iuser`(`id_user`, `time`) USING BTREE,
  INDEX `iid`(`id`) USING BTREE,
  INDEX `iex`(`id_user`, `ext`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of sys_user_upload_temp
-- ----------------------------

-- ----------------------------
-- Table structure for sys_userlogin
-- ----------------------------
DROP TABLE IF EXISTS `sys_userlogin`;
CREATE TABLE `sys_userlogin`  (
  `iduser` int(11) NOT NULL,
  `tokenserial` char(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `login_time` char(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`iduser`) USING BTREE,
  INDEX `iiduser`(`iduser`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of sys_userlogin
-- ----------------------------
INSERT INTO `sys_userlogin` VALUES (1, 'b612bdeddddcdaf0ede4f165b43a37cc', '1632453415');
INSERT INTO `sys_userlogin` VALUES (2, '5f7e91117e616720f42fa8b14e2f0bc3', '1615534666');
INSERT INTO `sys_userlogin` VALUES (69, '2cb0cea75cd8a00ba0103ddcd3ba3065', '1632391520');
INSERT INTO `sys_userlogin` VALUES (80, 'bd4d392f1f383c28fcdbe1430ea5c76c', '1617158794');
INSERT INTO `sys_userlogin` VALUES (81, '757ff108930b34d9355d6194987c6797', '1625538447');
INSERT INTO `sys_userlogin` VALUES (82, '3d9165b447e2dba4aa14f509f503f6f8', '1620377793');
INSERT INTO `sys_userlogin` VALUES (83, '3c882a5d3d5ab932d60486b4ea2e4361', '1620608971');
INSERT INTO `sys_userlogin` VALUES (84, 'feedf87783154c9268d1113946bbfdde', '1620199842');
INSERT INTO `sys_userlogin` VALUES (85, '87e7636dfc4d4b99e0860ad928f07b5c', '1620184422');
INSERT INTO `sys_userlogin` VALUES (86, 'ea3dc66b4b87acbfd3c20c00fd1e4209', '1620196558');
INSERT INTO `sys_userlogin` VALUES (87, '112a5c7cfecb05aa46d4a58f2954f84a', '1620184462');
INSERT INTO `sys_userlogin` VALUES (88, '4a51e3fb2d74e52b270ce362e4c2c4ce', '1620199813');
INSERT INTO `sys_userlogin` VALUES (89, '8e1772d24b89b97ff1615b7a6a427044', '1620184477');
INSERT INTO `sys_userlogin` VALUES (90, '78395423c91eb3c4c2487ea1297dc9ec', '1620184416');
INSERT INTO `sys_userlogin` VALUES (91, 'de2a6e33d63b6195be1ac5aa0e4ae5fa', '1620199804');
INSERT INTO `sys_userlogin` VALUES (92, 'ebc68d042286adc862df3416e7476ae1', '1620608244');
INSERT INTO `sys_userlogin` VALUES (93, '9c8bc648db04f81cd32229f0441b682a', '1620348841');
INSERT INTO `sys_userlogin` VALUES (94, '044eb0cb9cc46a2458eb0cf41eebd774', '1620608698');
INSERT INTO `sys_userlogin` VALUES (95, 'f1957c5f0cd95b948dd7d8ddcb4707e7', '1620263111');
INSERT INTO `sys_userlogin` VALUES (96, 'fc721326ec01623244eb263ee83096cf', '1620011206');

-- ----------------------------
-- Table structure for t_absensi
-- ----------------------------
DROP TABLE IF EXISTS `t_absensi`;
CREATE TABLE `t_absensi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `nik` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `stts` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `waktu_in` datetime NULL DEFAULT NULL,
  `picture` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `update_by` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `latitude` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `longitude` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `agentid` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `methode` int(11) NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_general_cs ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_absensi
-- ----------------------------
INSERT INTO `t_absensi` VALUES (1, 'Ahmad Sadikin', '1', 'in', '2021-06-23 17:12:41', './images/user_profile/absen/60d30919ec1ea.png', NULL, '0', '0', 'A001', 1);
INSERT INTO `t_absensi` VALUES (2, 'Ayu Sutriani Lingga', 'AS131198', 'in', '2021-06-23 17:23:54', './images/user_profile/absen/60d30bbaab4f8.png', NULL, '0', '0', 'AS131198', 1);

-- ----------------------------
-- Table structure for t_channel_payment
-- ----------------------------
DROP TABLE IF EXISTS `t_channel_payment`;
CREATE TABLE `t_channel_payment`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_channel` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `category` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_channel_payment
-- ----------------------------

-- ----------------------------
-- Table structure for t_mgtvoucher
-- ----------------------------
DROP TABLE IF EXISTS `t_mgtvoucher`;
CREATE TABLE `t_mgtvoucher`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_voucher` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `channel_payment` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `jenis_pembayaran` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `jenis_cashback` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `percent_cashback` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `nominal_cashback` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `max_nominal` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `start_datelive` datetime NULL DEFAULT NULL,
  `end_datelive` datetime NULL DEFAULT NULL,
  `wording` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `kode_voucher` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `is_active` int(11) NULL DEFAULT NULL,
  `already_subscribe` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `periode_time` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `special_day` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `special_day_date` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `minimum_payment` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `regional` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `witel` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `addon` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `type_customer` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `type_hvc` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `islimited` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  `limit_voucher` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = latin1 COLLATE = latin1_general_cs ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_mgtvoucher
-- ----------------------------
INSERT INTO `t_mgtvoucher` VALUES (1, 'Voucher 10%', 'BNI', 'cashback', 'prepaid', '10%', NULL, '10000', '2021-06-07 13:45:03', '2021-06-08 13:45:09', 'asdfasdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `t_mgtvoucher` VALUES (2, 'Voucher 15%', 'BNI', 'cashback', 'postpaid', '10%', NULL, '10000', '2021-06-07 13:45:03', '2021-06-08 13:45:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `t_mgtvoucher` VALUES (3, 'Voucher 20%', 'BRI', 'cashback', 'prepaid', '10%', NULL, '10000', '2021-06-07 13:45:03', '2021-06-08 13:45:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `t_mgtvoucher` VALUES (4, 'Voucher 25%', 'BRI', 'cashback', 'postpaid', '10%', NULL, '10000', '2021-06-07 13:45:03', '2021-06-08 13:45:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `t_mgtvoucher` VALUES (5, 'Voucher 30%', 'OVO', 'cashback', 'prepaid', '10%', NULL, '10000', '2021-06-07 13:45:03', '2021-06-08 13:45:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `t_mgtvoucher` VALUES (6, 'Voucher 35%', 'OVO', 'cashback', 'postpaid', '10%', NULL, '10000', '2021-06-07 13:45:03', '2021-06-08 13:45:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for t_produk_moss
-- ----------------------------
DROP TABLE IF EXISTS `t_produk_moss`;
CREATE TABLE `t_produk_moss`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_chanel` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_chanel` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `harga` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 34 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of t_produk_moss
-- ----------------------------
INSERT INTO `t_produk_moss` VALUES (1, 'KARAOKE BULANAN', 'USEEINKRSD/USEEINKRHD', '20000');
INSERT INTO `t_produk_moss` VALUES (2, 'BASKET-GOLF-INDITAIMENT LITE', 'USEECOMB6S/USEECOMB6H', '170000');
INSERT INTO `t_produk_moss` VALUES (3, 'INDIBASKETBALL', 'USEEINBASS/USEINBASH', '15000');
INSERT INTO `t_produk_moss` VALUES (4, 'DYNASTY 1', 'USEEINDS1S/USEEINDS1H', '89000');
INSERT INTO `t_produk_moss` VALUES (5, 'DYNASTY 2', 'USEEINDS2S/USEEINDS2H', '169000');
INSERT INTO `t_produk_moss` VALUES (6, 'INDIKIDS LITE', 'USEEINDYSD/USEEINDYHD', '20000');
INSERT INTO `t_produk_moss` VALUES (7, 'INDIGOLF', 'USEEINGLFS/USEEINGLFH', '75000');
INSERT INTO `t_produk_moss` VALUES (8, 'INDIMOVIE LITE', 'USEEINHBLS/USEEINHBLH', '55000');
INSERT INTO `t_produk_moss` VALUES (9, 'INDIMOVIE 1', 'USEEINMV1S/USEEINMV1H', '75000');
INSERT INTO `t_produk_moss` VALUES (10, 'INDIMOVIE 2', 'USEEINMV2S/USEEINMV2H', '70000');
INSERT INTO `t_produk_moss` VALUES (11, 'INDIJAPAN', 'USEEINNHKS/USEEINNHKH', '45000');
INSERT INTO `t_produk_moss` VALUES (12, 'INDINEWS', 'USEEINNWSD/USEEINNWHD', '15000');
INSERT INTO `t_produk_moss` VALUES (13, 'INDITAINMENT 1', 'USEEINT1HS/USEEINT1HD', '40000');
INSERT INTO `t_produk_moss` VALUES (14, 'INDITAINMENT 2', 'USEEINT2SD/USEEINT2HD', '40000');
INSERT INTO `t_produk_moss` VALUES (15, 'INDITAINMENT LITE', 'USEEINTLTS/USEEINTLTH', '20000');
INSERT INTO `t_produk_moss` VALUES (16, 'INDIKIDS', 'USEEKIDDYS/USEEKIDDYH', '60000');
INSERT INTO `t_produk_moss` VALUES (17, 'INDISPORT 2', 'USEEINSPSD/USEEINSPHD', '25000');
INSERT INTO `t_produk_moss` VALUES (18, 'INDISPORT', 'USEEBEINSD/USEEBEINHD', '50000');
INSERT INTO `t_produk_moss` VALUES (19, 'UPGRADE ESSENTIAL', 'USEEINESSD/USEEINESHD', '60000');
INSERT INTO `t_produk_moss` VALUES (20, 'EXTRA ADD ON ENTRY', 'USEEXTRESS/USEEXTRENT', '20000');
INSERT INTO `t_produk_moss` VALUES (21, 'ECONCERT', 'USEECONCRET/USEECONCRET', '9000');
INSERT INTO `t_produk_moss` VALUES (22, 'INDIKOREA', 'USEEINKORS/USEEINKORH', '25000');
INSERT INTO `t_produk_moss` VALUES (23, 'NEW INDIKOREA', 'USEEINKRNS/USEEINKRNH', '25000');
INSERT INTO `t_produk_moss` VALUES (24, 'INDIACTION', 'USEEINACTS/USEEINACTH', '30000');
INSERT INTO `t_produk_moss` VALUES (25, 'E-CONCERT IWANL FALS', 'USEECONCERT6/USEECONCERT6', '15000');
INSERT INTO `t_produk_moss` VALUES (26, 'E-CONCERT KLA PROJECT', 'USEECONCERT2/USEECONCERT2', '15000');
INSERT INTO `t_produk_moss` VALUES (27, 'INDIMOVIE 1 LITE', 'USEEINM1LS/USEEINM1LH', '35000');
INSERT INTO `t_produk_moss` VALUES (28, 'COMBO SPORT', 'USEEINCBSS/USEINCBSH', '60000');
INSERT INTO `t_produk_moss` VALUES (29, 'IKONSER USEETV', 'USEEKNSRS/USEEKNSRH', '15000');
INSERT INTO `t_produk_moss` VALUES (30, 'INDIKIDS BRIGHT', 'USEEINDY1S/USEEINDY1H', '20000');
INSERT INTO `t_produk_moss` VALUES (31, 'INDIKIDS JOY', 'USEEINDY2S/USEEINDY2H', '20000');
INSERT INTO `t_produk_moss` VALUES (32, 'INDIKIDS FUN', 'USEEINDY3S/USEEINDY3H', '20000');

-- ----------------------------
-- Table structure for t_script
-- ----------------------------
DROP TABLE IF EXISTS `t_script`;
CREATE TABLE `t_script`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `salam_pembuka` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `konfirmasi_emailhp` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `verifikasi` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `closing` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `status` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of t_script
-- ----------------------------
INSERT INTO `t_script` VALUES (1, '  Halo, Selamat Pagi/Siang/Sore.<br> <small>\r\n            <p xss=removed>Perkenalkan, saya <b>[nama_agent]</b> dari team Profiling Customer Indihome PT Telkom Indonesia (Indihome PT Telkom Indonesia). <br> Maaf Bapak/Ibu, kami mengganggu waktunya sebentar.. <br> <u><i>Terhubung ke no pstn/internet:</i></u> <br> Benar saya terhubung di nomor pstn/internet <b>[no_pstn]/[internet]</b>, atas nama <b>[nama_pastel]</b>?<br> Maaf, dengan bapak/ibu siapa saya berbicara? <ul>\r\n                    <li>Jika terhubung dengan Pemiliknya langsung : Ibu/Bapak <b>[nama_pastel]</b> sebagai Pemilik dan Penanggung jawab Pembayaran Indihome nya?</li>\r\n                    <li>Jika terhubung dengan Suami/Istri/Keluarga : Ibu/Bapak relasi dengan atas nama <b>[nama_pastel]</b> sebagai apa?</li>\r\n                    <li>Jika terhubung dengan Karyawan : Ibu/Bapak Jabatan di perusahaannya sebagai apa?</li>\r\n                </ul>\r\n        </small>\r\n        <br>\r\n        <small> <b>Bapak/Ibu [Nama_Pelanggan], sebagai Penanggung Jawab Pembayaran Indihome-nya?</b></small></p>', '<small><div xss=removed>                     \"Saat ini Telkom sedang melakukan update untuk semua data pelanggannya, agar mempermudah kami                     memberikan informasi mengenai : <br>                      <ul>                         <li>Program Loyalti,</li>                         <li>Produk-produk terbaru beserta Promonya Telkom,</li>                         <li>Percepatan perbaikan layanan jika Berkendala.</li>                     </ul>                     Jadi, mohon dibantu sebentar untuk kelengkapan datanya ya pak/ bu <b>[nama_pelanggan]</b>?<br>                     Untuk nomor handphone yang bisa kami hubungi, benar di nomor <b>[no_handphone]</b> ?<br>                     Bisa dibantu untuk alamat email pak/ bu <b>[nama_pelanggan]</b>? ( Pengejaan wajib menggunakan                     Alphabet)                  </div></small>', '<small>\r\n		<ul>\r\n			<li>Menanyakan Alamat<i><br><small>Format alamat (Nama Jalan | Nama Blok | RT/RW | Desa | Kecamatan | Kabupaten/Kota | Kode Pos)</small></i></li>\r\n			<li>Menanyakan Kecepatan Internet</li><small>(Untuk kecepatan internet nya 10 atau 20 mbps?)</small>\r\n			<li>Konfirmasi pembayaran terakhir</li><small>Apakah betul pembayaran terakhir nya Rp 320.000? (Beda Pembayaran cek 2x dengan no pstn/no inet nya)</small>\r\n			<li>Menanyakan lokasi pembayaran terakhir</li><small>(Untuk pembayaran terakhir di lakukan di Alfamart atau di Telkom?)</small>\r\n			<li>Tahun Pemasangan</li><small>Apakah betul Pemasangannya dari tahun 2020? (agent tetap menginput bulan dan tahunnya)</small>\r\n			<hr> <u>Script tambahan untuk MOSS</u>\r\n			<li>Konfirmasi Produk MOSS</li>\r\n			<li>Tanyakan pengaktifan Manual atau Langsung</li>\r\n		</ul>\r\n	</small>', '<small>Baik terima kasih Bapak/Ibu datanya sudah lengkap, kami sudah mengirimkan kode verifikasi ke email dan no hp bapak/ibu, Apakah sudah masuk? <br> <br> <i>Jika sudah masuk</i><br> Bisa di informasikan untuk kode verifikasinya Bapak/Ibu <b>[nama_pelanggan]</b> <br><i>Jika belum masuk / Pelanggan keberatan</i> <br>Baik Bapak/Ibu<b>[nama_pelanggan]</b> Tidak apa apa, kami bantu verifikasi by sistem ya, sebagai tanda datanya sudah terupdate di database kami <br><br><i>Menanyakan Opsi Chanel</i><br> Kedepannya Bapak/Ibu Lebih berkenan kami hubungi kembali melalu email, chat atau telepon? <br><br><i>Greeting Closing</i><br>Terimakasih atas waktunya Bapak/Ibu (Nama Pelanggan), kami senantiasa menjamin kerahasiaan data pelanggan.<br> Selamat (Pagi/Siang/Sore/Malam) </small>\r\n', 'aktif');

-- ----------------------------
-- Procedure structure for sp_get_notel_reguler
-- ----------------------------
DROP PROCEDURE IF EXISTS `sp_get_notel_reguler`;
delimiter ;;
CREATE PROCEDURE `sp_get_notel_reguler`(IN pnopstn VARCHAR ( 25 ),
	IN puserid VARCHAR ( 25 ),
	IN pncli VARCHAR ( 25 ))
BEGIN
	DECLARE
		idx_data INT ( 10 );
	DECLARE
		idx_session VARCHAR ( 30 );
	DECLARE
		idx_email VARCHAR ( 30 );
	DECLARE
		idx_hp VARCHAR ( 30 );
	DECLARE
		idx_speedy VARCHAR ( 30 );
	DECLARE
		idx_billing VARCHAR ( 30 );
	DECLARE
		idx_payment VARCHAR ( 30 );
	DECLARE
		idx_tgl VARCHAR ( 30 );
	DECLARE
		idx_system VARCHAR ( 30 );
	DECLARE
		idx_facebook VARCHAR ( 30 );
	DECLARE
		idx_twitter VARCHAR ( 30 );
	DECLARE
		idx_pemilik VARCHAR ( 30 );
	SELECT
		idx,
		click_session,
		verfi_handphone,
		verfi_email,
		kec_speedy,
		billing,
		payment,
		tgl_lahir,
		veri_system,
		facebook,
		twitter,
		kepemilikan INTO idx_data,
		idx_session,
		idx_hp,
		idx_email,
		idx_speedy,
		idx_billing,
		idx_payment,
		idx_tgl,
		idx_system,
		idx_facebook,
		idx_twitter,
		idx_pemilik 
	FROM
		trans_profiling 
	WHERE
		pstn1 = pnopstn 
		AND veri_upd = puserid 
		AND ncli = pncli 
		LIMIT 1;
	SELECT
		no_pstn AS pstn1,
		sumber,
		ncli,
		no_speedy,
		status,
		nama_pelanggan AS nama,
		no_handpone AS handphone,
		email,
		idx_data AS idx,
		idx_session AS click_session,
		nama_pastel AS nama_p,
		alamat AS alamat_p,
		idx_hp AS verfi_handphone,
		idx_email AS verfi_email,
		idx_speedy AS speedy,
		idx_billing AS billing,
		idx_payment AS payment,
		idx_tgl AS tgl,
		idx_system AS system_p,
		idx_facebook AS facebook_p,
		idx_twitter AS twitter_p,
		idx_pemilik AS pemilik_p 
	FROM
		dbprofile_validate_forcall_3p 
	WHERE
		no_pstn = pnopstn 
		AND ncli = pncli 
		AND update_by = puserid 
		LIMIT 1;
END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;

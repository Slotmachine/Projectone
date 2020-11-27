/*
Navicat MySQL Data Transfer

Source Server         : 172.17.8.222
Source Server Version : 50173
Source Host           : 172.17.8.222:3306
Source Database       : dbewarehouse

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2020-11-06 13:11:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_location1
-- ----------------------------
DROP TABLE IF EXISTS `tb_location1`;
CREATE TABLE `tb_location1` (
  `Ward_code` char(4) NOT NULL DEFAULT '',
  `Ward_code_old` char(4) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  `ward_name` char(30) DEFAULT NULL,
  `ward_name1` char(80) DEFAULT NULL,
  `mis_code` char(12) DEFAULT NULL,
  `ward_name_eng` varchar(150) DEFAULT NULL,
  `ward_name_short` varchar(50) DEFAULT NULL,
  `ward_name_old` varchar(255) DEFAULT NULL,
  `ward_name1_old` varchar(255) DEFAULT NULL,
  `ward_tel` char(12) DEFAULT NULL,
  `ward_tel2` varchar(50) DEFAULT NULL,
  `ward_build` int(11) DEFAULT NULL,
  `ward_floor` char(30) DEFAULT NULL,
  `section_code` char(3) DEFAULT NULL,
  `Smi_code` char(5) DEFAULT NULL,
  `Smi_code_old` char(11) DEFAULT NULL,
  `Ward_order` char(4) DEFAULT NULL,
  `Ward_cat` char(2) DEFAULT NULL,
  `ward_asc_cat` char(2) DEFAULT NULL,
  `bed` int(10) unsigned DEFAULT NULL,
  `bed_real` int(10) DEFAULT NULL,
  `pt` float(7,0) DEFAULT NULL,
  `noptbed` varchar(255) DEFAULT NULL,
  `WARD_OTRATE` char(5) DEFAULT NULL,
  `Costcenter` varchar(255) DEFAULT '',
  PRIMARY KEY (`Ward_code`)
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of tb_location1
-- ----------------------------
INSERT INTO `tb_location1` VALUES ('0000', '0000', '3', 'สำนักงานศูนย์ความเป็นเลิศฯ', 'สำนักงานศูนย์ความเป็นเลิศทางการแพทย์', null, 'CMEX OFFICE', 'CMEX OFFICE', 'สำนักงานบริหาร', 'สำนักงานบริหาร', '053-934700', '053-934700', null, null, '00', null, null, '', null, null, null, null, null, null, null, '');
INSERT INTO `tb_location1` VALUES ('0101', '0101', '3', 'ศูนย์เลสิค', 'ศูนย์เลสิค', null, 'CMU Lasik Center', 'CMU Lasik Center', 'ศูนย์เลสิคมหาวิทยาลัยเชียงใหม่', 'ศูนย์เลสิคมหาวิทยาลัยเชียงใหม่', '053-934777', '0827666909', null, null, '01', null, null, '', null, null, null, null, null, null, null, '');
INSERT INTO `tb_location1` VALUES ('0202', '0202', '3', 'ศูนย์สุขภาพสตรี', 'ศูนย์สุขภาพสตรี', null, 'Women Health Center', 'Women Health Center', 'ศูนย์สุขภาพสตรี', 'ศูนย์สุขภาพสตรี', '053-934711', '053-934712', null, null, '02', null, null, '', null, null, null, null, null, null, null, '');
INSERT INTO `tb_location1` VALUES ('0303', '0303', '3', 'ศูนย์การแพทย์ผสมผสาน', 'ศูนย์การแพทย์แผนไทยและการแพทย์ผสมผสาน', null, 'The Center of Thai Traditional and Complementary Medicine', 'TTCM', 'ศูนย์การแพทย์แผนไทยและการแพทย์ผสมผสาน', 'ศูนย์การแพทย์แผนไทยและการแพทย์ผสมผสาน', '053-934899', '053-934899', null, null, '03', null, null, '', null, null, null, null, null, null, null, '');
INSERT INTO `tb_location1` VALUES ('0404', '0404', '3', 'ศูนย์เพทซีที และไซโคลตรอน', 'ศูนย์เพทซีที และไซโคลตรอน', null, 'PET/CT & CYCLOTRON CENTER', 'PET/CT & CYCLOTRON CENTER', 'ศูนย์เพ็ทซี และไซโคลตรอน', 'ศูนย์เพ็ทซี และไซโคลตรอน', '053-934790', '053-934790', null, null, '04', null, null, '', null, null, null, null, null, null, null, '');
INSERT INTO `tb_location1` VALUES ('0505', '0505', '3', 'ศูนย์เลเซอร์ต้อกระจกเชียงใหม่', 'ศูนย์เลเซอร์ต้อกระจกเชียงใหม่', null, 'Chiang Mai Laser Cataract Surgery Center', 'Chiang Mai Laser Cataract Surgery Center', 'ศูนย์เลเซอร์ต้อกระจกเชียงใหม่', 'ศูนย์เลเซอร์ต้อกระจกเชียงใหม่', '053-934714', '053-934715', null, null, '05', null, null, '', null, null, null, null, null, null, null, '');
INSERT INTO `tb_location1` VALUES ('0606', '0606', '3', 'ศูนย์เวชศาสตร์ผู้สูงอายุ', 'ศูนย์เวชศาสตร์ผู้สูงอายุ', null, 'Geriatric Medical Center', 'Geriatric Medical Center', 'ศูนย์เวชศาสตร์ผู้สูงอายุ', 'ศูนย์เวชศาสตร์ผู้สูงอายุ', '053-920800', '053920700', null, null, '06', null, null, '', null, null, null, null, null, null, null, '');
INSERT INTO `tb_location1` VALUES ('0707', '0707', '3', 'ศูนย์วิเคราะห์สุขภาพการนอนหลับ', 'ศูนย์วิเคราะห์สุขภาพการนอนหลับ', null, 'Sleep Disorders Center', 'Sleep Disorders Center', 'ศูนย์วิเคราะห์สุขภาพการนอนหลับ', 'ศูนย์วิเคราะห์สุขภาพการนอนหลับ', '053-920666', '053-920666', null, null, '07', null, null, '', null, null, null, null, null, null, null, '');
INSERT INTO `tb_location1` VALUES ('0808', '0808', '3', 'ศูนย์ผู้ป่วยนอกCmex', 'ศูนย์ผู้ป่วยนอกCmex', null, 'OPD Cmex', 'OPD Cmex', 'ศูนย์ผู้ป่วยนอกCmex', 'ศูนย์ผู้ป่วยนอกCmex', null, null, null, null, '08', null, null, null, null, null, null, null, null, null, null, '');
INSERT INTO `tb_location1` VALUES ('0909', '0909', '3', 'ศูนย์ผู้ป่วยนอกGMC', 'ศูนย์ผู้ป่วยนอกGMC', null, 'OPD GMC', 'OPD GMC', 'ศูนย์ผู้ป่วยนอกGMC', 'ศูนย์ผู้ป่วยนอกGMC', null, null, null, null, '09', null, null, null, null, null, null, null, null, null, null, '');
INSERT INTO `tb_location1` VALUES ('1010', '1010', '3', 'ศูนย์ผู้ป่วยในGMC', 'ศูนย์ผู้ป่วยในGMC', null, 'IPD Cmex', 'IPD Cmex', 'ศูนย์ผู้ป่วยในCmex', 'ศูนย์ผู้ป่วยในCmex', null, null, null, null, '10', null, null, null, null, null, null, null, null, null, null, '');
INSERT INTO `tb_location1` VALUES ('1111', '1111', '3', 'ห้องตรวจจักษุGMC', 'ห้องตรวจจักษุ ศูนย์เวชศาสตร์ผู้สูงอายุ', null, null, null, null, null, null, null, null, null, '11', null, null, null, null, null, null, null, null, null, null, '');
INSERT INTO `tb_location1` VALUES ('1212', '1212', '3', 'ห้องยาCmex', 'ห้องยาCmex', null, null, null, null, null, null, null, null, null, '12', null, null, null, null, null, null, null, null, null, null, '');
INSERT INTO `tb_location1` VALUES ('1313', '1313', '3', 'ห้องยา IPD GMC', 'ห้องยา IPD GMC', null, null, null, null, null, null, null, null, null, '13', null, null, null, null, null, null, null, null, null, null, '');
INSERT INTO `tb_location1` VALUES ('1414', '1414', '3', 'ห้องยา OPD GMC', 'ห้องยา OPD GMC', null, null, null, null, null, null, null, null, null, '14', null, null, null, null, null, null, null, null, null, null, '');
INSERT INTO `tb_location1` VALUES ('1515', '1515', '3', 'ห้องยา TTCM', 'ห้องยา TTCM', null, null, null, null, null, null, null, null, null, '15', null, null, null, null, null, null, null, null, null, null, '');
INSERT INTO `tb_location1` VALUES ('1616', '1616', '3', 'หน่วยปฏิบัติการLab CMEx', 'หน่วยปฏิบัติการLab CMEx', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '');
INSERT INTO `tb_location1` VALUES ('1717', '1717', '3', 'ศูนย์การแพทย์เพื่อการมีบุตร', 'ศูนย์การแพทย์เพื่อการมีบุตร', null, null, null, null, null, null, null, null, null, '17', null, null, null, null, null, null, null, null, null, null, '');
SET FOREIGN_KEY_CHECKS=1;

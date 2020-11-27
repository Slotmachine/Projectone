/*
Navicat MySQL Data Transfer

Source Server         : 172.17.8.222
Source Server Version : 50173
Source Host           : 172.17.8.222:3306
Source Database       : dbewarehouse

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2020-11-06 15:13:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_position
-- ----------------------------
DROP TABLE IF EXISTS `tb_position`;
CREATE TABLE `tb_position` (
  `position_code` char(255) NOT NULL DEFAULT '',
  `position_code1` varchar(255) DEFAULT NULL,
  `position_name` char(255) DEFAULT NULL,
  `position_nameAB` char(255) DEFAULT NULL,
  `position_name1` char(255) DEFAULT NULL,
  `pp_code` char(255) DEFAULT NULL,
  PRIMARY KEY (`position_code`)
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of tb_position
-- ----------------------------
INSERT INTO `tb_position` VALUES ('00', '00', null, null, null, null);
INSERT INTO `tb_position` VALUES ('43', '43', 'พนักงานธุรการ', null, 'พนักงานธุรการ', null);
INSERT INTO `tb_position` VALUES ('47', '47', 'พนักงานบริการทั่วไป(คนงาน)', null, 'พนักงานบริการทั่วไป(คนงาน)', null);
INSERT INTO `tb_position` VALUES ('44', '44', 'ช่างเขียนแบบ', null, 'ช่างเขียนแบบ', null);
INSERT INTO `tb_position` VALUES ('55', '55', 'เภสัชกร', '', 'เภสัชกร', '');
INSERT INTO `tb_position` VALUES ('56', '56', 'พนักงานบัญชี', null, 'พนักงานบัญชี', null);
INSERT INTO `tb_position` VALUES ('57', '57', 'พนักงานผู้ช่วยทางการแพทย์', null, 'พนักงานผู้ช่วยทางการแพทย์', null);
INSERT INTO `tb_position` VALUES ('58', '58', 'แพทย์จีน', null, 'แพทย์จีน', null);
INSERT INTO `tb_position` VALUES ('59', '59', 'นักฟิสิกส์การแพทย์', null, 'นักฟิสิกส์การแพทย์', null);
INSERT INTO `tb_position` VALUES ('60', '60', 'ผู้จัดการ (LASIK)', null, 'ผู้จัดการ (LASIK)', null);
INSERT INTO `tb_position` VALUES ('61', '61', 'พนักงานการเงิน', null, 'พนักงานการเงิน', null);
INSERT INTO `tb_position` VALUES ('62', '62', 'นักเคมีรังสี', null, 'นักเคมีรังสี', null);
INSERT INTO `tb_position` VALUES ('63', '63', 'นักเภสัชรังสี', null, 'นักเภสัชรังสี', null);
INSERT INTO `tb_position` VALUES ('64', '64', 'นักรังสีการแพทย์', null, 'นักรังสีการแพทย์', null);
INSERT INTO `tb_position` VALUES ('65', '65', 'แพทย์', null, 'แพทย์', null);
INSERT INTO `tb_position` VALUES ('66', '66', 'พนักงานเวชระเบียน', null, 'พนักงานเวชระเบียน', null);
INSERT INTO `tb_position` VALUES ('67', '67', 'พนักงานบริหารงานทั่วไป', null, 'พนักงานบริหารงานทั่วไป', null);
INSERT INTO `tb_position` VALUES ('68', '68', 'พนักงานเก็บเงิน', null, 'พนักงานเก็บเงิน', null);
INSERT INTO `tb_position` VALUES ('69', '69', 'แพทย์แผนไทยประยุกต์', null, 'แพทย์แผนไทยประยุกต์', null);
INSERT INTO `tb_position` VALUES ('70', '70', 'ช่างไฟฟ้า', null, 'ช่างไฟฟ้า', null);
INSERT INTO `tb_position` VALUES ('71', '71', 'พนักงานเปล', null, 'พนักงานเปล', null);
INSERT INTO `tb_position` VALUES ('72', '72', 'พนักงานผู้ช่วยเภสัชกร', null, 'พนักงานผู้ช่วยเภสัชกร', null);
INSERT INTO `tb_position` VALUES ('73', '73', 'นักเทคนิคการแพทย์', null, 'นักเทคนิคการแพทย์', null);
INSERT INTO `tb_position` VALUES ('74', '74', 'นักกายภาพบำบัด', null, 'นักกายภาพบำบัด', null);
INSERT INTO `tb_position` VALUES ('75', '75', 'พนักงานขับรถยนต์', null, 'พนักงานขับรถยนต์', null);
INSERT INTO `tb_position` VALUES ('76', '76', 'พนักงานผู้ช่วยทางการแพทย์', null, 'พนักงานผู้ช่วยทางการแพทย์', null);
INSERT INTO `tb_position` VALUES ('77', '77', 'นักวิชาการคอมพิวเตอร์', null, 'นักวิชาการคอมพิวเตอร์', null);
INSERT INTO `tb_position` VALUES ('78', '78', 'นักกิจกรรมบำบัด', null, 'นักกิจกรรมบำบัด', null);
INSERT INTO `tb_position` VALUES ('79', '79', 'พนักงานโภชนาการ', null, 'พนักงานโภชนาการ', null);
INSERT INTO `tb_position` VALUES ('80', '80', 'นักโภชนาการ', null, 'นักโภชนาการ', null);
INSERT INTO `tb_position` VALUES ('81', '81', 'พนักงานเปล', null, 'พนักงานเปล', null);
INSERT INTO `tb_position` VALUES ('82', '82', 'พนักงานเครื่องคอมพิวเตอร์', null, 'พนักงานเครื่องคอมพิวเตอร์', null);
INSERT INTO `tb_position` VALUES ('83', '83', 'พนักงานประชาสัมพันธ์', null, 'พนักงานประชาสัมพันธ์', null);
INSERT INTO `tb_position` VALUES ('84', '84', 'พนักงานธุรการ (พัสดุ)', null, 'พนักงานธุรการ (พัสดุ)', null);
INSERT INTO `tb_position` VALUES ('85', '85', 'พนักงานกายภาพบำบัด', null, 'พนักงานกายภาพบำบัด', null);
INSERT INTO `tb_position` VALUES ('86', '86', 'พนักงานการตลาด', null, 'พนักงานการตลาด', null);
INSERT INTO `tb_position` VALUES ('87', '87', 'เจ้าหน้าที่ตรวจการนอนหลับ', null, 'เจ้าหน้าที่ตรวจการนอนหลับ', null);
INSERT INTO `tb_position` VALUES ('88', '88', 'วิศวกรระบบเครือข่าย', null, 'วิศวกรระบบเครือข่าย', null);
INSERT INTO `tb_position` VALUES ('89', '89', 'พยาบาล', null, 'พยาบาล', null);
INSERT INTO `tb_position` VALUES ('90', '90', 'พนักงานบริหารงานทั่วไป (บุคคล)', null, 'พนักงานบริหารงานทั่วไป (บุคคล)', null);
INSERT INTO `tb_position` VALUES ('91', '91', 'เจ้าหน้าที่การเงินและบัญชี', null, 'เจ้าหน้าที่การเงินและบัญชี', null);
INSERT INTO `tb_position` VALUES ('92', '92', 'พนักงานต้อนรับ', null, 'พนักงานต้อนรับ', null);
INSERT INTO `tb_position` VALUES ('93', '93', 'ผู้จัดการ (TTCM)', null, 'ผู้จัดการ (TTCM)', null);
INSERT INTO `tb_position` VALUES ('94', '94', 'พนักงานธุรการ (กายภาพบำบัด)', null, 'พนักงานธุรการ (กายภาพบำบัด)', null);
INSERT INTO `tb_position` VALUES ('95', '95', 'พนักงานผู้ช่วยทางการแพทย์ (กายภาพบำบัด)', null, 'พนักงานผู้ช่วยทางการแพทย์ (กายภาพบำบัด)', null);
INSERT INTO `tb_position` VALUES ('96', '96', 'พนักงานโภชนาการ (กุ๊ก)', null, 'พนักงานโภชนาการ (กุ๊ก)', null);
INSERT INTO `tb_position` VALUES ('97', '97', 'พนักงานโภชนาการ (ผู้ช่วยกุ๊ก)', null, 'พนักงานโภชนาการ (ผู้ช่วยกุ๊ก)', null);
INSERT INTO `tb_position` VALUES ('98', '98', 'ผู้อำนวยการศูนย์', null, 'ผู้อำนวยการศูนย์', null);
INSERT INTO `tb_position` VALUES ('99', '99', 'รองผู้อำนวยการ', null, 'รองผู้อำนวยการ', null);
INSERT INTO `tb_position` VALUES ('01', '01', 'หัวหน้าศูนย์', null, 'หัวหน้าศูนย์', null);
INSERT INTO `tb_position` VALUES ('02', '02', 'รักษาการแทน เลขานุการศูนย์', null, 'รักษาการแทน เลขานุการศูนย์', null);
SET FOREIGN_KEY_CHECKS=1;

/*
Navicat MySQL Data Transfer

Source Server         : 172.17.8.222
Source Server Version : 50173
Source Host           : 172.17.8.222:3306
Source Database       : dbewarehouse

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2020-11-06 13:11:39
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sev_position
-- ----------------------------
DROP TABLE IF EXISTS `sev_position`;
CREATE TABLE `sev_position` (
  `position_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสตำแหน่ง',
  `position_name` varchar(100) NOT NULL COMMENT 'ชื่อตำแหน่ง',
  PRIMARY KEY (`position_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sev_position
-- ----------------------------
INSERT INTO `sev_position` VALUES ('1', 'แพทย์');
INSERT INTO `sev_position` VALUES ('2', 'แพทย์จีน / แพทย์แผนไทยประยุกต์');
INSERT INTO `sev_position` VALUES ('3', 'ผู้จัดการศูนย์ฯ');
INSERT INTO `sev_position` VALUES ('4', 'พยาบาลเวชศาสตร์นิวเคลียร์');
INSERT INTO `sev_position` VALUES ('5', 'พยาบาลวิชาชีพ');
INSERT INTO `sev_position` VALUES ('6', 'ผู้ช่วยทางการแพทย์');
INSERT INTO `sev_position` VALUES ('7', 'เภสัชกร');
INSERT INTO `sev_position` VALUES ('8', 'ผู้ช่วยเภสัชกร');
INSERT INTO `sev_position` VALUES ('9', 'นักกายภาพบำบัด');
INSERT INTO `sev_position` VALUES ('10', 'นักกิจกรรมบำบัด');
INSERT INTO `sev_position` VALUES ('11', 'นักเทคนิคการแพทย์');
INSERT INTO `sev_position` VALUES ('12', 'นักรังสีการแพทย์');
INSERT INTO `sev_position` VALUES ('13', 'นักเคมีรังสี');
INSERT INTO `sev_position` VALUES ('14', 'นักเภสัชรังสี');
INSERT INTO `sev_position` VALUES ('15', 'นักฟิสิกส์การแพทย์');
INSERT INTO `sev_position` VALUES ('16', 'เจ้าหน้าที่ตรวจการนอนหลับ');
INSERT INTO `sev_position` VALUES ('17', 'วิศวกรระบบเครือข่ายคอมพิวเตอร์');
INSERT INTO `sev_position` VALUES ('18', 'นักวิชาการคอมพิวเตอร์');
INSERT INTO `sev_position` VALUES ('19', 'พนักงานเครื่องคอมพิวเตอร์');
INSERT INTO `sev_position` VALUES ('20', 'พยาบาลวิชาชีพ (วิจัย)');
INSERT INTO `sev_position` VALUES ('21', 'พนักงานบริหารงานทั่วไป');
INSERT INTO `sev_position` VALUES ('22', 'พนักงานทรัพยากรบุคคล');
INSERT INTO `sev_position` VALUES ('23', 'พนักงานประชาสัมพันธ์');
INSERT INTO `sev_position` VALUES ('24', 'นักพัสดุ');
INSERT INTO `sev_position` VALUES ('25', 'เจ้าพนักงานพัสดุ');
INSERT INTO `sev_position` VALUES ('26', 'นักวิชาการเงินการบัญชี');
INSERT INTO `sev_position` VALUES ('27', 'เจ้าหน้าที่การเงินการบัญชี');
INSERT INTO `sev_position` VALUES ('28', 'พนักงานเก็บเงิน');
INSERT INTO `sev_position` VALUES ('29', 'พนักงานการตลาด');
INSERT INTO `sev_position` VALUES ('30', 'พนักงานบริหารทั่วไป(นักพัฒนาคุณภาพ)');
INSERT INTO `sev_position` VALUES ('31', 'พนักงานธุรการ');
INSERT INTO `sev_position` VALUES ('32', 'พนักงานเวชระเบียน');
INSERT INTO `sev_position` VALUES ('33', 'นักโภชนาการ');
INSERT INTO `sev_position` VALUES ('34', 'พนักงานโภชนาการ');
INSERT INTO `sev_position` VALUES ('35', 'ช่างไฟฟ้า');
INSERT INTO `sev_position` VALUES ('36', 'พนักงานขับรถยนต์');
INSERT INTO `sev_position` VALUES ('37', 'พนักงานเปล');
INSERT INTO `sev_position` VALUES ('38', 'พนักงานบริการทั่วไป');
INSERT INTO `sev_position` VALUES ('39', 'พยาบาลระดับบริหาร');
INSERT INTO `sev_position` VALUES ('40', 'เจ้าหน้าที่บริหารงานวิจัย');
SET FOREIGN_KEY_CHECKS=1;

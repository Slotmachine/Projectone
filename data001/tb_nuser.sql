/*
Navicat MySQL Data Transfer

Source Server         : 172.17.8.222
Source Server Version : 50173
Source Host           : 172.17.8.222:3306
Source Database       : dbewarehouse

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2020-11-06 13:10:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_nuser
-- ----------------------------
DROP TABLE IF EXISTS `tb_nuser`;
CREATE TABLE `tb_nuser` (
  `NUM_OT` varchar(8) NOT NULL DEFAULT '',
  `Upass` varchar(20) DEFAULT NULL,
  `ward_code` varchar(4) DEFAULT NULL,
  `pos` char(1) DEFAULT NULL,
  `PP` char(2) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `Utype` varchar(5) DEFAULT NULL,
  `lastdate` datetime DEFAULT NULL,
  PRIMARY KEY (`NUM_OT`)
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of tb_nuser
-- ----------------------------
INSERT INTO `tb_nuser` VALUES ('59001', '1111', '0000', '7', '77', '1', null, null);
INSERT INTO `tb_nuser` VALUES ('60010', '2222', '0000', '7', '90', '1', null, null);
INSERT INTO `tb_nuser` VALUES ('somsang', '3333', '0101', '7', '01', '1', null, null);
INSERT INTO `tb_nuser` VALUES ('61008', '4444', '0303', '7', '58', '1', null, null);
INSERT INTO `tb_nuser` VALUES ('63002', '5555', '0000', '7', '66', '1', null, null);
INSERT INTO `tb_nuser` VALUES ('teekorn', '6666', '0707', '7', '01', '1', null, null);
SET FOREIGN_KEY_CHECKS=1;

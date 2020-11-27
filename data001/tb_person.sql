/*
Navicat MySQL Data Transfer

Source Server         : 172.17.8.222
Source Server Version : 50173
Source Host           : 172.17.8.222:3306
Source Database       : dbewarehouse

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2020-11-06 13:12:39
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_person
-- ----------------------------
DROP TABLE IF EXISTS `tb_person`;
CREATE TABLE `tb_person` (
  `SSUSR_Initials` varchar(255) DEFAULT NULL,
  `NUM_OT` varchar(8) NOT NULL DEFAULT '',
  `work` date DEFAULT NULL COMMENT 'วันเริ่มทำงาน',
  `start` date DEFAULT NULL COMMENT 'วันเข้าทำงานวันแรก',
  `Person_id` varchar(30) DEFAULT NULL,
  `Person_id1` varchar(30) DEFAULT NULL,
  `Fname` varchar(30) DEFAULT NULL,
  `chFname` varchar(50) DEFAULT NULL,
  `Lname` varchar(50) DEFAULT NULL,
  `chLname` varchar(50) DEFAULT NULL,
  `name_english` varchar(30) DEFAULT NULL,
  `lname_english` varchar(50) DEFAULT NULL,
  `sex` char(1) DEFAULT NULL,
  `MR1` varchar(10) DEFAULT NULL,
  `MR` char(1) DEFAULT NULL,
  `position_id` varchar(15) DEFAULT NULL,
  `mstatus` tinyint(1) DEFAULT NULL,
  `born` date DEFAULT NULL,
  `born_1` date DEFAULT NULL,
  `national` varchar(30) DEFAULT NULL,
  `religion` tinyint(1) DEFAULT NULL,
  `BIRTH_PLACE` text,
  `father` varchar(100) DEFAULT NULL,
  `father_occu` varchar(255) DEFAULT NULL,
  `mother` varchar(100) DEFAULT NULL,
  `mother_occu` varchar(255) DEFAULT NULL,
  `MAR` varchar(11) DEFAULT NULL,
  `MAR_new` tinyint(1) DEFAULT '1',
  `couple` varchar(100) DEFAULT NULL,
  `couple_occu` varchar(255) DEFAULT NULL,
  `son_count` varchar(255) DEFAULT NULL,
  `home` varchar(255) DEFAULT '',
  `TUMBOL` varchar(50) DEFAULT NULL,
  `tumbol_id` int(11) DEFAULT NULL,
  `tumbol_name` int(10) DEFAULT NULL,
  `aumphor` int(11) DEFAULT NULL,
  `aumphor_name` varchar(15) DEFAULT NULL,
  `province_id` int(11) DEFAULT NULL,
  `PROVINCE` varchar(30) DEFAULT NULL,
  `mail_code` varchar(255) DEFAULT NULL,
  `telaphone` varchar(30) DEFAULT NULL,
  `mobile_phone` varchar(30) DEFAULT NULL,
  `ward_phone` varchar(30) DEFAULT NULL,
  `relative` text,
  `relative_occu` varchar(255) DEFAULT NULL,
  `relative_addr` text,
  `num_people` varchar(13) DEFAULT NULL,
  `num_people1` varchar(13) DEFAULT NULL,
  `edu_cer` smallint(6) DEFAULT NULL,
  `edu_cer1` varchar(255) DEFAULT NULL,
  `edu_degree` tinyint(1) DEFAULT NULL,
  `edu_from` varchar(255) DEFAULT NULL,
  `edu_vol` varchar(255) DEFAULT NULL,
  `edu_year` varchar(255) DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `form_size` varchar(255) DEFAULT NULL,
  `form_size1` varchar(255) DEFAULT NULL,
  `pos_new` char(3) DEFAULT NULL,
  `pos_old` varchar(50) DEFAULT NULL,
  `pos1` char(3) DEFAULT NULL,
  `pos_thai` varchar(255) DEFAULT NULL,
  `PP` char(3) DEFAULT NULL,
  `PP1` varchar(19) DEFAULT NULL,
  `PP_new` char(3) DEFAULT NULL,
  `FW_CODE` varchar(10) DEFAULT NULL,
  `FW_CODE_new` varchar(10) DEFAULT NULL,
  `FW_CODE1` varchar(45) DEFAULT NULL,
  `per_order` int(11) DEFAULT NULL,
  `work_sec` varchar(255) DEFAULT NULL,
  `nursecer_id` varchar(255) DEFAULT NULL,
  `nursecer_date` date DEFAULT NULL,
  `sapa_id` varchar(255) DEFAULT NULL,
  `samakom_id` varchar(15) DEFAULT NULL,
  `bank_no` varchar(255) DEFAULT NULL,
  `new` varchar(255) DEFAULT NULL,
  `memo` text,
  `mr_english` varchar(255) DEFAULT NULL,
  `mr_thai` varchar(255) DEFAULT NULL,
  `c_now` varchar(255) DEFAULT NULL,
  `newnurse` tinyint(1) DEFAULT '1',
  `ck` tinyint(1) DEFAULT '0',
  `ncomment` varchar(255) DEFAULT NULL,
  `nyear` char(4) DEFAULT NULL,
  `codeper` varchar(10) DEFAULT NULL,
  `goverment_fund` varchar(50) DEFAULT NULL,
  `day_card` varchar(50) DEFAULT NULL,
  `num_card` varchar(50) DEFAULT NULL,
  `stu` varchar(50) DEFAULT NULL,
  `new_status` varchar(50) DEFAULT NULL,
  `expert` varchar(50) DEFAULT NULL,
  `lastupdate` datetime DEFAULT NULL,
  `nupdate` tinyint(1) DEFAULT '0',
  `hncheck` tinyint(1) DEFAULT '0',
  `pos` char(3) DEFAULT '1',
  PRIMARY KEY (`NUM_OT`)
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of tb_person
-- ----------------------------
INSERT INTO `tb_person` VALUES (null, '59001', null, null, '59001', null, 'ชัยธวัช', null, 'กิตติคุณากร', null, 'chaithawat', 'kittikunakorn', 'm', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1', null, null, null, '', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '0000', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1', '0', null, null, null, null, null, null, null, null, null, null, '0', '0', '1');
INSERT INTO `tb_person` VALUES (null, '60010', null, null, '60010', null, 'รังสิมันตุ์', null, 'ไก่งาม', null, null, null, 'f', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1', null, null, null, '', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1', '0', null, null, null, null, null, null, null, null, null, null, '0', '0', '1');
INSERT INTO `tb_person` VALUES (null, '61008', null, null, '61008', null, 'กรณ์ณภัทร', null, 'จตุพรเรืองรอง', null, null, null, 'f', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1', null, null, null, '', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1', '0', null, null, null, null, null, null, null, null, null, null, '0', '0', '1');
INSERT INTO `tb_person` VALUES (null, '63002', null, null, '63002', null, 'ปัทมา', null, 'ประดับ', null, null, null, 'f', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1', null, null, null, '', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1', '0', null, null, null, null, null, null, null, null, null, null, '0', '0', '1');
INSERT INTO `tb_person` VALUES (null, 'somsang', null, null, 'somsang', null, 'สมสงวน', null, 'อัษญคุณ', null, null, null, 'f', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1', null, null, null, '', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1', '0', null, null, null, null, null, null, null, null, null, null, '0', '0', '1');
SET FOREIGN_KEY_CHECKS=1;

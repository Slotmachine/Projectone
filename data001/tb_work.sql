-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.1.53
-- รุ่นของ PHP: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- ฐานข้อมูล: `data001`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tb_work`
--

CREATE TABLE IF NOT EXISTS `tb_work` (
  `pw_id` int(11) NOT NULL AUTO_INCREMENT,
  `pw_fullname` varchar(255) NOT NULL,
  `pw_fancday` date NOT NULL,
  `pw_lancday` date NOT NULL,
  `pw_fregisday` date NOT NULL,
  `pw_lregisday` date NOT NULL,
  `pw_status` varchar(100) NOT NULL,
  `pw_ranknum` varchar(20) NOT NULL,
  `pw_rank` varchar(255) NOT NULL,
  `pw_agency` varchar(255) NOT NULL,
  `pw_category` varchar(100) NOT NULL,
  `pw_rankblank` int(3) NOT NULL,
  `pw_wagerate` int(11) NOT NULL,
  `pw_regisday` date NOT NULL,
  `pw_ancnameday` date NOT NULL,
  `pw_writtenexam` varchar(100) NOT NULL,
  `pw_wted` date NOT NULL,
  `pw_wterd` date NOT NULL,
  `pw_interview` varchar(100) NOT NULL,
  `pw_itved` date NOT NULL,
  `pw_itverd` date NOT NULL,
  `pw_note` varchar(255) NOT NULL,
  `pw_views` int(11) NOT NULL,
  `pw_datatime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`pw_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- dump ตาราง `tb_work`
--

INSERT INTO `tb_work` (`pw_id`, `pw_fullname`, `pw_fancday`, `pw_lancday`, `pw_fregisday`, `pw_lregisday`, `pw_status`, `pw_ranknum`, `pw_rank`, `pw_agency`, `pw_category`, `pw_rankblank`, `pw_wagerate`, `pw_regisday`, `pw_ancnameday`, `pw_writtenexam`, `pw_wted`, `pw_wterd`, `pw_interview`, `pw_itved`, `pw_itverd`, `pw_note`, `pw_views`, `pw_datatime`) VALUES
(1, 'รังสิมันตุ์ ไก่งาม', '2020-11-16', '2020-11-30', '2020-11-16', '2020-11-23', 'ขั้นตอนเปิดรับสมัคร', 'E123784', 'พนักงานบริการทั่วไป(คนงาน)', 'แพทย์', 'พนักงานประจำ', 1, 29000, '0000-00-00', '0000-00-00', '-', '0000-00-00', '0000-00-00', '-', '0000-00-00', '0000-00-00', 'ไม่มี', 0, '2020-11-24 23:20:06'),
(2, 'รังสิมันตุ์ ไก่งาม', '2020-11-23', '2020-11-29', '2020-11-23', '2020-11-21', 'ขั้นตอนเปิดรับสมัคร', 'S4712938', 'พนักงานบริหารงานทั่วไป', 'พนักงานเครื่องคอมพิวเตอร์', 'พนักงานประจำ', 8, 390000, '0000-00-00', '2020-11-03', 'ผ่าน', '2020-11-28', '2020-11-27', '-', '2020-11-29', '2020-11-28', 'ไม่มี', 0, '2020-11-24 23:24:09'),
(3, 'รังสิมันตุ์ ไก่งาม', '2020-11-02', '2020-11-30', '2020-11-26', '2020-11-29', 'ขั้นตอนเปิดรับสมัคร', 'E9043958', 'แพทย์แผนไทยประยุกต์', 'นักเภสัชรังสี', 'พนักงานประจำ', 1, 19000, '0000-00-00', '0000-00-00', '-', '0000-00-00', '0000-00-00', '-', '0000-00-00', '0000-00-00', 'ไม่มี', 0, '2020-11-24 23:28:06'),
(4, 'ชัยธวัช กิตติคุณากร', '2020-11-09', '2020-11-30', '2020-11-09', '2020-11-30', 'ขั้นตอนเปิดรับสมัคร', 'E999999', 'ผู้จัดการ (LASIK)', 'พนักงานบริหารทั่วไป(นักพัฒนาคุณภาพ)', 'พนักงานประจำ', 3, 29000, '0000-00-00', '2020-11-26', 'ผ่าน', '2020-11-14', '2020-11-11', 'ผ่าน', '2020-11-06', '2020-12-04', 'ไม่มี ', 0, '2020-11-24 23:29:30'),
(5, 'ชัยธวัช กิตติคุณากร', '2020-11-25', '2020-11-30', '2020-11-27', '2020-12-06', 'ขั้นตอนเปิดรับสมัคร', 'E1212312121', 'พนักงานบริการทั่วไป(คนงาน)', 'พยาบาลเวชศาสตร์นิวเคลียร์', 'พนักงานประจำ', 1, 19000, '0000-00-00', '0000-00-00', '-', '0000-00-00', '0000-00-00', '-', '0000-00-00', '0000-00-00', 'ไม่มี', 0, '2020-11-24 23:43:38'),
(6, 'ชัยธวัช กิตติคุณากร', '2020-11-09', '2020-12-01', '2020-11-23', '2020-11-27', 'รอคัดเลือก', 'S094385903', 'พนักงานเก็บเงิน', 'นักเคมีรังสี', 'พนักงานประจำ', 2, 19000, '0000-00-00', '0000-00-00', '-', '0000-00-00', '0000-00-00', '-', '0000-00-00', '0000-00-00', 'ไม่มี', 0, '2020-11-27 15:22:40'),
(7, 'ชัยธวัช กิตติคุณากร', '2020-11-09', '2020-12-04', '2020-11-16', '2020-11-20', 'ขั้นตอนเปิดรับสมัคร', 'E0999990', 'นักรังสีการแพทย์', 'วิศวกรระบบเครือข่ายคอมพิวเตอร์', 'พนักงานประจำ', 1, 19508, '0000-00-00', '0000-00-00', '-', '0000-00-00', '0000-00-00', '-', '0000-00-00', '0000-00-00', 'ไม่มี', 0, '2020-11-27 15:31:15'),
(8, 'ชัยธวัช กิตติคุณากร', '2020-11-27', '2020-12-18', '2020-11-30', '2020-12-04', 'ขั้นตอนเปิดรับสมัคร', 'E55555555', 'พนักงานโภชนาการ', 'เจ้าหน้าที่ตรวจการนอนหลับ', 'พนักงานประจำ', 1, 19000, '0000-00-00', '0000-00-00', '-', '0000-00-00', '0000-00-00', '-', '0000-00-00', '0000-00-00', 'ไม่มี', 0, '2020-11-27 15:34:55'),
(9, 'ชัยธวัช กิตติคุณากร', '2020-11-30', '2020-12-25', '2020-11-30', '2020-12-04', 'รอคัดเลือก', 'E6666666', 'พนักงานบริหารงานทั่วไป (บุคคล)', 'พนักงานเปล', 'พนักงานประจำ', 1, 20000, '0000-00-00', '2020-12-07', '-', '2020-12-11', '2020-12-21', '-', '2020-12-25', '2020-12-28', 'ไม่มี', 0, '2020-11-27 15:36:34');

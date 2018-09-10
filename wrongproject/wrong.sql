/*
Navicat MySQL Data Transfer

Source Server         : hehe
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : wrongtest

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2018-08-22 17:34:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `infomation`
-- ----------------------------
DROP TABLE IF EXISTS `infomation`;
CREATE TABLE `infomation` (
  `sid` tinyint(1) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `question` varchar(200) NOT NULL,
  `solve` varchar(200) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of infomation
-- ----------------------------
INSERT INTO `infomation` VALUES ('5', '闭包', '闭包是什么', '你猜', '2018-08-22 17:33:09');

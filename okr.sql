/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : okr

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2016-12-10 17:35:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for concern
-- ----------------------------
DROP TABLE IF EXISTS `concern`;
CREATE TABLE `concern` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(12) NOT NULL,
  `concern_id` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='用户与关注用户表';

-- ----------------------------
-- Records of concern
-- ----------------------------
INSERT INTO `concern` VALUES ('1', '1', '2');
INSERT INTO `concern` VALUES ('2', '1', '3');

-- ----------------------------
-- Table structure for kr_info
-- ----------------------------
DROP TABLE IF EXISTS `kr_info`;
CREATE TABLE `kr_info` (
  `kr_info_id` int(11) NOT NULL AUTO_INCREMENT,
  `kr_info_title` text NOT NULL,
  `kr_id` int(11) NOT NULL,
  PRIMARY KEY (`kr_info_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kr_info
-- ----------------------------
INSERT INTO `kr_info` VALUES ('1', '11.1日前上线第一版', '1');
INSERT INTO `kr_info` VALUES ('2', '12.1日前第一版测试结束', '1');
INSERT INTO `kr_info` VALUES ('3', '2.1日前上线第一版', '2');
INSERT INTO `kr_info` VALUES ('4', '2.11日前第一版测试结束', '2');
INSERT INTO `kr_info` VALUES ('5', '3.1日前上线第一版', '3');
INSERT INTO `kr_info` VALUES ('6', '3.11日前第一版测试结束', '3');
INSERT INTO `kr_info` VALUES ('7', '4.1日前上线第一版', '4');
INSERT INTO `kr_info` VALUES ('8', '4.11日前第一版测试结束', '4');
INSERT INTO `kr_info` VALUES ('9', '5.1日前上线第一版', '5');
INSERT INTO `kr_info` VALUES ('10', '5.11日前第一版测试结束', '5');
INSERT INTO `kr_info` VALUES ('11', '6.1日前上线第一版', '6');
INSERT INTO `kr_info` VALUES ('12', '6.11日前第一版测试结束', '6');

-- ----------------------------
-- Table structure for kr_list
-- ----------------------------
DROP TABLE IF EXISTS `kr_list`;
CREATE TABLE `kr_list` (
  `kr_id` int(11) NOT NULL AUTO_INCREMENT,
  `kr_title` text NOT NULL,
  `o_id` int(11) NOT NULL,
  PRIMARY KEY (`kr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kr_list
-- ----------------------------
INSERT INTO `kr_list` VALUES ('1', 'A项目顺利落地', '1');
INSERT INTO `kr_list` VALUES ('2', 'B项目顺利落地', '1');
INSERT INTO `kr_list` VALUES ('3', 'C项目顺利落地', '2');
INSERT INTO `kr_list` VALUES ('4', 'd项目顺利落地', '2');
INSERT INTO `kr_list` VALUES ('5', 'E项目顺利落地', '3');
INSERT INTO `kr_list` VALUES ('6', 'F项目顺利落地', '3');

-- ----------------------------
-- Table structure for o_list
-- ----------------------------
DROP TABLE IF EXISTS `o_list`;
CREATE TABLE `o_list` (
  `0_id` int(11) NOT NULL AUTO_INCREMENT,
  `o_title` text NOT NULL,
  `o_date` datetime NOT NULL,
  `o_owner` varchar(12) NOT NULL,
  PRIMARY KEY (`0_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of o_list
-- ----------------------------
INSERT INTO `o_list` VALUES ('1', '2016年10月-12月', '2016-12-10 11:26:22', 'admin');
INSERT INTO `o_list` VALUES ('2', '2016年9月-11月', '2016-12-10 11:26:22', '2');
INSERT INTO `o_list` VALUES ('3', '2016年5月-10月', '2016-12-10 11:26:22', '3');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(12) NOT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `depart` varchar(12) NOT NULL,
  `ojb_code` varchar(12) NOT NULL,
  `desk_id` varchar(12) DEFAULT NULL,
  `tel` varchar(12) DEFAULT NULL,
  `phone` varchar(12) NOT NULL,
  `phone_display` varchar(1) NOT NULL DEFAULT '1',
  `email` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'amdin', null, '', '', null, null, '', '1', null);
INSERT INTO `users` VALUES ('2', '阿拉伯', null, '', '', null, null, '', '1', null);
INSERT INTO `users` VALUES ('3', '毕福剑1', null, '', '', null, null, '', '1', null);
INSERT INTO `users` VALUES ('4', '毕福剑2', null, '', '', null, null, '', '1', null);
INSERT INTO `users` VALUES ('5', '毕福剑3', null, '', '', null, null, '', '1', null);
INSERT INTO `users` VALUES ('6', '张三1', null, '', '', null, null, '', '1', null);
INSERT INTO `users` VALUES ('7', '张三2', null, '', '', null, null, '', '1', null);
INSERT INTO `users` VALUES ('8', '王五1', null, '', '', null, null, '', '1', null);
INSERT INTO `users` VALUES ('9', '王五2', null, '', '', null, null, '', '1', null);
INSERT INTO `users` VALUES ('10', '薛之谦1', null, '', '', null, null, '', '1', null);
INSERT INTO `users` VALUES ('11', '薛之谦2', null, '', '', null, null, '', '1', null);
INSERT INTO `users` VALUES ('12', '意义', null, '', '', null, null, '', '1', null);
INSERT INTO `users` VALUES ('13', '意义2', null, '', '', null, null, '', '1', null);
INSERT INTO `users` VALUES ('14', '服务', null, '', '', null, null, '', '1', null);
INSERT INTO `users` VALUES ('15', '服务2', null, '', '', null, null, '', '1', null);
INSERT INTO `users` VALUES ('16', '哈哈', null, '', '', null, null, '', '1', null);
INSERT INTO `users` VALUES ('17', '蒙面', null, '', '', null, null, '', '1', null);

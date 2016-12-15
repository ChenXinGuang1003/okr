/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : okr

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2016-12-15 16:30:51
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='订阅';

-- ----------------------------
-- Records of concern
-- ----------------------------
INSERT INTO `concern` VALUES ('1', '1', '2');
INSERT INTO `concern` VALUES ('2', '1', '3');

-- ----------------------------
-- Table structure for kr
-- ----------------------------
DROP TABLE IF EXISTS `kr`;
CREATE TABLE `kr` (
  `kr_id` int(11) NOT NULL AUTO_INCREMENT,
  `kr_title` text NOT NULL,
  `object_id` int(11) NOT NULL,
  PRIMARY KEY (`kr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kr
-- ----------------------------
INSERT INTO `kr` VALUES ('1', 'object101', '1');
INSERT INTO `kr` VALUES ('2', 'object102', '1');
INSERT INTO `kr` VALUES ('3', 'object103', '1');
INSERT INTO `kr` VALUES ('4', 'object201', '2');
INSERT INTO `kr` VALUES ('5', 'object202', '2');
INSERT INTO `kr` VALUES ('6', 'object203', '2');
INSERT INTO `kr` VALUES ('7', 'object204', '2');
INSERT INTO `kr` VALUES ('8', '发布101', '3');
INSERT INTO `kr` VALUES ('9', '发布102', '3');
INSERT INTO `kr` VALUES ('10', '发布103', '3');
INSERT INTO `kr` VALUES ('11', '发布202', '4');
INSERT INTO `kr` VALUES ('12', '发布201', '4');

-- ----------------------------
-- Table structure for objects
-- ----------------------------
DROP TABLE IF EXISTS `objects`;
CREATE TABLE `objects` (
  `object_id` int(11) NOT NULL AUTO_INCREMENT,
  `object_title` text NOT NULL,
  `okr_id` int(11) NOT NULL,
  PRIMARY KEY (`object_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of objects
-- ----------------------------
INSERT INTO `objects` VALUES ('1', 'object1', '1');
INSERT INTO `objects` VALUES ('2', 'object2', '1');
INSERT INTO `objects` VALUES ('3', '发布1', '4');
INSERT INTO `objects` VALUES ('4', '发布2', '4');

-- ----------------------------
-- Table structure for object_zan
-- ----------------------------
DROP TABLE IF EXISTS `object_zan`;
CREATE TABLE `object_zan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `okr_id` int(11) NOT NULL,
  `object_id` int(11) NOT NULL COMMENT 'kr的id编号',
  `u_name` varchar(12) NOT NULL COMMENT '点赞人',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of object_zan
-- ----------------------------
INSERT INTO `object_zan` VALUES ('1', '1', '1', 'A');
INSERT INTO `object_zan` VALUES ('2', '1', '1', 'B');
INSERT INTO `object_zan` VALUES ('3', '1', '2', 'C');
INSERT INTO `object_zan` VALUES ('4', '1', '2', 'D');

-- ----------------------------
-- Table structure for okr
-- ----------------------------
DROP TABLE IF EXISTS `okr`;
CREATE TABLE `okr` (
  `okr_id` int(11) NOT NULL AUTO_INCREMENT,
  `okr_title` text NOT NULL,
  `okr_date` datetime NOT NULL,
  `okr_owner` varchar(12) NOT NULL,
  `is_public` varchar(1) NOT NULL,
  PRIMARY KEY (`okr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of okr
-- ----------------------------
INSERT INTO `okr` VALUES ('1', '2016年10月-12月', '2016-12-15 14:35:00', '1', '0');
INSERT INTO `okr` VALUES ('4', '2016年10月-12月', '2016-12-15 16:13:59', '1', '1');

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

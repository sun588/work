/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : mmw

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-11-26 17:43:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `attrkey`
-- ----------------------------
DROP TABLE IF EXISTS `attrkey`;
CREATE TABLE `attrkey` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '属性名',
  `cid` int(11) DEFAULT NULL COMMENT '所属分类ID',
  `od` int(11) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of attrkey
-- ----------------------------
INSERT INTO `attrkey` VALUES ('4', '能耗', '4', '0');
INSERT INTO `attrkey` VALUES ('6', '按功能分类', '24', '0');
INSERT INTO `attrkey` VALUES ('7', '按客户端分类', '24', '0');

-- ----------------------------
-- Table structure for `attrvalue`
-- ----------------------------
DROP TABLE IF EXISTS `attrvalue`;
CREATE TABLE `attrvalue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `keyID` int(11) DEFAULT NULL COMMENT '属性键ID',
  `od` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of attrvalue
-- ----------------------------
INSERT INTO `attrvalue` VALUES ('3', '高清屏', '6', '0');
INSERT INTO `attrvalue` VALUES ('2', '二级', '4', '1');
INSERT INTO `attrvalue` VALUES ('4', '高性能', '6', '1');

-- ----------------------------
-- Table structure for `brand`
-- ----------------------------
DROP TABLE IF EXISTS `brand`;
CREATE TABLE `brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `describe` varchar(255) DEFAULT NULL COMMENT '描述',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of brand
-- ----------------------------
INSERT INTO `brand` VALUES ('2', '海尔', null, null);
INSERT INTO `brand` VALUES ('3', 'Huawei3', null, null);

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '分类名称',
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '父类ID',
  `pic` varchar(255) DEFAULT '' COMMENT '分类图片',
  `od` int(11) NOT NULL DEFAULT '0' COMMENT '排序 降序排列',
  `note` varchar(255) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', '大家电', '0', '', '0', '大家电分类');
INSERT INTO `category` VALUES ('2', '数码产品', '0', '', '1', '');
INSERT INTO `category` VALUES ('3', '冰箱', '2', '', '1', '');
INSERT INTO `category` VALUES ('4', '空调', '2', '', '1', '没有');
INSERT INTO `category` VALUES ('6', '汽车', '0', '', '3', '汽车分类');
INSERT INTO `category` VALUES ('7', '绿野', '6', '', '3', '1');
INSERT INTO `category` VALUES ('8', '厨卫电器', '0', '', '0', '');
INSERT INTO `category` VALUES ('9', '热水器', '8', '', '0', '');
INSERT INTO `category` VALUES ('10', '空调', '1', '', '0', '');
INSERT INTO `category` VALUES ('11', '洗衣机', '1', '', '0', '');
INSERT INTO `category` VALUES ('13', '能耗', '3', '', '0', '');
INSERT INTO `category` VALUES ('14', '1级能耗', '13', '', '0', '');
INSERT INTO `category` VALUES ('15', '2级能耗', '13', '', '0', '');
INSERT INTO `category` VALUES ('17', ' 壁挂式 ', '10', '', '0', '');
INSERT INTO `category` VALUES ('18', '柜机 ', '10', '', '0', '');
INSERT INTO `category` VALUES ('19', '家用中央空调 ', '10', '', '0', '');
INSERT INTO `category` VALUES ('20', '移动空调', '10', '', '0', '');
INSERT INTO `category` VALUES ('21', ' 1匹 ', '17', '', '0', '');
INSERT INTO `category` VALUES ('22', '大1匹 ', '17', '', '0', '');
INSERT INTO `category` VALUES ('23', '手机数码', '0', '', '0', '');
INSERT INTO `category` VALUES ('24', '手机', '23', '', '0', '');

-- ----------------------------
-- Table structure for `picture`
-- ----------------------------
DROP TABLE IF EXISTS `picture`;
CREATE TABLE `picture` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `od` int(11) NOT NULL DEFAULT '0',
  `pic` varchar(255) DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL COMMENT '1:轮播图  2:广告图',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of picture
-- ----------------------------
INSERT INTO `picture` VALUES ('1', '123', null, '0', '/public/Img/2018-11-26/15432251992922.jpg', '1');
INSERT INTO `picture` VALUES ('2', '轮播图2', null, '1', '/public/Img/2018-11-26/15432253121022.jpg', '1');
INSERT INTO `picture` VALUES ('3', '轮播图3', '#', '2', '/public/Img/2018-11-26/15432253369416.jpg', '1');

-- ----------------------------
-- Table structure for `product`
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '名称',
  `type` varchar(255) DEFAULT NULL COMMENT '型号',
  `time` int(11) DEFAULT NULL COMMENT '发布时间',
  `pic1` varchar(255) DEFAULT NULL COMMENT '产品图片',
  `pic2` varchar(255) DEFAULT NULL,
  `pic3` varchar(255) DEFAULT NULL,
  `pic4` varchar(255) DEFAULT NULL,
  `brand` int(11) DEFAULT NULL COMMENT '产品品牌',
  `c1` int(11) DEFAULT NULL COMMENT '产品分类',
  `c2` int(11) DEFAULT NULL,
  `c3` int(11) DEFAULT NULL,
  `c4` int(11) DEFAULT NULL,
  `od` int(11) DEFAULT NULL COMMENT '排序',
  `pcontent` text COMMENT '产品详情',
  `tcontent` text COMMENT '规格详情',
  `state` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1:上架  2:下架',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('2', '测试产品1', 'test001', '1542970679', '/public/Img/2018-11-23/15429706671101.jpg', '', '', '', '3', '23', '24', '0', '0', '0', '&lt;p&gt;你好&lt;br/&gt;&lt;/p&gt;', '&lt;p&gt;我很好&lt;br/&gt;&lt;/p&gt;', '1');
INSERT INTO `product` VALUES ('3', '测试产品改', 'test002', '1543030520', '/public/Img/2018-11-23/15429706671101.jpg', '', '', '', '2', '2', '3', '13', '14', '1', '&lt;p&gt;你好该&lt;br/&gt;&lt;/p&gt;', '&lt;p&gt;我很好改&lt;br/&gt;&lt;/p&gt;', '1');

-- ----------------------------
-- Table structure for `productattr`
-- ----------------------------
DROP TABLE IF EXISTS `productattr`;
CREATE TABLE `productattr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL COMMENT '产品ID',
  `attrValueID` int(11) DEFAULT NULL COMMENT '属性值ID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of productattr
-- ----------------------------
INSERT INTO `productattr` VALUES ('3', '2', '4');

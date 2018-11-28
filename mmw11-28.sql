/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : mmw

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-11-28 21:07:54
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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of attrkey
-- ----------------------------
INSERT INTO `attrkey` VALUES ('4', '能耗', '4', '0');
INSERT INTO `attrkey` VALUES ('6', '按功能分类', '24', '0');
INSERT INTO `attrkey` VALUES ('7', '按客户端分类', '24', '0');
INSERT INTO `attrkey` VALUES ('8', '内存', '7', '0');

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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of attrvalue
-- ----------------------------
INSERT INTO `attrvalue` VALUES ('3', '高清屏', '6', '0');
INSERT INTO `attrvalue` VALUES ('2', '二级', '4', '1');
INSERT INTO `attrvalue` VALUES ('4', '高性能', '6', '1');
INSERT INTO `attrvalue` VALUES ('6', '4G', '8', '0');
INSERT INTO `attrvalue` VALUES ('7', '8G', '8', '0');

-- ----------------------------
-- Table structure for `brand`
-- ----------------------------
DROP TABLE IF EXISTS `brand`;
CREATE TABLE `brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `describe` varchar(255) DEFAULT NULL COMMENT '描述',
  `cid` int(11) DEFAULT NULL COMMENT '分类ID  分类目前固定死',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of brand
-- ----------------------------
INSERT INTO `brand` VALUES ('2', '海尔', '/public/Img/2018-11-27/15432981568475.jpg', null, '3');
INSERT INTO `brand` VALUES ('3', 'Huawei', '/public/Img/2018-11-27/15432980281567.jpg', null, '2');
INSERT INTO `brand` VALUES ('4', '中兴', '/public/Img/2018-11-27/15432913291127.jpg', null, '1');
INSERT INTO `brand` VALUES ('5', '娃哈哈', '/public/Img/2018-11-27/15433001663388.jpg', null, '2');

-- ----------------------------
-- Table structure for `cart`
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `time` int(11) DEFAULT NULL,
  `num` tinyint(4) NOT NULL DEFAULT '1' COMMENT '商品数量',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cart
-- ----------------------------

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
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', '影音娱乐', '0', '', '2', '');
INSERT INTO `category` VALUES ('2', '汽车', '0', '', '1', '');
INSERT INTO `category` VALUES ('29', '游戏本', '7', '', '0', '');
INSERT INTO `category` VALUES ('6', '电脑', '0', '', '5', '');
INSERT INTO `category` VALUES ('7', '笔记本', '6', '', '3', '1');
INSERT INTO `category` VALUES ('8', '手机', '0', '', '4', '');
INSERT INTO `category` VALUES ('30', '娱乐本', '7', '', '0', '');
INSERT INTO `category` VALUES ('23', '大家电', '0', '', '3', '');
INSERT INTO `category` VALUES ('25', '空调', '23', '', '0', '');
INSERT INTO `category` VALUES ('28', '台式', '6', '', '0', '');

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
  `state` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1:启用 2停用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of picture
-- ----------------------------
INSERT INTO `picture` VALUES ('4', '轮播图1', 'http://www.baidu.com', '1', '/public/Img/2018-11-26/15432437063833.png', '1', '1');
INSERT INTO `picture` VALUES ('5', '广告图1', '#', '1', '/public/Img/2018-11-26/15432457457363.png', '2', '1');
INSERT INTO `picture` VALUES ('6', '轮播2改', '#', '3', '/public/Img/2018-11-26/15432476763824.png', '1', '1');

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
  `isdiscount` tinyint(4) NOT NULL DEFAULT '2' COMMENT '1:参与优惠 2不参与优惠',
  `discount` varchar(255) DEFAULT NULL,
  `column1` tinyint(4) NOT NULL DEFAULT '2' COMMENT '1:推荐  2:不推荐',
  `column2` tinyint(4) NOT NULL DEFAULT '2' COMMENT '1:推荐  2:不推荐',
  `column3` tinyint(4) NOT NULL DEFAULT '2' COMMENT '1:推荐  2:不推荐',
  `column4` tinyint(4) NOT NULL DEFAULT '2' COMMENT '1:推荐  2:不推荐',
  `column5` tinyint(4) NOT NULL DEFAULT '2' COMMENT '1:推荐  2:不推荐',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('2', '测试产品1', 'test001', '1542970679', '/public/Img/2018-11-27/15432819446784.jpg', '', '', '', '3', '23', '24', '0', '0', '0', '&lt;p&gt;你好&lt;br/&gt;&lt;/p&gt;', '&lt;p&gt;我很好&lt;br/&gt;&lt;/p&gt;', '1', '2', null, '2', '2', '2', '2', '2');
INSERT INTO `product` VALUES ('3', '测试产品改', 'test002', '1543030520', '/public/Img/2018-11-27/15432819211254.jpg', '', '', '', '2', '2', '3', '13', '14', '1', '&lt;p&gt;你好该&lt;br/&gt;&lt;/p&gt;', '&lt;p&gt;我很好改11&lt;br/&gt;&lt;/p&gt;', '1', '1', '', '2', '2', '2', '2', '2');
INSERT INTO `product` VALUES ('4', '测试产品3', 'test003', '1543282733', '/public/Img/2018-11-27/15432827207644.jpg', '', '', '', '2', '1', '10', '17', '21', '1', 'hellow', '你好啊啊', '1', '2', null, '2', '2', '2', '2', '2');
INSERT INTO `product` VALUES ('5', '测试产品4', 'test0004', '1543282789', '/public/Img/2018-11-27/15432828462890.jpg', '', '', '', '2', '2', '4', '0', '0', '3', '', '', '1', '2', null, '2', '2', '2', '2', '2');
INSERT INTO `product` VALUES ('6', '测试产品5', '00588', '1543282829', '/public/Img/2018-11-27/15432828246454.jpg', '', '', '', '3', '1', '10', '17', '21', '1', '&lt;p&gt;阿斯&lt;/p&gt;', '', '1', '1', '15%', '2', '1', '1', '1', '2');
INSERT INTO `product` VALUES ('7', '数码相机微单', '14-ceute', '1543307746', '/public/Img/2018-11-27/15433077392236.jpg', '', '', '', '3', '6', '7', '0', '0', '0', '&lt;p&gt;111&lt;/p&gt;', '&lt;p&gt;333&lt;/p&gt;', '1', '1', '15%', '1', '2', '2', '2', '2');
INSERT INTO `product` VALUES ('8', '外星人笔记本', 'wxr-c10-8g-256', '1543377427', '/public/Img/2018-11-28/15433773974789.jpg', '', '', '', '4', '6', '7', '0', '0', '0', '外星人笔记本', '8g内容 256g固态硬盘&lt;br/&gt;', '1', '1', '5%', '1', '2', '2', '2', '2');

-- ----------------------------
-- Table structure for `productattr`
-- ----------------------------
DROP TABLE IF EXISTS `productattr`;
CREATE TABLE `productattr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL COMMENT '产品ID',
  `attrValueID` int(11) DEFAULT NULL COMMENT '属性值ID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of productattr
-- ----------------------------
INSERT INTO `productattr` VALUES ('7', '2', '4');
INSERT INTO `productattr` VALUES ('9', '5', '2');
INSERT INTO `productattr` VALUES ('10', '7', '5');
INSERT INTO `productattr` VALUES ('11', '8', '7');

-- ----------------------------
-- Table structure for `producttag`
-- ----------------------------
DROP TABLE IF EXISTS `producttag`;
CREATE TABLE `producttag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL COMMENT '产品ID',
  `tagValueID` int(11) DEFAULT NULL COMMENT '属性值ID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of producttag
-- ----------------------------
INSERT INTO `producttag` VALUES ('17', '8', '8');
INSERT INTO `producttag` VALUES ('16', '7', '7');

-- ----------------------------
-- Table structure for `tagkey`
-- ----------------------------
DROP TABLE IF EXISTS `tagkey`;
CREATE TABLE `tagkey` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '属性名',
  `cid` int(11) DEFAULT NULL COMMENT '所属分类ID',
  `od` int(11) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tagkey
-- ----------------------------
INSERT INTO `tagkey` VALUES ('8', '电脑网络', '6', '1');
INSERT INTO `tagkey` VALUES ('9', '办公文教', '6', '1');
INSERT INTO `tagkey` VALUES ('10', '标签1', '8', '0');
INSERT INTO `tagkey` VALUES ('11', '标签2', '8', '0');

-- ----------------------------
-- Table structure for `tagvalue`
-- ----------------------------
DROP TABLE IF EXISTS `tagvalue`;
CREATE TABLE `tagvalue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `keyID` int(11) DEFAULT NULL COMMENT '属性键ID',
  `od` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tagvalue
-- ----------------------------
INSERT INTO `tagvalue` VALUES ('6', '平板', '8', '0');
INSERT INTO `tagvalue` VALUES ('7', 'DIY电脑', '8', '1');
INSERT INTO `tagvalue` VALUES ('8', '电脑整机', '8', '0');
INSERT INTO `tagvalue` VALUES ('9', '显示器', '8', '0');
INSERT INTO `tagvalue` VALUES ('10', '打印机', '9', '0');
INSERT INTO `tagvalue` VALUES ('11', '投影', '9', '0');
INSERT INTO `tagvalue` VALUES ('12', '标签值1', '10', '0');
INSERT INTO `tagvalue` VALUES ('13', '标签值2', '11', '0');

-- ----------------------------
-- Table structure for `telverify`
-- ----------------------------
DROP TABLE IF EXISTS `telverify`;
CREATE TABLE `telverify` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sendtime` int(11) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `verify` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `endtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of telverify
-- ----------------------------

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `headpic` varchar(255) DEFAULT NULL,
  `companyname` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `companyphone` varchar(255) DEFAULT NULL,
  `cardpic1` varchar(255) DEFAULT NULL,
  `cardpic2` varchar(255) DEFAULT NULL,
  `businesspic` varchar(255) DEFAULT NULL,
  `accounttype` tinyint(4) NOT NULL DEFAULT '1' COMMENT '账号类型 1:普通用户  2:商家',
  `salt` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------

-- ----------------------------
-- Table structure for `wishlist`
-- ----------------------------
DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wishlist
-- ----------------------------

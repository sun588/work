/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50165
Source Host           : localhost:3306
Source Database       : mmw

Target Server Type    : MYSQL
Target Server Version : 50165
File Encoding         : 65001

Date: 2018-12-05 17:48:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `address`
-- ----------------------------
DROP TABLE IF EXISTS `address`;
CREATE TABLE `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `isdefault` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1:非默认收货地址  2默认收货地址',
  `postcode` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of address
-- ----------------------------
INSERT INTO `address` VALUES ('2', '3', '山西省', '阳泉市', '城区', '洒洒', '2', '12360', '啊啊', '2147483647');
INSERT INTO `address` VALUES ('4', '3', '内蒙古自治区', '包头市', '青山区', '洒洒', '2', '12360', '啊啊', '2147483647');
INSERT INTO `address` VALUES ('5', '3', '江苏省', '常州市', '戚墅堰区', 'vklihua', '1', '12360', 'ssass', '13736912195');
INSERT INTO `address` VALUES ('9', '3', '浙江省', '湖州市', '长兴县', 'hjjjj', '1', '12360', 'ffgfg', '13736912195');
INSERT INTO `address` VALUES ('10', '3', '北京', '北京市', '西城区', 'bjss', '1', '325020', 'bj', '13736912195');

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
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of attrkey
-- ----------------------------
INSERT INTO `attrkey` VALUES ('4', '能耗', '4', '0');
INSERT INTO `attrkey` VALUES ('6', '按功能分类', '24', '0');
INSERT INTO `attrkey` VALUES ('7', '按客户端分类', '24', '0');
INSERT INTO `attrkey` VALUES ('8', '内存', '7', '0');
INSERT INTO `attrkey` VALUES ('9', '箱门结构', '31', '1');
INSERT INTO `attrkey` VALUES ('10', '制冷方式', '31', '2');
INSERT INTO `attrkey` VALUES ('11', '最大容积', '31', '1');
INSERT INTO `attrkey` VALUES ('12', '适用面积', '25', '1');
INSERT INTO `attrkey` VALUES ('13', '空调功率', '25', '1');
INSERT INTO `attrkey` VALUES ('14', '洗涤公斤量', '32', '1');
INSERT INTO `attrkey` VALUES ('15', '洗衣程序', '32', '1');
INSERT INTO `attrkey` VALUES ('16', '屏幕尺寸', '7', '1');
INSERT INTO `attrkey` VALUES ('17', '硬盘容量', '7', '2');
INSERT INTO `attrkey` VALUES ('18', '笔记本CPU', '7', '3');
INSERT INTO `attrkey` VALUES ('19', '最高分辨率', '204', '1');
INSERT INTO `attrkey` VALUES ('20', ' 烟机安装位置', '240', '1');
INSERT INTO `attrkey` VALUES ('21', '气源', '240', '1');
INSERT INTO `attrkey` VALUES ('22', '保修期', '237', '1');
INSERT INTO `attrkey` VALUES ('23', '网络类型', '291', '1');
INSERT INTO `attrkey` VALUES ('24', '机身内存ROM', '291', '1');
INSERT INTO `attrkey` VALUES ('25', '型号', '293', '1');
INSERT INTO `attrkey` VALUES ('26', '机身内存ROM', '293', '1');
INSERT INTO `attrkey` VALUES ('28', '3C数码配件', '110', '1');
INSERT INTO `attrkey` VALUES ('29', '分类', '295', '1');
INSERT INTO `attrkey` VALUES ('30', '售后服务', '229', '1');
INSERT INTO `attrkey` VALUES ('31', '长度', '229', '1');
INSERT INTO `attrkey` VALUES ('33', '3C数码配件', '28', '1');
INSERT INTO `attrkey` VALUES ('34', '内存容量', '144', '1');
INSERT INTO `attrkey` VALUES ('40', '保修期', '239', '1');
INSERT INTO `attrkey` VALUES ('37', '产地', '190', '2');
INSERT INTO `attrkey` VALUES ('38', '保修期', '190', '3');
INSERT INTO `attrkey` VALUES ('41', '保修期', '239', '1');

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
) ENGINE=MyISAM AUTO_INCREMENT=337 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of attrvalue
-- ----------------------------
INSERT INTO `attrvalue` VALUES ('3', '高清屏', '6', '0');
INSERT INTO `attrvalue` VALUES ('2', '二级', '4', '1');
INSERT INTO `attrvalue` VALUES ('4', '高性能', '6', '1');
INSERT INTO `attrvalue` VALUES ('6', '4G', '8', '0');
INSERT INTO `attrvalue` VALUES ('7', '8G', '8', '0');
INSERT INTO `attrvalue` VALUES ('8', '双门式', '9', '1');
INSERT INTO `attrvalue` VALUES ('9', '单门式 ', '9', '2');
INSERT INTO `attrvalue` VALUES ('10', '十字对开门式', '9', '3');
INSERT INTO `attrvalue` VALUES ('11', '直冷 ', '10', '1');
INSERT INTO `attrvalue` VALUES ('12', '风冷 ', '10', '1');
INSERT INTO `attrvalue` VALUES ('13', '混合制冷', '10', '1');
INSERT INTO `attrvalue` VALUES ('14', '180-240L', '11', '1');
INSERT INTO `attrvalue` VALUES ('15', '240-340L', '11', '1');
INSERT INTO `attrvalue` VALUES ('16', '180L以下', '11', '1');
INSERT INTO `attrvalue` VALUES ('17', '550L以上', '11', '1');
INSERT INTO `attrvalue` VALUES ('18', '460-550L', '11', '1');
INSERT INTO `attrvalue` VALUES ('19', '10㎡以下(书房)', '12', '1');
INSERT INTO `attrvalue` VALUES ('20', '10-20㎡(次卧)', '12', '1');
INSERT INTO `attrvalue` VALUES ('21', '20-30㎡(主卧) ', '12', '1');
INSERT INTO `attrvalue` VALUES ('22', '30-40㎡(会客厅)', '12', '1');
INSERT INTO `attrvalue` VALUES ('23', '40-60㎡(客厅+餐厅)', '12', '1');
INSERT INTO `attrvalue` VALUES ('24', '60-100㎡(大客厅)', '12', '1');
INSERT INTO `attrvalue` VALUES ('25', '10-16㎡', '12', '1');
INSERT INTO `attrvalue` VALUES ('26', '1匹', '13', '1');
INSERT INTO `attrvalue` VALUES ('27', '大1匹', '13', '1');
INSERT INTO `attrvalue` VALUES ('28', '1.5匹', '13', '3');
INSERT INTO `attrvalue` VALUES ('29', '大1.5匹', '13', '1');
INSERT INTO `attrvalue` VALUES ('30', '2匹', '13', '1');
INSERT INTO `attrvalue` VALUES ('31', '大2匹', '13', '1');
INSERT INTO `attrvalue` VALUES ('32', '2.5匹', '13', '2');
INSERT INTO `attrvalue` VALUES ('33', '3匹', '13', '1');
INSERT INTO `attrvalue` VALUES ('34', '5匹 ', '13', '1');
INSERT INTO `attrvalue` VALUES ('35', '小1.5匹', '13', '1');
INSERT INTO `attrvalue` VALUES ('36', '8-9KG', '14', '1');
INSERT INTO `attrvalue` VALUES ('37', '6-7KG', '14', '2');
INSERT INTO `attrvalue` VALUES ('38', '10KG以上', '14', '1');
INSERT INTO `attrvalue` VALUES ('39', '4-6KG', '14', '1');
INSERT INTO `attrvalue` VALUES ('40', '9-10KG', '14', '1');
INSERT INTO `attrvalue` VALUES ('41', '7-8kg', '14', '1');
INSERT INTO `attrvalue` VALUES ('42', '4kg以下', '14', '1');
INSERT INTO `attrvalue` VALUES ('43', '精细织物', '15', '1');
INSERT INTO `attrvalue` VALUES ('44', '衬衫,', '15', '1');
INSERT INTO `attrvalue` VALUES ('45', '窗帘', '15', '1');
INSERT INTO `attrvalue` VALUES ('46', '羽绒服', '15', '1');
INSERT INTO `attrvalue` VALUES ('47', '大件洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('48', '快洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('49', '标准洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('50', '筒自洁', '15', '1');
INSERT INTO `attrvalue` VALUES ('51', '单脱水', '15', '1');
INSERT INTO `attrvalue` VALUES ('52', '单甩', '15', '1');
INSERT INTO `attrvalue` VALUES ('53', '羊毛洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('54', '18.4英寸', '16', '1');
INSERT INTO `attrvalue` VALUES ('55', '17.3英寸', '16', '2');
INSERT INTO `attrvalue` VALUES ('56', '17英寸', '16', '3');
INSERT INTO `attrvalue` VALUES ('57', '15.6英寸', '16', '4');
INSERT INTO `attrvalue` VALUES ('58', '15.5英寸', '16', '5');
INSERT INTO `attrvalue` VALUES ('59', '15.4英寸', '16', '6');
INSERT INTO `attrvalue` VALUES ('60', '15英寸', '16', '7');
INSERT INTO `attrvalue` VALUES ('61', '14.1英寸', '16', '8');
INSERT INTO `attrvalue` VALUES ('62', '14英寸', '16', '9');
INSERT INTO `attrvalue` VALUES ('63', '13.9英寸', '16', '11');
INSERT INTO `attrvalue` VALUES ('64', '13.5英寸', '16', '13');
INSERT INTO `attrvalue` VALUES ('65', '13.3英寸 ', '16', '14');
INSERT INTO `attrvalue` VALUES ('66', '13英寸', '16', '15');
INSERT INTO `attrvalue` VALUES ('67', '12.5英寸', '16', '15');
INSERT INTO `attrvalue` VALUES ('68', '12.2英寸', '16', '16');
INSERT INTO `attrvalue` VALUES ('69', '12英寸', '16', '17');
INSERT INTO `attrvalue` VALUES ('70', '4K超高清(3840×2160)', '19', '1');
INSERT INTO `attrvalue` VALUES ('71', '11.6英寸', '16', '17');
INSERT INTO `attrvalue` VALUES ('72', '10.1英寸', '16', '18');
INSERT INTO `attrvalue` VALUES ('73', '全高清(1920×1080)', '19', '1');
INSERT INTO `attrvalue` VALUES ('74', '高清(1366×768)', '19', '1');
INSERT INTO `attrvalue` VALUES ('75', '7英寸', '16', '19');
INSERT INTO `attrvalue` VALUES ('76', ' 1280x1080', '19', '1');
INSERT INTO `attrvalue` VALUES ('77', '7680x4320', '19', '1');
INSERT INTO `attrvalue` VALUES ('78', '0G/160G/320G/500G/1T', '17', '1');
INSERT INTO `attrvalue` VALUES ('79', '0G/160G/320G/500G', '17', '2');
INSERT INTO `attrvalue` VALUES ('80', '0G/160G/500G/1T', '17', '3');
INSERT INTO `attrvalue` VALUES ('81', '500GB+128GB', '17', '4');
INSERT INTO `attrvalue` VALUES ('82', '500G+128G固态', '17', '6');
INSERT INTO `attrvalue` VALUES ('83', '1TB+512G固态', '17', '7');
INSERT INTO `attrvalue` VALUES ('84', '512G', '17', '7');
INSERT INTO `attrvalue` VALUES ('85', '512GB固态硬盘', '17', '8');
INSERT INTO `attrvalue` VALUES ('86', '512GB纯固态', '17', '9');
INSERT INTO `attrvalue` VALUES ('87', '500GB', '17', '11');
INSERT INTO `attrvalue` VALUES ('88', '无机械硬盘', '17', '12');
INSERT INTO `attrvalue` VALUES ('89', '1TB', '17', '13');
INSERT INTO `attrvalue` VALUES ('90', '500G机械', '17', '15');
INSERT INTO `attrvalue` VALUES ('91', '500g', '17', '16');
INSERT INTO `attrvalue` VALUES ('92', '2TB', '17', '17');
INSERT INTO `attrvalue` VALUES ('94', '256G PCIE SSD 固态硬盘', '17', '19');
INSERT INTO `attrvalue` VALUES ('95', '1TB+128G固态', '17', '20');
INSERT INTO `attrvalue` VALUES ('125', '英特尔 酷睿 i5-8250U', '18', '1');
INSERT INTO `attrvalue` VALUES ('97', '1T+128G固态', '17', '21');
INSERT INTO `attrvalue` VALUES ('98', ' 顶吸式', '20', '1');
INSERT INTO `attrvalue` VALUES ('99', '下吸式', '20', '1');
INSERT INTO `attrvalue` VALUES ('100', '256GB固态硬盘', '17', '21');
INSERT INTO `attrvalue` VALUES ('101', '侧吸式', '20', '1');
INSERT INTO `attrvalue` VALUES ('102', '天然气 ', '21', '1');
INSERT INTO `attrvalue` VALUES ('103', '液化气 ', '21', '1');
INSERT INTO `attrvalue` VALUES ('104', '人工煤气', '21', '1');
INSERT INTO `attrvalue` VALUES ('105', '气电两用', '21', '1');
INSERT INTO `attrvalue` VALUES ('106', ' 8年', '22', '1');
INSERT INTO `attrvalue` VALUES ('107', '12个月', '22', '1');
INSERT INTO `attrvalue` VALUES ('108', '36个月', '22', '1');
INSERT INTO `attrvalue` VALUES ('109', '6年', '22', '1');
INSERT INTO `attrvalue` VALUES ('110', '128G', '17', '23');
INSERT INTO `attrvalue` VALUES ('111', '5年', '21', '1');
INSERT INTO `attrvalue` VALUES ('112', '24个月', '22', '1');
INSERT INTO `attrvalue` VALUES ('113', '10年', '22', '1');
INSERT INTO `attrvalue` VALUES ('114', '6个月', '22', '1');
INSERT INTO `attrvalue` VALUES ('115', '128G固态硬盘', '17', '24');
INSERT INTO `attrvalue` VALUES ('116', '18个月', '22', '1');
INSERT INTO `attrvalue` VALUES ('117', '12年', '22', '1');
INSERT INTO `attrvalue` VALUES ('118', '1TB+128G SSD', '17', '25');
INSERT INTO `attrvalue` VALUES ('119', '256g', '17', '26');
INSERT INTO `attrvalue` VALUES ('120', '128GB固态硬盘', '17', '27');
INSERT INTO `attrvalue` VALUES ('121', '500BG/无机械硬盘', '17', '28');
INSERT INTO `attrvalue` VALUES ('122', '256GB', '17', '29');
INSERT INTO `attrvalue` VALUES ('123', '64G', '17', '30');
INSERT INTO `attrvalue` VALUES ('124', 'eMMC', '17', '32');
INSERT INTO `attrvalue` VALUES ('126', '英特尔 酷睿 i7-8750H', '18', '2');
INSERT INTO `attrvalue` VALUES ('127', '英特尔 酷睿 i5-8300H', '18', '3');
INSERT INTO `attrvalue` VALUES ('128', '英特尔 酷睿 i7-8550U', '18', '4');
INSERT INTO `attrvalue` VALUES ('129', '英特尔 赛扬 N3450', '18', '5');
INSERT INTO `attrvalue` VALUES ('130', 'AMD E2-9000', '18', '6');
INSERT INTO `attrvalue` VALUES ('131', '英特尔 酷睿 i5-8400', '18', '8');
INSERT INTO `attrvalue` VALUES ('132', '英特尔 酷睿 i5-8265U', '18', '9');
INSERT INTO `attrvalue` VALUES ('133', '英特尔 酷睿 i5-7200U', '18', '10');
INSERT INTO `attrvalue` VALUES ('134', '英特尔 酷睿 i7-7700HQ', '18', '12');
INSERT INTO `attrvalue` VALUES ('135', '英特尔 酷睿 i5-7300HQ', '18', '13');
INSERT INTO `attrvalue` VALUES ('136', '英特尔 酷睿 i7-7500U', '18', '14');
INSERT INTO `attrvalue` VALUES ('137', '英特尔 赛扬 3865U', '18', '14');
INSERT INTO `attrvalue` VALUES ('138', '英特尔 酷睿 i7-8565U', '18', '15');
INSERT INTO `attrvalue` VALUES ('139', '英特尔 酷睿 i3-7100U', '18', '16');
INSERT INTO `attrvalue` VALUES ('140', '英特尔 赛扬 N3350', '18', '16');
INSERT INTO `attrvalue` VALUES ('141', '英特尔 奔腾 G5400', '18', '17');
INSERT INTO `attrvalue` VALUES ('142', '英特尔 酷睿 i3-8130U', '18', '18');
INSERT INTO `attrvalue` VALUES ('143', '英特尔 酷睿 i7-8700', '18', '19');
INSERT INTO `attrvalue` VALUES ('144', '英特尔 酷睿 i3-7100', '18', '19');
INSERT INTO `attrvalue` VALUES ('145', '英特尔 奔腾 N4200', '18', '20');
INSERT INTO `attrvalue` VALUES ('146', 'AMD E2-9010', '18', '21');
INSERT INTO `attrvalue` VALUES ('147', 'AMD A9-9420', '18', '22');
INSERT INTO `attrvalue` VALUES ('148', '英特尔 酷睿 i3-6006U', '18', '23');
INSERT INTO `attrvalue` VALUES ('149', '英特尔 凌动 x5-Z8350', '18', '25');
INSERT INTO `attrvalue` VALUES ('150', '英特尔 酷睿 i5-6200U', '18', '26');
INSERT INTO `attrvalue` VALUES ('151', 'AMD A10-9600P', '18', '27');
INSERT INTO `attrvalue` VALUES ('152', 'TD-LTE/FDD-LTE/TDS/WCDMA/EVDO/GSM', '23', '1');
INSERT INTO `attrvalue` VALUES ('153', '英特尔 赛扬 2950M', '18', '27');
INSERT INTO `attrvalue` VALUES ('154', '移动4G+/联通4G+/电信4G+', '23', '1');
INSERT INTO `attrvalue` VALUES ('155', '英特尔 酷睿 i7-6700HQ', '18', '28');
INSERT INTO `attrvalue` VALUES ('156', 'TD-LTE/FDD-LTE/TDS/WCDMA/GSM', '23', '1');
INSERT INTO `attrvalue` VALUES ('157', '英特尔 酷睿 i7-7820HK', '18', '29');
INSERT INTO `attrvalue` VALUES ('158', '无需合约版', '23', '1');
INSERT INTO `attrvalue` VALUES ('159', '英特尔 酷睿 m3-7Y30', '18', '30');
INSERT INTO `attrvalue` VALUES ('160', '移动4G/联通4G/电信4G', '23', '1');
INSERT INTO `attrvalue` VALUES ('161', 'GSM', '23', '1');
INSERT INTO `attrvalue` VALUES ('162', '英特尔 酷睿 i7-6500U', '18', '31');
INSERT INTO `attrvalue` VALUES ('163', '英特尔 酷睿 i7-8850H', '18', '32');
INSERT INTO `attrvalue` VALUES ('164', '512GB', '24', '1');
INSERT INTO `attrvalue` VALUES ('165', 'Intel Z8350', '18', '33');
INSERT INTO `attrvalue` VALUES ('166', '256M', '24', '1');
INSERT INTO `attrvalue` VALUES ('167', '英特尔 奔腾 G4560', '18', '34');
INSERT INTO `attrvalue` VALUES ('168', '256GB', '24', '1');
INSERT INTO `attrvalue` VALUES ('169', '128M', '24', '1');
INSERT INTO `attrvalue` VALUES ('170', '128G', '24', '1');
INSERT INTO `attrvalue` VALUES ('171', '英特尔 酷睿 i7-7Y75 (Mac only)', '18', '34');
INSERT INTO `attrvalue` VALUES ('172', '64M', '24', '1');
INSERT INTO `attrvalue` VALUES ('173', '英特尔 酷睿 i5', '18', '35');
INSERT INTO `attrvalue` VALUES ('174', '英特尔 酷睿 i5-7Y54', '18', '36');
INSERT INTO `attrvalue` VALUES ('175', '英特尔 奔腾 4415U', '18', '37');
INSERT INTO `attrvalue` VALUES ('176', 'iPhone 8 Plus', '25', '1');
INSERT INTO `attrvalue` VALUES ('177', 'AMD A6-9220', '18', '38');
INSERT INTO `attrvalue` VALUES ('178', 'iPhone 7', '25', '1');
INSERT INTO `attrvalue` VALUES ('179', ' iPhone 6s', '25', '1');
INSERT INTO `attrvalue` VALUES ('180', '英特尔 酷睿 i7-7820HQ', '18', '38');
INSERT INTO `attrvalue` VALUES ('181', '英特尔 赛扬 N3060', '18', '39');
INSERT INTO `attrvalue` VALUES ('182', 'iPhone XS', '25', '1');
INSERT INTO `attrvalue` VALUES ('183', ' iPhone X ', '25', '1');
INSERT INTO `attrvalue` VALUES ('184', '英特尔 酷睿 i7-4500U (Mac only)', '18', '40');
INSERT INTO `attrvalue` VALUES ('185', '英特尔 酷睿 i5', '18', '41');
INSERT INTO `attrvalue` VALUES ('186', 'iPhone XS Max', '25', '1');
INSERT INTO `attrvalue` VALUES ('187', '英特尔 酷睿 i3-8100', '18', '42');
INSERT INTO `attrvalue` VALUES ('188', 'iPhone XR ', '25', '1');
INSERT INTO `attrvalue` VALUES ('189', '英特尔 酷睿 i7-7700', '18', '43');
INSERT INTO `attrvalue` VALUES ('190', 'NEX 旗舰版 ', '25', '1');
INSERT INTO `attrvalue` VALUES ('191', '512GB', '26', '1');
INSERT INTO `attrvalue` VALUES ('192', ' 256GB', '26', '1');
INSERT INTO `attrvalue` VALUES ('193', '平板电脑配件', '28', '1');
INSERT INTO `attrvalue` VALUES ('194', '笔记本专用配件', '28', '2');
INSERT INTO `attrvalue` VALUES ('195', '保护套/硅胶套 ', '29', '1');
INSERT INTO `attrvalue` VALUES ('196', '清洁套装', '20', '3');
INSERT INTO `attrvalue` VALUES ('197', '屏幕贴膜', '29', '1');
INSERT INTO `attrvalue` VALUES ('198', ' 数据线', '29', '1');
INSERT INTO `attrvalue` VALUES ('199', 'USB集线器', '20', '4');
INSERT INTO `attrvalue` VALUES ('200', '手机支架', '29', '1');
INSERT INTO `attrvalue` VALUES ('201', '手机充电器', '29', '1');
INSERT INTO `attrvalue` VALUES ('202', '专用线控耳机', '29', '1');
INSERT INTO `attrvalue` VALUES ('203', '手机电池', '29', '1');
INSERT INTO `attrvalue` VALUES ('204', '手机拍照配件', '29', '1');
INSERT INTO `attrvalue` VALUES ('205', '手机车载配件', '29', '1');
INSERT INTO `attrvalue` VALUES ('206', '手写笔', '29', '1');
INSERT INTO `attrvalue` VALUES ('207', '棉麻洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('208', '浸泡洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('209', '强力洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('210', '单漂', '15', '1');
INSERT INTO `attrvalue` VALUES ('211', '化纤洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('212', '单洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('213', '标准洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('214', '单脱水', '15', '1');
INSERT INTO `attrvalue` VALUES ('215', '牛仔洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('216', '羽绒', '15', '1');
INSERT INTO `attrvalue` VALUES ('217', '混合', '15', '1');
INSERT INTO `attrvalue` VALUES ('218', '预洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('219', '混合洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('220', '节能', '15', '1');
INSERT INTO `attrvalue` VALUES ('221', '羽绒洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('222', '单脱水', '15', '1');
INSERT INTO `attrvalue` VALUES ('223', '烘干', '15', '1');
INSERT INTO `attrvalue` VALUES ('224', '筒干燥', '15', '1');
INSERT INTO `attrvalue` VALUES ('225', '婴儿服', '15', '1');
INSERT INTO `attrvalue` VALUES ('226', '漂洗+脱水', '15', '1');
INSERT INTO `attrvalue` VALUES ('227', '浸泡洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('228', '羽绒服洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('229', '混合洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('230', '16米', '31', '1');
INSERT INTO `attrvalue` VALUES ('231', '混合洗,羽绒服洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('232', '3米 ', '31', '2');
INSERT INTO `attrvalue` VALUES ('233', '抗菌洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('234', '羽绒服洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('235', '混合洗 ，轻柔、洗涤', '15', '1');
INSERT INTO `attrvalue` VALUES ('236', '羽绒服洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('237', '留水', '15', '1');
INSERT INTO `attrvalue` VALUES ('238', '消毒洗，速洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('239', '真丝洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('240', '浸泡洗,单洗涤,单脱干,桶风干,常用,标准,大物,快速', '15', '1');
INSERT INTO `attrvalue` VALUES ('241', '标准，快速，浸泡洗，单洗涤，单脱干，桶风干', '15', '1');
INSERT INTO `attrvalue` VALUES ('242', ',消毒洗,超柔洗,羽绒,混合洗,童装,单脱,漂洗+脱水', '15', '1');
INSERT INTO `attrvalue` VALUES ('243', '烫烫净', '15', '1');
INSERT INTO `attrvalue` VALUES ('244', '衬衣，加强洗，速洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('245', '桶风干，免清洁', '15', '1');
INSERT INTO `attrvalue` VALUES ('246', '轻柔、排水', '15', '1');
INSERT INTO `attrvalue` VALUES ('247', '速洗，衬衣，加强洗，摇篮揉洗，内衣，童装，空气洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('248', '加热，内衣，护色，智能洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('249', '羽绒洗，丝绸，衬衫', '15', '1');
INSERT INTO `attrvalue` VALUES ('250', '常用,轻柔,速洗,标准,浸泡洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('251', '平板电脑配件', '33', '1');
INSERT INTO `attrvalue` VALUES ('252', '毛巾洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('253', '强力清洗，轻柔', '15', '1');
INSERT INTO `attrvalue` VALUES ('254', '笔记本专用配件', '33', '2');
INSERT INTO `attrvalue` VALUES ('255', '化纤,丝绸,衬衫,内衣,婴儿服', '15', '1');
INSERT INTO `attrvalue` VALUES ('256', '清洁套装', '33', '3');
INSERT INTO `attrvalue` VALUES ('257', '防过敏洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('258', '轻柔,排水', '15', '1');
INSERT INTO `attrvalue` VALUES ('259', 'SB集线器', '33', '4');
INSERT INTO `attrvalue` VALUES ('260', '漂洗, 浸泡洗,洗涤,脱水,桶风干,轻柔,快速', '15', '1');
INSERT INTO `attrvalue` VALUES ('261', '单脱水，智能洗，节能，筒洁净，单烘干', '15', '1');
INSERT INTO `attrvalue` VALUES ('262', '快洗，常用，标准，牛仔', '15', '1');
INSERT INTO `attrvalue` VALUES ('263', '水回收，迷你洗，儿童洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('264', '浸泡洗,单洗涤,单脱干,桶风干,常用,标准,快速', '15', '1');
INSERT INTO `attrvalue` VALUES ('265', '混合洗、浸泡洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('266', '常用,大物,轻柔,童衣,干洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('267', '常用、强力、速洗、免熨、羊毛、家纺、标准、羽绒、内衣、速洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('268', '内衣、留水、风干', '15', '1');
INSERT INTO `attrvalue` VALUES ('269', '外衣,内衣,童装,标准,快速,浸洗,加热', '15', '1');
INSERT INTO `attrvalue` VALUES ('270', '浸泡 洗涤 漂洗 脱水洗 准洗 童装', '15', '1');
INSERT INTO `attrvalue` VALUES ('271', '迷你洗，水回收', '15', '1');
INSERT INTO `attrvalue` VALUES ('272', '棉麻, 化纤、婴儿服、强力洗、加热、护肤洗', '15', '1');
INSERT INTO `attrvalue` VALUES ('273', '棉麻、化纤羽绒服洗, 羊毛洗，混合洗, 衬衫, 毛巾被，极速', '15', '1');
INSERT INTO `attrvalue` VALUES ('274', '512MB', '34', '1');
INSERT INTO `attrvalue` VALUES ('275', '风干，童装，家纺', '15', '1');
INSERT INTO `attrvalue` VALUES ('276', '丝毛、浸泡洗、水温、自编程序', '15', '1');
INSERT INTO `attrvalue` VALUES ('277', '512GB', '34', '2');
INSERT INTO `attrvalue` VALUES ('278', '棉麻洗，节能，单脱水，护色，浸泡洗，衬衫', '15', '1');
INSERT INTO `attrvalue` VALUES ('279', '256MB', '34', '3');
INSERT INTO `attrvalue` VALUES ('280', '256GB', '34', '4');
INSERT INTO `attrvalue` VALUES ('281', '200GB', '34', '5');
INSERT INTO `attrvalue` VALUES ('282', '128MB', '34', '6');
INSERT INTO `attrvalue` VALUES ('283', '128GB', '34', '6');
INSERT INTO `attrvalue` VALUES ('284', '64GB', '34', '7');
INSERT INTO `attrvalue` VALUES ('285', '64MB', '34', '7');
INSERT INTO `attrvalue` VALUES ('286', '32GB', '34', '8');
INSERT INTO `attrvalue` VALUES ('287', '8GB', '34', '9');
INSERT INTO `attrvalue` VALUES ('288', '16GB', '34', '10');
INSERT INTO `attrvalue` VALUES ('289', '2TB', '34', '11');
INSERT INTO `attrvalue` VALUES ('290', '1TB', '34', '14');
INSERT INTO `attrvalue` VALUES ('291', '中国大陆', '37', '1');
INSERT INTO `attrvalue` VALUES ('292', '美国', '37', '2');
INSERT INTO `attrvalue` VALUES ('293', '越南', '37', '3');
INSERT INTO `attrvalue` VALUES ('294', '12个月', '38', '1');
INSERT INTO `attrvalue` VALUES ('295', '24个月', '38', '2');
INSERT INTO `attrvalue` VALUES ('296', '36个月', '38', '3');
INSERT INTO `attrvalue` VALUES ('297', '3个月', '38', '4');
INSERT INTO `attrvalue` VALUES ('298', '6个月', '38', '5');
INSERT INTO `attrvalue` VALUES ('299', '18个月', '38', '6');
INSERT INTO `attrvalue` VALUES ('300', '无保修', '38', '7');
INSERT INTO `attrvalue` VALUES ('301', '5年', '38', '8');
INSERT INTO `attrvalue` VALUES ('302', '12年', '38', '9');
INSERT INTO `attrvalue` VALUES ('303', '10年', '38', '10');
INSERT INTO `attrvalue` VALUES ('304', '1.5米', '31', '3');
INSERT INTO `attrvalue` VALUES ('305', '1米', '31', '4');
INSERT INTO `attrvalue` VALUES ('307', '5米', '31', '5');
INSERT INTO `attrvalue` VALUES ('308', '2米', '31', '6');
INSERT INTO `attrvalue` VALUES ('309', '0.5m及以下', '31', '7');
INSERT INTO `attrvalue` VALUES ('310', '10米', '31', '8');
INSERT INTO `attrvalue` VALUES ('311', '15米', '31', '9');
INSERT INTO `attrvalue` VALUES ('312', '8米', '31', '10');
INSERT INTO `attrvalue` VALUES ('313', '20米', '31', '11');
INSERT INTO `attrvalue` VALUES ('314', '25cm', '31', '12');
INSERT INTO `attrvalue` VALUES ('315', '1.8米', '31', '13');
INSERT INTO `attrvalue` VALUES ('316', '12米', '31', '14');
INSERT INTO `attrvalue` VALUES ('317', '30米', '31', '15');
INSERT INTO `attrvalue` VALUES ('318', '25米', '31', '16');
INSERT INTO `attrvalue` VALUES ('319', '0.5m(不含)-1m(含)', '31', '17');
INSERT INTO `attrvalue` VALUES ('320', '35米', '31', '18');
INSERT INTO `attrvalue` VALUES ('321', '6米', '31', '19');
INSERT INTO `attrvalue` VALUES ('322', '7米', '31', '20');
INSERT INTO `attrvalue` VALUES ('323', '4米', '31', '21');
INSERT INTO `attrvalue` VALUES ('324', '1.3米', '31', '22');
INSERT INTO `attrvalue` VALUES ('325', '13米', '31', '23');
INSERT INTO `attrvalue` VALUES ('326', '9米', '31', '24');
INSERT INTO `attrvalue` VALUES ('327', '店铺三包', '30', '1');
INSERT INTO `attrvalue` VALUES ('328', '全国联保', '30', '2');
INSERT INTO `attrvalue` VALUES ('331', '12个月', '41', '1');
INSERT INTO `attrvalue` VALUES ('332', '24个月', '41', '2');
INSERT INTO `attrvalue` VALUES ('333', '36个月', '41', '3');
INSERT INTO `attrvalue` VALUES ('334', '5年', '41', '4');
INSERT INTO `attrvalue` VALUES ('335', '3个月', '41', '5');
INSERT INTO `attrvalue` VALUES ('336', '6个月', '41', '6');

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
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of brand
-- ----------------------------
INSERT INTO `brand` VALUES ('9', '魅族', '/public/Img/2018-12-03/15438261573712.jpg', null, '2');
INSERT INTO `brand` VALUES ('8', '荣耀', '/public/Img/2018-12-03/15438261285329.jpg', null, '2');
INSERT INTO `brand` VALUES ('7', '小米', '/public/Img/2018-12-03/15438261042575.jpg', null, '2');
INSERT INTO `brand` VALUES ('6', '酷派', '/public/Img/2018-12-03/15438256541347.jpg', null, '2');
INSERT INTO `brand` VALUES ('10', 'oppo', '/public/Img/2018-12-03/15438262015632.jpg', null, '2');
INSERT INTO `brand` VALUES ('11', '美图', '/public/Img/2018-12-03/15438262206412.jpg', null, '1');
INSERT INTO `brand` VALUES ('12', 'lenovo', '/public/Img/2018-12-03/15438262522536.jpg', null, '2');
INSERT INTO `brand` VALUES ('13', 'htc', '/public/Img/2018-12-03/15438263026434.jpg', null, '2');
INSERT INTO `brand` VALUES ('14', '华为', '/public/Img/2018-12-03/15438265852263.jpg', null, '2');
INSERT INTO `brand` VALUES ('15', '努比亚', '/public/Img/2018-12-03/15438266041056.jpg', null, '2');
INSERT INTO `brand` VALUES ('16', 'apple', '/public/Img/2018-12-03/15438266211018.jpg', null, '2');
INSERT INTO `brand` VALUES ('17', 'TCL', '/public/Img/2018-12-03/15438267245143.jpg', null, '2');
INSERT INTO `brand` VALUES ('18', '惠普', '/public/Img/2018-12-03/15438268556302.jpg', null, '1');
INSERT INTO `brand` VALUES ('19', 'lenovo', '/public/Img/2018-12-03/15438268791260.jpg', null, '1');
INSERT INTO `brand` VALUES ('20', '格力', '/public/Img/2018-12-03/15438269387786.jpg', null, '3');
INSERT INTO `brand` VALUES ('21', '美的', '/public/Img/2018-12-03/15438269785657.jpg', null, '3');
INSERT INTO `brand` VALUES ('22', '海尔', '/public/Img/2018-12-03/15438269946796.jpg', null, '3');
INSERT INTO `brand` VALUES ('23', 'TCL', '/public/Img/2018-12-03/15438270169360.jpg', null, '3');
INSERT INTO `brand` VALUES ('24', '方太', '/public/Img/2018-12-03/15438270431424.jpg', null, '3');
INSERT INTO `brand` VALUES ('25', '老板', '/public/Img/2018-12-03/15438270611537.jpg', null, '3');
INSERT INTO `brand` VALUES ('26', '创维', '/public/Img/2018-12-03/15438270828721.jpg', null, '3');
INSERT INTO `brand` VALUES ('27', '康佳', '/public/Img/2018-12-03/15438271116416.jpg', null, '3');
INSERT INTO `brand` VALUES ('28', '史密斯', '/public/Img/2018-12-03/15438271374011.jpg', null, '3');
INSERT INTO `brand` VALUES ('29', '能率', '/public/Img/2018-12-03/15438271791867.jpg', null, '3');
INSERT INTO `brand` VALUES ('30', '林内', '/public/Img/2018-12-03/15438272022463.jpg', null, '3');
INSERT INTO `brand` VALUES ('31', '松下电器', '/public/Img/2018-12-03/15438272294656.jpg', null, '3');
INSERT INTO `brand` VALUES ('32', '长虹', '/public/Img/2018-12-03/15438272541216.jpg', null, '3');
INSERT INTO `brand` VALUES ('33', '華帝', '/public/Img/2018-12-03/15438272967241.jpg', null, '3');
INSERT INTO `brand` VALUES ('34', '小米', '/public/Img/2018-12-03/15438273159669.jpg', null, '3');
INSERT INTO `brand` VALUES ('35', '乐视', '/public/Img/2018-12-03/15438273272235.jpg', null, '3');
INSERT INTO `brand` VALUES ('36', '酷开', '/public/Img/2018-12-03/15438273492918.jpg', null, '3');

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
  `oid` int(11) DEFAULT NULL COMMENT '报价ID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cart
-- ----------------------------
INSERT INTO `cart` VALUES ('4', '2', '8', '1543625228', '2', '3');
INSERT INTO `cart` VALUES ('5', '2', '7', '1543627655', '1', '4');

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
) ENGINE=MyISAM AUTO_INCREMENT=397 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', '数码影音', '0', '', '2', '');
INSERT INTO `category` VALUES ('2', '汽车', '0', '', '1', '');
INSERT INTO `category` VALUES ('6', '电脑', '0', '', '5', '');
INSERT INTO `category` VALUES ('7', '笔记本', '6', '', '3', '1');
INSERT INTO `category` VALUES ('8', '手机', '0', '', '4', '');
INSERT INTO `category` VALUES ('74', '游戏本', '7', '', '3', '游戏本');
INSERT INTO `category` VALUES ('23', '大家电', '0', '', '3', '');
INSERT INTO `category` VALUES ('25', '空调', '23', '', '0', '');
INSERT INTO `category` VALUES ('28', '电脑组装硬件 ', '6', '', '2', '电脑组装硬件 ');
INSERT INTO `category` VALUES ('31', '冰箱', '23', '', '3', '');
INSERT INTO `category` VALUES ('32', '洗衣机', '23', '', '4', '');
INSERT INTO `category` VALUES ('37', '多门式', '31', '', '4', '');
INSERT INTO `category` VALUES ('38', '对开双门式', '31', '', '5', '');
INSERT INTO `category` VALUES ('39', '三门式', '31', '', '6', '');
INSERT INTO `category` VALUES ('40', '双门式', '31', '', '7', '');
INSERT INTO `category` VALUES ('78', '键盘', '28', '', '2', '键盘');
INSERT INTO `category` VALUES ('190', '耳机耳放', '1', '', '1', '耳机耳放');
INSERT INTO `category` VALUES ('45', '滚筒洗衣机', '32', '', '1', '');
INSERT INTO `category` VALUES ('46', ' 迷你洗衣机', '32', '', '2', '');
INSERT INTO `category` VALUES ('47', ' 双缸洗衣机(波轮)', '32', '', '3', '');
INSERT INTO `category` VALUES ('48', ' 单缸洗衣机', '32', '', '3', '');
INSERT INTO `category` VALUES ('49', ' 分区洗洗衣机', '32', '', '4', '');
INSERT INTO `category` VALUES ('50', ' 单脱水机(甩干)', '32', '', '5', '');
INSERT INTO `category` VALUES ('51', '便携式洗衣机', '32', '', '8', '');
INSERT INTO `category` VALUES ('237', '热水器', '236', '', '1', '');
INSERT INTO `category` VALUES ('79', '固态硬盘', '28', '', '3', '固态硬盘');
INSERT INTO `category` VALUES ('70', '笔记本', '7', '', '1', '笔记本');
INSERT INTO `category` VALUES ('59', '移动空调', '25', '', '2', '');
INSERT INTO `category` VALUES ('60', '家用中央空调', '25', '', '3', '');
INSERT INTO `category` VALUES ('61', '窗机', '25', '', '4', '');
INSERT INTO `category` VALUES ('62', '柜机', '25', '', '6', '');
INSERT INTO `category` VALUES ('63', '壁挂式', '25', '', '8', '');
INSERT INTO `category` VALUES ('186', '家庭影院', '0', '', '2', '');
INSERT INTO `category` VALUES ('187', '舞台工程', '0', '', '2', '');
INSERT INTO `category` VALUES ('73', '轻薄本', '7', '', '2', '轻薄本');
INSERT INTO `category` VALUES ('75', '多彩本', '7', '', '4', '多彩本');
INSERT INTO `category` VALUES ('76', 'PC平板二合一', '7', '', '5', 'PC平板二合一');
INSERT INTO `category` VALUES ('188', '影音配件', '0', '', '2', '');
INSERT INTO `category` VALUES ('81', '有线鼠标', '28', '', '5', '有线鼠标');
INSERT INTO `category` VALUES ('82', '风扇', '28', '', '6', '风扇');
INSERT INTO `category` VALUES ('83', '多媒体音箱', '28', '', '7', '多媒体音箱');
INSERT INTO `category` VALUES ('84', '笔记本内存', '28', '', '8', '笔记本内存');
INSERT INTO `category` VALUES ('85', '机械键盘', '28', '', '9', '机械键盘');
INSERT INTO `category` VALUES ('86', '硬盘盒', '28', '', '10', '硬盘盒');
INSERT INTO `category` VALUES ('87', '鼠标垫', '28', '', '11', '鼠标垫');
INSERT INTO `category` VALUES ('88', '光驱', '28', '', '12', '光驱');
INSERT INTO `category` VALUES ('89', '摄像头', '28', '', '13', '摄像头');
INSERT INTO `category` VALUES ('90', '声卡', '28', '', '14', '声卡');
INSERT INTO `category` VALUES ('91', '笔记本硬盘', '28', '', '15', '笔记本硬盘');
INSERT INTO `category` VALUES ('189', '其他数码影音分类', '0', '', '2', '');
INSERT INTO `category` VALUES ('93', '手写板', '28', '', '17', '手写板');
INSERT INTO `category` VALUES ('94', '主板CPU套装', '28', '', '18', '主板CPU套装');
INSERT INTO `category` VALUES ('95', '台式机内存', '28', '', '19', '台式机内存');
INSERT INTO `category` VALUES ('96', '显卡', '28', '', '20', '显卡');
INSERT INTO `category` VALUES ('202', '收录机', '1', '', '12', '收录机');
INSERT INTO `category` VALUES ('98', '台式机硬盘', '28', '', '23', '台式机硬盘');
INSERT INTO `category` VALUES ('99', 'CPU', '28', '', '24', 'CPU');
INSERT INTO `category` VALUES ('100', '主板', '28', '', '25', '主板');
INSERT INTO `category` VALUES ('101', '显卡', '28', '', '26', '显卡');
INSERT INTO `category` VALUES ('102', '内存', '28', '', '27', '内存');
INSERT INTO `category` VALUES ('103', '机箱', '28', '', '28', '机箱');
INSERT INTO `category` VALUES ('104', '电源', '28', '', '29', '电源');
INSERT INTO `category` VALUES ('105', '散热器', '28', '', '29', '散热器');
INSERT INTO `category` VALUES ('110', '电脑外设配件', '6', '', '1', '电脑外设配件');
INSERT INTO `category` VALUES ('197', '复读机', '1', '', '7', '复读机');
INSERT INTO `category` VALUES ('112', '必抢显示器', '110', '', '1', '必抢显示器');
INSERT INTO `category` VALUES ('114', '高端曲面显示器', '110', '', '2', '高端曲面显示器');
INSERT INTO `category` VALUES ('116', '家用办公显示器', '110', '', '3', '家用办公显示器');
INSERT INTO `category` VALUES ('117', '4K游戏竞技显示器', '110', '', '4', '4K游戏竞技显示器');
INSERT INTO `category` VALUES ('203', '手机K歌话筒', '1', '', '13', '手机K歌话筒');
INSERT INTO `category` VALUES ('120', '键盘', '110', '', '5', '键盘');
INSERT INTO `category` VALUES ('121', '有线鼠标', '110', '', '6', '有线鼠标');
INSERT INTO `category` VALUES ('204', '平板电视', '23', '', '1', '');
INSERT INTO `category` VALUES ('123', '无线鼠标', '110', '', '6', '无线鼠标');
INSERT INTO `category` VALUES ('205', '网络/高清播放器', '186', '', '1', '网络/高清播放器');
INSERT INTO `category` VALUES ('125', '鼠键套装', '110', '', '7', '鼠键套装');
INSERT INTO `category` VALUES ('127', '鼠标垫', '110', '', '8', '鼠标垫');
INSERT INTO `category` VALUES ('128', '摄像头', '110', '', '10', '摄像头');
INSERT INTO `category` VALUES ('130', '手写板', '110', '', '10', '手写板');
INSERT INTO `category` VALUES ('132', '硬盘盒', '110', '', '11', '硬盘盒');
INSERT INTO `category` VALUES ('206', '蓝光DVD', '186', '', '2', '蓝光DVD');
INSERT INTO `category` VALUES ('135', 'UPS不间断电源', '110', '', '13', 'UPS电源');
INSERT INTO `category` VALUES ('207', '家庭影院', '186', '', '3', '家庭影院');
INSERT INTO `category` VALUES ('137', '连接线/连接器/转换器', '110', '', '13', '连接线/连接器/转换器');
INSERT INTO `category` VALUES ('201', '扩音器', '1', '', '11', '扩音器');
INSERT INTO `category` VALUES ('144', '移动存储', '6', '', '4', '移动存储');
INSERT INTO `category` VALUES ('200', '录音笔', '1', '', '10', '录音笔');
INSERT INTO `category` VALUES ('199', '随身视听', '1', '', '9', '随身视听');
INSERT INTO `category` VALUES ('148', 'OTG U盘', '144', '', '1', 'OTG U盘');
INSERT INTO `category` VALUES ('151', '定制U盘', '144', '', '2', '定制U盘');
INSERT INTO `category` VALUES ('153', '智能存储管家', '144', '', '3', '智能存储管家');
INSERT INTO `category` VALUES ('155', '移动固态硬盘', '144', '', '5', '移动固态硬盘');
INSERT INTO `category` VALUES ('195', '拉杆音箱/广场舞音箱', '1', '', '5', '拉杆音箱/广场舞音箱');
INSERT INTO `category` VALUES ('157', '移动硬盘', '144', '', '6', '移动硬盘');
INSERT INTO `category` VALUES ('194', 'MP3/MP4', '1', '', '4', 'MP3/MP4');
INSERT INTO `category` VALUES ('160', '无线移动硬盘', '144', '', '6', '无线移动硬盘');
INSERT INTO `category` VALUES ('162', 'TF卡', '144', '', '8', 'TF卡');
INSERT INTO `category` VALUES ('163', 'SD卡', '144', '', '9', 'SD卡');
INSERT INTO `category` VALUES ('184', '单门式 ', '31', '', '1', '');
INSERT INTO `category` VALUES ('166', 'Wifi SD卡', '144', '', '10', 'Wifi SD卡');
INSERT INTO `category` VALUES ('193', '老人唱戏机', '1', '', '3', '老人唱戏机');
INSERT INTO `category` VALUES ('168', '行车记录仪内存卡', '144', '', '11', '行车记录仪内存卡');
INSERT INTO `category` VALUES ('185', '十字对开门式', '31', '', '1', '');
INSERT INTO `category` VALUES ('170', '相机卡', '144', '', '12', '相机卡');
INSERT INTO `category` VALUES ('196', '收音机', '1', '', '6', '收音机');
INSERT INTO `category` VALUES ('172', '网络设备', '6', '', '5', '网络设备');
INSERT INTO `category` VALUES ('198', '移动/便携DVD', '1', '', '8', '移动/便携DVD');
INSERT INTO `category` VALUES ('175', '路由器', '172', '', '1', '路由器');
INSERT INTO `category` VALUES ('176', '网卡', '172', '', '2', '网卡');
INSERT INTO `category` VALUES ('177', '电力猫', '172', '', '3', '电力猫');
INSERT INTO `category` VALUES ('178', '中继器/扩展器', '172', '', '5', '中继器/扩展器');
INSERT INTO `category` VALUES ('179', '3G/4G无线路由器', '172', '', '6', '3G/4G无线路由器');
INSERT INTO `category` VALUES ('180', '交换机', '172', '', '7', '交换机');
INSERT INTO `category` VALUES ('181', '随身WIFI', '172', '', '8', '随身WIFI');
INSERT INTO `category` VALUES ('182', '光纤设备', '172', '', '9', '光纤设备');
INSERT INTO `category` VALUES ('183', '网络存储', '172', '', '12', '网络存储');
INSERT INTO `category` VALUES ('208', '52-55英寸', '204', '', '1', '');
INSERT INTO `category` VALUES ('209', '回音壁音响', '186', '', '4', '回音壁音响');
INSERT INTO `category` VALUES ('210', '32英寸以下', '204', '', '1', '');
INSERT INTO `category` VALUES ('211', '功放', '186', '', '5', '功放');
INSERT INTO `category` VALUES ('212', '65英寸以上', '204', '', '1', '');
INSERT INTO `category` VALUES ('213', '低音炮', '186', '', '6', '低音炮');
INSERT INTO `category` VALUES ('214', '42-48英寸', '204', '', '1', '');
INSERT INTO `category` VALUES ('215', 'HIFI音响/套装', '186', '', '7', 'HIFI音响/套装');
INSERT INTO `category` VALUES ('216', '麦克风/话筒', '186', '', '8', '麦克风/话筒');
INSERT INTO `category` VALUES ('217', 'LED电视 ', '204', '', '1', '');
INSERT INTO `category` VALUES ('218', 'CD机/卡座/黑胶音源', '186', '', '9', 'CD机/卡座/黑胶音源');
INSERT INTO `category` VALUES ('219', '48-52英寸', '204', '', '1', '');
INSERT INTO `category` VALUES ('220', '32-42英寸', '204', '', '1', '');
INSERT INTO `category` VALUES ('221', '60-65英寸', '204', '', '1', '');
INSERT INTO `category` VALUES ('222', '影碟机', '186', '', '10', '影碟机');
INSERT INTO `category` VALUES ('223', '调音台', '187', '', '1', '调音台');
INSERT INTO `category` VALUES ('224', '打碟机', '187', '', '2', '打碟机');
INSERT INTO `category` VALUES ('225', '音频放大器', '187', '', '3', '音频放大器');
INSERT INTO `category` VALUES ('226', '卡拉ok音箱', '187', '', '4', '卡拉ok音箱');
INSERT INTO `category` VALUES ('227', '公共广播', '187', '', '5', '公共广播');
INSERT INTO `category` VALUES ('228', '会议系统', '187', '', '6', '会议系统');
INSERT INTO `category` VALUES ('229', 'HDMI线', '188', '', '1', 'HDMI线');
INSERT INTO `category` VALUES ('230', 'VGA线', '188', '', '2', 'VGA线');
INSERT INTO `category` VALUES ('231', '影音家电配件', '188', '', '3', '影音家电配件');
INSERT INTO `category` VALUES ('232', '家庭影院配件', '188', '', '4', '家庭影院配件');
INSERT INTO `category` VALUES ('233', '其他影音家电', '188', '', '5', '其他影音家电');
INSERT INTO `category` VALUES ('234', '网络/电脑播放器', '189', '', '1', '网络/电脑播放器');
INSERT INTO `category` VALUES ('235', '智能音箱', '189', '', '2', '智能音箱');
INSERT INTO `category` VALUES ('236', '大家电2', '0', '', '0', '热水器/油烟机');
INSERT INTO `category` VALUES ('260', '蓝牙音箱', '239', '', '1', '蓝牙音箱');
INSERT INTO `category` VALUES ('239', '桌面音响', '1', '', '2', '桌面音响');
INSERT INTO `category` VALUES ('240', '烟机烟灶', '236', '', '1', '');
INSERT INTO `category` VALUES ('241', '国际大牌耳机', '190', '', '1', '国际大牌耳机');
INSERT INTO `category` VALUES ('242', '太阳能热水器', '237', '', '1', '');
INSERT INTO `category` VALUES ('243', '电热水器', '237', '', '1', '');
INSERT INTO `category` VALUES ('244', '蓝牙耳机', '190', '', '2', '蓝牙耳机');
INSERT INTO `category` VALUES ('245', '空气能热水器', '237', '', '1', '');
INSERT INTO `category` VALUES ('246', '锅炉及其他热水设备', '237', '', '1', '');
INSERT INTO `category` VALUES ('247', '游戏耳机', '190', '', '3', '游戏耳机');
INSERT INTO `category` VALUES ('248', '厨宝', '237', '', '1', '');
INSERT INTO `category` VALUES ('249', '电热水龙头', '237', '', '1', '');
INSERT INTO `category` VALUES ('250', '运动耳机', '190', '', '4', '运动耳机');
INSERT INTO `category` VALUES ('251', '即热式热水器', '237', '', '1', '');
INSERT INTO `category` VALUES ('252', '监听耳机', '190', '', '5', '监听耳机');
INSERT INTO `category` VALUES ('253', '岛式', '240', '', '1', '');
INSERT INTO `category` VALUES ('254', '手机耳机', '190', '', '6', '手机耳机');
INSERT INTO `category` VALUES ('255', '中式 ', '240', '', '1', '');
INSERT INTO `category` VALUES ('257', '耳放', '190', '', '7', '耳放');
INSERT INTO `category` VALUES ('258', '侧吸', '240', '', '1', '');
INSERT INTO `category` VALUES ('259', '耳机', '190', '', '8', '耳机');
INSERT INTO `category` VALUES ('261', '电脑多媒体音箱', '239', '', '2', '电脑多媒体音箱');
INSERT INTO `category` VALUES ('262', '组合音响', '239', '', '3', '组合音响');
INSERT INTO `category` VALUES ('263', '苹果专用音箱', '239', '', '4', '苹果专用音箱');
INSERT INTO `category` VALUES ('264', 'wifi音箱', '239', '', '5', 'wifi音箱');
INSERT INTO `category` VALUES ('265', '插卡音箱', '239', '', '6', '插卡音箱');
INSERT INTO `category` VALUES ('266', '音箱套装', '195', '', '2', '音箱套装');
INSERT INTO `category` VALUES ('267', '重低音', '195', '', '1', '重低音');
INSERT INTO `category` VALUES ('268', '前置', '195', '', '3', '前置');
INSERT INTO `category` VALUES ('269', '环绕', '195', '', '4', '环绕');
INSERT INTO `category` VALUES ('270', '中置', '195', '', '5', '中置');
INSERT INTO `category` VALUES ('271', '台式', '196', '', '1', '台式');
INSERT INTO `category` VALUES ('272', '袖珍式', '196', '', '2', '袖珍式');
INSERT INTO `category` VALUES ('273', '便携式', '196', '', '3', '便携式');
INSERT INTO `category` VALUES ('274', 'CD随身听', '199', '', '1', 'CD随身听');
INSERT INTO `category` VALUES ('275', 'TAPE磁带随身听', '199', '', '2', 'TAPE磁带随身听');
INSERT INTO `category` VALUES ('276', '其他随身视听', '199', '', '3', '其他随身视听');
INSERT INTO `category` VALUES ('277', '手机', '203', '', '1', '手机');
INSERT INTO `category` VALUES ('278', '直播专用', '203', '', '2', '直播专用');
INSERT INTO `category` VALUES ('279', '电脑', '203', '', '3', '电脑');
INSERT INTO `category` VALUES ('280', '家用', '203', '', '4', '家用');
INSERT INTO `category` VALUES ('281', '录音专用', '203', '', '5', '录音专用');
INSERT INTO `category` VALUES ('282', '游戏语音', '203', '', '6', '游戏语音');
INSERT INTO `category` VALUES ('283', 'ktv专用', '203', '', '7', 'ktv专用');
INSERT INTO `category` VALUES ('284', '会议专用', '203', '', '8', '会议专用');
INSERT INTO `category` VALUES ('285', '舞台', '203', '', '9', '舞台');
INSERT INTO `category` VALUES ('286', '广电专用', '203', '', '10', '广电专用');
INSERT INTO `category` VALUES ('287', '乐器', '203', '', '11', '乐器');
INSERT INTO `category` VALUES ('288', '采访专用', '203', '', '12', '采访专用');
INSERT INTO `category` VALUES ('289', '摄像机专用', '203', '', '13', '摄像机专用');
INSERT INTO `category` VALUES ('290', '网络播放器', '205', '', '1', '网络播放器');
INSERT INTO `category` VALUES ('291', '手机', '8', '', '1', '');
INSERT INTO `category` VALUES ('292', '硬盘播放器，网络播放器', '205', '', '2', '硬盘播放器，网络播放器');
INSERT INTO `category` VALUES ('293', '合约机', '8', '', '1', '');
INSERT INTO `category` VALUES ('294', '硬盘播放器', '205', '', '3', '硬盘播放器');
INSERT INTO `category` VALUES ('295', '手机配件', '8', '', '1', '');
INSERT INTO `category` VALUES ('296', '2.0声道', '207', '', '1', '2.0声道');
INSERT INTO `category` VALUES ('297', '2.1声道', '207', '', '2', '2.1声道');
INSERT INTO `category` VALUES ('298', '5.0声道', '207', '', '3', '5.0声道');
INSERT INTO `category` VALUES ('299', '5.1声道', '207', '', '4', '5.1声道');
INSERT INTO `category` VALUES ('300', '7.1声道', '207', '', '5', '7.1声道');
INSERT INTO `category` VALUES ('301', '5.2', '207', '', '6', '5.2');
INSERT INTO `category` VALUES ('302', '2.1', '209', '', '1', '2.1');
INSERT INTO `category` VALUES ('303', '5.1', '209', '', '2', '5.1');
INSERT INTO `category` VALUES ('304', '2.0', '209', '', '3', '2.0');
INSERT INTO `category` VALUES ('305', '7.1', '209', '', '4', '7.1');
INSERT INTO `category` VALUES ('306', 'AV功放', '211', '', '1', 'AV功放');
INSERT INTO `category` VALUES ('307', 'HIFI功放', '211', '', '2', 'HIFI功放');
INSERT INTO `category` VALUES ('308', '导管式', '215', '', '1', '导管式');
INSERT INTO `category` VALUES ('309', '密封式', '215', '', '2', '密封式');
INSERT INTO `category` VALUES ('310', '倒相式', '215', '', '3', '倒相式');
INSERT INTO `category` VALUES ('311', '反射式', '215', '', '4', '反射式');
INSERT INTO `category` VALUES ('312', '落地式', '215', '', '5', '落地式');
INSERT INTO `category` VALUES ('313', '书架式', '215', '', '6', '书架式');
INSERT INTO `category` VALUES ('314', 'Hifi对箱', '215', '', '7', 'Hifi对箱');
INSERT INTO `category` VALUES ('315', 'Hifi器材', '186', '', '7', 'Hifi器材');
INSERT INTO `category` VALUES ('316', '效果器(舞台)', '315', '', '1', '效果器(舞台)');
INSERT INTO `category` VALUES ('317', '解码器', '315', '', '2', '解码器');
INSERT INTO `category` VALUES ('318', '胆机', '315', '', '3', '胆机');
INSERT INTO `category` VALUES ('319', '话放', '315', '', '4', '话放');
INSERT INTO `category` VALUES ('320', '混响', '315', '', '5', '混响');
INSERT INTO `category` VALUES ('321', '均衡(舞台)', '315', '', '6', '均衡(舞台)');
INSERT INTO `category` VALUES ('322', '分频器(舞台)', '315', '', '7', '分频器(舞台)');
INSERT INTO `category` VALUES ('323', '有线', '216', '', '1', '有线');
INSERT INTO `category` VALUES ('324', '无线', '216', '', '2', '无线');
INSERT INTO `category` VALUES ('325', '交流电', '218', '', '1', '交流电');
INSERT INTO `category` VALUES ('326', '电池', '218', '', '2', '电池');
INSERT INTO `category` VALUES ('327', '玻璃纤维', '229', '', '1', '玻璃纤维');
INSERT INTO `category` VALUES ('328', '纯银', '229', '', '2', '纯银');
INSERT INTO `category` VALUES ('329', '高纯度单晶铜', '229', '', '3', '高纯度单晶铜');
INSERT INTO `category` VALUES ('330', '光纤', '229', '', '4', '光纤');
INSERT INTO `category` VALUES ('331', '合金', '229', '', '5', '合金');
INSERT INTO `category` VALUES ('332', '无氧铜', '229', '', '6', '无氧铜');
INSERT INTO `category` VALUES ('333', '纯铜', '229', '', '7', '纯铜');
INSERT INTO `category` VALUES ('334', '纯银', '230', '', '1', '纯银');
INSERT INTO `category` VALUES ('335', '合金', '230', '', '2', '合金');
INSERT INTO `category` VALUES ('336', '碟/电池/适配器', '231', '', '1', '碟/电池/适配器');
INSERT INTO `category` VALUES ('337', '音响脚架/机架', '231', '', '2', '音响脚架/机架');
INSERT INTO `category` VALUES ('338', '音频/视频无线传输器材', '231', '', '3', '音频/视频无线传输器材');
INSERT INTO `category` VALUES ('339', '电容', '231', '', '4', '电容');
INSERT INTO `category` VALUES ('340', '电阻', '231', '', '5', '电阻');
INSERT INTO `category` VALUES ('341', '端子/插头/插座', '231', '', '6', '端子/插头/插座');
INSERT INTO `category` VALUES ('342', '耳机/耳麦配件', '231', '', '7', '耳机/耳麦配件');
INSERT INTO `category` VALUES ('343', '喇叭单元/分频器', '231', '', '8', '喇叭单元/分频器');
INSERT INTO `category` VALUES ('344', '其他影音配件', '231', '', '9', '其他影音配件');
INSERT INTO `category` VALUES ('345', '遥控', '231', '', '10', '遥控');
INSERT INTO `category` VALUES ('346', '移动', '293', '', '1', '');
INSERT INTO `category` VALUES ('347', '联通', '293', '', '1', '');
INSERT INTO `category` VALUES ('348', '电子管', '231', '', '11', '电子管');
INSERT INTO `category` VALUES ('349', '电信', '293', '', '1', '');
INSERT INTO `category` VALUES ('350', '合约机', '293', '', '1', '');
INSERT INTO `category` VALUES ('351', '手机壳', '295', '', '1', '');
INSERT INTO `category` VALUES ('352', '电源滤波器', '231', '', '12', '电源滤波器');
INSERT INTO `category` VALUES ('353', '手机贴膜', '295', '', '1', '');
INSERT INTO `category` VALUES ('354', '移动电源', '295', '', '1', '');
INSERT INTO `category` VALUES ('355', '数据线', '295', '', '1', '');
INSERT INTO `category` VALUES ('356', '音调板', '231', '', '13', '音调板');
INSERT INTO `category` VALUES ('357', '蓝牙耳机', '295', '', '1', '');
INSERT INTO `category` VALUES ('358', '手机耳机', '295', '', '1', '');
INSERT INTO `category` VALUES ('359', '激光头', '231', '', '14', '激光头');
INSERT INTO `category` VALUES ('360', '手机电池', '295', '', '1', '');
INSERT INTO `category` VALUES ('361', '线控', '231', '', '15', '线控');
INSERT INTO `category` VALUES ('362', '充电器', '295', '', '1', '');
INSERT INTO `category` VALUES ('363', '手机支架', '295', '', '1', '');
INSERT INTO `category` VALUES ('364', '功放板', '231', '', '16', '功放板');
INSERT INTO `category` VALUES ('365', '手机拍照配件 ', '295', '', '1', '');
INSERT INTO `category` VALUES ('366', '手机车载配件', '295', '', '1', '');
INSERT INTO `category` VALUES ('367', '电源插座/接线板', '231', '', '17', '电源插座/接线板');
INSERT INTO `category` VALUES ('368', '手机话筒', '295', '', '1', '');
INSERT INTO `category` VALUES ('369', '变压器', '231', '', '18', '变压器');
INSERT INTO `category` VALUES ('370', '手机', '291', '', '1', '');
INSERT INTO `category` VALUES ('371', '机箱', '231', '', '19', '机箱');
INSERT INTO `category` VALUES ('372', '环绕架', '231', '', '20', '环绕架');
INSERT INTO `category` VALUES ('373', '麦克风/话筒配件', '231', '', '21', '麦克风/话筒配件');
INSERT INTO `category` VALUES ('374', '遥控器', '231', '', '22', '遥控器');
INSERT INTO `category` VALUES ('375', '电源（舞台）', '231', '', '23', '电源（舞台）');
INSERT INTO `category` VALUES ('376', '支架', '231', '', '24', '支架');
INSERT INTO `category` VALUES ('377', '舞台灯光', '231', '', '25', '舞台灯光');
INSERT INTO `category` VALUES ('378', '接线柱', '231', '', '26', '接线柱');
INSERT INTO `category` VALUES ('379', '线材', '231', '', '27', '线材');
INSERT INTO `category` VALUES ('380', '其它影音产品', '233', '', '1', '其它影音产品');
INSERT INTO `category` VALUES ('381', '光盘/硬盘/VCR 录像机', '233', '', '2', '光盘/硬盘/VCR 录像机');
INSERT INTO `category` VALUES ('382', '6', '235', '', '1', '6');
INSERT INTO `category` VALUES ('383', '2', '235', '', '2', '2');
INSERT INTO `category` VALUES ('384', '4', '235', '', '3', '4');
INSERT INTO `category` VALUES ('385', '6+1', '235', '', '4', '6+1');
INSERT INTO `category` VALUES ('386', '6麦', '235', '', '5', '6麦');
INSERT INTO `category` VALUES ('387', '4+1', '235', '', '6', '4+1');
INSERT INTO `category` VALUES ('388', '小轿车', '2', '', '1', '小轿车');
INSERT INTO `category` VALUES ('389', '中型车', '2', '', '2', '中型车');
INSERT INTO `category` VALUES ('390', 'MPV', '2', '', '3', 'MPV');
INSERT INTO `category` VALUES ('391', 'SUV', '2', '', '4', 'SUV');
INSERT INTO `category` VALUES ('392', '跑车', '2', '', '5', '跑车');
INSERT INTO `category` VALUES ('393', '新能源汽车', '2', '', '6', '新能源汽车');
INSERT INTO `category` VALUES ('394', '1.5L', '388', '', '1', '1.5L');
INSERT INTO `category` VALUES ('395', '1.8L', '388', '', '2', '1.8L');
INSERT INTO `category` VALUES ('396', '1.6L', '388', '', '3', '1.6L');

-- ----------------------------
-- Table structure for `offer`
-- ----------------------------
DROP TABLE IF EXISTS `offer`;
CREATE TABLE `offer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `info` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `state` tinyint(4) NOT NULL DEFAULT '1' COMMENT '报价审核  1:未审核  2:已审核',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of offer
-- ----------------------------
INSERT INTO `offer` VALUES ('3', '3', '8', '9999', '最多可填写32个文字', '1543559422', '1');
INSERT INTO `offer` VALUES ('4', '3', '7', '8888', '最多可填写32个文字', '1543627599', '1');

-- ----------------------------
-- Table structure for `page`
-- ----------------------------
DROP TABLE IF EXISTS `page`;
CREATE TABLE `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `content` text,
  `od` int(11) NOT NULL DEFAULT '0',
  `type` int(11) DEFAULT NULL COMMENT '1:购物指南 2:支付方式 3:售后服务 4:商家入驻 5:关于我们',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of page
-- ----------------------------
INSERT INTO `page` VALUES ('1', '购物指南页面1', '&lt;p&gt;茶厂村常常225&lt;br/&gt;&lt;/p&gt;', '0', '1');

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
INSERT INTO `picture` VALUES ('4', '轮播图1', 'http://www.baidu.com', '2', '/public/Img/2018-12-03/15438258196902.jpg', '1', '1');
INSERT INTO `picture` VALUES ('5', '广告图1', '#', '7', '/public/Img/2018-12-03/15438258076097.jpg', '1', '1');
INSERT INTO `picture` VALUES ('6', '轮播2改', '#', '2', '/public/Img/2018-12-03/15438258519618.jpg', '1', '1');

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
  `column6` tinyint(4) NOT NULL DEFAULT '2' COMMENT '1:推荐  2:不推荐  精品推荐',
  `column7` tinyint(4) NOT NULL DEFAULT '2' COMMENT '1:推荐  2:不推荐 智能潮货',
  `column8` tinyint(4) NOT NULL DEFAULT '2' COMMENT '1:推荐  2:不推荐  家用电器',
  `column9` tinyint(4) NOT NULL DEFAULT '2' COMMENT '1:推荐  2:不推荐  品牌汽车',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('13', 'TCL 55A660U 55英寸液晶电视 网络智能wifi超高清4k平板LED电视', '55A660U', '1543998227', '/public/Img/2018-12-05/15439981764837.jpg', '/public/Img/2018-12-05/15439981768282.jpg', '/public/Img/2018-12-05/15439981761367.jpg', '', '23', '23', '204', '208', '0', '1', '&lt;p style=&quot;text-align: left;&quot;&gt;&lt;img src=&quot;/ueditor/php/upload/image/20181205/1543998206823929.jpg&quot; title=&quot;1543998206823929.jpg&quot; alt=&quot;TB2I2cJHxGYBuNjy0FnXXX5lpXa_!!2355806532-0-item_pic.jpg_430x430q90.jpg&quot;/&gt;&lt;img src=&quot;/ueditor/php/upload/image/20181205/1543998223809428.jpg&quot; title=&quot;1543998223809428.jpg&quot; alt=&quot;O1CN011y7hZE7WSYiGDwA_!!2355806532.jpg_430x430q90.jpg&quot;/&gt;&lt;/p&gt;', '&lt;table class=&quot;tm-tableAttr&quot; width=&quot;789&quot;&gt;&lt;thead style=&quot;margin: 0px; padding: 0px; background-color: rgb(238, 238, 238); border-bottom: 1px solid rgb(228, 228, 228); font-weight: 700; font-size: 14px; color: rgb(153, 153, 153);&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot; class=&quot;firstRow&quot;&gt;&lt;td colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; border-bottom-color: rgb(229, 229, 229);&quot;&gt;规格参数&lt;/td&gt;&lt;/tr&gt;&lt;/thead&gt;&lt;tbody style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;tr class=&quot;tm-tableAttrSub&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;尺寸规格&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;含边框整屏尺寸&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;1243.6x73.7x719.9mm&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;毛重&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;18.0kg&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;净重(含底座)&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;14.0kg&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;净重(不含底座)&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;13.8kg&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;包装尺寸&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;1428x165x870mm&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;主机尺寸（不含底座）mm&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;1243.6×73.7×719.9&lt;/td&gt;&lt;/tr&gt;&lt;tr class=&quot;tm-tableAttrSub&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;基本参数&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;品牌&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;TCL&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;TCL LED型号&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;55A660U&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;分辨率&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;4K电视&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;屏幕比例&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;16:9&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;能效等级&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;三级&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;电视类型&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;LED电视&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;上市时间&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;2017-03&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;屏幕尺寸&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;55英寸&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;颜色分类&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;银色&lt;/td&gt;&lt;/tr&gt;&lt;tr class=&quot;tm-tableAttrSub&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;电视接口&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;HDMI接口数量&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;3个&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;接口类型&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;AV&amp;nbsp;HDMI&amp;nbsp;RF射频接口&amp;nbsp;USB&lt;/td&gt;&lt;/tr&gt;&lt;tr class=&quot;tm-tableAttrSub&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;图像参数&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;视频显示格式&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;2160p&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;背光灯类型&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;LED发光二极管&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;扫描方式&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;逐行扫描&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;接收制式&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;PAL&amp;nbsp;NTSC&lt;/td&gt;&lt;/tr&gt;&lt;tr class=&quot;tm-tableAttrSub&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;功能参数&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;3D类型&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;无&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;网络连接方式&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;全部支持&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;操作系统&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;安卓&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;操作系统名称&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;ANDROID&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;table class=&quot;tm-tableAttr&quot; width=&quot;789&quot;&gt;&lt;thead style=&quot;margin: 0px; padding: 0px; background-color: rgb(238, 238, 238); border-bottom: 1px solid rgb(228, 228, 228); font-weight: 700; font-size: 14px; color: rgb(153, 153, 153);&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot; class=&quot;firstRow&quot;&gt;&lt;td colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; border-bottom-color: rgb(229, 229, 229);&quot;&gt;包装清单&lt;/td&gt;&lt;/tr&gt;&lt;/thead&gt;&lt;tbody style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;电视机&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;底座&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;遥控器&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;说明书&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;电源线&lt;/th&gt;&lt;td data-spm-anchor-id=&quot;a220o.1000855.0.i1.7c878a2ajFKemq&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '1', '2', '', '2', '2', '1', '2', '2', '2', '2', '2', '2');
INSERT INTO `product` VALUES ('10', 'Haier/海尔 BCD-572WDENU1 智能变频双开门风冷家用对开门冰箱', 'BCD-572WDENU1', '1543998516', '/public/Img/2018-12-05/15439745948763.jpg', '/public/Img/2018-12-05/15439745944760.jpg', '/public/Img/2018-12-05/15439745949212.jpg', '', '22', '23', '31', '38', '0', '1', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;/ueditor/php/upload/image/20181205/1543974454979929.jpg&quot; title=&quot;1543974454979929.jpg&quot; alt=&quot;TB2.klonHsTMeJjSszgXXacpFXa_!!470168984.jpg_60x60q90.jpg&quot;/&gt;&lt;/p&gt;', '&lt;table class=&quot;tm-tableAttr&quot; width=&quot;789&quot;&gt;&lt;tbody style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;tr class=&quot;tm-tableAttrSub firstRow&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;容积&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;冷冻室容积&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;202L&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;冷藏室容积&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;370L&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;最大容积&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;572L&lt;/td&gt;&lt;/tr&gt;&lt;tr class=&quot;tm-tableAttrSub&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;尺寸规格&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;净重&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;108kg&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;包装尺寸&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;980x770x1891mm&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;宽×深(厚)×高&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;908x695x1790mm&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;毛重&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;118kg&lt;/td&gt;&lt;/tr&gt;&lt;tr class=&quot;tm-tableAttrSub&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;基本参数&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;上市时间&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;2016-4&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;冰箱冰柜品牌&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;Haier/海尔&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;海尔冰箱型号&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;BCD-572WDENU1&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;智能类型&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;其他智能&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;冰箱冷柜机型&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;冷藏冷冻冰箱&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;制冷方式&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;风冷&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;箱门结构&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;对开双门式&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;面板类型&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;PEM&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;能效等级&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;二级&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;制冷控制系统&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;电脑温控&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;颜色分类&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;炫砂银色&lt;/td&gt;&lt;/tr&gt;&lt;tr class=&quot;tm-tableAttrSub&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;技术参数&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;噪声&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;40dB&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;耗电量&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;1.05Kwh/24h&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;table class=&quot;tm-tableAttr&quot; width=&quot;789&quot;&gt;&lt;thead style=&quot;margin: 0px; padding: 0px; background-color: rgb(238, 238, 238); border-bottom: 1px solid rgb(228, 228, 228); font-weight: 700; font-size: 14px; color: rgb(153, 153, 153);&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot; class=&quot;firstRow&quot;&gt;&lt;td colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; border-bottom-color: rgb(229, 229, 229);&quot;&gt;包装清单&lt;/td&gt;&lt;/tr&gt;&lt;/thead&gt;&lt;tbody style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;冰箱&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;说明书&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;搁物架&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;9 件&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;冷冻抽屉&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;2 件&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;瓶座&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;8 件&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;果菜盒&lt;/th&gt;&lt;td data-spm-anchor-id=&quot;a220o.1000855.0.i1.2586426fq8lyMD&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;2 件&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '1', '2', '', '2', '2', '1', '2', '2', '2', '2', '2', '2');
INSERT INTO `product` VALUES ('11', 'TCL L40F3301B 小电视机 40英寸高清液晶特价平板32窄边usb视频42', 'L40F3301B', '1543997682', '/public/Img/2018-12-05/15439975204460.jpg', '/public/Img/2018-12-05/15439975288216.jpg', '/public/Img/2018-12-05/15439975294063.jpg', '', '23', '23', '204', '214', '0', '1', '&lt;table class=&quot;tm-tableAttr&quot; width=&quot;789&quot;&gt;&lt;tbody style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;tr class=&quot;tm-tableAttrSub firstRow&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;尺寸规格&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;主机尺寸（不含底座）mm&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;933.7×93.6×564.4&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;毛重&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;10.5kg&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;包装尺寸&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;1105x166x665mm&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;净重(不含底座)&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;7.3kg&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;含边框整屏尺寸&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;933.7x93.6x564.4mm&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;净重(含底座)&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;7.5kg&lt;/td&gt;&lt;/tr&gt;&lt;tr class=&quot;tm-tableAttrSub&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;基本参数&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;品牌&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;TCL&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;TCL LED型号&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;L40F3301B&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;屏幕比例&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;16:9&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;分辨率&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;1920x1080&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;能效等级&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;三级&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;电视类型&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;LED电视&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;上市时间&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;2013-6&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;屏幕尺寸&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;40英寸&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;颜色分类&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;珠光黑&lt;/td&gt;&lt;/tr&gt;&lt;tr class=&quot;tm-tableAttrSub&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;电视接口&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;接口类型&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;AV&amp;nbsp;HDMI&amp;nbsp;RF射频接口&amp;nbsp;VGA&amp;nbsp;色差分量接口&amp;nbsp;USB&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;HDMI接口数量&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;1个&lt;/td&gt;&lt;/tr&gt;&lt;tr class=&quot;tm-tableAttrSub&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;图像参数&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;背光灯类型&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;LED发光二极管&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;扫描方式&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;逐行扫描&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;接收制式&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;PAL&amp;nbsp;NTSC&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;视频显示格式&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;1080p&lt;/td&gt;&lt;/tr&gt;&lt;tr class=&quot;tm-tableAttrSub&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;功能参数&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;网络连接方式&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;不支持&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;操作系统名称&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;无&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;操作系统&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;无操作系统&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;3D类型&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;无&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;table class=&quot;tm-tableAttr&quot; width=&quot;789&quot;&gt;&lt;thead style=&quot;margin: 0px; padding: 0px; background-color: rgb(238, 238, 238); border-bottom: 1px solid rgb(228, 228, 228); font-weight: 700; font-size: 14px; color: rgb(153, 153, 153);&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot; class=&quot;firstRow&quot;&gt;&lt;td colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; border-bottom-color: rgb(229, 229, 229);&quot;&gt;包装清单&lt;/td&gt;&lt;/tr&gt;&lt;/thead&gt;&lt;tbody style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;电视机&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;底座&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;遥控器&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;说明书&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;保修卡&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;电池&lt;/th&gt;&lt;td data-spm-anchor-id=&quot;a220o.1000855.0.i5.639b62c0UZ0eXE&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;2 件&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;/ueditor/php/upload/image/20181205/1543997617974841.jpg&quot; title=&quot;1543997617974841.jpg&quot; alt=&quot;TB2zR.HpviSBuNkSnhJXXbDcpXa_!!2355806532.jpg_430x430q90.jpg&quot;/&gt;&lt;/p&gt;', '1', '1', '1%', '2', '2', '1', '2', '2', '2', '2', '2', '2');
INSERT INTO `product` VALUES ('12', 'TCL D32A810 32英寸电视机网络智能wifi高清液晶电视LED特价彩电', 'D32A810', '1543997960', '/public/Img/2018-12-05/15439978927472.jpg', '/public/Img/2018-12-05/15439979017633.jpg', '/public/Img/2018-12-05/15439979026239.jpg', '', '23', '23', '204', '210', '0', '1', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;/ueditor/php/upload/image/20181205/1543997950231077.jpg&quot; title=&quot;1543997950231077.jpg&quot; alt=&quot;TB2I2cJHxGYBuNjy0FnXXX5lpXa_!!2355806532-0-item_pic.jpg_430x430q90.jpg&quot;/&gt;&lt;/p&gt;', '&lt;table class=&quot;tm-tableAttr&quot; width=&quot;789&quot;&gt;&lt;tbody style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;tr class=&quot;tm-tableAttrSub firstRow&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; data-spm-anchor-id=&quot;a220o.1000855.0.i2.7e884a5ayIVzZN&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;尺寸规格&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;主机尺寸（不含底座）mm&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;736×81×438&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;毛重&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;6.1kg&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;包装尺寸&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;851x136x531mm&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;净重(不含底座)&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;4.7kg&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;含边框整屏尺寸&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;736x81x438mm&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;净重(含底座)&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;21kg&lt;/td&gt;&lt;/tr&gt;&lt;tr class=&quot;tm-tableAttrSub&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;基本参数&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;品牌&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;TCL&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;TCL LED型号&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;D32A810&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;屏幕比例&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;16:9&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;分辨率&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;1366x768&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;能效等级&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;三级&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;电视类型&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;LED电视&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;上市时间&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;2014-09&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;屏幕尺寸&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;32英寸&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;颜色分类&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;金色&lt;/td&gt;&lt;/tr&gt;&lt;tr class=&quot;tm-tableAttrSub&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;电视接口&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;接口类型&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;AV&amp;nbsp;HDMI&amp;nbsp;RF射频接口&amp;nbsp;USB&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;HDMI接口数量&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;2个&lt;/td&gt;&lt;/tr&gt;&lt;tr class=&quot;tm-tableAttrSub&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;图像参数&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;背光灯类型&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;LED发光二极管&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;扫描方式&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;逐行扫描&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;接收制式&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;PAL&amp;nbsp;NTSC&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;视频显示格式&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;720p&lt;/td&gt;&lt;/tr&gt;&lt;tr class=&quot;tm-tableAttrSub&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;功能参数&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;网络连接方式&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;全部支持&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;操作系统名称&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;ANDROID&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;操作系统&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;安卓&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;3D类型&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;无&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;table class=&quot;tm-tableAttr&quot; width=&quot;789&quot;&gt;&lt;thead style=&quot;margin: 0px; padding: 0px; background-color: rgb(238, 238, 238); border-bottom: 1px solid rgb(228, 228, 228); font-weight: 700; font-size: 14px; color: rgb(153, 153, 153);&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot; class=&quot;firstRow&quot;&gt;&lt;td colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; border-bottom-color: rgb(229, 229, 229);&quot;&gt;包装清单&lt;/td&gt;&lt;/tr&gt;&lt;/thead&gt;&lt;tbody style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;电视机&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;底座&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;遥控器&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;说明书&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;电源线&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '1', '2', '', '2', '2', '1', '2', '2', '2', '2', '2', '2');
INSERT INTO `product` VALUES ('14', 'TCL L40F3301B 小电视机 40英寸高清液晶特价平板32窄边usb视频42', ' L40F3301B', '1543999239', '/public/Img/2018-12-05/15439992339748.jpg', '', '', '', '23', '23', '204', '220', '0', '1', '', '&lt;p class=&quot;attr-list-hd tm-clear&quot; style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 5px 20px; list-style-type: none; -webkit-padding-start: 0px; -webkit-margin-before: 0px; -webkit-margin-after: 0px; line-height: 22px; color: rgb(153, 153, 153); font-family: tahoma, arial, 微软雅黑, sans-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; list-style-type: none; -webkit-padding-start: 0px; -webkit-margin-before: 0px; -webkit-margin-after: 0px; -webkit-margin-start: 0px; -webkit-margin-end: 0px; font-weight: 700; float: left;&quot;&gt;产品参数：&lt;/span&gt;&lt;/p&gt;&lt;ul id=&quot;J_AttrUL&quot; style=&quot;list-style-type: none;&quot; class=&quot; list-paddingleft-2&quot;&gt;&lt;li&gt;&lt;p&gt;证书编号：2016010808872449&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;证书状态：有效&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;产品名称：液晶电视机&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;3C规格型号：L40F1B、B40F729B、LE40C11、LE40D99、LE40D8810、Y40G33、Y...&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;产品名称：TCL L40F3301B&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;品牌:&amp;nbsp;TCL&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;TCL LED型号:&amp;nbsp;L40F3301B&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;售后服务:&amp;nbsp;全国联保&amp;nbsp;店铺三包&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;屏幕比例:&amp;nbsp;16:9&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;接口类型:&amp;nbsp;AV&amp;nbsp;HDMI&amp;nbsp;RF射频接口&amp;nbsp;VGA&amp;nbsp;色差分量接口&amp;nbsp;USB&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;分辨率:&amp;nbsp;1920x1080&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;同城服务:&amp;nbsp;同城卖家送货上门&amp;nbsp;同城上门安装&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;套餐类型:&amp;nbsp;官方标配&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;能效等级:&amp;nbsp;三级&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;背光灯类型:&amp;nbsp;LED发光二极管&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;电视类型:&amp;nbsp;LED电视&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;网络连接方式:&amp;nbsp;不支持&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;扫描方式:&amp;nbsp;逐行扫描&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;接收制式:&amp;nbsp;PAL&amp;nbsp;NTSC&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;操作系统名称:&amp;nbsp;无&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;操作系统:&amp;nbsp;无操作系统&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;HDMI接口数量:&amp;nbsp;1个&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;视频显示格式:&amp;nbsp;1080p&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;3D类型:&amp;nbsp;无&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;主机尺寸（不含底座）mm:&amp;nbsp;933.7×93.6×564.4&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;毛重:&amp;nbsp;10.5kg&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;包装尺寸:&amp;nbsp;1105x166x665mm&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;上市时间:&amp;nbsp;2013-6&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;屏幕尺寸:&amp;nbsp;40英寸&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;净重(不含底座):&amp;nbsp;7.3kg&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;含边框整屏尺寸:&amp;nbsp;933.7x93.6x564.4mm&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;净重(含底座):&amp;nbsp;7.5kg&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;电视形态:&amp;nbsp;平板&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;保修期:&amp;nbsp;12个月&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;颜色分类:&amp;nbsp;珠光黑&lt;/p&gt;&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '1', '1', '2%', '2', '2', '1', '2', '2', '2', '2', '2', '2');
INSERT INTO `product` VALUES ('15', 'TCL 65Q2M 65英寸4K超薄无边框全面屏高清智能网络平板液晶电视机', '65Q2M', '1543999523', '/public/Img/2018-12-05/15439994633650.jpg', '/public/Img/2018-12-05/15439994648956.jpg', '/public/Img/2018-12-05/15439994649369.jpg', '', '23', '23', '204', '212', '0', '1', '', '&lt;table class=&quot;tm-tableAttr&quot; width=&quot;789&quot;&gt;&lt;thead style=&quot;margin: 0px; padding: 0px; background-color: rgb(238, 238, 238); border-bottom: 1px solid rgb(228, 228, 228); font-weight: 700; font-size: 14px; color: rgb(153, 153, 153);&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot; class=&quot;firstRow&quot;&gt;&lt;td colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; border-bottom-color: rgb(229, 229, 229);&quot;&gt;规格参数&lt;/td&gt;&lt;/tr&gt;&lt;/thead&gt;&lt;tbody style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;tr class=&quot;tm-tableAttrSub&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;尺寸规格&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;主机尺寸（不含底座）mm&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;1467×93×861&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;毛重&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;33.5kg&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;包装尺寸&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;1645x190x1090mm&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;净重(不含底座)&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;23.5kg&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;含边框整屏尺寸&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;1467x93x861mm&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;净重(含底座)&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;26.1kg&lt;/td&gt;&lt;/tr&gt;&lt;tr class=&quot;tm-tableAttrSub&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;基本参数&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;品牌&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;TCL&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;TCL LED型号&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;65Q2M&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;屏幕比例&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;16:9&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;分辨率&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;4K电视&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;颜色分类&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;黑色&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;能效等级&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;二级&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;电视类型&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;LED电视&amp;nbsp;全面屏&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;上市时间&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;2018-09&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;屏幕尺寸&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;65英寸&lt;/td&gt;&lt;/tr&gt;&lt;tr class=&quot;tm-tableAttrSub&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;电视接口&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;接口类型&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;AV&amp;nbsp;HDMI&amp;nbsp;RF射频接口&amp;nbsp;USB&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;HDMI接口数量&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;3个&lt;/td&gt;&lt;/tr&gt;&lt;tr class=&quot;tm-tableAttrSub&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;图像参数&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;背光灯类型&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;LED发光二极管&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;扫描方式&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;逐行扫描&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;接收制式&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;PAL&amp;nbsp;NTSC&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;视频显示格式&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;2160p&lt;/td&gt;&lt;/tr&gt;&lt;tr class=&quot;tm-tableAttrSub&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;功能参数&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;网络连接方式&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;全部支持&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;操作系统名称&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;ANDROID&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;操作系统&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;安卓&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;3D类型&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;无&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;table class=&quot;tm-tableAttr&quot; data-spm-anchor-id=&quot;a220o.1000855.0.i2.d47d34fbnXf08w&quot; width=&quot;789&quot;&gt;&lt;thead style=&quot;margin: 0px; padding: 0px; background-color: rgb(238, 238, 238); border-bottom: 1px solid rgb(228, 228, 228); font-weight: 700; font-size: 14px; color: rgb(153, 153, 153);&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot; class=&quot;firstRow&quot;&gt;&lt;td colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; border-bottom-color: rgb(229, 229, 229);&quot;&gt;包装清单&lt;/td&gt;&lt;/tr&gt;&lt;/thead&gt;&lt;tbody style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;电视机&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;底座&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;遥控器&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;说明书&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;电源线&lt;/th&gt;&lt;td data-spm-anchor-id=&quot;a220o.1000855.0.i1.d47d34fbnXf08w&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '1', '1', '2%', '2', '2', '1', '2', '2', '2', '2', '2', '2');
INSERT INTO `product` VALUES ('16', 'TCL 55Q2M 55英寸4K超薄无边框全面屏高清智能网络平板液晶电视机', '55Q2M', '1543999621', '/public/Img/2018-12-05/15439996082891.jpg', '/public/Img/2018-12-05/15439996091078.jpg', '/public/Img/2018-12-05/15439996099975.jpg', '', '23', '23', '204', '0', '0', '1', '', '&lt;table class=&quot;tm-tableAttr&quot; width=&quot;789&quot;&gt;&lt;tbody style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;tr class=&quot;tm-tableAttrSub firstRow&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;尺寸规格&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;主机尺寸（不含底座）mm&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;1253.7×90×736.5&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;毛重&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;25.4kg&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;包装尺寸&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;1400x190x875mm&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;净重(不含底座)&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;18.0kg&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;含边框整屏尺寸&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;1253.7x90x736.5mm&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;净重(含底座)&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;20.5kg&lt;/td&gt;&lt;/tr&gt;&lt;tr class=&quot;tm-tableAttrSub&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;基本参数&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;品牌&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;TCL&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;TCL LED型号&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;55Q2M&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;屏幕比例&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;16:9&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;分辨率&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;4K电视&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;颜色分类&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;黑色&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;能效等级&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;二级&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;电视类型&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;LED电视&amp;nbsp;全面屏&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;上市时间&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;2018-09&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;屏幕尺寸&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;55英寸&lt;/td&gt;&lt;/tr&gt;&lt;tr class=&quot;tm-tableAttrSub&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;电视接口&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;接口类型&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;AV&amp;nbsp;HDMI&amp;nbsp;RF射频接口&amp;nbsp;USB&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;HDMI接口数量&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;3个&lt;/td&gt;&lt;/tr&gt;&lt;tr class=&quot;tm-tableAttrSub&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;图像参数&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;背光灯类型&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;LED发光二极管&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;扫描方式&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;逐行扫描&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;接收制式&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;PAL&amp;nbsp;NTSC&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;视频显示格式&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;2160p&lt;/td&gt;&lt;/tr&gt;&lt;tr class=&quot;tm-tableAttrSub&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;功能参数&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;网络连接方式&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;全部支持&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;操作系统名称&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;ANDROID&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;操作系统&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;安卓&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;3D类型&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;无&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;table class=&quot;tm-tableAttr&quot; width=&quot;789&quot;&gt;&lt;thead style=&quot;margin: 0px; padding: 0px; background-color: rgb(238, 238, 238); border-bottom: 1px solid rgb(228, 228, 228); font-weight: 700; font-size: 14px; color: rgb(153, 153, 153);&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot; class=&quot;firstRow&quot;&gt;&lt;td colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; border-bottom-color: rgb(229, 229, 229);&quot;&gt;包装清单&lt;/td&gt;&lt;/tr&gt;&lt;/thead&gt;&lt;tbody style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;电视机&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;底座&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;遥控器&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;说明书&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;电源线&lt;/th&gt;&lt;td data-spm-anchor-id=&quot;a220o.1000855.0.i2.2a28238chLzRNa&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '1', '2', '', '2', '2', '1', '2', '2', '2', '2', '2', '2');
INSERT INTO `product` VALUES ('17', '创维coocaa/酷开 40K6S智能wifi网络防蓝光超窄边框40英寸电视42', '40K6S', '1544003212', '/public/Img/2018-12-05/15440024917002.jpg', '/public/Img/2018-12-05/15440025007667.jpg', '/public/Img/2018-12-05/15440025007780.jpg', '', '36', '23', '204', '214', '0', '1', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;/ueditor/php/upload/image/20181205/1544002508761318.jpg&quot; title=&quot;1544002508761318.jpg&quot; alt=&quot;O1CN01AxXVqH1PU8Qkmmlao_!!395601843.jpg_430x430q90.jpg&quot;/&gt;&lt;/p&gt;', '&lt;table class=&quot;tm-tableAttr&quot; width=&quot;789&quot;&gt;&lt;thead style=&quot;margin: 0px; padding: 0px; background-color: rgb(238, 238, 238); border-bottom: 1px solid rgb(228, 228, 228); font-weight: 700; font-size: 14px; color: rgb(153, 153, 153);&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot; class=&quot;firstRow&quot;&gt;&lt;td colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; border-bottom-color: rgb(229, 229, 229);&quot;&gt;规格参数&lt;/td&gt;&lt;/tr&gt;&lt;/thead&gt;&lt;tbody style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;tr class=&quot;tm-tableAttrSub&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;尺寸规格&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;含边框整屏尺寸&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;899x87x516mm&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;净重(含底座)&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;6.7kg&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;主机尺寸（不含底座）mm&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;899x87x516&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;包装尺寸&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;985x135x620mm&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;净重(不含底座)&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;6.5kg&lt;/td&gt;&lt;/tr&gt;&lt;tr class=&quot;tm-tableAttrSub&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;基本参数&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;品牌&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;coocaa/酷开&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;电视类型&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;LED电视&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;分辨率&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;1920x1080&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;屏幕比例&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;16:9&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;能效等级&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;三级&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;上市时间&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;2018-6&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;屏幕尺寸&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;40英寸&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;颜色分类&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;黑色+浅银色&lt;/td&gt;&lt;/tr&gt;&lt;tr class=&quot;tm-tableAttrSub&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;电视接口&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;HDMI接口数量&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;2个&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;接口类型&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;网络接口&amp;nbsp;AV&amp;nbsp;HDMI&amp;nbsp;RF射频接口&amp;nbsp;USB&lt;/td&gt;&lt;/tr&gt;&lt;tr class=&quot;tm-tableAttrSub&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;图像参数&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;视频显示格式&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;1080p&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;背光灯类型&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;LED发光二极管&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;扫描方式&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;逐行扫描&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;接收制式&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;PAL&amp;nbsp;NTSC&lt;/td&gt;&lt;/tr&gt;&lt;tr class=&quot;tm-tableAttrSub&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; text-align: left; width: 763px; border-top-color: rgb(229, 229, 229); border-right-color: rgb(229, 229, 229);&quot;&gt;功能参数&lt;/th&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;3D类型&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;无&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;网络连接方式&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;全部支持&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;操作系统&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;&amp;nbsp;酷开系统&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;table class=&quot;tm-tableAttr&quot; width=&quot;789&quot;&gt;&lt;thead style=&quot;margin: 0px; padding: 0px; background-color: rgb(238, 238, 238); border-bottom: 1px solid rgb(228, 228, 228); font-weight: 700; font-size: 14px; color: rgb(153, 153, 153);&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot; class=&quot;firstRow&quot;&gt;&lt;td colspan=&quot;2&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; border-bottom-color: rgb(229, 229, 229);&quot;&gt;包装清单&lt;/td&gt;&lt;/tr&gt;&lt;/thead&gt;&lt;tbody style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;电视机&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;底座&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;快速使用指南&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;保修卡&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;遥控器&lt;/th&gt;&lt;td style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;1 件&lt;/td&gt;&lt;/tr&gt;&lt;tr style=&quot;margin: 0px; padding: 0px;&quot;&gt;&lt;th style=&quot;margin: 0px; padding-right: 5px; padding-left: 20px; color: rgb(153, 153, 153); font-weight: 400; text-align: right; width: 147px; border-top-color: rgb(247, 247, 247); border-right-color: rgb(247, 247, 247);&quot;&gt;七号电池&lt;/th&gt;&lt;td data-spm-anchor-id=&quot;a220o.1000855.0.i5.280911b7kKijtp&quot; style=&quot;margin: 0px; padding-right: 5px; padding-left: 5px; border-top-color: rgb(247, 247, 247);&quot;&gt;2 件&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '1', '2', '', '2', '2', '1', '2', '2', '2', '1', '1', '2');

-- ----------------------------
-- Table structure for `productattr`
-- ----------------------------
DROP TABLE IF EXISTS `productattr`;
CREATE TABLE `productattr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL COMMENT '产品ID',
  `attrValueID` int(11) DEFAULT NULL COMMENT '属性值ID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of productattr
-- ----------------------------
INSERT INTO `productattr` VALUES ('35', '17', '73');
INSERT INTO `productattr` VALUES ('33', '16', '70');
INSERT INTO `productattr` VALUES ('32', '15', '70');
INSERT INTO `productattr` VALUES ('30', '14', '73');
INSERT INTO `productattr` VALUES ('26', '13', '70');
INSERT INTO `productattr` VALUES ('29', '10', '17');
INSERT INTO `productattr` VALUES ('28', '10', '8');
INSERT INTO `productattr` VALUES ('27', '10', '11');
INSERT INTO `productattr` VALUES ('25', '12', '74');

-- ----------------------------
-- Table structure for `producttag`
-- ----------------------------
DROP TABLE IF EXISTS `producttag`;
CREATE TABLE `producttag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL COMMENT '产品ID',
  `tagValueID` int(11) DEFAULT NULL COMMENT '属性值ID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of producttag
-- ----------------------------
INSERT INTO `producttag` VALUES ('21', '14', '61');
INSERT INTO `producttag` VALUES ('20', '10', '62');
INSERT INTO `producttag` VALUES ('23', '15', '61');
INSERT INTO `producttag` VALUES ('24', '16', '61');
INSERT INTO `producttag` VALUES ('26', '17', '61');

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
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tagkey
-- ----------------------------
INSERT INTO `tagkey` VALUES ('13', '办公文教', '6', '3');
INSERT INTO `tagkey` VALUES ('14', '按功能分类', '8', '2');
INSERT INTO `tagkey` VALUES ('12', '电脑网络', '6', '8');
INSERT INTO `tagkey` VALUES ('15', '按客户端分类', '8', '1');
INSERT INTO `tagkey` VALUES ('16', '选购分类', '1', '1');
INSERT INTO `tagkey` VALUES ('17', '选购热点', '1', '0');
INSERT INTO `tagkey` VALUES ('18', '品类', '23', '2');
INSERT INTO `tagkey` VALUES ('19', '使用人数和功能', '23', '1');

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
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tagvalue
-- ----------------------------
INSERT INTO `tagvalue` VALUES ('18', '显示器', '12', '1');
INSERT INTO `tagvalue` VALUES ('16', 'DIY电脑', '12', '1');
INSERT INTO `tagvalue` VALUES ('17', '电脑整机', '12', '1');
INSERT INTO `tagvalue` VALUES ('15', '平板', '12', '1');
INSERT INTO `tagvalue` VALUES ('14', '笔记本', '12', '1');
INSERT INTO `tagvalue` VALUES ('19', '游戏本', '12', '1');
INSERT INTO `tagvalue` VALUES ('20', '平板二合一', '12', '1');
INSERT INTO `tagvalue` VALUES ('21', '显卡', '12', '1');
INSERT INTO `tagvalue` VALUES ('22', '键盘', '12', '1');
INSERT INTO `tagvalue` VALUES ('23', '网络设备', '12', '1');
INSERT INTO `tagvalue` VALUES ('24', '打印机 ', '13', '1');
INSERT INTO `tagvalue` VALUES ('25', '投影', '13', '1');
INSERT INTO `tagvalue` VALUES ('26', '保险柜', '13', '1');
INSERT INTO `tagvalue` VALUES ('27', '文具', '13', '1');
INSERT INTO `tagvalue` VALUES ('28', '墨盒', '13', '1');
INSERT INTO `tagvalue` VALUES ('29', '硒鼓 ', '13', '1');
INSERT INTO `tagvalue` VALUES ('30', ' 高清屏', '14', '1');
INSERT INTO `tagvalue` VALUES ('31', '高性能', '14', '1');
INSERT INTO `tagvalue` VALUES ('32', '大屏幕', '14', '1');
INSERT INTO `tagvalue` VALUES ('33', '极速上网', '14', '1');
INSERT INTO `tagvalue` VALUES ('34', '拍照手机', '14', '1');
INSERT INTO `tagvalue` VALUES ('35', '超薄手机', '14', '1');
INSERT INTO `tagvalue` VALUES ('36', '双卡双待', '14', '1');
INSERT INTO `tagvalue` VALUES ('37', '超长待机', '14', '1');
INSERT INTO `tagvalue` VALUES ('38', '自拍神器', '14', '1');
INSERT INTO `tagvalue` VALUES ('39', '三防运动', '14', '1');
INSERT INTO `tagvalue` VALUES ('40', ' 移动用户', '15', '1');
INSERT INTO `tagvalue` VALUES ('41', '联通用户', '15', '1');
INSERT INTO `tagvalue` VALUES ('42', '电信用户', '15', '1');
INSERT INTO `tagvalue` VALUES ('43', '商务用户', '15', '1');
INSERT INTO `tagvalue` VALUES ('44', '女性手机', '15', '1');
INSERT INTO `tagvalue` VALUES ('45', '老人手机', '15', '1');
INSERT INTO `tagvalue` VALUES ('46', '大牌耳机', '16', '1');
INSERT INTO `tagvalue` VALUES ('47', '数码相机', '16', '1');
INSERT INTO `tagvalue` VALUES ('48', '智能手表', '16', '1');
INSERT INTO `tagvalue` VALUES ('49', '移动硬盘1t', '16', '1');
INSERT INTO `tagvalue` VALUES ('50', '充电宝', '16', '1');
INSERT INTO `tagvalue` VALUES ('51', '智能手环', '16', '1');
INSERT INTO `tagvalue` VALUES ('52', '专业单反', '17', '1');
INSERT INTO `tagvalue` VALUES ('53', '单电微单', '17', '1');
INSERT INTO `tagvalue` VALUES ('54', '蓝牙音箱', '17', '1');
INSERT INTO `tagvalue` VALUES ('55', '音乐播放器', '17', '1');
INSERT INTO `tagvalue` VALUES ('56', '游戏机', '17', '1');
INSERT INTO `tagvalue` VALUES ('57', '精品手机壳', '17', '1');
INSERT INTO `tagvalue` VALUES ('61', '平板电视', '18', '1');
INSERT INTO `tagvalue` VALUES ('59', '自拍杆', '17', '1');
INSERT INTO `tagvalue` VALUES ('60', '智能家庭', '17', '1');
INSERT INTO `tagvalue` VALUES ('62', '冰箱', '18', '1');
INSERT INTO `tagvalue` VALUES ('63', '洗衣机', '18', '1');
INSERT INTO `tagvalue` VALUES ('64', '厨房大电', '18', '1');
INSERT INTO `tagvalue` VALUES ('65', '热水器', '18', '1');
INSERT INTO `tagvalue` VALUES ('66', '空调', '18', '1');
INSERT INTO `tagvalue` VALUES ('67', '三口之家', '19', '1');
INSERT INTO `tagvalue` VALUES ('68', '恒温', '19', '1');
INSERT INTO `tagvalue` VALUES ('69', '除甲醛', '19', '1');
INSERT INTO `tagvalue` VALUES ('70', '二人世界', '19', '1');
INSERT INTO `tagvalue` VALUES ('71', '极清4K', '19', '1');
INSERT INTO `tagvalue` VALUES ('72', '无油烟', '19', '1');
INSERT INTO `tagvalue` VALUES ('73', '单身贵族', '19', '1');

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of telverify
-- ----------------------------
INSERT INTO `telverify` VALUES ('1', '1543454556', '127.0.0.1', '146801', '13736912195', '1543455156');
INSERT INTO `telverify` VALUES ('2', '1543470614', '127.0.0.1', '558816', '18715092301', '1543471214');
INSERT INTO `telverify` VALUES ('3', '1543471385', '127.0.0.1', '425579', '13736912195', '1543471985');
INSERT INTO `telverify` VALUES ('4', '1543474935', '127.0.0.1', '634265', '13736912195', '1543475535');

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
  `time` int(11) DEFAULT NULL,
  `ischeck` tinyint(4) NOT NULL DEFAULT '1' COMMENT '商家账号 1:未通过验证  2:通过验证',
  `state` tinyint(4) NOT NULL DEFAULT '1' COMMENT '账号状态 1:启用  2:停用',
  `province` varchar(11) DEFAULT NULL,
  `city` varchar(11) DEFAULT NULL,
  `area` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('3', 'p1543471443425579', 'a6c552caae12c088f82eeb0410731961', '13736912195', 'ss@ss.com', '', null, 'sun comp', 'sass', null, '/Public/BusinessImg/2018-11-29/15434714361034.jpg', '/Public/BusinessImg/2018-11-29/15434714394165.jpg', '/Public/BusinessImg/2018-11-29/15434714344053.jpg', '2', '475073', '1543471443', '1', '1', '江苏省', '镇江市', '京口区');

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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wishlist
-- ----------------------------
INSERT INTO `wishlist` VALUES ('1', '3', '3', '1543475357');
INSERT INTO `wishlist` VALUES ('2', '3', '8', '1543539021');
INSERT INTO `wishlist` VALUES ('3', '3', '7', '1543539027');
INSERT INTO `wishlist` VALUES ('4', '2', '3', '1543623610');
INSERT INTO `wishlist` VALUES ('5', '2', '3', '1543623629');
INSERT INTO `wishlist` VALUES ('6', '2', '8', '1543627676');
INSERT INTO `wishlist` VALUES ('7', '2', '4', '1543627842');

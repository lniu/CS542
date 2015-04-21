/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50146
Source Host           : localhost:3306
Source Database       : phplsfdbysjzd8995

Target Server Type    : MYSQL
Target Server Version : 50146
File Encoding         : 65001

Date: 2014-12-17 22:29:13
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `allusers`
-- ----------------------------
DROP TABLE IF EXISTS `allusers`;
CREATE TABLE `allusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `cx` varchar(50) DEFAULT '普通管理员',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of allusers
-- ----------------------------
INSERT INTO `allusers` VALUES ('2', 'hsg', 'hsg', '超级管理员', '2014-12-17 19:46:56');
INSERT INTO `allusers` VALUES ('5', 'aa', 'aa', '普通管理员', '2014-12-17 15:58:51');

-- ----------------------------
-- Table structure for `caipinxinxi`
-- ----------------------------
DROP TABLE IF EXISTS `caipinxinxi`;
CREATE TABLE `caipinxinxi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `caipinbianhao` varchar(50) DEFAULT NULL,
  `caipinmingcheng` varchar(300) DEFAULT NULL,
  `leibie` varchar(50) DEFAULT NULL,
  `jiage` varchar(50) DEFAULT NULL,
  `zhaopian` varchar(50) DEFAULT NULL,
  `beizhu` varchar(500) DEFAULT NULL,
  `fandianmingcheng` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of caipinxinxi
-- ----------------------------
INSERT INTO `caipinxinxi` VALUES ('2', '001', 'A菜品', '鱼类', '48', 'uploadfile/141879811495ht.jpg', 'fewgewgew', '万豪酒店', '2014-12-17 14:35:17');
INSERT INTO `caipinxinxi` VALUES ('3', '002', 'B菜品', '肉类', '26', 'uploadfile/1418798134euqy.jpg', 'grehre', '和平饭店', '2014-12-17 14:35:37');
INSERT INTO `caipinxinxi` VALUES ('4', '003', 'C菜品', '汤煲类', '36', 'uploadfile/1418798156b1zr.gif', 'rehreh', '诚大饭店', '2014-12-17 14:35:59');
INSERT INTO `caipinxinxi` VALUES ('5', '004', 'D菜品', '主食类', '25', 'uploadfile/1418798187mudv.jpg', 'grehrh', '国际饭店', '2014-12-17 14:36:30');
INSERT INTO `caipinxinxi` VALUES ('6', '005', 'E菜品', '汤煲类', '33', 'uploadfile/1418798214rt95.jpg', 'gwregewe', '万豪酒店', '2014-12-17 14:36:56');
INSERT INTO `caipinxinxi` VALUES ('7', '006', 'grehre', '肉类', '432', 'uploadfile/14188031875m3w.jpg', 'egweg', 'ewgewg', '2014-12-17 15:59:50');

-- ----------------------------
-- Table structure for `dx`
-- ----------------------------
DROP TABLE IF EXISTS `dx`;
CREATE TABLE `dx` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `leibie` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `content` text CHARACTER SET utf8,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dx
-- ----------------------------
INSERT INTO `dx` VALUES ('1', '系统简介', '<p>\r\n	<span style=\"line-height:1.5;\">具体开发的功能：<br />\r\n将网页与数据库连接，在网页实现从查询数据库并显示查询结果。<br />\r\n第一步：饭店查询。可以根据饭店位置（远近程度），消费档次，类型，名称与ID或者评价筛选出符合预期的饭店。<br />\r\n第二步：菜品查询。在找到饭店之后可以通过类型，价格，名称与ID，口味或者评价来筛选出该饭店符合预期的菜品。<br />\r\n第三步：饭后可以将本次查询记录到历史记录中；可以对本次消费进行评价，从而可以修改数据库中的属性‘评价’。<br />\r\n第四步：可以将本次消费的饭店或者菜品加入‘我的最爱’中，类似于购物车功能。<br />\r\n开发语言：PHP， MYSQL<br />\r\n</span> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>', '2014-12-17 15:59:55');
INSERT INTO `dx` VALUES ('2', '系统公告', '<p>\r\n	欢迎大家登陆我站，我站主要是为广大朋友精心制作的一个系统，希望大家能够在我站获得一个好心情，谢谢！\r\n</p>\r\n<p>\r\n	自强不息，海纳百川，努力学习！2214\r\n</p>', '2014-11-30 12:28:22');

-- ----------------------------
-- Table structure for `fandianxinxi`
-- ----------------------------
DROP TABLE IF EXISTS `fandianxinxi`;
CREATE TABLE `fandianxinxi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fandianmingcheng` varchar(300) DEFAULT NULL,
  `dizhi` varchar(300) DEFAULT NULL,
  `menmianzhaopian` varchar(50) DEFAULT NULL,
  `canyinleixing` varchar(50) DEFAULT NULL,
  `tesecaipin` varchar(300) DEFAULT NULL,
  `lianxidianhua` varchar(50) DEFAULT NULL,
  `baiduzuobiaoX` varchar(50) DEFAULT NULL,
  `baiduzuobiaoY` varchar(50) DEFAULT NULL,
  `jianjie` text,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of fandianxinxi
-- ----------------------------
INSERT INTO `fandianxinxi` VALUES ('2', '国际饭店', '人民路22号', 'uploadfile/1418780613o32n.jpg', '中餐', 'X菜小吃', '32623632', '120.13177', '30.284344', '<p>\r\n	ghrehrh\r\n</p>\r\n<p>\r\n	hrehr\r\n</p>\r\n<p>\r\n	rjrjrejrjrjre\r\n</p>', '2014-12-17 09:43:47');
INSERT INTO `fandianxinxi` VALUES ('3', '诚大饭店', '北京三环44号', 'uploadfile/1418781229p73o.jpg', '西餐', '牛排', '6436432', '120.13177', '30.284344', '<p>\r\n	greghrehrhr\r\n</p>\r\n<p>\r\n	jytjytjyjyjyt\r\n</p>', '2014-12-17 09:54:05');
INSERT INTO `fandianxinxi` VALUES ('4', '和平饭店', '温州体育场路22号', 'uploadfile/1418781280gmaz.jpg', '快餐', '批萨', '64343743', '120.13177', '30.284344', '<p>\r\n	grhrthtr\r\n</p>\r\n<p>\r\n	trj\r\n</p>\r\n<p>\r\n	trjtrjjtrjtrjtr\r\n</p>', '2014-12-17 09:55:00');
INSERT INTO `fandianxinxi` VALUES ('5', '万豪酒店', '苍南大道', 'uploadfile/141878177588ja.jpg', '中餐', '牛排', '4643743', '120.13177', '30.284344', '<p>\r\n	ghrhtrhtr\r\n</p>\r\n<p>\r\n	tj\r\n</p>\r\n<p>\r\n	trtrjtjtrkrt\r\n</p>', '2014-12-17 10:03:11');
INSERT INTO `fandianxinxi` VALUES ('6', 'ewgewg', 'hwhewhew', 'uploadfile/1418803163z0hm.jpg', '西餐', 'weggew', '3263632', '120.13177', '30.284344', 'gewgehw', '2014-12-17 15:59:30');

-- ----------------------------
-- Table structure for `liuyanban`
-- ----------------------------
DROP TABLE IF EXISTS `liuyanban`;
CREATE TABLE `liuyanban` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zhanghao` varchar(50) DEFAULT NULL,
  `zhaopian` varchar(50) DEFAULT NULL,
  `xingming` varchar(50) DEFAULT NULL,
  `liuyan` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `huifu` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of liuyanban
-- ----------------------------
INSERT INTO `liuyanban` VALUES ('28', '555', 'uploadfile/13392103902z4y.jpg', '何升高', 'gwegwe', '2014-12-17 12:20:04', null);
INSERT INTO `liuyanban` VALUES ('30', '666', 'uploadfile/14188030310mdc.jpg', 'gewgw', 'grehrere', '2014-12-17 15:58:38', null);

-- ----------------------------
-- Table structure for `shoucangjilu`
-- ----------------------------
DROP TABLE IF EXISTS `shoucangjilu`;
CREATE TABLE `shoucangjilu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `IDhao` varchar(50) DEFAULT NULL,
  `leibie` varchar(50) DEFAULT NULL,
  `mingcheng` varchar(300) DEFAULT NULL,
  `shoucangren` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of shoucangjilu
-- ----------------------------
INSERT INTO `shoucangjilu` VALUES ('2', '6', '菜品', 'E菜品', '555', '2014-12-17 15:45:08');
INSERT INTO `shoucangjilu` VALUES ('3', '3', '饭店', '诚大饭店', '555', '2014-12-17 15:50:49');
INSERT INTO `shoucangjilu` VALUES ('4', '4', '饭店', '和平饭店', '666', '2014-12-17 15:57:45');
INSERT INTO `shoucangjilu` VALUES ('5', '4', '菜品', 'C菜品', '666', '2014-12-17 15:57:53');

-- ----------------------------
-- Table structure for `xinwentongzhi`
-- ----------------------------
DROP TABLE IF EXISTS `xinwentongzhi`;
CREATE TABLE `xinwentongzhi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `biaoti` varchar(500) CHARACTER SET gb2312 DEFAULT NULL,
  `leibie` varchar(50) CHARACTER SET gb2312 DEFAULT NULL,
  `neirong` text CHARACTER SET gb2312,
  `tianjiaren` varchar(50) CHARACTER SET gb2312 DEFAULT NULL,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `shouyetupian` varchar(50) DEFAULT NULL,
  `dianjilv` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=324 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of xinwentongzhi
-- ----------------------------
INSERT INTO `xinwentongzhi` VALUES ('309', '（招标）钱库镇粮食生产功能区农田基础设施建设项目（东张庄村、西张庄村）', '站内新闻', '<P align=center><IMG style=\"BORDER-BOTTOM-COLOR: #000000; BORDER-TOP-COLOR: #000000; BORDER-RIGHT-COLOR: #000000; BORDER-LEFT-COLOR: #000000\" border=0 src=\"/upload/editorfiles/2012.3.2_15.47.38_7908.gif\"></P>', 'hsg', '2014-12-17 09:13:43', 'uploadfile/1340069838pb96.jpg', '1');
INSERT INTO `xinwentongzhi` VALUES ('310', '钱库工商开展食品安全大检查', '站内新闻', '&nbsp;&nbsp;&nbsp; 3月15日消息：3月11日，钱库工商所组织人员开展食品安全大检查，拉开了为期一个月的食品安全整治月行动的序幕。\r\n<P>&nbsp;&nbsp;&nbsp; 当天，检查人员对辖区内的菜市场、超市进行了详细检查，重点查处有无销售 “三无”、过期、失效、变质食品以及无证照经营、超范围经营食品行为。在检查中发现，部分食品店存在销售“三无”食品等行为，检查人员当场进行撤柜处理，对无证经营的当场责令其停业整改。（通讯员 罗宏雷）</P>', 'hsg', '2014-12-17 09:13:43', 'uploadfile/13400699440gw0.jpg', '1');
INSERT INTO `xinwentongzhi` VALUES ('311', '纯米粉东阳清明果明天开卖 去年曾4小时卖出2000多只', '站内新闻', '<P style=\"MARGIN: 0px 3px 15px; TEXT-INDENT: 30px\">还记得去年的清明节吗？有一种来自东阳的清明果子，成了名副其实的“香饽饽”。</P>\r\n<P style=\"MARGIN: 0px 3px 15px; TEXT-INDENT: 30px\">去年清明节前四天，快报美食版刊登了粗菜馆有售一种东阳特产??纯米粉做的清明果子的报道后，当天早上7点多，就有读者看了报纸后，从四面八方赶到了粗菜馆的马塍路店等候。其中有不少大爷大妈，是从龙坞、转塘、三墩等地转了几趟公交车一路颠簸而来的，一买就是十几二十个，还有的是单位集体订购的，一订就是四五十个。</P>\r\n<P style=\"MARGIN: 0px 3px 15px; TEXT-INDENT: 30px\">粗菜馆卖的这种清明果子，是按东阳农村里的原始做法做的，属真正的“原版货”，与杭州大小超市或者菜场里卖的“行货”绝对不同。行货版的清明果子用的是糯米粉，而粗菜馆用的则是纯米粉。糯米粉和纯米粉虽然仅一字之差，口感上却大有差别。感性点比喻，我们最熟悉的汤团就是用糯米粉做的，咬在嘴里软软的、滑滑的。而粗菜馆用纯米粉揉进了艾草做的清明果子，表皮除了滑之外，咬在齿间还有一股子强劲的弹力，连那些切得细细的艾草，都像图案般斑斑驳驳地浮现在一片深绿之上。除了口感，当然还有大家如今都很在意的健康和天然。</P>\r\n<P style=\"MARGIN: 0px 3px 15px; TEXT-INDENT: 30px\">今年，粗菜馆的掌门人还特意从东阳农村请来了一位70多岁的老奶奶，这些天，假如你到了粗菜馆的中大店，都可以看见她在现场用最地道的农家做法做这种清明果子。从明天起到清明节结束，每天10:00-18:00,这位老奶奶都会率领着餐厅里她带出来的“徒儿”，在粗菜馆的三家门店里现做、现蒸、现卖这种清明果子。</P>\r\n<P style=\"MARGIN: 0px 3px 15px; TEXT-INDENT: 30px\">粗菜馆的清明果子有两种口味：甜和咸，3元/只。咸味的清明果子是老奶奶强力推荐的，因为在他们东阳老家，家家户户都更偏爱这个口味。咸味馅儿通常用笋丁、豆腐干丁拌上一些切碎了的时令野菜制成，形状酷似一只只个儿超大的饺子。而甜味的清明果子是三角形的，即便同样是甜，原料也区别于一般“行货”??用的是纯红糖。</P><!--/enpcontent--><!--advertisement code begin--><!--advertisement code end--><!--function: content() parse end  0ms cost! -->', 'hsg', '2014-12-17 09:13:43', 'uploadfile/1340069970gp0a.jpg', '1');
INSERT INTO `xinwentongzhi` VALUES ('312', '食盐库存充足 抢购没有必要', '站内新闻', '<P>&nbsp;&nbsp;&nbsp; ●我县召开会议部署食盐供应</P>\r\n<P>&nbsp;&nbsp;&nbsp; ●全县设立6个销售点进行限量有序供应</P><!--advertisement code begin--><!--advertisement code end-->\r\n<P>&nbsp;&nbsp;&nbsp; ●储存量可以保证全县5个月的正常供应</P>\r\n<P>&nbsp;&nbsp;&nbsp; 3月17日消息：（记者 叶晔）目前我县各类小包装食盐库存充足，常规情况下可满足全县5个月以上的供应量，同时，当前全国盐产大于销，不存在食盐短缺的问题，请广大群众放心。这是今天下午记者从县政府召开的食盐供应工作会议上了解到的。副县长丁振俊主持会议，县公安、工商、盐务、物价等部门及有关乡镇、部分超市负责人参加。</P>\r\n<P>&nbsp;&nbsp;&nbsp; 会议指出，针对3月16日下午，我县开始出现的小食盐抢购苗头，有关部门及乡镇、超市要加强宣传，公开信息，消除社会上的不必要恐慌；要积极组织货源，保持价格稳定，并明确供应网络体系，合理布局，确保供应到位。会议还要求，我县将进行限量购买机制，即每人每天最多可购买3包，防止不法人员囤积，保证供需环节的畅通；各大超市要发挥应有的作用，按照政府的价格进行销售，同时增加服务人员，进行有序供应；县公安、工商等部门要在各网点配备力量，维护销售秩序和公众安全，各乡镇要落实责任，全力配合共同做好市场供应工作。会议还强调，将严厉打击囤积居奇、哄抬盐价的违法行为，确保广大群众正常生活秩序。</P>\r\n<P>&nbsp;&nbsp;&nbsp; 又讯 （记者 董少芬 冯瑞元）面对盐荒闹剧，县盐务管理局局长郑恩合说：“其实大可不必抢购食用盐，我县碘盐库存充足，市场供应稳定，目前我县口食盐储存量也可以保证全县市民5个月的正常供应量。”从17日上午开始我县已在灵溪、龙港、金乡、钱库、矾山、马站六个片区设立六个销售点，进行限量有序供应，以满足群众的日常需求。同时，县盐备局已紧急调配食盐至全县几个大型超市、各零售点，确保小包装碘盐市场稳定供应，不断档、不脱销。</P>\r\n<P>&nbsp;&nbsp;&nbsp; 盐务局相关人员还提醒说，从16日晚上的抽查情况看，小超市、小卖部之所以卖断货，一是因为店小备货少，另外不排除有商家囤货的可能。“按照国家法律规定，囤积食盐是违法行为，一旦掌握线索，将移交给物价、工商等部门严肃处理。”</P>\r\n<P>&nbsp;&nbsp;&nbsp; 另外，记者从县盐务局了解到，目前食盐来源主要是两种：300克小包装的海盐和350克小包装的矿盐。所谓矿盐，都是从江西、湖北等地地下3米处提取的，这种食盐，没有任何污染，即使日本真的发生了核污染，对这种矿盐也不会造成任何影响，市民如果对海盐心存顾忌，完全可以放心选用矿盐。同时，食盐是国家定价商品，盐务管理局承诺，食盐价格不会上涨，请广大消费者放心。</P>', 'hsg', '2014-12-17 09:13:43', 'uploadfile/1340070002x47w.jpg', '1');
INSERT INTO `xinwentongzhi` VALUES ('313', '苍南县特殊教育学校食堂工程中标候选人公示', '站内新闻', '<P class=MsoNormal style=\"MARGIN: 0cm 0cm 0pt; LINE-HEIGHT: 150%; TEXT-ALIGN: center; mso-pagination: widow-orphan\" align=center><STRONG><SPAN style=\"FONT-SIZE: 18pt; COLOR: #333333; LINE-HEIGHT: 150%; FONT-FAMILY: 黑体; mso-bidi-font-size: 12.0pt; mso-font-kerning: 0pt; mso-hansi-font-family: 宋体; mso-bidi-font-family: 宋体\">工程建设项目中标候选人公示通告</SPAN></STRONG><STRONG><SPAN lang=EN-US style=\"FONT-SIZE: 18pt; LINE-HEIGHT: 150%; FONT-FAMILY: 黑体; mso-font-kerning: 0pt; mso-hansi-font-family: 宋体; mso-bidi-font-family: 宋体\"> \r\n<P></P></SPAN></STRONG>\r\n<P></P>\r\n<P class=MsoNormal style=\"MARGIN: 0cm 0cm 0pt; LINE-HEIGHT: 150%; TEXT-ALIGN: left; mso-pagination: widow-orphan\" align=left><SPAN lang=EN-US style=\"FONT-SIZE: 12pt; LINE-HEIGHT: 150%; FONT-FAMILY: 宋体; mso-font-kerning: 0pt; mso-bidi-font-family: 宋体\">\r\n<P>&nbsp;</P></SPAN>\r\n<P></P>\r\n<P class=MsoNormal style=\"MARGIN: 0cm 0cm 0pt; TEXT-INDENT: 28pt; LINE-HEIGHT: 150%; TEXT-ALIGN: left; mso-pagination: widow-orphan; mso-char-indent-count: 2.0\" align=left><SPAN style=\"FONT-SIZE: 14pt; COLOR: #333333; LINE-HEIGHT: 150%; FONT-FAMILY: 仿宋_GB2312; mso-font-kerning: 0pt; mso-hansi-font-family: 宋体; mso-bidi-font-family: 宋体\">由苍南县特殊教育学校建设的苍南县特殊教育学校食堂工程，招标代理人为浙江之信工程项目管理有限公司。于<CHSDATE w:st=\"on\" year=\"2011\" month=\"1\" day=\"26\" islunardate=\"False\" isrocdate=\"False\"><FONT color=#333333><FONT face=仿宋_GB2312><SPAN lang=EN-US><FONT size=5>2011</FONT></SPAN>年<SPAN lang=EN-US><FONT size=5>1</FONT></SPAN>月<SPAN lang=EN-US><FONT size=5>26</FONT></SPAN>日</CHSDATE>在苍南县公共资源交易中心公开开标。按招标文件规定的评标方法评定，第一中标候选人为温州金福建筑工程有限公司（项目负责人：胡燕），投标报价<SPAN lang=EN-US><FONT size=5>723409</FONT></SPAN>元；第二中标候选人为苍南县鸿基爆破工程有限公司（项目负责人：罗进文），投标报价<SPAN lang=EN-US><FONT size=5>727362</FONT></SPAN>元。公示期限自<CHSDATE w:st=\"on\" year=\"2011\" month=\"1\" day=\"27\" islunardate=\"False\" isrocdate=\"False\"><SPAN lang=EN-US><FONT size=5>2011</FONT></SPAN>年<SPAN lang=EN-US><FONT size=5>1</FONT></SPAN>月<SPAN lang=EN-US><FONT size=5>27</FONT></SPAN>日</CHSDATE>始三个工作日。在公示日期限内，投标人和其他利害关系人可通过来电、来函、来访的形式，向苍南县公共资源交易管理委员会办公室反映公示对象存在的问题。以单位名义反映问题的加盖公章，以个人名义反映问题的须署实名，并附上身份证复印件及联系方式。</FONT></FONT><SPAN lang=EN-US><FONT face=仿宋_GB2312 color=#333333 size=5> </FONT>\r\n<P><FONT face=仿宋_GB2312 color=#333333 size=5></FONT></P></SPAN></SPAN>\r\n<P><FONT face=仿宋_GB2312 color=#333333 size=5></FONT></P>\r\n<P class=MsoNormal style=\"MARGIN: 0cm 0cm 0pt; LINE-HEIGHT: 150%; TEXT-ALIGN: left; mso-pagination: widow-orphan\" align=left><FONT face=仿宋_GB2312 color=#333333 size=5></FONT><SPAN lang=EN-US style=\"FONT-SIZE: 14pt; COLOR: #333333; LINE-HEIGHT: 150%; FONT-FAMILY: 仿宋_GB2312; mso-font-kerning: 0pt; mso-hansi-font-family: 宋体; mso-bidi-font-family: 宋体\">\r\n<P><FONT size=5></FONT>&nbsp;</P></SPAN>\r\n<P><FONT face=仿宋_GB2312 color=#333333 size=5></FONT></P>\r\n<P class=MsoNormal style=\"MARGIN: 0cm 0cm 0pt; LINE-HEIGHT: 150%; TEXT-ALIGN: left; mso-pagination: widow-orphan\" align=left><SPAN style=\"FONT-SIZE: 14pt; COLOR: #333333; LINE-HEIGHT: 150%; FONT-FAMILY: 仿宋_GB2312; mso-font-kerning: 0pt; mso-hansi-font-family: 宋体; mso-bidi-font-family: 宋体\">投诉受理部门：<FONT color=#333333><FONT face=仿宋_GB2312><SPAN lang=EN-US><SPAN style=\"mso-spacerun: yes\"><FONT size=5>&nbsp; </FONT></SPAN></SPAN>苍南县公共资源交易管理委员会办公室</FONT></FONT><SPAN lang=EN-US><FONT face=仿宋_GB2312 color=#333333 size=5> </FONT>\r\n<P><FONT face=仿宋_GB2312 color=#333333 size=5></FONT></P></SPAN></SPAN>\r\n<P><FONT face=仿宋_GB2312 color=#333333 size=5></FONT></P>\r\n<P class=MsoNormal style=\"MARGIN: 0cm 0cm 0pt; TEXT-INDENT: 56pt; LINE-HEIGHT: 150%; TEXT-ALIGN: left; mso-pagination: widow-orphan; mso-char-indent-count: 4.0\" align=left><SPAN style=\"FONT-SIZE: 14pt; COLOR: #333333; LINE-HEIGHT: 150%; FONT-FAMILY: 仿宋_GB2312; mso-font-kerning: 0pt; mso-hansi-font-family: 宋体; mso-bidi-font-family: 宋体\">电话：<FONT color=#333333><FONT face=仿宋_GB2312><SPAN lang=EN-US><FONT size=5>0577</FONT></SPAN>?</FONT></FONT><SPAN lang=EN-US><FONT face=仿宋_GB2312 color=#333333 size=5>68708625 </FONT>\r\n<P><FONT face=仿宋_GB2312 color=#333333 size=5></FONT></P></SPAN></SPAN>\r\n<P><FONT face=仿宋_GB2312 color=#333333 size=5></FONT></P>\r\n<P class=MsoNormal style=\"MARGIN: 0cm 28pt 0pt 0cm; LINE-HEIGHT: 150%; TEXT-ALIGN: right; mso-pagination: widow-orphan\" align=right><FONT face=仿宋_GB2312 color=#333333 size=5></FONT><SPAN lang=EN-US style=\"FONT-SIZE: 14pt; COLOR: #333333; LINE-HEIGHT: 150%; FONT-FAMILY: 仿宋_GB2312; mso-font-kerning: 0pt; mso-hansi-font-family: 宋体; mso-bidi-font-family: 宋体\">\r\n<P><FONT size=5></FONT>&nbsp;</P></SPAN>\r\n<P><FONT face=仿宋_GB2312 color=#333333 size=5></FONT></P>\r\n<P class=MsoNormal style=\"MARGIN: 0cm 35pt 0pt 0cm; LINE-HEIGHT: 150%; TEXT-ALIGN: right; mso-pagination: widow-orphan\" align=right><SPAN style=\"FONT-SIZE: 14pt; COLOR: #333333; LINE-HEIGHT: 150%; FONT-FAMILY: 仿宋_GB2312; mso-font-kerning: 0pt; mso-hansi-font-family: 宋体; mso-bidi-font-family: 宋体\">苍南县公共资源交易中心<SPAN lang=EN-US><FONT face=仿宋_GB2312 color=#333333 size=5> </FONT>\r\n<P><FONT face=仿宋_GB2312 color=#333333 size=5></FONT></P></SPAN></SPAN>\r\n<P><FONT face=仿宋_GB2312 color=#333333 size=5></FONT></P>\r\n<P class=MsoNormal style=\"MARGIN: 0cm 56pt 0pt 0cm; LINE-HEIGHT: 150%; TEXT-ALIGN: right; mso-pagination: widow-orphan\" align=right><CHSDATE w:st=\"on\" year=\"2011\" month=\"1\" day=\"26\" islunardate=\"False\" isrocdate=\"False\"><SPAN lang=EN-US style=\"FONT-SIZE: 14pt; COLOR: #333333; LINE-HEIGHT: 150%; FONT-FAMILY: 仿宋_GB2312; mso-font-kerning: 0pt; mso-hansi-font-family: 宋体; mso-bidi-font-family: 宋体\">2011</SPAN><SPAN style=\"FONT-SIZE: 14pt; COLOR: #333333; LINE-HEIGHT: 150%; FONT-FAMILY: 仿宋_GB2312; mso-font-kerning: 0pt; mso-hansi-font-family: 宋体; mso-bidi-font-family: 宋体\">年<FONT color=#333333><FONT face=仿宋_GB2312><SPAN lang=EN-US><FONT size=5>1</FONT></SPAN>月<SPAN lang=EN-US><FONT size=5>26</FONT></SPAN>日</FONT></FONT></SPAN></CHSDATE><SPAN lang=EN-US style=\"FONT-SIZE: 12pt; COLOR: #333333; LINE-HEIGHT: 150%; FONT-FAMILY: 宋体; mso-font-kerning: 0pt; mso-bidi-font-family: 宋体\"> \r\n<P></P></SPAN>', 'hsg', '2014-12-17 09:13:43', 'uploadfile/1340070029dc64.jpg', '1');
INSERT INTO `xinwentongzhi` VALUES ('314', '钱库多部门联合开展食品安全检查', '站内新闻', '<P>记者&nbsp;&nbsp; 鸯鸯&nbsp; 克梯</P>\r\n<P>&nbsp;&nbsp;&nbsp; 国庆长假将至，为保障消费者权益，防止食品安全事件发生，9月29日，钱库经贸办、钱库工商所、钱库卫生监督所等部门深入辖区内各菜场、超市开展节前食品安全检查，把好食品安全关。</P>\r\n<P>&nbsp;&nbsp;&nbsp; 每年国庆期间，食品消费都会迎来高峰期。为确保节日食品消费安全，钱库镇执法部门提前行动，及早整治，严把食品安全关。在执法行动中，执法人员先后深入钱库老菜场、钱库农贸菜场、糖果批发市场等地，现场仔细查看了食品的包装，查询相关台帐。在执法过程中，发现个别店铺存在生产日期错误等情况，执法人员告诫各被检查单位负责人，要严格依法经营、保障食品安全。<BR></P>', 'hsg', '2014-12-17 09:13:43', '', '1');
INSERT INTO `xinwentongzhi` VALUES ('315', '食品安全', '站内新闻', '关注食品安全，请点击下图查看详情：<BR><A href=\"http://shipin.people.com.cn/GB/86164/220965/index.html\" target=_blank><IMG style=\"BORDER-BOTTOM-COLOR: #000000; BORDER-TOP-COLOR: #000000; BORDER-RIGHT-COLOR: #000000; BORDER-LEFT-COLOR: #000000\" border=0 src=\"/upload/editorfiles/2011.6.21_9.30.32_2404.jpg\"></A>', 'hsg', '2014-12-17 09:13:43', '', '1');
INSERT INTO `xinwentongzhi` VALUES ('316', '女子在餐馆点杀1只活鸡吃出11个鸡屁股', '站内新闻', '<IMG style=\"BORDER-LEFT-COLOR: #000000; BORDER-BOTTOM-COLOR: #000000; BORDER-TOP-COLOR: #000000; BORDER-RIGHT-COLOR: #000000\" src=\"/upload/editorfiles/2011.3.28_10.47.36_3455.jpg\" border=0><BR>\r\n<P class=pictext align=center>一只鸡多出了十个鸡屁股，阳女士希望餐馆给个合理的解释。&nbsp;记者&nbsp;罗川&nbsp;摄</P><BR><BR>　　<STRONG>碰上这种事，你生气不生气</STRONG><BR><BR>　　<STRONG>点杀1只鸡&nbsp;吃出11个鸡屁股&nbsp;</STRONG><BR><BR>　　在餐馆点杀一只活鸡，菜端上桌子，竟然吃出了11个鸡屁股。前天晚上，这种稀奇事让阳女士碰见了，又生气又觉得好笑。<BR><BR>　　到底是厨师搞错了，还是餐馆故意以次充好？重庆晚报记者展开了调查。<BR><BR>　　重庆晚报首席记者&nbsp;夏祥洲&nbsp;实习记者&nbsp;景涛<BR><BR>　　<STRONG>顾客遭遇</STRONG><BR><BR>　　<STRONG>点杀一只鸡&nbsp;有11个屁股</STRONG><BR><BR>　　前晚，阳女士到五里店红土地的尖山酸菜鸡餐馆就餐。该餐馆是现点现杀现做，他们点杀了一只公鸡，3斤6两。<BR><BR>　　阳女士说，当晚有长辈爱吃鸡屁股，就没有要求厨师将鸡屁股扔掉。约等了半小时，一锅酸菜鸡便端上桌，大伙开始大快朵颐。一人很快夹到一块鸡屁股肉，但不久，阳女士又发现了一个完整的鸡屁股。一只鸡怎么有两个屁股？阳女士觉得好奇，将这个鸡屁股放进空盘。<BR><BR>　　又吃了一会儿，又有人夹到一个完整的鸡屁股，紧接着，第四个鸡屁股也被发现。这时，阳女士才觉得不对劲。<BR><BR>　　“一只鸡不可能有4个屁股，即便是厨师不小心将别人点杀的鸡的屁股放错了，最多也就多一两个。”阳女士说，她们怀疑餐馆将剩菜端给他们吃，于是决定看看锅里到底有多少鸡屁股。他们用漏勺在锅里挑选，竟然又捞出了7个完整的鸡屁股。<BR><BR>　　“一只鸡吃出11个鸡屁股？真是又生气又好笑。”阳女士说，她当即叫来服务员和餐馆负责人问个究竟。<BR><STRONG>餐馆解释<BR><BR></STRONG>　　<STRONG>是邻桌点的&nbsp;厨师搞错了</STRONG><BR><BR>　　阳女士说，餐馆方面一来口气就很强硬，问他们想干什么，她当即回应“我们不想干什么，你这一只鸡竟然有11个鸡屁股，总要给一个合理的解释。”后来，餐馆方面解释“是隔壁一桌多要了几个鸡屁股，厨师放错锅了”，餐馆表示换一只鸡，重新做一锅。<BR><BR>　　阳女士说，若是厨师不小心放错了，餐馆赔礼道歉就算了，可询问邻桌“是不是多要了鸡屁股”，邻桌回答“根本没有这回事”。<BR><BR>　　阳女士说，他们不让服务员拿走多余的10个鸡屁股，也没同意重新换一只鸡。为防止餐馆耍赖，她还将邻桌回应的“没有多要鸡屁股”，用手机录了音。<BR><BR>　　<STRONG>记者调查</STRONG><BR><BR>　　<STRONG>邻桌人否认&nbsp;顾客欲索赔</STRONG><BR><BR>　　前晚，重庆晚报记者接到投诉后，赶到这家尖山酸菜鸡分店，10只鸡屁股还摆在餐桌上。服务员称，餐馆负责人不在。<BR><BR>　　收银的周姓工作人员解释：“有个厨师是新来的，他们(指阳女士)隔壁一桌专门多要了鸡屁股，已经吃完结账走了，我们留下了他们的电话，他们愿意作证。”<BR><BR>　　按照该工作人员提供的手机号码，重庆晚报记者拨通了对方的电话。对方先是否认自己专门多要了鸡屁股，随后又表示，“你是不是打错电话了？”<BR><BR>　　随后，工作人员也拨通该电话，接听后摇头说：“可能是我们服务员记错电话了，确实是我们搞错了，我们也同意给他们免单或重新点杀一只，不收钱都可以。可是他们不同意。”<BR><BR>　　之后，双方承诺协商，重庆晚报记者离开了现场。昨日，阳女士说，餐馆坚持只免单，她们接受了免单但保留索赔权利，“餐馆的解释不能自圆其说，涉嫌以次充好，欺诈顾客。”<BR><BR>　　阳女士说，她之所以要较真，就是想揭露部分餐馆在食材上做手脚的潜规则，不排除通过法律途径为消费者讨个说法。<BR><BR>　　<STRONG>市消委：</STRONG><BR><BR>　　<STRONG>若餐馆以次充好&nbsp;可要求退一赔一</STRONG><BR><BR>　　昨天，就阳女士的遭遇，重庆晚报记者咨询了市消费者权益保护委员会。对方说，像这种情况，若能证实餐馆以次充好，确实存在欺诈，消费者可要求商家“退一赔一”，即要求全额退还用餐费用，并有权要求获得等额的赔偿。<BR><!--advertisement code begin--><!--advertisement code end-->', 'hsg', '2014-12-17 09:13:43', '', '1');
INSERT INTO `xinwentongzhi` VALUES ('317', '走了“健美猪”又来“化妆猪肉” 食品美容翻新', '站内新闻', '&nbsp;走了“健美猪”又来“化妆猪肉” 食品“美容”花样翻新\r\n<P><SPAN></SPAN></P>\r\n<P><SPAN>&nbsp;&nbsp;&nbsp;&nbsp;本月起，“百度百科”辞典中增加了一个新名词“化妆猪肉”。这一闻所未闻的新词汇，缘于近日重庆市九龙坡区一农贸市场内发生的事件：一名猪肉贩子往肉上涂抹白色粉末。</SPAN></P>\r\n<P><SPAN></SPAN></P>\r\n<P><SPAN style=\"FONT-WEIGHT: bold\">&nbsp;&nbsp;&nbsp;&nbsp;农贸市场的神秘粉末</SPAN></P>\r\n<P><SPAN></SPAN></P>\r\n<P><SPAN>&nbsp;&nbsp;&nbsp;&nbsp;4月7日，重庆多位市民反映，九龙坡区冶金3村农贸市场内，有肉贩给猪肉涂抹一种可疑的白色粉末，抹过粉的肉看起来更新鲜。九龙坡区工商分局石坪桥工商所、九龙坡区公安分局石坪桥派出所等多部门立即赶赴现场，对市场内该肉摊进行调查。经查，经营者蒙家治当天凌晨从毛线沟屠场购进一头生猪，肉重126公斤，在摊位上分割成块后，将一种白色粉末涂抹在猪肉表面，涂抹后的猪肉表面色泽较鲜艳，卖相好。工商执法人员暂扣待售的可疑猪肉120多公斤和不明白色粉末1瓶，并采样送检。</SPAN></P>\r\n<P><SPAN></SPAN></P>\r\n<P><SPAN>&nbsp;&nbsp;&nbsp;&nbsp;“昨天早晨7点多钟，我就看到他在抹这种白粉。”现场围观的市民中有人反映，该肉贩为猪肉抹粉的行为不止一次，“怪不得他卖的猪肉颜色特别新鲜，生意也好！”</SPAN></P>\r\n<P><SPAN></SPAN></P>\r\n<P><SPAN>&nbsp;&nbsp;&nbsp;&nbsp;蒙家治在工商所做询问笔录时承认，共有120多公斤猪肉抹上了白色粉末，这样做是为了让肉保持新鲜，还有收敛水分的作用。据他交代，白色粉末为食用碱，是从杨家坪农贸市场买的，2元钱就可以买一斤粉末。他给猪肉抹这种粉末已经一年多了。蒙家治说：“我这是给猪肉化妆。如果我不抹的话，卖不完的肉第二天只有扔了。”</SPAN></P>\r\n<P><SPAN></SPAN></P>\r\n<P><SPAN>&nbsp;&nbsp;&nbsp;&nbsp;4月12日，中国轻工业联合会食品质量监督检测重庆站得出检测结论：蒙家治在其销售的猪肉上涂抹的白色粉末为食用碱。目前，区工商分局已对蒙家治立案调查，现该案正在调查处理当中。</SPAN></P>\r\n<P><SPAN></SPAN></P>\r\n<P><SPAN style=\"FONT-WEIGHT: bold\">&nbsp;&nbsp;&nbsp;&nbsp;“化妆猪肉”是一个新课题</SPAN></P>\r\n<P><SPAN></SPAN></P>\r\n<P><SPAN>&nbsp;&nbsp;&nbsp;&nbsp;据了解，食用碱并不是一种常用调味品，它只是一种食品疏松剂和肉类嫩化剂，能使干货原料迅速涨发，软化纤维，去除发面团的酸味，适当使用可为食品带来极佳的色、香、味、形，以增进人们的食欲。食物添加食用碱，一是为口感，二是为易烂，三是为成色。但碱吃得过多，对胃肠道和呼吸系统具有强烈刺激作用，可使人出现腹痛、腹泻、呕吐等中毒症状。</SPAN></P>\r\n<P><SPAN></SPAN></P>\r\n<P><SPAN>&nbsp;&nbsp;&nbsp;&nbsp;在采访中，九龙坡区工商分局执法人员表示，他们首次遇到在猪肉上涂抹粉末的情况。食用碱通常在肉类腌制的过程中添加，目的是打碎肉类的粗纤维，但若添加剂量过大对人体有害。“化妆猪肉”的情况是否普遍存在？存在多长时间？目前均不清楚。</SPAN></P>\r\n<P><SPAN></SPAN></P>\r\n<P><SPAN>&nbsp;&nbsp;&nbsp;&nbsp;九龙坡副区长戎蓉介绍说，根据《食品添加剂使用卫生标准》规定，食用碱可作为酸度调节剂使用于小麦粉制品和糕点中。根据国务院《生猪屠宰管理条例》规定，从事生猪产品销售、肉食品生产加工的单位和个人，销售、使用注水或者注入其他物质的生猪产品的，将没收尚未销售、使用的相关生猪产品以及违法所得，并处货值金额3倍以上5倍以下的罚款。</SPAN></P>\r\n<P><SPAN></SPAN></P>\r\n<P><SPAN>&nbsp;&nbsp;&nbsp;&nbsp;九龙坡工商分局有关人员表示，将按上限对该肉贩进行处罚。事发后，九龙坡区工商分局立即对全区农贸市场开展拉网式检查，重点检查猪肉经营者是否在猪肉上使用添加剂。到目前为止，区工商分局共计检查农贸市场36个（含专卖店）、猪肉经营者760户、猪肉11万多公斤，未发现猪肉经营者在猪肉上使用添加剂的行为。</SPAN></P><!-- end_ct -->', 'hsg', '2014-12-17 09:13:43', '', '1');
INSERT INTO `xinwentongzhi` VALUES ('318', '奶茶竟是女性心脏的隐秘杀手', '站内新闻', '&nbsp;&nbsp;&nbsp; 多年来科学家一直提醒说，饮茶有益于心脏。但一项最新研究提出，向提神的茶水中加入牛奶，或茶与牛奶(奶茶)同时喝，会破坏茶的所有有益<A href=\"http://health.people.com.cn/GB/index.html\" target=_blank><FONT color=#0000ff>健康</FONT></A>的成分。<BR><BR><STRONG>　　奶茶竟是女性心脏的隐秘杀手</STRONG><BR><BR>　　试验显示，虽然茶通过增加动脉壁的收缩能力提高了血流速度，但牛奶却完全阻碍了这一有益健康的效果。<BR><BR>　　德国研究人员表示，这个结果可解释为什么英国的饮茶文化对心脏病的流行没有产生明显的抑制作用的原因，因为英国大部分人都喜欢在茶中加入牛奶。<BR><BR>　　在《欧洲心脏杂志》上发表的这一研究结果称，16名女性分别喝半升新沏的茶、加入脱脂奶的茶水和白开水。两个小时后对她们前臂的动脉血管进行检查。结果显示，喝红茶的人的动脉血管壁的收缩能力有了明显提高，但加入牛奶的一组人的这一影响很不明显。<BR><BR>　　曾有统计数字显示，大量饮用奶茶超过三个月，血脂肪及胆固醇都会升高。街头卖的有些奶茶竟然一点奶，一点茶的成分也没有，全是奶精调兑的。只是油和糖的结合，因为奶精并非牛奶制成品，奶茶中又有大量糖分，几乎不含钙还对身体有很大的伤害。<BR><BR>　　目前在全球范围内，<A href=\"http://health.people.com.cn/GB/119042/131724/index.html\" target=_blank><FONT color=#0000ff>心血管</FONT></A>疾病是女性死亡最多的单病种死亡原因。有统计显示女性心血管疾病发病率已经是乳腺癌发病率的10倍，跃居成为直接威胁女性生命的“头号杀手”，但由于认识上的误差，女性心血管疾病极易被忽视，而一旦被查出有心血管疾病，都已非常严重。<BR><BR>　　“长期以来，世界各国的流行病学研究结果几乎一致地显示：<A href=\"http://health.people.com.cn/GB/14744/index.html\" target=_blank><FONT color=#0000ff>男性</FONT></A>心血管病的发病率和死亡率高于女性，因此，多年以来女性心血管疾病的发病情况并没有引起人们的重视。”广东省人民医院、省心血管病研究所副所长姚桦主任医师指出，在现实生活中，多数女性都知道如何预防乳癌和<A href=\"http://ttp://health.people.com.cn/GB/40246/index.html\" target=_blank><FONT color=#0000ff>皮肤</FONT></A>癌，但大部分女性都不知道自己的胆固醇有多高、也不担心是不是会心脏病发。对于疲倦、呼吸困难、觉得恶心、身体不适、背痛和腹痛之类的症状，许多女性都会选择“挨一挨”来挺过去，殊不知，这些看似普通的症状，很可能是你的心血管出现“疲态”的一个强烈信号！<BR><BR>　　虽说女性发生心血管疾病比男性晚10～15年，但<A href=\"http://health.people.com.cn/GB/14746/index.html\" target=_blank><FONT color=#0000ff>就诊</FONT></A>时的表现往往比男性严重。<BR><BR>　　姚桦告诉记者，近年来，国内外的研究已表明女性心血管疾病有其特殊性，像上述发病时症状不典型就是其中之一。<BR><BR><STRONG>　　症状不典型</STRONG><BR><BR>　　因此，临床上，高龄、并伴有<A href=\"http://health.people.com.cn/GB/119042/120597/index.html\" target=_blank><FONT color=#0000ff>糖尿病</FONT></A>史的女性发生无症状心肌梗死比男性多，部分以心力衰竭为首发临床表现，并易发生再梗死，且比男性更易受季节变化影响，秋冬季发病增高，并发症及死亡率也高于男性。另一个特殊性与女性绝经后易出现植物神经功能紊乱有关，专家称这种神经功能紊乱引起的系列症候群会干扰真正女性冠心病诊断，往往会延误了早期的<A href=\"http://health.people.com.cn/GB/14746/index.html\" target=_blank><FONT color=#0000ff>治疗</FONT></A>时机。<BR><BR><STRONG>　　高发人群</STRONG><BR><BR>　　据姚桦介绍，过去的20多年里，男性心血管疾病的致死率不断降低的同时，女性的死亡率却在不断上升。尤其是绝经期的妇女冠心病的死亡率高于男性。美国心脏病学会(ACC)的一项资料表明：在发达国家和地区， 2/3女性猝死患者死于生前未曾发现的冠心病。此外，来自英国和欧洲其他国家的资料表明，每6分钟即有1名女性死于心脏病，55%的欧洲女性的死因是心血管疾病，而相对应的男性比率是43%。<BR>', 'hsg', '2014-12-17 09:13:43', '', '1');
INSERT INTO `xinwentongzhi` VALUES ('319', '超市出售“临界食品”无提示，赔!', '站内新闻', '&nbsp;&nbsp;&nbsp;&nbsp; 10月24日夜，家住钱库镇的朱女士在当地某超市购买了1.5千克装的“光明”牌酸牛奶一瓶，回家后她将牛奶放入冰箱。第二天她让儿子饮用此牛奶，连续饮用2天，朱女士的儿子出现腹泻症状，第三天，她发现牛奶的生产日期为2011年10月11日，保质期14天，她儿子使用两天的牛奶是超保质期的，朱女士向超市索赔。双方没能达成一致意见。于是朱女士以超市在出售“临界食品”时并没有给顾客明显的提示为由向钱库消保分会申诉。 <BR>&nbsp;&nbsp;&nbsp;&nbsp; 钱库消保分会认为超市出售“临界食品”，应当履行告知义务。国家工商总局曾对“临界食品”发布过指导意见：2007年10月27日颁布的《规范食品索证索票制度和进货台账制度的指导意见》规定，即将到保质期的食品，应当在进货台账中做出醒目标注，并将食品集中陈列或者向消费者做出醒目提示。 <BR>&nbsp;&nbsp;&nbsp;&nbsp; 经过调解，超市以该牛奶10倍的价格赔偿消费者朱女士，并承当医药费，合计580元。（林清泉）', 'hsg', '2014-12-17 09:13:43', '', '1');
INSERT INTO `xinwentongzhi` VALUES ('320', '素菜清理肠胃：凉拌泥蒿', '站内新闻', '<P><STRONG>素菜清理肠胃：凉拌泥蒿</STRONG></P>\r\n<P>首先端上来的这一盘，也是盘色菜式：凉拌泥蒿</P>\r\n<P>这泥蒿呢，这一季绝对是武汉人餐桌上的热宠。凉拌，清炒，腊肉炒，怎么弄怎么好吃。。。</P>\r\n<P><IMG height=590 alt=清理肠胃：凉拌泥蒿 src=\"http://i7.meishichina.com/Eat/UploadFiles1017/201102/2011022110025227.jpg\" width=400 border=0></P>\r\n<P><STRONG>原料：</STRONG>泥蒿、红椒、蒜、辣椒、花椒、生抽、醋、白糖、蒸鱼豉油。</P>\r\n<P><STRONG>做法：</STRONG></P>\r\n<P>1、泥蒿洗净备用，红椒切细丝，蒜剁成蒜末备用。</P>\r\n<P>2、锅里烧适量清水，滴几滴色拉油，待水开后，下入泥蒿，红椒丝焯水至断生后捞出过凉后沥干水份备用。</P>\r\n<P>3、热锅下油，油热后转小火，放入红椒丝，花椒炸至出香味，关火。</P>\r\n<P>4、下入蒜末，用余温烘香。调入生抽，凉拌醋，白糖，蒸鱼豉油调匀。</P>\r\n<P>5、把泥蒿拌上调好的料汁即可。</P>\r\n<P><IMG height=329 alt=清理肠胃：凉拌泥蒿 src=\"http://i7.meishichina.com/Eat/UploadFiles1017/201102/2011022110030271.jpg\" width=490 border=0></P>\r\n<P><IMG height=372 alt=清理肠胃：凉拌泥蒿 src=\"http://i7.meishichina.com/Eat/UploadFiles1017/201102/2011022110030715.jpg\" width=550 border=0></P>\r\n<P><STRONG>注：</STRONG></P>\r\n<P>1、泥蒿断生就行，不要焯水太久，影响口感和味道。</P>\r\n<P>2、拌匀这一步我也是在锅里弄的，地盘大，拌得更匀些。</P>\r\n<P>3、炸香辣椒花椒后记得马上关火，泥蒿吃的就是脆生生的口感。</P>\r\n<P>盘子里那朵漂亮的小花，<A title=\"\" href=\"http://www.meishichina.com/Eat/Cookroom/201102/96922.html\" target=_blank><FONT color=#cc0000>做法</FONT></A>。</P>', 'hsg', '2014-12-17 09:13:43', '', '1');
INSERT INTO `xinwentongzhi` VALUES ('321', '瘦肉精中毒有何表现呢？', '站内新闻', '<IMG style=\"BORDER-LEFT-COLOR: #000000; BORDER-BOTTOM-COLOR: #000000; BORDER-TOP-COLOR: #000000; BORDER-RIGHT-COLOR: #000000\" src=\"/upload/editorfiles/2011.3.28_9.27.34_5884.jpg\" border=0><BR>　最近，瘦肉精中毒的情况备受人们关注，那么，瘦肉精中毒有什么表现呢？<BR _extended=\"true\">　　<BR _extended=\"true\">　　瘦肉精，克伦特罗，学名盐酸克伦特罗；是一种平喘药。该药物既不是兽药，也不是饲料添加剂，而是肾上腺类神经兴奋剂。盐酸双氯醇胺；克喘素；氨哮素；氨必妥；氨双氯喘通；氨双氯醇胺。<BR _extended=\"true\">　　<BR _extended=\"true\">　　瘦肉精为白色或类白色的结晶粉末，无臭、味苦，熔点161℃，溶于水、乙醇，微溶于丙酮，不溶于乙醚。<BR _extended=\"true\">　　<BR _extended=\"true\">　　瘦肉精是一种β2-受体激动剂，20世纪80年代初，美国一家公司开始将其添加到饲料中，增加瘦肉率，但如果作为饲料添加剂，使用剂量是人用药剂量的10倍以上，才能达到提高瘦肉率的效果。它用量大、使用的时间长、代谢慢，所以在屠宰前到上市，在猪体内的残留量都很大。这个残留量通过食物进入人体，就使人体渐渐地中毒，积蓄中毒。如果一次摄入量过大，就会产生异常生理反应的中毒现象，因此而被禁用。国内养猪户不顾农业部的规定，为了使猪肉不长肥膘，在饲料中掺入瘦肉精。猪食用后在代谢过程中促进蛋白质合成，加速脂肪的转化和分解，提高了猪肉的瘦肉率，因此称为瘦肉精。<BR _extended=\"true\">　　<BR _extended=\"true\">　　瘦肉精的毒理简介：克伦特罗能激动β2-受体，对心脏有兴奋作用，对支气管平滑肌有较强而持久的扩张作用。口服后较易经胃肠道吸收。作平喘药口服成人20-40μg/次，3次/日；儿童5岁以上5-20μg/次，3次/日。人(女性)经口TDLo:4600ng/kg。小鼠静脉 LD50:27600ug/kg。<BR _extended=\"true\">　　<BR _extended=\"true\"><B _extended=\"true\">　　瘦肉精中毒有什么表现？</B><BR _extended=\"true\">　　<BR _extended=\"true\">　　1、急性中毒有心悸，面颈、四肢肌肉颤动，有手抖甚至不能站立，头晕，乏力，原有心律失常的患者更容易发生反应，心动过速，室性早搏，心电图示S-T段压低与T波倒置。<BR _extended=\"true\">　　<BR _extended=\"true\">　　2、原有交感神经功能亢进的患者，如有高血压、冠心病、甲状腺功能亢进者上述症状更易发生。<BR _extended=\"true\">　　<BR _extended=\"true\">　　3、与糖皮质激素合用可引起低血钾，从而导致心律失常。<BR _extended=\"true\">　　<BR _extended=\"true\">　　4、反复使用会产生耐受性，对支气管扩张作用减弱及持续时间缩短。虽然克伦特罗残留的毒作用为轻度的，但美国FDA研究表明，应用拟交感神经药者或对前药过敏者，对克伦特罗的反应要比正常健康个体更为严重。<BR _extended=\"true\">　　<BR _extended=\"true\">　　FDA担心非法应用克伦特罗可导致此药的生产工人患病或死亡。FDA指出，职业性吸入克伦特罗对心血管的影响，可能要比经食品摄食的危害性更大，但有待于进一步的证实。<BR _extended=\"true\">', 'hsg', '2014-12-17 09:13:43', '', '1');
INSERT INTO `xinwentongzhi` VALUES ('322', '营养学家教糖友如何挑选零食', '站内新闻', '<P>　　很多糖尿病患者悲观地认为，得了糖尿病，就得跟零食说“再见”了。台北医学大学保健营养学系教授刘珍芳日前接受《生命时报》专访时指出，只要懂得如何挑选零食，糖友完全可以享受零食带来的生活乐趣。</P>\r\n<P>　　“糖尿病患者挑选零食，应本着三个原则。”刘珍芳教授说，一是天然、无加工或少加工，二是不会明显升高血糖，三是低糖、低盐、低油脂，无添加剂。依据以上原则，刘珍芳教授将市面上常见的零食分为三大类：</P><!--advertisement code begin--><!--none--><!--advertisement code end-->\r\n<P>　　可以天天吃的零食。1.水果。水果富含维生素和纤维素，口味香甜，是糖尿病患者可以选择的零食。不过，由于水果糖分含量差别较大，挑选起来要注意。刘珍芳说，最适合糖友的水果是番茄，另外，菠萝、火龙果、猕猴桃等含糖量不高的水果也可以选择。而葡萄、荔枝、龙眼、哈密瓜等水果糖分过高，糖友要慎选。</P>\r\n<P>　　2.坚果。由于兼具天然、少加工、低糖等特点，诸多坚果是糖友的零食之选。不过，坚果往往油脂含量高，选择时也要区别对待。刘珍芳说，大杏仁、腰果、开心果、花生的油脂含量在45%?50%，糖友一天可以吃一小把。榛子、核桃、夏威夷果等油脂含量超过60%，吃起来就要注意了。</P>\r\n<P>　　可以偶尔用来解馋的零食。饼干、蛋糕、糖果、酥点、巧克力等零食，即便打着“无糖”的招牌，也要少吃。这是因为，“无糖”的意思是不含蔗糖，但这些零食本身含较多碳水化合物，其实也属于糖类，绝对不能多吃。另外，不少蛋糕、酥点、饼干等零食里盐分和油脂较多，对糖友来说很不适宜。并且，这类零食里往往含有反式脂肪酸，会对糖友的心血管产生不利影响，就更要严格控制摄入量。</P>\r\n<P>　　绝对不能吃的零食。一类是油炸小食品，如薯片、薯条等。刘珍芳说，这类食品完全应归为垃圾食品，既是过度加工，又是油盐严重超标。据计算，吃完一桶薯片产生的热量，需要爬101层楼或者快走一个半小时才能消耗完。别说是糖友，健康人也应远离。另一类是肉类零食，如肉脯、肉干等。它们不但油盐多，往往含有较多防腐剂。此外，像豆干等豆制品零食，油、盐、防腐剂都多，且为过度加工食品，也不适合糖友。</P>\r\n<P>　　最后，刘珍芳教授叮嘱广大糖友，无论吃哪种零食，一定要计算所含的热量，然后记得从正餐中刨除。“这样才能做到享受和控糖两不误。”　(张 彤)</P>', 'hsg', '2014-12-17 09:13:43', '', '2');
INSERT INTO `xinwentongzhi` VALUES ('323', 'gwegew', '站内新闻', 'hwhehw', 'hsg', '2014-12-17 15:59:08', 'uploadfile/1418803146kz2x.jpg', '1');

-- ----------------------------
-- Table structure for `yonghuzhuce`
-- ----------------------------
DROP TABLE IF EXISTS `yonghuzhuce`;
CREATE TABLE `yonghuzhuce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zhanghao` varchar(50) DEFAULT NULL,
  `mima` varchar(50) DEFAULT NULL,
  `xingming` varchar(50) DEFAULT NULL,
  `xingbie` varchar(50) DEFAULT NULL,
  `diqu` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `zhaopian` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `issh` varchar(10) DEFAULT '否',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of yonghuzhuce
-- ----------------------------
INSERT INTO `yonghuzhuce` VALUES ('26', '555', '555', '何升高', '男', '浙江', 'gsgs@163.com', 'uploadfile/13392103902z4y.jpg', '2014-11-30 19:46:56', '是');
INSERT INTO `yonghuzhuce` VALUES ('27', 'leejie', 'leejie', '李龙', '男', '湖北', 'fege@126.com', 'uploadfile/1339211863x4s3.jpg', '2014-11-30 19:46:56', '是');
INSERT INTO `yonghuzhuce` VALUES ('28', 'mygod', 'mygod', '陈德才', '男', '河南', 'gshf@yahoo.com', 'uploadfile/1339211824lezl.gif', '2014-11-30 19:46:56', '是');
INSERT INTO `yonghuzhuce` VALUES ('29', 'xwxxmx', 'xwxxmx', '吴江', '女', '北京', 'jrjtr@163.com', 'uploadfile/1339211786gts3.jpg', '2014-11-30 19:46:56', '是');
INSERT INTO `yonghuzhuce` VALUES ('34', '666', '666', 'gewgw', '男', '浙江', 'rehe@163.com', 'uploadfile/14188030310mdc.jpg', '2014-12-17 15:57:13', '是');

-- ----------------------------
-- Table structure for `youqinglianjie`
-- ----------------------------
DROP TABLE IF EXISTS `youqinglianjie`;
CREATE TABLE `youqinglianjie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wangzhanmingcheng` varchar(50) DEFAULT NULL,
  `wangzhi` varchar(50) DEFAULT NULL,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of youqinglianjie
-- ----------------------------
INSERT INTO `youqinglianjie` VALUES ('16', '百度', 'http://www.baidu.com', '2014-12-17 19:46:56');
INSERT INTO `youqinglianjie` VALUES ('17', '谷歌', 'http://www.google.cn', '2014-12-17 19:46:56');
INSERT INTO `youqinglianjie` VALUES ('18', '新浪', 'http://www.sina.com', '2014-12-17 19:46:56');
INSERT INTO `youqinglianjie` VALUES ('19', 'QQ', 'http://www.qq.com', '2014-12-17 19:46:56');
INSERT INTO `youqinglianjie` VALUES ('20', '网易', 'http://www.163.com', '2014-12-17 19:46:56');

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for aw_abouts
-- ----------------------------
DROP TABLE IF EXISTS `aw_abouts`;
CREATE TABLE `aw_abouts`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `order_by` int(11) NULL DEFAULT 0,
  `type` tinyint(1) NULL DEFAULT 0 COMMENT '1 公司简介  2发展历程 3 资质荣誉',
  `created_at` int(11) NULL DEFAULT NULL,
  `updated_at` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of aw_abouts
-- ----------------------------
INSERT INTO `aw_abouts` VALUES (1, '浙江权重数据科技有限公司', '浙江权重数据科技有限公司诞生于中国互联网之都——杭州。 前身为浙江省经信委的对口服务单位之一，2014年改制为市场化企业。权重数据是政务数据整合领域的专家级数据供应商，拥有强大的数据分析、内容提供、区块链整合、数据挖掘的技术能力和储备能力， 也是全国重要数字化改革试点工程——浙江省“住建大脑”方案和全国财政政策应用系统的原始设计者。', '20200913/3b762042b5d890ac7bc36acb892e8fc1.jpg', 0, 1, NULL, 1599963545);
INSERT INTO `aw_abouts` VALUES (2, '2017年与阿里数字政府合作', '<p>进军互联网政务市场和云端数据整合，依托进项前端手机展示和后台可视化运行的双向互连互通平台，致力于成为全国城市大脑项目管理平台的先行者。</p><p>\r\n\r\n在人工智能的数据研判方面，向城市最高决策层给出革命性数据判断和执行模式,企业与众多政府职能部门如市政府、财政、发改委、公安、开发区、银行等项目中获得一致赞誉。 在国务院第六次大督查中，项目全流程管理系统获优秀好评。</p>', '20200913/d8fccf54a17d81a2cdf791957b2f7c17.jpg', 1, 1, NULL, 1599963516);
INSERT INTO `aw_abouts` VALUES (3, '2014年', '公司成立\n节能减排财政政策综合示范项目管理系统V2.2”研发成功\n杭州市节能减排财政政策综合示范城市项目管理建设\n新余市节能减排财政政策综合示范城市项目管理建设', NULL, 0, 2, NULL, NULL);
INSERT INTO `aw_abouts` VALUES (4, '2015年', '《权重数据信息机管理系统V1.0》研发成功\n东海市人民政府办公室OA办公自动化系统平台建设\n杭州城西科创区人才信息管理系统建设', NULL, 0, 2, NULL, NULL);
INSERT INTO `aw_abouts` VALUES (5, '2016年', '被评为浙江省科技中小型企业\n《权重城市地下管网监控追踪系统V1.0》研发成功\n包头市国家节能减排项目管理系统建设\n聊城市财政局国家节能减排财政政策综合示范城市项目管理建设\n德阳市节能减排财政政策综合示范项目建设\n浙江公安厅公共治安从业人员数据管理系统建设\n铜川市节能减排财政政策综合示范城市项目管理建设\n鹤壁市节能减排财政政策综合示范城市项目管理建设', NULL, 0, 2, NULL, NULL);
INSERT INTO `aw_abouts` VALUES (6, '2017年', '被评为杭州市高新技术企业、杭州市“雏鹰计划”企业<br>《政府项目追踪流程管理系统V2.0》<br>《公共数据采集防控系统软件V3.7》<br>《AI政府投资项目云端申报巡查系统V3.0》<br>《AI政府投资项目可视化综合云端管理平台V3.0》<br>《AI政府投资项目可视化决策系统V3.0》研发成功<br>包头市国家节能减排中合示范城市信息系统（二期）建设<br>全国公安从业人员数据管理系统建设', NULL, 0, 2, NULL, NULL);
INSERT INTO `aw_abouts` VALUES (7, '计算机软件著作权登记证书', '', '20200913/9bcbafebd6f9bd674ecc10df9e0b559b.png', 12, 3, NULL, 1599963722);
INSERT INTO `aw_abouts` VALUES (8, '计算机软件著作权登记证书', '', '20200913/8f49337570cf3e25bdf85aed38d002c2.png', 11, 3, NULL, 1599963711);
INSERT INTO `aw_abouts` VALUES (9, '计算机软件著作权登记证书', '', '20200913/ab6b481a14cf87733701b66c6bf405c7.png', 10, 3, NULL, 1599963700);
INSERT INTO `aw_abouts` VALUES (10, '计算机软件著作权登记证书', '', '20200913/c96f6b82ad143c0c621fad9d0688c515.png', 9, 3, NULL, 1599963688);
INSERT INTO `aw_abouts` VALUES (11, '计算机软件著作权登记证书', '', '20200913/3b3be06caec9e3c3962598571657187d.png', 8, 3, NULL, 1599963676);
INSERT INTO `aw_abouts` VALUES (12, '浙江省科技型中小企业', '', '20200913/c068b4ce23263c1be2ff7b29d20dd518.png', 7, 3, NULL, 1599963664);
INSERT INTO `aw_abouts` VALUES (13, '软件评测报告', '', '20200913/aa7cad02d5c0c33beeec524cc53a7ca6.png', 6, 3, NULL, 1599963650);
INSERT INTO `aw_abouts` VALUES (14, '软件产品证书', '', '20200913/6cc0f29965f0b6c1f65cbe9c85713e4a.png', 5, 3, NULL, 1599963637);
INSERT INTO `aw_abouts` VALUES (15, '软件企业证书', '', '20200913/d6aa2c293e77584c4e691d9e43b940ce.png', 4, 3, NULL, 1599963625);
INSERT INTO `aw_abouts` VALUES (16, '高新技术企业', '', '20200913/e47f581c06a318c0d91e69c53a755f58.png', 3, 3, NULL, 1599963614);
INSERT INTO `aw_abouts` VALUES (17, '杭州市高新技术企业', '', '20200913/7a05ce52fe5ae98ccdfffd1fb96ebe19.png', 2, 3, NULL, 1599963603);
INSERT INTO `aw_abouts` VALUES (18, '杭州市“皱鹰计划”企业', '', '20200913/e03589811afc9b165d4ae6162ab8f42e.png', 1, 3, NULL, 1599963591);
INSERT INTO `aw_abouts` VALUES (19, '2018年', '<p>被评为浙江省软件协会会员 取得增值电信业务经营许可证 <br>《权重美丽乡村国家政策管理平台V1.0》 <br>《权重山水林田湖草国家政策管理平台V1.0》 <br>《权重稀土经济国家政策管理平台V1.0》 <br>《权重公安治安大脑系统构建平台V1.0》 <br>《权重住建大脑系统构建平台V1.0》 <br>《权重住建能力总线功能性平台V1.0》研发成功 <br>包头市国家节能减排项目投资管理可视化系统建设<br></p>', '', 0, 2, 1599963799, NULL);
INSERT INTO `aw_abouts` VALUES (20, '2019年', '<p>《政府项目追踪流程管理系统V2.0》被评为软件产品 <br>8月被评为浙江省软件企业 入库国家科技中小型企业 <br>同年11月被评为国家高新技术企业 浙江省住建厅数字化方案撰写者 <br>鄂尔多斯市可视化项目云端管理平台建设<br></p>', '', 0, 2, 1599963833, NULL);

-- ----------------------------
-- Table structure for aw_careers
-- ----------------------------
DROP TABLE IF EXISTS `aw_careers`;
CREATE TABLE `aw_careers`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `order_by` int(11) NULL DEFAULT 0,
  `created_at` int(11) NULL DEFAULT NULL,
  `updated_at` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of aw_careers
-- ----------------------------
INSERT INTO `aw_careers` VALUES (1, '售前工程师', '<p><b>岗位职责</b><br>1.完成针对目标客户的技术交流、方案宣讲、产品演示等 <br>2.进行售前项目分析、设计和规划，促进销售目标达成 <br>3.配合产品部门完成需求调研、相关方案的撰写、系统演 示等工作 <br>4.及时反馈行业、市场、用户需求、竞争对手等方面市场 分析数据，为公司的市场方向、产品研发和软件开发等提供建议&nbsp;</p><p><b>任职资格</b><br>1.销售、会计、财务、计算机、信息管理等相关专业，大专 及以上学历，1年以上工作经验 <br>2.吃苦耐劳，有信心从事IT方面的销售工作，并有决心陪同 团队打造行业独角兽的意识和方向感觉 <br>3.良好的书面撰写与口头表达能力、Word和PPT使用经验 <br>4.有较强的组织协调能力和团队合作精神 <br>5.熟悉政府财政或工程管理项目者优先考虑<br></p>', 0, NULL, NULL);
INSERT INTO `aw_careers` VALUES (2, '解决方案工程师', '<p><b>岗位职责</b><br>1.负责公司的产品和业务调研、需求分析、系统及应用设计 工作 <br>2.负责行业方案规划、设计、开发、验证工作，包括解决方 案文档、PPT等 <br>3.负责解决方案的培训推广工作，包括对公司内部销售人员 的赋能培训，以及面向用户的方案宣讲、交流等 <br>4.负责解决方案的竞争分析，包括材料搜集、系统、产品、 功能层面的内容分析，提供对应的解决策略</p><p><b>任职资格</b><br>1.大专及以上学历，计算机/电子相关专业优先 <br>2.1年以上产品或解决方案工作经验 <br>3.有相关行业经验者优先，有数据挖掘、分析经验者优先 <br>4.具备较强的项目推动能力、服务意识、团队合作精神、责任心和执行力，能够适应较高强度的工作节奏<br></p>', 0, NULL, NULL);

-- ----------------------------
-- Table structure for aw_casies
-- ----------------------------
DROP TABLE IF EXISTS `aw_casies`;
CREATE TABLE `aw_casies`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `order_by` int(11) NULL DEFAULT 0,
  `created_at` int(11) NULL DEFAULT NULL,
  `updated_at` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of aw_casies
-- ----------------------------
INSERT INTO `aw_casies` VALUES (1, '国家', '20200913/9837b4ede933bd7750f72cf730139ceb.png', '<p>国家扶贫办2018年度光伏扶贫绩效评价项目\r\n</p><p>国家水利部2018年度部门整体绩效评价项目\r\n</p><p>中央网信办2019年度项目绩效评价\r\n</p><p>国家住建部中国传统村落保护政策绩效评价</p>', 4, NULL, 1599964361);
INSERT INTO `aw_casies` VALUES (2, '北京市', '20200913/05cb8eb1f42b05f00579095f879bf973.png', '<p>北京市财政局2017年平原造林政策绩效评价\r\n</p><p>北京市财政局2015年度北京市财政政策绩效评价\r\n</p><p>北京市东城区国资委等11个单位整体支出绩效跟踪</p>', 3, NULL, 1599964345);
INSERT INTO `aw_casies` VALUES (3, '河北省', '20200913/2228f61409e9205ec48e58a070f11d6b.png', '<p>天津市南开区人民政府等22个单位部门整体绩效评价\r\n</p><p>河北廊坊信息化项目事前评审</p>', 2, NULL, 1599964330);
INSERT INTO `aw_casies` VALUES (4, '包头市', '20200913/0d035a7fa78b0d66010b46034a098997.png', '包头市节能减排专项政策评价\r\n', 1, NULL, 1599964317);

-- ----------------------------
-- Table structure for aw_config
-- ----------------------------
DROP TABLE IF EXISTS `aw_config`;
CREATE TABLE `aw_config`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `val` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `is_upload` tinyint(1) NULL DEFAULT 0,
  `created_at` int(11) NULL DEFAULT NULL,
  `updated_at` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of aw_config
-- ----------------------------
INSERT INTO `aw_config` VALUES (1, '网页名称', '浙江权重数据科技有限公司', 0, NULL, 1600751419);
INSERT INTO `aw_config` VALUES (2, '电话', '0571-88095566/0571-88091717', 0, NULL, 1600751420);
INSERT INTO `aw_config` VALUES (3, '网址', 'www.qzdata.com.cn', 0, NULL, 1600751309);
INSERT INTO `aw_config` VALUES (4, '地址', '中国（杭州）未来科技城双龙路西溪世纪中心2号楼', 0, NULL, 1600751335);
INSERT INTO `aw_config` VALUES (5, '成功案例图片', '20200913/2e1214050d5852188f7d0e72304ae8a5.png', 1, NULL, 1600567205);
INSERT INTO `aw_config` VALUES (6, '服务与支持图片', '20200913/bbbb755b7d7d79076a099d2cb60bb67b.png', 1, NULL, 1600751300);
INSERT INTO `aw_config` VALUES (7, '更多资讯外链', 'http://www.baidu.com/', 0, NULL, 1600751329);
INSERT INTO `aw_config` VALUES (8, 'logo', '20200913/0c21394990247913870ba89ec06e4361.png', 1, NULL, NULL);
INSERT INTO `aw_config` VALUES (9, '横版logo', '20200920/9b80a6100c49b06f4bcbf1d2a685f86d.png', 1, NULL, 1600610111);
INSERT INTO `aw_config` VALUES (10, '网址备案号', '浙ICP备17023648号', 0, NULL, 1600751421);
INSERT INTO `aw_config` VALUES (11, '成功案例图片-手机版', '20200920/39aaef7c208c3f536ce49d76798c2e81.png', 1, NULL, NULL);
INSERT INTO `aw_config` VALUES (12, '服务与支持图片-手机版', '20200920/74dc127cc9f2028810d717674d2114db.png', 1, NULL, 1600751336);
INSERT INTO `aw_config` VALUES (13, '网页关键词', '浙江权重数据科技有限公司', 0, NULL, NULL);
INSERT INTO `aw_config` VALUES (14, '网页描述', '浙江权重数据科技有限公司', 0, NULL, NULL);

-- ----------------------------
-- Table structure for aw_images
-- ----------------------------
DROP TABLE IF EXISTS `aw_images`;
CREATE TABLE `aw_images`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '图片链接',
  `type` tinyint(1) NULL DEFAULT NULL COMMENT '1 首页 2权重数据 3解决方案 4 成功案例 5服务与支持 6 公众号 7小程序',
  `video_path` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '视频链接',
  `internal_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '内部链接',
  `external_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '外部链接',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '文案',
  `created_at` int(11) NULL DEFAULT NULL,
  `updated_at` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `type_index`(`type`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of aw_images
-- ----------------------------
INSERT INTO `aw_images` VALUES (1, '20200913/1319c5a96adade44d2599995e568e3cd.jpg', 1, '20200913/82e613b1d9e6bf81a8396582aea1bbb4.m4v', 'http://qz.fumos.club/solution.html', '', '', NULL, 1599963428);
INSERT INTO `aw_images` VALUES (2, '20200913/5321e08fd5ebc7c84c959459ad8a4ceb.jpg', 1, '20200913/997a9ae3feb7583d66299adb2b7d5f57.m4v', '', 'https://www.baidu.com/', '', NULL, 1599963464);
INSERT INTO `aw_images` VALUES (3, '20200913/dd1295e87bb36125dd8df09e9c099959.jpg', 1, '', '', 'https://www.baidu.com/', '', NULL, 1599962891);
INSERT INTO `aw_images` VALUES (4, '20200913/14c44093cf68aeda09e80a715dc199d7.jpg', 1, '', '', 'https://www.baidu.com/', '', NULL, 1599962862);
INSERT INTO `aw_images` VALUES (5, '20200913/6b833476fc4710d60a2fe326b6cab62d.jpg', 2, '', '', '', '<p>集“重”数据 诠释科技<br></p>', NULL, 1599962829);
INSERT INTO `aw_images` VALUES (6, '20200913/a31b3b0aa8b2aade86b9211a512fdf19.jpg', 3, '', '', '', '<p>推出面向政府和企业的生态运维管理解决方案，深入剖析业务需求，<br>&nbsp;助力用户实现数字化转型，确保信息化健康稳定运行，提升运维效率，提高部门运维服务水平。<br></p>', NULL, 1599962781);
INSERT INTO `aw_images` VALUES (7, '20200913/0fe96cb77348a0c02fa9928a09902fdc.jpg', 4, '', '', '', '<p>致力于政务数据信息化研究与发展，针对项目投资、预算绩效、治理体系、地方债务及评审等方<br>面的全流程管理的整体解决系统。<br></p>', NULL, 1599962488);
INSERT INTO `aw_images` VALUES (8, '20200913/f38a91b3417d0f5171bfbcde2422b62c.jpg', 5, '', '', '', '<p>权重数据总部位于浙江杭州，在全国范围内拥有3个支机构和4个本地化合作伙伴。<br></p>', NULL, 1599962542);
INSERT INTO `aw_images` VALUES (9, '20200913/bb3eb48224d581345810a87adb141025.png', 6, '', '', '', '', NULL, 1599962283);
INSERT INTO `aw_images` VALUES (10, '20200913/cfd4a45dd878861b911e5d97f3dbda5c.png', 7, '', '', '', '', NULL, 1599962269);
INSERT INTO `aw_images` VALUES (11, '20200920/58a9b34f201197fe9dd4e3f1522507ba.png', 8, '20200913/82e613b1d9e6bf81a8396582aea1bbb4.m4v', 'http://qz.fumos.club/solution.html', '', '', 1600567727, 1600567740);
INSERT INTO `aw_images` VALUES (12, '20200920/c5e612388398f8dc9ae8b14754fbfee3.png', 8, '', '', '', '', 1600568723, NULL);
INSERT INTO `aw_images` VALUES (13, '20200920/d6e24d579bad240b864b3d30c38e9d24.png', 8, '', '', '', '', 1600568747, NULL);
INSERT INTO `aw_images` VALUES (14, '20200920/aa747a7dea419e94b85ded655b218e1b.png', 9, '', '', '', '', 1600582832, NULL);
INSERT INTO `aw_images` VALUES (15, '20200920/f94a8ec89447326783c922ecd7c0e406.png', 10, '', '', '', '', 1600582847, NULL);
INSERT INTO `aw_images` VALUES (16, '20200920/07379257d6f8b9e3c3d08e1d9a36eede.png', 11, '', '', '', '', 1600582864, NULL);
INSERT INTO `aw_images` VALUES (17, '20200920/8567e82f86c15657d4e9c0e31c582637.png', 12, '', '', '', '', 1600582875, NULL);

-- ----------------------------
-- Table structure for aw_news
-- ----------------------------
DROP TABLE IF EXISTS `aw_news`;
CREATE TABLE `aw_news`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `order_by` int(11) NULL DEFAULT 0,
  `send_time` datetime(0) NULL DEFAULT NULL,
  `created_at` int(11) NULL DEFAULT NULL,
  `updated_at` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of aw_news
-- ----------------------------
INSERT INTO `aw_news` VALUES (1, '关于印发《项目支出绩效评价管理办法》的通知', '财预【2020】10号', 'http://www.baidu.com', '20200913/75e5ab07a6ada068ac322fd5b249b80d.jpg', 1, '2020-09-12 00:00:00', NULL, 1599965032);
INSERT INTO `aw_news` VALUES (2, '浙江权重数据科技有限公司浙江权重数据科技有限公司111111', '浙江权重数据科技有限公司-2007年诞生于天堂硅谷之称的浙江22222', 'http://www.baidu.com', '20200913/50e6ce2855b09f547d40ef9d4a5bb58a.jpg', 0, '2020-09-12 00:00:00', NULL, 1599965047);
INSERT INTO `aw_news` VALUES (3, '关于印发《项目支出绩效评价管理办法》的通知', '财预【2020】10号', 'http://www.baidu.com', '20200913/8c1f3bacc923855ceb94fe5946568785.jpg', 1, '2020-09-12 00:00:00', NULL, 1599965019);

-- ----------------------------
-- Table structure for aw_partners
-- ----------------------------
DROP TABLE IF EXISTS `aw_partners`;
CREATE TABLE `aw_partners`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `order_by` int(11) NULL DEFAULT 0,
  `created_at` int(11) NULL DEFAULT NULL,
  `updated_at` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of aw_partners
-- ----------------------------
INSERT INTO `aw_partners` VALUES (1, '20200913/b1f9fe38579b7e6ef4a0670f7182ab67.png', 0, NULL, 1599964294);
INSERT INTO `aw_partners` VALUES (2, '20200913/4ab8bec03e5eac770cd7f63e26ed9e17.png', 0, NULL, 1599964286);
INSERT INTO `aw_partners` VALUES (3, '20200913/ed530b2c4ec86df1bee83480aad6c3cc.png', 0, NULL, 1599964278);
INSERT INTO `aw_partners` VALUES (4, '20200913/d875338d9e1f0ee26c0b64aeaa3bcb94.png', 0, NULL, 1599964269);
INSERT INTO `aw_partners` VALUES (5, '20200913/2f0b4291baf8bdf163123bbc17fd0179.png', 0, NULL, 1599964261);
INSERT INTO `aw_partners` VALUES (6, '20200913/4573caee64b5b51d351093ac37b6c44b.png', 0, NULL, 1599964247);
INSERT INTO `aw_partners` VALUES (7, '20200913/26abdb70cf8f04e61532797e85049675.png', 0, NULL, 1599964240);
INSERT INTO `aw_partners` VALUES (8, '20200913/e6ca12240f1403650fbd1cf04f17fd3e.png', 0, NULL, 1599964231);

-- ----------------------------
-- Table structure for aw_services
-- ----------------------------
DROP TABLE IF EXISTS `aw_services`;
CREATE TABLE `aw_services`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `order_by` int(11) NULL DEFAULT 0,
  `created_at` int(11) NULL DEFAULT NULL,
  `updated_at` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of aw_services
-- ----------------------------
INSERT INTO `aw_services` VALUES (1, '内蒙古', '<p>青山区互助路鑫达31栋301室<br></p>', 8, 1600566320, NULL);
INSERT INTO `aw_services` VALUES (2, '北京市朝阳区', '<p>望京阜通东大街6号院方恒国际中心A座 <br>联系方式：13501361068<br></p>', 7, 1600566344, NULL);
INSERT INTO `aw_services` VALUES (3, '山西省太原市', '<p>小店区长风街长风画卷A座2单元30层 <br>联系方式：0351-7920008（郭）<br></p>', 6, 1600566374, NULL);
INSERT INTO `aw_services` VALUES (4, '河南省郑州市', '<p>商鼎路泰宏国际广场A座17A <br>联系方式：0371-55110059（任）<br></p>', 5, 1600566405, NULL);
INSERT INTO `aw_services` VALUES (5, '湖北省武汉市', '<p>东湖新技术开发区金融港一路7号光谷智慧园1501栋 <br>联系方式：18674011166（张）<br></p>', 4, 1600566448, NULL);
INSERT INTO `aw_services` VALUES (6, '广东省深圳市', '<p>福田区北环大道南侧7043号青海大厦30E <br>联系方式：0755-83203022（陈）<br></p>', 3, 1600566471, NULL);
INSERT INTO `aw_services` VALUES (7, '江苏省南京市', '<p>雨花台区大周路88号南京软件谷科创城C3幢7层 <br>联系方式：13815887789（旭）<br></p>', 2, 1600566488, NULL);
INSERT INTO `aw_services` VALUES (8, '浙江省杭州市', '<p>企业总部：西湖区双龙街西溪世纪中心2号楼321 <br>研发中心：西湖区留石科技双创中心C-2号楼5层 <br>联系方式：0571-8809 5566/0571-8809 1717<br></p>', 1, 1600566508, NULL);

-- ----------------------------
-- Table structure for aw_solutions
-- ----------------------------
DROP TABLE IF EXISTS `aw_solutions`;
CREATE TABLE `aw_solutions`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) NULL DEFAULT NULL COMMENT '1 政务系统 2企业 3首页图标',
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `order_by` int(11) NULL DEFAULT 0,
  `created_at` int(11) NULL DEFAULT NULL,
  `updated_at` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of aw_solutions
-- ----------------------------
INSERT INTO `aw_solutions` VALUES (1, 1, 'AI可视化云端管理系统', '20200913/931c3344681f97c3e30277e56def00fd.png', 0, NULL, 1599964757);
INSERT INTO `aw_solutions` VALUES (2, 1, '预算绩效管理系统', '20200913/624ed6c5a8a10bf95d8681c71b9dc6de.png', 0, NULL, 1599964850);
INSERT INTO `aw_solutions` VALUES (3, 1, '国家治理体系现代化平台', '20200913/80a98ecfdac79029352f45e7164235ec.png', 0, NULL, 1599964693);
INSERT INTO `aw_solutions` VALUES (4, 1, '地方政府债务系统', '20200913/9f35922c309cb06f3b8d85545b1cf90a.png', 0, NULL, 1599964640);
INSERT INTO `aw_solutions` VALUES (5, 1, '互联网项目评审管理平台', '20200913/d64bb6b30fc19b8c22d13bbb75ab9297.png', 0, NULL, 1599964900);
INSERT INTO `aw_solutions` VALUES (6, 2, '汽车后市场服务系统', '20200913/62fd999b1d39f0f79960a627d52313b6.png', 0, NULL, 1599964776);
INSERT INTO `aw_solutions` VALUES (7, 2, '保险数据引流平台', '20200913/f1a0ba0263a19904947c43cb9b050ebc.png', 0, NULL, 1599964813);
INSERT INTO `aw_solutions` VALUES (8, 2, '互联网健康应用系统', '20200913/d7f6151f71b74450ba0b32a65a3cf65b.png', 0, NULL, 1599964682);
INSERT INTO `aw_solutions` VALUES (9, 2, '智慧校园应用', '20200913/51c5965a93eea4fb6c9a0f7264af5916.png', 0, NULL, 1599964625);
INSERT INTO `aw_solutions` VALUES (10, 3, '政府', '20200913/7595acd9ca09438a2d4d8b3b4aa10433.png', 6, NULL, 1599964428);
INSERT INTO `aw_solutions` VALUES (11, 3, '财政', '20200913/9895714253a6b98454d4c8ffabeb69d5.png', 5, NULL, 1599964415);
INSERT INTO `aw_solutions` VALUES (12, 3, '环保', '20200913/e01c66eb85d0ca09f416629c05df8e6c.png', 4, NULL, 1599964404);
INSERT INTO `aw_solutions` VALUES (13, 3, '云计算', '20200913/2339f73873e55eb2acd0a42661bd31a5.png', 3, NULL, 1599964395);
INSERT INTO `aw_solutions` VALUES (14, 3, '大数据', '20200913/709a02586b5005185cf2891d971e5a16.png', 2, NULL, 1599964387);
INSERT INTO `aw_solutions` VALUES (15, 3, '可视化', '20200913/84c00c134062308d6d6f1db3f6e7999d.png', 1, NULL, 1599964377);
INSERT INTO `aw_solutions` VALUES (16, 4, 'AI可视化云端管理系统', '20200921/eac811f63b1703018af327d3516fd592.png', 0, 1600616934, 1600654751);
INSERT INTO `aw_solutions` VALUES (17, 4, '预算绩效管理系统', '20200921/aaea823cd61c475b5ec937263d1e5ced.png', 0, NULL, 1600654803);
INSERT INTO `aw_solutions` VALUES (18, 4, '国家治理体系现代化平台', '20200921/08a3a242df7c55adb688d917c9bf0571.png', 0, NULL, 1600654846);
INSERT INTO `aw_solutions` VALUES (19, 4, '地方政府债务系统', '20200921/019aac5109244017957bbe55c3b8643c.png', 0, NULL, 1600654881);
INSERT INTO `aw_solutions` VALUES (20, 4, '互联网项目评审管理平台', '20200921/6519588106f5312f1ead26a5955a926e.png', 0, NULL, 1600654912);
INSERT INTO `aw_solutions` VALUES (21, 5, '汽车后市场服务系统', '20200921/e657adb7fbeb82376f6db252e6bf3d5f.png', 0, NULL, 1600654234);
INSERT INTO `aw_solutions` VALUES (23, 5, '保险数据引流平台', '20200921/170e59ff2656d15c6c5277e28774a990.png', 0, NULL, 1600654813);
INSERT INTO `aw_solutions` VALUES (24, 5, '互联网健康应用系统', '20200921/62060fb8216d409b16ae7dfa061452df.png', 0, NULL, 1600654857);
INSERT INTO `aw_solutions` VALUES (25, 5, '智慧校园应用', '20200921/1278e2e97af5f0f66f9373cd47e01b0d.png', 0, NULL, 1600654899);

-- ----------------------------
-- Table structure for aw_user
-- ----------------------------
DROP TABLE IF EXISTS `aw_user`;
CREATE TABLE `aw_user`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` tinyint(2) NOT NULL DEFAULT 0,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone` char(13) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `avatar` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `create_time` int(11) NULL DEFAULT NULL,
  `update_time` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '管理员表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of aw_user
-- ----------------------------
INSERT INTO `aw_user` VALUES (1, 0, 'admin@quanzhong.com', NULL, '719647b5ecefce7eac792e939c7e377b', NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;

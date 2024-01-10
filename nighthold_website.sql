/*
 Navicat Premium Data Transfer

 Source Server         : www
 Source Server Type    : MySQL
 Source Server Version : 50562 (5.5.62-0+deb8u1)
 Source Host           : 185.221.153.103:3306
 Source Schema         : nighthold_website

 Target Server Type    : MySQL
 Target Server Version : 50562 (5.5.62-0+deb8u1)
 File Encoding         : 65001

 Date: 27/12/2022 01:01:08
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for addon_list
-- ----------------------------
DROP TABLE IF EXISTS `addon_list`;
CREATE TABLE `addon_list`  (
  `Id` int(11) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `slug` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of addon_list
-- ----------------------------
INSERT INTO `addon_list` VALUES (1, 'Deadly Boss Mods', 'https://launcher.nighthold.ru/addons/DBM.zip', '2022-07-26 22:30:32', '2022-07-26 22:30:36');
INSERT INTO `addon_list` VALUES (2, 'EventAlert', 'https://launcher.nighthold.ru/addons/EventAlert.zip', '2022-07-26 22:33:26', '2022-07-26 22:30:36');
INSERT INTO `addon_list` VALUES (3, 'HealBot', 'https://launcher.nighthold.ru/addons/HealBot.zip', '2022-07-26 22:36:33', '2022-07-26 22:36:17');
INSERT INTO `addon_list` VALUES (4, 'Barthender4', 'https://launcher.nighthold.ru/addons/Barthender4.zip', '2022-07-26 22:43:37', '2022-07-26 22:43:24');

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `sha_pass_hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, 'Powerpuff', 'MD5', 'Role');

-- ----------------------------
-- Table structure for launcher_downloads
-- ----------------------------
DROP TABLE IF EXISTS `launcher_downloads`;
CREATE TABLE `launcher_downloads`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `magnet_hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `expansion` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of launcher_downloads
-- ----------------------------
INSERT INTO `launcher_downloads` VALUES (1, '6b87ed9e30f5aa23357dbc96cefadffccd7b5184', 'legion');
INSERT INTO `launcher_downloads` VALUES (2, '68b398e9062073e9ee0fa8c3ae133859c8c27f88', 'wotlk');

-- ----------------------------
-- Table structure for launcher_versions
-- ----------------------------
DROP TABLE IF EXISTS `launcher_versions`;
CREATE TABLE `launcher_versions`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `version_hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `version` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of launcher_versions
-- ----------------------------
INSERT INTO `launcher_versions` VALUES (1, 'F37E84CB-B76A-49B1-A1AC-99979903087B', '1.0.0.3');

-- ----------------------------
-- Table structure for main
-- ----------------------------
DROP TABLE IF EXISTS `main`;
CREATE TABLE `main`  (
  `id` int(11) NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `main__title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `main__text` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `discord` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `forum` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of main
-- ----------------------------
INSERT INTO `main` VALUES (1, 'Nighthold', 'Примкните к тысячам могучих героев Азерота в мире магии и бесконечных приключений!', 'SHADOWSONG X100 3.3.5A+', '26.02.2022 в 18:00 по московскому времени состоялось открытие игрового мира Shadowsong x100 3.3.5а+, стабильная работа и интересный контент уже ждут вас!', 'https://discord.com/widget?id=816674438791036948&theme=dark', 'forum.nighthold.ru');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `link` tinytext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `class` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES (1, '../template/nighthold/images/icons/header/01.webp', '../', 'menu__link', 'Главная');
INSERT INTO `menu` VALUES (2, '../template/nighthold/images/icons/header/02.webp', '../cp/register.php', 'menu__link', 'Регистрация');
INSERT INTO `menu` VALUES (3, '../template/nighthold/images/icons/header/03.webp', '../Nighthold%20Lich%20King.torrent', 'menu__link ', 'Скачать игру');
INSERT INTO `menu` VALUES (4, '../template/nighthold/images/icons/header/04.webp', '../ladder', 'menu__link', 'Ладдер');
INSERT INTO `menu` VALUES (5, '../template/nighthold/images/icons/header/05.webp', '../forums', 'menu__link', 'Форум');
INSERT INTO `menu` VALUES (6, '../template/nighthold/images/icons/header/06.webp', '../', 'menu__link', 'Перенос персонажа');

-- ----------------------------
-- Table structure for menu_cp
-- ----------------------------
DROP TABLE IF EXISTS `menu_cp`;
CREATE TABLE `menu_cp`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `icon` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of menu_cp
-- ----------------------------
INSERT INTO `menu_cp` VALUES (1, 'Главная страница', './', 'home');
INSERT INTO `menu_cp` VALUES (2, 'Мои персонажи', 'characters.php', 'users');
INSERT INTO `menu_cp` VALUES (3, 'Голосование', 'vote.php', 'coin');
INSERT INTO `menu_cp` VALUES (4, 'Рейтинг', 'rating.php', 'growth');
INSERT INTO `menu_cp` VALUES (5, 'Пополнить баланс', 'donate.php', 'coins');
INSERT INTO `menu_cp` VALUES (6, 'Поддержка', '../forums', 'help-alt');
INSERT INTO `menu_cp` VALUES (7, 'Настройки', 'profile.php', 'setting');

-- ----------------------------
-- Table structure for menu_cp_top
-- ----------------------------
DROP TABLE IF EXISTS `menu_cp_top`;
CREATE TABLE `menu_cp_top`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of menu_cp_top
-- ----------------------------
INSERT INTO `menu_cp_top` VALUES (1, 'Главная страница', '../');
INSERT INTO `menu_cp_top` VALUES (2, 'Форум', '../forums');
INSERT INTO `menu_cp_top` VALUES (3, 'Пополнить баланс', 'donate.php');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news`  (
  `id` int(11) NULL DEFAULT NULL,
  `date` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `text` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `images` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES (1, '18.04.2022', 'Быстрый старт всем игрокам!', 'https://forum.nighthold.ru/threads/bystryj-start-vsem-novym-igrokam.3/#post-3', '../template/nighthold/images/news/1.jpg');
INSERT INTO `news` VALUES (2, '26.03.2022', 'Уникальный Амулет Бури', '#', '../template/nighthold/images/news/4.jpg');
INSERT INTO `news` VALUES (3, '25.03.2022', 'Этапы открытия контента', 'https://nighthold.ru/promo/timeline.html', '../template/nighthold/images/news/3.jpg');
INSERT INTO `news` VALUES (4, '24.02.2022', 'Старт 6-7 сезона арены!', '#', '../template/nighthold/images/news/2.jpg');

-- ----------------------------
-- Table structure for patch_list
-- ----------------------------
DROP TABLE IF EXISTS `patch_list`;
CREATE TABLE `patch_list`  (
  `Id` int(11) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `slug` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of patch_list
-- ----------------------------
INSERT INTO `patch_list` VALUES (1, 'data/patch-4.MPQ', 'https://launcher.nighthold.pro/game/3/Data/patch-4.MPQ', '2022-05-08 17:35:30', '2022-04-25 23:36:22');
INSERT INTO `patch_list` VALUES (2, 'data/patch-5.MPQ', 'https://launcher.nighthold.pro/game/3/Data/patch-5.MPQ', '2022-05-08 17:35:25', '2022-04-25 23:36:22');
INSERT INTO `patch_list` VALUES (3, 'data/patch-6.MPQ', 'https://launcher.nighthold.pro/game/3/Data/patch-6.MPQ', '2022-05-08 17:35:22', '2022-04-25 23:36:22');
INSERT INTO `patch_list` VALUES (4, 'data/patch-7.MPQ', 'https://launcher.nighthold.pro/game/3/Data/patch-7.mpq', '2022-05-08 17:35:19', '2022-04-25 23:36:22');
INSERT INTO `patch_list` VALUES (5, 'data/patch-8.MPQ', 'https://launcher.nighthold.pro/game/3/Data/patch-8.mpq', '2022-05-08 17:35:15', '2022-04-25 23:36:22');
INSERT INTO `patch_list` VALUES (6, 'data/patch-9.MPQ', 'https://launcher.nighthold.pro/game/3/Data/patch-9.mpq', '2022-05-08 17:34:55', '2022-04-25 23:36:22');
INSERT INTO `patch_list` VALUES (8, 'data/patch-A.MPQ', 'https://launcher.nighthold.pro/game/3/Data/patch-A.mpq', '2022-05-08 17:35:04', '2022-04-25 23:36:22');
INSERT INTO `patch_list` VALUES (9, 'data/ruRU/patch-ruRU-4.MPQ', 'https://launcher.nighthold.pro/game/3/Data/ruRU/patch-ruRU-4.MPQ', '2022-05-08 14:46:11', '2022-04-25 23:36:22');
INSERT INTO `patch_list` VALUES (10, 'data/ruRU/patch-ruRU-5.MPQ', 'https://launcher.nighthold.pro/game/3/Data/ruRU/patch-ruRU-5.MPQ', '2022-05-08 14:46:06', '2022-04-25 23:36:22');
INSERT INTO `patch_list` VALUES (11, 'data/ruRU/patch-ruRU-6.MPQ', 'https://launcher.nighthold.pro/game/3/Data/ruRU/patch-ruRU-6.mpq', '2022-05-08 14:46:03', '2022-04-25 23:36:22');
INSERT INTO `patch_list` VALUES (12, 'data/ruRU/patch-ruRU-7.MPQ', 'https://launcher.nighthold.pro/game/3/Data/ruRU/patch-ruRU-7.mpq', '2022-05-03 13:28:19', '2022-04-25 23:36:22');
INSERT INTO `patch_list` VALUES (13, 'data/ruRU/patch-ruRU-8.MPQ', 'https://launcher.nighthold.pro/game/3/Data/ruRU/patch-ruRU-8.mpq', '2022-05-03 13:28:14', '2022-04-25 23:36:22');
INSERT INTO `patch_list` VALUES (14, 'Nighthold.exe', 'https://launcher.nighthold.pro/game/3/Nighthold.exe', '2022-04-27 19:44:23', '2022-04-25 23:36:22');
INSERT INTO `patch_list` VALUES (15, 'data/ruRU/realmlist.wtf', 'https://launcher.nighthold.pro/realmlist/nighthold335/realmlist.wtf', '2022-04-27 19:44:27', '2022-04-25 23:36:22');

-- ----------------------------
-- Table structure for realms
-- ----------------------------
DROP TABLE IF EXISTS `realms`;
CREATE TABLE `realms`  (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `rate` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `version` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `icon` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `proffesion` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `gold` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `rep` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `loot` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `honor` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `class` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of realms
-- ----------------------------
INSERT INTO `realms` VALUES (3, 'SHADOWSONG', 'x100', 'lich', 'template/nighthold/images/server/icon_01.png', 'Качественное ядро, современные игровые модули, своевременная поддержка и насыщенный контент - ждёт каждого в мире Shadowsong x100!', 'x2', 'x1', 'x1', 'x1', 'x1', 'active');

-- ----------------------------
-- Table structure for social_link
-- ----------------------------
DROP TABLE IF EXISTS `social_link`;
CREATE TABLE `social_link`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `link` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `class` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of social_link
-- ----------------------------
INSERT INTO `social_link` VALUES (1, 'https://discord.gg/BXGv7DFHXH', 'soc__link _icon-discord');
INSERT INTO `social_link` VALUES (2, 'https://www.youtube.com/channel/UCij2qo4DftJuF86KWM_7qtg', 'soc__link _icon-youtube');
INSERT INTO `social_link` VALUES (3, 'https://t.me/nightholdpro', 'soc__link _icon-telegram');
INSERT INTO `social_link` VALUES (4, 'https://vk.com/nightholdwow', 'soc__link _icon-vk');

-- ----------------------------
-- Table structure for stocks
-- ----------------------------
DROP TABLE IF EXISTS `stocks`;
CREATE TABLE `stocks`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `images` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of stocks
-- ----------------------------
INSERT INTO `stocks` VALUES (1, '../template/nighthold/images/la411CXi56XjjkI2rKFvPIaHXrf5SpnFlnXWW8yU.jpg', '<img src=\"../../template/nighthold/images/info/vk.png\" alt=\"\">', 'Все горячие новости в нашей <span>группе</span>', 'https://vk.com/nightholdwow');
INSERT INTO `stocks` VALUES (2, '../template/nighthold/images/BxmiB7D9XCIqIvuLnxreM6SCUXqVTG7Gw05RxeWs.jpg', 'Фарм <span>монет бури</span>', 'Нафарми себе на гир', 'https://forum.nighthold.ru/threads/farm-monet-buri.5/');
INSERT INTO `stocks` VALUES (3, '../template/nighthold/images/zwC2MIFEAASq0oQ9fOmObxoT8ZdAz4cpRx2SgpkF.jpg', 'Словно <span>праздники</span>', 'Постоянные акции и конкурсы', 'https://forum.nighthold.ru/forums/akcii-i-meroprijatija.6/');

-- ----------------------------
-- Table structure for usertop
-- ----------------------------
DROP TABLE IF EXISTS `usertop`;
CREATE TABLE `usertop`  (
  `topid` int(11) NOT NULL DEFAULT 0,
  `user` int(11) NULL DEFAULT NULL,
  `votetime` int(11) NULL DEFAULT NULL,
  `usertop` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`usertop`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of usertop
-- ----------------------------

-- ----------------------------
-- Table structure for vote
-- ----------------------------
DROP TABLE IF EXISTS `vote`;
CREATE TABLE `vote`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `images_company` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `bonus` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `imgcp` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `file_stat` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of vote
-- ----------------------------
INSERT INTO `vote` VALUES (1, '../template/nighthold/images/info/company_01.png', 'MMOTOP', 'https://wow.mmotop.ru/servers/35233/votes/new', '1', '../template/nighthold/images/vote.jpg', 'https://mmotop.ru/votes/0a7b920afad8e10e36e8052e5d5ecb93d043a25c.txt?8383be213e8280f00d5b38a5e05e7fe2');
INSERT INTO `vote` VALUES (2, '../template/nighthold/images/info/mmorpgtop.png', 'MMORPG', 'https://wow.mmorpg.top/server/66', '1', '../template/nighthold/images/vote.jpg', NULL);
INSERT INTO `vote` VALUES (3, '../template/nighthold/images/info/mcvote.png', 'MONITORING', 'https://mc-monitoring.info/wow/server/239', '1', '../template/nighthold/images/vote.jpg', NULL);

SET FOREIGN_KEY_CHECKS = 1;

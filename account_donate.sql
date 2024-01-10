/*
 Navicat Premium Data Transfer

 Source Server         : Moonglade server
 Source Server Type    : MySQL
 Source Server Version : 100519 (10.5.19-MariaDB-0+deb11u2)
 Source Host           : 135.181.142.176:3306
 Source Schema         : auth

 Target Server Type    : MySQL
 Target Server Version : 100519 (10.5.19-MariaDB-0+deb11u2)
 File Encoding         : 65001

 Date: 10/01/2024 11:38:30
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for account_donate
-- ----------------------------
DROP TABLE IF EXISTS `account_donate`;
CREATE TABLE `account_donate`  (
  `id` int UNSIGNED NOT NULL,
  `bonuses` int UNSIGNED NOT NULL DEFAULT 0,
  `votes` int UNSIGNED NOT NULL DEFAULT 0,
  `total_bonuses` int UNSIGNED NOT NULL DEFAULT 0,
  `total_votes` int UNSIGNED NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;

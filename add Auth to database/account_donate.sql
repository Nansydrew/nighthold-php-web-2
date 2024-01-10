
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


SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for password_reset_temp
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_temp`;
CREATE TABLE `password_reset_temp`  (
  `email` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `key` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of password_reset_temp
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;

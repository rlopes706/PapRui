/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 50731
 Source Host           : localhost:3306
 Source Schema         : pap2021rui

 Target Server Type    : MySQL
 Target Server Version : 50731
 File Encoding         : 65001

 Date: 22/07/2021 08:39:38
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for calendario
-- ----------------------------
DROP TABLE IF EXISTS `calendario`;
CREATE TABLE `calendario`  (
  `calendarioId` int(11) NOT NULL AUTO_INCREMENT,
  `calendarioNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `calendarioData` date NOT NULL,
  `calendarioVencedor` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `calendarioSegundo` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `calendarioTerceiro` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `calendarioNacionalidade` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`calendarioId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of calendario
-- ----------------------------

-- ----------------------------
-- Table structure for marcas
-- ----------------------------
DROP TABLE IF EXISTS `marcas`;
CREATE TABLE `marcas`  (
  `marcasId` int(11) NOT NULL AUTO_INCREMENT,
  `marcasNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `marcasCavalagem` int(11) NOT NULL,
  `marcasMotor` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `marcasDiam` int(11) NULL DEFAULT NULL,
  `marcasBinario` int(11) NULL DEFAULT NULL,
  `marcasImgUrl` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`marcasId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of marcas
-- ----------------------------
INSERT INTO `marcas` VALUES (9, 'volkswagen', 380, '6 sequencial', 80, 800, 'img-1.jpg');
INSERT INTO `marcas` VALUES (12, 'Toyota', 410, '6 sequencial', 90, 750, 'work-5.jpg');

-- ----------------------------
-- Table structure for percursos
-- ----------------------------
DROP TABLE IF EXISTS `percursos`;
CREATE TABLE `percursos`  (
  `percursoId` int(11) NOT NULL AUTO_INCREMENT,
  `percursoNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `percursoKm` int(11) NOT NULL,
  `percursoImgUrl` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`percursoId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of percursos
-- ----------------------------
INSERT INTO `percursos` VALUES (13, 'Dakar', 800, 'dakar-route-21.jpg');

SET FOREIGN_KEY_CHECKS = 1;

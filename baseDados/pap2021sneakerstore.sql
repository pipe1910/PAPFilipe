/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 50731
 Source Host           : localhost:3306
 Source Schema         : pap2021sneakerstore

 Target Server Type    : MySQL
 Target Server Version : 50731
 File Encoding         : 65001

 Date: 05/07/2021 15:22:56
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for imagens
-- ----------------------------
DROP TABLE IF EXISTS `imagens`;
CREATE TABLE `imagens`  (
  `imagemId` int(11) NOT NULL AUTO_INCREMENT,
  `imagemNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `imagemURL` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `imagemProdutoId` int(11) NOT NULL,
  `imagemDestaque` enum('sim','nao') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'nao',
  PRIMARY KEY (`imagemId`) USING BTREE,
  INDEX `fk_imagens_produtos1_idx`(`imagemProdutoId`) USING BTREE,
  CONSTRAINT `fk_imagens_produtos1` FOREIGN KEY (`imagemProdutoId`) REFERENCES `produtos` (`produtoId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 32 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of imagens
-- ----------------------------
INSERT INTO `imagens` VALUES (16, 'd', 'images/07b0e3467cee97695ef4d7f3ec44943b.jpg', 16, 'sim');
INSERT INTO `imagens` VALUES (25, 'af1b', 'images/airforceblack2.jpg', 18, 'sim');
INSERT INTO `imagens` VALUES (28, 'sdg', 'images/airforce.jpg', 1, 'nao');
INSERT INTO `imagens` VALUES (29, 'kobe 2', 'images/kobe2.jpg', 2, 'sim');
INSERT INTO `imagens` VALUES (30, 'kobe 1', 'images/kobe1.jpg', 2, 'nao');
INSERT INTO `imagens` VALUES (31, 'af2r', 'images/airforce.jpg', 1, 'sim');

-- ----------------------------
-- Table structure for marcas
-- ----------------------------
DROP TABLE IF EXISTS `marcas`;
CREATE TABLE `marcas`  (
  `marcaId` int(11) NOT NULL AUTO_INCREMENT,
  `marcaNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `marcaLogoURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`marcaId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of marcas
-- ----------------------------
INSERT INTO `marcas` VALUES (1, 'Nike', 'images/nike.jpg');
INSERT INTO `marcas` VALUES (24, 's', 'images/adidas.jpg');

-- ----------------------------
-- Table structure for perfis
-- ----------------------------
DROP TABLE IF EXISTS `perfis`;
CREATE TABLE `perfis`  (
  `perfilId` int(11) NOT NULL AUTO_INCREMENT,
  `perfilNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `perfilAvatarURL` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `perfilTelefone` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `perfilEmail` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `perfilUserId` int(11) NOT NULL,
  PRIMARY KEY (`perfilId`) USING BTREE,
  INDEX `fk_perfis_users1_idx`(`perfilUserId`) USING BTREE,
  CONSTRAINT `fk_perfis_users1` FOREIGN KEY (`perfilUserId`) REFERENCES `users` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of perfis
-- ----------------------------

-- ----------------------------
-- Table structure for produtos
-- ----------------------------
DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos`  (
  `produtoId` int(11) NOT NULL AUTO_INCREMENT,
  `produtoNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `produtoDescricao` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `produtoPreco` decimal(10, 2) NOT NULL,
  `produtoMarcaId` int(11) NOT NULL,
  PRIMARY KEY (`produtoId`) USING BTREE,
  INDEX `fk_produtos_marcas_idx`(`produtoMarcaId`) USING BTREE,
  CONSTRAINT `fk_produtos_marcas` FOREIGN KEY (`produtoMarcaId`) REFERENCES `marcas` (`marcaId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of produtos
-- ----------------------------
INSERT INTO `produtos` VALUES (1, 'Nike Air Force 1 ', 'Sapatilhas casuais', 1190.50, 1);
INSERT INTO `produtos` VALUES (2, 'Nike kobe', 'Sapatilhas de basket', 103.00, 1);
INSERT INTO `produtos` VALUES (16, 'sf', '    sf', 0.00, 24);
INSERT INTO `produtos` VALUES (18, 'nike af 1 black', '    air force 1 black and white', 12434.00, 1);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `userPassword` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `userState` enum('ativo','pendente') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `userType` enum('adm','member','client') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`userId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'pipe', '1234', 'ativo', 'adm');
INSERT INTO `users` VALUES (2, 'li9ndo', '1234', 'ativo', 'adm');
INSERT INTO `users` VALUES (3, 'admin', 'admin', 'ativo', 'adm');
INSERT INTO `users` VALUES (4, '', '', 'ativo', 'adm');
INSERT INTO `users` VALUES (5, 'epa ya', '1234', 'ativo', 'adm');
INSERT INTO `users` VALUES (6, 'pipe', '12345', 'ativo', 'adm');

SET FOREIGN_KEY_CHECKS = 1;

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

 Date: 21/07/2021 19:07:41
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for criticas
-- ----------------------------
DROP TABLE IF EXISTS `criticas`;
CREATE TABLE `criticas`  (
  `criticaId` int(11) NOT NULL AUTO_INCREMENT,
  `criticaTexto` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `criticaPerfilId` int(11) NOT NULL,
  PRIMARY KEY (`criticaId`) USING BTREE,
  INDEX `fkperfil_idx`(`criticaPerfilId`) USING BTREE,
  CONSTRAINT `fkperfil` FOREIGN KEY (`criticaPerfilId`) REFERENCES `perfis` (`perfilId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of criticas
-- ----------------------------
INSERT INTO `criticas` VALUES (15, 'ServiÃ§o muito bom, recomendo a toda a gente!', 1);
INSERT INTO `criticas` VALUES (16, 'ServiÃ§o espetacular, encontrei mesmo o que queria!', 4);

-- ----------------------------
-- Table structure for detalhes
-- ----------------------------
DROP TABLE IF EXISTS `detalhes`;
CREATE TABLE `detalhes`  (
  `detalheEncomendaId` int(11) NOT NULL,
  `detalheProdutoId` int(11) NOT NULL,
  `detalheQuantidade` int(11) NOT NULL,
  `detalhePreco` decimal(10, 2) NOT NULL,
  PRIMARY KEY (`detalheEncomendaId`, `detalheProdutoId`) USING BTREE,
  INDEX `fk_encomendas_has_produtos_produtos1_idx`(`detalheProdutoId`) USING BTREE,
  INDEX `fk_encomendas_has_produtos_encomendas1_idx`(`detalheEncomendaId`) USING BTREE,
  CONSTRAINT `fk_encomendas_has_produtos_encomendas1` FOREIGN KEY (`detalheEncomendaId`) REFERENCES `encomendas` (`encomendaId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_encomendas_has_produtos_produtos1` FOREIGN KEY (`detalheProdutoId`) REFERENCES `produtos` (`produtoId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of detalhes
-- ----------------------------

-- ----------------------------
-- Table structure for encomendas
-- ----------------------------
DROP TABLE IF EXISTS `encomendas`;
CREATE TABLE `encomendas`  (
  `encomendaId` int(11) NOT NULL AUTO_INCREMENT,
  `encomendaData` date NOT NULL,
  `encomendaPerfilId` int(11) NOT NULL,
  `encomendaEstado` enum('pendente','expedida','entregue') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'pendente',
  PRIMARY KEY (`encomendaId`) USING BTREE,
  INDEX `fk_encomendas_perfis1_idx`(`encomendaPerfilId`) USING BTREE,
  CONSTRAINT `fk_encomendas_perfis1` FOREIGN KEY (`encomendaPerfilId`) REFERENCES `perfis` (`perfilId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of encomendas
-- ----------------------------

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
) ENGINE = InnoDB AUTO_INCREMENT = 60 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of imagens
-- ----------------------------
INSERT INTO `imagens` VALUES (10, 'yeezy1', 'images/yzy.jpg', 4, 'nao');
INSERT INTO `imagens` VALUES (11, 'yeezy2', 'images/yzy2.jpg', 4, 'sim');
INSERT INTO `imagens` VALUES (12, 'yeezy3', 'images/yzy3.jpg', 4, 'nao');
INSERT INTO `imagens` VALUES (19, 'airforce2', 'images/airforce.jpg', 8, 'sim');
INSERT INTO `imagens` VALUES (21, 'airforce2', 'images/airforce2.jpg', 8, 'nao');
INSERT INTO `imagens` VALUES (22, 'airforce3', 'images/airforce3.jpg', 8, 'nao');
INSERT INTO `imagens` VALUES (23, 'airforce4', 'images/airforce4.jpg', 8, 'nao');
INSERT INTO `imagens` VALUES (24, 'asics1', 'images/asics1.jpg', 9, 'sim');
INSERT INTO `imagens` VALUES (25, 'asics2', 'images/asics2.jpg', 9, 'nao');
INSERT INTO `imagens` VALUES (26, 'asics3', 'images/asics3.jpg', 9, 'nao');
INSERT INTO `imagens` VALUES (27, 'asics4', 'images/asics4.jpg', 9, 'nao');
INSERT INTO `imagens` VALUES (29, 'yeezy4', 'images/yzy4.jpg', 4, 'nao');
INSERT INTO `imagens` VALUES (30, 'airforceblack1', 'images/airforceblack.jpg', 10, 'nao');
INSERT INTO `imagens` VALUES (31, 'airforceblack2', 'images/airforceblack2.jpg', 10, 'sim');
INSERT INTO `imagens` VALUES (32, 'airforceblack3', 'images/airforceblack3.jpg', 10, 'nao');
INSERT INTO `imagens` VALUES (33, 'airforceblack4', 'images/airforceblack4.jpg', 10, 'nao');
INSERT INTO `imagens` VALUES (39, 'airmax97.1', 'images/airmax97.3.jpg', 11, 'sim');
INSERT INTO `imagens` VALUES (40, 'airmax97.2', 'images/airmax97.jpg', 11, 'nao');
INSERT INTO `imagens` VALUES (42, 'airmax97.3', 'images/ÃƒÂ£irmax97.2.jpg', 11, 'nao');
INSERT INTO `imagens` VALUES (43, 'airmax97.4', 'images/airmax97.4.jpg', 11, 'nao');
INSERT INTO `imagens` VALUES (44, 'airpresto1', 'images/airpresto.jpg', 12, 'nao');
INSERT INTO `imagens` VALUES (45, 'airpresto2', 'images/airpresto2.jpg', 12, 'nao');
INSERT INTO `imagens` VALUES (46, 'airpresto3', 'images/airpresto3.jpg', 12, 'sim');
INSERT INTO `imagens` VALUES (47, 'airpresto4', 'images/airpresto4.jpg', 12, 'nao');
INSERT INTO `imagens` VALUES (48, 'obsidian', 'images/obsidian.jpg', 13, 'nao');
INSERT INTO `imagens` VALUES (49, 'obsidian2', 'images/obsidian2.jpg', 13, 'sim');
INSERT INTO `imagens` VALUES (50, 'obsidian3', 'images/obsidian3.jpg', 13, 'nao');
INSERT INTO `imagens` VALUES (51, 'obsidian4', 'images/obsidian4.jpg', 13, 'nao');
INSERT INTO `imagens` VALUES (56, 'kobe', 'images/kobe.jpg', 14, 'sim');
INSERT INTO `imagens` VALUES (57, 'kobe2', 'images/kobe2.jpg', 14, 'nao');
INSERT INTO `imagens` VALUES (58, 'kobe3', 'images/kobe3.jpg', 14, 'nao');
INSERT INTO `imagens` VALUES (59, 'kobe4', 'images/kobe4.jpg', 14, 'nao');

-- ----------------------------
-- Table structure for marcas
-- ----------------------------
DROP TABLE IF EXISTS `marcas`;
CREATE TABLE `marcas`  (
  `marcaId` int(11) NOT NULL AUTO_INCREMENT,
  `marcaNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `marcaLogoURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`marcaId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of marcas
-- ----------------------------
INSERT INTO `marcas` VALUES (1, 'Nike', 'images/nike.jpg');
INSERT INTO `marcas` VALUES (2, 'Adidas', 'images/adidas.jpg');
INSERT INTO `marcas` VALUES (3, 'Asics', 'images/nb.jpg');
INSERT INTO `marcas` VALUES (5, 'Vans', 'images/vans.jpg');

-- ----------------------------
-- Table structure for perfis
-- ----------------------------
DROP TABLE IF EXISTS `perfis`;
CREATE TABLE `perfis`  (
  `perfilId` int(11) NOT NULL,
  `perfilNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `perfilAvatarURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'noImage.jpg',
  `perfilMorada` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `perfilEmail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `perfilTelefone` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`perfilId`) USING BTREE,
  INDEX `fk_perfis_users1_idx`(`perfilId`) USING BTREE,
  CONSTRAINT `fk_perfis_users1` FOREIGN KEY (`perfilId`) REFERENCES `users` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of perfis
-- ----------------------------
INSERT INTO `perfis` VALUES (1, 'Filipe', 'noImage.jpg', 'rua topzao', 'nam@rip.com', '12345678');
INSERT INTO `perfis` VALUES (2, 'Filipe', 'noImage.jpg', 'rua ganda fixe', 'pipevital@gmail.com', '910234322');
INSERT INTO `perfis` VALUES (3, 'Pipe', 'noImage.jpg', 'rua da tua prima', 'epaya@gmail.com', '123456789');
INSERT INTO `perfis` VALUES (4, 'Luis H', 'noImage.jpg', 'rua da vieira', 'luis@gmail.com', '9102345678');
INSERT INTO `perfis` VALUES (5, 'Filipe', 'noImage.jpg', 'rua da vieira', 'filipe@gmail.com', '912345678');

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
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of produtos
-- ----------------------------
INSERT INTO `produtos` VALUES (4, 'Yeezy Boost 350 V2 \"Zebra\"', '<p>Adidas Yeezy Boost 450 V2 \"Zebra\"</p>', 321.00, 2);
INSERT INTO `produtos` VALUES (8, 'Nike Air Force 1 07 Premium ', '<p>As Nike Air Force 1 &rsquo;07 s&atilde;o o modelo original de basquetebol que garante uma abordagem renovada daquilo que melhor conheces: pele trabalhada, cores arrojadas e a quantidade perfeita de destaque para que possas brilhar.</p>', 130.00, 1);
INSERT INTO `produtos` VALUES (9, 'Asics Gel Lyte 4', '    Asics Gel Lyte', 127.00, 3);
INSERT INTO `produtos` VALUES (10, 'Nike Air Force 1 Black and White', '<p>Descontrai com conforto com as Nike Air Force 1. A sensa&ccedil;&atilde;o de pele cl&aacute;ssica e os detalhes que tornaram estas sapatilhas emblem&aacute;ticas destacam o estilo das tuas sapatilhas na rua.</p>', 110.00, 1);
INSERT INTO `produtos` VALUES (11, 'Nike Air Max 97 ', '<p>As Nike Air Max 97 reinventam umas sapatilhas de running emblem&aacute;ticas do dia a dia para crian&ccedil;a. Com linhas cl&aacute;ssicas inspiradas na ondula&ccedil;&atilde;o da &aacute;gua, amortecimento Max Air e um design resistente, trazem um modelo favorito dos anos 90 a uma nova gera&ccedil;&atilde;o.</p>', 179.00, 1);
INSERT INTO `produtos` VALUES (12, 'Nike Air Presto ', '<p>Com um design elegante mais confort&aacute;vel do que a tua t-shirt favorita, as Nike Air Presto foram concebidas para garantir uma sensa&ccedil;&atilde;o agrad&aacute;vel e um look veloz. O revestimento el&aacute;stico cria um ajuste confort&aacute;vel tipo meia, enquanto a espuma extremamente macia garante impulso &agrave; tua passada. Depois de as cal&ccedil;ares, nunca mais as vais querer tirar.</p>', 109.00, 1);
INSERT INTO `produtos` VALUES (13, 'Nike Air Jordan 1 ', '<p>A silhueta na origem de tudo mudou o paradigma do cal&ccedil;ado aquando do seu lan&ccedil;amento em 1985. Em honra dos prim&oacute;rdios do MJ na Carolina do Norte e para celebrar o NBA All-Star Game em Charlotte, a parte superior conta com pele patenteada e a paleta de cores \"Azul Chill\" representa um toque diferente na t&iacute;pica cor azulada da Carolina do Norte.</p>', 250.00, 1);
INSERT INTO `produtos` VALUES (14, 'Nike Kobe 1 X Undefeated', '<p>Um ano ap&oacute;s falhar os playoffs pela primeira vez em dez anos, o peso da marca Lakers estava nos ombros de Kobe. No Jogo 4 dos playoffs de 2006 contra os Suns, Kobe levou o jogo para prolongamento com um cesto nos &uacute;ltimos segundos, mas depois os Lakers deram por si a perder por 1 ponto com apenas 6,1 segundos restantes. Avan&ccedil;ando pela direita e saltando por cima de dois defesas, Kobe encestou para a vit&oacute;ria mesmo no fim do tempo. Enquanto o seu desempenho simbolizou que era a maior estrela na cidade da estrelas, Kobe passou a dominar o jogo e o seu legado de desempenhos inesquec&iacute;veis fez dele o rosto dos Lakers.</p>', 400.00, 1);

-- ----------------------------
-- Table structure for slideshow
-- ----------------------------
DROP TABLE IF EXISTS `slideshow`;
CREATE TABLE `slideshow`  (
  `slideshowId` int(11) NOT NULL AUTO_INCREMENT,
  `slideshowURL` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`slideshowId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of slideshow
-- ----------------------------
INSERT INTO `slideshow` VALUES (1, 'images/curry.jpg');
INSERT INTO `slideshow` VALUES (2, 'images/oreo.jpg');
INSERT INTO `slideshow` VALUES (3, 'images/sean971.png');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userLogin` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `userPassword` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `userState` enum('ativo','inativo') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'ativo',
  `userType` enum('adm','cliente') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`userId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Filipe', '81dc9bdb52d04dc20036dbd8313ed055', 'ativo', 'adm');
INSERT INTO `users` VALUES (2, 'Filipe', 'e53a0a2978c28872a4505bdb51db06dc', 'ativo', 'adm');
INSERT INTO `users` VALUES (3, 'Pipe', '81dc9bdb52d04dc20036dbd8313ed055', 'ativo', 'adm');
INSERT INTO `users` VALUES (4, 'Luis', '827ccb0eea8a706c4c34a16891f84e7b', 'ativo', 'adm');
INSERT INTO `users` VALUES (5, 'pipe', '81dc9bdb52d04dc20036dbd8313ed055', 'ativo', 'adm');

SET FOREIGN_KEY_CHECKS = 1;

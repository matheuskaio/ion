-- MySQL dump 10.13  Distrib 8.0.29, for Linux (x86_64)
--
-- Host: localhost    Database: ion
-- ------------------------------------------------------
-- Server version	8.0.32-0ubuntu0.22.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `wp_postmeta`
--

DROP TABLE IF EXISTS `wp_postmeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wp_postmeta` (
  `meta_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`meta_id`),
  KEY `post_id` (`post_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_postmeta`
--

LOCK TABLES `wp_postmeta` WRITE;
/*!40000 ALTER TABLE `wp_postmeta` DISABLE KEYS */;
INSERT INTO `wp_postmeta` VALUES (1,2,'_wp_page_template','default'),(2,3,'_wp_page_template','default'),(3,2,'_wp_trash_meta_status','publish'),(4,2,'_wp_trash_meta_time','1675534705'),(5,2,'_wp_desired_post_slug','pagina-exemplo'),(6,3,'_wp_trash_meta_status','draft'),(7,3,'_wp_trash_meta_time','1675534705'),(8,3,'_wp_desired_post_slug','politica-de-privacidade'),(9,8,'_edit_lock','1675541395:1'),(10,8,'_wp_page_template','page-home.php'),(11,10,'_wp_attached_file','2023/02/imagemRelato.png'),(12,10,'_wp_attachment_metadata','a:6:{s:5:\"width\";i:200;s:6:\"height\";i:200;s:4:\"file\";s:24:\"2023/02/imagemRelato.png\";s:8:\"filesize\";i:68162;s:5:\"sizes\";a:1:{s:9:\"thumbnail\";a:5:{s:4:\"file\";s:24:\"imagemRelato-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:36635;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),(13,8,'_edit_last','1'),(14,8,'home_section_relatos','a:4:{i:0;a:5:{s:30:\"home_section_relatos_imagem_id\";i:10;s:27:\"home_section_relatos_imagem\";s:79:\"http://localhost/SITES/ION_PROCESSO/wp-content/uploads/2023/02/imagemRelato.png\";s:25:\"home_section_relatos_nome\";s:13:\"Berry Gunawan\";s:31:\"home_section_relatos_link_corpo\";s:108:\"Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi, adipiscing mauris non.\";s:35:\"home_section_relatos_link_avaliacao\";s:3:\"3.5\";}i:1;a:5:{s:30:\"home_section_relatos_imagem_id\";i:11;s:27:\"home_section_relatos_imagem\";s:82:\"http://localhost/SITES/ION_PROCESSO/wp-content/uploads/2023/02/imagem-trabalhe.png\";s:25:\"home_section_relatos_nome\";s:13:\"Fulano de Tal\";s:31:\"home_section_relatos_link_corpo\";s:109:\"It is a long established fact that a reader will be distracted by the readable content of a page when looking\";s:35:\"home_section_relatos_link_avaliacao\";s:1:\"4\";}i:2;a:5:{s:30:\"home_section_relatos_imagem_id\";i:10;s:27:\"home_section_relatos_imagem\";s:79:\"http://localhost/SITES/ION_PROCESSO/wp-content/uploads/2023/02/imagemRelato.png\";s:25:\"home_section_relatos_nome\";s:8:\"Beltrano\";s:31:\"home_section_relatos_link_corpo\";s:109:\"It is a long established fact that a reader will be distracted by the readable content of a page when looking\";s:35:\"home_section_relatos_link_avaliacao\";s:1:\"2\";}i:3;a:5:{s:30:\"home_section_relatos_imagem_id\";i:11;s:27:\"home_section_relatos_imagem\";s:82:\"http://localhost/SITES/ION_PROCESSO/wp-content/uploads/2023/02/imagem-trabalhe.png\";s:25:\"home_section_relatos_nome\";s:8:\"Antônio\";s:31:\"home_section_relatos_link_corpo\";s:109:\"It is a long established fact that a reader will be distracted by the readable content of a page when looking\";s:35:\"home_section_relatos_link_avaliacao\";s:1:\"5\";}}'),(15,11,'_wp_attached_file','2023/02/imagem-trabalhe.png'),(16,11,'_wp_attachment_metadata','a:6:{s:5:\"width\";i:473;s:6:\"height\";i:473;s:4:\"file\";s:27:\"2023/02/imagem-trabalhe.png\";s:8:\"filesize\";i:48939;s:5:\"sizes\";a:2:{s:6:\"medium\";a:5:{s:4:\"file\";s:27:\"imagem-trabalhe-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:60633;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:27:\"imagem-trabalhe-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:17581;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),(17,12,'_wp_attached_file','2023/02/blog-7.png'),(18,12,'_wp_attachment_metadata','a:6:{s:5:\"width\";i:370;s:6:\"height\";i:256;s:4:\"file\";s:18:\"2023/02/blog-7.png\";s:8:\"filesize\";i:31811;s:5:\"sizes\";a:2:{s:6:\"medium\";a:5:{s:4:\"file\";s:18:\"blog-7-300x208.png\";s:5:\"width\";i:300;s:6:\"height\";i:208;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:37727;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:18:\"blog-7-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:20663;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),(19,13,'_wp_attached_file','2023/02/blog-6.png'),(20,13,'_wp_attachment_metadata','a:6:{s:5:\"width\";i:370;s:6:\"height\";i:256;s:4:\"file\";s:18:\"2023/02/blog-6.png\";s:8:\"filesize\";i:56821;s:5:\"sizes\";a:2:{s:6:\"medium\";a:5:{s:4:\"file\";s:18:\"blog-6-300x208.png\";s:5:\"width\";i:300;s:6:\"height\";i:208;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:53370;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:18:\"blog-6-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:26467;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),(21,14,'_wp_attached_file','2023/02/blog-5.png'),(22,14,'_wp_attachment_metadata','a:6:{s:5:\"width\";i:370;s:6:\"height\";i:256;s:4:\"file\";s:18:\"2023/02/blog-5.png\";s:8:\"filesize\";i:49056;s:5:\"sizes\";a:2:{s:6:\"medium\";a:5:{s:4:\"file\";s:18:\"blog-5-300x208.png\";s:5:\"width\";i:300;s:6:\"height\";i:208;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:52088;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:18:\"blog-5-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:26283;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),(23,15,'_wp_attached_file','2023/02/blog-4.png'),(24,15,'_wp_attachment_metadata','a:6:{s:5:\"width\";i:370;s:6:\"height\";i:256;s:4:\"file\";s:18:\"2023/02/blog-4.png\";s:8:\"filesize\";i:75677;s:5:\"sizes\";a:2:{s:6:\"medium\";a:5:{s:4:\"file\";s:18:\"blog-4-300x208.png\";s:5:\"width\";i:300;s:6:\"height\";i:208;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:66666;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:18:\"blog-4-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:33681;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),(25,16,'_wp_attached_file','2023/02/blog-3.png'),(26,16,'_wp_attachment_metadata','a:6:{s:5:\"width\";i:370;s:6:\"height\";i:256;s:4:\"file\";s:18:\"2023/02/blog-3.png\";s:8:\"filesize\";i:97048;s:5:\"sizes\";a:2:{s:6:\"medium\";a:5:{s:4:\"file\";s:18:\"blog-3-300x208.png\";s:5:\"width\";i:300;s:6:\"height\";i:208;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:76882;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:18:\"blog-3-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:35997;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),(27,17,'_wp_attached_file','2023/02/blog-2.png'),(28,17,'_wp_attachment_metadata','a:6:{s:5:\"width\";i:370;s:6:\"height\";i:256;s:4:\"file\";s:18:\"2023/02/blog-2.png\";s:8:\"filesize\";i:81459;s:5:\"sizes\";a:2:{s:6:\"medium\";a:5:{s:4:\"file\";s:18:\"blog-2-300x208.png\";s:5:\"width\";i:300;s:6:\"height\";i:208;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:68445;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:18:\"blog-2-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:31746;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),(29,18,'_wp_attached_file','2023/02/blog-1.png'),(30,18,'_wp_attachment_metadata','a:6:{s:5:\"width\";i:370;s:6:\"height\";i:256;s:4:\"file\";s:18:\"2023/02/blog-1.png\";s:8:\"filesize\";i:50413;s:5:\"sizes\";a:2:{s:6:\"medium\";a:5:{s:4:\"file\";s:18:\"blog-1-300x208.png\";s:5:\"width\";i:300;s:6:\"height\";i:208;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:51700;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:18:\"blog-1-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:23807;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),(31,19,'_wp_attached_file','2023/02/blog.png'),(32,19,'_wp_attachment_metadata','a:6:{s:5:\"width\";i:370;s:6:\"height\";i:256;s:4:\"file\";s:16:\"2023/02/blog.png\";s:8:\"filesize\";i:66817;s:5:\"sizes\";a:2:{s:6:\"medium\";a:5:{s:4:\"file\";s:16:\"blog-300x208.png\";s:5:\"width\";i:300;s:6:\"height\";i:208;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:56990;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:16:\"blog-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:26046;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),(33,8,'home_inicio_diferencial_section','a:8:{i:0;a:5:{s:41:\"home_inicio_diferencial_section_imagem_id\";i:19;s:38:\"home_inicio_diferencial_section_imagem\";s:71:\"http://localhost/SITES/ION_PROCESSO/wp-content/uploads/2023/02/blog.png\";s:38:\"home_inicio_diferencial_section_titulo\";s:32:\"Metaboloma individualizado (n=1)\";s:38:\"home_inicio_diferencial_section_resumo\";s:82:\"More off this less hello samlande lied much over tightly circa horse taped mightly\";s:36:\"home_inicio_diferencial_section_link\";s:1:\"#\";}i:1;a:5:{s:41:\"home_inicio_diferencial_section_imagem_id\";i:18;s:38:\"home_inicio_diferencial_section_imagem\";s:73:\"http://localhost/SITES/ION_PROCESSO/wp-content/uploads/2023/02/blog-1.png\";s:38:\"home_inicio_diferencial_section_titulo\";s:45:\"Aquisição de dados (espectrometria demassa)\";s:38:\"home_inicio_diferencial_section_resumo\";s:82:\"More off this less hello samlande lied much over tightly circa horse taped mightly\";s:36:\"home_inicio_diferencial_section_link\";s:1:\"#\";}i:2;a:5:{s:41:\"home_inicio_diferencial_section_imagem_id\";i:17;s:38:\"home_inicio_diferencial_section_imagem\";s:73:\"http://localhost/SITES/ION_PROCESSO/wp-content/uploads/2023/02/blog-2.png\";s:38:\"home_inicio_diferencial_section_titulo\";s:33:\"Análise de dados (em tempo real)\";s:38:\"home_inicio_diferencial_section_resumo\";s:82:\"More off this less hello samlande lied much over tightly circa horse taped mightly\";s:36:\"home_inicio_diferencial_section_link\";s:0:\"\";}i:3;a:5:{s:41:\"home_inicio_diferencial_section_imagem_id\";i:16;s:38:\"home_inicio_diferencial_section_imagem\";s:73:\"http://localhost/SITES/ION_PROCESSO/wp-content/uploads/2023/02/blog-3.png\";s:38:\"home_inicio_diferencial_section_titulo\";s:21:\"Análise estatística\";s:38:\"home_inicio_diferencial_section_resumo\";s:82:\"More off this less hello samlande lied much over tightly circa horse taped mightly\";s:36:\"home_inicio_diferencial_section_link\";s:1:\"#\";}i:4;a:5:{s:41:\"home_inicio_diferencial_section_imagem_id\";i:15;s:38:\"home_inicio_diferencial_section_imagem\";s:73:\"http://localhost/SITES/ION_PROCESSO/wp-content/uploads/2023/02/blog-4.png\";s:38:\"home_inicio_diferencial_section_titulo\";s:53:\"Resultados esperados: Longevidade e qualidade de vida\";s:38:\"home_inicio_diferencial_section_resumo\";s:82:\"More off this less hello samlande lied much over tightly circa horse taped mightly\";s:36:\"home_inicio_diferencial_section_link\";s:0:\"\";}i:5;a:5:{s:41:\"home_inicio_diferencial_section_imagem_id\";i:14;s:38:\"home_inicio_diferencial_section_imagem\";s:73:\"http://localhost/SITES/ION_PROCESSO/wp-content/uploads/2023/02/blog-5.png\";s:38:\"home_inicio_diferencial_section_titulo\";s:61:\"Mapeamento do metabolismo. (Alimentação ou suplementação)\";s:38:\"home_inicio_diferencial_section_resumo\";s:82:\"More off this less hello samlande lied much over tightly circa horse taped mightly\";s:36:\"home_inicio_diferencial_section_link\";s:1:\"#\";}i:6;a:5:{s:41:\"home_inicio_diferencial_section_imagem_id\";i:13;s:38:\"home_inicio_diferencial_section_imagem\";s:73:\"http://localhost/SITES/ION_PROCESSO/wp-content/uploads/2023/02/blog-6.png\";s:38:\"home_inicio_diferencial_section_titulo\";s:63:\"Interpretação de resultados (Anamnese clínica + metabólica)\";s:38:\"home_inicio_diferencial_section_resumo\";s:82:\"More off this less hello samlande lied much over tightly circa horse taped mightly\";s:36:\"home_inicio_diferencial_section_link\";s:1:\"#\";}i:7;a:4:{s:41:\"home_inicio_diferencial_section_imagem_id\";i:12;s:38:\"home_inicio_diferencial_section_imagem\";s:73:\"http://localhost/SITES/ION_PROCESSO/wp-content/uploads/2023/02/blog-7.png\";s:38:\"home_inicio_diferencial_section_titulo\";s:49:\"Armazenamento dos resultados de acordo com a LGPD\";s:38:\"home_inicio_diferencial_section_resumo\";s:82:\"More off this less hello samlande lied much over tightly circa horse taped mightly\";}}');
/*!40000 ALTER TABLE `wp_postmeta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-02-04 17:11:11

# Sequel Pro dump
# Version 2210
# http://code.google.com/p/sequel-pro
#
# Host: 127.0.0.1 (MySQL 5.1.37)
# Database: hacker_blog
# Generation Time: 2010-05-18 18:38:53 -0700
# ************************************************************

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table blog_entries
# ------------------------------------------------------------

DROP TABLE IF EXISTS `blog_entries`;

CREATE TABLE `blog_entries` (
  `blog_id` bigint(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `blog_title` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `blog_created_at` datetime DEFAULT NULL,
  `blog_updated_at` datetime DEFAULT NULL,
  `blog_body` text COLLATE utf8_bin,
  PRIMARY KEY (`blog_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

LOCK TABLES `blog_entries` WRITE;
/*!40000 ALTER TABLE `blog_entries` DISABLE KEYS */;
INSERT INTO `blog_entries` (`blog_id`,`user_id`,`blog_title`,`blog_created_at`,`blog_updated_at`,`blog_body`)
VALUES
	(1,1,'Why do people blog?','2010-05-18 15:00:07','2010-05-18 15:00:07',X'3C68333E57687920646F2070656F706C65207468696E6B2074686579206E65656420746F20626C6F673F3C2F68333E0A3C703E50656F706C652061726520616C776179732061736B696E67206D65207768792074686579207468696E6B2070656F706C6520626C6F672E20492068617665206E6F20676F6F6420616E7377657220666F72207468656D2C20616C6C20492063616E207361792069732C202248756D6D6D2E2054686174206973206120676F6F6420706F696E7421223C2F703E');

/*!40000 ALTER TABLE `blog_entries` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table navigation
# ------------------------------------------------------------

DROP TABLE IF EXISTS `navigation`;

CREATE TABLE `navigation` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nav_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `route` tinytext COLLATE utf8_bin,
  `parent` int(11) DEFAULT NULL,
  `private` binary(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

LOCK TABLES `navigation` WRITE;
/*!40000 ALTER TABLE `navigation` DISABLE KEYS */;
INSERT INTO `navigation` (`id`,`nav_name`,`route`,`parent`,`private`)
VALUES
	(1,'Home',X'2F',NULL,X'30'),
	(2,'Recent',X'2F626C6F672F726563656E74',NULL,X'30'),
	(3,'About',X'2F626C6F672F61626F7574',NULL,X'30');

/*!40000 ALTER TABLE `navigation` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_first_name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `user_last_name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` tinytext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`,`user_first_name`,`user_last_name`,`username`,`password`)
VALUES
	(1,'Scott','Haines','hackerdojo',X'64303333653232616533343861656235363630666332313430616563333538353063346461393937');

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_privileges
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_privileges`;

CREATE TABLE `user_privileges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `privilege_type` enum('basic','paid','write','god') DEFAULT 'basic',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

LOCK TABLES `user_privileges` WRITE;
/*!40000 ALTER TABLE `user_privileges` DISABLE KEYS */;
INSERT INTO `user_privileges` (`id`,`user_id`,`privilege_type`)
VALUES
	(1,1,'god');

/*!40000 ALTER TABLE `user_privileges` ENABLE KEYS */;
UNLOCK TABLES;





/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

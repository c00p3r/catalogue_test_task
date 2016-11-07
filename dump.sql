-- MySQL dump 10.13  Distrib 5.7.16, for Linux (x86_64)
--
-- Host: localhost    Database: qatestlab_test
-- ------------------------------------------------------
-- Server version	5.7.12-0ubuntu1.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `adverts`
--

DROP TABLE IF EXISTS `adverts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adverts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `manufacturer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `engine` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mileage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `owners` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'uploads/no_image.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `adverts_user_id_foreign` (`user_id`),
  CONSTRAINT `adverts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adverts`
--

LOCK TABLES `adverts` WRITE;
/*!40000 ALTER TABLE `adverts` DISABLE KEYS */;
INSERT INTO `adverts` VALUES (1,4,'Quia et asperiores qui dolorem molestias.','Oklahoma','Starkport','Leuschke Ltd','damore','3.5','86854','2','uploads/u_4/adv_1/8678b49f3c1e8e260916a45eb9cfc2ed.jpg','2016-10-20 03:07:02','2016-10-20 03:07:02'),(2,4,'Dolorem repudiandae omnis nesciunt dolorem quia unde.','Pennsylvania','Columbusberg','Becker-Lesch','erdman','3.5','417331','2','uploads/u_4/adv_2/705b98604a6eaf53f240dd9dd430a643.jpg','2016-10-10 12:07:22','2016-10-10 12:07:22'),(3,5,'Est doloremque eum quaerat laudantium sit accusantium.','Michigan','Wisokymouth','Macejkovic, King and Kuhic','hermann','4','280700','3','uploads/u_5/adv_3/81dcb6c5e5309012e11194b9f85dffda.jpg','2016-10-09 04:25:05','2016-10-09 04:25:05'),(4,3,'Incidunt aperiam a voluptatibus.','Kansas','Deckowborough','Rempel and Sons','hammes','1.5','451015','5','uploads/u_3/adv_4/488d7d4154fc19ef4faaa1a6ec378b14.jpg','2016-11-02 10:01:29','2016-11-02 10:01:29'),(5,1,'Ipsum modi aut et veniam pariatur et.','Delaware','New Javon','Yost, Langosh and Spencer','moen','1.5','358223','1','uploads/u_1/adv_5/4a900d9650852a234de5696a48c1e869.jpg','2016-10-29 10:14:58','2016-10-29 10:14:58'),(6,2,'Necessitatibus et in sed.','New Hampshire','South Carson','Braun, Friesen and Davis','crooks','2','51395','2','uploads/u_2/adv_6/647c9c2fcc26b85130d42d2627f275fa.jpg','2016-10-20 01:21:41','2016-10-20 01:21:41'),(7,2,'Voluptates repudiandae id necessitatibus quae qui aliquid.','Wyoming','New Abbey','Frami, Ziemann and Pacocha','mitchell','3.5','555473','3','uploads/u_2/adv_7/bac8a06d2f00e5abb7f84e1ac12ffb54.jpg','2016-10-26 23:08:58','2016-10-26 23:08:58'),(8,2,'Eligendi voluptas dignissimos ea.','Vermont','South Kody','Hermann, Reichel and Thiel','cummings','2.5','127936','1','uploads/u_2/adv_8/243568e6b87a3b06ff93744f4bfd53d4.jpg','2016-10-28 12:14:40','2016-10-28 12:14:40'),(9,5,'Delectus praesentium error consectetur vero numquam blanditiis.','Colorado','West Ethel','Klein-Gislason','wiza','3.5','958263','4','uploads/u_5/adv_9/ca806ab2ed40d8fa6d1ba4cd2fb80e7c.jpg','2016-10-15 11:39:20','2016-10-15 11:39:20'),(10,2,'Quasi repellendus explicabo tempora vero ab.','Oklahoma','South Caryberg','Murazik and Sons','pollich','3','738073','4','uploads/u_2/adv_10/00d7fe0fa0578e37f18b715ee9a1b7ad.jpg','2016-10-22 13:45:38','2016-10-22 13:45:38'),(11,3,'Aut eum ducimus vero nobis minima.','Iowa','Emilyport','Rice-Windler','breitenberg','4','907530','2','uploads/u_3/adv_11/ff031357df93097b7f38f2cdcfdff24a.jpg','2016-10-27 09:00:59','2016-10-27 09:00:59'),(12,3,'Esse deleniti sed nisi assumenda voluptates.','California','Port Jordanborough','Gottlieb, McClure and Dietrich','tromp','2','540738','1','uploads/u_3/adv_12/8ddb59ab2fe2d09a9fbb45e38e946d85.jpg','2016-11-02 11:06:00','2016-11-02 11:06:00'),(13,5,'Doloribus iusto nostrum sequi voluptatem neque.','Oregon','Deltaton','Roberts-Nicolas','kilback','3','5851','4','uploads/u_5/adv_13/02994a86bb5669c0ee1e613b657284a1.jpg','2016-10-10 01:07:35','2016-10-10 01:07:35'),(14,1,'Porro omnis distinctio et.','Illinois','Sawaynhaven','Schumm-Hoeger','stokes','3.5','428472','1','uploads/u_1/adv_14/21111569ca70e603563d6f70fb830c45.jpg','2016-10-19 23:20:39','2016-10-19 23:20:39'),(15,1,'Amet deleniti ipsam mollitia.','Indiana','Lake Trevafort','Grady, Jerde and Kling','crona','2.5','309776','5','uploads/u_1/adv_15/3cfd4b928388c5ffdd760ad12dc6b0e0.jpg','2016-11-02 08:13:08','2016-11-02 08:13:08'),(16,5,'Et molestias non veniam exercitationem.','Massachusetts','Rempelhaven','Miller-King','powlowski','4','513068','2','uploads/u_5/adv_16/d34ba2d603f8a39625c853e5f965d5fd.jpg','2016-10-09 20:55:29','2016-10-09 20:55:29'),(17,5,'Aut quia consequatur eum quaerat recusandae.','New Hampshire','Kuhicstad','Johnson LLC','predovic','4','912953','3','uploads/u_5/adv_17/adcd3a1edf7489e309732d676ece886a.jpg','2016-10-14 23:02:50','2016-10-14 23:02:50'),(18,2,'Qui tempora aut sit.','Colorado','Lake Friedrichfurt','Brekke-Gerhold','beatty','2.5','524261','2','uploads/u_2/adv_18/f5362ac10a4c0245109700d047169f3d.jpg','2016-10-24 20:46:51','2016-10-24 20:46:51'),(19,2,'Iusto aliquid est officiis doloribus praesentium ut sint.','North Carolina','Cindyview','Mills, Kohler and Wisozk','nicolas','3','902646','1','uploads/u_2/adv_19/a993a18b633af4316f41802e594cbc5b.jpg','2016-11-03 10:27:07','2016-11-03 10:27:07'),(20,3,'Est accusamus numquam quae ea non consectetur.','South Dakota','Johnstown','Wuckert and Sons','green','4','642055','3','uploads/u_3/adv_20/117535168b49ee8d5851d22e0d47f0ff.jpg','2016-10-09 22:55:26','2016-10-09 22:55:26'),(21,6,'New advert','Nebraska','Adessa mama','GMC','Escalade','5.2','1234','1','uploads/u_6/adv_21/5820630cad41f0.46192097.jpg','2016-11-07 11:18:35','2016-11-07 11:18:36');
/*!40000 ALTER TABLE `adverts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_10_30_143629_create_advert_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'otorp@dooley.com','$2y$10$d7mx1WU6AwGsfbeWCaIRg.k0HL5ATOGgQQ.AKc10vxTLCRrTqgHw.',NULL,'2016-10-30 13:47:41','2016-10-30 13:47:41'),(2,'marvin.kris@stehr.info','$2y$10$CO4E4S2g8lD97I/QylprxOmI6GahgVvqeMGjPWH8nKESTvwLkwgC6',NULL,'2016-11-03 22:42:26','2016-11-03 22:42:26'),(3,'audie.gutkowski@nienow.info','$2y$10$LiUsDDJR/wSxb0MfVdknJO81/c/FK/IkMItaFBcu3eHpG32aADOKG',NULL,'2016-11-06 10:02:49','2016-11-06 10:02:49'),(4,'conroy.abbigail@hotmail.com','$2y$10$6GotKMvcMjJRC8aSwCueeOxzj9Pr0W24pPt38kSSJE02tLVJUMGFa',NULL,'2016-10-16 02:23:42','2016-10-16 02:23:42'),(5,'esperanza11@yahoo.com','$2y$10$xHLX1iUlPmTogtqIH6HduuDVLZ3zNLuTj4bwJlyFgStkenuzgB6fa',NULL,'2016-11-03 16:39:06','2016-11-03 16:39:06'),(6,'test@mail.com','$2y$10$n.ndygdOh9qKwcrmVae46uJQJHtBeQPYDdFX5vCHDaf.xYBR18MV6',NULL,'2016-11-07 10:41:51','2016-11-07 10:41:51');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-07 11:35:09

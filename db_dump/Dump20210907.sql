CREATE DATABASE  IF NOT EXISTS `mypplatform` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `mypplatform`;
-- MariaDB dump 10.19  Distrib 10.4.21-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: mypplatform
-- ------------------------------------------------------
-- Server version	10.4.21-MariaDB

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
-- Table structure for table `add_drop_subj_application`
--

DROP TABLE IF EXISTS `add_drop_subj_application`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `add_drop_subj_application` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `target_subj_class_id` int(11) NOT NULL,
  `hr_class_id` int(11) DEFAULT NULL,
  `add_drop` int(11) NOT NULL,
  `admin_comment` varchar(128) DEFAULT NULL,
  `create_time` varchar(128) DEFAULT NULL,
  `update_time` varchar(128) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `add_drop_subj_application_stud_info_id_fk` (`stud_id`),
  KEY `add_drop_subj_application_subject_class_id_fk` (`target_subj_class_id`),
  KEY `add_drop_subj_application_homeroom_class_id_fk` (`hr_class_id`),
  CONSTRAINT `add_drop_subj_application_homeroom_class_id_fk` FOREIGN KEY (`hr_class_id`) REFERENCES `homeroom_class` (`id`),
  CONSTRAINT `add_drop_subj_application_stud_info_id_fk` FOREIGN KEY (`stud_id`) REFERENCES `stud_info` (`id`),
  CONSTRAINT `add_drop_subj_application_subject_class_id_fk` FOREIGN KEY (`target_subj_class_id`) REFERENCES `subject_class` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `add_drop_subj_application`
--

LOCK TABLES `add_drop_subj_application` WRITE;
/*!40000 ALTER TABLE `add_drop_subj_application` DISABLE KEYS */;
INSERT INTO `add_drop_subj_application` VALUES (1,1,1,1,1,NULL,'2021-08-28 12:27:52','2021-08-28 12:27:52',0),(2,1,1,1,0,NULL,'2021-08-28 12:35:25','2021-08-28 12:35:25',0),(3,1,1,1,1,NULL,'2021-09-06 17:03:19','2021-09-06 17:03:19',0);
/*!40000 ALTER TABLE `add_drop_subj_application` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exam`
--

DROP TABLE IF EXISTS `exam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exam_title` varchar(128) NOT NULL,
  `target_grades` int(11) NOT NULL,
  `subj_ids` varchar(128) NOT NULL,
  `exam_start_date` varchar(128) NOT NULL,
  `duration_in_days` varchar(128) NOT NULL,
  `exam_type` int(11) NOT NULL,
  `create_time` varchar(128) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COMMENT='Exam table';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exam`
--

LOCK TABLES `exam` WRITE;
/*!40000 ALTER TABLE `exam` DISABLE KEYS */;
INSERT INTO `exam` VALUES (1,'Mathematics Grade 12',12,'1,2,3,4,5,6','2020-08-07','1',0,'2020-08-07',1),(2,'Mathematics Grade 12',12,'1,2,3,4,5,6','2020-08-07','1',1,'2020-08-07',1),(6,'Midterm exam',12,'1,2,3,4,5,6','2020-08-07','1',0,'2020-08-07',1),(7,'Final exam',12,'1,2,3,4,5,6','2020-08-07','1',1,'2020-08-07',1);
/*!40000 ALTER TABLE `exam` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expected_curr`
--

DROP TABLE IF EXISTS `expected_curr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expected_curr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `course_name` varchar(128) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `create_time` varchar(128) DEFAULT NULL,
  `update_time` varchar(128) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`id`),
  KEY `expected_curr_stud_info_id_fk` (`stud_id`),
  CONSTRAINT `expected_curr_stud_info_id_fk` FOREIGN KEY (`stud_id`) REFERENCES `stud_info` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expected_curr`
--

LOCK TABLES `expected_curr` WRITE;
/*!40000 ALTER TABLE `expected_curr` DISABLE KEYS */;
INSERT INTO `expected_curr` VALUES (1,1,'Mathematics: Application and Interpretation',0,'2021-08-28 03:13:58','2021-08-29 04:04:12',1),(2,1,'English',1,'2021-08-28 03:16:05','2021-08-28 03:16:05',1),(3,1,'Psychology',1,'2021-08-28 03:16:26','2021-08-28 03:16:26',1),(4,1,'History',1,'2021-08-28 03:16:53','2021-08-28 03:16:53',1),(5,1,'Chemistry',0,'2021-08-28 03:21:03','2021-08-28 03:21:03',1),(6,1,'Physics',1,'2021-08-28 03:21:13','2021-08-28 03:21:13',0),(7,1,'Economics',0,'2021-08-28 03:48:30','2021-08-28 03:48:30',1);
/*!40000 ALTER TABLE `expected_curr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `homeroom_class`
--

DROP TABLE IF EXISTS `homeroom_class`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `homeroom_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grade` int(11) NOT NULL,
  `program` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `homeroom_teacher_id` int(11) NOT NULL,
  `stud_ids` varchar(128) NOT NULL,
  `num_of_stud` int(11) NOT NULL,
  `class_avg_grades` varchar(128) DEFAULT NULL,
  `ranking` varchar(128) DEFAULT NULL,
  `create_time` varchar(128) NOT NULL,
  `updater_id` int(11) DEFAULT NULL,
  `update_time` varchar(128) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `homeroom_class_teacher_info_id_fk` (`updater_id`),
  KEY `homeroom_class_teacher_info_id_fk2` (`homeroom_teacher_id`),
  CONSTRAINT `homeroom_class_teacher_info_id_fk` FOREIGN KEY (`updater_id`) REFERENCES `teacher_info` (`id`),
  CONSTRAINT `homeroom_class_teacher_info_id_fk2` FOREIGN KEY (`homeroom_teacher_id`) REFERENCES `teacher_info` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `homeroom_class`
--

LOCK TABLES `homeroom_class` WRITE;
/*!40000 ALTER TABLE `homeroom_class` DISABLE KEYS */;
INSERT INTO `homeroom_class` VALUES (1,12,0,2,1,'1,2',2,'1',NULL,'2',NULL,NULL,0),(2,12,0,1,1,'3,4',3,'1',NULL,'2',NULL,NULL,0);
/*!40000 ALTER TABLE `homeroom_class` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ling_score`
--

DROP TABLE IF EXISTS `ling_score`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ling_score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) DEFAULT NULL,
  `test_name` varchar(128) DEFAULT NULL,
  `test_score` varchar(128) DEFAULT NULL,
  `overall_score` varchar(128) DEFAULT NULL,
  `reflection` varchar(128) DEFAULT NULL,
  `test_date` varchar(128) DEFAULT NULL,
  `create_time` varchar(128) DEFAULT NULL,
  `update_time` varchar(128) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`id`),
  KEY `ling_score_stud_info_id_fk` (`stud_id`),
  CONSTRAINT `ling_score_stud_info_id_fk` FOREIGN KEY (`stud_id`) REFERENCES `stud_info` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ling_score`
--

LOCK TABLES `ling_score` WRITE;
/*!40000 ALTER TABLE `ling_score` DISABLE KEYS */;
INSERT INTO `ling_score` VALUES (1,1,'IELTS','9,9,9,9','9','123','2021-08-28','2021-08-28 04:20:06','2021-08-28 04:20:06',1),(2,1,'TOEFL','30,30,30,30','111','1234','2021-08-28','2021-08-28 04:20:24','2021-08-28 11:51:52',1);
/*!40000 ALTER TABLE `ling_score` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stud_award`
--

DROP TABLE IF EXISTS `stud_award`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stud_award` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `award_name` varchar(128) NOT NULL,
  `comp_time` varchar(128) NOT NULL,
  `create_time` varchar(128) NOT NULL,
  `update_time` varchar(128) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  KEY `stud_award_stud_info_id_fk2` (`stud_id`),
  CONSTRAINT `stud_award_stud_info_id_fk2` FOREIGN KEY (`stud_id`) REFERENCES `stud_info` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COMMENT='Student awards';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stud_award`
--

LOCK TABLES `stud_award` WRITE;
/*!40000 ALTER TABLE `stud_award` DISABLE KEYS */;
INSERT INTO `stud_award` VALUES (1,1,'Top 25%','2019-02-01','2020-08-08','2020-08-08',1),(2,1,'Top 3%','2020-07-15','2020-08-08','2020-08-08',1),(3,1,'test1','2020-07-15','2020-08-08','2020-08-08',1),(4,1,'１２３','2021-08-27','2021-08-27','2021-08-27',1),(5,1,'123','2021-08-02','2021-08-27','2021-08-27',1),(6,1,'12','2021-09-03','2021-08-28','2021-08-28',1),(7,1,'4','2021-08-28','2021-08-28','2021-08-28',0),(8,1,'4442','2021-08-28','2021-08-28','2021-08-28',0);
/*!40000 ALTER TABLE `stud_award` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stud_info`
--

DROP TABLE IF EXISTS `stud_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stud_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chi_name` varchar(128) NOT NULL,
  `eng_name` varchar(128) NOT NULL,
  `email_address` varchar(128) NOT NULL,
  `award_id` int(11) DEFAULT NULL,
  `univ_id` int(11) DEFAULT NULL,
  `violation_id` int(11) DEFAULT NULL,
  `reg_time` varchar(128) NOT NULL,
  `stud_number` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `create_time` varchar(128) NOT NULL,
  `updater_id` int(11) DEFAULT NULL,
  `update_time` varchar(128) DEFAULT NULL,
  `last_login_time` varchar(128) DEFAULT NULL,
  `avatar_address` varchar(128) DEFAULT NULL,
  `personal_info` varchar(128) DEFAULT NULL,
  `strength` varchar(128) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stud_info`
--

LOCK TABLES `stud_info` WRITE;
/*!40000 ALTER TABLE `stud_info` DISABLE KEYS */;
INSERT INTO `stud_info` VALUES (1,'苏亦鸣','Erik','yimingsu@uchicago.edu',NULL,NULL,NULL,'2014-09-01','1234','1234','2020-08-05',NULL,'2021-09-06 16:50:20','2021-09-06 16:43:33','ahri.png','yimingsu,苏亦鸣w,Erikw,Male,0115353,China,2002-01-01,18777190003,8,9,10,11,12,133,14,15','title121-year121-detail121,title241-year241-detail241,title31-year31-title31,12345-12341-1235',1),(2,'苏','E','abcd',NULL,NULL,NULL,'2014-09-01','01153531','020101','2020-08-05',NULL,NULL,'2021-08-27 03:36:06','ahri.png',NULL,NULL,1),(3,'亦','Er','abcd',NULL,NULL,NULL,'2014-09-01','011535322','020101','2020-08-05',NULL,NULL,'2020-11-16 14:39:12','ahri.png',NULL,NULL,1),(4,'鸣','Erik','abcd',NULL,NULL,NULL,'2014-09-01','01153535','020101','2020-08-05',NULL,NULL,'2020-11-16 14:39:12','ahri.png',NULL,NULL,1),(5,'苏','E','a',NULL,NULL,NULL,'2','0','1','1',NULL,NULL,'1','1\r\n',NULL,NULL,0);
/*!40000 ALTER TABLE `stud_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stud_scores`
--

DROP TABLE IF EXISTS `stud_scores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stud_scores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `exam_results` varchar(128) NOT NULL,
  `create_time` varchar(128) NOT NULL,
  `updater_id` int(11) DEFAULT NULL,
  `update_time` varchar(128) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `stud_grades_exam_id_fk` (`exam_id`),
  KEY `stud_grades_stud_info_id_fk` (`stud_id`),
  KEY `stud_grades_teacher_info_id_fk` (`updater_id`),
  CONSTRAINT `stud_grades_exam_id_fk` FOREIGN KEY (`exam_id`) REFERENCES `exam` (`id`),
  CONSTRAINT `stud_grades_stud_info_id_fk` FOREIGN KEY (`stud_id`) REFERENCES `stud_info` (`id`),
  CONSTRAINT `stud_grades_teacher_info_id_fk` FOREIGN KEY (`updater_id`) REFERENCES `teacher_info` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stud_scores`
--

LOCK TABLES `stud_scores` WRITE;
/*!40000 ALTER TABLE `stud_scores` DISABLE KEYS */;
INSERT INTO `stud_scores` VALUES (1,1,1,'7','2020-08-07',1,'2020-08-07',0),(15,2,6,'7,7,7,6,6,6','2021-01-01',1,'2021-01-01',0),(19,3,6,'6,5,6,7,5,6','2021-01-01',1,'2021-01-01',0),(20,4,6,'5,4,5,5,5,5','2021-01-01',1,'2021-01-01',0),(21,2,7,'5,7,6,6,4,6','2021-01-01',1,'2021-01-01',0),(22,3,7,'6,4,6,5,7,6','2021-01-01',1,'2021-01-01',0),(23,4,7,'6,4,7,5,7,5','2021-01-01',1,'2021-01-01',0);
/*!40000 ALTER TABLE `stud_scores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stud_univ`
--

DROP TABLE IF EXISTS `stud_univ`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stud_univ` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `univ_name` varchar(128) NOT NULL,
  `major` int(11) DEFAULT NULL,
  `create_time` varchar(128) NOT NULL,
  `update_time` varchar(128) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  KEY `stud_univ_stud_info_id_fk` (`stud_id`),
  CONSTRAINT `stud_univ_stud_info_id_fk` FOREIGN KEY (`stud_id`) REFERENCES `stud_info` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COMMENT='Student university choosing';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stud_univ`
--

LOCK TABLES `stud_univ` WRITE;
/*!40000 ALTER TABLE `stud_univ` DISABLE KEYS */;
INSERT INTO `stud_univ` VALUES (1,1,'Uchicago',0,'1','1',1),(2,1,'Uchicago',0,'1','2021-08-28 11:35:23',1),(3,1,'Uchicago',1,'2021-01-01 05:01:58','2021-08-28 11:34:36',1),(5,1,'1234',1234,'2021-08-27 10:30:44','2021-08-28 11:34:32',1);
/*!40000 ALTER TABLE `stud_univ` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stud_violation`
--

DROP TABLE IF EXISTS `stud_violation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stud_violation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `level_of_severity` int(11) NOT NULL,
  `title_of_violation` varchar(128) NOT NULL,
  `content_of_violation` varchar(128) NOT NULL,
  `time_of_violation` varchar(128) NOT NULL,
  `removal_comments` varchar(128) DEFAULT NULL,
  `create_time` varchar(128) NOT NULL,
  `update_time` varchar(128) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `stud_violation_stud_info_id_fk` (`stud_id`),
  CONSTRAINT `stud_violation_stud_info_id_fk` FOREIGN KEY (`stud_id`) REFERENCES `stud_info` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COMMENT='Table for students violation of school regulation';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stud_violation`
--

LOCK TABLES `stud_violation` WRITE;
/*!40000 ALTER TABLE `stud_violation` DISABLE KEYS */;
INSERT INTO `stud_violation` VALUES (1,1,1,'Dating with a girl','Dating with a girl','2020-01-01','123','2020-01-01','2021-08-26 16:09:51',0),(2,1,2,'Dating with two girls at same time','Dating with two girls at same time','2020-01-01',NULL,'2020-01-01',NULL,3),(3,1,3,'Dating with three girls at same time','Dating with three girls at same time','2020-01-01',NULL,'2020-01-01',NULL,1),(4,4,1,'1','1','1',NULL,'1',NULL,0),(5,5,1,'1','1','1',NULL,'1',NULL,0),(6,2,1,'1','1','1',NULL,'1',NULL,0);
/*!40000 ALTER TABLE `stud_violation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subj_name` varchar(128) NOT NULL,
  `create_time` varchar(128) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COMMENT='Subject table';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subject`
--

LOCK TABLES `subject` WRITE;
/*!40000 ALTER TABLE `subject` DISABLE KEYS */;
INSERT INTO `subject` VALUES (1,'Mathematics','2020-08-07',0),(2,'Chinese','2020-08-07',0),(3,'English B','2020-08-07',0),(4,'Physics SL','2020-08-07',0),(5,'Psychology SL','2020-08-07',0),(6,'Computer Science HL','2020-08-07',0);
/*!40000 ALTER TABLE `subject` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subject_class`
--

DROP TABLE IF EXISTS `subject_class`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subject_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subj_teacher_id` int(11) NOT NULL,
  `subj_id` int(11) NOT NULL,
  `stud_ids` varchar(128) NOT NULL,
  `stud_num_limit` int(11) NOT NULL,
  `grade` int(11) NOT NULL,
  `avg_grade` double DEFAULT NULL,
  `subj_ranking` varchar(128) DEFAULT NULL,
  `create_time` varchar(128) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `subject_classes_subj_info_id_fk` (`subj_id`),
  KEY `subject_classes_teacher_info_id_fk` (`subj_teacher_id`),
  CONSTRAINT `subject_classes_subj_info_id_fk` FOREIGN KEY (`subj_id`) REFERENCES `subject` (`id`),
  CONSTRAINT `subject_classes_teacher_info_id_fk` FOREIGN KEY (`subj_teacher_id`) REFERENCES `teacher_info` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subject_class`
--

LOCK TABLES `subject_class` WRITE;
/*!40000 ALTER TABLE `subject_class` DISABLE KEYS */;
INSERT INTO `subject_class` VALUES (1,1,1,'1,2,3,4',10,12,NULL,'','2020-08-14',1),(2,1,2,'1,2,3,4',10,12,NULL,NULL,'2020-08-14',1),(3,1,4,'1,2,3,4',10,12,NULL,NULL,'2020-08-14',0),(4,1,4,'1,2,3,4',10,12,NULL,NULL,'2020-08-14',0),(5,1,5,'1,2,3,4',10,12,NULL,NULL,'2020-08-14',0),(6,1,6,'1,2,3,4',10,12,NULL,NULL,'2020-08-14',0);
/*!40000 ALTER TABLE `subject_class` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `swap_subj_application`
--

DROP TABLE IF EXISTS `swap_subj_application`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `swap_subj_application` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `orig_subj_class_id` int(11) NOT NULL,
  `target_subj_class_id` int(11) NOT NULL,
  `reason_of_swapping` varchar(128) NOT NULL,
  `create_time` varchar(128) NOT NULL,
  `updater_id` int(11) DEFAULT NULL,
  `update_time` varchar(128) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `swap_subj_application_teacher_info_id_fk` (`updater_id`),
  KEY `swap_subj_application_stud_info_id_fk` (`stud_id`),
  KEY `swap_subj_application_subject_class_id_fk` (`orig_subj_class_id`),
  KEY `swap_subj_application_subject_class_id_fk_2` (`target_subj_class_id`),
  CONSTRAINT `swap_subj_application_stud_info_id_fk` FOREIGN KEY (`stud_id`) REFERENCES `stud_info` (`id`),
  CONSTRAINT `swap_subj_application_subject_class_id_fk` FOREIGN KEY (`orig_subj_class_id`) REFERENCES `subject_class` (`id`),
  CONSTRAINT `swap_subj_application_subject_class_id_fk_2` FOREIGN KEY (`target_subj_class_id`) REFERENCES `subject_class` (`id`),
  CONSTRAINT `swap_subj_application_teacher_info_id_fk` FOREIGN KEY (`updater_id`) REFERENCES `teacher_info` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `swap_subj_application`
--

LOCK TABLES `swap_subj_application` WRITE;
/*!40000 ALTER TABLE `swap_subj_application` DISABLE KEYS */;
INSERT INTO `swap_subj_application` VALUES (1,1,1,1,'Bored','2020-08-13',2,NULL,1),(2,1,1,1,'Nothing','2020-08-13 15:03:26',1,'2020-08-13 15:04:03',2);
/*!40000 ALTER TABLE `swap_subj_application` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher_info`
--

DROP TABLE IF EXISTS `teacher_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chi_name` varchar(128) NOT NULL,
  `eng_name` varchar(128) NOT NULL,
  `email_address` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `teacher_num` varchar(128) NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 1,
  `create_time` varchar(128) NOT NULL,
  `last_login_time` varchar(128) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `teacher_info_subject_id_fk` (`subject_id`),
  CONSTRAINT `teacher_info_subject_id_fk` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COMMENT='Table for teachers basic information';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher_info`
--

LOCK TABLES `teacher_info` WRITE;
/*!40000 ALTER TABLE `teacher_info` DISABLE KEYS */;
INSERT INTO `teacher_info` VALUES (1,'苏亦鸣','Yiming Su','','020101','01153532',1,1,'2020-08-07','2021-08-26 14:48:32',0),(2,'sym','Erik','bgysym@126.com','123456','01153533',1,1,'2020-08-13 14:24:30','2021-08-26 14:14:50',0),(3,'sb','sb','sb@sb.sb','123','123',1,1,'2020-08-13 15:06:17','2021-08-27 03:35:41',0);
/*!40000 ALTER TABLE `teacher_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `term_target`
--

DROP TABLE IF EXISTS `term_target`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `term_target` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `subj_ids` varchar(128) NOT NULL,
  `expected_exam_results` varchar(128) NOT NULL,
  `create_time` varchar(128) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `term_target_exam_id_fk` (`exam_id`),
  KEY `term_target_stud_info_id_fk` (`stud_id`),
  KEY `term_target_subject_id_fk` (`subj_ids`),
  CONSTRAINT `term_target_exam_id_fk` FOREIGN KEY (`exam_id`) REFERENCES `exam` (`id`),
  CONSTRAINT `term_target_stud_info_id_fk` FOREIGN KEY (`stud_id`) REFERENCES `stud_info` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `term_target`
--

LOCK TABLES `term_target` WRITE;
/*!40000 ALTER TABLE `term_target` DISABLE KEYS */;
INSERT INTO `term_target` VALUES (1,1,1,'1,2,3,4,5,6','50,13,10,4,5,6,100','1',1),(2,1,2,'1,2,3,4,5,6','100,23,10,6,7,8,100','1',1);
/*!40000 ALTER TABLE `term_target` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roles` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
INSERT INTO `user_roles` VALUES (1,0);
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-09-07 20:21:28

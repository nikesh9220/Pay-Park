/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.26-MariaDB : Database - parking
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`parking` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `parking`;

/*Table structure for table `addparking` */

DROP TABLE IF EXISTS `addparking`;

CREATE TABLE `addparking` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `areaid` int(11) DEFAULT NULL,
  `contactno` int(10) DEFAULT NULL,
  `slots` varchar(10) NOT NULL,
  PRIMARY KEY (`pid`),
  KEY `FK_addparking` (`areaid`),
  CONSTRAINT `FK_addparking` FOREIGN KEY (`areaid`) REFERENCES `area` (`areaid`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

/*Data for the table `addparking` */

insert  into `addparking`(`pid`,`name`,`address`,`areaid`,`contactno`,`slots`) values (1,'My Parking','Nr.Bus stand ',1,2147483647,'20'),(11,'Ambika Parking','Near Chokdi Road',2,2147483647,'30'),(21,'Sai Parking','Nana Vagda Najik',2,2147483647,'16'),(23,'Morden Parking','Bakrol Gate Pase',5,2147483647,'50'),(24,'Goga Parking Center','Circle Pase',6,2147483647,'60'),(25,'ShreeParking Service','Near Talav vadi',7,968787888,'12'),(28,'Niks Parking Center','Blossom Aura Tower',8,2147483647,'40'),(29,'Drashti Parking','B/H College',9,2147483647,'40');

/*Table structure for table `area` */

DROP TABLE IF EXISTS `area`;

CREATE TABLE `area` (
  `areaid` int(10) NOT NULL AUTO_INCREMENT,
  `areaname` varchar(20) DEFAULT NULL,
  `cityid` int(10) DEFAULT NULL,
  PRIMARY KEY (`areaid`),
  KEY `cityid` (`cityid`),
  CONSTRAINT `area_ibfk_1` FOREIGN KEY (`cityid`) REFERENCES `city` (`cityid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*Data for the table `area` */

insert  into `area`(`areaid`,`areaname`,`cityid`) values (1,'Maninagar',5),(2,'Ishanpur',5),(4,'Ghodasar',5),(5,'Bakrol',6),(6,'Vaniyavad',1),(7,'College Road',1),(8,'Santram',1),(9,'Gopal Crossing',6);

/*Table structure for table `booking` */

DROP TABLE IF EXISTS `booking`;

CREATE TABLE `booking` (
  `bid` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) DEFAULT NULL,
  `cityid` int(10) DEFAULT NULL,
  `aid` int(10) DEFAULT NULL,
  `pid` int(10) DEFAULT NULL,
  `tid` tinytext,
  `model_no` text,
  `vehicle_no` tinytext,
  `plotno` int(10) DEFAULT NULL,
  `d1` tinytext,
  `d2` tinytext,
  `charges` text,
  PRIMARY KEY (`bid`),
  KEY `uid` (`uid`),
  KEY `aid` (`aid`),
  KEY `pid` (`pid`),
  KEY `cityid` (`cityid`),
  CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`),
  CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`aid`) REFERENCES `area` (`areaid`),
  CONSTRAINT `booking_ibfk_4` FOREIGN KEY (`pid`) REFERENCES `addparking` (`pid`),
  CONSTRAINT `booking_ibfk_5` FOREIGN KEY (`cityid`) REFERENCES `city` (`cityid`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

/*Data for the table `booking` */

insert  into `booking`(`bid`,`uid`,`cityid`,`aid`,`pid`,`tid`,`model_no`,`vehicle_no`,`plotno`,`d1`,`d2`,`charges`) values (40,12,NULL,2,25,'db041c93aed8b522e10a','XcDAKA','MNCHaa',0,'2018-03-04 05:15','2018-03-05 09:50','280.0'),(41,12,NULL,2,25,'db041c93aed8b522e10a','XcDAKA','MNCHaa',0,'2018-03-04 05:15','2018-03-05 09:50','280.0'),(42,12,NULL,2,25,'db041c93aed8b522e10a','XcDAKA','MNCHaa',0,'2018-03-04 05:15','2018-03-05 09:50','280.0'),(43,12,NULL,2,25,'db041c93aed8b522e10a','XcDAKA','MNCHaa',0,'2018-03-04 05:15','2018-03-05 09:50','280.0'),(44,12,NULL,2,25,'db041c93aed8b522e10a','XcDAKA','MNCHaa',0,'2018-03-04 05:15','2018-03-05 09:50','280.0'),(45,12,NULL,2,25,'db041c93aed8b522e10a','XcDAKA','MNCHaa',0,'2018-03-04 05:15','2018-03-05 09:50','280.0'),(46,12,NULL,2,25,'db041c93aed8b522e10a','XcDAKA','MNCHaa',0,'2018-03-04 05:15','2018-03-05 09:50','280.0'),(47,12,NULL,2,11,'8d875f888648bceb10c9','GJ','1212',28,'2018-03-02 04:10','2018-03-07 08:25','1240.0'),(48,12,NULL,2,25,'476d7ed3b1f41fe1d6b7','NikaGadi','GJ07BB4578',12,'2018-03-04 05:15','2018-03-07 08:30','750.0'),(49,12,NULL,2,25,'f348c8ab3aca63c9c663','nbnbnb','khkhhlhk',6,'2018-03-04 10:35','2018-03-07 08:25','690.0'),(50,12,NULL,2,25,'7c0c7d5047eb7d0007a3','nbnbnb','khkhhlhk',7,'2018-03-04 10:35','2018-03-07 08:25','690.0'),(51,12,NULL,2,25,'a45364bc9bb722019392','m,,',',n,n',5,'2018-03-04 05:15','2018-03-07 08:25','750.0'),(52,12,NULL,2,25,'b992c6a52572dc91d7ee','bkbb',',nln',9,'2018-03-14 19:25','2018-03-17 11:35','1490.0'),(53,12,NULL,2,25,'11a2233ccdec7661b916','nmnm','mnmnm',10,'2018-03-25 17:55','2018-03-09 10:30','3910.0'),(54,12,NULL,2,25,'b0b4ca9e0d9f0614831a','jjh','jgj',12,'2018-04-01 05:15','2018-04-02 06:20','250.0'),(56,12,NULL,2,25,'b2a70eb8eff36d9c5b24','ggggg','fff',7,'2018-04-01 11:35','2018-04-06 10:30','1180.0');

/*Table structure for table `city` */

DROP TABLE IF EXISTS `city`;

CREATE TABLE `city` (
  `cityid` int(10) NOT NULL AUTO_INCREMENT,
  `cityname` varchar(20) NOT NULL,
  PRIMARY KEY (`cityid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `city` */

insert  into `city`(`cityid`,`cityname`) values (1,'Nadiad      '),(5,'Ahemdabad'),(6,'Anand'),(7,'Surat'),(8,'Vadodra');

/*Table structure for table `contact` */

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  `contactid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `reason` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`contactid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `contact` */

insert  into `contact`(`contactid`,`name`,`email`,`phone`,`reason`,`description`) values (1,'rishabh rajput','nikesh9220@gmail.com','8866843740','xyz','cgh'),(2,'Nikesh','nikesh9220@gmail.com','7041791111','kk','kkhkh'),(3,'nik','kknk@m.cm','7878545698','knkn','knkn');

/*Table structure for table `owner` */

DROP TABLE IF EXISTS `owner`;

CREATE TABLE `owner` (
  `ownerid` int(10) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `lname` tinytext,
  `email` tinytext,
  `pid` int(10) DEFAULT NULL,
  PRIMARY KEY (`ownerid`),
  KEY `pid` (`pid`),
  CONSTRAINT `owner_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `addparking` (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `owner` */

insert  into `owner`(`ownerid`,`name`,`lname`,`email`,`pid`) values (1,'ffff',NULL,'vvvv',NULL);

/*Table structure for table `parkinglot` */

DROP TABLE IF EXISTS `parkinglot`;

CREATE TABLE `parkinglot` (
  `Id` int(11) NOT NULL,
  `Position` int(11) NOT NULL,
  `Available` int(11) NOT NULL,
  `SensorId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `parkinglot` */

insert  into `parkinglot`(`Id`,`Position`,`Available`,`SensorId`) values (1,1,1,100),(3,2,1,200);

/*Table structure for table `payments` */

DROP TABLE IF EXISTS `payments`;

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_number` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `txn_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `payment_gross` float(10,2) NOT NULL,
  `currency_code` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `payments` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `phone` text NOT NULL,
  `level` text NOT NULL,
  `status` text NOT NULL,
  `joindate` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`name`,`email`,`password`,`phone`,`level`,`status`,`joindate`,`id`) values ('Sarkar','sarkar9220@gmail.com','25f9e794323b453885f5181f1b624d0b','0729667794','1','Active','Array',11),('Nikesh Pandya','nikesh9220@gmail.com','25f9e794323b453885f5181f1b624d0b','7041791111','0','Active','Array',12);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

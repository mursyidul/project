/*
SQLyog Enterprise - MySQL GUI v8.18 
MySQL - 5.5.5-10.1.9-MariaDB : Database - penggaji
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`penggaji` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `penggaji`;

/*Table structure for table `bagian` */

DROP TABLE IF EXISTS `bagian`;

CREATE TABLE `bagian` (
  `id_bagian` int(15) NOT NULL AUTO_INCREMENT,
  `bagian` varchar(30) DEFAULT NULL,
  `gaji` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_bagian`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `bagian` */

insert  into `bagian`(`id_bagian`,`bagian`,`gaji`) values (1,'Welder','3000000'),(2,'Tukang','2000000'),(3,'Supir','2500000');

/*Table structure for table `gaji_karyawan` */

DROP TABLE IF EXISTS `gaji_karyawan`;

CREATE TABLE `gaji_karyawan` (
  `id_gaji` int(15) NOT NULL AUTO_INCREMENT,
  `nik` varchar(30) DEFAULT NULL,
  `bulan` varchar(30) DEFAULT NULL,
  `alpha` int(10) DEFAULT NULL,
  `lembur` int(10) DEFAULT NULL,
  `total_gaji` varchar(30) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_gaji`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `gaji_karyawan` */

insert  into `gaji_karyawan`(`id_gaji`,`nik`,`bulan`,`alpha`,`lembur`,`total_gaji`,`status`) values (3,'INJ001','Januari',5,5,'2800000','tervalidasi'),(4,'INJ001','Februari',1,9,'3200000','tervalidasi'),(5,'INJ001','April',4,4,'2840000',''),(6,'INJ002','Februari',0,3,'2090000','tervalidasi'),(7,'INJ003','Februari',2,5,'2510000','tervalidasi'),(8,'INJ003','Maret',0,1,'2530000','tervalidasi');

/*Table structure for table `karyawan` */

DROP TABLE IF EXISTS `karyawan`;

CREATE TABLE `karyawan` (
  `id_karyawan` int(15) NOT NULL AUTO_INCREMENT,
  `nik` varchar(30) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` text,
  `bagian` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `karyawan` */

insert  into `karyawan`(`id_karyawan`,`nik`,`nama`,`alamat`,`bagian`) values (4,'INJ001','dsdhgjk','ghgjhg','Welder'),(7,'INJ002','aji','Gresik','Tukang'),(8,'INJ003','warga','Gresik','Supir');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id_users` int(15) NOT NULL AUTO_INCREMENT,
  `nik` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `bagian` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id_users`,`nik`,`username`,`password`,`bagian`) values (1,'','admin-hrd','acaf483f5ae94df85957d6d1b5258408','hrd'),(2,'','admin-direktur','61f3ee83355523a36fb467b29f18e26c','direktur'),(6,'INJ001','s','2ea834588bfdc1a498cb0ac6cdc4c111','karyawan'),(8,'INJ002','aji','25f9e794323b453885f5181f1b624d0b','karyawan'),(9,'INJ003','warga','25f9e794323b453885f5181f1b624d0b','karyawan');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

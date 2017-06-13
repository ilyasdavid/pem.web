/*
SQLyog Enterprise - MySQL GUI v7.14 
MySQL - 5.0.51b-community-nt-log : Database - db_nyater
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_nyater` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `db_nyater`;

/*Table structure for table `tb_admin` */

DROP TABLE IF EXISTS `tb_admin`;

CREATE TABLE `tb_admin` (
  `username` varchar(20) default NULL,
  `password` varchar(20) default NULL,
  `email` varchar(50) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `tb_admin` */

insert  into `tb_admin`(`username`,`password`,`email`) values ('yudha','yudha123','yudha@gmail.com'),('nando','nando123','nando@gmail.com'),('satria','satria123','satria@gmail.com'),('nur','nur123','nur@gmail.com');

/*Table structure for table `tb_daftar_keluarga` */

DROP TABLE IF EXISTS `tb_daftar_keluarga`;

CREATE TABLE `tb_daftar_keluarga` (
  `kota_asal` varchar(30) default NULL,
  `kota_tujuan` varchar(30) default NULL,
  `paket` varchar(20) default NULL,
  `kapasitas_mobil` int(50) default NULL,
  `jumlah_mobil` int(50) default NULL,
  `nama` varchar(50) default NULL,
  `alamat` varchar(50) default NULL,
  `lama_sewa` int(50) default NULL,
  `harga` int(50) default NULL,
  `tanggal` date default NULL,
  `waktu` varchar(20) default NULL,
  `email` varchar(50) default NULL,
  `no_telepon` decimal(12,0) default NULL,
  `total_harga` int(50) default NULL,
  `uang_muka` int(50) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `tb_daftar_keluarga` */

insert  into `tb_daftar_keluarga`(`kota_asal`,`kota_tujuan`,`paket`,`kapasitas_mobil`,`jumlah_mobil`,`nama`,`alamat`,`lama_sewa`,`harga`,`tanggal`,`waktu`,`email`,`no_telepon`,`total_harga`,`uang_muka`) values ('Jakarta','Bandung','Keluarga',9,5,'vcxvxc','vvxcvx',4,145000,'2015-06-16','Sore-Malam ( 16.00-2','cvxcvxv','456456456',2900000,1450000);

/*Table structure for table `tb_daftar_pariwisata` */

DROP TABLE IF EXISTS `tb_daftar_pariwisata`;

CREATE TABLE `tb_daftar_pariwisata` (
  `kota_asal` varchar(20) default NULL,
  `kota_tujuan` varchar(20) default NULL,
  `paket` varchar(20) default NULL,
  `kapasitas_bus` int(50) default NULL,
  `jumlah_bus` int(11) default NULL,
  `jenis_pesanan` varchar(20) default NULL,
  `nama_pesan` varchar(50) default NULL,
  `alamat` varchar(50) default NULL,
  `lama_sewa` int(11) default NULL,
  `harga` int(11) default NULL,
  `tanggal` date default NULL,
  `waktu` varchar(20) default NULL,
  `email` varchar(50) default NULL,
  `no_telepon` decimal(12,0) default NULL,
  `total_harga` int(11) default NULL,
  `uang_muka` int(11) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `tb_daftar_pariwisata` */

insert  into `tb_daftar_pariwisata`(`kota_asal`,`kota_tujuan`,`paket`,`kapasitas_bus`,`jumlah_bus`,`jenis_pesanan`,`nama_pesan`,`alamat`,`lama_sewa`,`harga`,`tanggal`,`waktu`,`email`,`no_telepon`,`total_harga`,`uang_muka`) values ('Jakarta','Bandung','Pariwisata',40,3,'Personal','fbdfd','dsfsdf',7,285000,'2015-06-09','Siang ( 12.00-14.00)','dsfsdfsdf','564564',5985000,2992500);

/*Table structure for table `tb_keluarga` */

DROP TABLE IF EXISTS `tb_keluarga`;

CREATE TABLE `tb_keluarga` (
  `kota_asal` varchar(20) default NULL,
  `kota_tujuan` varchar(20) default NULL,
  `harga` int(50) default NULL,
  `gambar` varchar(50) default NULL,
  `paket` varchar(20) default NULL,
  `kapasitas` decimal(50,0) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `tb_keluarga` */

insert  into `tb_keluarga`(`kota_asal`,`kota_tujuan`,`harga`,`gambar`,`paket`,`kapasitas`) values ('Jakarta','Bandung',155000,'atlas2','Keluarga','9'),('Jakarta','Bandung',150000,'btb','Keluarga','9'),('Jakarta','Bandung',156000,'kupukupu2','Keluarga','9'),('Jakarta','Bandung',145000,'loltravel','Keluarga','9'),('Bandung','Jakarta',145000,'loltravel','Keluarga','9'),('Bandung','Jakarta',156000,'kupukupu2','Keluarga','9'),('Bandung','Jakarta',150000,'btb','Keluarga','9'),('Bandung','Jakarta',155000,'atlas2','Keluarga','9'),('Jakarta','Bandar Lampung',146000,'KURAKURA','Keluarga','9'),('Jakarta','Bandar Lampung',147000,'loltravel','Keluarga','9'),('Jakarta','Bandar Lampung',145000,'mobil1','Keluarga','9'),('Jakarta','Bandar Lampung',139000,'uburubur','Keluarga','9'),('Jakarta','Bandar Lampung',137000,'atlas2','Keluarga','9'),('Bandar Lampung','Jakarta',137000,'atlas2','Keluarga','9'),('Bandar Lampung','Jakarta',139000,'uburubur','Keluarga','9'),('Bandar Lampung','Jakarta',145000,'mobil1','Keluarga','9'),('Bandar Lampung','Jakarta',147000,'loltravel','Keluarga','9'),('Bandar Lampung','Jakarta',146000,'KURAKURA','Keluarga','9'),('Jakarta','Metro',149000,'kupukupu2','Keluarga','9'),('Jakarta','Metro',148000,'KURAKURA','Keluarga','9'),('Jakarta','Metro',146000,'uburubur','Keluarga','9'),('Jakarta','Metro',147000,'atlas2','Keluarga','9'),('Metro','Jakarta',147000,'atlas2','Keluarga','9'),('Metro','Jakarta',146000,'uburubur','Keluarga','9'),('Metro','Jakarta',148000,'KURAKURA','Keluarga','9'),('Metro','Jakarta',149000,'kupukupu2','Keluarga','9'),('Bandung','Bandar Lampung',171000,'loltravel','Keluarga','9'),('Bandung','Bandar Lampung',167000,'KURAKURA','Keluarga','9'),('Bandung','Bandar Lampung',172000,'mobil1','Keluarga','9'),('Bandung','Bandar Lampung',173000,'btb','Keluarga','9'),('Bandung','Bandar Lampung',169000,'kupukupu2','Keluarga','9'),('Bandar Lampung','Bandung',171000,'loltravel','Keluarga','9'),('Bandung','Metro',168000,'kupukupu2','Keluarga','9'),('Bandung','Bandar Lampung',167000,'KURAKURA','Keluarga','9'),('Bandar Lampung','Bandung',169000,'kupukupu2','Keluarga','9'),('Bandar Lampung','Bandung',173000,'btb','Keluarga','9'),('Bandar Lampung','Bandung',172000,'mobil1','Keluarga','9'),('Bandung','Metro',171000,'KURAKURA','Keluarga','9'),('Bandung','Metro',172000,'btb','Keluarga','9'),('Bandung','Metro',178000,'uburubur','Keluarga','9'),('Bandung','Metro',180000,'atlas2','Keluarga','9'),('Metro','Bandung',180000,'atlas2','Keluarga','9'),('Metro','Bandung',178000,'uburubur','Keluarga','9'),('Metro','Bandung',172000,'btb','Keluarga','9'),('Metro','Bandung',171000,'KURAKURA','Keluarga','9'),('Bandar Lampung','Metro',100000,'btb','Keluarga','9'),('Bandar Lampung','Metro',110000,'KURAKURA','Keluarga','9'),('Bandar Lampung','Metro',113000,'uburubur','Keluarga','9'),('Bandar Lampung','Metro',114000,'atlas2','Keluarga','9'),('Bandar Lampung','Metro',120000,'kupukupu2','Keluarga','9'),('Bandar Lampung','Metro',120000,'loltravel','Keluarga','9'),('Bandar Lampung','Metro',121000,'mobil1','Keluarga','9'),('Metro','Bandar Lampung',121000,'mobil1','Keluarga','9'),('Metro','Bandar Lampung',120000,'loltravel','Keluarga','9'),('Metro','Bandar Lampung',120000,'kupukupu2','Keluarga','9'),('Metro','Bandar Lampung',114000,'atlas2','Keluarga','9'),('Metro','Bandar Lampung',112000,'uburubur','Keluarga','9'),('Metro','Bandar Lampung',110000,'KURAKURA','Keluarga','9'),('Metro','Bandar Lampung',100000,'btb','Keluarga','9'),('Metro','Jakarta',200000,'pilihmobil.PNG','Keluarga','9'),(NULL,NULL,NULL,NULL,NULL,'0');

/*Table structure for table `tb_pariwisata` */

DROP TABLE IF EXISTS `tb_pariwisata`;

CREATE TABLE `tb_pariwisata` (
  `kota_asal` varchar(20) default NULL,
  `kota_tujuan` varchar(20) default NULL,
  `harga` int(50) default NULL,
  `gambar` varchar(50) default NULL,
  `paket` varchar(20) default NULL,
  `kapasitas` decimal(50,0) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `tb_pariwisata` */

insert  into `tb_pariwisata`(`kota_asal`,`kota_tujuan`,`harga`,`gambar`,`paket`,`kapasitas`) values ('Jakarta','Bandung',280000,'ATLAS','Pariwisata','40'),('Jakarta','Bandung',280000,'KUPUKUPU','Pariwisata','40'),('Jakarta','Bandung',275000,'BUSKURA','Pariwisata','40'),('Jakarta','Bandung',285000,'BUSBTB','Pariwisata','40'),('Bandung','Jakarta',280000,'BUSUBUR-UBUR','Pariwisata','40'),('Bandung','Jakarta',284000,'ATLAS','Pariwisata','40'),('Bandung','Jakarta',276000,'BUSKURA','Pariwisata','40'),('Bandung','Jakarta',278000,'KUPUKUPU','Pariwisata','40'),('Bandar Lampung','Jakarta',169000,'BUSUBUR-UBUR','Pariwisata','40'),('Metro','Jakarta',173000,'BUSKURA','Pariwisata','40'),('Bandar Lampung','Jakarta',165000,'KUPUKUPU','Pariwisata','40'),('Bandar Lampung','Jakarta',159000,'BUSKURA','Pariwisata','40'),('Metro','Jakarta',168000,'BUSBTB','Pariwisata','40'),('Metro','Jakarta',170000,'KUPUKUPU','Pariwisata','40'),('Metro','Jakarta',168000,'ATLAS','Pariwisata','40'),('Jakarta','Metro',173000,'BUSKURA','Pariwisata','40'),('Bandar Lampung','Jakarta',162000,'BUSBTB','Pariwisata','40'),('Jakarta','Metro',168000,'BUSBTB','Pariwisata','40'),('Jakarta','Metro',168000,'ATLAS','Pariwisata','40'),('Bandar Lampung','Jakarta',160000,'ATLAS','Pariwisata','40'),('Jakarta','Metro',170000,'KUPUKUPU','Pariwisata','40'),('Jakarta','Bandar Lampung',161000,'KUPUKUPU','Pariwisata','40'),('Jakarta','Bandar Lampung',160000,'BUSUBUR-UBUR','Pariwisata','40'),('Jakarta','Bandar Lampung',167000,'BUSKURA','Pariwisata','40'),('Jakarta','Bandar Lampung',159000,'BUSBTB','Pariwisata','40'),('Jakarta','Bandar Lampung',158000,'ATLAS',NULL,'40'),('Bandung','Bandar Lampung',340000,'BUSBTB','Pariwisata','40'),('Bandung','Bandar Lampung',330000,'ATLAS','Pariwisata','40'),('Bandung','Bandar Lampung',343000,'BUSKURA','Pariwisata','40'),('Bandung','Bandar Lampung',138000,'KUPUKUPU','Pariwisata','40'),('Bandung','Bandar Lampung',137000,'BUSUBUR-UBUR','Pariwisata','40'),('Bandar Lampung','Bandung',137000,'BUSUBUR-UBUR','Pariwisata','40'),('Bandar Lampung','Bandung',138000,'KUPUKUPU','Pariwisata','40'),('Bandar Lampung','Bandung',343000,'BUSKURA','Pariwisata','40'),('Bandar Lampung','Bandung',330000,'ATLAS','Pariwisata','40'),('Bandar Lampung','Bandung',340000,'BUSBTB','Pariwisata','40'),('Bandung','Metro',350000,'BUSUBUR-UBUR','Pariwisata','40'),('Bandung','Metro',348000,'BUSKURA','Pariwisata','40'),('Bandung','Metro',352000,'ATLAS','Pariwisata','40'),('Bandung','Metro',345000,'KUPUKUPU','Pariwisata','40'),('Bandung','Metro',352000,'BUSBTB','Pariwisata','40'),('Metro','Bandung',352000,'BUSBTB','Pariwisata','40'),('Metro','Bandung',345000,'KUPUKUPU','Pariwisata','40'),('Metro','Bandung',352000,'ATLAS','Pariwisata','40'),('Metro','Bandung',348000,'BUSKURA','Pariwisata','40'),('Metro','Bandung',350000,'BUSUBUR-UBUR','Pariwisata','40'),('Bandar Lampung','Metro',100000,'BUSKURA','Pariwisata','40'),('Bandar Lampung','Metro',127000,'BUSUBUR-UBUR','Pariwisata','40'),('Bandar Lampung','Metro',124000,'BUSBTB','Pariwisata','40'),('Bandar Lampung','Metro',118000,'KUPUKUPU','Pariwisata','40'),('Metro','Bandar Lampung',118000,'KUPUKUPU','Pariwisata',NULL),('Metro','Bandar Lampung',124000,'BUSBTB','Pariwisata',NULL),('Metro','Bandar Lampung',127000,'BUSUBUR-UBUR','Pariwisata',NULL),('Metro','Bandar Lampung',100000,'BUSKURA','Pariwisata',NULL),(NULL,NULL,NULL,NULL,NULL,'0');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

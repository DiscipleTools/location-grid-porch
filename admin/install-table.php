<?php

global $wpdb;
$wpdb->query("
CREATE TABLE IF NOT EXISTS `location_grid` (
  `grid_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `level` float DEFAULT NULL,
  `level_name` varchar(7) DEFAULT NULL,
  `country_code` varchar(10) DEFAULT NULL,
  `admin0_code` varchar(10) DEFAULT NULL,
  `admin1_code` varchar(20) DEFAULT NULL,
  `admin2_code` varchar(20) DEFAULT NULL,
  `admin3_code` varchar(20) DEFAULT NULL,
  `admin4_code` varchar(20) DEFAULT NULL,
  `admin5_code` varchar(20) DEFAULT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `admin0_grid_id` bigint(20) DEFAULT NULL,
  `admin1_grid_id` bigint(20) DEFAULT NULL,
  `admin2_grid_id` bigint(20) DEFAULT NULL,
  `admin3_grid_id` bigint(20) DEFAULT NULL,
  `admin4_grid_id` bigint(20) DEFAULT NULL,
  `admin5_grid_id` bigint(20) DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `latitude` float DEFAULT NULL,
  `north_latitude` float DEFAULT NULL,
  `south_latitude` float DEFAULT NULL,
  `east_longitude` float DEFAULT NULL,
  `west_longitude` float DEFAULT NULL,
  `population` bigint(20) NOT NULL DEFAULT '0',
  `population_date` date DEFAULT NULL,
  `modification_date` date DEFAULT NULL,
  `geonames_ref` bigint(20) DEFAULT NULL,
  `wikidata_ref` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`grid_id`),
  KEY `level` (`level`),
  KEY `latitude` (`latitude`),
  KEY `longitude` (`longitude`),
  KEY `admin0_code` (`admin0_code`),
  KEY `admin1_code` (`admin1_code`),
  KEY `admin2_code` (`admin2_code`),
  KEY `admin3_code` (`admin3_code`),
  KEY `admin4_code` (`admin4_code`),
  KEY `country_code` (`country_code`),
  KEY `parent_id` (`parent_id`),
  KEY `north_latitude` (`north_latitude`),
  KEY `south_latitude` (`south_latitude`),
  KEY `east_longitude` (`west_longitude`),
  KEY `west_longitude` (`east_longitude`),
  KEY `admin5_code` (`admin5_code`),
  KEY `admin0_grid_id` (`admin0_grid_id`),
  KEY `admin1_grid_id` (`admin1_grid_id`),
  KEY `admin2_grid_id` (`admin2_grid_id`),
  KEY `admin3_grid_id` (`admin3_grid_id`),
  KEY `admin4_grid_id` (`admin4_grid_id`),
  KEY `admin5_grid_id` (`admin5_grid_id`),
  KEY `level_name` (`level_name`),
  KEY `population` (`population`),
  FULLTEXT KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");

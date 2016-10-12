CREATE TABLE IF NOT EXISTS `persons` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `lastname` varchar(255) DEFAULT '',
  `birthdate` date,
  `password` varchar(255) DEFAULT '',
  `avatar` varchar(255) ,
  `cuil` varchar(14) DEFAULT '',
  `firstdate` date,
  `nickname` varchar(255) DEFAULT '',
  `gender` enum('M','F'),        
  `center` int(11) unsigned,
  `reference_tel` varchar(255) DEFAULT '',
  `reference_name` varchar(255) DEFAULT '',
  `family` blob ,
  `has_work` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `work_description` blob,
  `education_primary` varchar(255) DEFAULT '',
  `education_secondary` varchar(255) DEFAULT '',
  `has_occupation` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `occupation` blob ,
  `criminal_record` varchar(255) DEFAULT '',
  `criminal_situation` blob ,
  `other_diseases` blob ,
  `treatments` blob ,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int(11) unsigned,
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
);

           
           
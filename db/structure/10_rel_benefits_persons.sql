CREATE TABLE IF NOT EXISTS `benefits_by_persons` (
  `person_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `benefit_id` int(11) unsigned NOT NULL ,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`person_id`,`benefit_id`)
);

           
           
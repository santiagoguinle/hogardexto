CREATE TABLE IF NOT EXISTS `diseases_by_persons` (
  `person_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `disease_id` int(11) unsigned NOT NULL ,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`person_id`,`disease_id`)
);

           
           
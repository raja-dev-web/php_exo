CREATE TABLE `school`.`article` ( `id` INT NOT NULL AUTO_INCREMENT , `titre` VARCHAR(255) NOT NULL , `contenu` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;
INSERT INTO `article` (`id`, `titre`, `contenu`) VALUES (NULL, 'titre1', 'contenu1');
CREATE TABLE `school`.`user` ( `id` INT NOT NULL AUTO_INCREMENT , `email` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
ALTER TABLE `article` ADD `file_path` VARCHAR(255) NULL AFTER `contenu`;

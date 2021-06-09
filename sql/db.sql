CREATE TABLE `school`.`article` ( `id` INT NOT NULL AUTO_INCREMENT , `titre` VARCHAR(255) NOT NULL , `contenu` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;
INSERT INTO `article` (`id`, `titre`, `contenu`) VALUES (NULL, 'titre1', 'contenu1');
CREATE TABLE `school`.`user` ( `id` INT NOT NULL AUTO_INCREMENT , `email` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
ALTER TABLE `article` ADD `file_path` VARCHAR(255) NULL AFTER `contenu`;
CREATE TABLE `articles`.`register` ( `id` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `pass` VARCHAR(255) NOT NULL , `usertype` VARCHAR NOT NULL , PRIMARY KEY (`id`), UNIQUE (`email`)) ENGINE = InnoDB;
CREATE TABLE `articles`.`articles` ( `article_id` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NOT NULL , `content` TEXT NOT NULL , `date` DATETIME NOT NULL , `created_by_name` VARCHAR(255) NOT NULL , `created_by_email` VARCHAR(255) NOT NULL , PRIMARY KEY (`article_id`)) ENGINE = InnoDB;
CREATE TABLE `movies`.`user` ( `id` INT NOT NULL AUTO_INCREMENT , `nom` VARCHAR(255) NOT NULL , `prenom` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `pass` VARCHAR(255) NOT NULL , `usertype` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`), UNIQUE (`email`)) ENGINE = InnoDB;
CREATE TABLE `movies`.`movie` ( `id` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NOT NULL , `realisateur` VARCHAR(255) NOT NULL , `genre` VARCHAR(255) NOT NULL , `description` TEXT NOT NULL , `created_name` VARCHAR(255) NOT NULL , `created_email` VARCHAR(255) NOT NULL , `file_path` VARCHAR(255) NOT NULL , `date_time` DATETIME NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


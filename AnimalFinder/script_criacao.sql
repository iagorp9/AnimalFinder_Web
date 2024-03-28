SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

create database if not exists animal_finder;
use animal_finder;
create table if not exists animal(
	animal_code smallint primary key auto_increment,
	animal_name varchar(30),
	animal_color varchar(30) not null,
	animal_height decimal(10,2) not null,
	animal_address varchar(30) not null,
	animal_active tinyint not null
);
create table if not exists user(
	user_id smallint primary key,
    login varchar(30) not null,
    password char(60) not null
);
insert into user values (1,'animalfinder','$2y$10$wH1oAXYBTX3qRJfLGhDCOuYsiZNQBpwkbqYIGkAmZ/eYwd.r/dOGi');

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
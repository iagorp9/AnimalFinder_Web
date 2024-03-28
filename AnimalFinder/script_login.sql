create table if not exists user(
	user_id smallint primary key,
    login varchar(30) not null,
    password char(60) not null
);
insert into user values (1,'animalfinder','$2y$10$wH1oAXYBTX3qRJfLGhDCOuYsiZNQBpwkbqYIGkAmZ/eYwd.r/dOGi');
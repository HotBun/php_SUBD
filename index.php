<?php
//SQL
//CRUD, CREATE,READ, UPDATE, DELETE

//Create
// создание нового раздела
INSERT INTO `articles_categories`(`имя базы данных` ) (`title`(`раздел`)) VALUES ("SQL"("значение"));
// создание новой статьи
//NOW() - текущая дата
INSERT INTO `articles` (`title`, `text`, `categories_id`, `pabdate`) VALUES ("SQL-запросы", "Первый SQL запрос", "5", NOW());


//Read
//SELECT * - * выбрать все поля
//SELECT `title` - выбрать поле `title`
SELECT * FROM `articles_categories`
//Вернуть только эту запись
SELECT * FROM `articles` WHERE `title` = "заголовок статьи"
//Поиск по id
SELECT * FROM `articles` WHERE `id` = "1"
//Поиск по просмотрам
SELECT * FROM `articles` WHERE `views` < 100
//ORDER BY (``) = сортировка по
SELECT * FROM `articles` ORDER BY (`views`)
//ORDER BY `` DESC = сортировка по популярности
SELECT * FROM `articles` ORDER BY `views` DESC
//ORDER BY `` DESC limit n = вывести N статей 
SELECT * FROM `articles` ORDER BY `views` DESC limit 10
//ORDER BY `` DESC limit offset,views = offset - пропусти, views - покажи столько 
// Используется для пагинации
SELECT * FROM `articles` ORDER BY `views` DESC limit 2,10


//Update
//Изменить заголовок 
UPDATE `articles` SET `title` = "Hey, Hey,Hey" WHERE `id` = 1;
				таблица       раздел     новое значение         айди
//Изменить количество просмотров
UPDATE `articles` SET `views` = "69" WHERE `id` = 1;
//Изменить количество просмотров
UPDATE `articles` SET `views` = "views + 1" WHERE `id` = 1;

//Delete
//Удалить запись
DELETE FROM `articles` WHERE `id` = "4"
//Удалить несколько записей
DELETE FROM `articles` WHERE `id` = "5" OR `id` = "6"
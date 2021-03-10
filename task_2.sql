create table if not exists test_yii.articles
(
    id int auto_increment
    primary key,
    title varchar(255) not null,
    text varchar(500) not null,
    author_id int null,
    created_at date null,
    updated_at date null
    );

create table if not exists test_yii.authors
(
    id int auto_increment
    primary key,
    name varchar(255) not null,
    login varchar(500) not null,
    password varchar(255) not null,
    email varchar(255) not null
    );

create table if not exists test_yii.comments
(
    id int auto_increment
    primary key,
    text varchar(255) not null,
    date_create date null,
    ball int null,
    author_id int null,
    article_id int null
    );


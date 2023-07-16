-- collasion uft8mb4
-- charser  unicode_ci

CREATE DATABASE route_query collate utf8mb4_unicode_ci;
drop DATABASE route_query;

-- create table
CREATE TABLE users(
    `id` int unsigned primary key,
    `name` varchar(100) not null,
    `age`int,
    `email` varchar (150),
    `password` varchar(100) not null,
    `gender` enum('male','female') default 'male' not null,
    `phone` varchar (15)
);
drop table users;
-- 
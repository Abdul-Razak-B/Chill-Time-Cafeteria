-- create database if not exists
BEGIN
CREATE DATABASE db;
USE db;

-- table: user_info
create table user_info (
    id int (11) primary key,  
    username varchar(25) unique not null,  
    password varchar(100) not null,  
    email varchar(80),  
    phone varchar(30), 
    address text, 
    createTime datetime default CURRENT_TIMESTAMP
);

-- table: article_category
create table article_category (
    id int (11) primary key,    
    name varchar(50) unique not null
);
END
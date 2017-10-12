create database if not exists pruebas;
use pruebas;

create table if not exists t_persona(
id int auto_increment,
nombre varchar(50)not null,
apellido varchar(50)not null,
email varchar(50)not null,
telefono varchar(50)not null,
primary key(id)    

);

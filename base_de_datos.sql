drop database if exists Loggin;
create database Loggin;
use Loggin;

create table User(
    nombre_y_apellido varchar(30) not null,
    mail varchar(15) not null primary key,
    nombre_cuenta varchar(15) not null,
    contraseña varchar(20) not null
);

create table Logg_in_user(
    nombre_cuenta varchar(30) not null,
    mail varchar(15) not null,
    contraseña varchar(20) not null,
    foreign key (mail) references User(mail)
);
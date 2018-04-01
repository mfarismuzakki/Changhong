create database yods;
use yods;

create table akun(
	id_akun int primary key AUTO_INCREMENT,
	username varchar(20) not null,
	password varchar(30) not null,
	email varchar(40) not null
);
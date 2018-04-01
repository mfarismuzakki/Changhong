create database changhong;
use changhong;

create table akun(
	id_akun int primary key AUTO_INCREMENT,
	username varchar(20) not null,
	password varchar(30) not null,
	email varchar(40) not null,
	fullname varchar(50),
	biodata varchar(100),
	foto varchar(100)
);
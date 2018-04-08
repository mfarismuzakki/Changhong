create database changhong;
use changhong;

create table akun(
	id_akun int primary key AUTO_INCREMENT,
	username varchar(20) not null,
	password varchar(100) not null,
	email varchar(40) not null,
	fullname varchar(50),
	biodata varchar(100),
	foto varchar(100)
);

create table thread(
	id_thread int primary key AUTO_INCREMENT,
	title varchar(30) not null,
	content varchar(500) not null,
	timeupload date not null,
	owner int not null,
	foreign key (owner) references akun(id_akun) 
);
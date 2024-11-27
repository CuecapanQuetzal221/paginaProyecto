-- donde exista una db con el mismo nombre la elimina
drop schema if exists web_db;

-- se crear la DB 
create schema  if not exists web_db default  character set utf8 collate  utf8_spanish2_ci;
USE web_db; 

-- se crear la tabla
CREATE TABLE  persona(
	folio int(11) NOT NULL ,  
	nombre text not null,
	curp text not null,
	numero_de_cuenta int(10) not null,
    carrera text not null,
	direccion text not null,
	telefono varchar (10) not null,
	email text not null,
	password varchar (8) not null,
	fecha_registro datetime not null default current_timestamp,
	permisos int (11) not null default '2'
)engine=Innodb default charset=utf8;
select * from persona;
ALTER TABLE web_db.persona 
CHANGE COLUMN folio folio INT(11) NOT NULL AUTO_INCREMENT ,
ADD PRIMARY KEY (folio);
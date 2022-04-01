-- crear una base de datos
create database dbTienda

-- usar la base de datos
use dbTienda 

-- crear una tabla
create table Clientes (
	id int not null primary key auto_increment,
	nombre varchar(100) not null,
	celular varchar(10) null,
	correo varchar(50)
)

-- insertar datos a una tabla
insert into clientes values ( 1, 'Juan Perez' , '76543210' , 'juan@gmail.com' )

-- insertar datos a una tabla
insert into clientes (nombre,celular,correo) values ( 'Maria Delgado' , '77665544' , 'maria@gmail.com' )

-- eliminar datos de una tabla
delete from clientes where id = 3

-- editar datos de una tabla
update clientes set correo = 'perez@gmail.com' , celular = '66000001' where id = 1

-- mostrar datos de una tabla
select id , nombre , correo , celular from clientes
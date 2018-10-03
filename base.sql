create table usuario(

id int primary key auto_increment not null,
nombre varchar(50) not null,
apellido VARCHAR(50) not null,
documento int not null,
fecha_nacimiento date not null
);
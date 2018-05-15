create table tipoUsuario (
id_tipo smallint not null,
tipo varchar(7),
PRIMARY KEY (id_tipo)
);

create table usuarios (
id_usuario serial not null,
nombre varchar(20) not null,
apPaterno varchar(20) not null,
apMaterno varchar(20) not null,
telefono  varchar(10) not null,
correo varchar(40) not null,
usuario varchar(20) not null,
contrasena varchar(32) not null,
id_tipo serial not null,
PRIMARY KEY (id_usuario),
FOREIGN KEY (id_tipo) REFERENCES tipoUsuario (id_tipo)

);

create table direccion (
id_direccion serial not null,
ciudad varchar(20) not null,
calle varchar(30) not null,
numero varchar(5) not null,
numero_int varchar(4) not null,
colonia varchar(30) not null,
delegacion varchar(25) not null,
cp smallint not null,
id_usuario serial not null,


PRIMARY KEY (id_direccion),
FOREIGN KEY (id_usuario) REFERENCES usuarios (id_usuario)

);

create table venta (
id_venta serial not null,
fecha date not null,
id_usuario serial not null,

PRIMARY KEY (id_venta),
FOREIGN KEY (id_usuario) REFERENCES usuarios (id_usuario)

);

create table descuento (
id_descuento serial not null,
descuento smallint not null,

PRIMARY KEY (id_descuento)
);

create table autores (
id_autor serial not null,
nombre varchar(20) not null,
apellido varchar(20) not null,

PRIMARY KEY (id_autor)
);

create table editoriales (
id_editorial serial not null,
nombre varchar(20) not null,

PRIMARY KEY (id_editorial)
);

create table comics (
id_comic serial not null,
titulo varchar(30) not null,
cantidad smallint not null,
precio smallint not null,
url varchar(30) not null,
id_editorial serial not null,
id_descuento serial not null,

PRIMARY KEY (id_comic),
FOREIGN KEY (id_editorial) REFERENCES editoriales (id_editorial),
FOREIGN KEY (id_descuento) REFERENCES descuento (id_descuento)

);


create table ventaXcomics (
id_comic serial not null,
id_venta serial not null,
FOREIGN KEY (id_comic) REFERENCES comics (id_comic),
FOREIGN KEY (id_venta) REFERENCES venta (id_venta)
);

create table autoresXcomics (
id_autor serial not null,
id_comic serial not null,
FOREIGN KEY (id_autor) REFERENCES autores (id_autor),
FOREIGN KEY (id_comic) REFERENCES comics (id_comic)
);

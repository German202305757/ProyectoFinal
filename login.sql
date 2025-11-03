-- Hoja de trucos
create table tipos_usuario (
	id_tipo tinyint auto_increment primary key,
    nombre varchar (60) not null,
    descripcion varchar(500)
);

create table users(
	usuario_id int auto_increment primary key,
    nombre varchar (60) not null,
    email VARCHAR(100) not null unique,
    password varchar(100) not null,
    tipo_usuario tinyint not null,
    constraint fk_tipo_usuario foreign key (tipo_usuario) references tipos_usuario (id_tipo)
    on update cascade
    on delete cascade
);

INSERT INTO tipos_usuario (nombre, descripcion) VALUES
(
    'Administrador',
    'Acceso total al sistema. Puede gestionar usuarios, configuraciones y todo el contenido.'
),
(
    'Editor',
    'Puede crear, editar y eliminar contenido (como artículos o productos), pero no puede gestionar usuarios.'
),
(
    'Cliente',
    'Usuario estándar. Solo puede ver su propio perfil, realizar compras o consumir el contenido.'
);

INSERT INTO users (nombre, email, password, tipo_usuario) VALUES
(
    'admin',
    'admin@mp.com',
    'uno!',
    1  -- ID 1 = Administrador
),
(
    'Lenin',
    'lenin@mp.com',
    'uno!',
    2  -- ID 2 = Editor
),
(
    'Pablo de Paz',
    'pablo@mp.com',
    'uno!',
    3  -- ID 3 = Cliente
),
(
    'German Aceituno',
    'german@mp.com',
    'uno!',
    3  -- ID 3 = Cliente
),
(
    'Alvaro Mateo',
    'alvaro@mp.com',
    'uno!',
    2  -- ID 2 = Editor
);

select * from users;
select * from tipos_usuario;
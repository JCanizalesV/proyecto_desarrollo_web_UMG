-- tabla empleados
CREATE TABLE solicitud_empleo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fecha_hora TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    puesto VARCHAR(100) NOT NULL,
    medio VARCHAR(100),
    otra_plaza VARCHAR(100),
    pretension DECIMAL(10, 2),
    horario VARCHAR(13),
    hora_inicio TIME,
    hora_fin TIME,
    fin_de_semana VARCHAR(2),
    turnos_rotativos VARCHAR(2),
    inicio_labores VARCHAR(30),
    disponibilidad_viajar VARCHAR(2),
		
		-- Datos Personales
		nombres VARCHAR(100) NOT NULL,
    apellido_p VARCHAR(50) NOT NULL,
    apellido_m VARCHAR(50),
    lugar_nacimiento VARCHAR(100),
    fecha_nacimiento DATE,
    direccion_actual VARCHAR(255),
    zona VARCHAR(30),
    estado_civil VARCHAR(15),
    dpi VARCHAR(20),
    extendido VARCHAR(20),
    nit VARCHAR(20),
    telefono_casa VARCHAR(15),
    telefono_celular VARCHAR(15),
    telefono_emergencias VARCHAR(15),
    afiliacion_igss VARCHAR(50),
    carne_irtra VARCHAR(50),
    pasaporte VARCHAR(50),
    licencia VARCHAR(50),
    religion VARCHAR(50),
    tipo_sangre VARCHAR(10),
    email VARCHAR(50),
		
		-- Datos Familiares
		nombre_padre VARCHAR(50),
		edad_padre varchar (3),
		trabajo_padre VARCHAR (30),
		telefono_padre varchar (15),
		nombre_madre VARCHAR(50),
		edad_madre varchar (3),
		trabajo_madre VARCHAR (30),
		telefono_madre varchar (15),
		nombre_conyuge VARCHAR(50),
		edad_conyuge varchar (3),
		trabajo_conyuge VARCHAR (30),
		telefono_conyuge varchar (15),
		nombre_hijo1 VARCHAR(50),
		edad_hijo1 varchar (3),
		trabajo_hijo1 VARCHAR (30),
		telefono_hijo1 varchar (15),
		nombre_hijo2 VARCHAR(50),
		edad_hijo2 varchar (3),
		trabajo_hijo2 VARCHAR (30),
		telefono_hijo2 varchar (15),
		nombre_hermano1 VARCHAR(50),
		edad_hermano1 varchar (3),
		trabajo_hermano1 VARCHAR (30),
		telefono_hermano1 varchar (15),
		nombre_hermano2 VARCHAR (50),
		edad_hermano2 varchar (3),
		trabajo_hermano2 VARCHAR (30),
		telefono_hermano2 varchar (15),
		
		-- Datos Estudios
		
		grado_primaria VARCHAR(50),
    institucion_primaria VARCHAR(50),
    anio_primaria varchar(5),
    grado_secundaria VARCHAR(50),
    institucion_secundaria VARCHAR(50),
    anio_secundaria VARCHAR(5),
    grado_diversificado VARCHAR(50),
    institucion_diversificado VARCHAR(50),
    anio_diversificado VARCHAR(5),
    grado_universitario VARCHAR(50),
    institucion_universitaria VARCHAR(50),
    anio_universitaria VARCHAR(5),
    grado_postgrado VARCHAR(50),
    institucion_postgrado VARCHAR(50),
    anio_postgrado VARCHAR(5),
    estudia_actualmente VARCHAR(2),
    carrera_actual VARCHAR(50),
    institucion_actual VARCHAR(50),
    horario_actual VARCHAR(50),
    windows VARCHAR(2),
    office VARCHAR(2),
    bases_datos VARCHAR(2),
    otros_lenguajes VARCHAR(2),
    detalles_lenguajes VARCHAR(50),
    otros_cursos VARCHAR(2),
    detalles_cursos VARCHAR(50),
		
		-- Otras habilidades
		habilidades VARCHAR(50),
		ingles_hablado VARCHAR(3),
		ingles_escrito VARCHAR(3),
		otros_idiomas VARCHAR(2),
		idioma VARCHAR(25),
		idioma_hablado VARCHAR(3),
		idioma_escrito VARCHAR(3),
		estatus VARCHAR(15)
		
		
);


-- Tabla usuarios
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL UNIQUE,
    contraseña VARCHAR(255) NOT NULL,
    tipo_rol ENUM('admin', 'rrhh') NOT NULL,
    fecha_hora_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



-- Tabla CC
create table tbl_cc (

id_cc INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
codigo varchar (4),
centro_de_costo VARCHAR (50)

);



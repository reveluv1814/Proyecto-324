create table FlujoProceso(
    Flujo VARCHAR(3),
    Proceso VARCHAR(3),
    ProcesoSiguiente VARCHAR(3),
    Tipo VARCHAR(1),
    Pantalla VARCHAR(20),
    Rol VARCHAR(20)
);

create table FlujoProcesoCondicionante(
    Flujo VARCHAR(3),
    Proceso VARCHAR(3),
    ProcesoSI VARCHAR(3),
    ProcesoSISig VARCHAR(3),
    ProcesoNO VARCHAR(3),
    ProcesoNOSig VARCHAR(11),
    estado VARCHAR(3)
);
 
create table FlujoProcesoSeguimiento
(
    idflujoseg SERIAL,
    Flujo VARCHAR(3),
    Proceso VARCHAR(23),
    NumeroSolicitud int,
    Usuario VARCHAR(15),
    FechaInicio DATE,
    HoraInicio TIME,
    FechaFin DATE,
    HoraFin TIME,
    constraint PK_FlujoProcesoSeguimiento primary key (idflujoseg)
);

insert into FlujoProceso values('F1','P1','P2','I','Inicio','RepFrente');
insert into FlujoProceso values('F1','P2','P3','P','Documentos','RepFrente');
insert into FlujoProceso values('F1','P3','P4','P','Presentar','RepFrente');
insert into FlujoProceso values('F1','P4','P5','P','Recepcionar','Secretaria');
insert into FlujoProceso values('F1','P5','P6','P','Entregar','Secretaria');
insert into FlujoProceso values('F1','P6',null,'C','Aceptado','TribElectoral');
insert into FlujoProceso values('F1','P7',null,'F','CausaNegativa','TribElectoral');
insert into FlujoProceso values('F1','P8','P9','P','ControlDocumentos','TribElectoral');
insert into FlujoProceso values('F1','P9','P10','P','EnviarNoti','TribElectoral');
insert into FlujoProceso values('F1','P10',null,'P','RecibeNotifi','RepFrente');
/*flujo 2*/
insert into FlujoProceso values('F2','P1','P2','I','Inicio','Alumno');
insert into FlujoProceso values('F2','P2','P3','P','Documentos','Alumno');
insert into FlujoProceso values('F2','P3','P4','P','Presentar','Alumno');
insert into FlujoProceso values('F2','P4',null,'C','AlDia','Kardex');
insert into FlujoProceso values('F2','P5',null,'F','CausaNegativa','Kardex');
insert into FlujoProceso values('F2','P6','P7','P','PagoInscripcion','Kardex');
insert into FlujoProceso values('F2','P7','P8','P','ControlDocumentos','Kardex');
insert into FlujoProceso values('F2','P8','P9','P','ElegirCarrera','Alumno');
insert into FlujoProceso values('F2','P9','P10','P','Confirmacion','Alumno');





insert into flujoprocesocondicionante values('F1','P5','P6','P8','P7','P9');
insert into flujoprocesocondicionante values('F2','P3','P4','P6','P5','FinProceso');
create table Usuario
(
    id int,
    Nomusuario VARCHAR(25)
);

insert into Usuario values(1,'ngraneros');
insert into Usuario values(2,'gpocoma');
insert into Usuario values(3,'gnova');
insert into Usuario values(4,'secreDoris');
insert into Usuario values(5,'TribunalE');
insert into Usuario values(6,'KardEx');
insert into Usuario values(7,'rsalazar');
insert into Usuario values(8,'LCuba');

/*/DELETE from usuario;*/
create table Rol
(
    IDrol int,
    namerol VARCHAR(25)
);
insert into Rol values(1,'RepFrente');
insert into Rol values(2,'Secretaria');
insert into Rol values(3,'TribElectoral');
insert into Rol values(4,'Alumno');
insert into Rol values(5,'Kardex');

create table RolUsuario
(
    IdRol int,
    Idusuario int
);
insert into RolUsuario values(1,1);
insert into RolUsuario values(1,2);
insert into RolUsuario values(1,3);
insert into RolUsuario values(2,4);
insert into RolUsuario values(3,5);
insert into RolUsuario values(4,7);
insert into RolUsuario values(4,8);
insert into RolUsuario values(5,6);
/*////////////////////////////*/
create table Frente
(
    IdFrente serial,
    nusuario VARCHAR(25),
    nomFrente VARCHAR(25),
    nomCandidato VARCHAR(25),
    ciIdentidad VARCHAR(25),
    cNacimiento VARCHAR(25),
    Cantiguedad VARCHAR(25),
    Ctitulo VARCHAR(25),
    constraint PK_Frente primary key (IdFrente)
);


create table Entrega
(
    IdEntrega serial,
    IdFrente int,
    horaEntrega TIME,
    Fecha DATE,
    constraint PK_Entrega primary key (IdEntrega)
);
create table Recepcion
(
    IdRecepcion serial,
    IdAlumno int,
    horaEntrega VARCHAR(25),
    Fecha VARCHAR(25),
    constraint PK_Recepcion primary key (IdRecepcion)
);

create table Notifica
(
    estado VARCHAR(15),
    idtribunal int,
    idusuario int,
    descripcion VARCHAR(100)
);
/*DROP Table frente

SELECT * from rol*/
/* flujo 2*/
create table Alumno
(
    IdAlumno serial,
    nomusuario VARCHAR(25),
    nombrec VARCHAR(25),
    cidentidad VARCHAR(25),
    cnacimiento VARCHAR(25),
    constraint PK_Alumno primary key (IdAlumno)
);
create table Inscripcion
(
    IdInscripcion serial,
    idalumno int,
    pagoinscripcon VARCHAR(15),
    carrera VARCHAR(15),
    constraint PK_Inscripcion primary key (IdInscripcion)
);
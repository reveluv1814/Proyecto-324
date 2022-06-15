# Proyecto INF-324
> ## Integrante:
> Nombre: Neil Angel Graneros Flores.
>
> CI: 9911843 LP.

## Comentarios del Proyecto.
El proyecto lo relicé de forma individual con las sentencias 1 y 3.
Este proyecto fue realizado en Docker, ya que trabajar en contenedores es mucho más viable. Además de Webgl 2.0 para la creación de la sentencia 3.

## Base de Datos.
Para la base de datos se uso **Postgres**, con una conexión con **Docker**.

## Flujos de Proceso.
Se hicieron dos flujos de procesos. El primero *Flujo de Proceso para la inscripción y recepción de frentes a la direccion de la carrera*, el segundo *Flujo de Proceso para la inscripción a una carrera*.

## Web-GL.
Para la sentencia 3 use Web-GL 2.0, creando mis propias figuras y cámara. Aplicando Matrices de Vista, Proyección y Colores.

## ¿Cómo ejecutar los proyectos?

Primeramente debemos de tener intalado [Docker](https://www.docker.com). Despues de que ya lo tengamos instalado realizamos un **git clone** a este repositorio.
```
git clone https://github.com/reveluv1814/Proyecto-324.git
```
Ingresando a la carpeta principal del proyecto debe teclear el siguiente comando para iniciar los contenedores:
```
docker-compose up
```
Se descargará todas las dependencias y paquetes necesarios para nuestros contenedores. Cuando termina la descarga ya puede ingresar a los incisos dados.

## ¿Cómo crear la BD?
Instalar una extensión en **VSCode**, la extensión en cuestión es **[MySql](https://marketplace.visualstudio.com/items?itemName=cweijan.vscode-mysql-client2)**.
Crear una nueva conexión y poner los datos de la BD que se muestran en el archivo **ocker-compose.yaml**.

## Conclusiones
Se realizó el proyecto experimentando con Docker tecnología que recientemente vi y me animé a solucionar el examén con estos entornos. Muchas gracias Licenciado si se tomó el tiempo de leer este apartado.

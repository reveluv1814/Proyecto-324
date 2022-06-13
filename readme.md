# Proyecto INF-324
> Nombre: Neil Angel Graneros Flores.
>
> CI: 9911843 LP.

## Comentarios del Proyecto.
Este examen Licenciado lo realicé en Docker, ya que trabajar en contenedores es mucho más viable.

## Base de Datos.
Para la base de datos se uso **Postgres**, con una conexión con **Docker**.

## Diagramas de Proceso.
Para la creación de los diagramas use dos herramientas. **diagrams.net** para el diagrama de procesos y **Power Designer** para el modelo BPMN.

## Tratado de Imágenes.
Para la sentencia 3 use estructuras, por tal motivo el tiempo de ejecución es elevado, por los fors anidados, hay muchas más formas de optimizarlo pero ya no pude aplicarlos, funciona pero el tiempo de ejecucción es un factor para tomar en cuenta.

## ¿Cómo ejecutar los proyectos?

Primeramente debemos de tener intalado [Docker](https://www.docker.com). Despues de que ya lo tengamos instalado realizamos un **git clone** a este repositorio.
```
git clone https://github.com/reveluv1814/SegundoExamen324.git
```
Ingresando a la carpeta principal del proyecto debe teclear el siguiente comando para iniciar los contenedores:
```
docker-compose up
```
Se descargará todas las dependencias y paquetes necesarios para nuestros contenedores. Cuando termina la descarga ya puede ingresar a los incisos dados.

## ¿Cómo crear la BD?
Instalar una extensión en **VSCode**, la extensión en cuestión es **[MySql](https://marketplace.visualstudio.com/items?itemName=cweijan.vscode-mysql-client2)**.
Crear una nueva conexión y poner los datos de la BD que se muestran en el archivo **ocker-compose.yaml**.

## Conclusiiones
Se logró completar el examen experimentando con Docker tecnología que recientemente vi y me animé a solucionar el examén con estos entornos. Muchas gracias Licenciado si se tomó el tiempo de leer este apartado.

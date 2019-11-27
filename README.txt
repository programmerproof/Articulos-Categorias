# Articulos-Categorias


Laravel version: (5.5.48)
php        version: (7.0.29)
postgres   version: (5.0.12)
apache     version: (2.4.33)

## Requerimientos

- Laravel framework >= 5.5 o superior
- Apache Server >= 1.3 o superior
- PHP >= 7.0 o superior
- mysql >= 3.21 o superior

## Instalación

Descarga paquete.

- https://getcomposer.org/download/
- https://laravel.com/laravel.phar
- https://httpd.apache.org/download.cgi
- http://php.net/downloads.php
- https://dev.mysql.com/downloads/mysql/

## Documentación

- https://laravel.com/docs/6.x
- https://httpd.apache.org/docs/
- http://php.net/docs.php
- https://dev.mysql.com/doc/

## Configuración

Al crear el proyecto se debe parametrizar las siguientes lineas en archivo ._env:

Configurar función de conexión a servidor y base de datos -> línea 8:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=julianbaquero
DB_USERNAME=root
DB_PASSWORD=null

- Base de datos: julianbaquero

## Versión
v1.0

## Licencia
[MIT License](LICENSE)


# Documentación

#### Instalacion y ejecución
1. Descargar archivos del proyecto. 

2. Colocar en ubicación del equipo donde este instalado el servidor web. 

3. Actualizar proyecto via composer mediante el comando=>(composer update). 

4. Configurar archivo ._env 

4. Generar base de datos mediante el comando=>(php artisan migrate).

5. Generar regiastros en la tablas de la base de datos mediante el comando=>(php artisan make:seeder).

6. Ejecutar aplicación: Abrir navegador de preferencia y ejecutar url de acuerdo a configuración del servidor web instalado en el equipo.
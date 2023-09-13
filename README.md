# Ejercicio APIREST Customers (Proyecto Laravel 10 con Jetstream) 🚀

## Requerimientos mínimos 📋

El marco de trabajo Laravel tiene algunos requerimientos de sistema. Debes asegurarte de que tu servidor web o local tenga la siguiente versión mínima de PHP y extensiones:

-   PHP >= 8.1
-   Extensión PHP Ctype
-   Extensión PHP cURL
-   Extensión PHP DOM
-   Extensión PHP Fileinfo
-   Extensión PHP Filter
-   Extensión PHP Hash
-   Extensión PHP Mbstring
-   Extensión PHP OpenSSL
-   Extensión PHP PCRE
-   Extensión PHP PDO
-   Extensión PHP Session
-   Extensión PHP Tokenizer
-   Extensión PHP XML

## Pasos para la instalación 🔧

1. Primero, abre la terminal GIT BASH y ejecuta el comando `git clone [ruta del proyecto]` para contar con este proyecto en tu máquina local.
2. Ahora, ejecuta el siguiente comando para compilar los activos: `npm install && npm run dev`
3. Finalmente, necesitamos ejecutar el comando de migración para crear la tabla de la base de datos: `php artisan migrate`

El proyecto cuenta con las tablas [customers, regions y communes]

4. Ejecuta el comando `php artisan db:seed` para ejecutar los archivos semillas del que contiene las regiones y comunas establecidas

## Configura el nombre de la base de datos en tu archivo .env 🔑

[Nombre de la base de datos = restful_customer]

Por último, puedes acceder a la documentación de la API en Postman a través de este link para comenzar a trabajar en proyecto.
Link Documentación API = [https://documenter.getpostman.com/view/28869176/2s9YC4VYxw]

## Guardado de Archivos Logs de entrada y salida 📄

El archivo log se guarda en la ruta [storage/logs/laravel.log]

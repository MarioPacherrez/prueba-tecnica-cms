Pasos para ejecutar el proyecto:

- Descargar o clonar el proyecto desde el repositorio
- Probar conexión del Mongo DB
- Crear la base de datos con el nombre de: cms-mongodb
- Instalar el controlador de MongoDB para PHP:
  - Ingresar al sgte link: https://www.php.net/manual/es/mongodb.installation.windows.php
  - Luego en está página encontrarás el sgte link: https://pecl.php.net/package/mongodb
  - Descargar el DLL más estable para este caso fue el 1.13.0, descomprimir el paquete
  - Luego copiar los archivos php_mongodb.dll y php_mongodb.pdb de los archivos descomprimidos, y pegarlos en donde tengamos instalado la versión de php que estamos usando.
  - Para este caso estamos usando Xampp, por lo que pegaremos estos dos archivos en esta ruta: C:\xampp\php\ext, si teníamos levantado algún servicio tenemos que reiniciar el servicio.
  - Ahora tenemos que habilitar la extensión, para ello y para nuestro caso vamos a la ruta: C:\xampp\php y buscamos el archivo php.ini
  - Luego agregamos la sgte línea extension=php_mongodb.dll en la parte donde se tienen escrito más extensiones en la parte final de la sección de Dynamic Extensions
  - Con este ya tendríamos configurado nuestro ambiente y conexión con MongoDB

- Ahora accederemos a nuestro proyecto con el editor que usemos
- Luego abriremos una consola e ingresaremos a través de este a nuestro proyecto
- Una vez ya situado en la terminal ejecutaremos npm install y composer install
- Luego también ejecutaremos los sgtes comando:
  - composer require mongodb/mongodb
  - composer require jenssegers/mongodb
- Despúes procederemos a configurar la conexión de nuestro proyecto en laravel con MongoDB, para ello podemos guiarnos del sgte link: https://github.com/jenssegers/laravel-mongodb
- Ahora configuraremos nuestro archivo .env de nuestro proyecton modificando estas sgte líneas:
    DB_CONNECTION=mongodb
    DB_HOST=127.0.0.1
    DB_PORT=27017
    DB_DATABASE=cms-mongodb
    DB_USERNAME=root
    DB_PASSWORD=
- No olvidar agregar la sgte línea en config/app.php según el link mencionado anteriormente donde se describe esos detalles:
  - Jenssegers\Mongodb\MongodbServiceProvider::class,
- Luego proceder a correr las migraciones
- Proceder a ejecutar los seeders y factories
- Ejecutar comando para levantar y ejecutar el proyecto, para nuestro caso: php artisan serve
- Hacer uso del sistema y proceder a probar las funcionalidades realizadas
- Si hubiera alguna duda o tiene problemas en levantar y ejecutar el proyecto, comunicarse conmigo. Gracias!.
# prueba-tecnica-Innclod
Repositorio creado con el fin de dar alcance al codigo fuente de la prueba
# version de PHP
PHP 8.2.12
# Version de componser
Composer 2.7.6
# version Laravel framework
^11.0.1
# Pasos para correr el proyecto
1. Tener previamente instalado PHP, COMPOSER, LARAVEL
2. hacer un clone del proyecto: https://github.com/ContrerasCristian/prueba-tecnica-Innclod.git
3. Correr el comando composer install, esto con el fin de tener las dependencias necesarias
4. Configurar el archivo .env apuntando al servidor de base de datos ya que este puede variar, ajustar segun necesidad
5. Se tiene que generar una nueva llave de aplicacion correr comando en la terminal php artisan key:generate
6. Una vez realizado los pasos previos, tenemos que correr las migraciones con el comando en terminal php artisan migrate
7. Ya con esto podremos correr el comando php artisan serve para probar la aplicacion

# Login de usuario
1. se crea modulo de autenticacion que permite creacion de usuario y login de este mismo.

# Orm utilizado
1. Eloquent

 

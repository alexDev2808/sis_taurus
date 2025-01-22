
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


# Instalacion

1. Clonar el repositorio
2. Ejecutar `$ composer install`
3. Copiar el .env `$ cp .env.example .env`
4. Crear un nuevo API KEY `$ php artisan key:generate`
5. Cambiar el nombre de la base de datos y credenciales en el .env
6. Ejecutar(Solo si la DB no es SQL Server) `$ php artisan migrate`
7. Opcional. Si hay seed: `php artisan migrate --seed`
8. Ejecutar `$ npm install`
9. Clonar el repositorio para las validadciones en 'ES' -> `$ git clone https://github.com/MarcoGomesr/laravel-validation-en-espanol.git resources/lang`
10. Crear enlace simbolico para visualizar imagenes: `$ php artisan storage:link`

### Configuracion para conectar con SQL Server
1. Descargar los drivers para PHP y OBDC
2. En el .env se debe configurar:
``` 
DB_CONNECTION=sqlsrv
DB_HOST=NombreDelHost
DB_PORT=1433
```
3. En el config/database.php se debe tener la siguiente configuración:
```
        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'encrypt' => env('DB_ENCRYPT', 'yes'),
            'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'yes'),
        ],
```
4. Se crea la DB en SQL server
5. Se ejecuta `$ php artisan migrate`

#### Levantar el servidor
Ejecutar `$ php artisan serve` y `$ npm run dev`

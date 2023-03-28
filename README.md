<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Proyecto "empresas"

-   Crear proyecto:

```shell
laravel new empresas
```

### Requisitos

#### R1: Instalar autentificación

1. Requerir _Breeze_. Nos trae una carperta dentro de **vendor/laravel** llamada **breeze**.
    ```shell
    composer require laravel/breeze --dev
    ```
2. Instalar _Breeze_ en nuestro proyecto. Nos instala las dependencias de _Node_ y _Vite_.

    ```shell
    php artisan breeze:install
    ```

3. Instalar la herramientas de front que aparecen en [**_package.json_**](./package.json).

    ```shell
    npm install
    ```

4. Configurar el servidor de base de datos
    - Fichero [**_docker-composer.yml_**](./docker-compose.yml)
    - Configurar el fichero [**_.env_**](./.env) para conectar con la base de datos.
    ```shell
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=23306
    DB_DATABASE=empresa
    DB_USERNAME=usuario
    DB_PASSWORD=usuario
    ```
5. Ejecutar migraciones
    ```shell
    php artisan migrate
    ```

-   Clonar proyecto

1. Descargar proyecto de github.

```shell
git clone <<url proyecto>>
cd <<nombre proyecto>>
```

[ Diseño_pantallas ](./doc/diseño_layout.md)

## Trabajar con tablas

Hay que crear un modelo por cada tabla:

```shell
php artisan make:model Producto --all
```

Nos crea toda la extructura (Model, Factory, Migration, Seeder, Request, Controller, Policy).

Para nuestro caso con la tabla **producto** que ya esta creada nos sobran (Factory, Migration, Seeder). Borramos los ficheros que se han creado hacer `make:model --all`.

En [_ProductoController.php_](./app/Http/Controllers/ProductoController.php) nos ha creado los metodos (_index()_, _create()_, _show()_, _edit()_, _update()_ y _destroy()_).

Podemos ver las rutas creadas: `php artisan route:list`

```shell
GET|HEAD  productos ...,,,,,,,,,,.... productos.index › ProductoController@index
POST      productos ................. productos.store › ProductoController@store
GET|HEAD  productos/create .......... productos.create › ProductoController@create
GET|HEAD  productos/{producto} ...... productos.show › ProductoController@show
PUT|PATCH productos/{producto} ...... productos.update › ProductoController@update
DELETE    productos/{producto} ...... productos.destroy › ProductoController@destroy
GET|HEAD  productos/{producto}/edit . productos.edit › ProductoController@edit
```

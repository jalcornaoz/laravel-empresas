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

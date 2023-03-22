# Layout

-   Creamos el layout siguiendo las especificaciones
-   Para ello añadimos las clases en [**_tailwind.config.css_**](../tailwind.config.js)

```json
height: {
            "10vh": "10vh",
            "15vh": "15vh",
            "65vh": "65vh",
        },
        colors: {
            header: "#E6621F",
            nav: "#EDEDEE",
            main: "#FFFFFF",
            footer: "#898989",
        },
```

-   Creamos el fichero [**_layout.blade.php_**](../resources/views/layout.blade.php).

*   Creamos el fichero [**_main.blade.php_**](../resources/views/main.blade.php) que extiende de _layout_.
*   Creamos la ruta en [**_web.php_**](../routes/web.php)

```php
Route::view('/', 'main');
```

-   En el navegador vamos a la url "localhost:8000" una vez que hayamos levantando el servidor web y vite.

```shell
php artisan serve &
npm run dev
```

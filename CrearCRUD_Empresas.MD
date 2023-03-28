# CRUD Empresas en Laravel

1. Creamos el modelo de la tabla empresas

```shell
php artisan make:model Empresa --all
```

2. Modificamos el fichero [create_empresas_table.php](./database/migrations/2023_03_22_125009_create_empresas_table.php) en la carpeta *migrations*, añadiendo las columnas necesarias para nuestra tabla.
3. Para poblar nuestra tabla añadimos los campos que queremos que se generen en nuestra tabla dentro del fichero [EmpresaFactory.php](./database/factories/EmpresaFactory.php) y en el fichero [EmpresaSeeder.php](./database/seeders/EmpresaSeeder.php) le decimos cuantos registros queremos que nos genere.
4. Hacemos la migración
```shell
php artisan migrate:fresh --seed
```
5. En [web.php](./routes/web.php) creamos las rutas para todos los recursos de Empresa
```php
Route::resource('empresas', EmpresaController::class);
```
Podemos ver las rutas que tenemos creadas para Empresa
```shell
$ php artisan route:list
GET|HEAD    empresas ................. empresas.index › EmpresaController@index
POST        empresas ................. empresas.store › EmpresaController@store
GET|HEAD    empresas/create .......... empresas.create › EmpresaController@create
GET|HEAD    empresas/{empresa} ....... empresas.show › EmpresaController@show
PUT|PATCH   empresas/{empresa} ....... empresas.update › EmpresaController@update
DELETE      empresas/{empresa} ....... empresas.destroy › EmpresaController@destroy
GET|HEAD    empresas/{empresa}/edit .. empresas.edit › EmpresaController@edit
```
6. Ahora tenemos que implementar el código para cada metodo de [EmpresaController.php](./app/Http/Controllers/EmpresaController.php) e ir creando las vistas necesarias dentro de *resources/views*

- Cosas a tener en cuenta mientras implementamos el código
    - Modificar [StoreEmpresaRequest.php](./app/Http/Requests/StoreEmpresaRequest.php) y [UpdateEmpresaRequest.php](./app/Http/Requests/UpdateEmpresaRequest.php) para darle permisos de **Store** y **Update**:
    ```php
    public function authorize(): bool
    {
        return true;
    }
    ```
    - En [Empresa.php](./app/Models/Empresa.php) hay que decir que campos podemos modificar:
    ```php
    protected $fillable = ['nombre','direccion'];
    ```




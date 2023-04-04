# CRUD Empresas en Laravel

1. Creamos el modelo de la tabla empresas

```shell
php artisan make:model Empresa --all
```

2. Modificamos el fichero [create_empresas_table.php](./database/migrations/2023_03_22_125009_create_empresas_table.php) en la carpeta _migrations_, añadiendo las columnas necesarias para nuestra tabla.
3. Para poblar nuestra tabla añadimos los campos que queremos que se generen en nuestra tabla dentro del fichero [EmpresaFactory.php](./database/factories/EmpresaFactory.php) y en el fichero [EmpresaSeeder.php](./database/seeders/EmpresaSeeder.php) le decimos cuantos registros queremos que nos genere.
4. Hacemos la migración

```shell
php artisan migrate:fresh --seed
```

5. En [web.php](./routes/web.php) creamos las rutas para todos los recursos de **Empresa**

```php
Route::resource('empresas', EmpresaController::class);
```

Podemos ver las rutas que tenemos creadas para **Empresa**

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

6. Ahora tenemos que implementar el código para cada metodo de [EmpresaController.php](./app/Http/Controllers/EmpresaController.php) e ir creando las vistas necesarias dentro de _resources/views_

- Cosas a tener en cuenta mientras implementamos el código

  - Modificar [StoreEmpresaRequest.php](./app/Http/Requests/StoreEmpresaRequest.php) y [UpdateEmpresaRequest.php](./app/Http/Requests/UpdateEmpresaRequest.php) para darle permisos de **Store** y **Update**:

  ```php
  public function authorize(): bool
  {
      return true;
  }
  ```

  - En el modelo [Empresa.php](./app/Models/Empresa.php) hay que decir que campos podemos modificar:

  ```php
  protected $fillable = ['nombre','direccion'];
  ```

- Para implementar las rutas que usan los verbos **PUT** y **DELETE**, como no existen estos metodos para la etiqueta `<form>`, tenemos que implementar la directiva `@method('PUT')` o `@method('DELETE')` respectivamente seguido a la etiqueta `<form>`.

## CREATE (métodos create y store)

1. Método `create`

```php
public function create()
    {
        return view('empresa.formulario_empresa');
    }
```

- nos lleva a la vista [formulario_empresa.blade.php](./resources/views/empresa/formulario_empresa.blade.php) con los campos para crear un nuevo registro.

2. Método `store`

```php
public function store(StoreEmpresaRequest $request)
    {
        $empresa = new Empresa($request->input());
        $empresa->saveOrFail();
        return redirect(route('empresas.index'));
    }
```

- se garda la información que nos llega en `$request` y nos redirigue a al metodo `index`.

## READ (métodos index y show)

1. Metodo `index` (para mostrar listado de empresas)

```php
public function index()
    {
        $empresas = Empresa::paginate(12);
        return view('empresa.listado', ['empresas' => $empresas]);
    }
```

- en la vista [listado.blade.php](./resources/views/empresa/listado.blade.php) nos muestra todos los registros.

2. Método `show` (para mostrar los datos de una empresa)

```php
public function show(Empresa $empresa)
    {
        return view('empresa.mostrar_empresa', ['empresa' => $empresa]);
    }
```

- nos lleva a la vista [mostrar_empresa](./resources/views/empresa/mostrar_empresa.blade.php), donde nos muestra la empresa que hemos recibido como argumento.

## UPDATE (métodos edit y update)

1. Método `edit`

```php
public function edit(Empresa $empresa)
    {
        return view('empresa.formulario_edit', ['empresa' => $empresa]);
    }
```

- nos lleva a una vista [formulario_edit](./resources/views/empresa/formulario_edit.blade.php) con formulario para editar.

2. Metodo `update`

```php
public function update(UpdateEmpresaRequest $request, Empresa $empresa)
    {
        $datos = $request->input();
        $empresa->update($datos);
        return redirect(route('empresas.index'));
    }
```

- se actualizan los valores que hemos modificado en el formulario.

## DELETE (método destroy)

1. Metodo `destroy`

```php
public function destroy(Empresa $empresa)
    {
        $empresa->deleteOrFail();
        return redirect(route('empresas.index'));
    }
```

- eliminamos el registro seleccionado.

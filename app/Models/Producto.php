<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //decimos que atributos se permite con carga masiva de un formulario
    protected $fillable = ['cod', 'nombre', 'nombre_corto', 'descripcion', 'PVP', 'familia'];
    use HasFactory;

    //Cambiamos el nombre de la tabla y la primary key ya que es una tabla creada
    //con los valores que no son por defecto:

    //nombre de tabla, ya que por defecto es 'productos'
    protected $table = 'producto';

    //primary key, si no es por defecto 'id' auto incremental
    protected $primaryKey = 'cod';
    protected $keyType = 'String';
    public $incrementing = false;

    //quitar timestamps, ya que no la tabla original no los tiene
    public $timestamps = false;
}

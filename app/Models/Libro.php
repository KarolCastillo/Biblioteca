<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Libro
 *
 * @property $id
 * @property $titulo
 * @property $descripcion
 * @property $categoria_id
 * @property $copias
 * @property $fecha_ingreso
 * @property $users_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Libro extends Model
{
    
    static $rules = [
		'titulo' => 'required',
		'descripcion' => 'required',
		'categoria_id' => 'required',
		'copias' => 'required',
		'fecha_ingreso' => 'required',
		'users_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo','descripcion','categoria_id','copias','fecha_ingreso','users_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'users_id');
    }
    

}

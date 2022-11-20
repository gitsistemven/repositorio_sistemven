<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Unidadmedida
 *
 * @property $id
 * @property $nombre
 * @property $prefijo
 * @property $created_at
 * @property $updated_at
 *
 * @property Insumo[] $insumos
 * @property Receta[] $recetas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Unidadmedida extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'prefijo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','prefijo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function insumos()
    {
        return $this->hasMany('App\Models\Insumo', 'id_unidadmedida', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recetas()
    {
        return $this->hasMany('App\Models\Receta', 'id_unidadmedida', 'id');
    }
    

}

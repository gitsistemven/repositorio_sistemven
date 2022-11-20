<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Receta
 *
 * @property $id
 * @property $id_insumo
 * @property $id_unidadmedida
 * @property $cantidad
 * @property $cantidad_consumida
 * @property $created_at
 * @property $updated_at
 *
 * @property Insumo $insumo
 * @property Producto[] $productos
 * @property Unidadmedida $unidadmedida
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Receta extends Model
{
    
    static $rules = [
		'id_insumo' => 'required',
		'id_unidadmedida' => 'required',
		'cantidad' => 'required',
		'cantidad_consumida' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_insumo','id_unidadmedida','cantidad','cantidad_consumida'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function insumo()
    {
        return $this->hasOne('App\Models\Insumo', 'id', 'id_insumo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productos()
    {
        return $this->hasMany('App\Models\Producto', 'id_receta', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function unidadmedida()
    {
        return $this->hasOne('App\Models\Unidadmedida', 'id', 'id_unidadmedida');
    }
    

}

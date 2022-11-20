<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Insumo
 *
 * @property $id
 * @property $nombre
 * @property $id_categoria
 * @property $id_unidadmedida
 * @property $unidadporempaque
 * @property $stock
 * @property $minimo_inventario
 * @property $fecha_caducidad
 * @property $created_at
 * @property $updated_at
 *
 * @property Catinsumo $catinsumo
 * @property Compradetalle[] $compradetalles
 * @property Receta[] $recetas
 * @property Unidadmedida $unidadmedida
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Insumo extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'id_categoria' => 'required',
		'id_unidadmedida' => 'required',
		'unidadporempaque' => 'required',
		'stock' => 'required',
		'minimo_inventario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','id_categoria','id_unidadmedida','unidadporempaque','stock','minimo_inventario','fecha_caducidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function catinsumo()
    {
        return $this->hasOne('App\Models\Catinsumo', 'id', 'id_categoria');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function compradetalles()
    {
        return $this->hasMany('App\Models\Compradetalle', 'id_insumo', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recetas()
    {
        return $this->hasMany('App\Models\Receta', 'id_insumo', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function unidadmedida()
    {
        return $this->hasOne('App\Models\Unidadmedida', 'id', 'id_unidadmedida');
    }
    

}

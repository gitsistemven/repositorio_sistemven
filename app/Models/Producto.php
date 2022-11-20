<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $nombre
 * @property $id_categoria
 * @property $precio
 * @property $id_receta
 * @property $created_at
 * @property $updated_at
 *
 * @property Catproducto $catproducto
 * @property Receta $receta
 * @property Ventadetalle[] $ventadetalles
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'id_categoria' => 'required',
		'precio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','id_categoria','precio','id_receta'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function catproducto()
    {
        return $this->hasOne('App\Models\Catproducto', 'id', 'id_categoria');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function receta()
    {
        return $this->hasOne('App\Models\Receta', 'id', 'id_receta');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventadetalles()
    {
        return $this->hasMany('App\Models\Ventadetalle', 'id_producto', 'id');
    }
    

}

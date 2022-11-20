<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Compradetalle
 *
 * @property $id
 * @property $id_compra
 * @property $id_insumo
 * @property $unidadporempaque
 * @property $cantidad
 * @property $total
 * @property $fecha_caducidad
 * @property $created_at
 * @property $updated_at
 *
 * @property Compra $compra
 * @property Insumo $insumo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Compradetalle extends Model
{
    
    static $rules = [
		'id_compra' => 'required',
		'id_insumo' => 'required',
		'unidadporempaque' => 'required',
		'cantidad' => 'required',
		'total' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_compra','id_insumo','unidadporempaque','cantidad','total','fecha_caducidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function compra()
    {
        return $this->hasOne('App\Models\Compra', 'id', 'id_compra');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function insumo()
    {
        return $this->hasOne('App\Models\Insumo', 'id', 'id_insumo');
    }
    

}

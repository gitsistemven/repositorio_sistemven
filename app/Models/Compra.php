<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Compra
 *
 * @property $id
 * @property $total_compra
 * @property $fecha
 * @property $created_at
 * @property $updated_at
 *
 * @property Compradetalle[] $compradetalles
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Compra extends Model
{
    
    static $rules = [
		'total_compra' => 'required',
		'fecha' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['total_compra','fecha'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function compradetalles()
    {
        return $this->hasMany('App\Models\Compradetalle', 'id_compra', 'id');
    }
    

}

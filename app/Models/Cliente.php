<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $nombre_completo
 * @property $CI
 * @property $telefono
 * @property $tipo_cliente
 * @property $created_at
 * @property $updated_at
 *
 * @property Venta[] $ventas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'nombre_completo' => 'required',
		'CI' => 'required',
		'telefono' => 'required',
		'tipo_cliente' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_completo','CI','telefono','tipo_cliente'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventas()
    {
        return $this->hasMany('App\Models\Venta', 'id_cliente', 'id');
    }
    

}

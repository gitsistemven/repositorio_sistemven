<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 *
 * @property $id
 * @property $id_cliente
 * @property $total_venta
 * @property $fecha_venta
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Ventadetalle[] $ventadetalles
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Venta extends Model
{
    protected $table="ventas";
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_cliente',
        'total_venta',
        'fecha_venta'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventadetalles()
    {
        return $this->hasMany(Ventadetalle::class);
    }
    

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ventadetalle
 *
 * @property $id
 * @property $id_venta
 * @property $id_producto
 * @property $cantidad
 * @property $precio
 * @property $descuento
 * @property $created_at
 * @property $updated_at
 *
 * @property Producto $producto
 * @property Venta $venta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ventadetalle extends Model
{
    
    static $rules = [
		'id_venta' => 'required',
		'id_producto' => 'required',
		'cantidad' => 'required',
		'precio' => 'required',
		'descuento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_venta',
        'id_producto',
        'cantidad',
        'precio',
        'descuento'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

}

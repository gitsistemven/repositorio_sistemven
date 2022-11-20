<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\Ventadetalle;
use Illuminate\Http\Request;
use App\Http\Requests\Ventas\StoreRequest;
use App\Http\Requests\Ventas\UpdateRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

/**
 * Class VentaController
 * @package App\Http\Controllers
 */
class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas=Venta::get();
        return view('venta.index', compact('ventas'));
    }
    public function create()
    {
        $clientes=Cliente::get();
        $productos=Producto::get();
        $venta=Venta::all();

        return view('venta.create', compact('venta','clientes','productos'));
    }
    public function store(StoreRequest $request)
    {
       
        $venta = Venta::create($request->all());
        foreach($request->id_producto as $key => $producto){
            $results[] = array(
            "id_producto"=>$request->id_producto[$key],
            "cantidad"=>$request->cantidad[$key],
            "precio"=>$request->precio[$key],
            "descuento"=>$request->descuento[$key]);
        }

        $venta->ventadetalles()->createMany([$results]);

        return redirect()->route('venta.index');
    }
    public function show(Venta $venta)
    {
        $subtotal = 0;
        $ventadetalles = $venta-> ventadetalles;
        foreach($ventadetalles as $ventadetalle){
            $subtotal += $ventadetalle->cantidad * $ventadetalle->precio - (
            ($ventadetalle->cantidad * $ventadetalle->precio) * $ventadetalle->descuento / 100);
        }
        return view('venta.show', compact('venta','ventadetalles','subtotal'));
    }
    public function edit($id)
    {
       /* $venta = Venta::find($id);

        return view('venta.edit', compact('venta'));*/
    }
    public function update(Request $request, Venta $venta)
    {
       /* request()->validate(Venta::$rules);

        $venta->update($request->all());

        return redirect()->route('ventas.index')
            ->with('success', 'Venta updated successfully');*/
    }

    public function destroy($id)
    {
       
    }
}

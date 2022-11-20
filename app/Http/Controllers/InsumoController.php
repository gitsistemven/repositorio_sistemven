<?php

namespace App\Http\Controllers;

use App\Models\Insumo;
use App\Models\Catinsumo;
use App\Models\Unidadmedida;
use Illuminate\Http\Request;

/**
 * Class InsumoController
 * @package App\Http\Controllers
 */
class InsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insumos = Insumo::paginate();

        return view('insumo.index', compact('insumos'))
            ->with('i', (request()->input('page', 1) - 1) * $insumos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $insumo = new Insumo();
        $catinsumos=Catinsumo::pluck('nombre','id');
        $unidadmedidas=Unidadmedida::pluck('prefijo','id');
        return view('insumo.create', compact('insumo','catinsumos','unidadmedidas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Insumo::$rules);

        $insumo = Insumo::create($request->all());

        return redirect()->route('insumos.index')
            ->with('success', 'Insumo creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $insumo = Insumo::find($id);

        return view('insumo.show', compact('insumo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $insumo = Insumo::find($id);
        $catinsumos=Catinsumo::pluck('nombre','id');
        $unidadmedidas=Unidadmedida::pluck('prefijo','id');
        return view('insumo.edit', compact('insumo','catinsumos','unidadmedidas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Insumo $insumo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Insumo $insumo)
    {
        request()->validate(Insumo::$rules);

        $insumo->update($request->all());

        return redirect()->route('insumos.index')
            ->with('success', 'Insumo actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $insumo = Insumo::find($id)->delete();

        return redirect()->route('insumos.index')
            ->with('eliminar', 'Ok');
    }
}

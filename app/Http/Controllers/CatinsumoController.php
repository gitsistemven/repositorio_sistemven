<?php

namespace App\Http\Controllers;

use App\Models\Catinsumo;
use Illuminate\Http\Request;

/**
 * Class CatinsumoController
 * @package App\Http\Controllers
 */
class CatinsumoController extends Controller
{
    function _construct()
    {
        $this->middleware('permission:ver-catinsumo|crear-catinsumo|editar-catinsumo|borrar-catinsumo',['only'=>['index']]);
        $this->middleware('permission:crear-catinsumo',['only'=>['create','store']]);
        $this->middleware('permission:editar-catinsumo',['only'=>['edit','update']]);
        $this->middleware('permission:borrar-catinsumo',['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catinsumos = Catinsumo::paginate();

        return view('catinsumo.index', compact('catinsumos'))
            ->with('i', (request()->input('page', 1) - 1) * $catinsumos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catinsumo = new Catinsumo();
        return view('catinsumo.create', compact('catinsumo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Catinsumo::$rules);

        $catinsumo = Catinsumo::create($request->all());

        return redirect()->route('catinsumos.index')
            ->with('success', 'categoria creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $catinsumo = Catinsumo::find($id);

        return view('catinsumo.show', compact('catinsumo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catinsumo = Catinsumo::find($id);

        return view('catinsumo.edit', compact('catinsumo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Catinsumo $catinsumo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catinsumo $catinsumo)
    {
        request()->validate(Catinsumo::$rules);

        $catinsumo->update($request->all());

        return redirect()->route('catinsumos.index')
            ->with('success', 'Categoria actualizada correctamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $catinsumo = Catinsumo::find($id)->delete();

        return redirect()->route('catinsumos.index')
            ->with('eliminar', 'Ok');
    }
}

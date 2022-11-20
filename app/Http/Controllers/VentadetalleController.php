<?php

namespace App\Http\Controllers;

use App\Models\Ventadetalle;
use Illuminate\Http\Request;

/**
 * Class VentadetalleController
 * @package App\Http\Controllers
 */
class VentadetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventadetalles = Ventadetalle::paginate();

        return view('ventadetalle.index', compact('ventadetalles'))
            ->with('i', (request()->input('page', 1) - 1) * $ventadetalles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ventadetalle = new Ventadetalle();
        return view('ventadetalle.create', compact('ventadetalle'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ventadetalle::$rules);

        $ventadetalle = Ventadetalle::create($request->all());

        return redirect()->route('ventadetalles.index')
            ->with('success', 'Ventadetalle created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ventadetalle = Ventadetalle::find($id);

        return view('ventadetalle.show', compact('ventadetalle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ventadetalle = Ventadetalle::find($id);

        return view('ventadetalle.edit', compact('ventadetalle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ventadetalle $ventadetalle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ventadetalle $ventadetalle)
    {
        request()->validate(Ventadetalle::$rules);

        $ventadetalle->update($request->all());

        return redirect()->route('ventadetalles.index')
            ->with('success', 'Ventadetalle updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ventadetalle = Ventadetalle::find($id)->delete();

        return redirect()->route('ventadetalles.index')
            ->with('success', 'Ventadetalle deleted successfully');
    }
}

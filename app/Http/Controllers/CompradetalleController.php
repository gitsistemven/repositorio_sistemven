<?php

namespace App\Http\Controllers;

use App\Models\Compradetalle;
use Illuminate\Http\Request;

/**
 * Class CompradetalleController
 * @package App\Http\Controllers
 */
class CompradetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compradetalles = Compradetalle::paginate();

        return view('compradetalle.index', compact('compradetalles'))
            ->with('i', (request()->input('page', 1) - 1) * $compradetalles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $compradetalle = new Compradetalle();
        return view('compradetalle.create', compact('compradetalle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Compradetalle::$rules);

        $compradetalle = Compradetalle::create($request->all());

        return redirect()->route('compradetalles.index')
            ->with('success', 'Compradetalle created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $compradetalle = Compradetalle::find($id);

        return view('compradetalle.show', compact('compradetalle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compradetalle = Compradetalle::find($id);

        return view('compradetalle.edit', compact('compradetalle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Compradetalle $compradetalle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compradetalle $compradetalle)
    {
        request()->validate(Compradetalle::$rules);

        $compradetalle->update($request->all());

        return redirect()->route('compradetalles.index')
            ->with('success', 'Compradetalle updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $compradetalle = Compradetalle::find($id)->delete();

        return redirect()->route('compradetalles.index')
            ->with('success', 'Compradetalle deleted successfully');
    }
}

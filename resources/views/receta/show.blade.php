@extends('layouts.app')

@section('template_title')
    {{ $receta->name ?? 'Show Receta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Receta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('recetas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Insumo:</strong>
                            {{ $receta->id_insumo }}
                        </div>
                        <div class="form-group">
                            <strong>Id Unidadmedida:</strong>
                            {{ $receta->id_unidadmedida }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $receta->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad Consumida:</strong>
                            {{ $receta->cantidad_consumida }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

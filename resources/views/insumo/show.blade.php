@extends('adminlte::page')

@section('template_title')
    {{ $insumo->name ?? 'Show Insumo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Insumo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('insumos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $insumo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Id Categoria:</strong>
                            {{ $insumo->id_categoria }}
                        </div>
                        <div class="form-group">
                            <strong>Id Unidadmedida:</strong>
                            {{ $insumo->id_unidadmedida }}
                        </div>
                        <div class="form-group">
                            <strong>Unidadporempaque:</strong>
                            {{ $insumo->unidadporempaque }}
                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $insumo->stock }}
                        </div>
                        <div class="form-group">
                            <strong>Minimo Inventario:</strong>
                            {{ $insumo->minimo_inventario }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Caducidad:</strong>
                            {{ $insumo->fecha_caducidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

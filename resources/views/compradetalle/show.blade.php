@extends('layouts.app')

@section('template_title')
    {{ $compradetalle->name ?? 'Show Compradetalle' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Compradetalle</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('compradetalles.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Compra:</strong>
                            {{ $compradetalle->id_compra }}
                        </div>
                        <div class="form-group">
                            <strong>Id Insumo:</strong>
                            {{ $compradetalle->id_insumo }}
                        </div>
                        <div class="form-group">
                            <strong>Unidadporempaque:</strong>
                            {{ $compradetalle->unidadporempaque }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $compradetalle->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $compradetalle->total }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Caducidad:</strong>
                            {{ $compradetalle->fecha_caducidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

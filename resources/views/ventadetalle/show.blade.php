@extends('layouts.app')

@section('template_title')
    {{ $ventadetalle->name ?? 'Show Ventadetalle' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ventadetalle</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ventadetalles.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Venta:</strong>
                            {{ $ventadetalle->id_venta }}
                        </div>
                        <div class="form-group">
                            <strong>Id Producto:</strong>
                            {{ $ventadetalle->id_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $ventadetalle->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $ventadetalle->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Descuento:</strong>
                            {{ $ventadetalle->descuento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

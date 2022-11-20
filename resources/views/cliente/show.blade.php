@extends('adminlte::page')

@section('template_title')
    {{ $cliente->name ?? 'Show Cliente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Completo:</strong>
                            {{ $cliente->nombre_completo }}
                        </div>
                        <div class="form-group">
                            <strong>Ci:</strong>
                            {{ $cliente->CI }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $cliente->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Cliente:</strong>
                            {{ $cliente->tipo_cliente }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

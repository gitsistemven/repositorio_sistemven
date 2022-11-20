@extends('adminlte::page')

@section('template_title')
    {{ $unidadmedida->name ?? 'Show Unidadmedida' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Unidadmedida</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('unidadmedidas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $unidadmedida->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Prefijo:</strong>
                            {{ $unidadmedida->prefijo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('adminlte::page')

@section('template_title')
    {{ $catinsumo->name ?? 'Show Catinsumo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Catinsumo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('catinsumos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $catinsumo->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

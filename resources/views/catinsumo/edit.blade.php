@extends('adminlte::page')

@section('template_title')
   Actualizar categoria 
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Categoria</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('catinsumos.update', $catinsumo->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('catinsumo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

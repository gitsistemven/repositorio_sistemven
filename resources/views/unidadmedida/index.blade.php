@extends('adminlte::page')

@section('template_title')
    Unidadmedida
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Unidadmedida') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('unidadmedidas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Prefijo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($unidadmedidas as $unidadmedida)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $unidadmedida->nombre }}</td>
											<td>{{ $unidadmedida->prefijo }}</td>

                                            <td>
                                                <form action="{{ route('unidadmedidas.destroy',$unidadmedida->id) }}" class="formulario_eliminar" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('unidadmedidas.show',$unidadmedida->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('unidadmedidas.edit',$unidadmedida->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $unidadmedidas->links() !!}
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    @if(session('eliminar') == 'Ok')
    <script>
        Swal.fire(
            'Eliminado',
            'El objeto seleccionado se elimino correctamente.',
            'success'
        )
    </script>
    @endif

    <script>
        $('.formulario_eliminar').submit(function(e){
        e.preventDefault()
        Swal.fire({
            title:'Esta seguro de eliminar?',
            text: "el objeto seleccionado sera eliminado permanentemente",
            icon: 'warning',
            showCancelButton:true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor:'#d33',
            confirmButtonText:'!Si, eliminar¡',
            cancelButtonText:'Cancelar'

        }).then((result)=>{
            if(result.value){
                
            this.submit();
                
            }
        })

    });
    </script>


@endsection

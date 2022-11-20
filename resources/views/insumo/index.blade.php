@extends('adminlte::page')

@section('template_title')
    Insumo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Insumo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('insumos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Registrar nuevo insumo') }}
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
										<th>Categoria</th>
										<th>U/M</th>
										<th>Unidad por empaque</th>
										<th>Stock</th>
										<th>Minimo Inventario</th>
										<th>Fecha Caducidad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($insumos as $insumo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $insumo->nombre }}</td>
											<td>{{ $insumo->catinsumo->nombre}}</td>
											<td>{{ $insumo->unidadmedida->prefijo}}</td>
											<td>{{ $insumo->unidadporempaque }}</td>
											<td>{{ $insumo->stock }}</td>
											<td>{{ $insumo->minimo_inventario }}</td>
											<td>{{ $insumo->fecha_caducidad }}</td>

                                            <td>
                                                <form action="{{ route('insumos.destroy',$insumo->id) }}" class="formulario_eliminar" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('insumos.show',$insumo->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('insumos.edit',$insumo->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $insumos->links() !!}
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

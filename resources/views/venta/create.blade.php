@extends('adminlte::page')
@section('title','Registro de ventas')
@section('styles')
@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content container-fluid">
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrativo</a></li>
                <li class="breadcrumb-item"><a href="{{route('ventas.index')}}">Ventas</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro de venta</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                {!! Form::open(['route'=>'ventas.store', 'method'=>'POST']) !!}
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">Registro de venta</h3>
                    </div>
                    <br/>
                    @include('venta.form')
                </div>
                <div class="card-footer text-muted">
                    <button type="submit" id="guardar" class="btn btn-primary float-right">Registrar</button>
                    <div class="box-footer mt20">
                    <a href="{{route('ventas.index')}}" class="btn btn-light">Cancelar</a>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(document).ready(function(){
    $("#agregar").click(function(){
        agregar();
    });
});

var cont=1;
total=0;
subtotal=[];
$("#guardar").hide();

$("#id_producto").change(mostrarValores);

function mostrarValores(){
    datoProducto = document.getElementById('id_producto').value.aplit('_');
    $("#precio").val(datoProducto[1]);
}

function agregar(){
    datoProducto=document.getElementById('id_producto').value.split('_');
    id_producto =datoProducto[0];
    producto=$("#id_producto option:selected").text();
    cantidad=$("#cantidad").val();
    descuento = $("#descuento").val();
    precio=$("#precio").val();
    

    if(id_producto != "" && cantidad !="" && cantidad > 0 && descuento != "" && precio != ""){
        subtotal[cont]=(cantidad*precio) - (cantidad*precio*descuento/100);
        total=total+subtotal[cont];
        
        var fila = '<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar('+cont+')";><i class="fas fa-times-circle" style="color: rgb(52, 58, 64)"></i></button></td><td><input type="hidden" name="id_producto[]" value="'+ id_producto +'">'+producto+'</td><td><input type="hidden" name="precio[]" value="'+ parseFloat(precio).toFixed(2) +'"><input class="form-control" type="number" value="'+ parseFloat(precio).toFixed(2) +'" disabled></td><td><input type="hidden" name="descuento[]" value="'+ parseFloat(descuento) +'"><input class="form-control" type="number" value="'+ parseFloat(descuento) +'" disabled></td><td> <input type="hidden" name="cantidad[]" value="'+ cantidad +'"> <input type="number" value="'+ cantidad +'" class="form-control" disabled></td><td style="text-align: right">Bs/'+ parseFloat(subtotal[cont]).toFixed(2)+'</td></tr>';
        cont++;
        limpiar();
        totales();
        evaluar();
        $("#detalles").append(file);
    }
    else{
        alert ("Llene todos los campos del detalle de la venta");
    }
}
function limpiar(){
    $("#cantidad").val("");
    $("#descuento").val("0.00");
    $("#precio").val("");
}
function totales(){
    $("#total_pagar_html").html("Bs "+ total.toFixed(2));
    $("#total").val("Bs "+total.toFixed(2));
}

function evaluar(){
    if(total>0){
        $("#guardar").show();
    }else{
        $("#guardar").hide();
    }
}

function eliminar(index){
    total=total-subtotal[index];
    $("#total").html("Bs"+total);
    $("#total_venta").val(total);
    $("#fila" + index).remove();
    evaluar();
}
</script>
@endpush

<script type="text/javascript">
  function SoloNumeros(evt){
  if(window.event){//asignamos el valor de la tecla a keynum
  keynum = evt.keyCode; //IE
  }
  else{
  keynum = evt.which; //FF
  } 
  //comprobamos si se encuentra en el rango numérico y que teclas no recibirá.
  if((keynum > 47 && keynum < 58) || keynum == 8 || keynum == 13 || keynum == 6 || keynum == 46  ){
  return true;
  }
  else{

  alert('Debe Introducir Solo Números');
  return false;

  }
}  
</script>

@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{--COMFIRMAR VENTAS ALERTAS--}}
<script>
  $('.registrar').submit(function(e){
    e.preventDefault();
    Swal.fire({
    text: "¿Deseas registrar esta venta?",
    icon: 'question',
    showCancelButton: true,
    confirmButtonColor: '#12d500',
    cancelButtonColor: '#d33',
    confirmButtonText: '¡Confirmar Venta!',
    cancelButtonText: 'Cancelar Venta',
    }).then((result) => {
    if (result.isConfirmed) {
      this.submit();
    }
  })
})
</script>
@endsection
























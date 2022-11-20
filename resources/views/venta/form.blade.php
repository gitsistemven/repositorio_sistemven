<div class="box box-info padding-1">
    <div class="box-body">
   

        <div class="form-group">
            <lavel for="id_producto">Producto</lavel>
            <select class="form-control" name="id_producto" id="id_producto">
                <option value="" disabled selected>Seleccione un producto</option>
              @foreach($productos as $producto)
              <option value="{{$producto->id}}_{{$producto->precio}}">{{$producto->nombre}}</option>
              @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <lavel for="cantidad">Cantidad</lavel>
            <input type="number" class="form-control" name="cantidad" id="cantidad" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <lavel for="precio">Precio</lavel>
            <input type="number" class="form-control" name="precio" id="precio" aria-describedby="helpId" disabled>
        </div>

        <div class="form-group">
            <lavel for="descuento">Descuento</lavel>
            <input type="number" class="form-control" name="descuento" id="descuento" value="0.00" min="0" aria-describedby="helpId" value="0">
        </div>

        <div class="form-group">
            <button type="button" id="agregar" class="btn btn-primary float-right">Agregar</button>
        </div>
<!--detaller venta-->
        <div class="form-group">
            <h4 class="card-title">Detalles de venta</h4>
            <div class="table-responsive col-md-12">
                <table id="detalle" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Eliminar</th>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Descuento</th>
                            <th>Subtotal(Bs)</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th colspan="4">
                                <p style="text-align: right">Total</p>
                            </th>
                            <th >
                           <p style="text-align: right"><span style="text-align: right" id="total_pagar_html">Bs 0.00</span>
                           <input type="hidden" name="total" id="total_pagar"></p> 
                            </th>
                        </tr>                                   
            </tfoot>
                        
                </table>
            </div>
        </div>
        <div class="form-group">
            <lavel for="id_cliente">Cliente</lavel>
            <select class="form-control" name="id_cliente" id="id_cliente">
              @foreach($clientes as $cliente)
              <option value="{{$cliente->id}}">{{$cliente->nombre_completo}}</option>
              @endforeach
              
            </select>
            <div class="float-right">
            <a class="btn btn-sm btn-primary " href="{{ route('clientes.create') }}">Registra cliente</a>
            </div>
        </div>
    </div>
</div>
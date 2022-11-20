<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_completo') }}
            {{ Form::text('nombre_completo', $cliente->nombre_completo, ['class' => 'form-control' . ($errors->has('nombre_completo') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Completo']) }}
            {!! $errors->first('nombre_completo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CI') }}
            {{ Form::text('CI', $cliente->CI, ['class' => 'form-control' . ($errors->has('CI') ? ' is-invalid' : ''), 'placeholder' => 'Ci']) }}
            {!! $errors->first('CI', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $cliente->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_cliente') }}
            {{ Form::text('tipo_cliente', $cliente->tipo_cliente, ['class' => 'form-control' . ($errors->has('tipo_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Cliente']) }}
            {!! $errors->first('tipo_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
</div>
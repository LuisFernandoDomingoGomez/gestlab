<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cliente') }}
            {{ Form::text('cliente', $ordenServicio->cliente, ['class' => 'form-control' . ($errors->has('cliente') ? ' is-invalid' : ''), 'placeholder' => 'Cliente']) }}
            {!! $errors->first('cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('atencion_a') }}
            {{ Form::text('atencion_a', $ordenServicio->atencion_a, ['class' => 'form-control' . ($errors->has('atencion_a') ? ' is-invalid' : ''), 'placeholder' => 'Atencion A']) }}
            {!! $errors->first('atencion_a', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('obra') }}
            {{ Form::text('obra', $ordenServicio->obra, ['class' => 'form-control' . ($errors->has('obra') ? ' is-invalid' : ''), 'placeholder' => 'Obra']) }}
            {!! $errors->first('obra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ubicacion') }}
            {{ Form::text('ubicacion', $ordenServicio->ubicacion, ['class' => 'form-control' . ($errors->has('ubicacion') ? ' is-invalid' : ''), 'placeholder' => 'Ubicacion']) }}
            {!! $errors->first('ubicacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('clave_obra') }}
            {{ Form::text('clave_obra', $ordenServicio->clave_obra, ['class' => 'form-control' . ($errors->has('clave_obra') ? ' is-invalid' : ''), 'placeholder' => 'Clave Obra']) }}
            {!! $errors->first('clave_obra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('orden_servicio') }}
            {{ Form::text('orden_servicio', $ordenServicio->orden_servicio, ['class' => 'form-control' . ($errors->has('orden_servicio') ? ' is-invalid' : ''), 'placeholder' => 'Orden Servicio']) }}
            {!! $errors->first('orden_servicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_muestreo') }}
            {{ Form::date('fecha_muestreo', $ordenServicio->fecha_muestreo, ['class' => 'form-control' . ($errors->has('fecha_muestreo') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Muestreo']) }}
            {!! $errors->first('fecha_muestreo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('muestreador_asignado') }}
            {{ Form::text('muestreador_asignado', $ordenServicio->muestreador_asignado, ['class' => 'form-control' . ($errors->has('muestreador_asignado') ? ' is-invalid' : ''), 'placeholder' => 'Muestreador Asignado']) }}
            {!! $errors->first('muestreador_asignado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
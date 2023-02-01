<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('numero_informe') }}
            {{ Form::text('numero_informe', $informeEnsayo->numero_informe, ['class' => 'form-control' . ($errors->has('numero_informe') ? ' is-invalid' : ''), 'placeholder' => 'Numero Informe']) }}
            {!! $errors->first('numero_informe', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('obra') }}
            {{ Form::text('obra', $informeEnsayo->obra, ['class' => 'form-control' . ($errors->has('obra') ? ' is-invalid' : ''), 'placeholder' => 'Obra']) }}
            {!! $errors->first('obra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ubicacion') }}
            {{ Form::text('ubicacion', $informeEnsayo->ubicacion, ['class' => 'form-control' . ($errors->has('ubicacion') ? ' is-invalid' : ''), 'placeholder' => 'Ubicacion']) }}
            {!! $errors->first('ubicacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('propietario') }}
            {{ Form::text('propietario', $informeEnsayo->propietario, ['class' => 'form-control' . ($errors->has('propietario') ? ' is-invalid' : ''), 'placeholder' => 'Propietario']) }}
            {!! $errors->first('propietario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('supervicion') }}
            {{ Form::text('supervicion', $informeEnsayo->supervicion, ['class' => 'form-control' . ($errors->has('supervicion') ? ' is-invalid' : ''), 'placeholder' => 'Supervicion']) }}
            {!! $errors->first('supervicion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_elaboracion') }}
            {{ Form::text('fecha_elaboracion', $informeEnsayo->fecha_elaboracion, ['class' => 'form-control' . ($errors->has('fecha_elaboracion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Elaboracion']) }}
            {!! $errors->first('fecha_elaboracion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('localizacion') }}
            {{ Form::text('localizacion', $informeEnsayo->localizacion, ['class' => 'form-control' . ($errors->has('localizacion') ? ' is-invalid' : ''), 'placeholder' => 'Localizacion']) }}
            {!! $errors->first('localizacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_olla') }}
            {{ Form::text('numero_olla', $informeEnsayo->numero_olla, ['class' => 'form-control' . ($errors->has('numero_olla') ? ' is-invalid' : ''), 'placeholder' => 'Numero Olla']) }}
            {!! $errors->first('numero_olla', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_remision') }}
            {{ Form::text('numero_remision', $informeEnsayo->numero_remision, ['class' => 'form-control' . ($errors->has('numero_remision') ? ' is-invalid' : ''), 'placeholder' => 'Numero Remision']) }}
            {!! $errors->first('numero_remision', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_ensaye') }}
            {{ Form::text('fecha_ensaye', $informeEnsayo->fecha_ensaye, ['class' => 'form-control' . ($errors->has('fecha_ensaye') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Ensaye']) }}
            {!! $errors->first('fecha_ensaye', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_salida') }}
            {{ Form::text('hora_salida', $informeEnsayo->hora_salida, ['class' => 'form-control' . ($errors->has('hora_salida') ? ' is-invalid' : ''), 'placeholder' => 'Hora Salida']) }}
            {!! $errors->first('hora_salida', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_llegada') }}
            {{ Form::text('hora_llegada', $informeEnsayo->hora_llegada, ['class' => 'form-control' . ($errors->has('hora_llegada') ? ' is-invalid' : ''), 'placeholder' => 'Hora Llegada']) }}
            {!! $errors->first('hora_llegada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mpa_7') }}
            {{ Form::text('mpa_7', $informeEnsayo->mpa_7, ['class' => 'form-control' . ($errors->has('mpa_7') ? ' is-invalid' : ''), 'placeholder' => 'Mpa 7']) }}
            {!! $errors->first('mpa_7', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mpa_14') }}
            {{ Form::text('mpa_14', $informeEnsayo->mpa_14, ['class' => 'form-control' . ($errors->has('mpa_14') ? ' is-invalid' : ''), 'placeholder' => 'Mpa 14']) }}
            {!! $errors->first('mpa_14', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mpa_28') }}
            {{ Form::text('mpa_28', $informeEnsayo->mpa_28, ['class' => 'form-control' . ($errors->has('mpa_28') ? ' is-invalid' : ''), 'placeholder' => 'Mpa 28']) }}
            {!! $errors->first('mpa_28', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('kgf_7') }}
            {{ Form::text('kgf_7', $informeEnsayo->kgf_7, ['class' => 'form-control' . ($errors->has('kgf_7') ? ' is-invalid' : ''), 'placeholder' => 'Kgf 7']) }}
            {!! $errors->first('kgf_7', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('kgf_14') }}
            {{ Form::text('kgf_14', $informeEnsayo->kgf_14, ['class' => 'form-control' . ($errors->has('kgf_14') ? ' is-invalid' : ''), 'placeholder' => 'Kgf 14']) }}
            {!! $errors->first('kgf_14', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('kgf_28') }}
            {{ Form::text('kgf_28', $informeEnsayo->kgf_28, ['class' => 'form-control' . ($errors->has('kgf_28') ? ' is-invalid' : ''), 'placeholder' => 'Kgf 28']) }}
            {!! $errors->first('kgf_28', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observaciones') }}
            {{ Form::text('observaciones', $informeEnsayo->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('firma_recibido_cliente') }}
            {{ Form::text('firma_recibido_cliente', $informeEnsayo->firma_recibido_cliente, ['class' => 'form-control' . ($errors->has('firma_recibido_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Firma Recibido Cliente']) }}
            {!! $errors->first('firma_recibido_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
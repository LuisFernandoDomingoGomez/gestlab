<div class="box box-info padding-1">
    <div class="box-body">
        
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
            {{ Form::label('edad_diseno') }}
            {{ Form::text('edad_diseno', $informeEnsayo->edad_diseno, ['class' => 'form-control' . ($errors->has('edad_diseno') ? ' is-invalid' : ''), 'placeholder' => 'Edad Diseno']) }}
            {!! $errors->first('edad_diseno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('localizacion') }}
            {{ Form::text('localizacion', $informeEnsayo->localizacion, ['class' => 'form-control' . ($errors->has('localizacion') ? ' is-invalid' : ''), 'placeholder' => 'Localizacion']) }}
            {!! $errors->first('localizacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('remision') }}
            {{ Form::text('remision', $informeEnsayo->remision, ['class' => 'form-control' . ($errors->has('remision') ? ' is-invalid' : ''), 'placeholder' => 'Remision']) }}
            {!! $errors->first('remision', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rev_proyecto') }}
            {{ Form::text('rev_proyecto', $informeEnsayo->rev_proyecto, ['class' => 'form-control' . ($errors->has('rev_proyecto') ? ' is-invalid' : ''), 'placeholder' => 'Rev Proyecto']) }}
            {!! $errors->first('rev_proyecto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rev_medido') }}
            {{ Form::text('rev_medido', $informeEnsayo->rev_medido, ['class' => 'form-control' . ($errors->has('rev_medido') ? ' is-invalid' : ''), 'placeholder' => 'Rev Medido']) }}
            {!! $errors->first('rev_medido', '<div class="invalid-feedback">:message</div>') !!}
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
            {{ Form::label('tipo_cemento') }}
            {{ Form::text('tipo_cemento', $informeEnsayo->tipo_cemento, ['class' => 'form-control' . ($errors->has('tipo_cemento') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Cemento']) }}
            {!! $errors->first('tipo_cemento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('temperatura_concreto') }}
            {{ Form::text('temperatura_concreto', $informeEnsayo->temperatura_concreto, ['class' => 'form-control' . ($errors->has('temperatura_concreto') ? ' is-invalid' : ''), 'placeholder' => 'Temperatura Concreto']) }}
            {!! $errors->first('temperatura_concreto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('carga') }}
            {{ Form::text('carga', $informeEnsayo->carga, ['class' => 'form-control' . ($errors->has('carga') ? ' is-invalid' : ''), 'placeholder' => 'Carga']) }}
            {!! $errors->first('carga', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fc1') }}
            {{ Form::text('fc1', $informeEnsayo->fc1, ['class' => 'form-control' . ($errors->has('fc1') ? ' is-invalid' : ''), 'placeholder' => 'Fc1']) }}
            {!! $errors->first('fc1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fc2') }}
            {{ Form::text('fc2', $informeEnsayo->fc2, ['class' => 'form-control' . ($errors->has('fc2') ? ' is-invalid' : ''), 'placeholder' => 'Fc2']) }}
            {!! $errors->first('fc2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('agregado_maximo') }}
            {{ Form::text('agregado_maximo', $informeEnsayo->agregado_maximo, ['class' => 'form-control' . ($errors->has('agregado_maximo') ? ' is-invalid' : ''), 'placeholder' => 'Agregado Maximo']) }}
            {!! $errors->first('agregado_maximo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('volumen_colado') }}
            {{ Form::text('volumen_colado', $informeEnsayo->volumen_colado, ['class' => 'form-control' . ($errors->has('volumen_colado') ? ' is-invalid' : ''), 'placeholder' => 'Volumen Colado']) }}
            {!! $errors->first('volumen_colado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('concretera') }}
            {{ Form::text('concretera', $informeEnsayo->concretera, ['class' => 'form-control' . ($errors->has('concretera') ? ' is-invalid' : ''), 'placeholder' => 'Concretera']) }}
            {!! $errors->first('concretera', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observaciones') }}
            {{ Form::text('observaciones', $informeEnsayo->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('muestreo_nombre') }}
            {{ Form::text('muestreo_nombre', $informeEnsayo->muestreo_nombre, ['class' => 'form-control' . ($errors->has('muestreo_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Muestreo Nombre']) }}
            {!! $errors->first('muestreo_nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('elaboro_nombre') }}
            {{ Form::text('elaboro_nombre', $informeEnsayo->elaboro_nombre, ['class' => 'form-control' . ($errors->has('elaboro_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Elaboro Nombre']) }}
            {!! $errors->first('elaboro_nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ensayo_rev_nombre') }}
            {{ Form::text('ensayo_rev_nombre', $informeEnsayo->ensayo_rev_nombre, ['class' => 'form-control' . ($errors->has('ensayo_rev_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Ensayo Rev Nombre']) }}
            {!! $errors->first('ensayo_rev_nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cabeceo_nombre') }}
            {{ Form::text('cabeceo_nombre', $informeEnsayo->cabeceo_nombre, ['class' => 'form-control' . ($errors->has('cabeceo_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Cabeceo Nombre']) }}
            {!! $errors->first('cabeceo_nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ensayo_esp_nombre') }}
            {{ Form::text('ensayo_esp_nombre', $informeEnsayo->ensayo_esp_nombre, ['class' => 'form-control' . ($errors->has('ensayo_esp_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Ensayo Esp Nombre']) }}
            {!! $errors->first('ensayo_esp_nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('reviso_nombre') }}
            {{ Form::text('reviso_nombre', $informeEnsayo->reviso_nombre, ['class' => 'form-control' . ($errors->has('reviso_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Reviso Nombre']) }}
            {!! $errors->first('reviso_nombre', '<div class="invalid-feedback">:message</div>') !!}
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
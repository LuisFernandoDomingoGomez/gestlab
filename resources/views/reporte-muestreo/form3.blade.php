<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('temperatura_humedad') }}
            {{ Form::text('temperatura_humedad', $reporteMuestreo->temperatura_humedad, ['class' => 'form-control' . ($errors->has('temperatura_humedad') ? ' is-invalid' : ''), 'placeholder' => 'Temperatura Humedad']) }}
            {!! $errors->first('temperatura_humedad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_termometro') }}
            {{ Form::text('id_termometro', $reporteMuestreo->id_termometro, ['class' => 'form-control' . ($errors->has('id_termometro') ? ' is-invalid' : ''), 'placeholder' => 'Id Termometro']) }}
            {!! $errors->first('id_termometro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_varilla') }}
            {{ Form::text('id_varilla', $reporteMuestreo->id_varilla, ['class' => 'form-control' . ($errors->has('id_varilla') ? ' is-invalid' : ''), 'placeholder' => 'Id Varilla']) }}
            {!! $errors->first('id_varilla', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_cono') }}
            {{ Form::text('id_cono', $reporteMuestreo->id_cono, ['class' => 'form-control' . ($errors->has('id_cono') ? ' is-invalid' : ''), 'placeholder' => 'Id Cono']) }}
            {!! $errors->first('id_cono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('condicion_ambiental_muestreo') }}
            {{ Form::text('condicion_ambiental_muestreo', $reporteMuestreo->condicion_ambiental_muestreo, ['class' => 'form-control' . ($errors->has('condicion_ambiental_muestreo') ? ' is-invalid' : ''), 'placeholder' => 'Condicion Ambiental Muestreo']) }}
            {!! $errors->first('condicion_ambiental_muestreo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('desviaciones_exclusiones') }}
            {{ Form::text('desviaciones_exclusiones', $reporteMuestreo->desviaciones_exclusiones, ['class' => 'form-control' . ($errors->has('desviaciones_exclusiones') ? ' is-invalid' : ''), 'placeholder' => 'Desviaciones Exclusiones']) }}
            {!! $errors->first('desviaciones_exclusiones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_firma_revision') }}
            {{ Form::text('nombre_firma_revision', $reporteMuestreo->nombre_firma_revision, ['class' => 'form-control' . ($errors->has('nombre_firma_revision') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Firma Revision']) }}
            {!! $errors->first('nombre_firma_revision', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_firma_encargado') }}
            {{ Form::text('nombre_firma_encargado', $reporteMuestreo->nombre_firma_encargado, ['class' => 'form-control' . ($errors->has('nombre_firma_encargado') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Firma Encargado']) }}
            {!! $errors->first('nombre_firma_encargado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observaciones_considerar') }}
            {{ Form::text('observaciones_considerar', $reporteMuestreo->observaciones_considerar, ['class' => 'form-control' . ($errors->has('observaciones_considerar') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones Considerar']) }}
            {!! $errors->first('observaciones_considerar', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
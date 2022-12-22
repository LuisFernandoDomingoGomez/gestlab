<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('resistencia') }}
            {{ Form::text('resistencia', $reporteMuestreo->resistencia, ['class' => 'form-control' . ($errors->has('resistencia') ? ' is-invalid' : ''), 'placeholder' => 'Resistencia']) }}
            {!! $errors->first('resistencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_aditivo') }}
            {{ Form::text('tipo_aditivo', $reporteMuestreo->tipo_aditivo, ['class' => 'form-control' . ($errors->has('tipo_aditivo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Aditivo']) }}
            {!! $errors->first('tipo_aditivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tamano_agregado_maximo') }}
            {{ Form::text('tamano_agregado_maximo', $reporteMuestreo->tamano_agregado_maximo, ['class' => 'form-control' . ($errors->has('tamano_agregado_maximo') ? ' is-invalid' : ''), 'placeholder' => 'Tamano Agregado Maximo']) }}
            {!! $errors->first('tamano_agregado_maximo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_agregado') }}
            {{ Form::text('tipo_agregado', $reporteMuestreo->tipo_agregado, ['class' => 'form-control' . ($errors->has('tipo_agregado') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Agregado']) }}
            {!! $errors->first('tipo_agregado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('premezcadora') }}
            {{ Form::text('premezcadora', $reporteMuestreo->premezcadora, ['class' => 'form-control' . ($errors->has('premezcadora') ? ' is-invalid' : ''), 'placeholder' => 'Premezcadora']) }}
            {!! $errors->first('premezcadora', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('edad_ensayo') }}
            {{ Form::text('edad_ensayo', $reporteMuestreo->edad_ensayo, ['class' => 'form-control' . ($errors->has('edad_ensayo') ? ' is-invalid' : ''), 'placeholder' => 'Edad Ensayo']) }}
            {!! $errors->first('edad_ensayo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('revenimiento') }}
            {{ Form::text('revenimiento', $reporteMuestreo->revenimiento, ['class' => 'form-control' . ($errors->has('revenimiento') ? ' is-invalid' : ''), 'placeholder' => 'Revenimiento']) }}
            {!! $errors->first('revenimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_cemento') }}
            {{ Form::text('tipo_cemento', $reporteMuestreo->tipo_cemento, ['class' => 'form-control' . ($errors->has('tipo_cemento') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Cemento']) }}
            {!! $errors->first('tipo_cemento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dosificacion') }}
            {{ Form::text('dosificacion', $reporteMuestreo->dosificacion, ['class' => 'form-control' . ($errors->has('dosificacion') ? ' is-invalid' : ''), 'placeholder' => 'Dosificacion']) }}
            {!! $errors->first('dosificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('marca_cemento') }}
            {{ Form::text('marca_cemento', $reporteMuestreo->marca_cemento, ['class' => 'form-control' . ($errors->has('marca_cemento') ? ' is-invalid' : ''), 'placeholder' => 'Marca Cemento']) }}
            {!! $errors->first('marca_cemento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('volumen_colado') }}
            {{ Form::text('volumen_colado', $reporteMuestreo->volumen_colado, ['class' => 'form-control' . ($errors->has('volumen_colado') ? ' is-invalid' : ''), 'placeholder' => 'Volumen Colado']) }}
            {!! $errors->first('volumen_colado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_llegada_muestreador') }}
            {{ Form::time('hora_llegada_muestreador', $reporteMuestreo->hora_llegada_muestreador, ['class' => 'form-control' . ($errors->has('hora_llegada_muestreador') ? ' is-invalid' : ''), 'placeholder' => 'Hora Llegada Muestreador']) }}
            {!! $errors->first('hora_llegada_muestreador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('entrega_transportista') }}
            {{ Form::text('entrega_transportista', $reporteMuestreo->entrega_transportista, ['class' => 'form-control' . ($errors->has('entrega_transportista') ? ' is-invalid' : ''), 'placeholder' => 'Entrega Transportista']) }}
            {!! $errors->first('entrega_transportista', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('muestreador') }}
            {{ Form::text('muestreador', $reporteMuestreo->muestreador, ['class' => 'form-control' . ($errors->has('muestreador') ? ' is-invalid' : ''), 'placeholder' => 'Muestreador']) }}
            {!! $errors->first('muestreador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('transportista_1') }}
            {{ Form::text('transportista_1', $reporteMuestreo->transportista_1, ['class' => 'form-control' . ($errors->has('transportista_1') ? ' is-invalid' : ''), 'placeholder' => 'Transportista 1']) }}
            {!! $errors->first('transportista_1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_salida_muestreador') }}
            {{ Form::time('hora_salida_muestreador', $reporteMuestreo->hora_salida_muestreador, ['class' => 'form-control' . ($errors->has('hora_salida_muestreador') ? ' is-invalid' : ''), 'placeholder' => 'Hora Salida Muestreador']) }}
            {!! $errors->first('hora_salida_muestreador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('entrega_laboratorista') }}
            {{ Form::text('entrega_laboratorista', $reporteMuestreo->entrega_laboratorista, ['class' => 'form-control' . ($errors->has('entrega_laboratorista') ? ' is-invalid' : ''), 'placeholder' => 'Entrega Laboratorista']) }}
            {!! $errors->first('entrega_laboratorista', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('transportista_2') }}
            {{ Form::text('transportista_2', $reporteMuestreo->transportista_2, ['class' => 'form-control' . ($errors->has('transportista_2') ? ' is-invalid' : ''), 'placeholder' => 'Transportista 2']) }}
            {!! $errors->first('transportista_2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('laboratorista') }}
            {{ Form::text('laboratorista', $reporteMuestreo->laboratorista, ['class' => 'form-control' . ($errors->has('laboratorista') ? ' is-invalid' : ''), 'placeholder' => 'Laboratorista']) }}
            {!! $errors->first('laboratorista', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
        {{ Form::label('Condicion Ambiental de Muestreo:') }}
        <br>
          <input type="radio" id="1" name="condicion_ambiental_muestreo" value="1">
          <label for="1">Vientos Fuertes</label><br>
          <input type="radio" id="2" name="condicion_ambiental_muestreo" value="2">
          <label for="2">Lluvia</label><br>
          <input type="radio" id="3" name="condicion_ambiental_muestreo" value="3">
          <label for="3">Ninguna que Afecte</label>
        </div>
        <div class="form-group">
            {{ Form::label('Desviaciones y exclusiones que se presentaron') }}
            {{ Form::text('desviaciones_exclusiones', $reporteMuestreo->desviaciones_exclusiones, ['class' => 'form-control' . ($errors->has('desviaciones_exclusiones') ? ' is-invalid' : ''), 'placeholder' => 'Desviaciones y exclusiones que presentaron: Ninguna']) }}
            {!! $errors->first('desviaciones_exclusiones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre o firma de revision') }}
            {{ Form::text('nombre_firma_revision', $reporteMuestreo->nombre_firma_revision, ['class' => 'form-control' . ($errors->has('nombre_firma_revision') ? ' is-invalid' : ''), 'placeholder' => 'Nombre y/o firma de revisión']) }}
            {!! $errors->first('nombre_firma_revision', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre del encargado de la Obra') }}
            {{ Form::text('nombre_firma_encargado', $reporteMuestreo->nombre_firma_encargado, ['class' => 'form-control' . ($errors->has('nombre_firma_encargado') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del encargado de la revision']) }}
            {!! $errors->first('nombre_firma_encargado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Observaciones a considerar') }}
            {{ Form::text('observaciones_considerar', $reporteMuestreo->observaciones_considerar, ['class' => 'form-control' . ($errors->has('observaciones_considerar') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones a considerar (registrar aquí)']) }}
            {!! $errors->first('observaciones_considerar', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Desviaciones, adisiones o exclusiones') }}
            {{ Form::text('desviaciones_adicionales', $reporteMuestreo->desviaciones_adicionales, ['class' => 'form-control' . ($errors->has('desviaciones_adicionales') ? ' is-invalid' : ''), 'placeholder' => 'Desviaciones, adisiones o exclusiones (registrar aquí)']) }}
            {!! $errors->first('desviaciones_adicionales', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
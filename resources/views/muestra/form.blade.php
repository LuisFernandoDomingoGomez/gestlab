<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Clave de Obra') }}
            {{ Form::select('clave_obra', $reporteMuestreo, $muestra->clave_obra, ['class' => 'form-control' . ($errors->has('clave_obra') ? ' is-invalid' : ''), 'placeholder' => '-- Clave de Obra --']) }}
            {!! $errors->first('clave_obra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_olla') }}
            {{ Form::text('numero_olla', $muestra->numero_olla, ['class' => 'form-control' . ($errors->has('numero_olla') ? ' is-invalid' : ''), 'placeholder' => 'Numero Olla']) }}
            {!! $errors->first('numero_olla', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_remision') }}
            {{ Form::text('numero_remision', $muestra->numero_remision, ['class' => 'form-control' . ($errors->has('numero_remision') ? ' is-invalid' : ''), 'placeholder' => 'Numero Remision']) }}
            {!! $errors->first('numero_remision', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_salida_planta') }}
            {{ Form::time('hora_salida_planta', $muestra->hora_salida_planta, ['class' => 'form-control' . ($errors->has('hora_salida_planta') ? ' is-invalid' : ''), 'placeholder' => 'Hora Salida Planta']) }}
            {!! $errors->first('hora_salida_planta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_entrega_obra') }}
            {{ Form::time('hora_entrega_obra', $muestra->hora_entrega_obra, ['class' => 'form-control' . ($errors->has('hora_entrega_obra') ? ' is-invalid' : ''), 'placeholder' => 'Hora Entrega Obra']) }}
            {!! $errors->first('hora_entrega_obra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_toma_muestra') }}
            {{ Form::time('hora_toma_muestra', $muestra->hora_toma_muestra, ['class' => 'form-control' . ($errors->has('hora_toma_muestra') ? ' is-invalid' : ''), 'placeholder' => 'Hora Toma Muestra']) }}
            {!! $errors->first('hora_toma_muestra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('temperatura_ambiental_muestra') }}
            {{ Form::text('temperatura_ambiental_muestra', $muestra->temperatura_ambiental_muestra, ['class' => 'form-control' . ($errors->has('temperatura_ambiental_muestra') ? ' is-invalid' : ''), 'placeholder' => 'Temperatura Ambiental Muestra']) }}
            {!! $errors->first('temperatura_ambiental_muestra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_termino_descarga') }}
            {{ Form::text('hora_termino_descarga', $muestra->hora_termino_descarga, ['class' => 'form-control' . ($errors->has('hora_termino_descarga') ? ' is-invalid' : ''), 'placeholder' => 'Hora Termino Descarga']) }}
            {!! $errors->first('hora_termino_descarga', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('volumen_m3') }}
            {{ Form::text('volumen_m3', $muestra->volumen_m3, ['class' => 'form-control' . ($errors->has('volumen_m3') ? ' is-invalid' : ''), 'placeholder' => 'Volumen M3']) }}
            {!! $errors->first('volumen_m3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('uno_cm') }}
            {{ Form::text('uno_cm', $muestra->uno_cm, ['class' => 'form-control' . ($errors->has('uno_cm') ? ' is-invalid' : ''), 'placeholder' => 'Uno Cm']) }}
            {!! $errors->first('uno_cm', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tiempo_empleado') }}
            {{ Form::text('tiempo_empleado', $muestra->tiempo_empleado, ['class' => 'form-control' . ($errors->has('tiempo_empleado') ? ' is-invalid' : ''), 'placeholder' => 'Tiempo Empleado']) }}
            {!! $errors->first('tiempo_empleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dos_cm') }}
            {{ Form::text('dos_cm', $muestra->dos_cm, ['class' => 'form-control' . ($errors->has('dos_cm') ? ' is-invalid' : ''), 'placeholder' => 'Dos Cm']) }}
            {!! $errors->first('dos_cm', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_muestra') }}
            {{ Form::text('numero_muestra', $muestra->numero_muestra, ['class' => 'form-control' . ($errors->has('numero_muestra') ? ' is-invalid' : ''), 'placeholder' => 'Numero Muestra']) }}
            {!! $errors->first('numero_muestra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_molde') }}
            {{ Form::text('numero_molde', $muestra->numero_molde, ['class' => 'form-control' . ($errors->has('numero_molde') ? ' is-invalid' : ''), 'placeholder' => 'Numero Molde']) }}
            {!! $errors->first('numero_molde', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('elemento') }}
            {{ Form::text('elemento', $muestra->elemento, ['class' => 'form-control' . ($errors->has('elemento') ? ' is-invalid' : ''), 'placeholder' => 'Elemento']) }}
            {!! $errors->first('elemento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nivel') }}
            {{ Form::text('nivel', $muestra->nivel, ['class' => 'form-control' . ($errors->has('nivel') ? ' is-invalid' : ''), 'placeholder' => 'Nivel']) }}
            {!! $errors->first('nivel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ejes') }}
            {{ Form::text('ejes', $muestra->ejes, ['class' => 'form-control' . ($errors->has('ejes') ? ' is-invalid' : ''), 'placeholder' => 'Ejes']) }}
            {!! $errors->first('ejes', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
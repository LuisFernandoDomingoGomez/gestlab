<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <div class="row g-3">
                <div class="col">
                    {{ Form::label('Clave de la Obra') }}
                    {{ Form::select('clave_obra', $reporteMuestreo, $muestra->clave_obra, ['class' => 'form-control' . ($errors->has('clave_obra') ? ' is-invalid' : ''), 'placeholder' => '-- Clave de Obra --']) }}
                    {!! $errors->first('clave_obra', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::label('Numero de Olla') }}
                    {{ Form::text('numero_olla', $muestra->numero_olla, ['class' => 'form-control' . ($errors->has('numero_olla') ? ' is-invalid' : ''), 'placeholder' => 'Numero de Olla']) }}
                    {!! $errors->first('numero_olla', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::label('Numero de Remision') }}
                    {{ Form::text('numero_remision', $muestra->numero_remision, ['class' => 'form-control' . ($errors->has('numero_remision') ? ' is-invalid' : ''), 'placeholder' => 'Numero de Remision']) }}
                    {!! $errors->first('numero_remision', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row g-3">
                <div class="col">
                    {{ Form::label('hora de salida de planta') }}
                    {{ Form::time('hora_salida_planta', $muestra->hora_salida_planta, ['class' => 'form-control' . ($errors->has('hora_salida_planta') ? ' is-invalid' : ''), 'placeholder' => 'Hora Salida Planta']) }}
                    {!! $errors->first('hora_salida_planta', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::label('hora entrega de obra') }}
                    {{ Form::time('hora_entrega_obra', $muestra->hora_entrega_obra, ['class' => 'form-control' . ($errors->has('hora_entrega_obra') ? ' is-invalid' : ''), 'placeholder' => 'Hora Entrega Obra']) }}
                    {!! $errors->first('hora_entrega_obra', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::label('hora toma de muestra') }}
                    {{ Form::time('hora_toma_muestra', $muestra->hora_toma_muestra, ['class' => 'form-control' . ($errors->has('hora_toma_muestra') ? ' is-invalid' : ''), 'placeholder' => 'Hora Toma Muestra']) }}
                    {!! $errors->first('hora_toma_muestra', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row g-3">
                <div class="col">
                    {{ Form::label('Temperatura °C') }}
                    {{ Form::text('temperatura_ambiental_muestra', $muestra->temperatura_ambiental_muestra, ['class' => 'form-control' . ($errors->has('temperatura_ambiental_muestra') ? ' is-invalid' : ''), 'placeholder' => 'Temperatura Ambiental Muestra']) }}
                    {!! $errors->first('temperatura_ambiental_muestra', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::label('hora termino de descarga') }}
                    {{ Form::time('hora_termino_descarga', $muestra->hora_termino_descarga, ['class' => 'form-control' . ($errors->has('hora_termino_descarga') ? ' is-invalid' : ''), 'placeholder' => 'Hora Termino Descarga']) }}
                    {!! $errors->first('hora_termino_descarga', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::label('Volumen m³') }}
                    {{ Form::text('volumen_m3', $muestra->volumen_m3, ['class' => 'form-control' . ($errors->has('volumen_m3') ? ' is-invalid' : ''), 'placeholder' => 'Volumen m³']) }}
                    {!! $errors->first('volumen_m3', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('Revenimientos') }}
            <div class="row g-3">
                <div class="col">
                    {{ Form::text('uno_cm', $muestra->uno_cm, ['class' => 'form-control' . ($errors->has('uno_cm') ? ' is-invalid' : ''), 'placeholder' => 'UNO (cm)']) }}
                    {!! $errors->first('uno_cm', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::text('tiempo_empleado', $muestra->tiempo_empleado, ['class' => 'form-control' . ($errors->has('tiempo_empleado') ? ' is-invalid' : ''), 'placeholder' => 'Tiempo Empleado']) }}
                    {!! $errors->first('tiempo_empleado', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::text('dos_cm', $muestra->dos_cm, ['class' => 'form-control' . ($errors->has('dos_cm') ? ' is-invalid' : ''), 'placeholder' => 'DOS (cm)']) }}
                    {!! $errors->first('dos_cm', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row g-3">
                <div class="col">
                    {{ Form::label('Numero de Muestra') }}
                    {{ Form::text('numero_muestra', $muestra->numero_muestra, ['class' => 'form-control' . ($errors->has('numero_muestra') ? ' is-invalid' : ''), 'placeholder' => 'Numero de Muestra']) }}
                    {!! $errors->first('numero_muestra', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::label('Numero de Molde') }}
                    {{ Form::text('numero_molde', $muestra->numero_molde, ['class' => 'form-control' . ($errors->has('numero_molde') ? ' is-invalid' : ''), 'placeholder' => 'Numero Molde']) }}
                    {!! $errors->first('numero_molde', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('Localizacion de los Elementos colados segun los planos') }}
            {{ Form::text('ejes', $muestra->ejes, ['class' => 'form-control' . ($errors->has('ejes') ? ' is-invalid' : ''), 'placeholder' => 'Elemento, Nivel, Ejes']) }}
            {!! $errors->first('ejes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
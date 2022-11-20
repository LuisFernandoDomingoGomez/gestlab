<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cliente') }}
            {{ Form::text('cliente', $reporteMuestreo->cliente, ['class' => 'form-control' . ($errors->has('cliente') ? ' is-invalid' : ''), 'placeholder' => 'Cliente']) }}
            {!! $errors->first('cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('atencion_a') }}
            {{ Form::text('atencion_a', $reporteMuestreo->atencion_a, ['class' => 'form-control' . ($errors->has('atencion_a') ? ' is-invalid' : ''), 'placeholder' => 'Atencion A']) }}
            {!! $errors->first('atencion_a', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('obra') }}
            {{ Form::text('obra', $reporteMuestreo->obra, ['class' => 'form-control' . ($errors->has('obra') ? ' is-invalid' : ''), 'placeholder' => 'Obra']) }}
            {!! $errors->first('obra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ubicación') }}
            {{ Form::text('ubicación', $reporteMuestreo->ubicación, ['class' => 'form-control' . ($errors->has('ubicación') ? ' is-invalid' : ''), 'placeholder' => 'Ubicación']) }}
            {!! $errors->first('ubicación', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('clave_obra') }}
            {{ Form::text('clave_obra', $reporteMuestreo->clave_obra, ['class' => 'form-control' . ($errors->has('clave_obra') ? ' is-invalid' : ''), 'placeholder' => 'Clave Obra']) }}
            {!! $errors->first('clave_obra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('orden_servicio') }}
            {{ Form::text('orden_servicio', $reporteMuestreo->orden_servicio, ['class' => 'form-control' . ($errors->has('orden_servicio') ? ' is-invalid' : ''), 'placeholder' => 'Orden Servicio']) }}
            {!! $errors->first('orden_servicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_muestreo') }}
            {{ Form::date('fecha_muestreo', $reporteMuestreo->fecha_muestreo, ['class' => 'form-control' . ($errors->has('fecha_muestreo') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Muestreo']) }}
            {!! $errors->first('fecha_muestreo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('muestreador_asignado') }}
            {{ Form::text('muestreador_asignado', $reporteMuestreo->muestreador_asignado, ['class' => 'form-control' . ($errors->has('muestreador_asignado') ? ' is-invalid' : ''), 'placeholder' => 'Muestreador Asignado']) }}
            {!! $errors->first('muestreador_asignado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
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
            {{ Form::label('numero_olla') }}
            {{ Form::text('numero_olla', $reporteMuestreo->numero_olla, ['class' => 'form-control' . ($errors->has('numero_olla') ? ' is-invalid' : ''), 'placeholder' => 'Numero Olla']) }}
            {!! $errors->first('numero_olla', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_remision') }}
            {{ Form::text('numero_remision', $reporteMuestreo->numero_remision, ['class' => 'form-control' . ($errors->has('numero_remision') ? ' is-invalid' : ''), 'placeholder' => 'Numero Remision']) }}
            {!! $errors->first('numero_remision', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_salida_planta') }}
            {{ Form::time('hora_salida_planta', $reporteMuestreo->hora_salida_planta, ['class' => 'form-control' . ($errors->has('hora_salida_planta') ? ' is-invalid' : ''), 'placeholder' => 'Hora Salida Planta']) }}
            {!! $errors->first('hora_salida_planta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_entrega_obra') }}
            {{ Form::time('hora_entrega_obra', $reporteMuestreo->hora_entrega_obra, ['class' => 'form-control' . ($errors->has('hora_entrega_obra') ? ' is-invalid' : ''), 'placeholder' => 'Hora Entrega Obra']) }}
            {!! $errors->first('hora_entrega_obra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_toma_muestra') }}
            {{ Form::time('hora_toma_muestra', $reporteMuestreo->hora_toma_muestra, ['class' => 'form-control' . ($errors->has('hora_toma_muestra') ? ' is-invalid' : ''), 'placeholder' => 'Hora Toma Muestra']) }}
            {!! $errors->first('hora_toma_muestra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('temperatura_ambiental_muestra') }}
            {{ Form::text('temperatura_ambiental_muestra', $reporteMuestreo->temperatura_ambiental_muestra, ['class' => 'form-control' . ($errors->has('temperatura_ambiental_muestra') ? ' is-invalid' : ''), 'placeholder' => 'Temperatura Ambiental Muestra']) }}
            {!! $errors->first('temperatura_ambiental_muestra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_termino_descarga') }}
            {{ Form::time('hora_termino_descarga', $reporteMuestreo->hora_termino_descarga, ['class' => 'form-control' . ($errors->has('hora_termino_descarga') ? ' is-invalid' : ''), 'placeholder' => 'Hora Termino Descarga']) }}
            {!! $errors->first('hora_termino_descarga', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('volumen_m3') }}
            {{ Form::text('volumen_m3', $reporteMuestreo->volumen_m3, ['class' => 'form-control' . ($errors->has('volumen_m3') ? ' is-invalid' : ''), 'placeholder' => 'Volumen M3']) }}
            {!! $errors->first('volumen_m3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('uno_cm') }}
            {{ Form::text('uno_cm', $reporteMuestreo->uno_cm, ['class' => 'form-control' . ($errors->has('uno_cm') ? ' is-invalid' : ''), 'placeholder' => 'Uno Cm']) }}
            {!! $errors->first('uno_cm', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tiempo_empleado') }}
            {{ Form::text('tiempo_empleado', $reporteMuestreo->tiempo_empleado, ['class' => 'form-control' . ($errors->has('tiempo_empleado') ? ' is-invalid' : ''), 'placeholder' => 'Tiempo Empleado']) }}
            {!! $errors->first('tiempo_empleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dos_cm') }}
            {{ Form::text('dos_cm', $reporteMuestreo->dos_cm, ['class' => 'form-control' . ($errors->has('dos_cm') ? ' is-invalid' : ''), 'placeholder' => 'Dos Cm']) }}
            {!! $errors->first('dos_cm', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_muestra') }}
            {{ Form::text('numero_muestra', $reporteMuestreo->numero_muestra, ['class' => 'form-control' . ($errors->has('numero_muestra') ? ' is-invalid' : ''), 'placeholder' => 'Numero Muestra']) }}
            {!! $errors->first('numero_muestra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_molde') }}
            {{ Form::text('numero_molde', $reporteMuestreo->numero_molde, ['class' => 'form-control' . ($errors->has('numero_molde') ? ' is-invalid' : ''), 'placeholder' => 'Numero Molde']) }}
            {!! $errors->first('numero_molde', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('elemento') }}
            {{ Form::text('elemento', $reporteMuestreo->elemento, ['class' => 'form-control' . ($errors->has('elemento') ? ' is-invalid' : ''), 'placeholder' => 'Elemento']) }}
            {!! $errors->first('elemento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nivel') }}
            {{ Form::text('nivel', $reporteMuestreo->nivel, ['class' => 'form-control' . ($errors->has('nivel') ? ' is-invalid' : ''), 'placeholder' => 'Nivel']) }}
            {!! $errors->first('nivel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ejes') }}
            {{ Form::text('ejes', $reporteMuestreo->ejes, ['class' => 'form-control' . ($errors->has('ejes') ? ' is-invalid' : ''), 'placeholder' => 'Ejes']) }}
            {!! $errors->first('ejes', '<div class="invalid-feedback">:message</div>') !!}
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
            {{ Form::label('Condicion ambiental de Muestreo') }}
            <br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="condicion_ambiental_muestreo" id="exampleRadios1" value="vientos fuertes">
                <label class="form-check-label" for="exampleRadios1">
                    Vientos Fuertes
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="condicion_ambiental_muestreo" id="exampleRadios2" value="lluvia">
                <label class="form-check-label" for="exampleRadios2">
                    Lluvia
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="condicion_ambiental_muestreo" id="exampleRadios3" value="ninguna que afecte">
                <label class="form-check-label" for="exampleRadios3">
                    Ninguna que afecte
                </label>
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
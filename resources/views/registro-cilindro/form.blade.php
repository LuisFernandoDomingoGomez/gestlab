<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('orden_laboratorio') }}
            {{ Form::text('orden_laboratorio', $registroCilindro->orden_laboratorio, ['class' => 'form-control' . ($errors->has('orden_laboratorio') ? ' is-invalid' : ''), 'placeholder' => 'Orden Laboratorio']) }}
            {!! $errors->first('orden_laboratorio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cliente') }}
            {{ Form::text('cliente', $registroCilindro->cliente, ['class' => 'form-control' . ($errors->has('cliente') ? ' is-invalid' : ''), 'placeholder' => 'Cliente']) }}
            {!! $errors->first('cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('obra') }}
            {{ Form::text('obra', $registroCilindro->obra, ['class' => 'form-control' . ($errors->has('obra') ? ' is-invalid' : ''), 'placeholder' => 'Obra']) }}
            {!! $errors->first('obra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_muestreo') }}
            {{ Form::text('fecha_muestreo', $registroCilindro->fecha_muestreo, ['class' => 'form-control' . ($errors->has('fecha_muestreo') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Muestreo']) }}
            {!! $errors->first('fecha_muestreo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_concreto') }}
            {{ Form::text('tipo_concreto', $registroCilindro->tipo_concreto, ['class' => 'form-control' . ($errors->has('tipo_concreto') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Concreto']) }}
            {!! $errors->first('tipo_concreto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fcproy') }}
            {{ Form::text('fcproy', $registroCilindro->fcproy, ['class' => 'form-control' . ($errors->has('fcproy') ? ' is-invalid' : ''), 'placeholder' => 'Fcproy']) }}
            {!! $errors->first('fcproy', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rev_obt') }}
            {{ Form::text('rev_obt', $registroCilindro->rev_obt, ['class' => 'form-control' . ($errors->has('rev_obt') ? ' is-invalid' : ''), 'placeholder' => 'Rev Obt']) }}
            {!! $errors->first('rev_obt', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ejes') }}
            {{ Form::text('ejes', $registroCilindro->ejes, ['class' => 'form-control' . ($errors->has('ejes') ? ' is-invalid' : ''), 'placeholder' => 'Ejes']) }}
            {!! $errors->first('ejes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_inicio_cabeceo') }}
            {{ Form::text('hora_inicio_cabeceo', $registroCilindro->hora_inicio_cabeceo, ['class' => 'form-control' . ($errors->has('hora_inicio_cabeceo') ? ' is-invalid' : ''), 'placeholder' => 'Hora Inicio Cabeceo']) }}
            {!! $errors->first('hora_inicio_cabeceo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_final_cabeceo') }}
            {{ Form::text('hora_final_cabeceo', $registroCilindro->hora_final_cabeceo, ['class' => 'form-control' . ($errors->has('hora_final_cabeceo') ? ' is-invalid' : ''), 'placeholder' => 'Hora Final Cabeceo']) }}
            {!! $errors->first('hora_final_cabeceo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_inicio_ensayo') }}
            {{ Form::text('hora_inicio_ensayo', $registroCilindro->hora_inicio_ensayo, ['class' => 'form-control' . ($errors->has('hora_inicio_ensayo') ? ' is-invalid' : ''), 'placeholder' => 'Hora Inicio Ensayo']) }}
            {!! $errors->first('hora_inicio_ensayo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_final_ensayo') }}
            {{ Form::text('hora_final_ensayo', $registroCilindro->hora_final_ensayo, ['class' => 'form-control' . ($errors->has('hora_final_ensayo') ? ' is-invalid' : ''), 'placeholder' => 'Hora Final Ensayo']) }}
            {!! $errors->first('hora_final_ensayo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('prensa') }}
            {{ Form::text('prensa', $registroCilindro->prensa, ['class' => 'form-control' . ($errors->has('prensa') ? ' is-invalid' : ''), 'placeholder' => 'Prensa']) }}
            {!! $errors->first('prensa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('regla') }}
            {{ Form::text('regla', $registroCilindro->regla, ['class' => 'form-control' . ($errors->has('regla') ? ' is-invalid' : ''), 'placeholder' => 'Regla']) }}
            {!! $errors->first('regla', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('bascula') }}
            {{ Form::text('bascula', $registroCilindro->bascula, ['class' => 'form-control' . ($errors->has('bascula') ? ' is-invalid' : ''), 'placeholder' => 'Bascula']) }}
            {!! $errors->first('bascula', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('termometro') }}
            {{ Form::text('termometro', $registroCilindro->termometro, ['class' => 'form-control' . ($errors->has('termometro') ? ' is-invalid' : ''), 'placeholder' => 'Termometro']) }}
            {!! $errors->first('termometro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('temperatura_ambiental') }}
            {{ Form::text('temperatura_ambiental', $registroCilindro->temperatura_ambiental, ['class' => 'form-control' . ($errors->has('temperatura_ambiental') ? ' is-invalid' : ''), 'placeholder' => 'Temperatura Ambiental']) }}
            {!! $errors->first('temperatura_ambiental', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
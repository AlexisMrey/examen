<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('creditos_mat') }}
            {{ Form::text('creditos_mat', $materia->creditos_mat, ['class' => 'form-control' . ($errors->has('creditos_mat') ? ' is-invalid' : ''), 'placeholder' => 'Creditos Mat']) }}
            {!! $errors->first('creditos_mat', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_mat') }}
            {{ Form::text('nombre_mat', $materia->nombre_mat, ['class' => 'form-control' . ($errors->has('nombre_mat') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Mat']) }}
            {!! $errors->first('nombre_mat', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('profesor') }}
            {{ Form::text('profesor', $materia->profesor, ['class' => 'form-control' . ($errors->has('profesor') ? ' is-invalid' : ''), 'placeholder' => 'Profesor']) }}
            {!! $errors->first('profesor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('turno') }}
            <br>
            {{ Form::radio('turno', 'matutino', $materia->turno)}}
            {{ Form::label('matutino')}}
            {!! $errors->first('turno', '<div class="invalid-feedback">:message</div>') !!}

            {{ Form::radio('turno','vespertino', $materia->turno)}}
            {{ Form::label('vespertino')}}
            {!! $errors->first('turno', '<div class="invalid-feedback">:message</div>') !!}

        </div>
        <div class="form-group">
            {{ Form::label('disponible') }}
            <br>
            {{ Form::radio('disponible', 0, $materia->disponible)}}
            {{ Form::label('no')}}
            {!! $errors->first('turno', '<div class="invalid-feedback">:message</div>') !!}
            
            {{ Form::radio('disponible', 1, $materia->disponible)}}
            {{ Form::label('si')}}
            {!! $errors->first('disponible', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
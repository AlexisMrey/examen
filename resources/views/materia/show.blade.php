@extends('layouts.app')

@section('template_title')
    {{ $materia->name ?? 'Show Materia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Materia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('materias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Creditos Mat:</strong>
                            {{ $materia->creditos_mat }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Mat:</strong>
                            {{ $materia->nombre_mat }}
                        </div>
                        <div class="form-group">
                            <strong>Profesor:</strong>
                            {{ $materia->profesor }}
                        </div>
                        <div class="form-group">
                            <strong>Turno:</strong>
                            {{ $materia->turno }}
                        </div>
                        <div class="form-group">
                            <strong>Disponible:</strong>
                            {{ $materia->disponible }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

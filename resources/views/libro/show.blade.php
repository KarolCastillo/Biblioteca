@extends('layouts.app')

@section('template_title')
    {{ $libro->name ?? 'Show Libro' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Libro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('libro.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $libro->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $libro->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria Id:</strong>
                            {{ $libro->categoria_id }}
                        </div>
                        <div class="form-group">
                            <strong>Copias:</strong>
                            {{ $libro->copias }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Ingreso:</strong>
                            {{ $libro->fecha_ingreso }}
                        </div>
                        <div class="form-group">
                            <strong>Users Id:</strong>
                            {{ $libro->users_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

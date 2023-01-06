@extends('layouts.admin')
@section('title', "Información de Productos")
@section('styles')
@endsection

@section('contenido')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-5">
                <h1 class="m-0">{{ $unidadMedida->nombre }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-7">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('unidadMedidas.index') }}">Unidad Medida</a>
                    <li class="breadcrumb-item active"><a>{{ $unidadMedida->nombre }}</a>
                    </li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="content">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="border-bottom text-center pb-4">
                                <h3>{{ $unidadMedida->nombre }}</h3>
                                <div class="d-flex justify-content-between">
                                </div>
                            </div>
                            <div class="border-bottom py-4">
                                <div class="list-group">
                                    <button
                                        class="list-group-item list-group-item-action active">Informaci&oacute;n
                                        Unidad Medida</button>
                                    <button class="list-group-item list-group-item-action">Informaci&oacute;n Productos</button>
                                    {{-- <button class="list-group-item list-group-item-action">Realizar
                                        venta</button> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 pl-lg-5">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4>Informaci&oacute;n de la Unidad de Medida</h4>
                                </div>
                            </div>
                            <div class="profile-feed">
                                <div class="d-flex align-items-start profile-feed-item">
                                    <div class="form-group col-md-6">
                                        <strong><i class="fab fa-product-hunt mr-1"></i>Nombre</strong>
                                        <p class="text-muted">
                                            {{ $unidadMedida->nombre }}
                                        </p>
                                        <hr>
                                        <strong><i class="fas fa-address-card mr-1"></i>Estado</strong>
                                        <p class="text-muted">
                                            <span class="right badge badge-{{ ($unidadMedida->estado=='Activo' ? 'success':'danger') }}">{{
                                                $unidadMedida->estado }}</span>
                                        </p>
                                        <hr>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <strong><i class="fas fa-map-marked-alt mr-1"></i>Abreviatura</strong>
                                        <p class="text-muted">
                                            @if ( $unidadMedida->abreviatura != '' ) {{ $unidadMedida->abreviatura }} @else
                                            &nbsp; @endif
                                        </p>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{ route('unidadMedidas.index') }}" class="btn btn-danger float-right">
                        <span class="fas fa-arrow-left fa-fw"></span> Regresar
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection

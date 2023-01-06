@extends('layouts.admin')
@section('title', 'Registrar Proveedores')
@section('styles')
{!! Html::style('AdminLTE/plugins/sweetalert2/sweetalert2.min.css') !!}
{!! Html::style('AdminLTE/plugins/select2/css/select2.min.css') !!}
{!! Html::script('AdminLTE/plugins/nonblockjs/NonBlock.es5.js') !!}

{!! Html::style('AdminLTE/plugins/formValidation-v1.10.0/formValidation.min.css') !!}
<style type="text/css">
    .select2-container .select2-selection--single {
        height: 38px;
        border: 3px solid #ced4da;
        border-top: 0;
        border-left: 0;
        border-right: 0;
        border-radius: 0;
        box-shadow: inherit;
        border-bottom-width: 3px;
    }
</style>
@endsection

@section('contenido')

<!-- Content Header (Page header) -->
<div style="display: none;">
    @if (count($errors) > 0)
    <h4 id="error-title">Errores encontrados</h4>
    <div id="error-body">
        @foreach ($errors->all() as $err)
        <ul>
            <li>{{ $err }}</li>
        </ul>
        @endforeach
    </div>
    @endif
</div>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Registrar Proveedor</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('proveedores.index') }}">Proveedor</a>
                    </li>
                    <li class="breadcrumb-item active"><a>Registrar Proveedor</a></li>
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
                    <a class="jsgrid-button jsgrid-edit-button" id="boton-modal" data-toggle="modal"
                        data-target="#exampleModal" style="float: right; " title="Ayuda">
                        <i class="far fa-question-circle fa-fw fa-lg"></i>
                    </a>
                    <small class="float-right" style="color: blue" for="boton-modal">Ejemplo -></small>

                    <div class="card-text">
                        <form id="frmProveedor" action="{{ route('proveedores.store') }}" method="POST"
                            autocomplete="false" class="formulario-nuevo">
                            @csrf

                            @include('admin.proveedor._form')

                            <b><small style="color: gray">*&nbsp;Campos requeridos</small></b>
                            <div class="form-group" style="float: right">
                                <a href="{{ route('proveedores.index') }}" class="btn btn-danger">
                                    <span class="fas fa-arrow-left fa-fw"></span> Regresar
                                </a>&nbsp;
                                <button class="btn btn-primary" id="button-submit" type="submit">
                                    <span class="fas fa-save fa-fw"></span> Guardar&nbsp;
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ejemplo de Registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                <div class="row" bis_skin_checked="1">
                    <div class="col-12" bis_skin_checked="1">

                        <div class="card" bis_skin_checked="1">
                            <div class="card-header d-flex p-0" bis_skin_checked="1">
                                <ul class="nav nav-pills ml-auto p-2">
                                    <li class="nav-item"><a class="nav-link active" href="#tab_1"
                                            data-toggle="tab">Basico</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tab_2"
                                            data-toggle="tab">Completo</a></li>
                                </ul>
                            </div>
                            <div class="card-body" bis_skin_checked="1">
                                <div class="tab-content" bis_skin_checked="1">
                                    <div class="tab-pane active" id="tab_1" bis_skin_checked="1">
                                        <div class="text-center">
                                            <img src="{{URL::asset('/resources/img/ayuda-proveedor-basico.gif')}}"
                                                alt="Registro Basico" class="mr-3" style="width: 100%">
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="tab_2" bis_skin_checked="1">
                                        <div class="text-center">
                                            <img src="{{URL::asset('/resources/img/ayuda-proveedor-completo.gif')}}"
                                                alt="Registro Completo" class="mr-3" style="width: 100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span
                        class="fas fa-arrow-left fa-fw"></span> Regresar</button>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
{!! Html::script('AdminLTE/plugins/sweetalert2/sweetalert2.min.js') !!}
{!! Html::script('AdminLTE/plugins/select2/js/select2.min.js') !!}

<!--formValidation-->
{!! Html::script('AdminLTE/plugins/formValidation-v1.10.0/formValidation.full.min.js') !!}
{!! Html::script('AdminLTE/plugins/formValidation-v1.10.0/bootstrap.min.js') !!}
{!! Html::script('resources/js/modelos_alertas.js') !!}
{!! Html::script('resources/views/Proveedor.js') !!}
<script>
    $(document).ready(function () {
        $('.js-example-responsive-').select2();
    });
    validar_formulario();
    @if (count($errors) > 0)
        alert_sweetalert('aviso', 'Ocurrio un error', 'Por favor, corrija los errores que se muestran' ,'error');
        alert_pnotify('error-form',document.getElementById('error-title'),document.getElementById('error-body'));
    @endif
</script>

@endsection

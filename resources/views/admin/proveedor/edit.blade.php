@extends('layouts.admin')
@section('title', 'Editar Proveedor')
@section('styles')
{!! Html::style('AdminLTE/plugins/sweetalert2/sweetalert2.min.css') !!}
{!! Html::style('AdminLTE/plugins/select2/css/select2.min.css') !!}
{!! Html::script('AdminLTE/plugins/nonblockjs/NonBlock.es5.js') !!}

{!! Html::style('AdminLTE/plugins/formValidation-v1.10.0/formValidation.min.css') !!}
@endsection

@section('contenido')

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
                <h1 class="m-0">Editar Proveedor</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('proveedores.index') }}">Proveedores</a></li>
                    <li class="breadcrumb-item active"><a>Editar Proveedor</a></li>
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
                    <small class="float-right" style="color: gray">* campos requeridos</small>
                    <div class="card-text">
                        {!! Form::model($proveedor, ['id' => 'frmProveedor','class' => 'formulario-editar',
                        'route' => ['proveedores.update', $proveedor], 'method'=>'PUT'
                        ]) !!}
                        @csrf

                        @include('admin.proveedor._form')

                        <b><small style="color: gray">*&nbsp;Campos requeridos</small></b>
                        <div class="form-group" style="float: right">
                            <a href="{{ route('proveedores.index') }}" class="btn btn-danger">
                                <span class="fas fa-arrow-left fa-fw"></span> Regresar</a>
                            <button class="btn btn-primary" id="button-submit" type="submit">
                                <span class="fas fa-save fa-fw"></span> Actualizar&nbsp;
                            </button>
                        </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
{!! Html::script('AdminLTE/plugins/sweetalert2/sweetalert2.min.js') !!}
{!! Html::script('AdminLTE/plugins/select2/js/select2.min.js') !!}
{!! Html::script('resources/js/modelos_alertas.js') !!}

<!--formValidation-->
{!! Html::script('AdminLTE/plugins/formValidation-v1.10.0/formValidation.full.min.js') !!}
{!! Html::script('AdminLTE/plugins/formValidation-v1.10.0/bootstrap.min.js') !!}
{!! Html::script('resources/views/Proveedor.js') !!}
<script>
    validar_formulario();
    @if (count($errors) > 0)
        alert_sweetalert('aviso', 'Ocurrio un error', 'Por favor, corrija los errores que se muestran' ,'error');
        alert_pnotify('error-form',document.getElementById('error-title'),document.getElementById('error-body'));
    @endif
</script>
@endsection

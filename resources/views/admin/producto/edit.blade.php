@extends('layouts.admin')
@section('title', 'Editar Producto')
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
                <h1 class="m-0">Editar Producto</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('productos.index') }}">Productos</a></li>
                    <li class="breadcrumb-item active"><a>Editar Producto</a></li>
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
                        {!! Form::model($producto, ['id' => 'frmProducto','class' => 'formulario-editar',
                        'route' => ['productos.update', $producto], 'method'=>'PUT']) !!}
                        @csrf

                        @include('admin.producto._form')

                        <div class="form-row">
                            {{-- <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input fv-plugins-icon-input"
                                    name="size[]" value="s">
                                <label class="form-check-label">S</label>
                            </div> --}}

                            <div class="form-group clearfix col-md-3 col-sm-6">
                                <label for="label-estado">Estado</label><br>
                                <div class="icheck-primary d-inline">
                                    <input type="text" id="estado" name="estado" hidden disabled
                                        value="{{ $producto->estado }}">
                                    <input type="checkbox" id="label-estado" onclick="click_estado()"
                                        name="label-estado" {{ $producto->estado=='Activo' ? 'checked':''
                                    }}
                                    >
                                    <label for="label-estado" id="texto-estado">Activo</label>
                                </div>
                            </div>

                        </div>

                        <b><small style="color: gray">*&nbsp;Campos requeridos</small></b>
                        <div class="form-group" style="float: right">
                            <a href="{{ route('productos.index') }}" class="btn btn-danger">
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
{!! Html::script('resources/views/Producto.js') !!}
<script>
    validar_formulario();
    @if (count($errors) > 0)
        alert_sweetalert('aviso', 'Ocurrio un error', 'Por favor, corrija los errores que se muestran' ,'error');
        alert_pnotify('error-form',document.getElementById('error-title'),document.getElementById('error-body'));
    @endif
    function click_estado() {
        var checkBox = document.getElementById("label-estado");
        // Get the output text
        var texto = document.getElementById("estado");
        if (checkBox.checked == true) {
            $("#texto-estado").text("Activo");
            texto.value = "Activo";
        } else {
            $("#texto-estado").text("Inactivo");
            texto.value = "Inactivo";
        }
    }
</script>
@endsection

@extends('layouts.admin')
@section('title', 'Listado de Proveedores')
@section('styles')
<!-- DataTables -->
{!! Html::style('AdminLTE/plugins/DataTables/datatables.min.css') !!}
{!! Html::style('AdminLTE/plugins/DataTables/responsive-2.4.0/css/responsive.dataTables.min.css') !!}
{!! Html::style('AdminLTE/plugins/sweetalert2/sweetalert2.min.css') !!}
{!! Html::style('resources/css/estilos.css') !!}
<style type="text/css">
    unstyled-button {
        border: none;
        padding: 0;
        background: none;
    }
</style>
@endsection

@section('contenido')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Proveedores</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                    <li class="breadcrumb-item active"><a>Proveedores</a>
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
                    <form action="{{ route('proveedores.index') }}" method="get">
                        <div class="form-group row">
                            <div class="col-lg-6 col-md-8 col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="texto" name="texto"
                                        value="{{ $texto }}" placeholder="Ingresar dato a buscar">
                                    <div class="input-group-addon">
                                        <button class="btn btn-navbar">
                                            <i class="fas fa-search fa-fw"></i>
                                        </button>
                                    </div>
                                </div>
                                &nbsp;
                            </div>
                            <div class="col-lg-6 col-md-4 col-sm-3">
                                <a href="{{ route('proveedores.create') }}" class="btn btn-primary float-right">
                                    <span class="fas fa-plus fa-fw"></span> Registrar Proveedor
                                </a>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table id="tablaProveedor" style="width: 100%"
                            class="table table-striped table-bordered display nowrap">
                            <thead>
                                <tr>
                                    <th scope="row">Id</th>
                                    <th>Nombre</th>
                                    <th>RUC</th>
                                    <th>Direccion</th>
                                    <th>Telefono</th>
                                    <th>Email</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($proveedores as $item)
                                <tr>
                                    <th scope="row">{{ $item->id }}</td>
                                    <td><a href="{{ route('proveedores.show',$item) }}">{{ $item->nombre
                                            }}</a></td>
                                    <td>{{ $item->documento }}</td>
                                    <td>{{ $item->direccion }}</td>
                                    <td>{{ $item->telefono }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>
                                        {!! Form::open(['route' => ['proveedores.destroy',$item],
                                        'method'=>'DELETE', 'class' => 'formulario-eliminar']) !!}
                                        <a class="jsgrid-button jsgrid-edit-button"
                                            href="{{ route('proveedores.edit',$item) }}" title="Editar">
                                            <i class="fas fa-edit fa-fw"></i>
                                        </a>
                                        <button class="jsgrid-button jsgrid-delete-button" title="Eliminar"
                                            style="border: none; padding: 0; background: none;" type="submit">
                                            <i class="fas fa-trash fa-fw" style="color: red"></i>
                                        </button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th scope="row">Id</th>
                                    <th>Nombre</th>
                                    <th>RUC</th>
                                    <th>Direccion</th>
                                    <th>Telefono</th>
                                    <th>Email</th>
                                    <th>Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            {{ $proveedores->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- DataTables -->
{!! Html::script('AdminLTE/plugins/DataTables/datatables.min.js') !!}
{!! Html::script('AdminLTE/plugins/DataTables/responsive-2.4.0/js/dataTables.responsive.min.js') !!}
{!! Html::script('AdminLTE/plugins/sweetalert2/sweetalert2.min.js') !!}
{!! Html::script('resources/js/modelos_alertas.js') !!}
{!! Html::script('resources/views/Proveedor.js') !!}
<script>
    @switch(session('success'))
    @case('nuevo')
        alert_sweetalert('aviso','Proveedor Registrado', 'El proveedor se registro satisfactoriamente', 'success');
    @break
    @case('editar')
        alert_sweetalert('aviso','Proveedor Modificado', 'El Proveedor se modifico satisfactoriamente', 'success');
    @break
    @case('eliminar')
        alert_sweetalert('aviso','Proveedor Eliminado', 'El proveedor se elimino satisfactoriamente', 'success');
    @break
    @default
    @break
    @endswitch
    index();
</script>

@endsection

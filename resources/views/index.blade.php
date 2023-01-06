
@extends('layouts.admin')
@section('title', 'Listado de Productos')
@section('styles')

@endsection

@section('contenido')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Panel de Administraci&oacute;n</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="content">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <section class="no-padding-bottom">
                        <div class="container-fluid">
                            <div class="row">
                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card card-proveedor border-0 bg-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                        Proveedores</div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-user fa-2x text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card card-producto bg-secondary border-0 shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                        Productos</div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fab fa-product-hunt fa-2x text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card card-cliente border-0 bg-warning shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                        Clientes</div>
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col-auto">
                                                            <div
                                                                class="h5 mb-0 mr-3 font-weight-bold text-white">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-users fa-2x text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


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
@switch(session('success'))
@case('nuevo')
<script>
    mostrarAlerta('aviso','Producto Registrado', 'El producto se registro satisfactoriamente');
</script>
@break
@case('editar')
<script>
    mostrarAlerta('aviso','Producto Modificado', 'El Producto se modifico satisfactoriamente');
</script>
@break
@case('eliminar')
<script>
    mostrarAlerta('aviso','Producto Eliminado', 'El producto se elimino satisfactoriamente');
</script>
@break
@default

@endswitch
<script>
    $('.formulario-eliminar').submit(async function(e) {
        e.preventDefault();
        var data = table.row($(this).parents('tr')).data();

        if (table.row(this).child.isShown()) {//para obtener los datos una vez que el explorador esta minimizado
            var data = table.row(this).data();
        }
        var est = await mostrarAlerta('confirmacion','Esta seguro que desea eliminar el producto \''+data[1]+'  \' ','Este producto se eliminara definitivamente');
        if(est){
            this.submit();
        }
    });
    $(document).ready(function () {
        $('#tablaProducto').DataTable({
            "paging": false,
            "info": false,
            "filter": false,
            responsive: true
        });
    });
</script>
<script>
    $('.card-producto').on('click',function(e) {
        window.location.href = '{{ route("productos.index") }}';
    });
</script>
<script>
    $('.card-cliente').on('click',function(e) {
        window.location.href = '{{ route("clientes.index") }}';
    });
</script>
<script>
    $('.card-proveedor').on('click',function(e) {
        window.location.href = '{{ route("proveedores.index") }}';
    });
</script>

@endsection

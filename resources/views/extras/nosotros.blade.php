@extends('layouts.admin')
@section('title', 'Nosotros')
@section('styles')
@endsection

@section('contenido')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Sistema de Facturacion Desarrollado Por:</h1>
                <div class="content__img">
                    <span style="text-align: center; display: block"><img class="content__image"
                            src="{{ asset('img/logo.png') }}" style="width: 400px" alt=""></span>
                </div>
            </div><!-- /.col -->
            <div class="col-sm-6">
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="content">
    {{-- <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row" style="text-align: center; display: block">
                        <section class="no-padding-bottom">
                            <div class="container-fluid">
                                <h4 class="m-0">Responsables:</h4>
                                <div class="row">
                                    <!-- Earnings (Monthly) Card Example -->
                                    <div class="card" style="width: 100%">

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <img id="eliasfb" src="{{ asset('img/facebook.png') }}"
                                                    width="30px" alt="">
                                                <a href="https://www.facebook.com/elias.huashuayomiranda"
                                                    style="color: black"><label for="eliasfb">Elias
                                                        Huashuayo Miranda</label></a>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <img id="eliaswa" src="{{ asset('img/whatsapp.png') }}"
                                                    width="40px" alt="">
                                                <a href="https://wa.me/51926322896"
                                                    style="color: black"><label
                                                        for="eliaswa">926322896</label></a>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <img id="smitfb" src="{{ asset('img/facebook.png') }}"
                                                    width="30px" alt="">
                                                <a href="https://www.facebook.com/smit.osccoccuiro"
                                                    style="color: black"><label for="smitfb">Smit
                                                        Oscco Ccuiro</label></a>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <img id="smitwa" src="{{ asset('img/whatsapp.png') }}"
                                                    width="40px" alt="">
                                                <a href="https://wa.me/51934524649"
                                                    style="color: black"><label
                                                        for="smitwa">934524649</label></a>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form group col-md-6">
                                                <img id="eddyfb" src="{{ asset('img/facebook.png') }}"
                                                    width="30px" alt="">
                                                <a href="https://www.facebook.com/search/top?q=gianluka%20goretzka%20abdelkader%20azubuike"
                                                    style="color: black"><label for="eddyfb">Eddy
                                                        Ochoa Chirinos</label></a>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <img id="eddywa" src="{{ asset('img/whatsapp.png') }}"
                                                    width="40px" alt="">
                                                <a href="https://wa.me/51985319022"
                                                    style="color: black"><label
                                                        for="eddywa">985319022</label></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <label class="m-0">huashuayo16@gmail.com - smitosccoccuiro@gmail.com -
                                    eddyoc29@gmail.com</label>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h3>Responsables</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                                Desarrollador
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="lead"><b>Elias Huashuayo Miranda</b></h2>
                                        <p class="text-muted text-sm"><b>About: </b> Web Designer / Graphic
                                            Artist
                                            /
                                            Coffee Lover </p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small">
                                                <span class="fa-li"><i
                                                        class="fas fa-envelope fa-lg"></i></span>
                                                Correo: huashuayo16@gmail.com
                                            </li>
                                            <li class="small">
                                                <span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>
                                                Tel&eacute;fono #: + 51 926 322 896
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="https://scontent-lim1-1.xx.fbcdn.net/v/t39.30808-6/290469684_2819635714849567_6818187324321570051_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeG_fyQwYAJBvBpR5_pgo5VQph3g8okV1KqmHeDyiRXUqusQwm6VTKj4OLa8_slGbfF0eaLqKGwVRo8PBftDOUhn&_nc_ohc=JSF33lEbIb0AX89qZ-W&tn=D6Iibb2KwUKe1mxe&_nc_ht=scontent-lim1-1.xx&oh=00_AfD5yUQ-YA_CzcqtJJY8j3fxHrtfFNrj9xCEHWUCt61P5A&oe=63AB0DDD"
                                            alt="user-avatar" class="img-circle img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="https://wa.me/+51926322896" target="_blank"
                                        class="btn btn-sm bg-teal">
                                        <i class="fab fa-whatsapp fa-lg" style="width: 40px"></i>
                                    </a>
                                    <a href="https://www.facebook.com/elias.huashuayomiranda" target="_blank"
                                        class="btn btn-sm btn-primary">
                                        <i class="fab fa-facebook fa-lg"></i> Ver perfil
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                                Desarrollador
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="lead"><b>Smit Oscco Ccuiro</b></h2>
                                        <p class="text-muted text-sm"><b>About: </b> Web Designer / Graphic
                                            Artist
                                            /
                                            Coffee Lover </p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small">
                                                <span class="fa-li"><i
                                                        class="fas fa-envelope fa-lg"></i></span>
                                                Correo: snitosccoccuiro@gmail.com
                                            </li>
                                            <li class="small">
                                                <span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>
                                                Tel&eacute;fono #: + 51 934 524 649
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="https://scontent-lim1-1.xx.fbcdn.net/v/t1.6435-9/201103653_5511811928889088_4490018824141700739_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeE9yHzY0Hjh3-IJz76BHtQ3HP-_Pa27EXMc_789rbsRcwSdMugAGzqaoYq2Z-qUrJ1F1lBepdeWrVRvt9-HAdKp&_nc_ohc=xV436PRnu1IAX_9qod1&tn=D6Iibb2KwUKe1mxe&_nc_ht=scontent-lim1-1.xx&oh=00_AfCAkil_dMzpIJl9NQEK3w1HSlhfkp1MevHDNihsr56lfg&oe=63CD7120"
                                            alt="user-avatar" class="img-circle img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="https://wa.me/+51934524649" target="_blank"
                                        class="btn btn-sm bg-teal">
                                        <i class="fab fa-whatsapp fa-lg" style="width: 40px"></i>
                                    </a>
                                    <a href="https://www.facebook.com/smit.osccoccuiro" target="_blank"
                                        class="btn btn-sm btn-primary">
                                        <i class="fab fa-facebook fa-lg"></i> Ver perfil
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                                Desarrollador
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="lead"><b>Eddy Ochoa Chirinos</b></h2>
                                        <p class="text-muted text-sm"><b>About: </b> Web Designer / Graphic
                                            Artist
                                            /
                                            Coffee Lover </p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small">
                                                <span class="fa-li"><i
                                                        class="fas fa-envelope fa-lg"></i></span>
                                                Correo: eddyoc29@gmail.com
                                            </li>
                                            <li class="small">
                                                <span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>
                                                Tel&eacute;fono #: + 51 985 319 022
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="https://scontent.flim19-1.fna.fbcdn.net/v/t1.6435-9/50856874_2189005044675055_3156319814553698304_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeFREbVc1htpJHKsGGaSj-aPJ_JL-iUlDiEn8kv6JSUOIa2b_fXi73Y1Wq05lFk0VBsQuUxGSbfHNoVK3TV3HrIW&_nc_ohc=ibT6Z4ppXg8AX_HbgBs&_nc_oc=AQnPGWDqiP429H2buhuWUaTmr32o4wVXiTY7lnj9u10UG9SSWG0ofG3-5wIfdK3QrWs&tn=UGhX83DDfbyPg8rH&_nc_ht=scontent.flim19-1.fna&oh=00_AfBviwB-rHHMoxRQip641I9HwfpuNzlkuVJqvVfqZ_6b5Q&oe=63CD8760"
                                            alt="user-avatar" class="img-circle img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="https://wa.me/+51985319022" target="_blank"
                                        class="btn btn-sm bg-teal">
                                        <i class="fab fa-whatsapp fa-lg" style="width: 40px"></i>
                                    </a>
                                    <a href="https://www.facebook.com/eddy.Deligh1996.arribaperu" target="_blank"
                                        class="btn btn-sm btn-primary">
                                        <i class="fab fa-facebook fa-lg"></i> Ver perfil
                                    </a>
                                </div>
                            </div>
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
{{-- {!! Html::script('AdminLTE/plugins/DataTables/datatables.min.js') !!}
{!! Html::script('AdminLTE/plugins/DataTables/responsive-2.4.0/js/dataTables.responsive.min.js') !!}
{!! Html::script('AdminLTE/plugins/sweetalert2/sweetalert2.min.js') !!}
{!! Html::script('resources/js/modelos_alertas.js') !!} --}}

{{-- <script>
    $('.card-producto').on('click',function(e) {
        window.location.href = '{{ route("productos.index") }}';
    });
    $('.card-cliente').on('click',function(e) {
        window.location.href = '{{ route("clientes.index") }}';
    });
    $('.card-proveedor').on('click',function(e) {
        window.location.href = '{{ route("proveedores.index") }}';
    });
</script> --}}

@endsection

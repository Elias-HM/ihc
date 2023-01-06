<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <!-- plugins:css -->
        {!!
        Html::style('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')
        !!}
        <!-- Font Awesome -->
        {!! Html::style('AdminLTE/plugins/fontawesome-free/css/all.min.css') !!}
        <!-- Ionicons -->
        {!! Html::style('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') !!}
        <!-- Tempusdominus Bootstrap 4 -->
        {{-- {!!
        Html::style('AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') !!}
        --}}
        <!-- iCheck -->
        {{-- {!! Html::style('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') !!} --}}
        <!-- Bootstrap4 -->
        {!! Html::style('AdminLTE/plugins/bootstrap4/css/bootstrap.min.css') !!}
        <!-- Theme style -->
        {!! Html::style('AdminLTE/dist/css/adminlte.min.css') !!}
        <!-- overlayScrollbars -->
        {!! Html::style('AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') !!}
        <!-- Daterange picker -->
        {!! Html::style('AdminLTE/plugins/daterangepicker/daterangepicker.css') !!}
        <!-- PNotify style-->
        {!! Html::style('AdminLTE/plugins/pnotify/core/PNotify.css') !!}
        {!! Html::style('AdminLTE/plugins/pnotify/core/BrightTheme.css') !!}

        <!-- jQuery -->
        {!! Html::script('AdminLTE/plugins/jquery/jquery.min.js') !!}
        <!-- PNotify script-->
        {!! Html::script('AdminLTE/plugins/pnotify/core/PNotify.js') !!}
        @yield('styles')
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

            <!-- Preloader -->
            {{-- <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                    width="60">
            </div> --}}

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="/" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="/nosotros" class="nav-link">Nosotros</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="#" class="nav-link">Algo mas</a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Navbar Search -->
                    <li class="nav-item">
                        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                            <i class="fas fa-search"></i>
                        </a>
                        <div class="navbar-search-block">
                            <form class="form-inline">
                                <div class="input-group input-group-sm">
                                    <input class="form-control form-control-navbar" type="search"
                                        placeholder="Search" aria-label="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-navbar" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                        <button class="btn btn-navbar" type="button"
                                            data-widget="navbar-search">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Messages Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-comments"></i>
                            <span class="badge badge-danger navbar-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="{{URL::asset('/AdminLTE/dist/img/user1-128x128.jpg')}}"
                                        alt="User Avatar" {{-- <img src="dist/img/user1-128x128.jpg"
                                        alt="User Avatar" --}} class="img-size-50 mr-3 img-circle">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Brad Diesel
                                            <span class="float-right text-sm text-danger"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">Call me whenever you can...</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4
                                            Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="{{URL::asset('/AdminLTE/dist/img/user8-128x128.jpg')}}"
                                        alt="User Avatar" class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            John Pierce
                                            <span class="float-right text-sm text-muted"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">I got your message bro</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4
                                            Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="{{URL::asset('/AdminLTE/dist/img/user3-128x128.jpg')}}"
                                        alt="User Avatar" class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Nora Silvester
                                            <span class="float-right text-sm text-warning"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">The subject goes here</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4
                                            Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                        </div>
                    </li>
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-warning navbar-badge">15</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-item dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> 8 friend requests
                                <span class="float-right text-muted text-sm">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 new reports
                                <span class="float-right text-muted text-sm">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true"
                            href="#" role="button">
                            <i class="fas fa-th-large"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            @include('layouts._nav')
            <!-- Content Wrapper. Contains page content -->

            <div class="content-wrapper" style="min-height: 365px">
                @yield('contenido')
            </div>
            <!-- /.content-wrapper -->


            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
            <!-- Main Footer -->
            <footer class="main-footer">
                {{-- <strong>Copyright &copy; 2014-2021 <a
                        href="https://fact-system.com">Fact-System</a>.</strong> --}}

                <strong>Copyright &copy; 2014-2021 <a href="#">Elias-HM</a>.</strong>
                All rights reserved.
                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 1.0
                </div>
            </footer>
        </div>

        <!-- Font Awesome -->
        {!! Html::script('AdminLTE/plugins/fontawesome-free/js/all.min.js') !!}
        <!-- jQuery UI 1.11.4 -->
        {!! Html::script('AdminLTE/plugins/jquery-ui/jquery-ui.min.js') !!}
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        {!! Html::script('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}
        <!-- daterangepicker -->
        {!! Html::script('AdminLTE/plugins/moment/moment.min.js') !!}
        {!! Html::script('AdminLTE/plugins/daterangepicker/daterangepicker.js') !!}
        <!-- Tempusdominus Bootstrap 4 -->
        {{-- {!!
        Html::script('AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') !!}
        --}}
        <!-- overlayScrollbars -->
        {!! Html::script('AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') !!}
        <!-- AdminLTE App -->
        {!! Html::script('AdminLTE/dist/js/adminlte.js') !!}
        <script>
            $('li').on('click',function(e){
            $(this).parent().find('li.active').removeClass('active');
            $(this).addClass('active');
            });
            var idioma_espanol = {
                select: { rows: "%d fila seleccionada"},
                "sProcessing": "Procesando",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ning&uacute;n dato disponible en la tabla",
                "sInfo": "Registros del (_START_ al _END_) total de _TOTAL_ registros",
                "sInfoEmpty": "Registros del (0 al 0) total de 0 registros",
                "sInfoFiltered": "(Filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "<b>No se encontraron datos</b>",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Ultimo",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columnade manera descendiente"
                }
            }
        </script>
        @yield('scripts')
    </body>

</html>

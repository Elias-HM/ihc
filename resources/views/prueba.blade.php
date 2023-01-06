@extends('layouts.admin')
@section('title', 'Prueba')
@section('styles')
{!! Html::style('AdminLTE/plugins/sweetalert2/sweetalert2.min.css') !!}
{!! Html::style('AdminLTE/plugins/select2/css/select2.min.css') !!}
{!! Html::script('AdminLTE/plugins/nonblockjs/NonBlock.es5.js') !!}

{!! Html::style('AdminLTE/plugins/formValidation-v1.10.0/formValidation.min.css') !!}
<style type="text/css">
    .select2-container .select2-selection--single {
        height: 38px;
        border: 3px solid #ced4da;
        /* border: 3px solid red; */
        border-top: 0;
        border-left: 0;
        border-right: 0;
        border-radius: 0;
        box-shadow: inherit;
        border-bottom-width: 3px;
    }

    .is-invalid {
        border: 3px solid #dc3545;
        box-shadow: inherit;
    }

    .is-valid {
        border: 3px solid #28a745;
        box-shadow: inherit;
    }

    .select2-container--default.select2-container--above {
        border: 3px solid #dc3545;

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
                <h1 class="m-0">Registrar Prueba</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                    <li class="breadcrumb-item"><a href="">Prueba</a>
                    </li>
                    <li class="breadcrumb-item active"><a>Registrar Prueba</a></li>
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

                        <!--begin::Form-->
                        <form id="kt_docs_formvalidation_select2" class="form" action="#" autocomplete="off">
                            <!--begin::Input group--->
                            <div class="fv-row col-md-6">
                                <!--begin::Label-->
                                <label class="required form-label fs-6 mb-2">Select2 Input</label>
                                <!--end::Label-->

                                <!--begin::Select2-->
                                <select class="js-example-responsive" name="select2_input" data-control="select2">
                                    <option></option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                    <option value="4">Option 4</option>
                                </select>
                                <!--begin::Select2-->
                            </div>
                            <!--end::Input group--->

                            <!--begin::Actions-->
                            <button id="kt_docs_formvalidation_select2_submit" type="submit"
                                class="btn btn-primary">
                                <span class="indicator-label">
                                    Validation Form
                                </span>
                            </button>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
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

<!--formValidation-->
{!! Html::script('AdminLTE/plugins/formValidation-v1.10.0/formValidation.full.min.js') !!}
{!! Html::script('AdminLTE/plugins/formValidation-v1.10.0/bootstrap.min.js') !!}
{!! Html::script('resources/js/modelos_alertas.js') !!}
<script>
    $(document).ready(function () {
    $('.js-example-responsive').select2();
    });
    // validar_formulario();
    @if (count($errors) > 0)
        alert_sweetalert('aviso', 'Ocurrio un error', 'Por favor, corrija los errores que se muestran' ,'error');
        alert_pnotify('error-form',document.getElementById('error-title'),document.getElementById('error-body'));
    @endif
</script>
<script>
    // Define form element
    const form = document.getElementById('kt_docs_formvalidation_select2');

    // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var validator = FormValidation.formValidation(
        form,
        {
            fields: {
                'select2_input': {
                    validators: {
                        notEmpty: {
                            message: 'Select2 input is required'
                        }
                    }
                },
            },

            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap: new FormValidation.plugins.Bootstrap({
                    rowSelector: '.fv-row',
                    eleInvalidClass: '',
                    eleValidClass: ''
                })
            }
        }
    );

    // Revalidate Select2 input. For more info, plase visit the official plugin site: https://select2.org/
    $(form.querySelector('[name="select2_input"]')).on('change', function () {
        // Revalidate the field when an option is chosen
        validator.revalidateField('select2_input');
    });


    // Submit button handler
    const submitButton = document.getElementById('kt_docs_formvalidation_select2_submit');
    submitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (validator) {
            validator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    submitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    submitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        submitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        submitButton.disabled = false;

                        // Show popup confirmation
                        Swal.fire({
                            text: "Form has been successfully submitted!",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });

                        //form.submit(); // Submit form
                    }, 2000);
                }
            });
        }
    });
</script>

@endsection

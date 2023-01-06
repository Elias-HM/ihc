function index() {
    var table = $("#tablaProveedor").DataTable({
            paging: false,
            info: false,
            filter: false,
            responsive: true,
            language: idioma_espanol,
        }).data();

    function eliminar_proveedor() {
        $(".formulario-eliminar").submit(async function (e) {
            e.preventDefault();
            var data = table.row($(this).parents("tr")).data();
            if (table.row(this).child.isShown()) {
                //para obtener los datos una vez que el explorador esta minimizado
                var data = table.row(this).data();
            }
            var est = await alert_sweetalert(
                "confirmacion",
                "¿Esta seguro que desea eliminar el Proveedor '" + data[1] + "'?",
                "Este proveedor se eliminara definitivamente del sistema"
            );
            if (est) this.submit();
        });
    }
    eliminar_proveedor();
    //para cuendo la tabla este en modo responsive
    table.on( 'responsive-display', function ( e ) {
        eliminar_proveedor();
    });
}

function validar_formulario() {
    var fv;
    const frmProveedor = document.getElementById("frmProveedor");
    document.addEventListener("DOMContentLoaded", function (e) {
        fv = FormValidation.formValidation(frmProveedor, {
            fields: {
                nombre: {
                    validators: {
                        notEmpty: {
                            message:
                                '<b style="color: red;"> Este campo es obligatorio </b>',
                        },
                        stringLength: {
                            min: 1,
                            max: 255,
                            message:
                                '<b style="color: red;"> La cantidad maxima de caracteres es 255 </b>',
                        },
                    },
                },
                documento: {
                    validators: {
                        notEmpty: {
                            message:
                                '<b style="color: red;"> Este campo es obligatorio </b>',
                        },
                        stringLength: {
                            min: 11,
                            max: 11,
                            message:
                                '<b style="color: red;"> Formato invalido [Ejemplo: 10847349322] </b>',
                        },
                    },
                },
                direccion: {
                    validators: {
                        stringLength: {
                            min: 1,
                            max: 255,
                            message:
                                '<b style="color: red;">La cantidad maxima de caracteres es 255 </b>',
                        },
                    },
                },
                telefono: {
                    validators: {
                        regexp: {
                            message:
                                '<b style="color: red;"> Formato incorrecto. [Ejemplo: 927284672] </b>',
                            regexp: /(^([9][0-9]{8}))$/,
                        },
                    },
                },
                email: {
                    validators: {
                        stringLength: {
                            min: 0,
                            max: 255,
                            message:
                                '<b style="color: red;">La cantidad maxima de caracteres es 255 </b>',
                        },
                        regexp: {
                            message:
                                '<b style="color: red;">Formato incorrecto. [Ejemplo: example@mail.com].</b>',
                            regexp: /^[a-zA-Z]+[-_\.0-9a-zA-Z]*@[a-zA-Z0-9]+[a-zA-Z-_0-9]*\.[a-zA-Z]{2,4}(\.[a-zA-Z]{2})?$/,
                        },
                    },
                },
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap: new FormValidation.plugins.Bootstrap({
                    // rowSelector: ".form-control",
                    // rowSelector: ".row",
                }),
                submitButton: new FormValidation.plugins.SubmitButton(),
                icon: new FormValidation.plugins.Icon({
                    // valid: "fa fa-check fa-fw",
                    // invalid: "fa fa-times fa-fw",
                    // validating: "fa fa-refresh fa-fw",
                    // onPlaced: function (e) {
                    //     const parent = e.iconElement.parentNode;
                    //     const label = parent.querySelector("label");
                    //     label.appendChild(e.iconElement);
                    // },
                }),
                fieldStatus: new FormValidation.plugins.FieldStatus({
                    onStatusChanged: function (areFieldsValid) {
                        if (areFieldsValid) {
                            $(':input[type="submit"]').prop("disabled", false);
                        } else {
                            $(':input[type="submit"]').prop("disabled", true);
                        }
                    },
                }),
            },
        });
    });

    const submitButton = document.getElementById("button-submit");
    submitButton.addEventListener("click", function (e) {
        e.preventDefault();
        if (fv) {
            fv.validate().then(async function (status) {
                if (status == "Valid") {
                    // Disable button to avoid multiple click
                    submitButton.disabled = true;
                    var est = await alert_sweetalert(
                        "confirmacion",
                        "Esta seguro que desea Registrar el Proveedor",
                        "Se registrara los cambios realizados"
                    );
                    if (est) {
                        frmProveedor.submit();
                    }
                }
            });
        }
    });
}

function index() {
    var table = $("#tablaProducto")
        .DataTable({
            paging: false,
            info: false,
            filter: false,
            responsive: true,
            language: idioma_espanol,
        })
        .data();

    function eliminar_producto() {
        $(".formulario-eliminar").submit(async function (e) {
            e.preventDefault();
            var data = table.row($(this).parents("tr")).data();
            if (table.row(this).child.isShown()) {
                //para obtener los datos una vez que el explorador esta minimizado
                var data = table.row(this).data();
            }
            var est = await alert_sweetalert(
                "confirmacion",
                "¿Esta seguro que desea eliminar el Producto '" +
                    data[1] +
                    "'?",
                "Este producto se eliminara definitivamente del sistema"
            );
            if (est) this.submit();
        });
    }
    eliminar_producto();
    //para cuendo la tabla este en modo responsive
    table.on("responsive-display", function (e) {
        eliminar_producto();
    });
}

function validar_formulario() {
    var fv;
    const frmProducto = document.getElementById("frmProducto");
    document.addEventListener("DOMContentLoaded", function (e) {
        fv = FormValidation.formValidation(frmProducto, {
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
                precio: {
                    validators: {
                        notEmpty: {
                            message:
                                '<b style="color: red;"> Este campo es obligatorio </b>',
                        },
                        numeric: {
                            thousandsSeparator: "",
                            decimalSeparator: ".",
                            message:
                                '<b style="color: red;"> El valor ingresado no es valido </b>',
                        },
                    },
                },
                stock: {
                    validators: {
                        notEmpty: {
                            message:
                                '<b style="color: red;"> Este campo es obligatorio </b>',
                        },
                        numeric: {
                            thousandsSeparator: "",
                            decimalSeparator: ".",
                            message:
                                '<b style="color: red;"> El valor ingresado no es valido </b>',
                        },
                    },
                },
                codBarras: {
                    validators: {
                        stringLength: {
                            min: 13,
                            max: 13,
                            message:
                                '<b style="color: red;"> El valor ingresado no es valido </b>',
                        },
                    },
                },
                idUnidadMedida: {
                    validators: {
                        notEmpty: {
                            message:
                                '<b style="color: red;"> Este campo es obligatorio </b>',
                        },
                        integer: {
                            decimalSeparator: false,
                            message:
                                '<b style="color: red;"> El valor ingresado no es valido </b>',
                        },
                    },
                },
                idProveedor: {
                    validators: {
                        notEmpty: {
                            message:
                                '<b style="color: red;"> Este campo es obligatorio </b>',
                        },
                        integer: {
                            decimalSeparator: false,
                            message:
                                '<b style="color: red;"> El valor ingresado no es valido </b>',
                        },
                    },
                },
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap: new FormValidation.plugins.Bootstrap({
                    // rowSelector: ".form-control",
                    rowSelector: ".row",
                }),
                submitButton: new FormValidation.plugins.SubmitButton(),
                icon: new FormValidation.plugins.Icon({
                    // valid: "fa fa-check fa-fw",
                    // invalid: "fa fa-times fa-fw",
                    // validating: "fa fa-refresh fa-fw",
                    onPlaced: function (e) {
                        const parent = e.iconElement.parentNode;
                        const label = parent.querySelector("label");
                        label.appendChild(e.iconElement);
                    },
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
    $(frmProducto.querySelector('[name="idUnidadMedida"]')).on(
        "change",
        function () {
            // Revalidate the field when an option is chosen
            fv.revalidateField("idUnidadMedida");
        }
    );
    $(frmProducto.querySelector('[name="idProveedor"]')).on(
        "change",
        function () {
            // Revalidate the field when an option is chosen
            fv.revalidateField("idProveedor");
        }
    );

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
                        "Esta seguro que desea Registrar el Producto",
                        "Se registrara los cambios realizados"
                    );
                    if (est) {
                        frmProducto.submit();
                    }
                }
            });
        }
    });


}

function index() {
    var table = $("#tablaPrueba")
        .DataTable({
            paging: false,
            info: false,
            filter: false,
            responsive: true,
        })
        .data();
    // $(".formulario-eliminar").submit(async function (e) {
    //     e.preventDefault();
    //     var data = table.row($(this).parents("tr")).data();

    //     if (table.row(this).child.isShown()) {
    //         //para obtener los datos una vez que el explorador esta minimizado
    //         var data = table.row(this).data();
    //     }
    //     console.log('elimina');
    //     var est = await alert_sweetalert(
    //         "confirmacion",
    //         "Esta seguro que desea eliminar el Prueba '" + data[1] + "  ' ",
    //         "Este Prueba se eliminara definitivamente"
    //     );
    //     if (est) {
    //         this.submit();
    //     }
    // });

    const submitButton = document.getElementsByClassName("formulario-eliminar")[0];
    submitButton.addEventListener("click", async function (e) {
        console.log(this);
        e.preventDefault();
        var data = table.row($(this).parents("tr")).data();

        if (table.row(this).child.isShown()) {
            //para obtener los datos una vez que el explorador esta minimizado
            var data = table.row(this).data();
        }
        var est = await alert_sweetalert(
            "confirmacion",
            "Esta seguro que desea eliminar el Prueba '" + data[1] + "  ' ",
            "Este Prueba se eliminara definitivamente"
        );
        if (est) {
            this.submit();
        }
    });
}

function validar_formulario() {
    var fv;
    const frmPrueba = document.getElementById("frmPrueba");
    document.addEventListener("DOMContentLoaded", function (e) {
        fv = FormValidation.formValidation(frmPrueba, {
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
                tipoDocumento: {
                    validators: {
                        notEmpty: {
                            message:
                                '<b style="color: red;"> Seleccione un Tipo de Documento </b>',
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
                            min: 8,
                            max: 8,
                            message:
                                '<b style="color: red;"> Formato invalido [Ejemplo: 84734932] </b>',
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
                    rowSelector: ".row",
                }),
                submitButton: new FormValidation.plugins.SubmitButton(),
                icon: new FormValidation.plugins.Icon({
                    // valid: "fa fa-check fa-fw",
                    // invalid: "fa fa-times fa-fw",
                    // validating: "fa fa-refresh fa-fw",
                    valid: "material-icons valid-icon",
                    invalid: "material-icons invalid-icon",
                    validating: "material-icons validating-icon",
                    onPlaced: function (e) {
                        const parent = e.iconElement.parentNode;
                        const label = parent.querySelector("label");
                        label.appendChild(e.iconElement);
                    },
                }),
                // <i class="fas fa-trash fa-fw" style="color: red"></i>
                fieldStatus: new FormValidation.plugins.FieldStatus({
                    onStatusChanged: function (areFieldsValid) {
                        if (areFieldsValid) {
                            $(':input[type="submit"]').prop("disabled", false);
                            // this.submit();
                        } else {
                            $(':input[type="submit"]').prop("disabled", true);
                        }
                    },
                }),
            },
        });

        frmPrueba
            .querySelector('[name="tipoDocumento"]')
            .addEventListener("change", function (e) {
                const tipoDocumento = e.target.value;
                if (tipoDocumento === "") {
                    return;
                }

                let min, max, message;
                switch (tipoDocumento) {
                    case "DNI":
                        min = 8;
                        max = 8;
                        message =
                            '<b style="color: red;"> Formato invalido [Ejemplo: 84734932] </b>';
                        break;
                    case "RUC":
                        min = 11;
                        max = 11;
                        message =
                            '<b style="color: red;"> Formato invalido [Ejemplo: 10847349322] </b>';
                        break;
                    case "":
                    default:
                        min = 0;
                        max = 0;
                        message =
                            '<b style="color: red;"> Seleccione un Tipo de Documento </b>';
                        break;
                }

                fv.updateValidatorOption(
                    "documento",
                    "stringLength",
                    "min",
                    min
                )
                    .updateValidatorOption(
                        "documento",
                        "stringLength",
                        "max",
                        max
                    )
                    .updateValidatorOption(
                        "documento",
                        "stringLength",
                        "message",
                        message
                    )

                    // You might need to revalidate field
                    .revalidateField("documento");
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
                        "Esta seguro que desea Registrar el Prueba",
                        "Se registrara los cambios realizados"
                    );
                    if (est) {
                        frmPrueba.submit();
                    }
                }
            });
        }
    });
}

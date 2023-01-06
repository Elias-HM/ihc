window.addEventListener("DOMContentLoaded", () => {
    PNotify.defaults.styling = "brighttheme";
    PNotify.defaults.icons = "brighttheme";
    PNotify.defaults.addClass = "";
    PNotify.defaults.closerHover = true;
    PNotify.defaults.mode = "light";
});

function alert_pnotify(tipo, titulo, mensaje) {
    switch (tipo) {
        case "success":
            alert(mensaje);
            break;
        case "error-form":
            $(function () {
                if (!window.domNotice) {
                    window.domNotice = PNotify.error({
                        title: titulo,
                        text: mensaje,
                        icon: false,
                        maxTextHeight: null,
                        delay: Infinity,
                        // addModelessClass: 'nonblock'
                    });
                } else {
                    window.domNotice.open();
                }
            });
            break;
        case "error":
            $(function () {
                PNotify.error({
                    title: titulo,
                    text: mensaje,
                    delay: Infinity,
                });
            });
            break;
        case "":
            break;
        default:
            break;
    }
}

function alert_sweetalert(tipo, titulo, mensaje, estado) {
    if (tipo == "confirmacion") {
        return Swal.fire({
            title: titulo,
            text: mensaje,
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "¡Si, Proceder!",
            cancelButtonText: "Cancelar",
            reverseButtons: true,
        }).then((result) => {
            if (result.isConfirmed) {
                const result = new Promise((resolve) => {
                    resolve("true");
                });
                return result;
            }
        });
    }

    if (tipo == "aviso") {
        return Swal.fire({
            title: titulo,
            text: mensaje,
            icon: estado,
            showConfirmButton: false,
            timer: 5000,
        });
    }
}

function soloNumeros() {
    if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;
}

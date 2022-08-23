$(function () {
    // VALIDACION
    $("#form_budget").validate({
        debug: true,
        rules: {
            services: {
                required: true,
            },
            email: {
                email: true,
            },
            name: {
                required: (element) => {
                    let budget_email = document.getElementById("budget_email");
                    return budget_email.value.length > 0;
                },
            },
            meters: {
                required: true,
                number: true,
                minlength: 1,
                min: 0.01,
            },
        },
        messages: {
            services: {
                required: "Selecionar servicio",
            },
            email: {
                email: "Ingrese un correo electrónico válido.",
            },
            name: {
                required: "Introducir el nombre del cliente",
            },
            meters: {
                required: "Introduzca la cantidad de metros",
            },
        },

        errorElement: "div",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        },
    });
});

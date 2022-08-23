function send_mail(data) {
    const templateBody = `
    <div class="">
        <h2 style="font-size: 22px; margin-bottom: 15px; text-align: center;">Presupuesto De Servicios
            Solicitados</h2>

        <p style="margin-bottom: 25px;">Estimado/a ${data.name}:
            Ha solicitado información sobre los precios de nuestra compañía y cotización de
            productos y/o servicios. A continuación aparece nuestro presupuesto:</p>

        <p style="margin-bottom: 25px;"><strong>Precio total del servicio ${data.total_service}$</strong></p>

        <p>Gracias por darnos la oportunidad de ofrecerles este
            presupuesto. Llevamos en este
            negocio desde el año 2020 y tenemos muy buena reputación por la calidad de nuestros
            productos. Deseamos mostrarles que merece la pena.</p>

        <p>
            <small>Atentamente, Otilio Graterol</small>
        </p>
    </div>
    `;

    const params = {
        comment: templateBody,
        nombre: data.name,
        email: data.email,
        auth: 1,
    };

    Swal.fire({
        allowOutsideClick: false,
        allowEscapeKey: false,
        title: "Enviando Correo Electronico",
        html: "En este momento se está enviando la cotizacion de los servicios",
        timerProgressBar: true,
        didOpen: () => {
            Swal.showLoading();

            axios
                .post(http_send_mail, params)
                .then((resp) => {
                    Swal.close();

                    Swal.fire({
                        title: "Enviado Correctamente",
                        text: "El correo electronico fue enviado con exito",
                        icon: "success",
                    });
                })
                .catch((err) => {
                    const message = err.response.data.message;

                    Swal.fire({
                        title: "¡Ups!, ha ocurrido un error",
                        text: message,
                        icon: "error",
                    });
                    console.log(err);
                });
        },
    });
}

function budgetSweetAlert(total, data, url_form = null) {
    let tableTemplate = ``;
    let formItemsTemplate = ``;

    for (let i = 0; i < data.length; i++) {
        formItemsTemplate += `<input class="d-none" type="checkbox" name="services_id[]" checked value="${data[i].id}">`;

        tableTemplate +=
            `<tr><td>` +
            data[i].name +
            `</td><td>` +
            data[i].meters_requested +
            `</td><td>` +
            data[i].price_with_meters_requested_format +
            `</td></tr>`;
    }

    formItemsTemplate += `<input type="hidden" name="meters" value="${meters.value}">`;
    formItemsTemplate += `<input type="hidden" name="pdf_budget" value="1">`;

    let budgetHtml = `     
        <div class=" w-100">
            <table class="table table-striped table-inverse  w-100">
                <thead class="thead-inverse">
                    <tr>
                        <th>Servicio </th>
                        <th>Metros del local</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    ${tableTemplate}
                </tbody>
                <tfoot class="text-bold">
                    <td></td>
                    <td>Total:</td>
                    <td>${total}$</td>
                </tfoot>
            </table>


      
           <div class="input-group ">
               <textarea class=" form-control " name="" rows="1"  readonly  id="budget_text" style="resize: none;">Precio total del servicio ${total}$</textarea>
               <div class="input-group-append ">
                   <button class="btn btn-sm btn-info " data-clipboard-target="#budget_text" id="budget_copy">
                       <i class="fa fa-clipboard mr-1" aria-hidden="true"> <span class="d-none d-md-inline-block ">Copiar presupuesto</span></i>
                      
                   </button>
               </div>
            </div>
        </div>
        <form target="_blank" action="${httpGetQuoter}" method="GET">
            ${formItemsTemplate}
            
            <button id="btn_pdf_budget" type="submit" class="swal2-deny swal2-styled mt-3" aria-label="" style="display: inline-block;">
                <i class="fa fa-file-pdf mx-2"></i> Descargar PDF
            </button>
        </form>    
    </div>`;

    let swallParams = {
        html: budgetHtml,
        width: "800px",
    };

    if (budget_email.value.length > 0) {
        // swallParams.showDenyButton = true;
        swallParams.showCancelButton = true;
        swallParams.confirmButtonText = "Enviar";
        swallParams.cancelButtonText = `Cancelar`;
        // swallParams.denyButtonText = `<i class="fa fa-file-pdf mx-2"></i> Descargar PDF`;
        swallParams.title = `¿Quieres enviar esta Cotizacion al email registrado '${budget_email.value}'?`;
    } else {
        swallParams.showConfirmButton = false;
        swallParams.showCancelButton = false;
        swallParams.showDenyButton = false;
        swallParams.title = "Cotizacion";
    }

    Swal.fire(swallParams).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            Swal.fire("Enviado con exito!", "", "success");
            send_mail({
                name: budget_name.value,
                total_service: total,
                email: budget_email.value,
            });
        }
    });
}

function show_loader_quoter(loader) {
    const icon_total = document.getElementById("icon_total");
    const loader_total = document.getElementById("loader_total");
    const toggle_show = document.querySelectorAll(".toggle_show");

    if (!icon_total || !loader_total) return false;

    Array.from(toggle_show).forEach((item) => {
        item.classList.remove("d-none");
    });

    if (loader) {
        icon_total.classList.add("d-none");
    } else {
        loader_total.classList.add("d-none");
    }
}

async function total_services_quoter(only_data = null) {
    if (!services || !meters || !total_pay) return false;

    const value_services = $(services).val();
    const value_meters = $(meters).val();

    if (value_services.length < 1 || value_meters.length < 1) return false;

    if (!only_data) {
        show_loader_quoter(true);
    }

    const urlget = httpGetQuoter;

    const params = {
        params: {
            services_id: value_services,
            meters: value_meters,
        },
    };

    try {
        const { data } = await axios.get(urlget, params);
        console.log(data);
        if (!only_data) {
            total_pay.value = data.total_pay_format;

            show_loader_quoter(false);
        } else {
            return data;
        }
    } catch (error) {
        console.log(error);
    }
}

const objServices = [
    { name: "fumigacion", unit_price: 20, total_price: 100 },
    { name: "fumigacion", unit_price: 20, total_price: 100 },
    { name: "fumigacion", unit_price: 20, total_price: 100 },
    { name: "fumigacion", unit_price: 20, total_price: 100 },
    { name: "fumigacion", unit_price: 20, total_price: 100 },
    { name: "fumigacion", unit_price: 20, total_price: 100 },
    { name: "fumigacion", unit_price: 20, total_price: 100 },
    { name: "fumigacion", unit_price: 20, total_price: 100 },
    { name: "fumigacion", unit_price: 20, total_price: 100 },
];
// const sumall = objServices
//     .map((item) => item.total_price)
//     .reduce((prev, curr) => prev + curr, 0);
// console.log(sumall);

$(document).ready(async function () {
    const form_budget = document.getElementById("form_budget");

    new ClipboardJS("#budget_copy");

    form_budget.addEventListener("submit", async function (e) {
        e.preventDefault();

        let validForm = $(form_budget).valid();

        if (!validForm) return false;

        const submitter = e.submitter;
        submitter.disabled = true;

        const data = await total_services_quoter(true);

        submitter.disabled = false;

        budgetSweetAlert(data.total_pay_format, data.services);

        // e.target.reset();
        // $(services).val(null).trigger("change");
    });
});

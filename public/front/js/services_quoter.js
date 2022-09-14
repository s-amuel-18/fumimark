$(document).ready(async function () {
    const form_budget = document.getElementById("form_budget");
    const quoter_front = document.getElementById("quoter_front");
    const insert_quoter_modal = document.getElementById("insert_quoter_modal");

    new ClipboardJS("#budget_copy");

    if (!form_budget) return null;

    form_budget.addEventListener("submit", async function (e) {
        e.preventDefault();

        let validForm = $(form_budget).valid();

        if (!validForm) return false;

        const submitter = e.submitter;
        submitter.disabled = true;

        const data = await total_services_quoter(true);

        submitter.disabled = false;

        const template = templateBudget(data.services, data.total_pay_format);

        if (!insert_quoter_modal || !quoter_front) return false;
        insert_quoter_modal.innerHTML = template;

        $(quoter_front).modal("show");
    });
});

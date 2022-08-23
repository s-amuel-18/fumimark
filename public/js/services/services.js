$(function () {
    const event_change_quoter = document.querySelectorAll(
        ".event_change_quoter"
    );

    $(event_change_quoter).on("keyup", (e) => {
        total_services_quoter();
    });
    $(event_change_quoter).on("change", (e) => {
        total_services_quoter();
    });
});

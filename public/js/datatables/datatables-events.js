$(document).ready( function () {
    $('#events-table').DataTable({
        scrollY: "500px",
        columnDefs: [
            { orderable: false, targets: [5]},
            { type: "date-euro", targets: [3,4] },
            { type: "chinese-string", targets: [1,2] }
        ],
        order: [[1, "asc"]],
        language: {
            url:
                "https://cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese-Brasil.json"
        }
    });
});
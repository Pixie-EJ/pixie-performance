$(document).ready( function () {
    $('#events-table').DataTable({
        scrollY: "400px",
        columnDefs: [
            { orderable: false, targets: [1]},
            { type: "chinese-string", targets: [0] }
        ],
        order: [[1, "asc"]],
        language: {
            url:
                "https://cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese-Brasil.json"
        }
    });
});
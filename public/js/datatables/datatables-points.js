$(document).ready( function () {
    $('#score-table').DataTable({
        scrollY: "400px",
        columnDefs: [
            { "sWidth": "150px", "aTargets": [1] },
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
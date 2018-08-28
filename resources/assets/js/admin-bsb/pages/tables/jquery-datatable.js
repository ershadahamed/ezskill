$(function () {
    $('.js-basic-example').DataTable({
        responsive: true
    });

    //Exportable table
    window.$('.js-exportable').DataTable({
        dom: 'Bfrtip',
        responsive: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});
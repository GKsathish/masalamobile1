/*
 Template Name: Veltrix - Responsive Bootstrap 4 Admin Dashboard
 Author: Themesbrand
 File: Datatable js
 */

$(document).ready(function() {
    
    //Buttons examples
    var table = $('#datatable').DataTable({
        lengthChange: false,
        buttons: ['excel', 'pdf', 'print']
    });

    table.buttons().container()
        .appendTo('#datatable_wrapper .col-md-6:eq(0)');
        
});
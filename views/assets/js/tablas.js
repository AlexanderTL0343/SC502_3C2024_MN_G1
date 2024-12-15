function listarRolCrud() {
    tabla = $('#tblRolesCrud').dataTable({
        aProcessing: true,
        aServerSide: true,
        dom: 'Bfrtip',
        buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdf'],
        ajax: {
            url: '../controllers/TablasControllers.php?op=LlenarTablaRol',
            type: 'GET',
            dataType: 'json',
            dataSrc: 'aaData',
            
            error: function(e) {
                console.log(e.responseText);
            }
        },
        bDestroy: true,
        iDisplayLength: 5,
        columns: [
            { data: "0" }, 
            { data: "1" }, 
            
        ]
    });
}

$(document).ready(function() {
    listarRolCrud();
});
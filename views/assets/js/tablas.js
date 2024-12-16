function listarRolCrud() {
    tabla = $('#tblRolesCrud').dataTable({
        aProcessing: true,
        aServerSide: true,
        dom: 'Bfrtip',
        buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdf'],
        ajax: {
            url: '../controllers/TablaRolControllers.php?op=LlenarTablaRol',
            type: 'GET',
            dataType: 'json',
            dataSrc: 'aaData',

            error: function (e) {
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

function listarUserCrud() {
    tabla = $('#tblUserCrud').dataTable({
        aProcessing: true,
        aServerSide: true,
        dom: 'Bfrtip',
        buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdf'],
        ajax: {
            url: '../controllers/TablaUserControllers.php?op=LlenarTablaUser',
            type: 'GET',
            dataType: 'json',
            dataSrc: 'aaData',

            error: function (e) {
                console.log(e.responseText);
            }
        },
        bDestroy: true,
        iDisplayLength: 5,
        columns: [
            { data: "0" },
            { data: "1" },
            { data: "2" },
            { data: "3" },
            { data: "4" },
            { data: "5" },
            { data: "6" },
        ]
    });
}

function listarPubliCrud() {
    tabla = $('#tblPublicacionesCrud').dataTable({
        aProcessing: true,
        aServerSide: true,
        dom: 'Bfrtip',
        buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdf'],
        ajax: {
            url: '../controllers/ablaPubliControllers.php?op=LlenarTablaPubli',
            type: 'GET',
            dataType: 'json',
            dataSrc: 'aaData',

            error: function (e) {
                console.log(e.responseText);
            }
        },
        bDestroy: true,
        iDisplayLength: 5,
        columns: [
            { data: "0" },
            { data: "1" },
            { data: "2" },
            { data: "3" },
            { data: "4" },
            { data: "5" },
            { data: "6" },
            { data: "7" },
        ]
    });
}


function listarCaliCrud() {
    tabla = $('#tblCalificacionesCrud').dataTable({
        aProcessing: true,
        aServerSide: true,
        dom: 'Bfrtip',
        buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdf'],
        ajax: {
            url: '../controllers/TablaCaliControllers.php.php?op=LlenarTablaCali',
            type: 'GET',
            dataType: 'json',
            dataSrc: 'aaData',

            error: function (e) {
                console.log(e.responseText);
            }
        },
        bDestroy: true,
        iDisplayLength: 5,
        columns: [
            { data: "0" },
            { data: "1" },
            { data: "2" },
            { data: "3" },

        ]
    });
}

$(document).ready(function () {
    listarRolCrud();
});

$(document).ready(function () {
    listarUserCrud();
});

$(document).ready(function () {
    listarPubliCrud();
});

$(document).ready(function () {
    listarCaliCrud();
});
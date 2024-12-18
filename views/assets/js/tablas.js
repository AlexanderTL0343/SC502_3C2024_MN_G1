/Funcion para limpieza de los formularios/
function limpiarForms() {
  $('#modulos_add').trigger('reset');
  $('#modulos_update').trigger('reset');
}

/Funcion para cancelacion del uso de formulario de modificación/
function cancelarForm() {
  limpiarForms();
  $('#formulario_add').show();
  $('#formulario_update').hide();
}

function cancelarFormPubli() {
  limpiarForms();
  $('#formulario_add_p').show();
  $('#formulario_update_p').hide();
}

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
      { data: "7" },
      { data: "8" },
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
      url: '../controllers/TablaPubliControllers.php?op=LlenarTablaPubli',
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
      { data: "8" },
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
      url: '../controllers/TablaCaliControllers.php?op=LlenarTablaCali',
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

    ]
  });
}
function listarProfeCrud() {
  tabla = $('#tblProfeCrud').dataTable({
    aProcessing: true,
    aServerSide: true,
    dom: 'Bfrtip',
    buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdf'],
    ajax: {
      url: '../controllers/TablaProfeController.php?op=LlenarTablaProfe',
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


function listarEstadoCrud() {
  tabla = $('#tblestadoCrud').dataTable({
    aProcessing: true,
    aServerSide: true,
    dom: 'Bfrtip',
    buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdf'],
    ajax: {
      url: '../controllers/TablaEstController.php?op=LlenarTablaEstado',
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
      { data: "2" }

    ]
  });
}

function listarCateCrud() {
  tabla = $('#tblcateCrud').dataTable({
    aProcessing: true,
    aServerSide: true,
    dom: 'Bfrtip',
    buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdf'],
    ajax: {
      url: '../controllers/TablaCateController.php?op=LlenarTablaCate',
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
      { data: "2" }

    ]
  });
}




$(function () {
  $('#formulario_update').hide();
  listarUserCrud();
});

/*
CRUD USUARIOS
*/
/Habilitacion de form de modificacion al presionar el boton en la tabla/
$('#tblUserCrud tbody').on(
  'click',
  'button[id="modificarUsuario"]',
  function () {
    var data = $('#tblUserCrud').DataTable().row($(this).parents('tr')).data();
    limpiarForms();
    $('#formulario_add').hide();
    $('#formulario_update').show();
    $('#Eid').val(data[0]);
    $('#Enombre').val(data[1]);
    $('#Eedad').val(data[2]);
    $('#Eemail').val(data[3]);
    $('#Eprofesion').val(data[4]);
    $('#Erol').val(data[6]);
    return false;
  }
);

/Funcion para modificacion de datos de usuario/
$('#usuario_update').on('submit', function (event) {
  event.preventDefault();
  bootbox.confirm('¿Desea modificar los datos?', function (result) {
    if (result) {
      var formData = new FormData($('#usuario_update')[0]);
      $.ajax({

        url: '../controllers/TablaUserControllers.php?op=editar',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function (datos) {
          switch (String(datos)) {
            case "0":
              toastr.error('Error: No se pudieron actualizar los datos');
              break;
            case "1":
              alert('Usuario actualizado exitosamente');
              location.reload();
              limpiarForms();
              $('#formulario_update').hide();
              $('#formulario_add').show();
              break;
            case "2":
              toastr.error('Error: ID no pertenece al usuario.');
              break;
          }
        },
      });
    }
  });
});

$(function () {
  $('#formulario_update_p').hide();
  listarPubliCrud();
});
/*
CRUD PUBLICACIONES
*/
/Habilitacion de form de modificacion al presionar el boton en la tabla/
$('#tblPublicacionesCrud tbody').on(
  'click',
  'button[id="modificarPubli"]',
  function () {
    var data = $('#tblPublicacionesCrud').DataTable().row($(this).parents('tr')).data();
    limpiarForms();
    $('#formulario_add_p').hide();
    $('#formulario_update_p').show();
    $('#Pid').val(data[0]);
    $('#Puser').val(data[1]);
    $('#Ptitulo').val(data[2]);
    $('#Pdescripcion').val(data[3]);
    $('#Pubicacion').val(data[5]);
    $('#Pprecio').val(data[6]);

    return false;
  }
);

/Funcion para modificacion de datos de una publicacion/
$('#publi_update').on('submit', function (event) {
  event.preventDefault();
  bootbox.confirm('¿Desea modificar los datos?', function (result) {
    if (result) {
      var formData = new FormData($('#publi_update')[0]);
      $.ajax({

        url: '../controllers/TablaPubliControllers.php?op=editar',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function (datos) {
          alert(datos)
          switch (String(datos)) {
            case "0":
              toastr.error('Error: No se pudieron actualizar los datos');
              break;
            case "1":
              alert('Publicacion actualizada exitosamente');
              location.reload();
              limpiarForms();
              $('#formulario_update_p').hide();
              $('#formulario_add_p').show();
              break;
            case "2":
              toastr.error('Error: ID no pertenece a la publicacion.');
              break;
          }
        },
      });
    }
  });
});

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

$(document).ready(function () {
  listarProfeCrud();
});

$(document).ready(function () {
  listarEstadoCrud();
});

$(document).ready(function () {
  listarCateCrud();
});



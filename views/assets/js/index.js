
function limpiarFormulario() {
    document.getElementById("cedula").value = "";
    document.getElementById("nombre").value = "";
    document.getElementById("apellido1").value = "";
    document.getElementById("email").value = "";
    document.getElementById("contrasena").value = "";
    document.getElementById("edad").value = "";
    document.getElementById("direccion").value = "";
    document.getElementById("telefono").value = "";
}

//FUNCION PARA REGISTRAR USUARIO
$(document).ready(function () {
    $("#registroUsuario").on("submit", function (e) {
      e.preventDefault();
      var formData = new FormData($("#registroUsuario")[0]);
      $.ajax({
        url: "../controllers/UserController.php?op=insertarUsuario",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (response) {
  
          response = JSON.parse(response);
          switch (response[0].status) {
            case true:
                alert("Usuario registrado exitosamente");
                limpiarFormulario();
                window.location.href = "main.php"; // Redirigir a la pagina de PAOLA
              break;
  
            case false:
                alert("Error al registrar el usuario");
              break;
          }
        },
        error: function (err) {
            console.error("Error en la solicitud AJAX:", err);
            alert("Error inesperado al registrar el usuario");
        },
      });
    });
  });
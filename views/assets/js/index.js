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

//FUNCION PARA HABILITAR EL BOTON DE REGISTRAR POR EL CHECKBOX
document.addEventListener("DOMContentLoaded", function () {
  // Referencias a los elementos
  const checkbox = document.getElementById("checkTerminos");
  const botonRegistro = document.getElementById("botonRegistro");

  // Verifica si los elementos existen en el DOM
  if (checkbox && botonRegistro) {
    // Agregar el evento solo si los elementos existen
    checkbox.addEventListener("change", function () {
      botonRegistro.disabled = !this.checked;
    });
  }
});

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
            limpiarFormulario();
            Swal.fire({
                icon: "success",
                title: "Usuario registrado exitosamente",
                showConfirmButton: false,
                timer: 1800,
              }).then(() => {
                // Redirigir después de que el cuadro desaparezca
                window.location.href = "index.php";  // Redirigir a la pagina de PAOLA

              })
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
//-----------------------------------------------------
function limpiarFormLogin() {
  document.getElementById("email").value = "";
  document.getElementById("contrasena").value = "";
}

//Funcion para iniciar sesion
$("#login").on("submit", function (e) {
  e.preventDefault();
  var formData = new FormData($("#login")[0]);
  $.ajax({
    url: "../controllers/UserController.php?op=iniciarSesion",
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    
    success: function (datos) {
      datos = JSON.parse(datos);
      switch (datos[0].status) {
        case true:
          limpiarFormLogin();
          console.log(datos[0].nombreRol);
          Swal.fire({
            icon: "success",
            title: "Sesión iniciada",
            text: "¡Bienvenido " + datos[0].nombre + "!",
            showConfirmButton: false,
            timer: 1200,
          }).then(() => {
            // Redirigir después de que el cuadro desaparezca
            window.location.href = "main.php";  // Redirigir a la pagina de PAOLA
            });
          break;

        case false:
            Swal.fire({
                icon: "error",
                title: "Error al iniciar sesión",
                text: "Usuario o contraseña incorrecta!",
              });
          break;
      }
    },
    error: function (xhr, status, error) {
      console.error("Error en la solicitud AJAX:", xhr.status, xhr.statusText);
      alert("Error inesperado al iniciar sesión");
    },
  });
});

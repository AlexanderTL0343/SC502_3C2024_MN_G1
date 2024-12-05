const ctx = document.getElementById("myChart");
//recorrio la data e hizo los 2 arreglos
labelData = ["Pablo", "Blue", "Yellow", "Green", "Purple", "Orange"];
dataData = [12, 19, 3, 22, 2, 3];
new Chart(ctx, {
  type: "pie",
  data: {
    labels: labelData,
    datasets: [
      {
        label: "# of Votes",
        data: dataData,
        borderWidth: 1,
      },
    ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});
//---------------------------------------------------------------------------
document.addEventListener("DOMContentLoaded", function () {
  $.ajax({
    url: "../controllers/GraficoControllers.php?op=getUsuariosPorRol",
    type: "POST",
    data: {},
    contentType: false,
    processData: false,
    success: function (response) {
      console.log("Respuesta del servidor:", response); 
      response = JSON.parse(response);

      roles = [];
      cantidad = [];

      response.forEach(element => {
        roles.push(element.NOMBRE_ROL);
        cantidad.push(element.cantidad);
      });


      listarGrafUsuariosTot(roles, cantidad);
      
    },
    error: function (err) {
      console.error("Error en la solicitud AJAX:", err);
      alert("Error inesperado al obtener los datos");
    },
  });
});

function listarGrafUsuariosTot(nombres, datos) {
  // Gráfico de cantidad de usuarios
  const ctx2 = document.getElementById("graf-cantidadUsuarios");
  
  new Chart(ctx2, {
    type: "pie",
    data: {
      labels: nombres,
      datasets: [
        {
          label: "Usuarios",
          data: datos,
          borderWidth: 1,
        },
      ],
    },
    options: {
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });
}
//---------------------------------------------------------------------------
document.addEventListener("DOMContentLoaded", function () {
  $.ajax({
    url: "../controllers/GraficoControllers.php?op=getUsuariosPorEdad",
    type: "POST",
    data: {},
    contentType: false,
    processData: false,
    success: function (response) {
      console.log("Respuesta del servidor:", response); 
      response = JSON.parse(response);

      edades =  [];
      cantidad = [];

      response.forEach(element => {
        edades.push(element.EDAD);
        cantidad.push(element.CANTIDAD);
      });

      listarGrafUsuariosEdad(edades, cantidad);
      
    },
    error: function (err) {
      console.error("Error en la solicitud AJAX:", err);
      alert("Error inesperado al obtener los datos");
    },
  });
});

function listarGrafUsuariosEdad(edades, datos) {
  // Gráfico de cantidad de usuarios
  const ctx3 = document.getElementById("graf-usuarioPorEdad");
  new Chart(ctx3, {
    type: "bar",
    data: {
      labels: edades,
      datasets: [
        {
          label: "Edad",
          data: datos,
          borderWidth: 1,
        },
      ],
    },
    options: {
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });
}
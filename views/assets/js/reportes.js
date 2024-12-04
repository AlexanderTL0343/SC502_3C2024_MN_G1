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
    url: "../controllers/GraficoControllers.php?op=getDatosGraficos",
    type: "POST",
    dataType: "json",
    success: function (response) {
      console.log("Respuesta del servidor:", response); 

      listarGrafUsuariosTot(response.NOMBRE_ROL, response.cantidad);
      
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

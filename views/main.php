
<?php
$categoriaSeleccionada = isset($_GET['categoria']) ? $_GET['categoria'] : 'todos';

// Aquí cargarías las ofertas desde una base de datos.
// Simulación de ofertas:
$ofertas = [
    ['categoria' => 'desarrollo', 'titulo' => 'Taller Mecánico', 'empresa' => 'Tech Solutions', 'salario' => '$1,000 - $2,500'],
    ['categoria' => 'administracion', 'titulo' => 'Asistente Administrativo', 'empresa' => 'Corp Admin', 'salario' => '$800 - $1,200'],
    ['categoria' => 'diseno', 'titulo' => 'Sublimación', 'empresa' => 'Creative Studio', 'salario' => '$300 - $1,000'],
    ['categoria' => 'atencion', 'titulo' => 'Ropa x Kilo', 'empresa' => 'Lavandería Elenita', 'salario' => '$10 - $1,000'],
];

$ofertasFiltradas = array_filter($ofertas, function ($oferta) use ($categoriaSeleccionada) {
    return $categoriaSeleccionada === 'todos' || $oferta['categoria'] === $categoriaSeleccionada;
});
?>

<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">


<?php
include("./assets/fragmentos/sinSesion401.php");
include("./assets/fragmentos/head.php");
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsa de Trabajo</title>
</head>
<?php include ("./assets/fragmentos/head.php"); ?>
<body>

<?php include("../config/session.php"); ?> <!--PARA COLOCAR EL HEADER DEPENDIENDO DEL ROL-->
<?php include ("./assets/fragmentos/header.php"); ?>
    <main>
         <!-- Parte de los filtros  -->
         <section id="filtros">
            <h2>Filtrar Trabajos</h2>
            <form id="form-filtros">
                <label for="categoria">Categoría:</label>
                <select id="categoria">
                    <option value="todos">Todos</option>
                    <option value="desarrollo">Automotiz </option>
                    <option value="administracion">Administración</option>
                    <option value="diseno">Diseño</option>
                    <option value="atencion">Hogar</option>
                </select>
            </form>
        </section>

            <form id="form-filtros" method="GET" action="tu_archivo.php">
    <label for="categoria">Categoría:</label>
    <select id="categoria" name="categoria">
        <option value="todos">Todos</option>
        <option value="desarrollo">Automotiz</option>
        <option value="administracion">Administración</option>
        <option value="diseno">Diseño</option>
        <option value="atencion">Hogar</option>
    </select>
</form>

        </section>
<!-- empleos actuales   -->
        <section>
            <div class="container px-4 px-lg-5 mt-5">
            </form>
        </section>
</main>


<style> /* General Styles */
           
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    background-color: #f8faf8;
}

.navbar-brand {
    font-weight: bold;
    color: #0d6efd;
}
.form-busqueda{
    max-width: 600px;
    width: 100%;
}
.sidebar {/*BARRA LATERAL*/
    width: 250px;
    position: fixed;
    top: 56px;
    bottom: 0;
    right: -250px;
    z-index: 100;
    padding: 48px 0 0;
    box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
    background-color: #f8f9fa;
    color: #212529;
    transition: right 0.3s ease-in-out;
}
#sidebar-toggle:checked ~ .sidebar {
    right: 0;
}
.content {
    margin-right: 0;
    transition: margin-right 0.3s ease-in-out;
}
#sidebar-toggle:checked ~ .content {
    margin-right: 250px;
}

.hero{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    min-height: 80vh; /* Esto hará que el hero ocupe al menos la altura de la pantalla */
    background-color:#e3f2fd;
}

.plogin{margin: 0;}

main {
    padding: 2rem;
}
.wide-paragraph{
    max-width: 100%; /* Ajusta el ancho al 80% del contenedor padre */
    margin: 5 auto; /* Centra el párrafo en el contenedor */
    text-align: justify; /* Justifica el texto */
  }

 </style>



<script>
            document.getElementById('form-publicar').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Obtener datos del formulario
    const titulo = document.getElementById('titulo').value;
    const descripcion = document.getElementById('descripcion').value;
    const salario = document.getElementById('salario').value;
    const contacto = document.getElementById('contacto').value;

    // Crear una nueva tarjeta
    const tarjeta = document.createElement('div');
    tarjeta.classList.add('tarjeta');
    tarjeta.innerHTML = `
        <h3>${titulo}</h3>
        <p>${descripcion}</p>
        <p><strong>Salario:</strong> $${salario}</p>
        <p><strong>Contacto:</strong> ${contacto}</p>
    `;

    // Añadir la tarjeta a la lista
    document.getElementById('lista-trabajos').appendChild(tarjeta);

    // Limpiar el formulario
    document.getElementById('form-publicar').reset();
});


// Filtrar trabajos por categoría
document.getElementById('categoria').addEventListener('change', function () {
    const selectedCategory = this.value;
    const jobs = document.querySelectorAll('.col.mb-5');

    jobs.forEach(job => {
        const jobCategory = job.getAttribute('data-category');
        if (selectedCategory === 'todos' || jobCategory === selectedCategory) {
            job.style.display = 'block';
        } else {
            job.style.display = 'none';
        }
    });
});
</script>

<?php include ("./assets/fragmentos/footer.php"); ?>
</body>
<?php include ("./assets/fragmentos/scripts.php"); ?>
</html>

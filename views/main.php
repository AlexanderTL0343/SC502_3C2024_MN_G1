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
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsa de Trabajo</title>
</head>
<?php include ("./assets/fragmentos/head.php"); ?>
<body>
<?php include ("./assets/fragmentos/header.php"); ?>
    <main>


    
         <!-- Parte de los filtros  -->
         <section id="filtros">
            <h2>Filtrar Trabajos</h2>
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
                <h2 class="text-center mb-4">Oferta de Empleo</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <!-- Job Offer 1 -->
                    <div class="col mb-5" data-category="desarrollo">
                        <div class="card h-100">
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="Trabajo 1" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Taller Mecanico</h5>
                                    <p class="mb-1">Empresa: Tech Solutions</p>
                                    <p>$1,000 - $2,500 por trabajo</p>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Ver detalles</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Job Offer 2 -->
                    <div class="col mb-5" data-category="administracion">
                        <div class="card h-100">
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="Trabajo 2" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Asistente Administrativo</h5>
                                    <p class="mb-1">Empresa: Corp Admin</p>
                                    <p>$800 - $1,200 por Trabajo</p>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Ver detalles</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Job Offer 3 -->
                    <div class="col mb-5" data-category="diseno">
                        <div class="card h-100">
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="Trabajo 3" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Sublimación</h5>
                                    <p class="mb-1">Empresa: Creative Studio</p>
                                    <p>$300 - $1,000 por trabajo</p>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Ver detalles</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Job Offer 4 -->
                    <div class="col mb-5" data-category="atencion">
                        <div class="card h-100">
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="Trabajo 4" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Ropa x kilo</h5>
                                    <p class="mb-1">Empresa: Lavanderia Elenita</p>
                                    <p>$10 - $1,000 por trabajo </p>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Ver detalles</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!-- form para ptublicar su empleo  -->
        <section id="publicar-trabajo">
            <h2>Publicar Trabajo</h2>
            <form id="form-publicar">
                <label for="titulo">Título del Trabajo:</label>
                <input type="text" id="titulo" placeholder="Ej: Desarrollador Web" required>
                
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" placeholder="Detalles sobre el trabajo..." required></textarea>
                
                <label for="salario">Salario:</label>
                <input type="number" id="salario" placeholder="Ej: 50000" required>
                
                <label for="contacto">Contacto:</label>
                <input type="text" id="contacto" placeholder="Correo o Teléfono" required>
                
                <button type="submit">Publicar</button>
            </form>
        </section>

       
        
        
    </main>
    <script src="script.js"></script>

        <style>
            /* General Styles */
body {
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

.wide-paragraph{
    max-width: 100%; /* Ajusta el ancho al 80% del contenedor padre */
    margin: 5 auto; /* Centra el párrafo en el contenedor */
    text-align: justify; /* Justifica el texto */
  }

  

/* Section Titles */
h2 {
    font-size: 1.8rem;
    color: #495057;
    margin-bottom: 1.5rem;
    text-align: center;
}

/* Form Styles */
form {
    max-width: 600px;
    margin: 0 auto 3rem auto;
    background-color: #ffffff;
    padding: 1.5rem;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

form label {
    display: block;
    font-weight: 600;
    margin-bottom: 0.5rem;
    color: #495057;
}

form input,
form textarea,
form button {
    width: 100%;
    padding: 0.8rem;
    margin-bottom: 1rem;
    border: 1px solid #ced4da;
    border-radius: 4px;
    font-size: 1rem;
}

form input:focus,
form textarea:focus {
    outline: none;
    border-color: #007bff;
    box-shadow: 0 0 4px rgba(0, 123, 255, 0.25);
}

form button {
    background-color: #007bff;
    color: #ffffff;
    border: none;
    cursor: pointer;
    font-weight: 600;
    text-transform: uppercase;
    transition: background-color 0.3s;
}

form button:hover {
    background-color: #0056b3;
}

/* Ofertas de Trabajo */
.container {
    max-width: 1200px;
    margin: ao;
}

.card {
    border: none;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);
}

.card img {
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
    max-height: 200px;
    object-fit: cover;
}

.card-body {
    padding: 1.5rem;
    text-align: center;
    background-color: #ffffff;
}

.card-body h5 {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
    color: #212529;
}

.card-body p {
    font-size: 0.9rem;
    color: #6c757d;
    margin: 0.2rem 0;
}

.card-footer {
    padding: 1rem;
    text-align: center;
    background-color: #ffffff;
    border-top: 1px solid #e9ecef;
}

.card-footer .btn {
    font-size: 0.9rem;
    font-weight: 600;
    padding: 0.5rem 1rem;
    border: 1px solid #007bff;
    color: #007bff;
    border-radius: 4px;
    text-transform: uppercase;
    transition: all 0.3s;
}

.card-footer .btn:hover {
    background-color: #007bff;
    color: #ffffff;
}




/* Filtros */
#filtros {
    margin-top: 10px;
    margin-bottom: 2rem;
    float: right; /* Alinear a la derecha */
    text-align: left; /* Mantener el contenido alineado a la izquierda dentro del contenedor */
}

#filtros h2 {
    font-size: 1.5rem;
    color: #495057;
    margin-bottom: 1rem;
    text-align: center; /* Centrar el título dentro del contenedor */
}

#form-filtros {
    display: block;
    background-color: #ffffff;
    padding: 1rem;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 200px; /* Definir un ancho fijo */
}

#form-filtros label {
    display: block; /* Para asegurar que el texto esté encima del select */
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: #495057;
}

#form-filtros select {
    width: 100%; /* Ajustar el ancho del select al contenedor */
    padding: 0.5rem;
    font-size: 1rem;
    border: 1px solid #ced4da;
    border-radius: 4px;
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

<!DOCTYPE html>
<html lang="es">
<?php include ("./assets/fragmentos/head.php"); ?>
<body>
<?php include ("./assets/fragmentos/header.php"); ?>
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

        <style>
            /* General Styles */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f9fa;
    color: #212529;
}

header {
    background-color: #343a40;
    color: #ffffff;
    padding: 1rem;
    text-align: center;
}

header h1 {
    margin: 0;
    font-size: 2rem;
}

main {
    padding: 2rem;
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
         <script src="script.js"></script>

<?php include ("./assets/fragmentos/footer.php"); ?>
</body>
<?php include ("./assets/fragmentos/scripts.php"); ?>
</html>

<?php
// Inicia la sesión si es necesario
session_start();
?>
<!DOCTYPE html>
<html lang="es">


<?php
include("./assets/fragmentos/sinSesion401.php");

?>

<?php
include("./assets/fragmentos/head.php");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsa de Trabajo</title>
    <!-- Agregar Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   

</head>
<?php include ("./assets/fragmentos/head.php"); ?>
<body>

    <?php include("../config/session.php"); ?> <!--PARA COLOCAR EL HEADER DEPENDIENDO DEL ROL-->


<!--Estructura HTML para el filtro-->

<div class="container mt-4">
    <label for="categoryFilter">Filtrar por categoría:</label>
    <select id="categoryFilter" class="form-select" onchange="filterProducts()">
        <option value="all">Todas</option>
        <option value="cuidado-ninos">Cuidado de Niños</option>
        <option value="jardineria">Jardinería</option>
        <option value="arreglo-ropa">Arreglo de Ropa</option>
        <option value="limpieza">Limpieza</option>
        <option value="cuidado-mascotas">Cuidado de Mascotas</option>
        <option value="reparaciones">Reparaciones y Mantenimiento</option>
        <option value="comida-catering">Comida y Catering</option>
        <option value="ventas">Ventas y Comercio</option>
        <option value="asistencia-personal">Asistencia Personal</option>
        <option value="belleza">Servicios de Belleza</option>
        <option value="otros-empleos">Otros</option>


    </select>

    
        <!-- Botón para postular un nuevo trabajo -->
        <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#postJobModal">Postular un nuevo trabajo</button>
   
</div>
    <section>
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

<!--Primer carta -->
            <div class="col mb-5" data-category="cuidado-ninos">
    <div class="card h-100">
        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
        <div class="card-body p-4">
            <div class="text-center">
                <h5 class="fw-bolder">Cuidado de Niños</h5>
                $40.00 - $80.00
            </div>
        </div>
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"> <a class="btn btn-outline-dark mt-auto" href="#" data-bs-toggle="modal" data-bs-target="#applicationModal">Ver empleo</a>
            </div>
        </div>
    </div>
</div>
<!--Segunda  carta -->
                <div class="col mb-5" data-category="jardineria">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Servicios de Arreglos Florales</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$20.00</span>
                                $18.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"> <a class="btn btn-outline-dark mt-auto" href="#" data-bs-toggle="modal" data-bs-target="#applicationModal">Ver empleo</a>
                            </div>
                        </div>
                    </div>
                </div>


 <!--Tercera carta -->               
                <div class="col mb-5" data-category="cuidado-mascotas">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Cuidado y Paseo de Mascotas</h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$50.00</span>
                                $25.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"> <a class="btn btn-outline-dark mt-auto" href="#" data-bs-toggle="modal" data-bs-target="#applicationModal">Ver empleo</a>
                            </div>
                        </div>
                    </div>
                </div>

    <!--Cuarta carta -->              
                <div class="col mb-5" data-category="ventas">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Productos Ecológicos</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                $40.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"> <a class="btn btn-outline-dark mt-auto" href="#" data-bs-toggle="modal" data-bs-target="#applicationModal">Ver empleo</a>
                            </div>
                        </div>
                    </div>
                </div>

   <!--Quinta carta -->             
                <div class="col mb-5" data-category="arreglo-ropa">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Venta de Ropa de Segunda Mano</h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$50.00</span>
                                $25.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"> <a class="btn btn-outline-dark mt-auto" href="#" data-bs-toggle="modal" data-bs-target="#applicationModal">Ver empleo</a>
                            </div>
                        </div>
                    </div>
                </div>

<!--Quinta  carta -->                
                <div class="col mb-5"  data-category="otros-empleos">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Fotografía y Edición de Fotost</h5>
                                <!-- Product price-->
                                $120.00 - $280.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"> <a class="btn btn-outline-dark mt-auto" href="#" data-bs-toggle="modal" data-bs-target="#applicationModal">Ver empleo</a>
                            </div>
                        </div>
                    </div>
                </div>

<!--Sexta carta -->                
                <div class="col mb-5" data-category="jardineria">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Venta de Flores y Arreglos Florales</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$20.00</span>
                                $18.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"> <a class="btn btn-outline-dark mt-auto" href="#" data-bs-toggle="modal" data-bs-target="#applicationModal">Ver empleo</a>
                            </div>
                        </div>
                    </div>
                </div>

<!--Septima carta -->                
                <div class="col mb-5" data-category="ventas">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Productos Artesanales</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                $40.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"> <a class="btn btn-outline-dark mt-auto" href="#" data-bs-toggle="modal" data-bs-target="#applicationModal">Ver empleo</a>
                            </div>
                        </div>
                    </div>
                </div>
                
         <!-- Limpieza -->
                <div class="col mb-5" data-category="limpieza">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="Limpieza" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Servicios de Limpieza</h5>
                                $25.00 - $70.00
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#" data-toggle="modal" data-target="#contactModal">Ver empleo</a></div>
                        </div>
                    </div>
                </div>
 <!-- Cuidado de Mascotas -->
 <div class="col mb-5" data-category="cuidado-mascotas">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="Cuidado de Mascotas" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Cuidado y Paseo de Mascotas</h5>
                                $30.00 - $50.00
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"> <a class="btn btn-outline-dark mt-auto" href="#" data-bs-toggle="modal" data-bs-target="#applicationModal">Ver empleo</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Reparaciones y Mantenimiento -->
                <div class="col mb-5" data-category="reparaciones">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="Reparaciones" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Reparaciones y Mantenimiento</h5>
                                $50.00 - $100.00
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#" data-toggle="modal" data-target="#contactModal">Ver empleo</a></div>
                        </div>
                    </div>
                </div>

                <!-- Comida y Catering -->
                <div class="col mb-5" data-category="comida-catering">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="Comida y Catering" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Comida a Domicilio o Catering</h5>
                                $40.00 - $80.00
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"> <a class="btn btn-outline-dark mt-auto" href="#" data-bs-toggle="modal" data-bs-target="#applicationModal">Ver empleo</a>
                            </div>
                        </div>
                    </div>
                </div>

                 <!-- Ventas y Comercio -->
                 <div class="col mb-5" data-category="ventas">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="Ventas y Comercio" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Productos Ecológicos</h5>
                                $40.00
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"> <a class="btn btn-outline-dark mt-auto" href="#" data-bs-toggle="modal" data-bs-target="#applicationModal">Ver empleo</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Asistencia Personal -->
                <div class="col mb-5" data-category="asistencia-personal">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="Asistencia Personal" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Asistencia Personal</h5>
                                $30.00 - $60.00
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"> <a class="btn btn-outline-dark mt-auto" href="#" data-bs-toggle="modal" data-bs-target="#applicationModal">Ver empleo</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Servicios de Belleza -->
                <div class="col mb-5" data-category="belleza">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="Servicios de Belleza" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Servicios de Belleza</h5>
                                $50.00 - $100.00
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"> <a class="btn btn-outline-dark mt-auto" href="#" data-bs-toggle="modal" data-bs-target="#applicationModal">Ver empleo</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Otros Empleos -->
                <div class="col mb-5" data-category="otros-empleos">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="Otros Empleos" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Fotografía y Edición de Fotos</h5>
                                $120.00 - $280.00
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"> <a class="btn btn-outline-dark mt-auto" href="#" data-bs-toggle="modal" data-bs-target="#applicationModal">Ver empleo</a>
                            </div>
                        
                        </div>
                    </div>
                </div>




            </div>
        </div>

        
    </section>


      <!-- Modal para postular un nuevo trabajo -->
      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center" id="jobContainer">
      <div class="modal fade" id="postJobModal" tabindex="-1" aria-labelledby="postJobModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="postJobModalLabel">Postular un Nuevo Trabajo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="postJobForm">
                        <div class="mb-3">
                            <label for="jobTitle" class="form-label">Título del Trabajo</label>
                            <input type="text" class="form-control" id="jobTitle" required>
                        </div>
                        <div class="mb-3">
                            <label for="jobDescription" class="form-label">Descripción del Trabajo</label>
                            <textarea class="form-control" id="jobDescription" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="jobPrice" class="form-label">Precio</label>
                            <input type="text" class="form-control" id="jobPrice" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="submitJob">Subir Empleo</button>
                </div>
            </div>
        </div>
    </div>

<!-- Modal para postulación -->
<div class="modal fade" id="applicationModal" tabindex="-1" aria-labelledby="applicationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="applicationModalLabel">Formulario de Postulación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="applicationForm">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre Completo</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="message" rows="3" required></textarea>
                    </div>
                    <div id="responseMessage" class="alert alert-success" style="display: none;"></div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="submitApplication">Enviar Postulación</button>
            </div>
        </div>
    </div>
</div>

<script>document.getElementById('submitJob').addEventListener('click', function() {
    const jobTitle = document.getElementById('jobTitle').value;
    const jobDescription = document.getElementById('jobDescription').value;
    const jobPrice = document.getElementById('jobPrice').value;

    if (jobTitle && jobDescription && jobPrice) {
        // Crear una nueva tarjeta con la información del trabajo
        const newJobCard = document.createElement('div');
        newJobCard.classList.add('col', 'mb-5');
        newJobCard.setAttribute('data-category', 'nueva-postulacion'); // Puedes cambiar esto según sea necesario
        newJobCard.innerHTML = `
            <div class="card h-100">
                <div class="card-body p-4">
                    <div class="text-center">
                        <h5 class="fw-bolder">${jobTitle}</h5>
                        <p>${jobDescription}</p>
                        <p>$${jobPrice}</p>
                    </div>
                </div>
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center">
                        <a class="btn btn-outline-dark mt-auto" href="#" data-bs-toggle="modal" data-bs-target="#applicationModal">Ver empleo</a>
                    </div>
                </div>
            </div>
        `;

        // Agregar la nueva tarjeta al contenedor de trabajos
        document.getElementById('jobContainer').appendChild(newJobCard);

        // Limpiar los campos del formulario
        document.getElementById('postJobForm').reset();

        // Cerrar el modal
        const modal = bootstrap.Modal.getInstance(document.getElementById('postJobModal'));
        modal.hide();
    } else {
        alert('Por favor, completa todos los campos.');
    }
});
</script>

<script>
    document.getElementById('submitApplication').addEventListener('click', function() {
        // Obtener los valores de los campos
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;

        // Validar que los campos no estén vacíos
        if (name && email && message) {
            // Mostrar el mensaje de éxito
            const responseMessage = document.getElementById('responseMessage');
            responseMessage.style.display = 'block';
            responseMessage.innerText = '¡Postulación enviada con éxito!';

            // Limpiar los campos del formulario
            document.getElementById('applicationForm').reset();
        } else {
            // Mostrar un mensaje de error si los campos están vacíos
            const responseMessage = document.getElementById('responseMessage');
            responseMessage.style.display = 'block';
            responseMessage.classList.remove('alert-success');
            responseMessage.classList.add('alert-danger');
            responseMessage.innerText = 'Por favor, completa todos los campos.';
        }
    });
</script>

    <script>
        function filterProducts() {
            const filterValue = document.getElementById('categoryFilter').value;
            const products = document.querySelectorAll('.col');

            products.forEach(product => {
                if (filterValue === 'all' || product.getAttribute('data-category') === filterValue) {
                    product.style.display = 'block'; // Muestra el producto
                } else {
                    product.style.display = 'none'; // Oculta el producto
                }
            });
        }
    </script>


    <!-- Agregar Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>



    <?php include("./assets/fragmentos/footer.php"); ?>
</body>
<?php include ("./assets/fragmentos/scripts.php"); ?>
</html>
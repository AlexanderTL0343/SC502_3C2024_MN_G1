<!DOCTYPE html>
<html lang="es">

<?php include ("./assets/fragmentos/head.php"); ?>
<body>
<?php include ("./assets/fragmentos/header.php"); ?>
    
<section class="bg-light py-5">
    <div class="p-5 lc-block shadow rounded-3 col-xl-6 offset-xl-3">
        <h3 class="card-title text-center mb-5 font-weight-bold fs-3">Regístrate para acceder a nuestros servicios:</h3>

        <form class="form-horizontal" id="registroUsuario" method="POST" enctype="multipart/form-data">
            <div class="form-group mb-4">
                <label for="cedula">Cedula:</label>
                <input name="cedula" type="text" class="form-control" id="cedula" placeholder="Ingrese su cedula" required/>
                <p class="text-danger"></p>
            </div>

            <div class="form-group mb-4">
                <label for="nombre">Nombre:</label>
                <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Ingrese su Nombre" required/>
                <p class="text-danger"></p>
            </div>

            <div class="form-group mb-4">
                <label for="apellido1">Apellido:</label>
                <input name="apellido1" type="text" class="form-control" id="apellido1" placeholder="Ingrese su Apellido" required/>
                <p class="text-danger"></p>
            </div>

            <div class="form-group mb-4">
                <label for="email">Email:</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Ingrese su Email" required/>
                <p class="text-danger"></p>
            </div>
            
            <div class="form-group mb-4">
                <label for="contrasena">Contraseña:</label>
                <input name="contrasena" type="password" class="form-control" id="contrasena" placeholder="Ingrese una contraseña" required/>
                <p class="text-danger"></p>
            </div>

            <div class="form-group mb-4">
                <label for="edad">Edad:</label>
                <input name="edad" type="number" class="form-control" id="edad" placeholder="Ingrese el número de teléfono"/>
                <p class="text-danger"></p>
            </div>

            <div class="form-group mb-4">
                <label for="direccion">Dirección:</label>
                <input name="direccion" type="text" class="form-control" id="direccion" placeholder="Ingrese su dirección"/>
                <p class="text-danger"></p>
            </div>

            <div class="form-group mb-4">
                <label for="telefono">Teléfono:</label>
                <input name="telefono" type="number" class="form-control" id="telefono" placeholder="Ingrese el número de teléfono"/>
                <p class="text-danger"></p>
            </div>


            <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-lg btn-primary">Registrarse</button>
                </div>
        </form>
    </div>
  </section>

  <?php include ("./assets/fragmentos/footer.php"); ?>
  </body>
  <?php include ("./assets/fragmentos/scripts.php"); ?>
</html>

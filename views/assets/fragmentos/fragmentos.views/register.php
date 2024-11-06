
<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="/SC502_3C2024_MN_G1/views/assets/css/index.css">
<?php include ("./assets/fragmentos/head.php"); ?>
<body>
<?php include ("./assets/fragmentos/header.php"); ?>

    

<section class="bg-light py-5">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <div class="p-5 lc-block shadow rounded-3 col-xl-6 offset-xl-3">
        <h3 class="card-title text-center mb-5 font-weight-bold fs-3">Regístrate para acceder a nuestros servicios:</h3>

        <form class="form-horizontal" id="formulario" method="POST" action="../php/registroUser.php" enctype="multipart/form-data">

            <div class="form-group mb-4">
                <label for="Nombre">Nombre:</label>
                <input name="Nombre" type="text" class="form-control" id="Nombre" placeholder="Ingrese su Nombre" required/>
                <p class="text-danger"></p>
            </div>

            <div class="form-group mb-4">
                <label for="Apellido">Apellido:</label>
                <input name="Apellido" type="text" class="form-control" id="apellido" placeholder="Ingrese su Apellido" required/>
                <p class="text-danger"></p>
            </div>

            <div class="form-group mb-4">
                <label for="Email">Email:</label>
                <input name="Email" type="email" class="form-control" id="Email" placeholder="Ingrese su Email" required/>
                <p class="text-danger"></p>
            </div>

            
            <div class="form-group mb-4">
                <label for="Contrasena">Contraseña:</label>
                <input name="Contrasena" type="password" class="form-control" id="Contrasena" placeholder="Ingrese una contraseña" required/>
                <p class="text-danger"></p>
            </div>

            <div class="form-group mb-4">
                <label for="Edad">Edad:</label>
                <input name="Edad" type="number" class="form-control" id="Edad" placeholder="Ingrese el número de teléfono"/>
                <p class="text-danger"></p>
            </div>

            <div class="form-group mb-4">
                <label for="Direccion">Dirección:</label>
                <input name="Direccion" type="text" class="form-control" id="Direccion" placeholder="Ingrese su dirección"/>
                <p class="text-danger"></p>
            </div>

            <div class="form-group mb-4">
                <label for="Telefono">Teléfono:</label>
                <input name="Telefono" type="number" class="form-control" id="Telefono" placeholder="Ingrese el número de teléfono"/>
                <p class="text-danger"></p>
            </div>


            <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-lg btn-primary">Registrarse</button>
                </div>
        </form>
    </div>
  </section>


  <?php include ("./views/assets/fragmentos/footer.php"); ?>

  </body>
</html>
     <script src="../bootstrap/js/bootstrap.min.js"></script>
<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<?php include("./assets/fragmentos/head.php"); ?>

<body>

<?php
    if (!isset($_SESSION['usuario'])) {
        // Redirige al login si no hay sesión activa
        include("./assets/fragmentos/header.php");

    } elseif ($_SESSION['usuario']['nombreRol'] === 'ADMIN') {//donde dice [usuario] es la variable de sesion, esta variable almacena un arreglo asociativo
        include("./assets/fragmentos/header_admin.php");      //[nombreRol] es la llave en el arreglo, es deci (llave=>valor), entonces buscamos el valor de nombreRol
    } elseif ($_SESSION['usuario']['nombreRol'] === 'RECLUTADOR') {
        include("./assets/fragmentos/header_reclutador.php");
    } elseif ($_SESSION['usuario']['nombreRol'] === 'POSTULANTE') {
        include("./assets/fragmentos/header_postulante.php");
    } elseif ($_SESSION['usuario']['nombreRol'] === '') {
        include("./assets/fragmentos/header.php");
    }
?>

  <section class="d-flex flex-fill align-items-center justify-content-center ">
    <form class="w-25">
      <div class="mb-3">
        <label for="formFile" class="form-label">Seleccione un Archivo</label>
        <input class="form-control" type="file" id="formFile">
      </div>
      </div>
      <div class="mb-3">
        <label for="exampleInputText1" class="form-label">Profesion</label>
        <input type="text" class="form-control" id="exampleInputTex1">
      </div>
      <div class="mb-3">
        <label for="exampleInputText1" class="form-label">Dirreccion</label>
        <input type="text" class="form-control" id="exampleInputTex1">
      </div>
      <div class="mb-3">
        <label for="exampleInputNumber1" class="form-label">Numero de Telefono</label>
        <input type="number" class="form-control" id="exampleInputNumber1">
      </div>
      <div class="mb-3">
        <label for="exampleInputText1" class="form-label">Dirreccion</label>
        <input type="text" class="form-control" id="exampleInputTex1">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
  </section>
  <?php include("./assets/fragmentos/footer.php"); ?>
</body>
<?php include("./assets/fragmentos/scripts.php"); ?>

</html>
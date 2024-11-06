<!DOCTYPE html>
<html lang="en">
<?php include ("../../fragmentos/head.php"); ?>
<link rel="stylesheet" href="/SC502_3C2024_MN_G1-Alexander/views/assets/css/index.css">
<body>
<?php include ("../../fragmentos/header.php"); ?>
<section style="margin-top: 100px;">
<form>
<div class="mb-3">
  <label for="formFile" class="form-label">Seleccione un Archivo</label>
  <input class="form-control" type="file" id="formFile">
</div>
</div>
    <div class="mb-3">
    <label for="exampleInputText1" class="form-label">Profesion</label>
    <input type="text" class="form-control" id="exampleInputTex1" >
  </div>
<div class="mb-3">
    <label for="exampleInputText1" class="form-label">Dirreccion</label>
    <input type="text" class="form-control" id="exampleInputTex1" >
  </div>
    <div class="mb-3">
    <label for="exampleInputNumber1" class="form-label">Numero de Telefono</label>
    <input type="number" class="form-control" id="exampleInputNumber1" >
  </div>
    <div class="mb-3">
    <label for="exampleInputText1" class="form-label">Dirreccion</label>
    <input type="text" class="form-control" id="exampleInputTex1" >
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
<?php include ("../../fragmentos/footer.php"); ?>
</body>
<?php include ("../../fragmentos/scripts.php"); ?>
</html>
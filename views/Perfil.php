<!DOCTYPE html>
<html lang="es">
<?php include ("./assets/fragmentos/head.php"); ?>
<body>
<?php include ("./assets/fragmentos/header.php"); ?>
<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="./assets/imgs/Imagen1.png" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">Nombre User</h5>
            <p class="text-muted mb-1">Profesion</p>
            <p class="text-muted mb-4">Direccion</p>
            <div class="d-flex justify-content-center mb-2">
              <a href="./editar.php">
              <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary ms-1">Editar</button>
              </a>
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="bi bi-instagram"></i>
                <p class="mb-0">****</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="bi bi-facebook"></i>
                <p class="mb-0">****</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nombre Completo</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">****</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Correo Electronico</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">****</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Numero de telefo</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">****</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Edad</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">****</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">Trabajos</span> Trabajos Terminados
                </p>
                <p class="mb-1" style="font-size: .77rem;">****</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">***</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">****</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">****</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">****</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">Trabajos</span> Trabajos en oferta
                </p>
                <p class="mb-1" style="font-size: .77rem;">***</p>
                
                <p class="mt-4 mb-1" style="font-size: .77rem;">***</p>
                
                <p class="mt-4 mb-1" style="font-size: .77rem;">***</p>
                
                <p class="mt-4 mb-1" style="font-size: .77rem;">****</p>
                
                <p class="mt-4 mb-1" style="font-size: .77rem;">****</p>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include ("./assets/fragmentos/footer.php"); ?>
</body>
<?php include ("./assets/fragmentos/scripts.php"); ?>
</html>

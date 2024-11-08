<?php
session_start();

?>
<!DOCTYPE html>
<html lang="es">
<section class="d-flex flex-fill align-items-center justify-content-center">
  <div class="container px-4 py-5 text-center text-lg-start">
    <div class="row gx-lg-5 align-items-center">
      
      <!-- Título principal -->
      <div class="col-lg-6 mb-5 mb-lg-0">
        <h1 class="display-3 fw-bold ls-tight">
          Comienza a destacar <br />
          <span class="text-primary">tus trabajos</span>
        </h1>
      </div>

      <!-- Formulario de registro -->
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body py-5 px-md-5">
            <form method="POST" action="../assets/login.php">
            
              <div class="row">
                <div class="col-md-6 mb-4">
                 

              <div class="form-outline mb-4">
                
                <label class="form-label"for="form3Example5" for="email">Correo electrónico</label>
                <input 
                type="email" 
                id="email" 
                placeholder="Digite su correo "
                class="form-control"
                nombre="email"
                required />
              </div>

              <div class="form-outline mb-4">
              <label class="form-label" for="form3Example4">Contraseña</label>
                <input 
                type="password" 
                id="password" 
                placeholder="Digite contraseña "
                class="form-control" 
                nombre="password"
                required />
                

                

              </div>
              
              <a href="#" class="forgot-password">He olvidado mi contraseña?</a><br />
              </div>
              
              <button type="submit" class="btn btn-primary btn-block mb-4">Inciar Sesión</button><br />
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
</html>

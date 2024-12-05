<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<?php 
include("./assets/fragmentos/admin401.php");
include("./assets/fragmentos/head.php"); 
?>

<body>
    <?php include("../config/session.php"); ?> <!--PARA COLOCAR EL HEADER DEPENDIENDO DEL ROL-->

   <section class=" py-5 d-flex flex-row wrap justify-content-center align-items-center">
   <div class="test-reporte w-25 h-25 m-3 bg-light rounded-3 p-2">
        <canvas id="myChart"></canvas>
    </div>
    <div class="test-reporte w-25 h-25 m-3 bg-light rounded-3 p-2">
        <canvas id="graf-cantidadUsuarios"></canvas>
    </div>
    <div class="test-reporte w-25 h-25 m-3 bg-light rounded-3 p-2">
        <canvas id="graf-usuarioPorEdad"></canvas>
    </div>
   </section>

    <?php include("./assets/fragmentos/footer.php"); ?>
</body>
<?php include("./assets/fragmentos/scripts.php"); ?>
<script src="./assets/js/reportes.js"></script>
</html>
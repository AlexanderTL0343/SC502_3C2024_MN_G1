<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<?php include("./assets/fragmentos/head.php"); ?>

<body>

    <?php include("../config/session.php"); ?>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tabla de Usuarios</h5>
                            <p class="card-text">
                            <div class="table-responsive">
                                <table id="tblUserCrud" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Vehículo</th>
                                            <th>Veces Alquilado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div style="justify-content: center align-items-center;">
        <div class="form-group col-md-12">
            <input type="submit" class="form-control btn btn-danger"
                value="Eliminar">
            <input type="submit" class="form-control btn btn-warning"
                value="Modificar">
            <input type="submit" class="form-control btn btn-success"
                value="Agregar">
        </div>

        <br>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Tabla de Publicaciones</h5>
                                <p class="card-text">
                                <div class="table-responsive">
                                    <table id="tblPublicacionesCrud" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Vehículo</th>
                                                <th>Veces Alquilado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div style="justify-content: center align-items-center;">
            <div class="form-group col-md-12">
                <input type="submit" class="form-control btn btn-danger"
                    value="Eliminar">
                <input type="submit" class="form-control btn btn-warning"
                    value="Modificar">
                <input type="submit" class="form-control btn btn-success"
                    value="Agregar">
            </div>

            <br>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Tabla de Roles</h5>
                                    <p class="card-text">
                                    <div class="table-responsive">
                                        <table id="tblRolesCrud" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nombre</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div style="justify-content: center align-items-center;">
                <div class="form-group col-md-12">
                    <input type="submit" class="form-control btn btn-danger"
                        value="Eliminar">
                    <input type="submit" class="form-control btn btn-warning"
                        value="Modificar">
                    <input type="submit" class="form-control btn btn-success"
                        value="Agregar">
                </div>

                <br>

                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Tabla de Calificaciones</h5>
                                        <p class="card-text">
                                        <div class="table-responsive">
                                            <table id="tblCalificacionesCrud" class="table table-striped table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Nombre</th>
                                                        <th>Apellido</th>
                                                        <th>Vehículo</th>
                                                        <th>Veces Alquilado</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>

                <div style="justify-content: center align-items-center;">
                    <div class="form-group col-md-12">
                        <input type="submit" class="form-control btn btn-danger"
                            value="Eliminar">

                    </div>

                    <?php include("./assets/fragmentos/footer.php"); ?>
</body>
<?php include("./assets/fragmentos/scripts.php"); ?>
<script src="./assets/js/tablas.js"></script>

</html>
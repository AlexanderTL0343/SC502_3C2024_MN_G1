<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<?php include("./assets/fragmentos/head.php"); ?>

<body>

    <?php include("../config/session.php"); ?>
    <!-- Formulario de modificacion de usuarios -->
    <div class="col-md-12" id="formulario_update">
        <div class="card card-dark">
            <div class="card-header">
                <h3 class="card-title">Modificando usuarios...</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md 10">
                        <form name="usuario_update" id="usuario_update" method="POST">
                            <!--<input type="hidden" class="form-control" id="EId" name="id">-->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="id">ID</label>
                                        <input type="text" class="form-control" id="Eid"
                                            name="Eid" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" class="form-control" id="Enombre"
                                            name="Enombre" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="edad">Edad</label>
                                        <input type="text" class="form-control" id="Eedad"
                                            name="Eedad" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="email">Correo</label>
                                        <input type="text" class="form-control" id="Eemail"
                                            name="Eemail" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="profesion">Profesion</label>
                                        <select class="form-control" id="Eprofesion" name="Eprofesion" required>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="rol">Rol</label>
                                        <select class="form-control" id="Erol" name="Erol" required>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                </div>





                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="submit" class="form-control btn btn-warning"
                                        value="Modificar">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="button" class="form-control btn btn-info"
                                        value="Cancelar" onclick="cancelarForm()">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
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
                                            <th>Edad</th>
                                            <th>Email</th>
                                            <th>Profesion</th>
                                            <th>Fecha Registro</th>
                                            <th>Rol</th>
                                            <th>Estado</th>
                                            <th>Administrar</th>
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
    <br>

    <!-- Formulario de modificacion de publicaciones -->
    <div class="col-md-12" id="formulario_update_p">
        <div class="card card-dark">
            <div class="card-header">
                <h3 class="card-title">Modificando publicaciones...</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md 10">
                        <form name="publi_update" id="publi_update" method="POST">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="idp">ID publicacion</label>
                                        <input type="text" class="form-control" id="Pid"
                                            name="Pid" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="usuario">Usuario</label>
                                        <input type="text" class="form-control" id="Puser"
                                            name="Puser" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="titulo">Titulo</label>
                                        <input type="text" class="form-control" id="Ptitulo"
                                            name="Ptitulo" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="descripcion">Descripcion</label>
                                        <input type="text" class="form-control" id="Pdescripcion"
                                            name="Pdescripcion" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="ubicacion">Ubicacion</label>
                                        <input type="text" class="form-control" id="Pubicacion"
                                            name="Pubicacion" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="precio">Precio</label>
                                        <input type="text" class="form-control" id="Pprecio"
                                            name="Pprecio" required>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="submit" class="form-control btn btn-warning"
                                        value="Modificar">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="button" class="form-control btn btn-info"
                                        value="Cancelar" onclick="cancelarFormPubli()">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
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
                                            <th>Usuario</th>
                                            <th>Titulo</th>
                                            <th>Descripcion</th>
                                            <th>Fecha Publicacion</th>
                                            <th>Ubicacion</th>
                                            <th>Precio Aprox</th>
                                            <th>Estado</th>
                                            <th>Administrar</th>
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
                                            <th>Publicacion</th>
                                            <th>Usuario</th>
                                            <th>Puntaje</th>
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
    <br>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tabla de Profesiones</h5>
                            <p class="card-text">
                            <div class="table-responsive">
                                <table id="tblProfeCrud" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Administrar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot> 
                                        <tr> 
                                            <td colspan="3"> 
                                                <button type="button" class="btn btn-primary">Agregar</button> 
                                            </td> 
                                        </tr> 
                                    </tfoot>
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
    <br>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tabla de Estados</h5>
                            <p class="card-text">
                            <div class="table-responsive">
                                <table id="tblestadoCrud" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
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
    <br>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tabla de Categorias</h5>
                            <p class="card-text">
                            <div class="table-responsive">
                                <table id="tblcateCrud" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                            <th>Administrar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot> 
                                        <tr> 
                                            <td colspan="3"> 
                                                <button type="button" class="btn btn-primary">Agregar</button> 
                                            </td> 
                                        </tr> 
                                    </tfoot>
                                </table>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("./assets/fragmentos/footer.php"); ?>
</body>
<?php include("./assets/fragmentos/scripts.php"); ?>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="plugins/DataTables/datatables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/bootbox/bootbox.min.js"></script>
<script src="plugins/toastr/toastr.js"></script>
<script src="./assets/js/tablas.js"></script>


</html>
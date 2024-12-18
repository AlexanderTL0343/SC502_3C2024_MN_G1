<?php
include '../models/TablaPublicaciones.php';

switch ($_GET['op']) {

    case 'LlenarTablaPubli':
                $tabla = new TablaPubli();
                $clientes = $tabla->listarTablaPubli();
                $data = array();
                foreach ($clientes as $reg) {
                    $data[] = array(
                        "0" => $reg->getIdPublicacionesPk(),
                        "1" => $reg->getIdUsuarioFk(),
                        "2" => $reg->getTituloPublicacion(),
                        "3" => $reg->getDescripcion(),
                        "4" => $reg->getFechaPublicacion(),
                        "5" => $reg->getUbicacion(),
                        "6" => $reg->getPrecioAprox(),
                        "7" => $reg->getEstado(),
                        "8" => '<button class="btn btn-warning" id="modificarPubli">Modificar</button>  '.
                                '<button class="btn btn-danger" id="eliminarPubli">Eliminar</button> '
                    );
                }
                $resultados = array(
                    "sEcho" => 1,
                    "iTotalRecords" => count($data),
                    "iTotalDisplayRecords" => count($data),
                    "aaData" => $data
                );
                echo json_encode($resultados);
                break;
            
    case 'editar':
                $id = isset($_POST["Pid"]) ? trim($_POST["Pid"]) : "";
    
                $usuario = isset($_POST["Puser"]) ? trim($_POST["Puser"]) : "";
                $titulo = isset($_POST["Ptitulo"]) ? trim($_POST["Ptitulo"]) : "";
                $descripcion = isset($_POST["Pdescripcion"]) ? trim($_POST["Pdescripcion"]) : "";
                $ubicacion = isset($_POST["Pubicacion"]) ? trim($_POST["Pubicacion"]) : "";
                $precio = isset($_POST["Pprecio"]) ? trim($_POST["Pprecio"]) : "";
            
                $publicacion = new TablaPubli();
    
                $encontrado = $publicacion->verificarExistenciaDb($id);
    
                if ($encontrado == 1) {
                    $publicacion->llenarCampos($id);
                    $publicacion->setIdUsuarioFk($usuario);
                    $publicacion->setTituloPublicacion($titulo);
                    $publicacion->setDescripcion($descripcion);
                    $publicacion->setUbicacion($ubicacion);
                    $publicacion->setPrecioAprox($precio);
            
                    $modificados = $publicacion->actualizarPublicaciones();
                    if ($modificados > 0) {
                        echo 1;
                    } else {
                        echo 0;
                    }
                } else {
    
                    echo 2; 
                }
            break;
            case 'eliminar':
                $id = isset($_POST['id']) ? trim($_POST['id']) : '';
<<<<<<< Updated upstream
                error_log('ID recibido en eliminar: ' . $id);
                if ($id === '') {
                    echo 2; 
=======
                error_log("Datos enviados al controlador: " . print_r($_POST, true)); // Ver datos enviados
                error_log("ID recibido para eliminar: " . $id);
            
                if ($id === '') {
                    error_log("Error: ID de publicación no proporcionado.");
                    echo json_encode(['status' => 'error', 'message' => 'ID de publicación no proporcionado.']);
>>>>>>> Stashed changes
                    break;
                }
            
                $publicacion = new TablaPubli();
<<<<<<< Updated upstream
                $encontrado = $publicacion->verificarExistenciaDb($id);
            
                if ($encontrado == 1) {
                    $eliminado = $publicacion->eliminarPublicacion($id);
            
                    if ($eliminado > 0) {
                        echo 1; 
                    } else {
                        echo 0; 
                    }
                } else {
                    echo 2; 
                }
                break;
=======
                $encontrado = $publicacion->verificarExistenciaDb($id); // Verificar si la publicación existe
                error_log("Resultado de verificarExistenciaDb: " . ($encontrado ? "Publicación encontrada" : "Publicación no encontrada"));
            
                if ($encontrado) {
                    $eliminado = $publicacion->eliminarPublicacion($id); // Eliminar la publicación
            
                    if ($eliminado > 0) {
                        error_log("Publicación con ID $id eliminada exitosamente.");
                        echo json_encode(['status' => 'success', 'message' => 'Publicación eliminada exitosamente.']);
                    } else {
                        error_log("Error: No se pudo eliminar la publicación con ID $id.");
                        echo json_encode(['status' => 'error', 'message' => 'No se pudo eliminar la publicación.']);
                    }
                } else {
                    error_log("Error: Publicación con ID $id no encontrada.");
                    echo json_encode(['status' => 'error', 'message' => 'Publicación no encontrada.']);
                }
            break;
>>>>>>> Stashed changes
            }
?>
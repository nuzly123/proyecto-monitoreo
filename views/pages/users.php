<?php
$item = null;
$value = null;
$users = UserController::ctrShowUsers($item, $value); //lista de usuarios
$objItem = new ItemController();
$objUser = new UserController();
$cont = 1;
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Configuración</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Configuración</a></li>
                    <li class="breadcrumb-item active">Usuarios</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Usuarios</h3>
                <div class="card-tools">
                    <button type="submit" class="btn btn-sm btn-default" name="addButton" data-toggle="modal" data-target="#modal-newUser">
                        <span class="fas fa-plus"></span>
                    </button>
                </div>
            </div>
            <?php include('views/pages/modals/new_User.php');
            ?>
            <div class="card-body">
                <table id="example" class="table table-striped table-datatable dt-responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Usuario</th>
                            <th class="text-center">Rol</th>
                            <th class="text-center">Estacion</th>
                            <th class="text-center">Último Login</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //Tabla de usuarios:
                        foreach ($users as $key => $user) { ?>
                            <tr>
                                <td><?php echo $cont ?></td>
                                <td><?php echo $objUser->crtShowUserName($user["id_empleado"])?></td>
                                <td><?php echo $user["usuario"] ?></td>
                                <td class="text-center"><?php echo $objItem->ctrShowRolItem("rol","id", $user["id_rol"]) ?></td>
                                <td class="text-center"><?php echo $objItem->ctrShowOficinaItem("codigo", "id", $user["id_oficina"]) ?></td>
                                <td class="text-center"><?php echo isset($user["last_login"]) ? $user["last_login"] : "N/D" ?></td>
                                <td>
                                    <input type="hidden" name="idEmpleado" value="<?php echo $empleado['id']; ?>">
                                    <?php if ($user['estado'] != 1) { ?>
                                        <button type="submit" class="btn btn-outline-danger btn-xs tablabutton btnActivar" name="activar" idUsuario=<?php $user["id"] ?>>
                                            <span class="fas fa-times"></span>
                                        </button>
                                    <?php } else { ?>
                                        <button type="submit" class="btn btn-outline-success btn-xs tablabutton btnActivar" name="desactivar" idUsuario=<?php $user["id"] ?>>
                                            <span class="fas fa-check"></span>
                                        </button>
                                    <?php } ?>
                                    <button type="submit" class="btn btn-xs btn-outline-warning tablabutton" name="editButton">
                                        <span class="fas fa-pen"></span>
                                    </button>
                                    <button type="submit" class="btn btn-xs btn-outline-info tablabutton" name="viewEmpleado">
                                        <span class="fas fa-file-alt"></span>
                                    </button>
                                </td>
                            </tr>

                        <?php $cont++;
                        } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>